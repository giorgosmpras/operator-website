<!--
=========================================================
* Material Dashboard 2 PRO - v3.0.6
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        // Function to fetch remote text file
        function fetchRemoteText($url) {
            $content = file_get_contents($url);
            if ($content !== false) {
                return $content;
            } else {
                return 'Error: Unable to fetch remote content.';
            }
        }

        // URL of the remote text file
        $remoteTextURL = 'https://cloud.gksoftware.gr/index.php/s/sA7or56GgwqeAMK/download/logo.txt';

        // Fetch and display the remote text
        //$logo_text=fetchRemoteText($remoteTextURL);
        ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://services.valmore.gr/logo.png">
    <title>
        <?php echo fetchRemoteText($remoteTextURL);?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<!-- <style>
/* Style for the loading spinner */
.loader {
    border: 6px solid #f3f3f3;
    /* Light gray border */
    border-top: 6px solid #3498db;
    /* Blue border on top */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
    /* Rotate animation */
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

/* Style for the main content (initially hidden) */
/* .content {
    display: none;
} */
</style> -->

<body class="bg-gray-200 content">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white"
                href="../../../pages/dashboards/analytics.html">

            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                <ul class="navbar-nav navbar-nav-hover mx-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2">





                </ul>

            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-height-300 m-3 border-radius-xl "
            style="background-image: url('https://scontent.fath3-4.fna.fbcdn.net/v/t39.30808-6/319323035_2318764628283670_6744436807709529235_n.jpg?stp=dst-jpg_s960x960&_nc_cat=102&ccb=1-7&_nc_sid=e3f864&_nc_ohc=ktnVUcJkH9wAX9GdwnR&_nc_oc=AQkqG-J8Fiqfxbf6ckaWKGD_g09MjkQV-_VRF4bkpK0qoTMcWOmZQCDGwcuXi44_OjvaMpRWcV4ZnxHV7jNJdBkG&_nc_ht=scontent.fath3-4.fna&oh=00_AfAQs9hIce8ZDKIWYDeebxPvkGbmXBGArvCNcpVB6TDtMA&oe=64CA4F77');">
            <span class="mask bg-gradient-dark opacity-1"></span>
        </div>
        <div class="container mb-4">
            <div class="row mt-lg-n12 mt-md-n12 mt-n12 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mt-8">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1 text-center py-4">
                                <h6 class="font-weight-bolder text-red mt-1">
                                    <?php if(isset($_GET['error'])){echo "Το email ή ο κωδικός ειναι λαθος";}?></h6>
                                <h4 class="font-weight-bolder text-white mt-1">Συνδεθείτε</h4>
                                <p class="mb-1 text-sm text-white">Συμπληρώστε το email και τον κωδικό σας
                                    για να συνδεθείτε</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                <form role="form" class="text-start">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control"
                                            placeholder="john@email.com">
                                    </div>
                                    <div class="input-group input-group-static mb-4">
                                        <label>Κωδικός</label>
                                        <input name="password" type="password" class="form-control"
                                            placeholder="•••••••••••••">
                                    </div>
                                    <!--<div class="form-check form-switch d-flex align-items-center mb-3">
                  <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                  <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                </div>-->
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-dark w-100 mt-3 mb-0">Είσοδος</button>
                                    </div>
                                </form>
                            </form>
                        </div>
                        <!-- <script>
                        // Event listener for form submission
                        contactForm.addEventListener("submit", function(event) {
                            event.preventDefault(); // Prevent the default form submission

                            // Show the loading spinner
                            loadingSpinner.style.display = "block";

                            // Disable the submit button to prevent multiple submissions
                            submitButton.disabled = true;

                            // Simulate a delay (you can replace this with actual form submission)
                            setTimeout(function() {
                                // Hide the loading spinner
                                loadingSpinner.style.display = "none";

                                // Enable the submit button
                                submitButton.disabled = false;

                                // Reset the form or display a success message
                                contactForm.reset(); // You can replace this with your desired action
                            }, 2000); // Simulated delay (2 seconds)
                        });
                        </script> -->
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                Ξεχάσατε τον κωδικό σας?<br>
                                <a href="../../../pages/authentication/forgot/cover.php"
                                    class="text-success text-gradient font-weight-bold">Πατήστε εδώ να το
                                    επαναφέρουμε</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm  text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            made by Valmore
                            <a href="https://www.valmore.gr" class="font-weight-bold " target="_blank">Valmore</a>
                            for a better web.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>