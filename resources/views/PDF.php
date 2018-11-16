<?php
	//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
	include_once __DIR__ . 'kumarket/vendor/autoload.php';

	//ตั้งค่าการเชื่อมต่อฐานข้อมูล

			$content .= '<tr style="border:1px solid #000;">
        <th>1</th>
        <th>AAAAAAAAAA</th>
        <th>BBBBBBBBBB</th>
        <th>CCCCCCCCCC</th>
        <th> </th>
			</tr>';


$mpdf = new mPDF();

$head = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
	}
</style>

<h2 style="text-align:center">ร้านที่ลงทะเบียนมาขาย</h2>

<table border="1">
  <thead>
    <td colspan="1">หมายเลขร้าน</td>
    <td colspan="1">ชื่อ</td>
    <td colspan="1">นามสกุล</td>
    <td colspan="1">ชื่อร้าน</td>
    <td colspan="1">หมายเหตุ</td>
  </thead>
  <tbody>';

$end = "</tbody>
</table>";

$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->Output();
