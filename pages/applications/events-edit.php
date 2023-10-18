<?php

session_start();
// Retrieve the _id parameter from the URL
//$id = $_POST['id'];

if (isset($_POST['id'])){
  $id = $_POST['id'];
}
else{
  $id = $_SESSION['id'];
}

if (isset($_POST['title'])){
  $title = $_POST['title'];
}
else{
  $title = $_SESSION['title'];
}

if (isset($_POST['message'])){
  $message = $_POST['message'];
}
else{
  $message = $_SESSION['message'];
}


?>

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    .card {



        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-file-input-label {
        display: inline-block;
        padding: 8px 12px;
        cursor: pointer;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    /* Hide the default file input */
    .file-input-element {
        display: none;
    }

    .image-upload-center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        /* Adjust the height as needed */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }

    .input-field {
        margin-bottom: 10px;
        position: relative;
    }

    .input-field label,
    .input-field input,
    .input-field textarea {
        width: 100%;
        box-sizing: border-box;
    }

    .char-count {
        position: absolute;
        bottom: 5px;
        right: 5px;
    }

    .red-text {
        color: red;
    }

    .text {
        text-align: center;
        color: white;
    }

    #toggle-push {
        background-color: red;
        color: white;
    }

    .enabled {
        background-color: green;
    }

    .toggle-buttons {
        display: flex;

        align-items: center;

    }

    .toggle-texts {
        display: flex;

        align-items: center;
        margin-top: 10px;
        margin-left: 75px;
        margin-right: 75px;
        margin: auto;
        margin-bottom: 10px;
    }

    .toggle-text2 {


        margin-top: 10px;


    }


    .toggle-button {
        padding: auto;
        width: 20px;
        /* Square size */
        height: 20px;
        /* Square size */
        text-align: center;
        line-height: 60px;
        /* Center text vertically */
        font-size: 16px;
        cursor: pointer;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        user-select: none;
        margin-left: 40px;


    }

    .toggle-button.active {
        background-color: #4CAF50;
        color: #fff;
    }

    .toggle-button.center {
        flex: 0;
    }

    .my-card .card-header {
        /* Your styles here */
        margin-left: 10 !important;
    }

    .custom-left {
        margin-left: 10;
    }

    .icon-con {
        display: flex;
        flex-direction: 'row';
    }

    .a-con {
        flex: 1;
    }

    .deleteIcon {
        color: #344767;
        float: right;
        margin-right: 20px;
        margin-top: 10px;

    }

    .deleteIcon:hover {
        cursor: pointer;
    }

    .containerR {
        flex: 1
    }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!--modal-->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Include Bootstrap JavaScript 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    -->
    <!-- Bootstrap CSS 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
