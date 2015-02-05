<?php
    $len = $_GET['len'];
    $str = $_GET['str'];


    if($len=='full'){
        $response = 'false';
    }else if($len=='partial'){
        $response = 'true';
    }

    echo 'true';