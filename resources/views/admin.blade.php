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
.ptable
{
  border-collapse: collapse;
  width: 100%;
  height: 50;
}
.ptable, .ptd, .pth,.ptr {
  border: 1px solid black;
  padding: 5px;
}
.pth,.ptd {text-align: left;
  width: 35%;
  padding: 15px;
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
  <p>มอส ตั้งวันในสัปดาห์  ตั้งเวลาเริ่ม เวลาหยุด ตั้งประกาศ</p>
</div>

<div id="Print" class="tabcontent">
  <h3>พิมพ์สรุป</h3>
  <p>ลูกแก้ว รายชื่อที่จะมาวันนี้ ปุ่มบันทึก(โหลดpdf)</p>
</div>

<div id="Add user" class="tabcontent">
  <h3>เพิ่มผู้ใช้</h3>
  <p>เน ฟอร์มกรอกข้อมูล สุ่มพาสให้ยูส ปุ่มบันทึก</p>
</div>

<div id="Edit user" class="tabcontent">
  <h3>แก้ไขผู้ใช้</h3>
  <p>โอม  รายการทั้งหมด คลิกแก้ข้อมูล ปุ่มบันทึก</p>
</div>

<div id="Ban user" class="tabcontent">
  <h3>ระงับผู้ใช้</h3>
  <p>เพชร แสดงรายชื่อที่โดนระงับบน เลือกติ๊กระงับล่าง ปุ่มบันทึก</p>
  <div style="height:50%;overflow:auto;">
    <h3 style="text-align: center;">รายชื่อที่ถูกระงับ</h3>
    <table class="ptable">
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
      </tr>
      <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "</tr>";
        }
       ?>
    </table>
  </div>
  <br>
  <div style="height:50%;overflow:auto;">
    <h3 style="text-align: center;">รายชื่อที่ยังไม่ถูกระงับ</h3>
    <table class="ptable">
      <tr class="ptr">
        <th class="pth">ชื่อ</th>
        <th class="pth">นามสกุล</th>
        <th class="pth">ชื่อร้าน</th>
        <th class="pth"></th>
      </tr>
      <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\"><input type=\"checkbox\" id=".$i."></td>";
          echo "</tr>";
        }
       ?>
    </table>
  </div>
  <br>
  <button type="submit">Ban</button>
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
