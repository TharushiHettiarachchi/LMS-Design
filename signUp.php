<?php include "connection.php"; ?>
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
            <button class="headerButton" onclick="window.location ='index.php'"><i class="bi bi-box-arrow-in-right"></i>&nbsp; SIGN IN</button>
        </div>
        <div class="loginBox">
            <div class="loginImgBox"></div>
            <div class="loginTitle">Learning Management System</div>
            <span class="alertMsg" id="alertMsg"></span>
            <div class="inputbox-panel">
                <div class="inputBox1">
                    <span class="fieldTitle">First Name</span>
                    <input type="text" class="fieldInput"  id="fname">
                </div>
                <div class="inputBox1">
                    <span class="fieldTitle" >Last Name</span>
                    <input type="text" class="fieldInput" id="lname">
                </div>
            </div>
            <div class="inputbox-panel">
                <div class="inputBox1">
                    <span class="fieldTitle">Mobile Number</span>
                    <input type="text" class="fieldInput"  id="mobile">
                </div>
                <div class="inputBox1">
                    <span class="fieldTitle">Index Number</span>
                    <input type="text" class="fieldInput"  id="indexNo">
                </div>
            </div>
            <?php
            $garde__rs = Database::search("SELECT * FROM `grade`");
            $grade_num = $garde__rs->num_rows;

            ?>
            <div class="inputbox-panel">
                <div class="inputBox1">
                    <span class="fieldTitle">Grade</span>
                    <!-- <input type="text" class="fieldInput"> -->
                    <select class="fieldInput" id="grade">
                        <option value="0"></option>
                        <?php
                        for ($i = 0; $i < $grade_num; $i++) {
                            $grade_data = $garde__rs->fetch_assoc();
                        ?>
                            <option value="<?php echo ($grade_data["grade_id"]); ?>"><?php echo ($grade_data["grade"]); ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="inputBox1">
                    <span class="fieldTitle">Password</span>
                    <input type="text" class="fieldInput" id="password">
                </div>
            </div>

            <div class="inputBox1">
                <span class="fieldTitle">Email</span>
                <input type="text" class="fieldInput" id="email">
            </div>



            <a href="#" class="forgotPasswordLink">Need a help?</a>
            <button class="loginButton" onclick="addSignUp();">Sign Up</button>

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>