-->
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--modal-->
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-transparent"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" ./new-user.php" target="_blank">
                <img src="https://services.valmore.gr/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-dark"><?php echo fetchRemoteText($remoteTextURL);?></span>
            </a>
        </div>
        <!--<hr class="horizontal light mt-0 mb-2">-->
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mb-2 mt-0"></li>
                <!---->
                <hr class="horizontal dark mt-0">
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-dark "
                        aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                        <i class="material-icons-round opacity-10">dashboard</i>
                        <span class="nav-link-text ms-2 ps-1">Κάρτα Δημότη</span>
                    </a>

                    <!-- <li class="nav-item mt-3">
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-dark">Σελιδες</h6>
                </li> -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-dark "
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined text-dark">
                            account_circle
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Δημότες</span>
                    </a>
                    <div class="collapse " id="pagesExamples">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../pages/users/new-user.php">
                                    <span class="material-symbols-outlined   ps-3">
                                        person_add
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Εγγραφή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-users.php">
                                    <span class="material-symbols-outlined   ps-3">
                                        groups
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-dark "
                        aria-controls="applicationsExamples" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined text-dark">
                            public
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Υπηρεσίες</span>
                    </a>
                    <div class="collapse" id="applicationsExamples">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark  " href="./new-service.php">
                                    <span class="material-symbols-outlined ps-3">
                                        library_add
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Εγγραφή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark "
                                    href="../../../pages/applications/datatables-services.php">
                                    <span class="material-symbols-outlined ps-3">
                                        library_books
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-dark "
                        aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined ">
                            shopping_basket
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Επιχειρήσεις</span>
                    </a>
                    <div class="collapse  " id="ecommerceExamples">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="./new-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        add_business
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Εγγραφή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark "
                                    href="../../../pages/applications/datatables-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        store
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#authExamples2" class="nav-link text-dark "
                        aria-controls="authExamples2" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined ps-0">
                            chat
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Μηνύματα</span>
                    </a>
                    <div class="collapse " id="authExamples2">
                        <ul class="nav ">

                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="./sent-message.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;">
                                        Νέο Μήνυμα </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark "
                                    href="./../../../pages/applications/datatables-messages.php">
                                    <span class="material-symbols-outlined ps-3">
                                        <span class="material-symbols-outlined">
                                            table_chart
                                        </span>
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;">
                                        Προβολή </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#authExamples1" class="nav-link text-dark "
                        aria-controls="authExamples1" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined ps-0">
                            cell_tower
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Ανακοινώσεις</span>
                    </a>
                    <div class="collapse " id="authExamples1">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="./sent-news.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Νέα Ανακοίνωση </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="./../../../pages/applications/datatables-news.php">
                                    <span class="material-symbols-outlined ps-3">
                                        table_chart
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#authExamples3" class="nav-link text-dark active"
                        aria-controls="authExamples3" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined ps-0 text-dark">
                            celebration
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Εκδηλώσεις</span>
                    </a>
                    <div class="collapse show" id="authExamples3">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="./new-event.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Νέα Εκδήλωση </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark "
                                    href="./../../../pages/applications/datatables-events.php">
                                    <span class="material-symbols-outlined ps-3">
                                        table_chart
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link bg-dark text-white"
                                    href="./../../../pages/applications/events-edit.php">
                                    <span class="material-symbols-outlined ps-3">
                                        edit
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Επεξεργασία </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>



        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky"
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-3 text-dark" href="javascript:;">
                                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>shop </title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1716.000000, -439.000000)" fill="#252f40"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(0.000000, 148.000000)">
                                                    <path
                                                        d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                    </path>
                                                    <path
                                                        d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Επικοινωνία</a></li>
                        <li class="breadcrumb-item text-sm text-dark" aria-current="page">Εκδηλώσεις</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Επεξεργασία Εκδήλωσης</h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <!--<div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>-->
                    </a>
                </div>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item">
                            <a href="./new-user.php" class="nav-link text-body p-0 position-relative" target="_blank">
                                <i class="material-icons me-sm-1">
                                    account_circle
                                </i>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                            <!--</li>
            <li class="nav-item px-3">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-icons fixed-plugin-button-nav cursor-pointer">
              settings
            </i>
              </a>
            </li>-->
                        <li class="nav-item dropdown pe-2">
                            <a href="javascript:;" class="nav-link text-body p-0 position-relative"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons cursor-pointer">
                                    notifications
                                </i>
                                <span
                                    class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
                                    <span class="small">11</span>
                                    <span class="visually-hidden">unread notifications</span>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex align-items-center py-1">
                                            <span class="material-icons">email</span>
                                            <div class="ms-2">
                                                <h6 class="text-sm font-weight-normal my-auto">
                                                    Check new messages
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">


                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="multisteps-form mb-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <h6 class="font-weight-bolder  text-align:center text-red mt-1">
                                <?php if(isset($_GET['success'])){echo '<span style="color:green;text-align:center;">Η επεξεργασία ολοκληρωθηκε επιτυχως</span>';}elseif(isset($_GET['error'])==""){echo "";}else{echo '<span style="color:red;text-align:center;">Σφαλμα ελεξτε τα στοιχεία και ξαναδοκιμάστε</span>';}?>
                            </h6>
                        </div>
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5 mt-1 ">
                            </div>
                        </div>

                        <!--form panels-->
                        <div class="row">




                            <div class="col-12 col-lg-12 m-auto" style="margin-left: 0 !important; ">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-dark shadow-dark border-radius-lg pt-4 pb-3">
                                            <div class="text">

                                                <span>Επεξεργασία Εκδήλωσης</span>

                                            </div>

                                        </div>
                                    </div>
                                    <form role="form" class="multisteps-form__form" method="post"
                                        action="events-edit-patch.php">
                                        <div class="card">
                                            <div class="icon-con">
                                                <a class="nav-link text-dark a-con ">
                                                    <span id="deleteButton"
                                                        class="material-symbols-outlined deleteIcon">
                                                        delete
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="input-field">
                                                    <label for="title">Τίτλος (max 20 characters):</label>
                                                    <input class="multisteps-form__input" type="text" id="title"
                                                        name="title" maxlength="20" value="<?php echo $title ?>"
                                                        required>
                                                    <span class="char-count" id="title-char-count">0/20</span>
                                                </div>
                                                <div class="input-field">
                                                    <label for="description">Περιγραφή (max 100 characters):</label>
                                                    <textarea class="multisteps-form__input" id="description"
                                                        name="message" maxlength="100" required
                                                        style="height: 140px;"><?php echo $message ?></textarea>
                                                    <span class="char-count" id="description-char-count">0/100</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 containerR">
                                                        <div class="image-upload-center ">
                                                            <label
                                                                class="custom-file-input-label mb-0  bg-dark text-white"
                                                                id="selectImageButton">
                                                                Επιλέξτε Εικόνα
                                                                <input type="file" class="file-input-element"
                                                                    accept="image/*">
                                                            </label>

                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                                    <script>
                                                    // Get the select image button (label) and file input element

                                                    const fileInputElement = document.querySelector(
                                                        '.file-input-element');
                                                    const itemIdInput = document.getElementById(
                                                        'id'); // Add this line
                                                    // Add click event listener to the select image button


                                                    // Add change event listener to the file input element
                                                    fileInputElement.addEventListener('change',
                                                        handleFileInputChange);

                                                    // Function to handle file input change event
                                                    function handleFileInputChange(event) {
                                                        const file = event.target.files[0];

                                                        if (file) {
                                                            selectImageButton.textContent =
                                                                `Επιλέξατε την Εικόνα:  ${file.name}`;
                                                            const formData = new FormData();
                                                            formData.append('image',
                                                                file); // Append the file object, not the text content
                                                            const itemId = itemIdInput
                                                                .value; // Get the itemId value
                                                            //alert(itemId)
                                                            uploadImage(itemId, formData);

                                                        } else {
                                                            selectImageButton.textContent = 'Επιλέξτε Εικόνα';
                                                        }
                                                    }
                                                    // Function to upload image
                                                    async function uploadImage(itemId, formData) {
                                                        try {
                                                            const response = await fetch(
                                                                `https://api.valmore.gr/api/event/upload-event-photo?id=${itemId}`, {
                                                                    method: 'POST',
                                                                    body: formData,
                                                                })
                                                            const text = await response.text(); // Parse it as text
                                                            const data = JSON.parse(
                                                                text); // Try to parse it as JSON
                                                            // The response was a JSON object
                                                            // Do your JSON handling here
                                                            // The response wasn't a JSON object
                                                            // Do your text handling here
                                                            if (data.message ==
                                                                "Image uploaded and converted successfully.") {
                                                                alert('File uploaded successfully');
                                                            } else {
                                                                alert('File upload failed');
                                                            }
                                                        } catch (error) {
                                                            console.error('Error uploading file:', error);
                                                            alert('Error uploading file');
                                                        }
                                                    }
                                                    </script>

                                                </div>
                                                <div class="button-row d-flex mt-4">
                                                    <button id="submitButton"
                                                        class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                        type="submit" title="Next">ΑΠΟΣΤΟΛΗ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <script>
                                    const newsId = document.getElementById('id')
                                    const deleteButton = document.getElementById('deleteButton');
                                    deleteButton.addEventListener('click', () => {
                                        // Show the delete confirmation modal and pass the row ID
                                        showDeleteModal(newsId.value);
                                    });

                                    function showDeleteModal(rowId) {
                                        $('#deleteModal').modal('show');

                                        document.getElementById('confirmDelete').addEventListener('click', () => {
                                            // Send a request to delete the user with the specified rowId
                                            // You can use an API call here to delete the user

                                            window.location.href = `events-edit-patch.php?delete_id=${rowId}`;
                                            console.log('Deleting user with ID:', rowId);
                                            // Close the modal
                                            $('#deleteModal').modal('hide');
                                        });
                                        document.getElementById('cancel').addEventListener('click', () => {
                                            // Send a request to delete the user with the specified rowId
                                            // You can use an API call here to delete the user
                                            //console.log('Deleting user with ID:', rowId);
                                            // Close the modal
                                            $('#deleteModal').modal('hide');

                                        });
                                        document.getElementById('cancel1').addEventListener('click', () => {
                                            // Send a request to delete the user with the specified rowId
                                            // You can use an API call here to delete the user
                                            //console.log('Deleting user with ID:', rowId);
                                            // Close the modal
                                            $('#deleteModal').modal('hide');

                                        });
                                    }
                                    const titleInput = document.getElementById('title')
                                    const messageInput = document.getElementById('description')
                                    const submitButton = document.getElementById('send-btn');
                                    const titleCharCount = document.getElementById('title-char-count');
                                    const descriptionCharCount = document.getElementById('description-char-count');

                                    titleInput.addEventListener('input', updateCharCount);
                                    messageInput.addEventListener('input', updateCharCount);

                                    function updateCharCount() {
                                        const titleLength = titleInput.value.length;
                                        const descriptionLength = messageInput.value.length;

                                        titleCharCount.textContent = `${titleLength}/20`;
                                        descriptionCharCount.textContent = `${descriptionLength}/100`;

                                        titleCharCount.classList.toggle('red-text', titleLength > 20);
                                        descriptionCharCount.classList.toggle('red-text', descriptionLength > 100);

                                        sendBtn.disabled = !(titleLength && descriptionLength);
                                    }
                                    </script>


                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <!-- Delete Modal Content -->
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Διαγραφή Εκδήλωσης
                                                    </h5>
                                                    <button type="button" class="close" id="cancel1"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Είστε Βέβαιοι οτι θέλετε να Διαγράψετε την Εκδήλωση;<br>
                                                    Θα Διαγραφούν ολα τα Δεδομένα χωρίς δυνατότητα ανάκτησης!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" id="cancel"
                                                        data-dismiss="modal">Ακυρωση</button>
                                                    <button type="button" class="btn btn-danger"
                                                        id="confirmDelete">Διαγραφη</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--single form panel-->
                                    <div class="multisteps-form__panel border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bold mb-0">Διευθυνση </h5>
                                        <p class="mb-0 text-sm"></p>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Διευθυνση</label>
                                                        <input class="multisteps-form__input form-control"
                                                            type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Περιοχή</label>
                                                        <input class="multisteps-form__input form-control"
                                                            type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Πόλη</label>
                                                        <input class="multisteps-form__input form-control"
                                                            type="text" />
                                                    </div>
                                                </div>
                                                <!--<div class="col-6 col-sm-4 mt-3 mt-sm-0">
                              <select class="form-control" name="choices-state" id="choices-state">
                                <option value="Asia" selected="">Asia</option>
                                <option value="America">America</option>
                              </select>
                            </div>-->
                                                <div class="col-6 col-sm-2 mt-3 mt-sm-0">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Τ.Κ.</label>
                                                        <input class="multisteps-form__input form-control"
                                                            type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Επιστροφη</button>

                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="button" title="Next">Επομενο</button>




                                            </div>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__panel border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bold mb-0">Περιγραφη </h5>
                                        <p class="mb-0 text-sm"></p>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Περιγραφη</label>
                                                        <input id="description" name="body"
                                                            class="multisteps-form__input form-control" type="text" />
                                                    </div>

                                                    <div class="toggle-container">
                                                        <div class="toggle-texts font-weight-bold text-dark">
                                                            <div class="toggle-text1">
                                                                <p>Με συνδρομή</p>
                                                            </div>

                                                            <div class="toggle-text3">
                                                                <p>Ελεύθερη Είσοδος</p>
                                                            </div>
                                                        </div>

                                                        <div class="toggle-buttons">

                                                            <div class="toggle-button" id="button1"></div>

                                                            <div class="toggle-button" id="button3"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="button-row d-flex mt-4">
                                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                        title="Prev">Επιστροφη</button>



                                                    <button id="submitButton2"
                                                        class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" disabled
                                                        type="submit" title="Next">Εγγραφη</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <p>Είστε Βέβαιοι οτι Θέλετε να Προχωρήσετε με τη Διαγραφή;</p>
                <div class="button-row d-flex mt-4">

                    <button id="cancelBtn" class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                        title="Prev">ακυρωση</button>

                    <button id="confirmBtn" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit"
                        title="Next">διαγραφη</button>


                </div>
            </div>
        </div>
        <script>
        // JavaScript to handle the modal and API fetch
        const modal = document.getElementById("myModal");
        const openModalBtn = document.getElementById("openModalBtn");
        const confirmBtn = document.getElementById("confirmBtn");
        const cancelBtn = document.getElementById("cancelBtn");

        // Function to open the modal
        openModalBtn.addEventListener("click", () => {
            modal.style.display = "block";
        });

        // Function to close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Event listener for the "Yes" button
        console.log("pressed");
        confirmBtn.addEventListener("click", () => {
            const id = <?php echo json_encode($id); ?>;
            window.location.href = `events-edit-patch.php?delete_id=${id}`;
            closeModal();
        });




        // Event listener for the "Cancel" button
        cancelBtn.addEventListener("click", () => {
            closeModal();
        });

        // Close the modal if the user clicks outside of it
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
        </script>

        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>,
                            made by
                            <a href="https://www.valmore.gr" class="font-weight-bold" target="_blank">Valmore</a>
                            for a better web.
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/choices.min.js"></script>
    <script src="../../../assets/js/plugins/multistep-form.js"></script>
    <script>
    if (document.getElementById('choices-state')) {
        var element = document.getElementById('choices-state');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };
    </script>
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