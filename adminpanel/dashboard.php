<?php include "header.php"; ?>
<?php include "functions/functions.php";?>
  <div id="wrapper">

<?php include "sidebar.php"; ?>    
<?php include "config-pdo.php"; ?>
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <!-- <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div> -->
                <div class="text-center">User Count<br><strong><?php echo abstractcount(); ?></strong></div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <!-- <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div> -->
                <div class="text-center">Contact-form Count<br><strong><?php echo contactcount(); ?></strong></div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <!-- <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div> -->
                <div class="text-center">Today's Count<br><strong><?php echo todaycount(); ?></strong></div>
              </div>
              <!-- <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a> -->
            </div>
          </div>
          
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Overall Details 
<!--              <span style="float: right;"><a class="btn btn-danger" href="exportabstract.php"><i class="fas fa-file-export"></i> Export</a></span>-->
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-condensed" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Count</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Completed Form</td>
                      <td><?php echo completecount(); ?></td>
                  </tr>
                  <tr>
                      <td>Incompleted Form</td>
                      <td><?php echo incompletecount(); ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
        </div>

      </div>
      <!-- /.container-fluid -->

 <?php include "footer.php"; ?>     
