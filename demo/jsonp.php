<?php
if (isset($_GET['callback'])) {
    header('Content-Type: application/javascript');
    exit($_GET['callback'].'.call(window, "Hello", "JSONP", "!!!")');
}