<?php session_start(); 

if(!isset($_SESSION['email'])){
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <?php include "partials/style.php"; ?>
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <?php include "partials/left_panel.php"; ?>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
  <?php include "partials/head_panel.php"; ?>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <?php include "partials/right_panel.php"; ?>
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->

    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Forms</a>
          <span class="breadcrumb-item active">Form Layouts</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
        <div>
          <h4>Form Layouts</h4>
          <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Top Label Layout</h6>
          <p class="br-section-text">A form with a label on top of each form control.</p>

    

          <div class="row mg-t-80">
            <div class="col-xl-12">
              <div class="form-layout form-layout-4">
                <h6 class="br-section-label">Left Label Alignment</h6>
                <p class="br-section-text">A basic form where labels are aligned in left.</p>
                <div class="row">
                  <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter Name" name="name">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Gender: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  Male <input type="radio" class="form-control-m" value="male" name="gender">
                  Female <input type="radio" class="form-control-m" value="female" name="gender">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Date of Birth: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="date" class="form-control" name="dob">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="Enter Email" name="email">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <textarea rows="2" class="form-control" placeholder="Enter your Address" name="address"></textarea>
                    </div>
                  </div>
                  
                  
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info">Submit Form</button>
                  <button class="btn btn-secondary">Cancel</button>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!-- col-6 -->
          </div><!-- row -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div>
   <!-- row -->

     
    <!-- ########## END: MAIN PANEL ########## -->

    <?php include "partials/js.php"; ?>
  </body>
</html>
