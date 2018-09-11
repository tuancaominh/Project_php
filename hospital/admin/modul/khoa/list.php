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
<h3>Danh sách các chuyên khoa</h3>
<?php
	$sql = "select *from chuyenkhoa";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<table width="800" height="57" border="1">
  <tr class="title">
    <td>STT</td>
    <td>Tài Chuyên khoa</td>
    <td>Trang thái</td>
    <td>Edit</td>
    <td>Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['ten_khoa']; ?></td>
        <td><?php if($data['trangthai'] == 1){echo "<font color='#0000FF'>Kích hoạt</font>";}else{echo "Tắt";} ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=khoa&act=edit&khoaid=".$data['khoa_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=khoa&act=del&khoaid=".$data['khoa_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
