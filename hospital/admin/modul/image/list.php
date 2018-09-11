<title>Danh sách ảnh</title>
<h4>Danh sách ảnh</h4>
<br/>
<style type="text/css">
td{
	border:1px solid #CCC;
	padding:2px 6px;
}
tr.title td{
	font-weight:bold;
	color:#060;
}
#pagination{
	text-align:center;
	padding:10px 0px
}
#pagination a,
#pagination span{
	text-decoration:none;
	padding:1px 7px;
	border:1px solid #CCC;
	margin-right:3px
}
.active{
	color:#F00;
	font-weight:bold
}
</style>
<?php
$limit = 10; // Hien thi 2 tin tren 1 trang
	if(isset($_GET['start'])){
		$start = $_GET['start'];
	}else{
		$start = 0; // lay tu tin dau tien
	}
	if(isset($_GET['pages'])){
		$totalpages = $_GET['pages'];
	}else{
		$tsql = "select * from image";
		$tresult = mysql_query($tsql);
		$total = mysql_num_rows($tresult); // Tong so record co trang database
		$totalpages = ceil($total/$limit);
	}
	$sql = "select * from image inner join danhmuc on danhmuc.danhmuc_id = image.danhmuc_id limit $start,$limit";
	$result = mysql_query($sql);
?>
<table width="740" border="0">
  <tr class="title">
    <td width="48">Stt</td>
    <td width="265">Tiêu đề</td>
    <td width="133">Tên ảnh</td>
    <td width="78">Thuộc mục</td>
    <td width="78">Trạng thái</td>
    <td width="55">Edit</td>
    <td width="53">Del</td>
  </tr>
  <?php $stt=1; while($data = mysql_fetch_assoc($result)){ ?>
  <tr>
  	<td><?php echo $stt; ?></td>
  	<td><?php echo $data['image_title']; ?></td>
  	<td><?php echo $data['image_tenanh']; ?></td>
  	<td><?php echo $data['danhmuc_ten']; ?></td>
    <td><?php if($data['image_trangthai'] == 1){ echo "<font color='#FF0000'>Kích hoạt</font>";}else{ echo "Tắt";}; ?></td>
  	<td><a href="<?php echo BASEURL."admin/quantri.php?page=image&act=edit&iid=".$data['image_id']; ?>">Sửa</a></td>
  	<td><a href="<?php echo BASEURL."admin/quantri.php?page=image&act=del&iid=".$data['image_id']; ?>" onClick="return askconfirm()">Xóa</a></td>
  </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
<?php 
if($totalpages > 1){ // Co tu 2 trang tro len
	$current = ($start/$limit) + 1; // Trang hien hanh
	echo "<a href='".BASEURL."admin/quantri.php?page=image&act=list&pages=$totalpages&start=0'>First</a>";
	if($current != 1){
		$pre = $start - $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=image&act=list&pages=$totalpages&start=$pre'>Prev</a>";
	}
	for($i=1;$i<=$totalpages;$i++){
		$star = ($i - 1)*$limit;
		if($i == $current){
			echo "<span class='active'>".$i."</span>";
	    }else{
			echo "<a href='".BASEURL."admin/quantri.php?page=image&act=list&pages=$totalpages&start=$star'>".$i."</a>";
		}
	}
	if($current != $totalpages){
		$next = $start + $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=image&act=list&pages=$totalpages&start=$next'>Next</a>";
	}
	$last = ($totalpages - 1) * $limit;
	echo "<a href='".BASEURL."admin/quantri.php?page=image&act=list&pages=$totalpages&start=$last'>Last</a>";
}
?>
</div>