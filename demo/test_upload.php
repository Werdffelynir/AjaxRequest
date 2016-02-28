<?php



?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form id="forma" action="">
    <input type="file" id="upl_one">
    <input type="submit">
</form>


<script>

    var form = document.querySelector('#forma');
    var inpFile = document.querySelector('#upl_one');

    form.onsubmit = function (eve){
        eve.preventDefault();

        console.log(inpFile)

        var xhr = new XMLHttpRequest();
        xhr.upload.onprogress = function(e) {
            var percent = (e.position/ e.totalSize);
            // Render a pretty progress bar
        };
        xhr.onreadystatechange = function(e) {
            if(this.readyState === 4) {
                // Handle file upload complete
            }
        };
        xhr.open('POST', '/upload', true);
        xhr.setRequestHeader('X-FileName',file.name); // Pass the filename along
        xhr.send(file);
    };


</script>
</body>
</html>