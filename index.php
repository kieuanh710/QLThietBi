<?php
include_once('./database/database.php');
include_once('./model/TempModel.php');
include_once('./controller/TempController.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div>
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="response"></div>
    <script src="./main.js"></script>

    <script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: <?php
                $temps = new TempController();
                echo json_encode($temps->showAllTimeTemp());
                ?>,
            datasets: [{
                label: "Nhiet Do",
                data: <?php
                $temps = new TempController();
                echo json_encode($temps->showAllTemp());
                ?>,
                borderWidth: 1,
            }, ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
    </script>
    <?php
    echo rand(22, 32);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo date('m/d/Y h:i:s a', time()); ; 
    ?>
    <table>
        <tr>
            <td>Thời gian</td>
            <td>Nhiệt độ</td>
        </tr>
        <tr>
            <td>
                <?php
                $temps = new TempController();
                foreach($temps->showAllTimeTemp() as $value){
                    echo $value."<br>";
                };
                ?>
            </td>
            <td>
                <?php
                $temps = new TempController();
                foreach($temps->showAllTemp() as $value){
                    echo $value."<br>";
                };
                //run random
                // $temps->randomTemp();                        
                ?>
            </td>
        </tr>
    </table>


</body>

</html>