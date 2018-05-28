<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();
/*
  Plugin Name: jh-itworks-usercounter
 * Description: see readme.txt
 * Version: 1.0
 * Author: Jochen Heimüller
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action("wp_head", "counter");

    function toggle(int $postID) {
    $toggle = Service::getInstance()->getSessionStoredValue('toggle', []);
    $toggled = boolval($toggle[$postID]);
    //foreach ($toggle as $key =>$value){ //one button closes another one if open
    //   $toggle[$key] = false;
    //}
    $toggle[$postID] = !$toggled;

    Service::getInstance()->setSessionStoredValue('toggle', $toggle);
}

add_action('init', function() {

    if (isset($_POST['hiddenB']) && is_numeric($_POST['hiddenB'])) {
        toggle(intval($_POST['hiddenB']));
    }
});

add_action( 'wp_enqueue_scripts', function(){
    wp_register_script('scroll', plugins_url('js/autoscroll.js', __FILE__), array(),false, true);    
    wp_enqueue_script('scroll');
});

class Service {

    private function __construct() {
    }
    private function __clone() {
    }

    private static $self;

    /**
     * 
     * @return Service
     */
    public static function getInstance() {
        if (!(static::$self instanceof self)) {
            static::$self = new self();
        }
        return static::$self;
    }

    public function getSessionStoredValue($key, $default) {

        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        $_SESSION[$key] = $default;
        return $default;
    }

    public function setSessionStoredValue($key, $value) {
        $_SESSION[$key] = $value;
        return $value;
    }

    public function getDBStoredValue($key, string $default) {
        return get_option($key, $default);
    }

    public function setDBStoredValue($key, string $value) {

        if (!get_option($key, false)) {
            add_option($key, $value);
        } else {
            update_option($key, $value);
        }
        return $value;
    }

    public function getCurrentPostCount(int $postID) {
        $current_views = json_decode($this->getDBStoredValue('awepop_views', '[]'), JSON_OBJECT_AS_ARRAY);
        if (!is_array($current_views)) {
            $current_views = [];
        }
        if (!isset($current_views[$postID])) {
            $current_views[$postID] = 0;
        }
        if (isset($current_views[$postID]) && is_numeric($current_views[$postID])) {
            $count = $current_views[$postID];
        } else {
            $count = 0;
        }
        return $count;
    }

    public function incrementCurrentPostCount(int $postID) {
        $current_views = json_decode($this->getDBStoredValue('awepop_views', '[]'), JSON_OBJECT_AS_ARRAY);
        if (!is_array($current_views)) {
            $current_views = [];
        }
        if (!isset($current_views[$postID])) {
            $current_views[$postID] = 0;
        }
        $count = $this->getCurrentPostCount($postID);
        $current_views[$postID] = ++$count;
        Service::getInstance()->setDBStoredValue('awepop_views', json_encode($current_views));
    }

}

function counter() {
    global $post;
    if (!is_front_page()) {
        Service::getInstance()->incrementCurrentPostCount($post->ID);
    }
}

if (isset($_POST['designchoice'])) {
    global $post;
    Service::getInstance()->setSessionStoredValue('designchoice', $_POST['designchoice']);
    $optionName = 'design';
    $optionValue = Service::getInstance()->getSessionStoredValue('designchoice', 'number');

    if (!get_option($optionName, false)) {
        add_option($optionName, $optionValue);
    } else {
        update_option($optionName, $optionValue);
    }

    add_action('admin_notices', function () use($optionValue) {
        $class = 'notice  notice-success is-dismissible';
        $message = __('Die Änderung wurde gespeichert "' . $optionValue . '"', 'sample-text-domain');
        printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_html($message));
    });
}

function addMenu() {
    add_menu_page("exOptions", "UserCount Options", 4, "ex-Options", "exMenu");
    add_action('admin_init', 'custom_uc_settings');
}

function exMenu() {
    require_once(join(DIRECTORY_SEPARATOR, [
                __DIR__,
                'inc',
                'adminpage.php'
    ]));
}

add_action("admin_menu", "addMenu");

function custom_uc_settings() {
    register_setting('uc-settings-group', 'uc_display_rb');
    add_settings_section('uc_rb_option', 'Display Options', 'uc_rb_option', 'exOptions');
}

function uc_rb_option() {
    echo 'Choose the design of your counter:';
}

add_shortcode('counter', 'user_counter_function');

function getClasses() {
    require_once(join(DIRECTORY_SEPARATOR, [
                __DIR__,
                'hiddenbutton.php'
    ]));
    require_once(join(DIRECTORY_SEPARATOR, [
                __DIR__,
                'number.php'
    ]));
    require_once(join(DIRECTORY_SEPARATOR, [
                __DIR__,
                'floating.php'
    ]));
}

function user_counter_function() {
    getClasses();
    $postDesign = get_option('design', 'floating');

    if ($postDesign == 'floating') {
        global $post;
        new Floating($post->ID);
    } elseif ($postDesign == 'number') {
        global $post;
        new Number($post->ID);
    } elseif ($postDesign == 'hidden') {
        hidB();
    }
}

function hidB() {
    global $post;
    global $bunr;
    ++$bunr;
    $button[$bunr] = new HiddenButton();
    $button[$bunr]->output($post->ID);
}
