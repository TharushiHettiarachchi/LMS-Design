<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard-background">
        <?php include "header.php"; ?>
        <div class="dashboard-main">

            <div class="dashboard-title">DASHBOARD</div>
            <div class="dashboard-alert">Some assignment marks have been released</div>
            <div class="lessons-sub-title">Today's Lessons</div>
            <div class="today-class-panel">
                <div class="class1">
                    <div class="class-card-title">Mechanics</div>
                    <div class="class-card-detail">Time: 8.00 am - 12.00 pm</div>
                    <div class="class-card-detail">Lecturer: Mr. Punyasena</div>
                    <div class="class-card-detail">Location: B1 212</div>
                </div>
                <div class="class1">
                    <div class="class-card-title">C Programming</div>
                    <div class="class-card-detail">Time: 8.00 am - 12.00 pm</div>
                    <div class="class-card-detail">Lecturer: Mr. Pitigala</div>
                    <div class="class-card-detail">Location: B1 212</div>
                </div>
                <div class="class1">
                    <div class="class-card-title">Transistors</div>
                    <div class="class-card-detail">Time: 8.00 am - 12.00 pm</div>
                    <div class="class-card-detail">Lecturer: Mr. Ranaweera</div>
                    <div class="class-card-detail">Location: B1 212</div>
                </div>
                <div class="class1">
                    <div class="class-card-title">Analog Electronics</div>
                    <div class="class-card-detail">Time: 8.00 am - 12.00 pm</div>
                    <div class="class-card-detail">Lecturer: Mr. Punyasena</div>
                    <div class="class-card-detail">Location: B1 212</div>
                </div>

            </div>
            <div class="notices-panel">
                <div class="latest-assignments">
                    <div class="latest-assignment-title">Latest Assignments</div>
                    <div class="latest-assignment-detail-main">
                        <i class="bi bi-file-earmark-fill pdf-icon"></i>
                        <div class="latest-assignment-div1">Tutorial 01 </br><span class="date">Due Date: 2023-12-13</span></div>
                        <button class="view-button">View</button>
                    </div>
                    <div class="latest-assignment-detail-main">
                        <i class="bi bi-file-earmark-fill pdf-icon"></i>
                        <div class="latest-assignment-div1">Tutorial 02 </br><span class="date">Due Date: 2023-12-13</span></div>
                        <button class="view-button">View</button>
                    </div>

                </div>
                <div class="latest-assignments">
                    <div class="latest-assignment-title">Latest Notes</div>
                    <div class="latest-assignment-detail-main">
                        <i class="bi bi-file-earmark-fill pdf-icon"></i>
                        <div class="latest-assignment-div1">Circuit Theory </br><span class="date">Updated On: 2023-12-13</span></div>
                        <button class="view-button">View</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>