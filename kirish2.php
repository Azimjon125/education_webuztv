<?
include 'session.php';
//session_destroy();


if (!(isset($_SESSION["user"]))) {
$_SESSION["user"]=$_GET["ism"]; 
}
else
{
//echo $_SESSION["user"];

  ?>
<script type="text/javascript">
  window.location.href="index.php";
</script>
  <?
  //$_SESSION["user"]=$_GET["ism"];
}

?>

        <?
       // echo $_SESSION["til"];
$uz=array('Ism','Familya','Email','login','parol','Kirish','Eslab qolish');
$ru=array('Имя','Фамилия','По электронной почте','Логин','Пароль','Войти','Запомните');

        ?>
    
        
        

      <!-- <div class="col-lg-4">
      <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputtext">
    
        </label>
      <input type="text" class="form-control" name="login">
    </div>
<div class="form-group col-md-12">
      <label for="inputtext">
          
        </label>
      <input type="password" class="form-control" name="parol">
    </div>

    <input type="submit" name="ok" value="" class="btn btn-info">
 -->
<?
if (isset($_GET["ok"])) {
     $login=addslashes($_GET["login"]);
      $parol=addslashes($_GET["parol"]);
  include 'conf.php';
$sql="select * from users where login='{$login}' and parol='{$parol}'";
  $baj=mysqli_query($con,$sql)or die(mysqli_error());
  $chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC);
if ($chiq) {
  $_SESSION["user"]=$chiq["ism"];
  echo $_SESSION["user"];
  ?>
<script type="text/javascript">
 // alert("togri");
 window.location.href="index.php";
</script>

  <?

}
else
{
?>
<script type="text/javascript">
  alert('Login yoki parol xato');
 window.location.href="Kirish2.php";
</script>
<?
  //echo "Login yoki parol xato";
}

}
?>
<!-- ////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>WebUzTv</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" required="required" name="login" placeholder="<?
 if ($_SESSION["til"]=="uz") {
echo $uz["3"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["3"];  
}
        ?>
        " autofocus>
          <br>
          <input type="password" required="required" class="form-control" name="parol" placeholder="<?
 if ($_SESSION["til"]=="uz") {
echo $uz["4"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["4"];  
}
        ?>
">
          <label class="checkbox">
            <input type="hidden" value="remember-me" > <?
            
?>
            <span class="pull-right">
            <!-- <a href="Forgot.php" data-toggle="modal" > Forgot Password?-----</a> -->
            <a href="Forgot.php">Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" name="ok" type="submit"><i class="fa fa-lock"></i>   <?
 if ($_SESSION["til"]=="uz") {
echo $uz["5"];  
}
if ($_SESSION["til"]=="ru") {
echo $ru["5"];  
}
        ?>
      </button>
          <hr>
          <div class="login-social-link centered">
            <!-- <p>or you can sign in via your social network</p> -->
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="royxat.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>












