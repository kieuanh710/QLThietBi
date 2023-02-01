<?php
include_once('./database/database.php');
include_once('./controller/temp.php');
include_once('./view/viewTemp.php');
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
    <?php
                $temps = new viewTemp();
                $check = json_encode($temps->showAllTemp());
                var_dump($check)
                ?>
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
                $temps = new viewTemp();
                // $temps->showAllTemp();
            json_encode($temps->showAllTemp());
                ?>,
            datasets: [{
                label: "# of Votes",
                data: [4, 8],
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
    <table>
        <tr>
            <td>Thời gian</td>
            <td>Nhiệt độ</td>
        </tr>
        <tr>
            <td>
                <?php
                $temps = new viewTemp();
                $temps->showAllTimeTemp(); 
                ?>
            </td>
            <td>
                <?php
                $temps = new viewTemp();
                $temps->showAllTemp(); 
                ?>
            </td>
        </tr>
    </table>


</body>

</html>