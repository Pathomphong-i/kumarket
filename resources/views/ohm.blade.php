<html>
<head>
  <title>Test Type-Zero</title>
</head>
<body>
  <h1>Test No.01</h1>
  <h3 style="text-align: center;">รายชื่อ</h3>
  <div style="height:50%;overflow:auto;">
  <table width="1500" border="1" cellspacing="2" cellpadding="0">
  <tr>
  	<td width="125"><center>หมายเลขเลขร้าน</center></td>
    <td width="125"><center>ชื่อ</center></td>
    <td width="125"><center>นามสกุล</center></td>
    <td width="125"><center>เลขบัตรประชาชน</center></td>
    <td width="125"><center>ชื่อร้าน</center></td>
    <td width="125"><center>เบอร์โทรศัพท์</center></td>
    <td width="125"></td>
    <?php
        for ($i=1; $i < 10; $i++) {
          echo "<tr class=\"ptr\">";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "<td class=\"ptd\">" .$i. "</td>";
          echo "</tr>";
        }
       ?>
   </tr>
</table>
</div>
</body>
</html>
