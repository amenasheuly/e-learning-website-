<?php session_start(); ?>
<?php include '../include/head.php'?>
<?php include '../include/header.php'?>
<?php include '../include/sidebar.php'?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-note2"></i>
            </div>
            <div class="header-title">
                <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                                    </span>
                    </div>
                </form>
                <h1>Assignment </h1>
                <small>Information </small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="../user/index.php"><i class="pe-7s-home"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group">
                                <a class="btn btn-primary" href="ass-list.php"> <i class="fa fa-list"></i>Assignment List </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-12" method="post" action="file-store.php" enctype="multipart/form-data">
                               
                                 <div class="col-sm-6 form-group">
                                     <input type="hidden"  name="id">
                                    <label>Student Name </label>

                                    <input type="text" class="form-control" name="s_name"required>
                                </div>
                                 <div class="col-sm-6 form-group">
                                    <label> Submission Date</label>
                                    <input type="date" class="form-control" name="s_date"required>
                                </div>
                            <div class="col-sm-6 form-group">
                                    <label>Class </label>
                                    <input type="text" class="form-control" name="class"required>
                                </div>

                                <div class="col-sm-6 form-group">
                                     <label>Subject</label>
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
                                <div class="col-sm-6 form-group">
                                    <label>Submitted By </label>
                                    <input type="email" class="form-control" name="s_email" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Teacher Email </label>
                                    <input type="email" class="form-control" name="st_email" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Assignment on </label>
                                    <input type="text" class="form-control" placeholder="topics" name="topics" required>
                                </div>


                                <div class="col-sm-6 form-group">
                                    <label>File upload</label>
                                    <input type="file" name="file" id="file">
                                    
                                </div>
                              
                                <div class="col-sm-12 reset-button">                 
                                <input type="submit"class="btn btn-warning" name="submit">
                           
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->

<?php include '../include/footer.php'?>