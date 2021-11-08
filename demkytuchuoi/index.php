
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="input" placeholder="nhap ky tu">
    <input type="submit"value="display">
</form>
<?php
$str = 'hoang ngoc nam';
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $input = $_POST["input"];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if ($input === $str[$i]){
            $count++;
        }
    }
    echo $count;
}
?>
</body>
</html>
