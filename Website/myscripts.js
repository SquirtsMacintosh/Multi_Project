//makes sure the username/password is at least 3 chars long
function UserPass(){
  var username = document.getElementById('Username').value;
  var password = document.getElementById('Password').value;
  if (username.length<3 || password.length<3) {
    alert("Your username and password should be at least 3 characters long");
  } else  {
    window.location.href = "main.html"; // redirects to the main page
  }
}
