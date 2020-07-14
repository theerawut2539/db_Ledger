<?php include('../helper\condb.php');
$datein = $_POST["datein"];
$types = $_POST["types"];
$detail = $_POST["detail"];
$moneys = $_POST["moneys"];
$subtype = $_POST["subtype"];

$tyep1 = $_POST["tyep1"];
$tyep2 = $_POST["tyep2"];
//เพิ่มข้อมูล teble1
// if ($types == 'รายรับ'){
//     $sql1 = " INSERT INTO income_expense (datein,types,detail,moneys,subtype)
//         VALUES('$datein','$types','$detail','$moneys','$tyep1')";
// $result1 = mysqli_query($con, $sql1) or die("Error in query: $sql1 " . mysqli_error($con));
// }

// else{
//     $sql1 = " INSERT INTO income_expense (datein,types,detail,moneys,subtype)
//         VALUES('$datein','$types','$detail','$moneys','$tyep2')";
// $result1 = mysqli_query($con, $sql1) or die("Error in query: $sql1 " . mysqli_error($con));
// }


$sql1 = " INSERT INTO income_expense (datein,types,detail,moneys,subtype)
        VALUES('$datein','$types','$detail','$moneys','$subtype')";
$result1 = mysqli_query($con, $sql1) or die("Error in query: $sql1 " . mysqli_error($con));

//ปิดการเชื่อมต่อ database
mysqli_close($con);
//ถ้าสำเร็จให้ขึ้นอะไร
if ($result1) {
    echo "<script type='text/javascript'>";
    echo "window.location = 'show.php';";
    echo "</script>";
} else {
    //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม
    echo "<script type='text/javascript'>";
    echo "alert('error!');";
    // echo"window.location = 'process.php'; ";
    echo "</script>";
}
try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
