<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="keywords"
  content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
 <meta name="description"
  content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
 <meta name="robots" content="noindex,nofollow" />
 <title>Geoff PHP Admin</title>
 <!-- Favicon icon -->
 <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
 <!-- Custom CSS -->
 <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
 <!-- Custom CSS -->
 <link href="../dist/css/style.min.css" rel="stylesheet" />
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
 <!-- ============================================================== -->
 <!-- Preloader - style you can find in spinners.css -->
 <!-- ============================================================== -->
 <div class="preloader">
  <div class="lds-ripple">
   <div class="lds-pos"></div>
   <div class="lds-pos"></div>
  </div>
 </div>
 <!-- ============================================================== -->
 <!-- Main wrapper - style you can find in pages.scss -->
 <!-- ============================================================== -->
 <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
  data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

  <?php include "header.php";
    include "sidebar.php"; ?>


  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
   <!-- ============================================================== -->
   <!-- Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <div class="page-breadcrumb">
    <div class="row">
     <div class="col-12 d-flex no-block align-items-center">
      <h4 class="page-title">Blog Category</h4>
      <div class="ms-auto text-end">
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="#">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">
          Blog Category
         </li>
        </ol>
       </nav>
      </div>
     </div>
    </div>
   </div>
   <!-- ============================================================== -->
   <!-- End Bread crumb and right sidebar toggle -->
   <!-- ============================================================== -->
   <!-- ============================================================== -->
   <!-- Container fluid  -->
   <!-- ============================================================== -->
   <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">

    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
     <div class="col-md-12">

      <div class="row">
       <div class="col-md-6">
        <div class="card">
         <form class="form-horizontal">
          <div class="card-body">
           <h4 class="card-title">Personal Info</h4>
           <div class="form-group row">
            <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" id="fname" placeholder="First Name Here" />
            </div>
           </div>
           <div class="form-group row">
            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
            <div class="col-sm-9">
             <input type="text" class="form-control" id="lname" placeholder="Last Name Here" />
            </div>
           </div>
           <div class="form-group row">
            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Password</label>
            <div class="col-sm-9">
             <input type="password" class="form-control" id="lname" placeholder="Password Here" />
            </div>
           </div>

          </div>
          <div class="border-top">
           <div class="card-body">
            <button type="button" class="btn btn-primary">
             Submit
            </button>
           </div>
          </div>
         </form>
        </div>
       </div>
      </div>






      <div class="card">
       <div class="card-body">
        <h5 class="card-title">All Categories</h5>
       </div>
       <table class="table">
        <thead>
         <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Meta Title</th>
          <th scope="col">Category Path</th>
          <th scope="col">Action</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <th scope="row"></th>
          <td></td>
          <td></td>
          <td></td>
          <td>
           <button>View</button>
           <button>Edit</button>
           <button>Delete</button>
          </td>
         </tr>


        </tbody>
       </table>
      </div>

     </div>
    </div>

    <!-- ============================================================== -->
   </div>
   <!-- ============================================================== -->
   <!-- End Container fluid  -->
   <!-- ============================================================== -->
   <!-- ============================================================== -->
   <!-- footer -->
   <!-- ============================================================== -->
   <footer class="footer text-center">
    All Rights Reserved by Matrix-admin. Designed and Developed by
    <a href="https://www.wrappixel.com">WrapPixel</a>.
   </footer>
   <!-- ============================================================== -->
   <!-- End footer -->
   <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
 </div>
 <!-- ============================================================== -->
 <!-- End Wrapper -->
 <!-- ============================================================== -->
 <!-- ============================================================== -->
 <!-- All Jquery -->
 <!-- ============================================================== -->
 <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap tether Core JavaScript -->
 <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
 <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
 <!--Wave Effects -->
 <script src="../dist/js/waves.js"></script>
 <!--Menu sidebar -->
 <script src="../dist/js/sidebarmenu.js"></script>
 <!--Custom JavaScript -->
 <script src="../dist/js/custom.min.js"></script>
 <!--This page JavaScript -->
 <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
 <!-- Charts js Files -->
 <script src="../assets/libs/flot/excanvas.js"></script>
 <script src="../assets/libs/flot/jquery.flot.js"></script>
 <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
 <script src="../assets/libs/flot/jquery.flot.time.js"></script>
 <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
 <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
 <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
 <script src="../dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>