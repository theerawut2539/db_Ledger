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

    <script>
    function my_fun(str) {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.MXLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('poll').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "./helper.php?value=" + str, true);
        xmlhttp.send();

    }
    </script>

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

    <script type="text/javascript">
    $(function() {
        $("#myform1").on("submit", function() {
            var form = $(this)[0];
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
    </script>

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
                                <label for="name">วัน/เดือน/ปี </label>
                                <input class="form-control" type="date" name="datein"
                                    value="<?php echo date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>ประเภท</label>
                                <div class="form-select">
                                    <select name="types" onchange="my_fun(this.value)" required>
                                        <option value=""> ->เลือกประเภท<- </option>
                                        <option value="รายรับ">รายรับ</option>
                                        <option value="รายจ่าย">รายจ่าย</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>หมวดหมู่</label>
                                <div class='form-select'>
                                    <div id="poll">
                                        <select>
                                            <option>->หมวดหมู่<- </option>
                                        </select>
                                    </div>
                                </div>
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
                                <input type="submit" value="บันทึกข้อมูล" class="button2" name="submit" id=" button3" />
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


    <!-- JS -->
    <!-- <script src="../assets/vendor/jquery/jquery.min"></script>
    <script src="../assets/js/main"></script>
    <script src="jscontrol.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>