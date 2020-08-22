<?
include 'conf.php';
include 'session.php';
$kurs_id=$_GET["kurs"];

 $del_id=$_GET["kurs"];

include 'header.php';
?>



<!-- <!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jqueru.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<style type="text/css">

</style>
</head>
<body>
 -->





	<div class="container col">
<div class="row">
  <div class="col" style="height: 100px;">
    
  </div>
</div>

		<div class="row">
			<div class="col-lg-4" >
        <?
      //  echo $_SESSION["til"];
$uz=array('Ism','tel','Email','login','parol','Kirish','Kurs nomi','bekor qilish');
//$ru=array('Ism_ru','tel_ru','Email_ru','login_ru','parol_ru','kirish_ru');
$ru=array('Имя','Телефон','По электронной почте','Логин','Пароль','Войти','Имя курса','отменить');

        ?>
      </div>
      <div class="col-lg-4" style="padding-bottom: 100px;">
			<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputtext">
        <?
 if ($_SESSION["til"]=="uz") {
echo $uz["0"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["0"];  
}
        ?>
          
        </label>
      <input type="text" class="form-control" 
value="<?
$ism=$_SESSION["user"];
$s1="select * from users where ism='{$ism}'";
$b=mysqli_query($con,$s1);
$ch=mysqli_fetch_array($b,MYSQLI_ASSOC);
echo  $ch['ism'];
?>"
      name="ism">
    </div>
<div class="form-group col-md-12">
      <label for="inputtext">
        <?
 if ($_SESSION["til"]=="uz") {
echo $uz["1"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["1"];  
}
        ?>
          
        </label>
      <input type="text"  class="form-control"  name="tel">
    </div>
<div class="form-group col-md-12">
      <label for="inputtext">
        <?
 if ($_SESSION["til"]=="uz") {
echo $uz["2"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["2"];  
}
        ?>
          
        </label>
      <input type="Email" class="form-control"
value="<?
$ism=$_SESSION["user"];
$s1="select * from users where ism='{$ism}'";
$b=mysqli_query($con,$s1);
$ch=mysqli_fetch_array($b,MYSQLI_ASSOC);
echo  $ch['email'];
?>"

        name="email">
    </div>
<div class="form-group col-md-12">
      <label for="inputtext">
        <?
 if ($_SESSION["til"]=="uz") {
echo $uz["6"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["6"];  
}
        ?>
          
        </label>
        <?
$s="select * from kurslar";
$b=mysqli_query($con,$s);
?>
 <label for="inputtext">
        <?
 if ($_SESSION["til"]=="uz") {
//echo $uz["3"];  
}
if ($_SESSION["til"]=="ru") {
//echo $ru["3"];  
}
        ?>
        </label>
<select class="form-control" name="k_id">
<?
//while ($ch=mysqli_fetch_array($b,MYSQLI_ASSOC)) {
	?>
<!-- <option><?=$ch["knomi_".$_SESSION["til"]];?></option> -->
	<option><?=$kurs_id?></option>

  <?
//}
        ?>
        </select>
    </div>
    
<?
if (isset($_SESSION["user"])) {
$reg=$_SESSION["user"];
$kurs_id=$_GET["kurs"];
$sp="select * from ariza where kurs_id='{$kurs_id}' AND ism='{$reg}'";
$sq=mysqli_query($con,$sp);
$ch=mysqli_fetch_array($sq,MYSQLI_ASSOC);
if ($ch) {
  

?>
<label for="inputtext">Siz Ro'yxatga allaqachon yozilgansiz</label><br>
  <input type="submit" name="ok1" value="  <?
 if ($_SESSION["til"]=="uz") {
echo $uz["7"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["7"];  
}
        ?>
      " class="btn btn-info">
<?
}
else
{
  ?>

  <input type="submit" name="ok" value="  <?
 if ($_SESSION["til"]=="uz") {
echo $uz["5"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["5"];  
}
        ?>
      " class="btn btn-info">
  <?
}


}

else {
?>

    <input type="submit" name="ok" value="  <?
 if ($_SESSION["til"]=="uz") {
echo $uz["5"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["5"];  
}
        ?>
      " class="btn btn-info">
      <?
}
      ?>

<?
if (isset($_GET["ok"])) {
  $ism=addslashes($_GET["ism"]);
   $tel=addslashes($_GET["tel"]);
    $email=addslashes($_GET["email"]);
     $login=addslashes($_GET["login"]);
      $parol=addslashes($_GET["parol"]);
      $k_id=$_GET["k_id"];
  include 'conf.php';
  $sql="insert into ariza value('','{$ism}','{$tel}','{$k_id}','{$email}')";
$baj=mysqli_query($con,$sql)or die(mysqli_error());
if ($baj) {
//echo "Royxatdan otddingiz";
  ?>
<script type="text/javascript">
  alert("Royxatdan otddingiz");
  window.location.href="index.php";

</script>

  <?

}

}
?>

<?
if (isset($_GET["ok1"])) {
  //$ism=addslashes($_GET["ism"]);
   //$tel=addslashes($_GET["tel"]);
    //$email=addslashes($_GET["email"]);
     //$login=addslashes($_GET["login"]);
      //$parol=addslashes($_GET["parol"]);
      $k_id=$_GET["k_id"];
  include 'conf.php';
 $reg=$_SESSION["user"];
 //$kurs_id=$_GET["kurs"];
echo $reg;
//echo $del_id;
echo $k_id;

 // $sql="insert into ariza value('','{$ism}','{$tel}','{$k_id}','{$email}')";
$sql="delete from ariza where kurs_id='{$k_id}' AND ism= '{$reg}'";

$baj=mysqli_query($con,$sql)or die(mysqli_error());
if ($baj) {
//echo "Royxatdan otddingiz";
  ?>
<script type="text/javascript">
  alert("Royxatdan otish bekor qilindi");
  window.location.href="index.php";

</script>

  <?

}

}
?>





			</div>
		</div>
		
	</div>

<?
include 'footer.php';
?>


</body>
</html>