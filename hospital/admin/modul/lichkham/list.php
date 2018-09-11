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
<h3>Lịch khám bệnh</h3>
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
		$tsql = "select * from lichkham";
		$tresult = mysql_query($tsql);
		$total = mysql_num_rows($tresult); // Tong so record co trang database
		$totalpages = ceil($total/$limit);
	}
	$sql = "select *from lichkham inner join bacsy on bacsy.bacsy_id = lichkham.bacsy_id order by lichkham_id desc limit $start,$limit ";
	$result = mysql_query($sql);
	$numrows = mysql_num_rows($result);
?>
<table width="800" height="57" border="1">
  <tr class="title">
    <td>STT</td>
    <td>Tên bệnh nhân</td>
    <td>Bác sỹ khám</td>
    <td>Ngày khám</td>
    <td>Điện thoại liêc lạc</td>
    <td>Edit</td>
    <td>Xóa</td>
  </tr>
  <?php	$stt = 1; while($data = mysql_fetch_assoc($result)) { ?>
  	<tr>
    	<td><?php echo $stt; ?></td>
        <td><?php echo $data['ten_nguoikham']; ?></td>
        <td><?php echo $data['bacsy_ten']; ?></td>
        <td><?php echo $data['ngaykham']; ?></td>
        <td><?php echo $data['dienthoai_lienlac'] ?></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=benhnha&act=edit&uid=".$data['benhnha_id']; ?>">Sửa</a></td>
        <td><a href="<?php echo BASEURL."admin/quantri.php?page=benhnha&act=del&uid=".$data['benhnhan_id']; ?>" onclick="return askconfim()">Xóa</a></td>
    </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
<?php 
if($totalpages > 1){ // Co tu 2 trang tro len
	$current = ($start/$limit) + 1; // Trang hien hanh
	echo "<a href='".BASEURL."admin/quantri.php?page=lichkham&act=list&pages=$totalpages&start=0'>First</a>";
	if($current != 1){
		$pre = $start - $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=lichkham&act=list&pages=$totalpages&start=$pre'>Prev</a>";
	}
	for($i=1;$i<=$totalpages;$i++){
		$star = ($i - 1)*$limit;
		if($i == $current){
			echo "<span class='active'>".$i."</span>";
	    }else{
			echo "<a href='".BASEURL."admin/quantri.php?page=lichkham&act=list&pages=$totalpages&start=$star'>".$i."</a>";
		}
	}
	if($current != $totalpages){
		$next = $start + $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=lichkham&act=list&pages=$totalpages&start=$next'>Next</a>";
	}
	$last = ($totalpages - 1) * $limit;
	echo "<a href='".BASEURL."admin/quantri.php?page=lichkham&act=list&pages=$totalpages&start=$last'>Last</a>";
}
?>
</div>
