<?

include 'header.php';
?>

<?
if (isset($_GET["kurs"])) {
	$kurs=$_GET["kurs"];

	//$i=1;
}
else
{
	$kurs=3;
}



include 'conf.php';
$til=$_SESSION["til"];
$sql="select * from kurslar where id={$kurs} ";
$m_uz=array('Qaytish','Royxatga yozilish','Keyingisi');
$m_ru=array('Назад','Регистрироваться','Далее');
$baj=mysqli_query($con,$sql)or die(mysqli_error());
?>
<div class="row">	
<?
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
	if ($til=="uz") {
		?>
		<div class="offset-2 col-lg-8" style="height: 600px; border:4px solid white; border-radius: 10px; background-color: #aaa; margin-bottom: 10px; ">
<!<article>
				<!<header>
									<h3 style="text-align: center; margin-top: 10px;"><?=$chiq["knomi_uz"];?></h3>
									<hr>
				<!</header>
				<div style="margin: 0px auto; border:0px solid red; text-align: center;">
								<img src="images/<?=$chiq["photo"];?>" class="img-thumbnail" style="height: 200px; ">
					</div>
								<p><?echo $chiq["about_uz"] ;?></p>
				<!<footer>
									<a href="index.php" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['0'];?></a>
									<a href="ariza.php?kurs=<?=$chiq["knomi_uz"];?>" class="btn btn-info" style="margin: 5% auto;"><?=$m_uz['1'];?></a>

									<!-- <a href="?kurs=<?=$i+1?>" class="btn btn-info"><?=$m_uz['2'];?></a> -->
				<!</footer>
<!</article>
</div>
		<?
	}
if ($til=="ru") {
		?>
		<div class="offset-2 col-lg-8" style="height: 600px; border:4px solid white; border-radius: 10px; background-color: #eee; margin-bottom: 10px; ">
<!<article>
				<!<header>
									<h3 style="text-align: center; margin-top: 10px;"><?=$chiq["knomi_ru"];?></h3>
									<hr>
				<!</header>
							<img src="images/<?=$chiq["photo"];?>" class="img-thumbnail" style="height: 200px; margin: 0px auto;" >
								<p><?echo $chiq["about_ru"] ;?></p>
				<!<footer>
									<a href="index.php" class="btn btn-info"><?=$m_ru['0'];?></a>
									<a href="ariza.php?kurs=<?=$chiq["knomi_ru"];?>" class="btn btn-info"><?=$m_ru['1'];?></a>

									<!-- <a href="?kurs=<?=$i++?>" class="btn btn-info"><?=$m_ru['2'];?></a> -->
						
				<!</footer>
<!</article>
		</div>
		<?
	}

}

?>
