<?
session_start();
if (isset($_GET["m"])) {
$_SESSION["nom"]=$_GET["m"];
echo $_SESSION["nom"];
}
?>
<script type="text/javascript">
	//function tt()
	{
//	var r=confirm("O'chirishni istaysizmi");
  //if (r==true) {
  	//return true;
  //}
  //if (r==false) {

  	//return false;
  //}
	//}
</script>


<?
include 'conf.php';

?>
<!--jtydrertxrcyvgbhkjnlkm-->
<?
function soni($v)
{
	include 'conf.php';
	if ($v==1) {
		$sql="select count(id) as soni from ariza";
	}
		if ($v==2) {
		$sql="select count(id) as soni from news";
	}
		if ($v==3) {
		$sql="select count(id) as soni from kurslar";
	}
		if ($v==4) {
		$sql="select count(id) as soni from users";
	}
	$baj=mysqli_query($con,$sql);
	$chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC);
	echo $chiq["soni"];
}


?>


<!--admin  show boshlandi-->
<?
function admin ()
{	
if (isset($_GET["m"])) {
	if ($_GET["m"]==1) {
include 'conf.php';

		$sql="select * from news";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
echo "<table class='table table-bordered table-dark'>";
$i=1;
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	?>
<tr>
	<td><?=$i;?></td>
	<td><?=$chiq["title_uz"]?></td>
 <td><?=$chiq["title_ru"]?></td>
 <td><?=substr($chiq["content_uz"],0,200);?> </td>
 <td><?=substr($chiq["content_ru"],0,200);?></td>
 <td><img src="images/<?=$chiq["photo"]?>" class="" style="width: 90px;"></td>
 <td><a href="?del=<?=$chiq["id"]?>" class="btn btn-danger" onclick="tt();"><i class="oi oi-delete"></i> </a></td>
<td><a href="?wri=<?=$chiq["id"]?>" class="btn btn-info"><i class="oi oi-pencil"></i> </a></td>
</tr>

	<?
	$i++;
}
?>
<a href="?qosh=1" class="btn btn-info" style="margin: 10px; ">Yangi qoshish</a>
<?
}
//tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt




	if ($_GET["m"]==2) {
include 'conf.php';

		$sql="select * from kurslar";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());

echo "<table class='table table-bordered table-dark'>";
$i=1;
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	?>
<tr >
	<td><?=$i?></td>
	<td><?=$chiq["knomi_uz"]?></td>
 <td><?=$chiq["knomi_ru"]?></td>
 <td><?=substr($chiq["about_uz"],0,200);?> </td>
 <td><?=substr($chiq["about_ru"],0,200);?></td>
 <td><img src="images/<?=$chiq["photo"]?>" class="" style="width: 80px;"></td>
 <td><a href="?del=<?=$chiq["id"]?>" class="btn btn-danger" onclick="tt();"><i class="oi oi-delete"></i> </a></td>
<td><a href="?wri=<?=$chiq["id"]?>" class="btn btn-info"><i class="oi oi-pencil"></i> </a></td>
</tr>

	<?
	$i++;
}
?>
<a href="?qosh=2" class="btn btn-info" style="margin: 10px;">Yangi qoshish</a>
<?
}
//tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt




	if ($_GET["m"]==3) {
include 'conf.php';

		$sql="select * from users";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
echo "<table class='table table-bordered table-dark'>";
$i=1;
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	?>
<tr>
	<td><?=$i?></td>
	<td><?=$chiq["ism"]?></td>
 <td><?=$chiq["fam"]?></td>
 <td><?=$chiq["email"]?> </td>
 <td><?=$chiq["login"]?></td>
  <!-- <td><?=$chiq["parol"]?></td> -->
  <td>***********</td>
 <td><a href="?del=<?=$chiq["id"]?>" class="btn btn-danger"><i class="oi oi-delete"></i> </a></td>

<td><a href="?wri=<?=$chiq["id"]?>" class="btn btn-info"><i class="oi oi-pencil"></i> </a></td>
</tr>

	<?
	$i++;
}
}
//ttttttttttttttttttttttttttttttttttttttttttttttttttttt
if ($_GET["m"]==4) {
include 'conf.php';

		$sql="select * from ariza";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
echo "<table class='table table-bordered table-dark'>";
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	?>
<tr>
	<td><?=$chiq["id"]?></td>
	<td><?=$chiq["ism"]?></td>
 <td><?=$chiq["tel"]?></td>
 <td><?=$chiq["email"]?> </td>
 <td><?=$chiq["kurs_id"]?></td>
 <td><a href="" class="btn btn-danger"><i class="oi oi-phone"></i> </a></td>
<td>
<input type="checkbox" name="ok" class="btn btn-info">
</td>
</tr>

	<?
}
}
//tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt

}
}
				?>


