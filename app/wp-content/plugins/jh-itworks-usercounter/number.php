<?php

class Number {

    function __construct(int $postID) {

        $count = Service::getInstance()->getCurrentPostCount($postID);
      
        echo "<input name='tbox' readonly type='text' value='Visitor number: $count' />";
    }
}















