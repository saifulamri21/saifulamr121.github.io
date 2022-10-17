var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var email = document.getElementById("email").value;
var pw = document.getElementById("password").value;
if ( email == "wie190033@siswa.um.edu.my" && pw == "wie190033"){
alert ("Login successfully");
sessionStorage.setItem("username", document.getElementById("email").value);
window.location = "homepage.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}