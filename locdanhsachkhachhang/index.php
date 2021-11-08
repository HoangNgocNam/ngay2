<?php
$customerList = [
    "1" => [
        "Ten" => "Mai Van Hoan",
        "Ngay sinh" => "1983-08-20",
        "Dia chi" => "Ha noi",
        "anh" => ""
    ],

    "2" => [
        "Ten" => "Nguyen Van Nam",
        "Ngay sinh" => "1983-07-23",
        "Dia chi" => "Bac giang",
        "Anh" => ""
    ],

    "3" => [
        "Ten" => "Nguyen Thai Hoa",
        "Ngay sinh" => "1987-08-07",
        "Dia chi" => "Nam Dinh",
        "Anh" => ""
    ],

    "4" => [
        "Ten" => "Tran Dang Khoa",
        "Ngay sinh" => "1987-04-21",
        "Dia chi" => "Ha noi",
        "Anh" => ""
    ],

    "5" => [
        "Ten" => "Nguyen Dinh Thi",
        "Ngay sinh" => "1986-09-24",
        "Dia chi" => "Ha noi",
        "Anh" => ""
    ]

];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach khach hang</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<form action="list.php" method="get">
    chọn ngày sinh từ: <input type="date" id="from" name="from" placeholder="yyyy/mm/dd" value=""/>
    đến : <input type="date" id="to" name="to" placeholder="yyyy/mm/dd" value=""/>
    <input type="submit" id="submit" value="loc">
</form>
<table>
    <caption><h1>Danh sach khach hang</h1></caption>
    <thead>
    <tr>
        <th>Stt</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td> <?php echo $key ?> </td>
            <td> <?php echo $value['Ten'] ?> </td>
            <td> <?php echo $value['Ngay sinh'] ?> </td>
            <td> <?php echo $value['Dia chi'] ?> </td>
            <td><img scr="<?php echo $value['Anh'] ?>" alt=""  width="200" </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

