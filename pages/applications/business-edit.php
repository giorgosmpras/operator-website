<?php
session_start();
// Retrieve the _id parameter from the URL
//$id = $_POST['id'];

if (isset($_POST['id'])){
  $id = $_POST['id'];
}else{
  $id = $_SESSION['id'];
}

if (isset($_POST['name'])){
  $name = $_POST['name'];
}else{
  $name = $_SESSION['name'];
}

if (isset($_POST['title'])){
  $title = $_POST['title'];
}else{
  $title = $_SESSION['title'];
}

if (isset($_POST['fullName'])){
  $fullName = $_POST['fullName'];
}else{
  $fullName = $_SESSION['fullName'];
}

if (isset($_POST['body'])){
  $body = $_POST['body'];
}else{
  $body = $_SESSION['body'];
}

if (isset($_POST['email'])){
  $email = $_POST['email'];
}else{
  $email = $_SESSION['email'];
}

if (isset($_POST['mobile'])){
  $mobile = $_POST['mobile'];
}else{
  $mobile = $_SESSION['mobile'];
}

if (isset($_POST['ownedBy'])){
  $ownedBy = $_POST['ownedBy'];
}else{
  $ownedBy = $_SESSION['ownedBy'];
}

if (isset($_POST['dateOfRegistration'])){
  $dateOfRegistration = $_POST['dateOfRegistration'];
}else{
  $dateOfRegistration = $_SESSION['dateOfRegistration'];
}


  $userid = "";
  $removeduserid = "";

//$title = $_POST['title'];
//$fullName = $_POST['fullName'];
/*$body = $_POST['body'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$ownedBy = $_POST['ownedBy'];
$dateOfRegistration= $_POST['dateOfRegistration'];

/*echo " id: ".$id;
echo " name: ".$name;
echo " title: ".$title;
echo " fullname: ".$fullName ;
echo " email: ".$email;
echo " mobile: ".$mobile;
echo " date: ".$dateOfRegistration;*/
// Now you can use the $id to perform actions in your PHP script
// For example, fetching data related to the specific _id
// ...

