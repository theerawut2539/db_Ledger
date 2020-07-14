<?php
include('../helper/condb.php');
$date_nows = date("d-m-y H:i");
//echo $date_nows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บันทึกรายรับ-รายจ่าย</title>


    <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- <script src="../assets/plugins/datatables/jquery.dataTables.min"></script> -->
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<style>
    .button2 {
        display: inline-block;
        padding: 5px 10px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #000;
        background-color: #4CAF50;
        border: none;
        border-radius: 10px;
        box-shadow: 0 9px #999;
    }


    .button2:hover {
        background-color: #3e8e41
    }

    .button2:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    .button3 {
        display: inline-block;
        padding: 5px 10px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #000;
        background-color: #12DAEE;
        border: none;
        border-radius: 10px;
        box-shadow: 0 9px #999;
    }


    .button3:hover {
        background-color: #10C6D8
    }

    .button3:active {
        background-color: #10C6D8;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    </style>
</head>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../assets/images/img02.png" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="./process.php">
                        <h2>บันทึกรายรับ-รายจ่าย</h2>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="datein">วัน/เดือน/ปี </label>
                                <input class="form-control" type="date" name="datein"
                                    value="<?php echo date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="types">ประเภท</label>
                                <div class="form-select">
                                    <select id="types" name="types" onchange="Selecttype(this.value);" required>
                                        <option value="">->เลือกประเภท<-</option>
                                        <option value="รายรับ">รายรับ</option>
                                        <option value="รายจ่าย">รายจ่าย</option>
                                    </select>
                                </div>
                                <br>

                                <label for=subtype">หมวดหมู่</label>
                                <select id="รายรับ" name="tyep1" required>
                                    <option value="">->เลือกหมวดหมู่<-</option>
                                    <option value="รายรับหลัก">รายรับหลัก</option>
                                    <option value="รายรับอื่นๆ">รายรับอื่นๆ</option>
                                </select>

                                <select id="รายจ่าย" name="tyep2" required>
                                    <option value="">->เลือกหมวดหมู่<-</option>
                                    <option value="ค่าใช้สอย">ค่าใช้สอย</option>
                                    <option value="ค่าตอบแทน">ค่าตอบแทน</option>
                                    <option value="ค่าสาธรณูปโภค">ค่าสาธรณูปโภค</option>
                                    <option value="งบลงทุน">งบลงทุน</option>
                                    <option value="ค่าครุภัณฑ์">ค่าครุภัณฑ์</option>
                                    <option value="ค่าที่ดินและสิ่งก่อสร้าง">ค่าที่ดินและสิ่งก่อสร้าง</option>
                                    <option value="รายจ่ายอื่นๆ">รายจ่ายอื่นๆ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="detail">รายการ</label>
                                <input type="text" name="detail" id="detail">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="money">จำนวนเงิน</label>
                                <input type="text" name="moneys" id="moneys" required pattern="[0-9]{1,}"
                                    title="กรอกเป็นตัวเลขค่ะ">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="submit" value="บันทึกข้อมูล" class="button2" name="submit"  />
                                <br><br>
                                <div align="center">
                                    <button class=" button3" onclick="location.href='./show.php'">ข้อมูลรายการ</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </form>
    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min"></script>
    <script src="../assets/js/main"></script>
    <script src="jscontrol.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<script>
function Selecttype() {
    var d = document.getElementById("types").value;
    var dType1 = document.getElementById("รายรับ");
    var dType2 = document.getElementById("รายจ่าย");
    if (d == "รายรับ") {

        dType2.style.display = "none";
        dType1.style.display = "block";
    }

    else if (d == "รายจ่าย")

    {
        dType1.style.display = "none";
        dType2.style.display = "block";
    } else

    {
        dType2.style.display = "none";
        dType1.style.display = "none";
    }

}

Selecttype();
</script>
