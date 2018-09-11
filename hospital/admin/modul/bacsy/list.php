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
		$tsql = "select * from news";
		$tresult = mysql_query($tsql);
		$total = mysql_num_rows($tresult); // Tong so record co trang database
		$totalpages = ceil($total/$limit);
	}
	$sql = "select * from bacsy inner join chuyenkhoa on bacsy.khoa_id = chuyenkhoa.khoa_id limit $start,$limit";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<h3>Danh sách bác sỹ</h3>
<table width="800" height="57" border="1">
  <tr class="title">
    <td>STT</td>
    <td>Tên Bác sỹ</td>
    <td>Thuộc Khoa</td>
    <td>Trang thái</td>
    <td>Edit</td>
    <td>Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['bacsy_ten']; ?></td>
        <td><?php echo $data['ten_khoa']; ?></td>
        <td><?php if($data['trangthai'] == 1){echo "<font color='#0000FF'>Kích hoạt</font>";}else{echo "Tắt";} ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=bacsy&act=edit&bacsyid=".$data['bacsy_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=bacsy&act=del&bacsyid=".$data['bacsy_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
<?php 
if($totalpages > 1){ // Co tu 2 trang tro len
	$current = ($start/$limit) + 1; // Trang hien hanh
	if($current != 1){
		$pre = $start - $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=bacsy&act=list&pages=$totalpages&start=$pre'>Prev</a>";
	}
	for($i=1;$i<=$totalpages;$i++){
		$star = ($i - 1)*$limit;
		if($i == $current){
			echo "<span class='active'>".$i."</span>";
	    }else{
			echo "<a href='".BASEURL."admin/quantri.php?page=bacsy&act=list&pages=$totalpages&start=$star'>".$i."</a>";
		}
	}
	if($current != $totalpages){
		$next = $start + $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=bacsy&act=list&pages=$totalpages&start=$next'>Next</a>";
	}
}
?>
</div>