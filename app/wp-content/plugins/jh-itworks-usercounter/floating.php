<?php

class Floating {
    
    function __construct($postID) {
                
        $count = Service::getInstance()->getCurrentPostCount($postID);
        $information = '<p id="cnt"> The Number of Users that have visited this Site is: '.$count.' </p>';
        echo sprintf($information, intval(get_post_meta($postID, "awepop_views", true)));
    } 
}
