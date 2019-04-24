<?php

require_once('config.php');

function get_title()
{
    global $title;
    echo $title;
}

function home_url()
{
    echo ABS_URL;
}

?>