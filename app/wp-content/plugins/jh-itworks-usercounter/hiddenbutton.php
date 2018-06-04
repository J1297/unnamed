<?php

class HiddenButton {

    function __construct() {
        global $post;
        $params = ['scroll' => 1];

        if (is_array($_GET)) {
            $params = array_merge($params, $_GET);
        }

        $query = http_build_query($params);
        //takes url and adds variable $query at the end
        $url = $_SERVER['REQUEST_URI'] . $query ? '?' . $query : '';
        if (!$post) {
            return;
        }
        ?>
        <form method='POST' action=''>
            <button type='submit' class='button' name='hiddenB' id='hiddenB' formaction="#post-<?= $post->ID; ?>" value="<?= $post->ID; ?>" /> Usercount </button>
        </form>
        <?php
    }

    public function output(int $postID) {
        $toggle = Service::getInstance()->getSessionStoredValue('toggle', []);
        $shown = isset($toggle[$postID]) && boolval($toggle[$postID]);
        if ($shown) {
            $count = Service::getInstance()->getCurrentPostCount($postID);

            $html = [];
            $html[] = '<p>';
            $html[] = 'Total User number: ' . $count;
            $html[] = '</p>';

            echo join(PHP_EOL, $html);
        }
    }

}
