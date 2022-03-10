<?php

require_once("inc/db_connect.php");
// Set variables for our request
$shop = $_GET;
$shop_url = $shop['shop'];

 //check if app is already installed or not
   /* $sql = $conn->prepare("SELECT * FROM `shopify_installation_complete` WHERE shop =".$shop_url);
    $sql->execute(['shop' => $shop]);
    $count = $sql->rowCount();
    if($count == 0){
        header('Localtion: install.php?shop='. $shop_url);
        return false;
        
    }else{
        //app is already installed
        $row = $statement->fetch();
        return $row;

    }*/
 
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>

<h2>This is my first shopify App</h2>

<div class="tab">
  <button class="tablinks" onclick="openAppOption(event, 'setting')" id="defaultOpen">Settings</button>
  <button class="tablinks" onclick="openAppOption(event, 'lists')">Slider lists</button>
  <button class="tablinks" onclick="openAppOption(event, 'addnew')">Add new slider</button>
</div>

<div id="setting" class="tabcontent">
  <h3>Dotsquares App Setting Options</h3>
  <p>App settings option comming soon.</p>
</div>

<div id="lists" class="tabcontent">
  <h3>Slider lists</h3>
  <p>All slider lists comming soon. </p> 
</div>

<div id="addnew" class="tabcontent">
  <h3>Add new slider</h3>
  <p>Add new slider here.</p>
</div>

<script>
function openAppOption(evt, appOpt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(appOpt).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 