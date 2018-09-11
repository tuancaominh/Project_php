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
<h3>Danh sách thành viên</h3>
<?php
	$sql = "select *from danhmuc order by danhmuc_oder desc";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<table width="580" height="57" border="1">
  <tr class="title">
    <td width="50">STT</td>
    <td width="289">Tên danh mục</td>
    <td width="49">Thứ tự</td>
    <td width="73">Trang thái</td>
    <td width="35">Edit</td>
    <td width="44">Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['danhmuc_ten']; ?></td>
        <td><?php echo $data['danhmuc_oder']; ?></td>
        <td><?php if($data['danhmuc_trangthai'] == 1){echo "<font color='#0000FF'>Kích hoạt</font>";}else{echo "Tắt";} ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=danhmuc&act=edit&did=".$data['danhmuc_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=danhmuc&act=del&did=".$data['danhmuc_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
