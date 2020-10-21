<?php

class View
{
    function __construct()
    {
        // echo 'This is the view<br>';
    }

    public function rendor($name, $data = [], $noInclude = true)
    {
        if (isset($data))
            extract($data);

        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}