<!--admin  show tugadi-->
<!--delete  boshlandi-->
<?

if (isset($_GET["del"])) {
	include 'conf.php';
$del=$_GET["del"];
$nom=$_SESSION["nom"];

if ($nom==1) {
$s="delete from news where id={$del}";
}
if ($nom==2) {
	$s="delete from kurslar where id={$del}";
}
if ($nom==3) {
	$s="delete from users where id={$del}";
}
$baj=mysqli_query($con,$s);
if ($baj) {
?>
<script type="text/javascript">
	window.location.href="admin.php?m=<?=$nom?>";
</script>
<?
}
}
?>
<!-- delete tugadi-->
<!-- update bosglandi-->

<?
 function wi()
{
if (isset($_GET["wri"])) {
	$wri=$_GET["wri"];
$nom=$_SESSION["nom"];
	if ($nom==1) {
include 'conf.php';

		$sql="select * from news where id={$wri}";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
		?>
<form>
		<?
	while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
?>
<div class="row" >
	<div class="col-lg-6" >
<input type="text" name="title_uz" value="<?=$chiq["title_uz"]?>" class="form-control">
<textarea name="content_uz" class="form-control " style="height: 500px; margin-top: 20px;"> <?=$chiq["content_uz"]?> </textarea>
<br>
<input type="file" name="photo" value="<?=$chiq["photo"]?>" class="form-control">
</div>

<div class="col-lg-6">
<input type="text" name="title_ru" value="<?=$chiq["title_ru"]?>" class="form-control " style="float: right;"><br>

<textarea name="content_ru" class="form-control " style="float: right; height: 500px; margin-top: 20px;"> <?=$chiq["content_ru"]?> </textarea>
<br>
<input type="submit" name="ok" value="O'zgartirish" class=" btn btn-info" style="margin-top: 30px;">
<input type="hidden" name="hide" value="<?=$wri?>">
</div>
<?

}
?>
</div></form>
<?

}

	if ($nom==2) {
include 'conf.php';

		$sql="select * from kurslar where id={$wri}";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
		?>
<form>
		<?
	while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
?>
<div class="row">
	<div class="col-lg-6">
<input type="text" name="knomi_uz" value="<?=$chiq["knomi_uz"]?>" class="form-control">
<textarea name="about_uz" class="form-control " style="height: 500px; width: 500px; margin-top: 20px;"> <?=$chiq["about_uz"]?> </textarea>
<br>
<input type="file" name="photo" value="<?=$chiq["photo"]?>" class="form-control">

</div>
<div class="col-lg-6">
<input type="text" name="knomi_ru" value="<?=$chiq["knomi_ru"]?>" class="form-control " style="float: right;">
<textarea name="about_ru" class="form-control " style="float: right; height: 500px; margin-top: 20px;"> <?=$chiq["about_ru"]?> </textarea>
<br>
<input type="submit" name="ok" value="O'zgartirish" class="btn-info btn" style="margin-top: 30px;">
<input type="hidden" name="hide" value="<?=$wri?>">
</div>



<?

}
?>

</div> </form>
<?
}
// ----------------

	if ($nom==3) {
include 'conf.php';

		$sql="select * from users where id={$wri}";
		$baj=mysqli_query($con,$sql)or die(mysqli_error());
		?>
<form>
		<?
	while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
?>
<div class="row">
	<div class="col-lg-6">
<input type="text" name="ism" value="<?=$chiq["ism"];?>" class="form-control">
<input type="text" name="fam" value="<?=$chiq["fam"];?>" class="form-control">
<input type="email" name="email" value="<?=$chiq["email"];?>" class="form-control">

<br>

</div>
<div class="col-lg-6">
<input type="text" name="login" value="<?=$chiq["login"];?>" class="form-control">
<input type="password" name="parol" value="" placeholder="Odingi parol" class="form-control">
<input type="password" name="parol1" value="" placeholder="Yangi parol" class="form-control">
<input type="password" name="parol2" value="" placeholder="Takrorlash" class="form-control">

<br>
<input type="submit" name="ok" value="O'zgartirish" class="btn-info btn" style="margin-top: 30px;">
<input type="hidden" name="hide" value="<?=$wri?>">


</div>



<?

}
?>

