<?
session_start();
if ($_SESSION["user"]=="Azimjon") {
	


if (isset($_GET["m"])) {
$_SESSION["nom"]=$_GET["m"];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/open-iconic-bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<style type="text/css">
	body
	{
		background-color: #aaa;
	}
	div
	{

	}
</style>
</head >
<body>
	<div class="container col" >
		<div class="row" style="margin-top: 20px; ">
			<div class="col-lg-3">
				<div class="list-group col-lg-12">
<?
include 'funck.php';

?>  
<a href="index.php" class="list-group-item list-group-item-action list-group-item-success"> Bosh sahifa</a>
  <a href="?m=4?d=0" class="list-group-item list-group-item-action list-group-item-success <? if($_GET["m"]==4) echo "active"; ?>"> Arizalar  <span class="badge badge-primary badge-pill"  style="float: right;"> <? soni(1);?> </span></a>
  <a href="?m=1" class="list-group-item list-group-item-action list-group-item-primary <? if($_GET["m"]==1) echo "active"; ?> ">Yangiliklar  <span class="badge badge-danger badge-pill" style="float: right;"> <? soni(2);?> </span></a>
  <a href="?m=2" class="list-group-item list-group-item-action list-group-item-secondary <? if($_GET["m"]==2) echo "active"; ?> ">  Kurslar  <span class="badge badge-danger badge-pill" style="float: right;"> <? soni(3);?> </span></a>
  <a href="?m=3" class="list-group-item list-group-item-action list-group-item-success <? if($_GET["m"]==3) echo "active"; ?> "> user  <span class="badge badge-primary badge-pill" style="float: right;"> <? soni(4);?> </span></a>
  
</div>
			</div>
			<div class="col-lg-9">
				<?
admin();
wi();
q();
				?>
			</div>
		</div>
		



	</div>

</body>
</html>

<?
}
else
{
	?>
<script type="text/javascript">
	window.location.href="index.php";
</script>
	<?
}

?>