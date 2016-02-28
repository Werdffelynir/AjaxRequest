<?php


if(!empty($_REQUEST['func'])){

    $func = $_REQUEST['func'];

    function head(){
        $xData = isset(getallheaders()['X-DATA-CLIENT']) ? getallheaders()['X-DATA-CLIENT'] : 'Error!';
        header('X-DATA-SERVER: Response - ' . (string)  $xData);
    }

    function get_request_method(){
        echo $_SERVER['REQUEST_METHOD'];
    }


    function get_form(){
        print_r( "Email: {$_POST['email']} Password: {$_POST['password']} ");
    }

    if(function_exists($func)){
        call_user_func($func, 0);
    }
}

//print_r($_REQUEST);
//print_r($_SERVER);