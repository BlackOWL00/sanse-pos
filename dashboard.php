<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
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
            <a href="#"><li class="list-group-item">Point of Sales</li></a>
            <a href="#"><li class="list-group-item">Items</li></a>
            <a href="#"><li class="list-group-item">Records</li></a>
            <a href="#"><li class="list-group-item">Settings</li></a>
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
    <span id = "sidebar-btn" onclick = "fnOpenNav()">&#9776;</span>
    <div class="graph1">
        <canvas id="lineGraph"></canvas>
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
</script>
<script src=""></script>
</html>