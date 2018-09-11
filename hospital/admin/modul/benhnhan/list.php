<title>List thành viên</title>
<style type="text/css">
	td{
	border:1px solid #CCC;
	padding:2px 6px;
}
tr.title td{
	background:#CCC;
	text-align:center;
	color:#FFF;
	font-size:13px
}
</style>
<h3>Danh sách Bệnh án</h3>
<?php
	$sql = "select *from benhnhan";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<table width="800" height="57" border="1">
  <tr class="title">
    <td>STT</td>
    <td>Tên bệnh nhân</td>
    <td>Tuổi</td>
    <td>Địa chỉ</td>
    <td>Ngày khám</td>
    <td>Bác Sỹ khám</td>
    <td>Ngày khám</td>
    <td>Chuẩn đoán</td>
    <td>Edit</td>
    <td>Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['ten']; ?></td>
        <td><?php echo $data['tuoi']; ?></td>
        <td><?php echo $data['que'] ?></td>
        <td><?php echo $data['ngaykham']; ?></td>
        <td><?php echo $data['bacsy_kham']; ?></td>
        <td><?php echo $data['ngaykham']; ?></td>
        <td><?php echo $data['chuandoan']; ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=edit&baid=".$data['benhnha_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=benhnhan&act=del&baid=".$data['benhnhan_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
