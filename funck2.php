<?
include 'session.php';
include 'conf.php';
?>
<?
function menu ()
{
 	$m_uz=array('Yangiliklar','Kurslar','Sayt haqida');
 	$m_ru=array('Новости','Курсы','О сайте');
$til=$_SESSION["til"];
if ($til=="uz") {
	?>
<a href="news/index.php" style="font-size: 17px!important;"><?=$m_uz['0'];?></a>
<a href="Kurs.php" style="font-size: 17px!important;"><?=$m_uz['1'];?></a>
<a href="admin/contact.php" style="font-size: 17px!important;"><?=$m_uz['2'];?></a>
	<?
function nom ()
{
 $m_uz=array('Xush kelibsiz Dasturlash saytiga','Xaqiqiy Dasturlash bilimlariga ega boling');
	?>
	<h2 style="color: white; margin-top: 50px;"><?=$m_uz['0'];?></h2>
				<p><?=$m_uz['1'];?></p>
<?
}
}
if ($til=="ru") {

	?>
<a href="News/index.php" style="font-size: 17px!important;"><?=$m_ru['0'];?></a>
<a href="Kurs.php" style="font-size: 17px!important;"><?=$m_ru['1'];?></a>
<a href="admin/contact.php" style="font-size: 17px!important;"><?=$m_ru['2'];?></a>
	<?
function nom ()
{
$m_ru=array('Добро пожаловать на наш сайт','Получите реальные знания об украшении');
	?>
	<h2 style="color: white; margin-top: 50px;" ><?=$m_ru['0'];?></h2>
				<p><?=$m_ru['1'];?></p>
<?
}
}
}

?>
<!-- menu tugadi-->
<?
function k(){
	include 'conf.php';

$lim=6;
$l=0;

// if (isset($_GET["limm"])) {
//   $lim=$_GET["lim2"];
// //  $l=$lim-6;
// }



$til=$_SESSION["til"];
$user=$_SESSION["user"];
if ($user=="") {
$m_uz=array('Batafsil','Royxatdan Otish');
$m_ru=array('Подробный','royxatdan otish');
$ar="kirish2.php";
}
else{
$m_uz=array('Batafsil','Royxatga yozilish');
$m_ru=array('Подробный','Регистрироваться');
$ar="ariza.php";
}

$sql="select * from kurslar limit $l,$lim";
$baj=mysqli_query($con,$sql)or die(mysqli_error());
?>
<div class="row">
	
<?
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	if ($til=="uz") {
?>
		<div class="col-lg-4" style="height: 600px; border:4px solid white; border-radius: 10px; background-color: #aaa; margin-bottom: 10px; ">
<!<article>
				<!<header>
									<h3 style="text-align: center; margin-top: 10px;"><?=$chiq["knomi_uz"];?></h3>
									<? 
$op=$chiq["knomi_uz"];
									?>
									<hr>
				<!</header>
				<div style="margin: 0px auto; border:0px solid red; text-align: center;">
								<img src="images/<?=$chiq["photo"];?>" class="img-thumbnail" style="height: 200px; ">
					</div>
								<p><?echo substr($chiq["about_uz"],0,140)."..." ;?></p>
				<!<footer>
									<a href="kurs.php?kurs=<?=$chiq["id"];?>" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['0'];?></a>
									<a href="<?=$ar?>?kurs=<?=$chiq["knomi_uz"];?>" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['1'];?></a>
		

				<!</footer>
<!</article>
</div>
		<?
	}
if ($til=="ru") {
		?>
		<div class="col-lg-4" style="height: 600px; border:4px solid white; border-radius: 10px; background-color: #eee; margin-bottom: 10px; ">
<!<article>
				<!<header>
									<h3 style="text-align: center; margin-top: 10px;"><?=$chiq["knomi_ru"];?></h3>
									<hr>
				<!</header>
							<img src="images/<?=$chiq["photo"];?>" class="img-thumbnail" style="height: 200px; margin: 0px auto;" >
								<p><?echo substr($chiq["about_ru"],0,140)."..." ;?></p>
				<!<footer>
									<a href="kurs.php?kurs=<?=$chiq["id"];?>" class="btn btn-info"><?=$m_ru['0'];?></a>
									<a href="ariza.php?kurs=<?=$chiq["knomi_ru"];?>" class="btn btn-info"><?=$m_ru['1'];?></a>
				<!</footer>
<!</article>
		</div>
		<?
	}

}
echo "</div>";
}
?>


<?
function news(){
include 'conf.php';
$til=$_SESSION["til"];
$sql="select * from news";
$baj=mysqli_query($con,$sql)or die(mysqli_error());
?>
<div class="row">
<?
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
?>

							<div class="box person col-lg-4">
								<div class="image ">




									
									<img src="images/<?=$chiq["photo"]?>" alt="Person 2" class="img-thumbnail" style="width: 100%;" />
								</div>
								<a href="news/index.php" style="color: white;"><h3><?=$chiq["title_".$til]?></h3></a>
							<a href="news/index.php" style="color: white;"><p><?=substr($chiq["content_".$til],0,200);?></p> </a>
								
							</div>

<?



}
echo "</div>";
}

?>
<?
function h2lar ()
{
	$y=array("Yangiliklar","Новости");
	if ($_SESSION["til"]=="uz") {
		echo "<h2>".$y["0"]."</h2>";
	}
	if ($_SESSION["til"]=="ru") {
		echo "<h2>".$y["1"]."</h2>";
	}


}


?>

