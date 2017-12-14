<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aksatriya Bawana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

    <link href="bootstrap/css/val.css" rel="stylesheet">
    <link href="bootstrap/css/style-isi.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/docs.css" rel="stylesheet">
    <link href="bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet">
  </head>

  
    <body data-spy="scroll" data-target=".bs-docs-sidebar" 
    style="background-image:url(bootstrap/img/back.png); background-attachment: fixed; background-position: center; background-size: 100% ">
<!-- Subhead
================================================== -->
    <header class="jumbotron subhead" id="overview" style="margin-top:-40px;">
      <div class="container">
        <h1 style="font-family:'Bauhaus 93'">MPA Aksatriya Bawana</h1>
        <p class="lead" style="color:#fff;">Form Penerimaan Calon Anggota Baru MPA Aksatriya Bawana.</p>
      </div>
    </header>
    <div style="clear:both;"></div>
    <div class="container">


    <?php 
    $page = 'page';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
    
        }

    switch ($page) {
        case 'dataview':
            include "dataview.php";
        break;

        case 'detail':
            include "detail.php";
        break;
        
        default:
            include "form.php";
        break;
    }
     
    ?>


</div>
   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>
    <script src="bootstrap/js/bootstrap-affix.js"></script>

    <script src="bootstrap/js/holder/holder.js"></script>
    <script src="bootstrap/js/google-code-prettify/prettify.js"></script>

    <script src="bootstrap/js/application.js"></script>

    <script type="text/javascript" src="bootstrap/js/nicescroll.js"></script>
    <script type="text/javascript" src="bootstrap/js/common.js"></script>


    <script type="text/javascript" src="bootstrap/js/jquery-1.4.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.validate.js"></script>
    <script type="text/javascript" src="bootstrap/js/validasi.js"></script>
    


    <!-- Analytics
    ================================================== -->

  </body>
</html>