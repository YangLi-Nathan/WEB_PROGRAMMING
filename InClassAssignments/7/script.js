function form_validation() {
    var id = document.getElementById("id").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;

    if (id.length == 0 && fname.length == 0 && lname.length == 0) {
        alert("All fileds are required");
        document.getElementById("error_id").innerHTML = "ID is required";
        document.getElementById("error_fname").innerHTML = "Frist Name is required";
        document.getElementById("error_lname").innerHTML = "Last Name is required";
        document.getElementById("msg").innerHTML = "";
        document.getElementById("id").focus();
        return false;
    } else if (id.length == 0) {
        alert("Please Enter an ID");
        document.getElementById("error_id").innerHTML = "ID is required";
        document.getElementById("error_fname").innerHTML = "";
        document.getElementById("error_lname").innerHTML = "";
        document.getElementById("msg").innerHTML = "";
        document.getElementById("id").focus();
        return false;
    } else if (fname.length == 0) {
        alert("Please Enter a First Name");
        document.getElementById("error_id").innerHTML = "";
        document.getElementById("error_fname").innerHTML = "Frist Name is required";
        document.getElementById("error_lname").innerHTML = "";
        document.getElementById("msg").innerHTML = "";
        document.getElementById("fname").focus();
        return false;
    } else if (lname.length == 0) {
        alert("Please Enter an Last Name");
        document.getElementById("error_id").innerHTML = "";
        document.getElementById("error_fname").innerHTML = "";
        document.getElementById("error_lname").innerHTML = "Last Name is required";
        document.getElementById("msg").innerHTML = "";
        document.getElementById("lname").focus();
        return false;
    } else if (id.length != 0 && fname.length != 0 && lname.length != 0) {
        document.getElementById("error_id").innerHTML = "";
        document.getElementById("error_fname").innerHTML = "";
        document.getElementById("error_lname").innerHTML = "";
        document.getElementById("msg").innerHTML = "Welcome, you are passed";
        return true;
    }
}