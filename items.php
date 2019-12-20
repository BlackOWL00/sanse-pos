<?php
require ("config/config.php");
require ("config/db.php");
if(isset($_POST["submit"])){
    $checkimage = getimagesize($_FILES["file"]["tmp_name"]);
    $name = mysqli_real_escape_string($conn, $_POST["newitemname"]);
    $cat = mysqli_real_escape_string($conn, $_POST["newitemcat"]);
    $price = mysqli_real_escape_string($conn, $_POST["newitemprice"]);
    if($checkimage !== false){
        $image = $_FILES["file"]["tmp_name"];
        $imgcont = addslashes(file_get_contents($image));
        $insert =  "INSERT INTO tbl_menuitem (menuitem_image, menuitem_name, menuitem_price, menuitem_category) VALUES('$image', '$name', $price, '$cat')";
        mysqli_query($conn, $insert);
    }else{
        $image = $_FILES["file"]["tmp_name"];
        $imgcont = addslashes(file_get_contents($image));
        $insert =  "INSERT INTO tbl_menuitem (menuitem_image, menuitem_name, menuitem_price, menuitem_category) VALUES($imgcont, $name, $price, $cat)";
        mysqli_query($conn, $insert);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href ="itemlist.css">
    <script src="./js/vue.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu Items</title>
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
    <div class="itemHeader">
        <img src="img/milktea.svg" alt="Boomy">
        <span>Items</span>
        <div class="totheright">
            <select name="filter" id="filter" v-model="filter" placeholder="Filter">
                <option value="" disabled selected>Filter</option>
                <option value="name">Name</option>
                <option value="category">Category</option>
                <option value="price">Price</option>
            </select>
            <button id = "order" @click="changeOrder()">{{order}}</button>
            <label for="search">&#128270</label>
            <input id="search" type="text" name="search" placeholder = "Search" v-model="search">
            <button id = "addItem" @click="toggleAddForm()">&#43 Add Item</button>
        </div>
        <hr style = "margin-bottom: 0px;">
        <div class="addForm" v-show = "!showSection">
            <div class="newform">
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype=multipart/form-data>
            <h1>Add Item</h1>
            <img src='img/addimage.png' id="preview" alt="Preview" v-on:click="imageClicked"/>
            <div class="form-group">
                <input type="file" name="file" id="itemImage" @input ="changeImage($event)" required><br>            </div>  
            <div class="form-group">    
                <input type="text" name="newitemname" id="newitemname" placeholder="Item" required><br>
            </div>
            <div class="form-group">    
                <input type="text" name="newitemcat" id="newitemcat" placeholder="Category" required><br>
            </div>
            <div class="form-group">
                <input type="text" name="newitemprice" id="newitemprice" placeholder="Price" required><br>
            </div>
            <div class="form-group">    
                <button name = "submit">Enter</button>
            </div>
        </form>
        </div>
        </div>
        <hr style = "margin-top: 0px;">
</div>
</div>
<script>
var app = new Vue({
     el: ".main",
     data: {
        showSection: "true",
        filter: "",
        order: "ASC",
        search: "",
        dispForm: "none"
    },
    methods: {
        changeOrder: function(){
            this.order == "ASC" ? this.order ="DESC" : this.order ="ASC";            
        },
        imageClicked: function(){
            var openF = document.getElementById("itemImage");
            openF.click();
        },
        toggleAddForm: function(){
            this.showSection = !this.showSection;
        },
        changeImage: function(event){
            var reader, files = event.target.files;
            var preview = document.getElementById('preview');
            if(files){
                reader = new FileReader();
                reader.onload = function(event){
                     preview.setAttribute("src", event.target.result);
                }
            }
            reader.readAsDataURL(files[0]);
        }
    }
});
</script>
<script>
function fnOpenNav(){
    document.getElementById("mySideNav").style.width = "335px";
}

function fnCloseNav(){
    document.getElementById("mySideNav").style.width = "0px";
}
</script>
</body>
</html>