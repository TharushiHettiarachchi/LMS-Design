<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <div class="profile-background">
        <?php include "header.php"; ?>
        <div class="profile-main">
            <div class="profile-div1">
                <div class="profile-title">Profile</div>
                <div class="profile-bg-img" style="background-image: url('images/prof2.jpg');"></div>
                <input type="file" id="imageUploader" style="display: none;">
                <label for="imageUploader" class="changeImg">Change Profile Image</label>
            </div>
            <div class="profile-div2">
                <div class="personal-information-title">Personal Information</div>
                <div class="inputbox-panel">
                    <div class="inputBox1">
                        <span class="fieldTitle">First Name</span>
                        <input type="text" class="fieldInput">
                    </div>
                    <div class="inputBox1">
                        <span class="fieldTitle">Last Name</span>
                        <input type="text" class="fieldInput">
                    </div>
                </div>
                <div class="inputbox-panel">
                    <div class="inputBox1">
                        <span class="fieldTitle">Mobile Number</span>
                        <input type="text" class="fieldInput">
                    </div>
                    <div class="inputBox1">
                        <span class="fieldTitle">Index Number</span>
                        <input type="text" class="fieldInput">
                    </div>
                </div>
                <div class="inputbox-panel">
                    <div class="inputBox1">
                        <span class="fieldTitle">Grade</span>
                        <input type="text" class="fieldInput">
                    </div>
                    <div class="inputBox1">
                        <span class="fieldTitle">Email</span>
                        <input type="text" class="fieldInput">
                    </div>
                </div>
                <div class="personal-information-title">Login Credentials</div>
                <div class="inputbox-panel">
                    <div class="inputBox1">
                        <span class="fieldTitle">Username</span>
                        <input type="text" class="fieldInput">
                    </div>
                    <div class="inputBox1">
                        <span class="fieldTitle">Password</span>
                        <input type="text" class="fieldInput">
                    </div>
                </div>
                <div class="button-profile-div">
                    <button class="changeImg">Update Profile</button>
                </div>

            </div>
        </div>

    </div>
</body>

</html>