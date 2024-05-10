
function menuOpen() {
    var sideNav = document.getElementById("sideNav");
    sideNav.style.display = "block";
    sideNav.style.display = "flex";

}

function menuClose() {
    var sideNav = document.getElementById("sideNav");
    sideNav.style.display = "none";


}

function removebgMask() {
    var backgroundMask = document.getElementById("background-mask");
    backgroundMask.style.display = "none";
}
function applybgMask() {
    var backgroundMask = document.getElementById("background-mask");
    backgroundMask.style.display = "block";
    backgroundMask.style.display = "flex";
}

function addSignUp() {

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var mobile = document.getElementById("mobile").value;
    var indexNo = document.getElementById("indexNo").value;
    var grade = document.getElementById("grade").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var alertMsg = document.getElementById("alertMsg");

    var form = new FormData;
    form.append("fname", fname);
    form.append("lname", lname);
    form.append("mobile", mobile);
    form.append("indexNo", indexNo);
    form.append("grade", grade);
    form.append("password", password);
    form.append("email", email);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            alertMsg.innerHTML = t;
            if (t == "Success") {
                window.location = "index.php";
            }
        }
    }
    r.open("POST", "signUpProcess.php", true);
    r.send(form);


}

function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var form = new FormData;
    form.append("username", username);
    form.append("password", password);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            alertMsg.innerHTML = t;
            if (t == "Success") {
                window.location = "dashboard.php";
            }
        }
    }
    r.open("POST", "signInProcess.php", true);
    r.send(form);
}