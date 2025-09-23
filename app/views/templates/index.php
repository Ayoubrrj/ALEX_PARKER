<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once '../app/views/templates/partials/_head.php'; ?>
  </head>

  <body>
    <!-- Preloader Start -->
    <div class="preloader">
      <div class="rounder"></div>
    </div>
    <!-- Preloader End -->

    <div id="main">
      <div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <div class="col-md-3">
            <?php include_once '../app/views/templates/partials/_aside.php'; ?>
          </div>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <?php include_once '../app/views/templates/partials/_main.php'; ?>

            <!-- Footer Start -->
            <div class="col-md-12 page-body margin-top-50 footer">
              <footer>
                <?php include_once '../app/views/templates/partials/_footer.php'; ?>
              </footer>
            </div>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>

    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->

    <!-- All Javascript Plugins  -->
    <?php include_once '../app/views/templates/partials/_scripts.php'; ?>
  </body>
</html>
