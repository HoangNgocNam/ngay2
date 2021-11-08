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

<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}

$filteredCustomers = searchByDate($customerList,$fromDate,$toDate);

?>
<?php
function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer){
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}

?>

<table border="0">
    <cation><h2>Danh sách khách hàng</h2></cation>

    <tr>
        <th>Stt</th>
        <th>Ten</th>
        <th>Ngay sinh</th>
        <th>Dia chi</th>
        <th>Anh</th>
    </tr>

    <?php foreach ($filteredCustomers as $index => $customer): ?>

        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td> <?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer ['profile']; ?>" alt=""></div>
            </td>

        </tr>
    <?php endforeach; ?>
</table>
<button><a href="index.php">exit</a></button>
