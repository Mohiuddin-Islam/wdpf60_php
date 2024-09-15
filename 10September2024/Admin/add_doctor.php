<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
    <?php include "partial/top_bar.php"; ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "partial/left_bar.php"; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h4 class="page-title">Uploads Validation</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Zegva</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li class="breadcrumb-item active">Uploads Validation</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->

                    <div class="row">
                        <div class="col-lg-6 offset-3">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Doctor Entry Form</h4>

                                    <?php 
                                    if(isset($_POST['submit'])){
                                        extract($_POST);
                                        

                                        require_once "dbconfig.php";
                                        //$details = mysqli_real_escape_string($db,$details);

                                        $photo_name = $_FILES['photo']['name'];
                                        $photo_tname = $_FILES['photo']['tmp_name'];
                                        $path = "image/";
                                        $url = $path.$photo_name;

                                        if(move_uploaded_file($photo_tname, $path.$photo_name)){
                                            
                                        $sql = $conn->query("INSERT INTO doctors (id,specilization,doctorName,address,photo,docFees,contactno,details,email,password) VALUES (NULL,'$specilization','$docname','$address','$photo_name','$docfees','$contact','$details','$email','$pass')");

                                        if($conn->affected_rows){
                                            echo "<h5 style= 'color:green'>Successfully Inserted</h5>";
                                        }
                                        }

                                    }
                                    
                                    
                                    ?>

                                    <form class="" action="#" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Specialization</label>
                                            <select name="specilization" id="" class="form-control">
                                                <option value="">Select One</option>

                                            <?php 
                                            require_once "dbconfig.php";

                                            $sql = $conn->query("SELECT specilization FROM doctorspecilization");

                                            while($row = $sql->fetch_assoc()){ ?>

                                            <option value="<?php echo $row['specilization'] ?>"><?php echo $row['specilization'] ?></option>
                                        <?php   }
                                            ?>
                                            </select>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Name</label>
                                            <input type="text" class="form-control" name="docname" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div>
                                                <textarea required class="form-control" placeholder="Enter Address Here" name="address" rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control" name="photo" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Fees</label>
                                            <input type="text" class="form-control" name="docfees" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" name="contact" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" required placeholder="Type something" />
                                        </div>
                                        <div class="form-group">
                                            <label>Doctor Profile</label>
                                            <div>
                                                <textarea class="form-control" name="details" id="details" placeholder="Doctor Details Here" rows="5"></textarea>
                                            </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div>
                                                <input type="password" id="pass2" name="pass" class="form-control" required placeholder="Password" />
                                            </div>
                                            <div class="mt-2">
                                                <input type="password" class="form-control" name="repeatpass" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                            </div>
                                        </div>

                                            <div>
                                                <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">
                                                    Submit
                                                </button>
                                                <button type="reset" name="cancel" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <?php include "partial/footer.php"; ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Parsley js -->
    <script src="plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <script src="plugins/tinymce/tinymce.min.js"></script>

<script>
    $(document).ready(function() {
        if ($("#details").length > 0) {
            tinymce.init({
                selector: "textarea#details",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [{
                    title: 'Bold text',
                    inline: 'b'
                }, {
                    title: 'Red text',
                    inline: 'span',
                    styles: {
                        color: '#ff0000'
                    }
                }, {
                    title: 'Red header',
                    block: 'h1',
                    styles: {
                        color: '#ff0000'
                    }
                }, {
                    title: 'Example 1',
                    inline: 'span',
                    classes: 'example1'
                }, {
                    title: 'Example 2',
                    inline: 'span',
                    classes: 'example2'
                }, {
                    title: 'Table styles'
                }, {
                    title: 'Table row 1',
                    selector: 'tr',
                    classes: 'tablerow1'
                }]
            });
        }
    });
</script>

</body>

</html>