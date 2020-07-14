<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "db_income_expense");
$columns = array('id', 'datein', 'types', 'detail', 'moneys');

$query = "SELECT * FROM income_expense WHERE ";

if ($_POST["is_date_search"] == "yes") {
    $query .= 'datein BETWEEN "' . $_POST["start_date"] . '" AND "' . $_POST["end_date"] . '" AND ';
}

if (isset($_POST["search"]["value"])) {
    $query .= '
    (id LIKE "%' . $_POST["search"]["value"] . '%" 
    OR datein LIKE "%' . $_POST["search"]["value"] . '%" 
    OR types LIKE "%' . $_POST["search"]["value"] . '%" 
    OR detail LIKE "%' . $_POST["search"]["value"] . '%"
    OR moneys LIKE "%' . $_POST["search"]["value"] . '%")
   ';
}

if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $columns[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' 
 ';
} else {
    $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if ($_POST["length"] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while ($row = mysqli_fetch_array($result)) {
    $sub_array = array();
    $sub_array[] = $row["id"];
    $sub_array[] = $row["datein"];
    $sub_array[] = $row["types"];
    $sub_array[] = $row["detail"];
    $sub_array[] = $row["moneys"];
    $data[] = $sub_array;
}

function get_all_data($connect)
{
    $query = "SELECT * FROM income_expense";
    $result = mysqli_query($connect, $query);
    return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
);

echo json_encode($output);
