<?
include 'session.php';
include 'conf.php';
?>
<?

function k2($v)
{
	include 'conf.php';




$lim=$v;
if ($lim==0) {
$lim=6;
}
$l=0;
// if (isset($_GET["lim"])) {
//   $lim=$_GET["lim"];
//   $l=$lim-6;
// }

echo "<h1>".$lim." lim ichlari ishladi</h1>";

$til=$_SESSION["til"];
$sql="select * from kurslar limit {$l},{$lim}";
$m_uz=array('Batafsil','Royxatga yozilish');
$m_ru=array('Подробный','Регистрироваться');
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
									<hr>
				<!</header>
				<div style="margin: 0px auto; border:0px solid red; text-align: center;">
								<img src="images/<?=$chiq["photo"];?>" class="img-thumbnail" style="height: 200px; ">
					</div>
								<p><?echo substr($chiq["about_uz"],0,140)."..." ;?></p>
				<!<footer>
									<a href="kurs.php?kurs=<?=$chiq["id"];?>" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['0'];?></a>
									<a href="ariza.php?kurs=<?=$chiq["id"];?>" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['1'];?></a>
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
									<a href="ariza.php?kurs=<?=$chiq["id"];?>" class="btn btn-info"><?=$m_ru['1'];?></a>
				<!</footer>
<!</article>
		</div>
		<?
	}

}
echo "</div>";
}

?>
