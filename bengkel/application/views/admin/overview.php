<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view('admin/partical/header.php');  ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('admin/partical/sidebar.php') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Top Bar -->
          <?php $this->load->view('admin/partical/top_bar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <?php $this->load->view('admin/partical/main_content.php') ?>
         </div>
  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('admin/partical/js.php') ?>
</body>

</html>
