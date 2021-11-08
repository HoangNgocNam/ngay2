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
<form action="" method="post">
    <fieldset>
        <legend>Calculate</legend>
        Number 1: <input type="number" name="in1"><br><br>
        Number 2: <input type="number" name="in2"><br><br>
        <button>submit</button>
    </fieldset>
</form>
<?php


if ($_SERVER['REQUEST_METHOD']='POST'){
    $inp1=$_POST['in1'];
    $inp2=$_POST['in2'];
    function cal($inp2,$inp1)
    {
        if ($inp2 == 0) {
            $exception = new Exception('Xảy ra ngoại lệ: / by zero');
            throw $exception;
        }else if($inp2==null or $inp1==null){
            $exception = new Exception('Chưa nhập đủ dữ liệu');
            throw $exception;
        }
        //return $inp2++;
    }
    try {
        cal($inp2,$inp1);
        echo 'Tổng '.'x+y = '.($inp1+$inp2).'<br>';
        echo 'Hiệu '.'x-y = '.($inp1-$inp2).'<br>';
        echo 'Tích '.'x*y = '.($inp1*$inp2).'<br>';
        echo 'Thương '.'x/y = '.($inp1/$inp2).'<br>';
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
</body>
</html>