<?
include 'session.php';
?>
<? 
//echo $_SESSION["user"];
?><!DOCTYPE HTML>
<html> 
	<head>
		<title>WebUzTv.Uz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><h3>PROGRAM EDUCATION</h3>
<p style="left: -110px; font-size: 30px; padding-top: 1px;">WebUzTv</p>
					</a>
					<?
if ($_SESSION["user"]=="") {

$uz=array("Kirish","Royxatdan Otish");
$uz=array("Вход","Регистрироваться");	
	if ($_SESSION["til"]=="uz") {
?>
	<a href="Kirish2.php" class="btn-info btn">Kirish</a>
	<a href="royxat.php" class="btn-info btn">Royxatdan Otish</a>
<?	}

if ($_SESSION["til"]=="ru") {
?>
	<a href="Kirish2.php" class="btn-info btn">Вход</a>
	<a href="royxat.php" class="btn-info btn">Регистрироваться</a>
<?
}
	?>


<!-- 	<a href="Kirish.php" class="btn-info btn">Kirish</a>
	<a href="royxat.php" class="btn-info btn">Royxatdan Otish</a> -->
<?
}
if (!($_SESSION["user"]=="")) {
	?>
	<a href=""><?=$_SESSION["user"];?></a>
<?
if ($_SESSION["til"]=="ru") {
?>
	<a href="des.php" class="btn-info btn">Выход</a>

<?
}
if ($_SESSION["til"]=="uz") {
?>
	<a href="des.php" class="btn-info btn">chiqish</a>

<?
}
?>
<?
if ($_SESSION["user"]=="Azimjon") { ?>
	<a href="admin.php" class="btn-info btn">Tekshirish</a>

<?}
}
					?>
					
					<a href="?til=uz" class="btn btn-info" style="margin-left:0px;">UZ</a>
					<a href="?til=ru" class="btn btn-info">РУ</a>
					<nav id="nav">
						<?
include 'funck2.php';
                menu();
						?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<?
nom();
				?>

			</section>

<div class="col-lg-6 offset-6">
	
		<div class="col-lg-6">
    <div class="input-group">
     <form method="GET" >
      <input type="text" class="form-control" name="lim2" placeholder="" aria-label="Search for...">
      <span class="input-group-btn">
      <input type="submit" value="ok" class="form-control" name="lim" placeholder="" aria-label="Search for...">
       
      </span>
      </form>
    </div>
  </div>
	
</div>

			<!-- One -->
				<section id="one" class="wrapper">
					<div class="inner">
						<div class="flex flex-3">
							<?
include 'funck3.php';
if (isset($_GET["li"])) {
	// if ($_GET["lim"]==12) {
	// 	k2();
	// }
	// if ($_GET["lim"]==18) {
	// 	k3();
	// }
	// 	if ($_GET["lim"]==6) {
	// 	k();
	// }
	k2();
}
else
{
//k();
}
							?>
						</div>
					</div>


<!-- <a href="inde.php">kirish</a> -->

				</section>
<?

if (isset($_SESSION["user"])) {
	

include 'conf.php';
$ism=$_SESSION["user"];
echo $ism;
$sl="select * from users where ism='{$ism}'";
$m=mysqli_query($con,$sl);
$ch=mysqli_fetch_array($m,MYSQLI_ASSOC);
$p=$ch["page"];
if (($p>0)&&(!(isset($_GET["lim"])))) {



k2($p);
echo "<h1> lim ishladi</h1>";

}
else{

if (isset($_GET["lim"])) {
include 'conf.php';

$son=$_GET["lim2"];
echo "limit UPDATE";
$ism=$_SESSION["user"];
$un="UPDATE users SET page={$son} where ism='{$ism}'";
$b=mysqli_query($con,$un);

$sql="select count(id) as soni from kurslar";
//$s=mysqli_query($con, $sql);
$baj=mysqli_query($con,$sql);
	$chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC);
	$soni= $chiq["soni"];
	$ja=$soni/$son;
//echo "<h1>".$soni."</h2>";
//echo "<h1>".$son."</h2>";
k2($son);




?>
<div class="ro">
	<div class="col-lg-4 offset-5">
		<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="index.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
<?

for ($i=1; $i < $ja; $i++) { 
	//echo $i;
	?>
    <!-- <li class="page-item"><a class="page-link" href="?lim=12">2</a></li> -->
    <!-- <li class="page-item"><a class="page-link" href="?lim=18">3</a></li> -->
    <li class="page-item"><a class="page-link" href="?lim=24"><?=$i?></a></li>


<?	
}
?>
<li class="page-item">
      <a class="page-link" href="?lim=<?=$s+=6?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
	</div>
	
</div>
<?

}
}
}

else
{
	k();
}

?>
    





			<!-- Two -->
				<section id="two" class="wrapper style1 special">
					<div class="inner">
						<header>
							<?
h2lar();
							?>
						</header>


						<div class="flex flex-4">
							
<?

news();


?>




<!--							<div class="box person">
								<div class="image round">
									<img src="images/pic03.jpg" alt="Person 1" />
								</div>
								<h3>Magna</h3>
								<p>Cipdum dolor</p>
							</div>
							<div class="box person">
								<div class="image round">
									<img src="images/pic04.jpg" alt="Person 2" />
								</div>
								<h3>Ipsum</h3>
								<p>Vestibulum comm</p>
							</div>
							<div class="box person">
								<div class="image round">
									<img src="images/pic05.jpg" alt="Person 3" />
								</div>
								<h3>Tempus</h3>
								<p>Fusce pellentes</p>
							</div>
							<div class="box person">
								<div class="image round">
									<img src="images/pic06.jpg" alt="Person 4" />
								</div>
								<h3>Dolore</h3>
								<p>Praesent placer</p>
							</div>
	-->
						</div>
					</div>
				</section>

			<!-- Three -->
		<!--		<section id="three" class="wrapper special">
					<div class="inner">
						<header class="align-center">
							<h2>Nunc Dignissim</h2>
							<p>Aliquam erat volutpat nam dui </p>
						</header>
						<div class="flex flex-2">
							<article>
								<div class="image fit">
									<img src="images/pic01.jpg" alt="Pic 01" />
								</div>
								<header>
									<h3>Praesent placerat magna</h3>
								</header>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
								<footer>
									<a href="#" class="button special">More</a>
								</footer>
							</article>
							<article>
								<div class="image fit">
									<img src="images/pic02.jpg" alt="Pic 02" />
								</div>
								<header>
									<h3>Fusce pellentesque tempus</h3>
								</header>
								<p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
								<footer>
									<a href="#" class="button special">More</a>
								</footer>
							</article>
						</div>
					</div>
				</section>
-->
		<!-- Footer -->
			<footer id="footer" style="background-color: black;">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; Azimjon. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			

	</body>
</html>