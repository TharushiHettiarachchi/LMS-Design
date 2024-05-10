<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="header-background">
        <div class="start-btn">
            <div class="menu-button" onclick="menuOpen();"><i class="bi bi-list"></i></div>
            <div class="hello-div"> Hello Tharushi!</div>
        </div>
        <div class="end-btn">
            <div class="calendar-button"><i class="bi bi-calendar2-week"></i></div>
            <div class="messages-button"><i class="bi bi-envelope-fill"></i></div>
            <div class="profile-button" onclick="window.location = 'index.php';"> <i class="bi bi-box-arrow-in-right"></i></div>
            <div class="profile-button" onclick="window.location = 'profile.php';"><i class="bi bi-person-fill"></i></div>
        </div>

    </div>

    <div class="sidenav-div" id="sideNav">
        <div class="sidenav-close-btn" onclick="menuClose();"><i class="bi bi-x-lg"></i></div>
        <div class="sidenav-profilepic" style="background-image: url('images/prof2.jpg');"></div>
        <div class="sidenav-name">Tharushi Hettiarachchi</div>
        <div class="sidenav-email">tharushihettiarachchi12@gmail.com</div>
        <button class="sidenav-button" onclick="window.location = 'dashboard.php';">Dashboard</button>
        <button class="sidenav-button">My Classes</button>
        <button class="sidenav-button" onclick="window.location = 'notes.php';">Notes</button>
        <button class="sidenav-button" onclick="window.location = 'assignments.php';">Assignments</button>
        <button class="sidenav-button">Add Classes</button>
    </div>
    <script src="script.js"></script>
</body>

</html>