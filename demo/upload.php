<?php

if(!empty($_FILES)){

    $result = '';
    $dir = __DIR__.'/uploads/';

    if(!is_dir($dir)){
        mkdir($dir);
    }

    foreach($_FILES as $id => $data){

        $name = $_FILES[$id]['name'];
        $tmp = $_FILES[$id]['tmp_name'];
        $errorCode = $_FILES[$id]['error'];

        if($errorCode==0){
            try{}catch(Exception $error){}
            $moveResult = move_uploaded_file($tmp, $dir.$name);
            if($moveResult)
                $result .= "<p>File uploaded [$name] Data: </p><pre>_FILES:".print_r($_FILES,true)."</pre>";
            else
                goto error;
        }else{
            error:
            $result .= "<p>Error file upload [$name] Error Code: [".$errorCode."] <a href=\"http://www.php.net/manual/en/features.file-upload.errors.php\">file-upload.errors</a></p>";
        }
    }

    echo $result;
}
