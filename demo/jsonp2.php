<?php

header('content-type: application/json; charset=utf-8');

$callback = isset($_REQUEST['callback'])?$_REQUEST['callback']:'alert';

if (!preg_match('/^[a-z0-9_-]+$/i', $callback)) {
    $callback = 'alert';
}

$data = array(
    array(
        'time' => '2012.09.21 13:11:15',
        'text' => '���������� ��� JSONP'
    ),
    array(
        'time' => '2012.09.21 13:12:42',
        'text' => '���������� ����� ����� JSONP'
    ),
    array(
        'time' => '2012.09.21 13:13:13',
        'text' => '����� �� ������ �� ������������� JSONP?'
    ),
);

echo $callback.'('.json_encode($data).')';