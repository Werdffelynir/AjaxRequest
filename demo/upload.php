<?php

if(!empty($_FILES)){
    $result = '';
    $dir = 'uploads/';
    foreach($_FILES as $id => $data){

        $name = $_FILES[$id]['name'];
        $tmp = $_FILES[$id]['tmp_name'];
        $moveResult = move_uploaded_file($tmp, $dir.$name);

        $result .= "<p>File uploaded [$moveResult] Data: </p><pre>".print_r($data,true)."</pre>";
    }

    echo $result;

    print_r("<pre>");
    print_r($_FILES);
    print_r("</pre>");
}
