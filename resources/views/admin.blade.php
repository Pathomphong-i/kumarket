<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<h2>KU SRC Night Market</h2>
<p>ประจำวันอังคารที่ xxxx</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Set time')">ตั้งเวลา</button>
  <button class="tablinks" onclick="openCity(event, 'Print')">พิมพ์สรุป</button>
  <button class="tablinks" onclick="openCity(event, 'Add user')">เพิ่มผู้ใช้</button>
  <button class="tablinks" onclick="openCity(event, 'Edit user')">แก้ไขผู้ใช้</button>
  <button class="tablinks" onclick="openCity(event, 'Ban user')">ระงับผู้ใช้</button>
</div>

<div id="Set time" class="tabcontent">
  <h3>ตั้งเวลา</h3>
  <p>มอส</p>
</div>

<div id="Print" class="tabcontent">
  <h3>พิมพ์สรุป</h3>
  <p>ลูกแก้ว</p> 
</div>

<div id="Add user" class="tabcontent">
  <h3>เพิ่มผู้ใช้</h3>
  <p>เน</p> 
</div>

<div id="Edit user" class="tabcontent">
  <h3>แก้ไขผู้ใช้</h3>
  <p>โอม</p> 
</div>

<div id="Ban user" class="tabcontent">
  <h3>ระงับผู้ใช้</h3>
  <p>เพชร</p> 
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
