<?php
include('../helper/condb.php');
$sqlshow1 = "SELECT SUM(moneys)as รายรับรวม FROM `income_expense` WHERE types='รายรับ'";
$ResultSet1  = mysqli_query($con, $sqlshow1);
$sqlshow2 = "SELECT SUM(moneys)as รายจ่ายรวม FROM `income_expense` WHERE types='รายจ่าย'";
$ResultSet2  = mysqli_query($con, $sqlshow2);
$sqlshow3 = "SELECT SUM(types)as คงเหลือ FROM `income_expense` WHERE (types = 'รายรับ') OR (types = 'รายจ่าย')";
$ResultSet3  = mysqli_query($con, $sqlshow3);

 
$query = "SELECT types, count(*) as ประเภท,SUM(moneys)as จำนวน FROM income_expense WHERE types='รายรับ' OR types='รายจ่าย' GROUP BY types"; 
$query2 = "SELECT types, count(*) as ประเภท,SUM(moneys)as จำนวน FROM income_expense WHERE types='รายรับ' OR types='รายจ่าย' GROUP BY types"; 
$result = mysqli_query($con, $query); 
$result2 = mysqli_query($con, $query2); 
?>

<html>

<head>
    <title>รายการ รายรับ-รายจ่าย</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="asset/css/dataTables.bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />


    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>



    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000000;
        }

        .box {
            width: 1270px;
            padding: 20px;
            background-color: #EBE5D9;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 25px;
        }

        .button1 {
            background-color: #05F51B; 
            color: black; 
            border: 2px solid #05C817;
            }

            .button1:hover {
            background-color: #05C817;
            color: black;
            }

        .button2 {
            background-color: #F5EB06; 
            color: black; 
            border: 2px solid #D4CC22;
            }

            .button2:hover {
            background-color: #D4CC22;
            color: black;
            }

        .button3 {
            background-color: #FF5C5C; 
            color: black; 
            border: 2px solid #FF5C5C;
            }

            .button3:hover {
            background-color: #f44336;
            color: black;
            }
    </style>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
            <script type="text/javascript">  
            google.charts.load('current', {'packages':['corechart']});  
            google.charts.setOnLoadCallback(drawChart); 
            google.charts.setOnLoadCallback(drawChartbar);  
            function drawChart()  
            {  
                var data = google.visualization.arrayToDataTable([  
                          ['types', 'จำนวนเงิน'], 
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["types"]."',".$row["จำนวน"].",],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                        title: 'แผนภูมิ รายรับ-รายจ่าย',
                        hAxis: {
                                title: "จำนวนเงิน"
                                },
                        vAxis: {
                                title: 'ประเภท'
                                } ,
                        backgroundColor :'#EBE5D9',
                      is3D:true,
                      colors:['red','#25F038'] 
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));  
                chart.draw(data, options);  
           }  
           function drawChartbar(){  
                var data = google.visualization.arrayToDataTable([  
                          ['types', 'จำนวนเงิน'], 
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["types"]."',".$row["จำนวน"].",],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                        title: 'แผนภูมิ รายรับ-รายจ่าย',
                        hAxis: {
                                title: "จำนวนเงิน"
                                },
                        vAxis: {
                                title: 'ประเภท'
                                } , 
                      //is3D:true,  
                      //pieHole: 0.4 
                      backgroundColor :'#EBE5D9' 
                     };  
                var chart = new google.visualization.BarChart(document.getElementById('barchart_div'));  
                chart.draw(data, options);  
           }  
           </script>  
</head>

<body>

    <div class="container box">
        <h1 align="center">รายการ รายรับ-รายจ่าย</h1>
        
        <form align="right" action="./login-out/logout.php">
                    <input class="btn button3" type="submit" value="ออกจากระบบ">
                </form>
        <div class="table-responsive">
            
            <div class="row">
                <div class="input-daterange">
                    <div class="col-md-4">
                        <input type="text" name="start_date" id="start_date" class="form-control" />
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="end_date" id="end_date" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <input type="button" name="search" id="search" value="ดูรายการ" class="btn  button1" />
                    <button class="btn button2" onclick="location.href='member1.php'">บันทึกเพิ่ม</button>
                </div>
            </div>


            <br />
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>วัน/เดือน/ปี</th>
                        <th>ประเภท</th>
                        <th>รายการ</th>
                        <th>จำนวนเงิน</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <table id="tbList" align="right">
                <tr>
                    <th <span style="color:green;font-weight:bold" colspan=1>รายรับรวม : <?php while ($Row = mysqli_fetch_array($ResultSet1)) {
                    echo number_format($Row['รายรับรวม']);
                    $sumrev = $Row['รายรับรวม'];
                    } ?> บาท
                    </th>
                </tr>
                <tr>
                    <th colspan=1<span style="color:red;font-weight:bold">รายจ่ายรวม : <?php while ($Row = mysqli_fetch_array($ResultSet2)) {
                    echo number_format($Row['รายจ่ายรวม']);
                    $sumexp = $Row['รายจ่ายรวม'];
                    } ?> บาท
                    </th>
                </tr>
                <tr>
                    <th colspan=3><span style="color:black;font-weight:bold">คงเหลือทั้งสิ้น :
                    <?php {
                        echo number_format($sumrev - $sumexp);
                    } ?> บาท
                    </th>
                </tr>
        </div>
    </div>
    <table class="columns">
        <tr>
            <td><div id="piechart_div" align="center" style="width: 610px; height: 250px;"></div></td>
            <td><div id="barchart_div" align="center" style="width: 610px; height: 250px;"></div></td>
        </tr>
    </table>   
</body>

</html>



<script type="text/javascript" language="javascript" charset="utf-8">
    $(document).ready(function() {

        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: "yyyy-mm-dd",
            autoclose: true
        });

        fetch_data('no');

        function fetch_data(is_date_search, start_date = '', end_date = '') {

            var dataTable = $('#dataTable').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: 'ออกรายงาน Excel'
                    }, {
                        extend: 'print',
                        text: 'ปริ้น'
                    },
                    {
                        extend: 'pageLength',
                        text: 'ความยาวหน้า'
                    },
                    // 'print', 'excel', 'pageLength'
                ],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Thai.json"
                },
                "ajax": {
                    url: "fetch.php",
                    type: "POST",
                    data: {
                        is_date_search: is_date_search,
                        start_date: start_date,
                        end_date: end_date
                    }
                }
            });
        }

        $('#search').click(function() {
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            if (start_date != '' && end_date != '') {
                $('#dataTable').DataTable().destroy();
                fetch_data('yes', start_date, end_date);
            } else {
                alert("ต้องระบุวันที่ทั้งสอง");
            }
        });

    });
</script>