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
					<a href="index.php" class="logo"><h3>PROGRAM EDUCATION</h3></a>
					<?
if ($_SESSION["user"]=="") {

$uz=array("Kirish","Royxatdan Otish");
$uz=array("Вход","Регистрироваться");

	if ($_SESSION["til"]=="uz") {

?>

	<!-- <a href="des.php" class="btn-info btn">chiqish</a> -->
	<a href="Kirish.php" class="btn-info btn">Kirish</a>
	<a href="royxat.php" class="btn-info btn">Royxatdan Otish</a>
<?	}

if ($_SESSION["til"]=="ru") {
?>
	<!-- <a href="des.php" class="btn-info btn">Выход</a> -->
	<a href="Kirish.php" class="btn-info btn">Вход</a>
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
	<a href="des.php" class="btn-info btn">Chiqish</a>

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




			<section id="banner">
				<?
nom();
				?>
			</section>

			<!-- One -->
			
