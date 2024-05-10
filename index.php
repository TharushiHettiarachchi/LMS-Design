<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Learning Management System</title>
</head>

<body>
    <div class="background-index">
        <div class="signupinHeader">
        <button class="headerButton" onclick="window.location ='signUp.php'"><i class="bi bi-box-arrow-in-right"></i>&nbsp; SIGN UP</button>
        </div>
        <div class="loginBox">
            <div class="loginImgBox"></div>
            <div class="loginTitle">Learning Management System</div>
            <span class="alertMsg" id="alertMsg"></span>
            <div class="inputBox1">
                <span class="fieldTitle">Username</span>
                <input type="text" class="fieldInput" id="username">
            </div>
            <div class="inputBox1">
                <span class="fieldTitle">Password</span>
                <input type="text" class="fieldInput" id="password">
            </div>
            <a href="#" class="forgotPasswordLink">Forgot Password?</a>
            <button class="loginButton" onclick="login();">Login</button>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>