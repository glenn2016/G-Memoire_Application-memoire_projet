<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attente</title>
  <!-- base:css -->
  <link rel="stylesheet" href="restaurant/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="restaurant/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="restaurant/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="restaurant/images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <form class="pt-5">
                <div class="mt-3 text-center">
                  <a href="#" class="auth-link text-white">Attente de validation</a>
                  <form method="POST" action="{{ route('logout') }}">
                  @csrf
                    <a class="":href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                      <i class="mdi mdi-logout text-primary"></i>
                      Déconection
                    </a>
                 </form>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="restaurant/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="restaurant/js/off-canvas.js"></script>
  <script src="restaurant/js/hoverable-collapse.js"></script>
  <script src="restaurant/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
