<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADMIN PANEL | EVENTO</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>

<body class="body-bg">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper" style="position: static; font-family: Arial, sans-serif;">
            <div class="sidebar-heading border-bottom bg-light">EVENTO ADMIN PANEL</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active"
                    href="index.php">Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="organizers.php">Event
                    Organizers Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="decorators.php">Decorators Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="photographers.php">Photographers Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="caterers.php">Caterers
                    Team</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" class="home-bg">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary  log-btn" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <a class="dropdown-item logout" href="logout.php">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container">
                <div class="heading1 mt-5">
                    <h1>Hiii,
                        <?php echo $_SESSION["username"]; ?>!
                    </h1>
                </div>
                <h1 class="mt-4 heading">Welcome to EVENTO Admin Panel...!</h1>
                <div class="heading">
                    <p>Manage and organize events with ease
                        using our intuitive tools and features. Streamline event planning,
                        coordination, and execution all in one place.
                    </p>

                    <p>
                        Step into the world of seamless event management with the
                        EVENTO Admin Panel! Your go-to hub for effortlessly planning,
                        coordinating, and executing exceptional events. From crafting
                        event schedules to handling guest lists and logistics, our
                        powerful tools empower you to curate unforgettable experiences.
                        Navigate through a user-friendly interface designed to make your
                        event-planning journey smooth and efficient. Let's create
                        extraordinary moments together!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>