</div> </form>
<?
}

// ----------------
}

if (isset($_GET["ok"])) {
	//echo "ishalayapti";
$nom=$_SESSION["nom"];	
$wri=$_GET["hide"];
echo $wri;
echo $nom;
include 'conf.php';
$t_uz=addslashes($_GET["title_uz"]);
$t_ru=addslashes($_GET["title_ru"]);
$c_uz=addslashes($_GET["content_uz"]);
$c_ru=addslashes($_GET["content_ru"]);
$k_uz=addslashes($_GET["knomi_uz"]);
$k_ru=addslashes($_GET["knomi_ru"]);
$a_uz=addslashes($_GET["about_uz"]);
$a_ru=addslashes($_GET["about_ru"]);
$i=addslashes($_GET["ism"]);
$f=addslashes($_GET["fam"]);
$e=addslashes($_GET["email"]);
$l=addslashes($_GET["login"]);
$p=addslashes($_GET["parol"]);
$p1=addslashes($_GET["parol1"]);
$p2=addslashes($_GET["parol2"]);



if ($nom==1) {
$sql="update news set vaqt=NOW(),title_uz='{$t_uz}',title_ru='{$t_ru}',content_uz='{$c_uz}',content_ru='{$c_ru}' where id={$wri}";

}
if ($nom==2) {
$sql="update kurslar set knomi_uz='{$k_uz}',knomi_ru='{$k_ru}',about_uz='{$a_uz}',about_ru='{$a_ru}' where id={$wri}";

}
if ($nom==3) {
if (($p1=="")&&($p2=="")) {

?>
<script type="text/javascript">
	alert("Yangi parol kiritilmadi");
	window.location.href="admin.php?m=<?=$nom?>";
</script>
<?
}
else
 {

if (!($p1==$p2)) {

?>



<script type="text/javascript">
	alert("Yangi parollardan biri xato");
	window.location.href="admin.php?m=<?=$nom?>";
</script>
<?
	
}


else{
$sql1="select * from users where id='{$wri}'";
$baj1=mysqli_query($con,$sql1)or die(mysqli_error());
$chiq=mysqli_fetch_array($baj1,MYSQLI_ASSOC);
if ($chiq["parol"]==$p) {

$sql="update users set ism='{$i}',fam='{$f}',email='{$e}',login='{$l}',parol='{$p2}' where id={$wri} ";	
}
else
{
?>

<script type="text/javascript">
	alert("foydalanuvchi paroli xato");
	window.location.href="admin.php?m=<?=$nom?>";
</script>
<?
}

}
}
}

//echo $sql;
$baj=mysqli_query($con,$sql);
//echo "======";
//echo $baj;
if ($baj) {
//echo "qani";
?>

<script type="text/javascript">
	alert("Ozgarishlar saqlandi");
	window.location.href="admin.php?m=<?=$nom?>";
</script>
<?	
}
else
{
	alert("xatolik");
}


}
}
?>
<!-- update tugadi-->