// Your PHP code here
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
    <!--modal
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    -->
    <style>
    .ui-autocomplete {
        max-height: 150px;
        overflow-y: auto;
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
    }



    .search-container1 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;

    }

    .search-container input[type="text"] {
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .search {
        margin-top: 10px;
        border-color: cornsilk;
        border-radius: 5px;
        height: 25px;
        margin-bottom: 10px;
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
        align-self: end;
    }

    .select-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    /* Optional: Add some spacing between the label and select */
    .select-container label {
        margin-bottom: 5px;
    }

    .search-container1 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .input-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0px;
        /* Add some spacing between elements */
        width: 100%;
        /* Make sure the row spans the full width */
    }

    .searchBar:focus {
        outline: 0px solid orange;
    }

    .left-side {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .right-side {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-right: 300px;
    }

    .button-container {
        display: flex;
        gap: 100px;
        /* Add spacing between buttons */
        align-items: center;
        margin-bottom: 10px;
        height: 20px;
    }

    .button-container button {
        margin: 0;
        /* Reset margin */
    }

    /* Adjust the width of the input fields */
    #user-remove,
    #user-add {
        width: 100%;
        /* Make the input fields 100% of the container width */
        max-width: 400px;
        /* Optional: Set a maximum width to prevent them from becoming too wide */
    }

    /* Adjust the width of the select element */
    select {
        max-width: 200px;
        /* Optional: Set a maximum width for the select */
    }

    .radio-label {
        display: flex;
        align-items: center;
    }

    /* Style for the custom file input label */
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



    .deleteIcon:hover {
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
-->
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>-->
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
                        <span class="nav-link-text font-weight-bold ms-2 ps-1 text-dark">Επιχειρήσεις</span>
                    </a>
                    <div class="collapse show" id="ecommerceExamples">
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
                                <a class="nav-link text-dark " href="../applications/datatables-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        store
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Προβολή </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  bg-dark  text-white " href="../pages/users/new-business.php">
                                    <span class="material-symbols-outlined ps-3">
                                        edit
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1"> Eπεξεργασία </span>
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
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;"> Νέο Μήνυμα
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark " href="../applications/datatables-messages.php">
                                    <span class="material-symbols-outlined ps-3">
                                        <span class="material-symbols-outlined">
                                            table_chart
                                        </span>
                                    </span>
                                    <span class="sidenav-normal  ms-2  ps-1" style="padding-left: 10px;"> Προβολή
                                    </span>
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
                    <h6 class="font-weight-bolder mb-0">Επεξεργασία Επιχείρησης</h6>
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
        <div class="container-fluid py-0">
            <div class="row">
                <div class="col-12">
                    <div class="multisteps-form mb-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <h6 class="font-weight-bolder  text-align:center text-red mt-1">
                                <?php if(isset($_GET['success'])){echo '<span style="color:green;text-align:center;">Η εγγραφη ολοκληρωθηκε επιτυχως</span>';}elseif(isset($_GET['success'])==""){echo "";}else{echo '<span style="color:red;text-align:center;">Σφαλμα</span>';}?>
                            </h6>
                        </div>
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5 mt1">
                            </div>
                        </div>

                        <!--form panels-->
                        <div class="row">




                            <div class="col-12 col-lg-12 m-auto" style="margin-left: 0 !important; ">
                                <div class="card">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-dark shadow-dark border-radius-lg pt-4 pb-3">
                                            <div class="multisteps-form__progress">
                                                <button class="multisteps-form__progress-btn js-active" type="button"
                                                    title="User Info">
                                                    <span>Στοιχεια</span>
                                                </button>
                                                <button class="multisteps-form__progress-btn" type="button" id="address"
                                                    title="Address">Διευθυνση </button>
                                                <button class="multisteps-form__progress-btn" type="button"
                                                    id="descriptio" title="Socials">Περιγραφη</button>
                                                <!--<button class="multisteps-form__progress-btn" type="button" title="Profile">Profile</button>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="card-body" style="overflow-y: auto; padding-right:20px">
                                            <form role="form" class="multisteps-form__form" method="post"
                                                action="business-edit-patch.php">
                                                <!---->
                                                <!--single form panel-->
                                                <div class="multisteps-form__panel border-radius-xl bg-white js-active"
                                                    data-animation="FadeIn">
                                                    <div class="icon-con">
                                                        <h5 class="font-weight-bolder mb-0">Στοιχεια Επιχείρησης</h5>
                                                        <a class="nav-link text-dark a-con ">
                                                            <span id="openModalBtn"
                                                                class="material-symbols-outlined deleteIcon">
                                                                delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <p class="mb-0 text-sm">Υποχρεωτικα</p>

                                                    <br>


                                                    <div class="multisteps-form__content ">

                                                        <div class="row mt-3">
                                                            <div class="col-12 col-sm-6">

                                                                <div class="input-group input-group-dynamic">
                                                                    <label class="form-label">Τίτλος*</label>
                                                                    <input name="title"
                                                                        class="multisteps-form__input  form-control"
                                                                        type="text" value="<?php echo $title; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">

                                                                <div class="input-group input-group-dynamic">
                                                                    <label class="form-label">Επωνυμία*</label>
                                                                    <input name="name"
                                                                        class="multisteps-form__input form-control"
                                                                        type="text" value="<?php echo $name; ?>" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="input-group input-group-dynamic">
                                                                    <label class="form-label">Email*</label>
                                                                    <input name="email"
                                                                        class="multisteps-form__input form-control"
                                                                        type="text" value="<?php echo $email; ?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                                <div class="input-group input-group-dynamic">
                                                                    <label class="form-label">Τηλέφωνο*
                                                                    </label>
                                                                    <input name="mobile"
                                                                        class="multisteps-form__input form-control"
                                                                        type="number" value="<?php echo $mobile; ?>" />
                                                                </div>
                                                                <!-- Hidden input field to store the selectedUserId -->
                                                                <input type="hidden" id="selected-user-id"
                                                                    name="selectedUserId">








                                                                <div class="button-row d-flex mt-4">

                                                                    <button class="btn bg-gradient-dark ms-auto mb-4"
                                                                        type="submit" title="Next">αποθηκευση</button>
                                                                </div>

                                                            </div>
                                                            <br>
                                                            <h5 class="font-weight-bolder mb-2"
                                                                style="margin-bottom:20px;">
                                                                Συνδεδεμένοι δημότες</h5>

                                                            <table class="table table-bordered table-flush"
                                                                id="dataTable">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th
                                                                            class="text-uppercase bg-light text-dark text-left  text-secondary text-xs font-weight-bolder opacity-10">
                                                                            Ονομα</th>
                                                                        <th
                                                                            class="text-uppercase bg-light text-dark text-left  text-secondary text-xs font-weight-bolder opacity-10">
                                                                            Επιθετο</th>



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
                                                            <div class="button-row d-flex mt-4">
                                                                <button id="OpenaddModal"
                                                                    class="btn bg-gradient-dark ms-auto mb-3"
                                                                    type="button">Συνδεση Δημoτη</button>
                                                            </div>
                                                            <br>
                                                            <br>

                                                            <script>
                                                            async function populateTable() {
                                                                const tableBody = document.getElementById(
                                                                    'tableBody');
                                                                const data = await fetchData();

                                                                tableBody.innerHTML = '';

                                                                // Check if data is an object with the expected structure
                                                                if (data && data.business && Array.isArray(data
                                                                        .business
                                                                        .fullName) && data.business.fullName
                                                                    .length > 0) {
                                                                    const fullNames = data.business
                                                                        .fullName; // Get all full names in the array

                                                                    // Iterate over each full name
                                                                    fullNames.forEach((fullName) => {
                                                                        const nameParts = fullName.split(
                                                                            ' ');
                                                                        const name = nameParts[0];
                                                                        const lastName = nameParts.slice(1)
                                                                            .join(' ');

                                                                        // Create and populate the 'name' cell
                                                                        const nameCell = document
                                                                            .createElement(
                                                                                'td');
                                                                        nameCell.classList.add('text-sm',
                                                                            'text-left',
                                                                            'font-weight-normal');
                                                                        nameCell.textContent = name;

                                                                        // Create and populate the 'lastname' cell
                                                                        const lastNameCell = document
                                                                            .createElement('td');
                                                                        lastNameCell.classList.add(
                                                                            'text-sm',
                                                                            'text-left',
                                                                            'font-weight-normal');
                                                                        lastNameCell.textContent = lastName;

                                                                        // Create a cell for the buttons
                                                                        const buttonCell = document
                                                                            .createElement('td');
                                                                        buttonCell.classList.add(
                                                                            'text-center');

                                                                        // Create a container (e.g., <div>) to hold the buttons with spacing
                                                                        const buttonContainer = document
                                                                            .createElement('div');
                                                                        buttonContainer.classList.add(
                                                                            'button-container');

                                                                        // Create the edit button
                                                                        const editButton = document
                                                                            .createElement('button');
                                                                        editButton.classList.add(
                                                                            'edit-button');
                                                                        editButton.innerHTML =
                                                                            '<i class="material-symbols-outlined text-dark">edit</i>';
                                                                        editButton.addEventListener('click',
                                                                            () => {

                                                                                event.preventDefault();
                                                                                const row = editButton
                                                                                    .closest('tr');

                                                                                // Retrieve the full name from the row (assuming it's stored in a cell)
                                                                                const NameCell = row
                                                                                    .querySelector(
                                                                                        '.nameCell'
                                                                                    ); // Adjust the selector as needed
                                                                                const Name = nameCell
                                                                                    .textContent;

                                                                                const LastNameCell = row
                                                                                    .querySelector(
                                                                                        '.lastNameCell'
                                                                                    ); // Adjust the selector as needed
                                                                                const LastName =
                                                                                    lastNameCell
                                                                                    .textContent;

                                                                                // Now, you have the full name, and you can use it as needed
                                                                                console.log(
                                                                                    'Full Name:',
                                                                                    Name + " " +
                                                                                    LastName);
                                                                                const FullName = Name +
                                                                                    " " + LastName;


                                                                                fetchDataId1(FullName);
                                                                            });


                                                                        // Create the action button
                                                                        const actionButton = document
                                                                            .createElement('button');
                                                                        actionButton.classList.add(
                                                                            'action-button');
                                                                        actionButton.innerHTML =
                                                                            '<i class="material-symbols-outlined text-dark">delete</i>';
                                                                        // Add a click event listener to the action button
                                                                        actionButton.addEventListener(
                                                                            'click', () => {
                                                                                event.preventDefault();
                                                                                const row = actionButton
                                                                                    .closest('tr');

                                                                                // Retrieve the full name from the row (assuming it's stored in a cell)
                                                                                const NameCell = row
                                                                                    .querySelector(
                                                                                        '.nameCell'
                                                                                    ); // Adjust the selector as needed
                                                                                const Name = nameCell
                                                                                    .textContent;

                                                                                const LastNameCell = row
                                                                                    .querySelector(
                                                                                        '.lastNameCell'
                                                                                    ); // Adjust the selector as needed
                                                                                const LastName =
                                                                                    lastNameCell
                                                                                    .textContent;

                                                                                // Now, you have the full name, and you can use it as needed
                                                                                console.log(
                                                                                    'Full Name:',
                                                                                    Name + " " +
                                                                                    LastName);
                                                                                const FullName = Name +
                                                                                    " " + LastName;


                                                                                showRemoveModal(
                                                                                    FullName);
                                                                            });

                                                                        // Apply CSS styles to reduce the margin between the buttons
                                                                        editButton.style.marginLeft =
                                                                            '40px'; // Adjust the margin as needed
                                                                        actionButton.style.marginRight =
                                                                            '40px'; // Adjust the margin as needed

                                                                        // Append the buttons to the container
                                                                        buttonContainer.appendChild(
                                                                            editButton);
                                                                        buttonContainer.appendChild(
                                                                            actionButton);

                                                                        // Append the container to the button cell
                                                                        buttonCell.appendChild(
                                                                            buttonContainer);
                                                                        // Set the width of the button column to 20 pixels
                                                                        buttonCell.style.width = '20px';
                                                                        // Add CSS styles to remove background and border
                                                                        editButton.style.backgroundColor =
                                                                            'transparent';
                                                                        editButton.style.border = 'none';
                                                                        editButton.style.padding = '0';


                                                                        // Add CSS styles to remove background and border
                                                                        actionButton.style.backgroundColor =
                                                                            'transparent';
                                                                        actionButton.style.border = 'none';
                                                                        actionButton.style.padding = '0';



                                                                        // Create a row and add the cells
                                                                        const row = document.createElement(
                                                                            'tr');
                                                                        row.classList.add('selectable-row');
                                                                        row.appendChild(nameCell);
                                                                        row.appendChild(lastNameCell);
                                                                        row.appendChild(buttonCell);

                                                                        // Append the row to the table body
                                                                        tableBody.appendChild(row);
                                                                    });

                                                                    // Create a cell for the "Edit" title
                                                                    const editTitleCell = document.createElement(
                                                                        'th');
                                                                    editTitleCell.classList.add('text-uppercase',
                                                                        'text-center',
                                                                        'bg-light', 'text-dark',
                                                                        'text-secondary',
                                                                        'text-xs',
                                                                        'font-weight-bolder', 'opacity-10');
                                                                    editTitleCell.textContent =
                                                                        'Ενεργειες'; // Set the title text for "Edit"

                                                                    // Append the "Edit" title cell to the table header row
                                                                    document.querySelector('thead tr').appendChild(
                                                                        editTitleCell);

                                                                } else {
                                                                    // If no results fetched, create a selectable row with a text in the middle that is pressable
                                                                    const emptyRow = document.createElement('tr');
                                                                    emptyRow.classList.add(
                                                                        'selectable-row1'
                                                                    ); // Add the selectable-row class

                                                                    // Create a cell for the text in the middle
                                                                    const textCell = document.createElement('td');
                                                                    textCell.classList.add('text-center',
                                                                        'pressable-text');
                                                                    textCell.textContent =
                                                                        "Δεν Βρέθηκαν Συνδεδεμένοι Δημότες Πατήστε εδώ για να Προσθέσετε"; // You can customize the text here

                                                                    // Add a click event listener to the text cell
                                                                    textCell.addEventListener('click', () => {
                                                                        // Handle the click event here
                                                                        showAddModal();
                                                                    });

                                                                    // Append the text cell to the row
                                                                    emptyRow.appendChild(textCell);

                                                                    // Append the row to the table body
                                                                    tableBody.appendChild(emptyRow);

                                                                    // Remove the specific column header if it exists
                                                                    const columnsToRemove = document
                                                                        .querySelectorAll(
                                                                            '.text-uppercase.bg-light.text-dark.text-left.text-secondary.text-xs.font-weight-bolder.opacity-10'
                                                                        );
                                                                    columnsToRemove.forEach((columnToRemove) => {
                                                                        columnToRemove.parentNode
                                                                            .removeChild(columnToRemove);
                                                                    });

                                                                }


                                                                const row1 = document.createElement('tr');
                                                                row1.classList.add('selectable-row');
                                                                tableBody.appendChild(row1);


                                                            }



                                                            function fetchDataId1(fullname) {
                                                                const url =
                                                                    "https://api.valmore.gr/api/organization/find-user?fullName=" +
                                                                    fullname;

                                                                // Make the GET request using the fetch API
                                                                fetch(url)
                                                                    .then((response) => {
                                                                        if (!response.ok) {
                                                                            throw new Error(
                                                                                "Network response was not ok");
                                                                        }

                                                                        return response.json();
                                                                    })
                                                                    .then((data) => {
                                                                        // Handle the response data here
                                                                        console.log("Response Data:", data);

                                                                        const id2 = <?php echo json_encode($id); ?>;
                                                                        UserRequest(data.id)
                                                                    })
                                                                    .catch((error) => {
                                                                        // Handle any errors that occurred during the fetch
                                                                        console.error("Error:", error);
                                                                    });
                                                            }

                                                            function UserRequest(id) {
                                                                const url =
                                                                    "https://api.valmore.gr/api/organization-get-user?id=" +
                                                                    id;

                                                                // Make the GET request using the fetch API
                                                                fetch(url)
                                                                    .then((response) => {
                                                                        if (!response.ok) {
                                                                            throw new Error(
                                                                                "Network response was not ok");
                                                                        }

                                                                        return response.json();
                                                                    })
                                                                    .then((data) => {
                                                                        // Handle the response data here

                                                                        const formattedDate = formatDate(data
                                                                            .dateOfRegistration);
                                                                        // Create a form element
                                                                        const form = document.createElement('form');
                                                                        form.method = 'post';
                                                                        form.action = 'user-edit.php';

                                                                        // Create an input field for the _id
                                                                        const inputId = document.createElement(
                                                                            'input');
                                                                        inputId.type = 'hidden'; // Hidden input
                                                                        inputId.name = 'id'; // Name of the input
                                                                        inputId.value = data
                                                                            ._id; // Value is the _id

                                                                        const inputname = document.createElement(
                                                                            'input');
                                                                        inputname.type = 'hidden'; // Hidden input
                                                                        inputname.name =
                                                                            'name'; // Name of the input
                                                                        inputname.value = data
                                                                            .name; // Value is the _id

                                                                        const inputlastname = document
                                                                            .createElement('input');
                                                                        inputlastname.type =
                                                                            'hidden'; // Hidden input
                                                                        inputlastname.name =
                                                                            'lastname'; // Name of the input
                                                                        inputlastname.value = data
                                                                            .lastname; // Value is the _id

                                                                        const inputfathers_name = document
                                                                            .createElement('input');
                                                                        inputfathers_name.type =
                                                                            'hidden'; // Hidden input
                                                                        inputfathers_name.name =
                                                                            'fathers_name'; // Name of the input
                                                                        inputfathers_name.value = data
                                                                            .fathers_name; // Value is the _id

                                                                        const inputmothers_name = document
                                                                            .createElement('input');
                                                                        inputmothers_name.type =
                                                                            'hidden'; // Hidden input
                                                                        inputmothers_name.name =
                                                                            'mothers_name'; // Name of the input
                                                                        inputmothers_name.value = data
                                                                            .mothers_name; // Value is the _id

                                                                        const inputEmail = document.createElement(
                                                                            'input');
                                                                        inputEmail.type = 'hidden'; // Hidden input
                                                                        inputEmail.name =
                                                                            'email'; // Name of the input
                                                                        inputEmail.value = data
                                                                            .email; // Value is the _id

                                                                        const inputbirth_date = document
                                                                            .createElement('input');
                                                                        inputbirth_date.type =
                                                                            'hidden'; // Hidden input
                                                                        inputbirth_date.name =
                                                                            'birth_date'; // Name of the input
                                                                        inputbirth_date.value = data
                                                                            .birth_date; // Value is the _id

                                                                        const inputMobile = document.createElement(
                                                                            'input');
                                                                        inputMobile.type = 'hidden'; // Hidden input
                                                                        inputMobile.name =
                                                                            'mobile'; // Name of the input
                                                                        inputMobile.value = data
                                                                            .mobile; // Value is the _id


                                                                        const inputDateOfRegistration = document
                                                                            .createElement('input');
                                                                        inputDateOfRegistration.type =
                                                                            'hidden'; // Hidden input
                                                                        inputDateOfRegistration.name =
                                                                            'dateOfRegistration'; // Name of the input
                                                                        inputDateOfRegistration.value =
                                                                            formattedDate; // Value is the _id

                                                                        // Append the input field to the form
                                                                        form.appendChild(inputId);
                                                                        form.appendChild(inputname);
                                                                        form.appendChild(inputlastname);
                                                                        form.appendChild(inputfathers_name);
                                                                        form.appendChild(inputmothers_name);
                                                                        form.appendChild(inputEmail);
                                                                        form.appendChild(inputMobile);
                                                                        form.appendChild(inputbirth_date);
                                                                        form.appendChild(inputDateOfRegistration);
                                                                        // Append the form to the document body
                                                                        document.body.appendChild(form);

                                                                        // Submit the form
                                                                        form.submit();

                                                                    })
                                                                    .catch((error) => {
                                                                        // Handle any errors that occurred during the fetch
                                                                        console.error("Error:", error);
                                                                    });
                                                            }

                                                            async function fetchData() {
                                                                try {
                                                                    const response = await fetch(
                                                                        `https://api.valmore.gr/api/organization/business-data?business_id=${<?php echo json_encode($id); ?>}`
                                                                    )
                                                                    const data = await response.json();
                                                                    //console.log(data.business.fullName);
                                                                    return data;

                                                                } catch (error) {
                                                                    console.error('Error fetching data:', error);
                                                                    return [];
                                                                }
                                                            }
                                                            async function init() {
                                                                const data = await fetchData();
                                                                populateTable();

                                                            }

                                                            init();
                                                            populateTable();

                                                            function formatDate(dateString) {
                                                                const date = new Date(dateString);
                                                                const year = date.getFullYear();
                                                                const month = String(date.getMonth() + 1).padStart(2,
                                                                    '0');
                                                                const day = String(date.getDate()).padStart(2, '0');
                                                                return `${day}-${month}-${year}`;
                                                            }

                                                            function handleEditButtonClick(id, name, lastname,
                                                                fathers_name, mothers_name, email, birth_date, mobile,
                                                                dateOfRegistration) {
                                                                console.log("Response Data:", id);
                                                                console.log("Response Data:", name);
                                                                const formattedDate = formatDate(dateOfRegistration);
                                                                // Create a form element
                                                                const form = document.createElement('form');
                                                                form.method = 'post';
                                                                form.action = 'user-edit.php';

                                                                // Create an input field for the _id
                                                                const inputId = document.createElement('input');
                                                                inputId.type = 'hidden'; // Hidden input
                                                                inputId.name = 'id'; // Name of the input
                                                                inputId.value = id; // Value is the _id

                                                                const inputname = document.createElement('input');
                                                                inputname.type = 'hidden'; // Hidden input
                                                                inputname.name = 'name'; // Name of the input
                                                                inputname.value = name; // Value is the _id

                                                                const inputlastname = document.createElement('input');
                                                                inputlastname.type = 'hidden'; // Hidden input
                                                                inputlastname.name = 'lastname'; // Name of the input
                                                                inputlastname.value = lastname; // Value is the _id

                                                                const inputfathers_name = document.createElement(
                                                                    'input');
                                                                inputfathers_name.type = 'hidden'; // Hidden input
                                                                inputfathers_name.name =
                                                                    'fathers_name'; // Name of the input
                                                                inputfathers_name.value =
                                                                    fathers_name; // Value is the _id

                                                                const inputmothers_name = document.createElement(
                                                                    'input');
                                                                inputmothers_name.type = 'hidden'; // Hidden input
                                                                inputmothers_name.name =
                                                                    'mothers_name'; // Name of the input
                                                                inputmothers_name.value =
                                                                    mothers_name; // Value is the _id

                                                                const inputEmail = document.createElement('input');
                                                                inputEmail.type = 'hidden'; // Hidden input
                                                                inputEmail.name = 'email'; // Name of the input
                                                                inputEmail.value = email; // Value is the _id

                                                                const inputbirth_date = document.createElement('input');
                                                                inputbirth_date.type = 'hidden'; // Hidden input
                                                                inputbirth_date.name =
                                                                    'birth_date'; // Name of the input
                                                                inputbirth_date.value = birth_date; // Value is the _id

                                                                const inputMobile = document.createElement('input');
                                                                inputMobile.type = 'hidden'; // Hidden input
                                                                inputMobile.name = 'mobile'; // Name of the input
                                                                inputMobile.value = mobile; // Value is the _id


                                                                const inputDateOfRegistration = document.createElement(
                                                                    'input');
                                                                inputDateOfRegistration.type = 'hidden'; // Hidden input
                                                                inputDateOfRegistration.name =
                                                                    'dateOfRegistration'; // Name of the input
                                                                inputDateOfRegistration.value =
                                                                    formattedDate; // Value is the _id

                                                                // Append the input field to the form
                                                                form.appendChild(inputId);
                                                                form.appendChild(inputname);
                                                                form.appendChild(inputlastname);
                                                                form.appendChild(inputfathers_name);
                                                                form.appendChild(inputmothers_name);
                                                                form.appendChild(inputEmail);
                                                                form.appendChild(inputMobile);
                                                                form.appendChild(inputbirth_date);
                                                                form.appendChild(inputDateOfRegistration);
                                                                // Append the form to the document body
                                                                document.body.appendChild(form);

                                                                // Submit the form
                                                                form.submit();
                                                            }
                                                            </script>
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
                                                            <input type="hidden" name="userid" id="userid"
                                                                value="<?php if($userid!=""){echo $userid;} ?>">
                                                            <input type="hidden" name="removeduserid" id="removeduserid"
                                                                value="<?php if($removeduserid!=""){echo $removeduserid;} ?>">

                                                            <input type="hidden" name="id" id="id"
                                                                value="<?php echo $id; ?>">
                                                            <input type="hidden" name="fullName" id="fullName"
                                                                value="<?php echo $fullName; ?>">
                                                            <input type="hidden" name="dateOfRegistration"
                                                                id="dateOfRegistration"
                                                                value="<?php echo $dateOfRegistration; ?>">
                                                            <input type="hidden" name="ownedBy" id="ownedBy"
                                                                value="<?php echo $ownedBy; ?>">
                                                        </div>
                                                        <div class="button-row d-flex mt-4">
                                                            <!--<button class="btn bg-gradient-light mb-0 js-btn-prev"
                                                            type="button" title="Prev">Επιστροφη</button>-->
                                                            <button id="submitButton2"
                                                                class="btn bg-gradient-dark ms-auto mb-0 " type="submit"
                                                                title="Next">αποθηκευση</button>
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
                                                                <label class="form-label">Περιγραφη</label>
                                                                <div class="input-group input-group-dynamic">

                                                                    <textarea id="description" name="body"
                                                                        class="multisteps-form__input form-control"
                                                                        rows="2"><?php echo $body; ?></textarea>
                                                                </div>
                                                                <input type="hidden" id="itemId"
                                                                    value="<?php echo $id; ?>">
                                                                <BR>

                                                                <div class="toggle-container">

                                                                </div>


                                                            </div>
                                                            <div class="image-upload-center ">
                                                                <label
                                                                    class="custom-file-input-label mb-0  bg-dark text-white"
                                                                    id="selectImageButton">
                                                                    Επιλέξτε Εικόνα
                                                                    <input type="file" class="file-input-element"
                                                                        accept="image/*">
                                                                </label>

                                                            </div>

                                                            <script>
                                                            // Get the select image button (label) and file input element

                                                            const fileInputElement = document.querySelector(
                                                                '.file-input-element');
                                                            const itemIdInput = document.getElementById(
                                                                'itemId'); // Add this line
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
                                                                        file
                                                                    ); // Append the file object, not the text content
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
                                                                        `https://api.valmore.gr/api/profile/business/upload?_id=${itemId}`, {
                                                                            method: 'POST',
                                                                            body: formData,
                                                                        });

                                                                    if (response.ok) {
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
                                                            <div class="button-row d-flex mt-4">

                                                                <!--<button class="btn bg-gradient-light mb-0 js-btn-prev"
                                                                type="button" title="Prev">Επιστροφη</button>-->

                                                                <button id="submitButton2"
                                                                    class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                                    type="submit" title="Next">αποθηκευση</button>


                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                // Event listener for the "Next" button
                                const nextButton = document.getElementById('submitButton');
                                nextButton.addEventListener('click', () => {
                                    // Move to the next form panel
                                    const currentPanel = document.querySelector(
                                        '.multisteps-form__panel[data-animation="FadeIn"]');
                                    const nextPanel = currentPanel.nextElementSibling;
                                });
                                </script>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <!-- Delete Modal Content -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Aφαιρεση χρηστη</h5>
                        <button type="button" class="close custom-close" id="cancel4" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Είστε Βέβαιοι οτι θέλετε να Αφαιρέσετε το χρηστη;<br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cancel5"
                            data-dismiss="modal">Ακυρωση</button>
                        <button type="button" class="btn btn-danger" id="confirmRemove">Αφαιρεση</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Add modals for add actions -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="activateModalLabel"
            aria-hidden="true">
            <!-- Delete Modal Content -->
            <div class="modal-dialog modal-dialog1" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="activateModalLabel">Σύνδεση Δημότη</h5>
                        <button type="button" class="close custom-close" id="cancel3" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="dataTable-search" style="margin: 10px">
                        <input class="dataTable-input searchBar" id="searchInput" placeholder="Αναζήτηση..." type="text"
                            style="width: 100%; height: 35px; border: 1px solid #F0F2F5; border-radius: 5px; color: #495057;" />
                    </div>

                    <table class="table  table-bordered table-flush" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th
                                    class="text-uppercase bg-light text-dark text-start text-secondary text-xs font-weight-bolder opacity-10">
                                    Ονομα
                                    <span class="sort-icon" id="name-sort">
                                        <i class="fas fa-sort-alpha-up" data-order="asc"></i>
                                    </span>
                                </th>

                                <th
                                    class="text-uppercase bg-light text-dark text-start text-secondary text-xs font-weight-bolder opacity-10">
                                    Επιθετο
                                    <span class="sort-icon" id="lastname-sort">
                                        <i class="fas fa-sort-alpha-up" data-order="asc"></i>
                                    </span>
                                </th>
                                <th
                                    class="text-uppercase bg-light text-dark text-start text-secondary text-xs font-weight-bolder opacity-10">
                                    email
                                    <span class="sort-icon" id="email-sort">
                                        <i class="fas fa-sort-alpha-up" data-order="asc"></i>
                                    </span>
                                </th>
                                <th
                                    class="text-uppercase bg-light text-dark text-start  text-secondary text-xs font-weight-bolder opacity-10">
                                    τηλεφωνο
                                </th>




                            </tr>
                        </thead>
                        <tbody id="tableBody1">

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
                            $(".sort-icon").html('<i class="fas fa-sort"></i>');

                            // Update the icon for the clicked header
                            $("#" + headerId + " i").toggleClass("fa-sort-alpha-up fa-sort-alpha-down",
                                currentOrder === "desc");

                            return currentOrder;
                        }

                        var currentHeaderId = ""; // Keep track of the currently clicked header

                        // Function to perform the sorting for a specific column
                        function performSort(order, columnSelector) {
                            var $tableBody = $("#tableBody1");
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
                        $("#name-sort").click(function() {
                            var newOrder = toggleSortOrder("name-sort");
                            performSort(newOrder, "td:eq(0)");
                        });
                        $("#lastname-sort").click(function() {
                            var newOrder = toggleSortOrder("lastname-sort");
                            performSort(newOrder, "td:eq(1)");
                        });

                        $("#email-sort").click(function() {
                            var newOrder = toggleSortOrder("email-sort");
                            performSort(newOrder, "td:eq(4)");
                        });

                    });
                    </script>
                    <ul class="pagination justify-content-center cursor-pointer" id="pagination"></ul>
                    <script>
                    let itemsPerPage = 10; // Set the number of items per page
                    let currentPage = 1; // Initial page
                    let currentFilter = 'all';

                    async function populateTable(pageNumber) {
                        // Calculate the starting index and ending index for the current page
                        const startIndex = (pageNumber - 1) * itemsPerPage;
                        const endIndex = startIndex + itemsPerPage;
                        let noneMatch = true;
                        const tableBody = document.getElementById('tableBody1');
                        const data = await fetchData();



                        tableBody.innerHTML = '';
                        if (data || data.length != 0) {
                            for (let i = startIndex; i < endIndex && i < data.length; i++) {
                                const item = data[i];
                                if (item.active === true) {
                                    //console.log(item.name);
                                    //console.log(item.owner_business);
                                    const businessid = <?php echo json_encode($id); ?>;
                                    // Iterate through the array and log each element
                                    item.owner_business.forEach((iduser, index) => {
                                        console.log(iduser);
                                        console.log(businessid);
                                        if (iduser === businessid) {
                                            noneMatch = false;
                                        }
                                    });
                                    console.log(noneMatch)
                                    if (noneMatch) {
                                        // None of the elements in the array match '321', so you can do something here.
                                        //console.log("None of the elements match '321'.");


                                        const row = document.createElement('tr');
                                        row.classList.add('selectable-row1');

                                        // Add a click event listener to each row
                                        row.addEventListener('click', () => {
                                            // Store the clicked row's ID (assuming the ID is in a 'data-id' attribute)
                                            const rowId = item.Id;
                                            // Perform any action you want with the rowId, such as saving it
                                            //console.log(<?php echo $id; ?>);
                                            const id1 = <?php echo json_encode($id); ?>;
                                            newUserAdd(rowId, id1)

                                        });

                                        const properties = ['name', 'lastname', 'email', 'mobile'];
                                        properties.forEach((prop) => {
                                            const cell = document.createElement('td');
                                            cell.classList.add('text-sm', 'text-start',
                                                'font-weight-normal');

                                            cell.textContent = item[prop];

                                            row.appendChild(cell);
                                        });

                                        tableBody.appendChild(row);



                                    };
                                }
                                noneMatch = true;
                            }

                        } else {
                            // If no results fetched, create a selectable row with a text in the middle that is pressable
                            const emptyRow = document.createElement('tr');
                            emptyRow.classList.add(
                                'selectable-row1'
                            ); // Add the selectable-row class

                            // Create a cell for the text in the middle
                            const textCell = document.createElement('td');
                            textCell.classList.add('text-center',
                                'pressable-text');
                            textCell.textContent =
                                "Δεν Βρέθηκαν Συνδεδεμένοι Δημότες Πατήστε εδώ για να Προσθέσετε"; // You can customize the text here

                            // Add a click event listener to the text cell
                            textCell.addEventListener('click', () => {
                                // Handle the click event here
                                window.location.href = `../pages/users/new-user.php`;
                            });

                            // Append the text cell to the row
                            emptyRow.appendChild(textCell);

                            // Append the row to the table body
                            tableBody.appendChild(emptyRow);

                            // Select and remove the specific column header
                            const columnsToRemove = document.querySelectorAll(
                                '.text-uppercase.bg-light.text-dark.text-start.text-secondary.text-xs.font-weight-bolder.opacity-10'
                            );

                            columnsToRemove.forEach((columnToRemove) => {
                                columnToRemove.parentNode.removeChild(columnToRemove);
                            });

                        }
                        const row1 = document.createElement('tr');
                        row1.classList.add('selectable-row1');
                        tableBody.appendChild(row1);

                    }



                    async function updatePagination(data) {
                        const totalPages = Math.ceil(data.length / itemsPerPage);
                        const paginationContainer = document.getElementById('pagination');
                        paginationContainer.innerHTML = '';

                        for (let i = 1; i <= totalPages; i++) {
                            const listItem = document.createElement('li');
                            listItem.classList.add('page-item');

                            const link = document.createElement('a');
                            link.classList.add('page-link');
                            link.textContent = i;
                            if (i === currentPage) {
                                link.style.backgroundColor =
                                    '#344767'; // Change the background color for the current page
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
                    }


                    async function newUserAdd(userId, businessId) {


                        // Define the URL
                        const url = 'https://api.valmore.gr/api/organization/add-business-user';

                        // Create the JSON body
                        const requestBody = JSON.stringify({
                            business_id: businessId,
                            user_id: userId
                        });

                        // Define the request options, including the method and headers
                        const requestOptions = {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                // You may need to include any additional headers required by the API
                            },
                            body: requestBody
                        };

                        // Send the PATCH request
                        fetch(url, requestOptions)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json();
                            })
                            .then(data => {
                                console.log('PATCH request successful:', data);
                                // Handle the response data as needed
                                hideAddModal();
                                location.reload();

                            })
                            .catch(error => {
                                console.error('Error sending PATCH request:', error);
                                // Handle the error
                            });
                    }

                    async function fetchData() {
                        try {
                            const response = await fetch(
                                'https://api.valmore.gr/api/organization-fetch-users');
                            const data = await response.json();
                            return data;
                        } catch (error) {
                            console.error('Error fetching data:', error);
                            return [];
                        }
                    }
                    async function init() {
                        const data = await fetchData();
                        populateTable(currentPage);
                        updatePagination(data);
                    }

                    init();



                    populateTable();

                    function handleEditButtonClick(id, name, lastname, email, mobile, ) {

                    }

                    function filterTable() {
                        const searchInput = document.getElementById('searchInput');
                        const filterValue = searchInput.value.toLowerCase();
                        const tableRows = document.querySelectorAll('.selectable-row1');
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
                            const tableBody = document.getElementById('tableBody1');
                            const noResultsRow = document.createElement('tr');
                            noResultsRow.id = 'noResultsRow';
                            noResultsRow.classList.add('selectable-row1');

                            const messageCell = document.createElement('td');
                            messageCell.colSpan =
                                4; // Replace with the actual number of columns in your table
                            messageCell.classList.add('text-center', 'pressable-text');
                            messageCell.textContent = 'Δεν Βρέθηκαν διαθέσιμοι χρήστες Πατήστε εδώ για να προσθέσετε';

                            messageCell.addEventListener('click', () => {
                                // Handle the click event when no results message is clicked
                                // For example, you can clear the search input or perform other actions
                                window.location.href = `../pages/users/new-user.php`;
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
                    // Update the pagination and table when the checkbox is changed

                    // Function to update the number of items per page based on user selection
                    function updateResultsPerPage() {
                        const resultsPerPageSelect = document.getElementById('resultsPerPageSelect');
                        itemsPerPage = parseInt(resultsPerPageSelect
                            .value); // Update itemsPerPage with the selected value
                        currentPage = 1; // Reset to the first page when changing items per page
                        populateTable(currentPage); // Refresh the table with the new items per page
                    }

                    // Add an event listener to the select element for changing items per page
                    const resultsPerPageSelect = document.getElementById('resultsPerPageSelect');
                    resultsPerPageSelect.addEventListener('change', updateResultsPerPage);

                    // Initialize the table with the default itemsPerPage value
                    populateTable(currentPage);

                    // Get a reference to the filter dropdown element
                    const filterDropdown = document.getElementById('filterDropdown');

                    // Add an event listener to the filter dropdown
                    filterDropdown.addEventListener('change', () => {
                        // Update the current filter based on the selected option
                        currentFilter = filterDropdown.value;

                        // Call a function to update the table based on the current filter
                        updateTable(currentFilter);
                    });

                    // Function to update the table based on the filter
                    function updateTable(filter) {
                        const tableRows = document.querySelectorAll('.selectable-row1');

                        tableRows.forEach((row) => {
                            const isActive = row.querySelector('.action-button').innerHTML.includes(
                                'check_circle');

                            if (filter === 'all' || (filter === 'active' && isActive) || (filter ===
                                    'deactivate' && !isActive)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }

                    // Call the updateTable function with the initial filter setting (all)
                    updateTable(currentFilter);
                    </script>


                </div>
            </div>
        </div>

        <script>
        document.getElementById('openModalBtn').addEventListener('click', () => {
            showDeleteModal();
        });

        function showDeleteModal() {
            $('#deleteModal').modal('show');

            document.getElementById('confirmDelete').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user
                const id = <?php echo json_encode($id); ?>;
                window.location.href = `business-edit-patch.php?delete_id=${id}`;

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

        document.getElementById('OpenaddModal').addEventListener('click', () => {
            showAddModal();
        });

        function hideAddModal() {
            $('#addModal').modal('hide');
        }

        function showAddModal() {
            $('#addModal').modal('show');


            document.getElementById('cancel3').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user
                //console.log('Deleting user with ID:', rowId);
                // Close the modal
                console.log("cancel");
                $('#addModal').modal('hide');

            });
        }

        document.getElementById('removeModal').addEventListener('click', () => {
            showRemoveModal();
        });

        function hideRemoveModal() {
            $('#removeModal').modal('hide');
        }

        function showRemoveModal(fullname) {
            $('#removeModal').modal('show');
            console.log(fullname);
            let userId;
            let responceData;
            document.getElementById('confirmRemove').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user
                // Define the URL for the GET request
                const url = "https://api.valmore.gr/api/organization/find-user?fullName=" + fullname;

                // Make the GET request using the fetch API
                fetch(url)
                    .then((response) => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }

                        return response.json();
                    })
                    .then((data) => {
                        // Handle the response data here
                        console.log("Response Data:", data);

                        const id2 = <?php echo json_encode($id); ?>;
                        newUserRemove(data.id, id2)
                    })
                    .catch((error) => {
                        // Handle any errors that occurred during the fetch
                        console.error("Error:", error);
                    });


                // Close the modal
                $('#removeModal').modal('hide');
            });
            document.getElementById('cancel4').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user
                //console.log('Deleting user with ID:', rowId);
                // Close the modal
                $('#removeModal').modal('hide');

            });
            document.getElementById('cancel5').addEventListener('click', () => {
                // Send a request to delete the user with the specified rowId
                // You can use an API call here to delete the user
                //console.log('Deleting user with ID:', rowId);
                // Close the modal
                $('#removeModal').modal('hide');

            });
        }

        function fetchUserId(fullname) {
            // Define the URL for the GET request
            const url = "https://api.valmore.gr/api/organization/find-user?fullName=" + fullname;

            // Make the GET request using the fetch API
            fetch(url)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.json();
                })
                .then((data) => {
                    // Handle the response data here
                    console.log("Response Data:", data);
                    return data;
                })
                .catch((error) => {
                    // Handle any errors that occurred during the fetch
                    console.error("Error:", error);
                });

        }

        async function newUserRemove(userId, businessId) {


            // Define the URL
            const url = 'https://api.valmore.gr/api/organization/remove-business-user';

            // Create the JSON body
            const requestBody = JSON.stringify({
                business_id: businessId,
                user_id: userId
            });

            // Define the request options, including the method and headers
            const requestOptions = {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    // You may need to include any additional headers required by the API
                },
                body: requestBody
            };

            // Send the PATCH request
            fetch(url, requestOptions)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('PATCH request successful:', data);
                    // Handle the response data as needed

                    location.reload();

                })
                .catch(error => {
                    console.error('Error sending PATCH request:', error);
                    // Handle the error
                });
        }
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