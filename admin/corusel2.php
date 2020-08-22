<section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">


      <?php 
 include 'conf.php';
$i=4;
$select="SELECT * FROM musics order by id desc LIMIT 3";
$baj=mysqli_query($con,$select)or die(mysql_error());
while ($chiq=mysqli_fetch_array($baj,MYSQLI_ASSOC)) {
$i=$i-1;
?>


            <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/<?php echo $i;?>.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
      
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Xoziroq Royxatdan O'ting</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Va maroqli hordiq Oling.</h5>
                <div class="welcome-btn-group">
                  <a href="https://myaccount.google.com/" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with facebook</a>
                  <a href="https://myaccount.google.com/" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with Google</a>
                </div>
              </div>
      
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="img/bg-img/4.jpg" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date"><?php echo $chiq["sana"]; ?></span>
                  <h2><?php echo $chiq["nom"]; ?></h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory"><?php echo  $chiq["kategoria"]; ?></a> | <a href="#" class="music-duration"><?php echo $chiq["uzunlik"]; ?></a></p>
                  </div>
      
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/<?php echo $chiq["joy"]; ?>">
                    </audio>
                  </div>
      
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (<?php echo $chiq["klass"]; ?>)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(<?php echo $chiq["share"]; ?>)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (<?php echo $chiq["download"]; ?>)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?
  }
  ?>
      

    </div>
  </section>
  
