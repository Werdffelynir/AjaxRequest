<?php

print_r("<pre>");
print_r($_FILES);
print_r("</pre>");

$uploadsDir = 'uploads/';
$fileName = $_FILES['upload_file']['name'];
$fileTmpName = $_FILES['upload_file']['tmp_name'];

move_uploaded_file($fileTmpName, $uploadsDir.$fileName);

echo "File is uploaded $fileName to dir [$uploadsDir.$fileName]";