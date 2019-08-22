<?php
session_start();
require '../connect.php';
error_reporting(0);
// if (@$_SESSION['class']) {

?>
    
<?php 
    $query =   "SELECT * FROM t_class_material";
    $select_posts = mysqli_query($link,$query);


?>


<?php include '../include/header.php' ?>
<?php include '../include/menu.php' ?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
           
            </div>
            <div class="col-md-5">
                <ol class="breadcrumb pull-right">
                    <li><a href="../user/index.php">Home</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li class="active">Video</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Video: film view -->
<section class="content content-light  video-film">
<div class="container">
        <!-- Video film view - center -->
<div class="row">
<div class="col-md-7">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Choose Subject</a>
    </div>
    
       <div class="nav navbar-nav" style="padding-left: 100px; padding-top: 10px;">
                                   
       <select  class="form-control" id="exampleSelect1" name="subject">                             
        <?php
         include '../connect.php';
        $list = mysqli_query($link,"SELECT * FROM subject");
        while ($row_ah = mysqli_fetch_assoc($list)) {
        ?>
         <option value="<?php echo $row_ah['subject']; ?>" selected class="test"><?php echo $row_ah['subject']; ?></option>
        <?php } ?>

     </select>
   </div>
  
  </div>
</nav>







      echo '<article>';
                    
    echo  '<a href="" class="video-prev video-play-here" style="height:350px; width:400px;"><a class="btn btn-theme btn-facebook"><i class="fa fa-facebook"></i> Share </a></a>';

       echo '<hr class="invisible" />';
       echo '<hr class="invisible" />';

        echo '</article>';
            echo '</div>';


            echo '<aside class="col-md-5">


                <div class="tabs tabs-justify tabs-tb tabs-alt nobottommargin clearfix" id="realestate-tabs" data-active="1">

                     <ul class="tab-nav clearfix" style="background-color: #FFAE33;">
                        <li><a href="#realestate-tab-1" class="fa fa-youtube-play"> Videos</a></li>
                        <li><a href="#realestate-tab-2">Assignment</a></li>
                        <li><a href="#realestate-tab-3">Book</a></li>
                    </ul>
                <div class="tab-container">';

  
               <div class="tab-content clearfix" id="realestate-tab-1">
<?php                            
while ($row=mysqli_fetch_assoc($select_posts)) {
 $id = $row['id'];
 $date = $row['date'];
 $class = $row['class'];
 $subject = $row['subject'];
$title = $row['title'];
$des = $row['des'];
$author = $row['author'];
$video = $row['video'];
$email = $row['a_email'];
$fileviw = $row['file'];
          echo '<ul style=" list-style-type: none; padding-left: 50px">

                <li style=" padding: 2px; margin: 2px;"><a class="video-item" href=""><?php echo '.$title.';?></a></li>
                            
                </ul>  
                ';} ?>     
                </div>';
                <div class="tab-content clearfix" id="realestate-tab-2">
                        <embed value="">Assignment </embed>       
                </div>
                <div class="tab-content clearfix" id="realestate-tab-3">
                        <?php
         include '../connect.php';
         $list = mysqli_query($link,"SELECT * FROM book");
         while ($row_ah = mysqli_fetch_assoc($list)) {
         ?>
       <!--   <option value="" selected class="test"><?php echo $row_ah['file']; ?></option> -->
         <embed value=""><?php echo $row_ah['file'];?></embed>   
         <?php } ?>           
                </div>
                
                </div>
                </div>
                <div class="clear"></div>
           </aside>
           
        </div>
</section>

<?php include '../include/footer.php' ?>
<script type="text/javascript" src="../../../resource/front-end/asset/js/jquery.js"></script>

<!-- Bootstrap Select Plugin -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/bs-select.js"></script>

<!-- Bootstrap Switch Plugin -->

<!-- Range Slider Plugin -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/rangeslider.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="../../../resource/front-end/asset/js/functions.js"></script>


<script type="text/javascript">

    jQuery(document).on('ready', function(){

        $(".price-range-slider").ionRangeSlider({
            type: "double",
            prefix: "$",
            min: 200,
            max: 10000,
            max_postfix: "+"
        });

        $(".area-range-slider").ionRangeSlider({
            type: "double",
            min: 50,
            max: 20000,
            from: 50,
            to: 20000,
            postfix: " sqm.",
            max_postfix: "+"
        });

        jQuery(".bt-switch").bootstrapSwitch();

    });


</script>