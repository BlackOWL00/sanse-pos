<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<div id ="mySideNav" class="sidebar">
        <div class="sidebarlogo">
            <img src="img/boomy.png" alt="BOOMY" id = "circleimg">
            <h1>Camp Boomy Cafe</h1>
        </div>
        <ul class="list-group">
            <a href="dashboard.php"><li class="list-group-item">Dashboard</li></a>
            <a href="pos.php"><li class="list-group-item">Point of Sales</li></a>
            <a href="items.php"><li class="list-group-item">Items</li></a>
            <a href="records.php"><li class="list-group-item">Records</li></a>
            <a href="settings.php"><li class="list-group-item">Settings</li></a>
            <a href="javascript:void(0)" class="closebtn" onclick="fnCloseNav()">&times;</a>
        </ul>
</div>
<div class="header">
        <a href="dashboard.php">
        <img src="img/boomy.png" alt="Boomy" id="icon">
        <span> Camp Boomy Cafe</span>
        </a>
</div>
<div class="main">
    <div class="burger">
    <span id = "sidebar-btn" onclick = "fnOpenNav()">&#9776;</span>
    </div>
    <div class="graph1">
        <canvas id="lineGraph"></canvas>
    </div>
    <div class="graph2">
        <canvas id="donutGraph"></canvas>
        <div class="topOrder">
            <span><img src="img/stonks.svg" alt="Stoinks"> Top Orders</span>
        </div>    
    </div>
</div>
</body>
<script>
function fnOpenNav(){
    document.getElementById("mySideNav").style.width = "335px";

}

function fnCloseNav(){
    document.getElementById("mySideNav").style.width = "0px";
}
////////////////////////////////////////////////////////////////////////////////////////////////
var ctx = document.getElementById('lineGraph');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'Sales of the Week',
            data: [12, 19, 3, 5, 2, 3, 20],
            backgroundColor: [
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Sales Monitor',
            fontSize: 25
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
/////////////////////////////////////////////////////////////////////////////////////////////////
var ctx = document.getElementById('donutGraph');
var donutchart = new Chart(ctx , {
    type: 'doughnut',
    data: {
        labels: ["Beverages", "Desserts", "Meals", "Bundle-Meals"],
        datasets: [{
            data: [100, 20, 15, 50],
            backgroundColor: ['#ffdab3','#ffc180','#ffa94d','#ff901a']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Categories Percentage',
            fontSize: 25
        },
        cutoutPercentage: 50,
        animation: {
        animatedScale: true        
        }
    }
});
/////////////////////////////////////////////////////////////////////////////////////////////////
var ctx = document.getElementById('barGraph');
var BarGraph = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sunday',"Monday", 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        datasets: [{
            label: 'Sales of the Day',
            data: [12, 19, 3, 5, 2, 3, 20],
            backgroundColor: '#ff901a'
        }]
    }
});
</script>
</html> 