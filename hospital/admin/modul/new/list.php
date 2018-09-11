<title>List tin tức</title>
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
<h3>Danh sách tin tức</h3>
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
	$sql = "select * from news inner join menu on menu.menu_id = news.menu_id limit $start,$limit";
	$result = mysql_query($sql);
?>
<table width="800" border="0">
  <tr class="title">
    <td width="53">Stt</td>
    <td width="372">Tiêu đề tin</td>
    <td width="133">Tác giả</td>
    <td width="130">Thuộc mục</td>
    <td width="130">Trạng thái</td>
    <td width="39">Edit</td>
    <td width="47">Del</td>
  </tr>
  <?php $stt=1; while($data = mysql_fetch_assoc($result)){ ?>
  <tr>
  	<td><?php echo $stt; ?></td>
  	<td><?php echo $data['news_tieude']; ?></td>
  	<td><?php echo $data['news_tacgia']; ?></td>
  	<td><?php echo $data['menu_name']; ?></td>
    <td><?php if($data['news_trangthai'] == 1){ echo "Kích Hoạt";}else{ echo "Tắt";}; ?></td>
  	<td><a href="<?php echo BASEURL."admin/quantri.php?page=new&act=edit&nid=".$data['news_id']; ?>">Sửa</a></td>
  	<td><a href="<?php echo BASEURL."admin/quantri.php?page=new&act=del&nid=".$data['news_id']; ?>" onClick="return askconfirm()">Xóa</a></td>
  </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
<?php 
if($totalpages > 1){ // Co tu 2 trang tro len
	$current = ($start/$limit) + 1; // Trang hien hanh
	echo "<a href='".BASEURL."admin/quantri.php?page=new&act=list&pages=$totalpages&start=0'>First</a>";
	if($current != 1){
		$pre = $start - $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=new&act=list&pages=$totalpages&start=$pre'>Prev</a>";
	}
	for($i=1;$i<=$totalpages;$i++){
		$star = ($i - 1)*$limit;
		if($i == $current){
			echo "<span class='active'>".$i."</span>";
	    }else{
			echo "<a href='".BASEURL."admin/quantri.php?page=new&act=list&pages=$totalpages&start=$star'>".$i."</a>";
		}
	}
	if($current != $totalpages){
		$next = $start + $limit;
		echo "<a href='".BASEURL."admin/quantri.php?page=new&act=list&pages=$totalpages&start=$next'>Next</a>";
	}
	$last = ($totalpages - 1) * $limit;
	echo "<a href='".BASEURL."admin/quantri.php?page=new&act=list&pages=$totalpages&start=$last'>Last</a>";
}
?>
</div>