<?php
include_once('../database/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <center>Grafik
                </h3>
            </div>

            <div class="panel-body">
                <canvas id="lineChart"></canvas>
                <!-- SCRIPTS -->
                <!-- JQuery -->

                <script>
                var today = new Date();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: [time],
                        datasets: [{
                                label: "Data 1",
                                data: [0],
                                backgroundColor: [
                                    'rgba(105, 0, 132, .2)',
                                ],
                                borderColor: [
                                    'rgba(200, 99, 132, .7)',
                                ],
                                borderWidth: 2
                            },
                            {
                                label: "Data 2",
                                data: [0],
                                backgroundColor: [
                                    'rgba(0, 137, 132, .2)',
                                ],
                                borderColor: [
                                    'rgba(0, 10, 130, .7)',
                                ],
                                borderWidth: 2
                            }
                        ]
                    },
                    options: {
                        responsive: true
                    }
                });

                function add_data(chart, label, data) {
                    var today = new Date();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    var line1 = myLineChart.data.datasets[0].data.push(Math.random() * 32);
                    var line2 = myLineChart.data.datasets[1].data.push(Math.random() * 32);
                    myLineChart.data.labels.push(time)
                    myLineChart.update();
                }
                setInterval(add_data, 10000); //milisecond
                </script>
            </div>
            <?php
                    $sql = "INSERT INTO `nhiet_do`(nhiet_do, time) VALUES add_data;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    foreach ($result as $data){
                        $time[] = $data['time'];
                        $nhiet_do[] = $data['nhiet_do'];
                    }
                    ?>
        </div>
    </div>

    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>