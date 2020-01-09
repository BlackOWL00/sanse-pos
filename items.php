<?php
require ("config/config.php");
require ("config/db.php"); 
$select = "SELECT * FROM tbl_menuitem";
$result = mysqli_query($conn, $select);
$items = mysqli_fetch_assoc($result);
if(isset($_POST["submit"])){
    
    $name = mysqli_real_escape_string($conn, $_POST["newitemname"]);
    $cat = mysqli_real_escape_string($conn, $_POST["newitemcat"]);
    $price = mysqli_real_escape_string($conn, $_POST["newitemprice"]);

    //file upload initiation//
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpeg', 'jpg', 'png', 'svg');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNewName = uniqid("", true).".".$fileActualExt;
                $fileDestination = "img/uploads/".$fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                $insert =  "INSERT INTO tbl_menuitem (menuitem_image, menuitem_name, menuitem_price, menuitem_category) VALUES('$fileDestination', '$name', $price, '$cat')";
                mysqli_query($conn, $insert);
                header("Location: items.php?uploadsuccess");
            }else{
                echo "Image file is too large";
            }
        }else{
            echo "An error occurred";
        }
    }else{
        echo "Invalid file type";
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
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
        <div class="vueListWrapper" style="border: 2px solid #dfa367;">
            <table class = "itemData" style = "width: 100%;">
               <tr style="font-size: 30px; background-color: #dfa367; color: white;">
                    <th></th>
                    <th>Image</th>
                    <th>Item name</th>
                    <th>Price</th>
                    <th>Category</th>
               </tr>
               <tr v-for ="item in items">
                   <td>
                   <button id="delete" style="margin-left: 15px;">&#x1f5d1;</button>
                   <button id="edit">Edit</button>
                   {{item.menuitem_id}}.
                   </td>
                   <td><img :src=item.menuitem_image alt="boomy"></td>
                   <td><h6>{{item.menuitem_name}}</h6></td>
                   <td><h6>{{item.menuitem_price}}</h6></td>
                   <td><h6>{{item.menuitem_category}}</h6></td>
               </tr>
            </table>
        </div>
    </div>
</div>
<script>
var app = new Vue({
     el: ".main",
     data: {
        showSection: "true",
        filter: "",
        search: "",
        items: [],
        originalItems: []
    },
    watch: {
        search: function(){
            if(this.search.trim() != "" ){
                app.items = app.originalItems.filter(item => item.menuitem_name.includes(this.search.trim()));
                console.log("item filtered");
            }else{
                app.items = app.originalItems;
            }
        }
    },
    mounted: function(){
        axios.get('getItems.php')
        .then(function (response) {
            console.log(response.data);
            app.originalItems = app.items = response.data;
        })
        .catch(function (error) {
            console.log(error);
        });
    },
    methods: {
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