<?
function q()
{
	

if (isset($_GET["qosh"])) {
	$qosh=$_GET["qosh"];
	$nom=$_SESSION["nom"];
	if ($nom==1) {
?>
<div class="row">
<div class="col-lg-6 " >
<form method="post" enctype="multipart/form-data">
	<label>title_uz</label>
	<input type="text" name="title_uz" class="form-control">
		<label>title_ru</label>
	<input type="text" name="title_ru" class="form-control">
	<label>content_uz</label>
	<input type="text" name="content_uz" class="form-control">
	<label>content_ru</label>
	<input type="text" name="content_ru" class="form-control">
	<label>photo</label>
	<input type="file" name="photo" class="form-control">
<input type="submit" name="sh" class="btn btn-info" value="qosh">

</form>
</div>
</div>

<?

	}

if ($nom==2) {
?>
<div class="col-lg-6">
<form method="post" enctype="multipart/form-data">
	<label>knomi_uz</label>
	<input type="text" name="knomi_uz" class="form-control">
		<label>knomi_ru</label>
	<input type="text" name="knomi_ru" class="form-control">
	<label>about_uz</label>
	<input type="text" name="about_uz" class="form-control">
	<label>about_ru</label>
	<input type="text" name="about_ru" class="form-control">
	<label>photo</label>
	<input type="file" name="photo" class="form-control">
<input type="submit" name="sh1" class="btn btn-info" value="qosh">

</form>
</div>


<?
}
	}

}


?>
<?
if (isset($_POST["sh"])) {
	//echo "if ishalayapti";
$t_uz=addslashes($_POST["title_uz"]);
$t_ru=addslashes($_POST["title_ru"]);
$c_uz=addslashes($_POST["content_uz"]);
$c_ru=addslashes($_POST["content_ru"]);
//$k_uz=addslashes($_GET["knomi_uz"]);
//$k_ru=addslashes($_GET["knomi_ru"]);
//$a_uz=addslashes($_GET["about_uz"]);
//$a_ru=addslashes($_GET["about_ru"]);
$r=$_FILES["photo"]["tmp_name"];
$r2=$_FILES["photo"]["name"];
move_uploaded_file($r, 'images/'.$r2);




	$sql="insert into news value('','{$t_uz}','{$t_ru}','{$c_uz}','{$c_ru}','{$r2}',NOW())";
	$bal=mysqli_query($con,$sql)or die(mysqli_error());
	if ($bal) {
?>

<script type="text/javascript">
	alert("Malumot Qo'shildi");
	window.location.href="admin.php?m=<?=$_SESSION["nom"]?>";
</script>
<?
	}
}
?>
<?
if (isset($_POST["sh1"])) {
	//echo "if ishalayapti";
//$t_uz=addslashes($_POST["title_uz"]);
//$t_ru=addslashes($_POST["title_ru"]);
//$c_uz=addslashes($_POST["content_uz"]);
//$c_ru=addslashes($_POST["content_ru"]);
$k_uz=addslashes($_POST["knomi_uz"]);
$k_ru=addslashes($_POST["knomi_ru"]);
$a_uz=addslashes($_POST["about_uz"]);
$a_ru=addslashes($_POST["about_ru"]);
$r=$_FILES["photo"]["tmp_name"];
$r2=$_FILES["photo"]["name"];
move_uploaded_file($r, 'images/'.$r2);

	$sql="insert into kurslar value('','{$k_uz}','{$k_ru}','{$a_uz}','{$a_ru}','{$r2}')";
	$bal=mysqli_query($con,$sql)or die(mysqli_error());
	if ($bal) {
?>

<script type="text/javascript">
	alert("Malumot Qo'shildi");
	window.location.href="admin.php?m=<?=$_SESSION["nom"]?>";
</script>
<?
	}
}
// }
?>
