<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>

<body>
    <div class="dashboard-background">
        <?php include "header.php"; ?>
        <div class="dashboard-main">
            <div class="assignments-header">
                <div class="assignment-title">NOTES</div>
                <div class="search-assignments">
                    <input type="text" placeholder="Search notes..." class="search-assi">
                    <i class="bi bi-search pdf-icon"></i>
                </div>
            </div>
            <div class="assignment-body">
                <i class="bi bi-filetype-pdf pdf-icon1"></i>
                <div class="assignment-body-description">
                    <div class="assignment-details-title">Curcuit Theory 01</div>
                    <div class="assignment-details-2">Course : Mechanics</div>
                    <div class="assignment-details-2">Updated on : 2023-12-12</div>
                </div>
                <div class="assignment-details-3"></div>
                <button class="view-button1">View</button>
            </div>
            <div class="assignment-body">
                <i class="bi bi-filetype-pdf pdf-icon1"></i>
                <div class="assignment-body-description">
                    <div class="assignment-details-title">Curcuit Theory 01</div>
                    <div class="assignment-details-2">Course : Mechanics</div>
                    <div class="assignment-details-2">Updated on : 2023-12-12</div>
                </div>
                <div class="assignment-details-3"></div>
                <button class="view-button1">View</button>
            </div>
            <div class="add-assignments-button" onclick="applybgMask();"><i class="bi bi-file-earmark-plus-fill"></i></div>

        </div>
       

    </div>
    <div class="background-mask" id="background-mask">
    <div class="close-assi-modal" onclick="removebgMask();"><i class="bi bi-x-lg cross-logo"></i></div>
       
        <div class="assignment-form">
            <div class="assignment-form-title">New Note</div>
            <div class="inputBox1">
                <span class="fieldTitle">Note Name</span>
                <input type="text" class="fieldInput">
            </div>
            <div class="inputBox1">
                <span class="fieldTitle">Course</span>
                <select class="fieldInput">
                    <option></option>
                    <option>Mechanics</option>
                </select>
                <!-- <input type="text" class="fieldInput"> -->
            </div>
           
            <div class="inputBox1">
                <span class="fieldTitle">Add Note</span>
                <input type="file" id="assiUpload" style="display: none;">
                <label for="assiUpload" class="fieldInput" style="font-size:12px;">Click to add</label>
            </div>
            <button class="upload-assignment">Upload</button>
        </div>
    </div>


</body>

</html>