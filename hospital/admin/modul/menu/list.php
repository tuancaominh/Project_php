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
<h3>Danh sách menu</h3>
<?php
	$sql = "select *from menu order by menu_order asc";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<table width="580" height="57" border="1">
  <tr class="title">
    <td width="50">STT</td>
    <td width="289">Tên menu</td>
    <td width="49">Thứ tự</td>
    <td width="73">Trang thái</td>
    <td width="35">Edit</td>
    <td width="44">Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['menu_name']; ?></td>
        <td><?php echo $data['menu_order']; ?></td>
        <td><?php if($data['menu_trangthai'] == 1){echo "<font color='#0000FF'>Kích hoạt</font>";}else{echo "Tắt";} ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=menu&act=edit&mid=".$data['menu_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=menu&act=del&mid=".$data['menu_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
