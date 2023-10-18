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
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://services.valmore.gr/logo.png">

    <title>
        <?php echo fetchRemoteText($remoteTextURL);?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <!--modal-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .card-header1 {
        display: flex;
        justify-content: space-between;
        padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
        margin-bottom: 0;
        color: var(--bs-card-cap-color);
        background-color: var(--bs-card-cap-bg);
        border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
    }

    .sidenav-mini-icon1 {
        display: inline-block;
        width: 20px;
        height: 20px;
        background-image: url("https://icons8.com/icon/85484/add-user-male");
        background-size: cover;
        /* Optionally, you can add padding or margins for spacing */
        /* padding: 2px; */
        /* margin-right: 5px; */
    }

    .search-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;

    }

    .form-group {
        display: flex;
        align-items: center;
        /* Vertically center elements */
    }

    .search-text {
        margin-right: 10px;
        /* Add some spacing between the label and select */
    }

    .messageCell:hover {
        cursor: pointer;
    }

    .search-text {
        justify-content: center;
        align-items: center;
        margin-left: 10px;
    }

    .search {
        margin-top: 10px;
        border-color: cornsilk;
        border-radius: 5px;
        height: 50px;
        width: 240px;
    }

    .searchBar:focus {
        outline: 0px solid orange;
    }


    .save-button {
        background-color: #166319 !important;
        /* Green background color */
        color: rgb(254, 254, 254);
        /* White text color */
        border-radius: 5px;
        height: 40px;
        width: 60px;
        margin-bottom: 5px;
        /* ... other styles ... */
    }

    /* Style for the Cancel button */
    .edit-button.cancel {
        background-color: #f44336 !important;
        /* Red background color */
        color: rgb(254, 254, 254);
        /* White text color */
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .selectable-row1:hover {
        cursor: pointer;
        /* Change cursor to a hand */
        background-color: #f0f0f0;
        /* Change background color on hover */
    }



    .custom-close {
        background: none;
        font-size: 24px;
        /* Change the font size */
        border: none;
        /* Add any other styles you want to customize */
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">-->




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
            <a class="navbar-brand m-0" href="../../pages/pages/users/new-user.php" target="_blank">
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
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Κάρτα Δημότη</span>
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
                        <span class="material-symbols-outlined">
                            public
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Υπηρεσίες</span>
                    </a>
                    <div class="collapse " id="applicationsExamples">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../pages/users/new-service.php">
                                    <span class="material-symbols-outlined ps-3">
                                        library_add
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Εγγραφή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-services.php">
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
                    <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-dark active"
                        aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined text-dark">
                            shopping_basket
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Επιχειρήσεις</span>
                    </a>
                    <div class="collapse show " id="ecommerceExamples">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../pages/users/new-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        add_business
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Εγγραφή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link bg-dark  text-white " href="../applications/datatables-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        store
                                    </span>
                                    <span class="sidenav-normal text-white ms-2  ps-1"> Προβολή </span>
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
                                <a class="nav-link text-dark " href="../pages/users/sent-message.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;">
                                        Νέο Μήνυμα </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-messages.php">
                                    <span class="material-symbols-outlined ps-3">
                                        <span class="material-symbols-outlined">
                                            table_chart
                                        </span>
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;">
                                        Προβολή</span>
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
                                <a class="nav-link text-dark " href="../pages/users/sent-news.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Νέα Ανακοίνωση </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-news.php">
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
                    <a data-bs-toggle="collapse" href="#authExamples3" class="nav-link text-dark "
                        aria-controls="authExamples3" role="button" aria-expanded="false">
                        <span class="material-symbols-outlined ps-0">
                            celebration
                        </span>
                        <span class="nav-link-text font-weight-bold ms-2 ps-1">Εκδηλώσεις</span>
                    </a>
                    <div class="collapse " id="authExamples3">
                        <ul class="nav ">
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../pages/users/new-event.php">
                                    <span class="material-symbols-outlined ps-3">
                                        send
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Νέα Εκδήλωση </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-events.php">
                                    <span class="material-symbols-outlined ps-3">
                                        table_chart
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
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
                                href="javascript:;">Επιχειρήσεις</a></li>
                        <li class="breadcrumb-item text-sm text-dark" aria-current="page">Προβολή Επιχειρήσεων</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Προβολή Επιχειρήσεων</h6>
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
                        <!--<div class="input-group input-group-outline">
              <label class="form-label">Αναζήτηση</label>
              <input type="text" class="form-control">
            </div>-->
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
            <div class="row mt-4">
                <div class="col-12">
                    <?php if(isset($_GET['edited'])){echo '<span style="color:green;text-align:center;margin-left: 20px;">Η επεξεργασία ολοκληρωθηκε επιτυχως</span>';}elseif(isset($_GET['delete'])){echo '<span style="color:green;text-align:center;margin-left: 20px;">Η διαγραφή ολοκληρώθηκε επιτυχώς</span>';}elseif(isset($_GET['error'])){echo '<span style="color:red;text-align:center;margin-left: 20px;">Κάτι πήγε λάθος, Προσπαθήστε ξανά</span>';}?>

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-6" style="margin-bottom:2%;">
                                    <h5 class="mb-0">Αναζήτηση Επιχείρησης</h5>
                                    <p class="text-sm mb-0">
                                        Αναζητήστε και Παραμετροποιήστε την επιχείρηση που επιθυμείτε
                                    </p>
                                </div>


                                <div class="col-md-6">
                                    <button onClick="window.location.href='../pages/users/new-business.php';"
                                        class="btn btn-dark" style="float: right; width: 200px;">
                                        Εγγραφη Επιχειρησης <i class="fas fa-business-time btn-icon"
                                            style="margin-left: 2px"></i>
                                    </button>
                                </div>


                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">

                                        <select id="resultsPerPageSelect" onchange="updateResultsPerPage()"
                                            class="dataTable-selector"
                                            style="background-color: white; border: 1px solid #E0E3E5; border-radius: .375rem; color: #7b809a">

                                            <option value="10" style="font-size: 14px;" selected>10</option>
                                            <option value="20" style="font-size: 14px;">20</option>
                                            <option value="30" style="font-size: 14px;">30</option>
                                        </select>
                                        <label class="text-sm mb-0" style="margin-left: 10px"
                                            for="resultsPerPage">Αποτελ.ανά Σελ.</label>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <!-- <div class="input-group input-group-outline"
                                        style="width: 200px; float: right; height: 30px">
                                        <label class="form-label">Αναζήτηση...</label>
                                        <input type="text" class="form-control" id="searchInput">
                                    </div> -->
                                    <div class="dataTable-search">
                                        <input class="dataTable-input searchBar" id="searchInput"
                                            placeholder="Αναζήτηση..." type="text"
                                            style="width: 200px; float: right; height: 35px; border: 1px solid #F0F2F5; border-radius: 5px; color: #495057;" />
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="table-responsive">

                            <table class="table table-flush" id="dataTable">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Τιτλος
                                            <span class="sort-icon" id="title-sort">
                                                <i class="fas fa-sort" style="float: right; margin-right: 20px"
                                                    data-order="asc"></i>
                                            </span>
                                        </th>
                                        <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Επωνυμία
                                            <span class="sort-icon" id="name-sort">
                                                <i class="fas fa-sort" style="float: right; margin-right: 20px"
                                                    style="margin-left:40%;" data-order="asc"></i>
                                            </span>
                                        </th>
                                        <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Υπευθυνοι
                                            <span class="sort-icon" id="resp-sort">
                                                <i class="fas fa-sort" style="float: right; margin-right: 20px"
                                                    data-order="asc"></i>
                                            </span>
                                        </th>
                                        <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Email
                                            <span class="sort-icon" id="email-sort">
                                                <i class="fas fa-sort" style="float: right; margin-right: 20px"
                                                    data-order="asc"></i>
                                            </span>
                                        </th>



                                        <th class="text-uppercase   text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Τηλεφωνο</th>
                                        <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="text-align: start;">
                                            Ημ/νία<br>Εγγραφης
                                            <span class="sort-icon" id="date-sort">
                                                <i class="fas fa-sort" style="float: right; margin-right: 20px"
                                                    data-order="asc"></i>
                                            </span>
                                        </th>


                                    </tr>
                                </thead>
                                <tbody id="tableBody">

                                    <!--<tr>
                    <td class="text-sm font-weight-normal">Donna Snider</td>
                    <td class="text-sm font-weight-normal">Customer Support</td>
                    <td class="text-sm font-weight-normal">New York</td>
                    <td class="text-sm font-weight-normal">27</td>
                    <td class="text-sm font-weight-normal">2011/01/25</td>
                    <td class="text-sm font-weight-normal">$112,000</td>
                  </tr>-->


                                </tbody>

                            </table>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div id="resultMessage" style="margin-left:7px;"></div>



                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <!-- Add this HTML for pagination -->
                                    <ul class="pagination justify-content-end cursor-pointer" id="pagination">
                                        <!-- Add left and right arrow buttons -->
                                        <li class="page-item">
                                            <a class="page-link arrow-button" id="prevPage">&lt;</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link arrow-button" id="nextPage">&gt;</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Add modals for delete and activate actions -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
        $(document).ready(function() {
            // Initial sorting order (ascending)
            var currentOrder = "asc";

            // Function to toggle the sorting order and update the icon
            function toggleSortOrder(headerId) {
                if (headerId === currentHeaderId) {
                    currentOrder = currentOrder === "asc" ? "desc" : "asc";
                } else {
                    currentOrder = "asc";
                }
                currentHeaderId = headerId;

                // Reset sorting icons for all headers
                //$(".sort-icon i").removeClass("fas fa-sort");

                // Update the icon for the clicked header
                if (currentOrder === "desc") {
                    $("#" + headerId + " i").addClass("fas fa-sort");
                } else {
                    $("#" + headerId + " i").addClass("fas fa-sort");
                }
                return currentOrder;
            }

            var currentHeaderId = ""; // Keep track of the currently clicked header

            // Function to perform the sorting for a specific column
            function performSort(order, columnSelector) {
                var $tableBody = $("#tableBody");
                var rows = $tableBody.find("tr").toArray();

                rows.sort(function(a, b) {
                    var textA = $(a).find(columnSelector).text().toLowerCase();
                    var textB = $(b).find(columnSelector).text().toLowerCase();

                    if (order === "asc") {
                        return textA.localeCompare(textB);
                    } else {
                        return textB.localeCompare(textA);
                    }
                });

                $tableBody.empty();
                $.each(rows, function(index, row) {
                    $tableBody.append(row);
                });
            }

            // Handle sorting button click for different columns
            $("#title-sort").click(function() {
                var newOrder = toggleSortOrder("title-sort");
                performSort(newOrder, "td:eq(0)");
            });
            $("#name-sort").click(function() {
                var newOrder = toggleSortOrder("name-sort");
                performSort(newOrder, "td:eq(1)");
            });
            $("#resp-sort").click(function() {
                var newOrder = toggleSortOrder("resp-sort");
                performSort(newOrder, "td:eq(2)");
            });

            $("#email-sort").click(function() {
                var newOrder = toggleSortOrder("email-sort");
                performSort(newOrder, "td:eq(3)");
            });

            $("#date-sort").click(function() {
                var newOrder = toggleSortOrder("date-sort");
                performSort(newOrder, "td:eq(4)");
            });
        });
        </script>


        <!-- Add modals for delete and activate actions -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <!-- Delete Modal Content -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Διαγραφή Επιχείρησης</h5>
                        <button type="button" class="close custom-close" id="cancel1" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Είστε Βέβαιοι οτι θέλετε να Διαγράψετε την Επιχείρηση;<br>
                        Θα Διαγραφούν ολα τα Δεδομένα χωρίς δυνατότητα ανάκτησης!!!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cancel"
                            data-dismiss="modal">Ακυρωση</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Διαγραφη</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        let itemsPerPage = 10; // Set the number of items per page
        let currentPage = 1; // Initial page
        let totalPages = 0;

        // Add event listeners for the previous and next page buttons
        const prevPageButton = document.getElementById('prevPage');
        const nextPageButton = document.getElementById('nextPage');

        prevPageButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                //const data = fetchData();
                console.log('Previous Page Clicked:', currentPage);
                populateTable(currentPage);
                updatePagination(data);
            }
        });

        nextPageButton.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                //const data = fetchData();
                console.log('Next Page Clicked:', currentPage);
                populateTable(currentPage);
                updatePagination(data);
            }
        });

        async function populateTable(pageNumber) {
            // Calculate the starting index and ending index for the current page
            const startIndex = (pageNumber - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            const tableBody = document.getElementById('tableBody');
            const data = await fetchData();
            if (data.length == 0) {
                displayNoResultsRow();
            } else {
                tableBody.innerHTML = '';


                for (let i = startIndex; i < endIndex && i < data.length; i++) {
                    const item = data[i];
                    const row = document.createElement('tr');
                    row.classList.add('selectable-row');

                    const properties = ['title', 'name', 'fullName', 'email', 'mobile', 'dateOfRegistration'];
                    properties.forEach((prop) => {
                        const cell = document.createElement('td');
                        cell.classList.add('text-sm', 'text-left', 'font-weight-normal');
                        cell.style.width = "15% "
                        if (prop === 'dateOfRegistration') {
                            cell.textContent = formatDate(item[
                                prop]); // Format the date before displaying
                        } else {
                            cell.textContent = item[prop];
                        }
                        row.appendChild(cell);
                    });

                    const buttonCell = document.createElement('td');
                    buttonCell.classList.add('text-center');

                    // Create a container (e.g., <div>) to hold the buttons with spacing
                    const buttonContainer = document.createElement('div');
                    buttonContainer.classList.add('button-container');

                    // Create a cell for the button
                    // const actionCell = document.createElement('td');
                    // actionCell.classList.add('text-center');
                    // Create the button element based on the 'active' state
                    const actionButton = document.createElement('button');
                    actionButton.classList.add('action-button');

                    actionButton.innerHTML =
                        '<i class="material-symbols-outlined text-dark">delete</i>'; // Show Delete button for active users
                    actionButton.addEventListener('click', () => {
                        // Show the delete confirmation modal and pass the row ID
                        console.log(item.Id);
                        showDeleteModal(item._id);
                    });


                    // Create the button element
                    const editButton = document.createElement('button');
                    editButton.classList.add('edit-button');
                    editButton.innerHTML = '<i class="material-symbols-outlined text-dark">edit</i>';

                    // Attach a click event listener to the button
                    editButton.addEventListener('click', () => {

                        // Call a function to handle the button click
                        handleEditButtonClick(item._id, item.name, item.title, item.fullName, item.body,
                            item.email, item.mobile, item.ownedBy, item.dateOfRegistration
                        ); // Pass the _id to the function
                    });
                    // Add CSS styles to remove background and border
                    editButton.style.backgroundColor = 'transparent';
                    editButton.style.border = 'none';
                    editButton.style.padding = '0';
                    buttonCell.appendChild(editButton);

                    // Add CSS styles to remove background and border
                    actionButton.style.backgroundColor = 'transparent';
                    actionButton.style.border = 'none';
                    actionButton.style.padding = '0';

                    editButton.style.marginRight = '20px'; // Adjust the margin as needed


                    buttonContainer.appendChild(editButton);
                    buttonContainer.appendChild(actionButton);

                    // Append the container to the button cell
                    buttonCell.appendChild(buttonContainer);
                    // Create a row and add the cells

                    row.classList.add('selectable-row');

                    row.appendChild(buttonCell);
                    tableBody.appendChild(row);
                };

                // Update the result message
                const resultMessage = document.getElementById('resultMessage');
                const totalResults = data.length;
                const startResult = Math.min(startIndex + 1, totalResults);
                const endResult = endIndex;
                resultMessage.textContent = `Showing ${startResult} to ${endResult} of ${totalResults} entries`;
                const row1 = document.createElement('tr');
                row1.classList.add('selectable-row');
                tableBody.appendChild(row1);

            }


        }

        // Create a cell for the "Edit" title
        const editTitleCell = document.createElement('th');
        editTitleCell.classList.add('text-uppercase', 'text-center', 'text-secondary',
            'text-xxs', 'font-weight-bolder', 'opacity-7');
        editTitleCell.textContent = 'Ενέργειες'; // Set the title text for "Edit"

        // Append the "Edit" title cell to the table header row
        document.querySelector('thead tr').appendChild(editTitleCell);

        // Create a cell for the "Action" title
        // const actionTitleCell = document.createElement('th');
        // actionTitleCell.classList.add('text-uppercase', 'text-center', 'bg-light', 'text-dark', 'text-secondary',
        //     'text-xs', 'font-weight-bolder', 'opacity-10');
        // actionTitleCell.innerHTML = 'Διαγραφη'; // Set the title text for "Action"

        // // Append the "Action" title cell to the table header row
        // document.querySelector('thead tr').appendChild(actionTitleCell);

        // Show the delete confirmation modal
        function showDeleteModal(rowId) {
            console.log(rowId);
            $('#deleteModal').modal('show');

            document.getElementById('confirmDelete').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user

                window.location.href = `business-edit-patch.php?delete_id=${rowId}`;
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

        async function updatePagination(data) {
            totalPages = Math.ceil(data.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';
            console.log("pages" + itemsPerPage)
            const prevPageListItem = document.createElement('li');
            prevPageListItem.classList.add('page-item');
            prevPageButton.classList.add('page-link');
            prevPageButton.setAttribute('aria-label', 'Previous');
            prevPageButton.innerHTML = '<span aria-hidden="true">&lt;</span>';
            prevPageListItem.appendChild(prevPageButton);

            // Add the "Previous" button
            paginationContainer.appendChild(prevPageListItem);

            for (let i = 1; i <= totalPages; i++) {
                const listItem = document.createElement('li');
                listItem.classList.add('page-item');

                const link = document.createElement('a');
                link.classList.add('page-link');
                link.textContent = i;
                if (i === currentPage) {
                    link.style.backgroundColor = '#344767'; // Change the background color for the current page
                    link.style.color = '#fff';
                }
                link.addEventListener('click', () => {
                    currentPage = i;
                    populateTable(currentPage);

                    updatePagination(data);
                });

                listItem.appendChild(link);
                paginationContainer.appendChild(listItem);
            }
            const nextPageListItem = document.createElement('li');
            nextPageListItem.classList.add('page-item');
            nextPageButton.classList.add('page-link');
            nextPageButton.setAttribute('aria-label', 'Next');
            nextPageButton.innerHTML = '<span aria-hidden="true">&gt;</span>';
            nextPageListItem.appendChild(nextPageButton);

            // Add the "Next" button
            paginationContainer.appendChild(nextPageListItem);
            //const data = await fetchData();
            //updatePagination(data);
            // Inside the event listener for pagination links, pass the 'data' variable.

        }


        async function fetchData() {
            try {
                const response = await fetch('https://api.valmore.gr/api/organization-fetch-business');
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Error fetching data:', error);
                return [];
            }
        }
        async function init() {
            try {
                const data = await fetchData(); // Define data within this function
                populateTable(currentPage);
                updatePagination(data);
            } catch (error) {
                console.error('Error initializing:', error);
            }
        }

        init();



        function formatDate(dateString) {
            const date = new Date(dateString);
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${day}-${month}-${year}`;
        }





        populateTable();

        function handleEditButtonClick(id, name, title, fullName, body, email, mobile, ownedBy,
            dateOfRegistration) {
            const formattedDate = formatDate(dateOfRegistration);
            // Create a form element
            const form = document.createElement('form');
            form.method = 'post';
            form.action = 'business-edit.php';

            // Create an input field for the _id
            const inputId = document.createElement('input');
            inputId.type = 'hidden'; // Hidden input
            inputId.name = 'id'; // Name of the input
            inputId.value = id; // Value is the _id

            const inputName = document.createElement('input');
            inputName.type = 'hidden'; // Hidden input
            inputName.name = 'name'; // Name of the input
            inputName.value = name; // Value is the _id

            const inputTitle = document.createElement('input');
            inputTitle.type = 'hidden'; // Hidden input
            inputTitle.name = 'title'; // Name of the input
            inputTitle.value = title; // Value is the _id

            const inputFullName = document.createElement('input');
            inputFullName.type = 'hidden'; // Hidden input
            inputFullName.name = 'fullName'; // Name of the input
            inputFullName.value = fullName; // Value is the _id

            const inputBody = document.createElement('input');
            inputBody.type = 'hidden'; // Hidden input
            inputBody.name = 'body'; // Name of the input
            inputBody.value = body; // Value is the _id

            const inputEmail = document.createElement('input');
            inputEmail.type = 'hidden'; // Hidden input
            inputEmail.name = 'email'; // Name of the input
            inputEmail.value = email; // Value is the _id


            const inputMobile = document.createElement('input');
            inputMobile.type = 'hidden'; // Hidden input
            inputMobile.name = 'mobile'; // Name of the input
            inputMobile.value = mobile; // Value is the _id

            const inputownedBy = document.createElement('input');
            inputownedBy.type = 'hidden'; // Hidden input
            inputownedBy.name = 'ownedBy'; // Name of the input
            inputownedBy.value = ownedBy; // Value is the _id

            const inputDateOfRegistration = document.createElement('input');
            inputDateOfRegistration.type = 'hidden'; // Hidden input
            inputDateOfRegistration.name = 'dateOfRegistration'; // Name of the input
            inputDateOfRegistration.value = formattedDate; // Value is the _id

            // Append the input field to the form
            form.appendChild(inputId);
            form.appendChild(inputName);
            form.appendChild(inputTitle);
            form.appendChild(inputFullName);
            form.appendChild(inputBody);
            form.appendChild(inputEmail);
            form.appendChild(inputMobile);
            form.appendChild(inputownedBy);
            form.appendChild(inputDateOfRegistration);
            // Append the form to the document body
            document.body.appendChild(form);

            // Submit the form
            form.submit();
        }

        function filterTable() {
            const searchInput = document.getElementById('searchInput');
            const filterValue = searchInput.value.toLowerCase();
            const tableRows = document.querySelectorAll('.selectable-row');
            let foundResults = false;
            tableRows.forEach((row) => {
                const rowData = Array.from(row.children)
                    .map((cell) => cell.textContent.toLowerCase())
                    .join('');
                if (rowData.includes(filterValue)) {
                    row.style.display = '';
                    foundResults = true;
                } else {
                    row.style.display = 'none';
                }
            });
            // Check if no results were found, and display a message row if needed
            console.log(foundResults);
            if (!foundResults) {
                displayNoResultsRow();
            } else if (foundResults) {
                removeNoResultsRow();
            }
        }

        function displayNoResultsRow() {
            // Check if the "No results" row already exists; if not, create it
            if (!document.getElementById('noResultsRow')) {
                const tableBody = document.getElementById('tableBody');
                const noResultsRow = document.createElement('tr');
                noResultsRow.id = 'noResultsRow';
                noResultsRow.classList.add('selectable-row1');

                const messageCell = document.createElement('td');
                messageCell.colSpan =
                    7; // Replace with the actual number of columns in your table
                messageCell.classList.add('text-center', 'pressable-text', "messageCell");
                messageCell.textContent = 'Δεν Βρέθηκαν διαθέσιμες Επιχειρήσεις Πατήστε εδώ για να προσθέσετε';

                messageCell.addEventListener('click', () => {
                    // Handle the click event when no results message is clicked
                    // For example, you can clear the search input or perform other actions
                    window.location.href = `../pages/users/new-business.php`;
                });

                noResultsRow.appendChild(messageCell);
                tableBody.appendChild(noResultsRow);
            }

        }

        function removeNoResultsRow() {
            const noResultsRow = document.getElementById('noResultsRow');
            if (noResultsRow) {
                noResultsRow.remove();
            }
        }

        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', filterTable);

        // Function to update the number of items per page based on user selection
        async function updateResultsPerPage() {
            const resultsPerPageSelect = document.getElementById('resultsPerPageSelect');
            itemsPerPage = parseInt(resultsPerPageSelect.value); // Update itemsPerPage with the selected value
            currentPage = 1; // Reset to the first page when changing items per page
            populateTable(currentPage); // Refresh the table with the new items per page
            const data = await fetchData();
            // Update pagination with the new total pages
            updatePagination(data);
        }

        // Add an event listener to the select element for changing items per page
        const resultsPerPageSelect = document.getElementById('resultsPerPageSelect');
        resultsPerPageSelect.addEventListener('change', () => {
            // Pass the 'data' variable to the updateResultsPerPage function
            updateResultsPerPage(data);
        });

        // Initialize the table with the default itemsPerPage value
        populateTable(currentPage);
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
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/datatables.js"></script>
    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
    });
    </script>
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
    <script src="../../assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>