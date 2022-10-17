
function logout(){

alert ("Logged out successfully");
sessionStorage.setItem("username", document.getElementById("email").value);
window.location = "login.html"; // Redirecting to other page.
return false;


}