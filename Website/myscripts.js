//makes sure the username/password is at least 3 chars long
function UserPass(){
  var username = document.getElementById('Username').value;
  var password = document.getElementById('Password').value;
  if (username.length<4 || password.length<4) {
    alert("Your username and password should be at least 4 characters long");
  } else  {
    window.location.href = "main.html"; // redirects to the main page
  }
}

//makes sure the two passwords are the same on create account page
