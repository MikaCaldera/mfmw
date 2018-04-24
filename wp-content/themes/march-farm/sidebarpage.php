<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Starter Site For March Farm">
    <meta name="author" content="Mika Caldera">
    <title>March Farm</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <?php include "inc/hero.php" ?>
    <?php include "inc/nav.php" ?>
    <!-- Container -->
    <div class="container">
      <h1>Sidebar Page</h1>
      <div class="row">
        <div class="col-lg-9 mb-4">
          <?php include "inc/parts/contentstyle.php" ?>
        </div>
        <div class="col-lg-3 mb-4">
          <?php include "inc/sidebar.php" ?>
        </div>
      </div>
    </div>
    <!-- /container -->
    <?php include "inc/megafooter.php" ?>
    <?php include "inc/footer.php" ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>