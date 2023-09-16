<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/loader.js"></script>
    <title>Document</title>
</head>
<body onload="myfunction()">
    
    <div id="loader-container">
        <div id="loader-box"></div>
      </div>
    <script>

var preloader= document.getElementById('loader-container');

function myfunction(){

    preloader.style.display='none';
}
    </script>
</body>
</html>  