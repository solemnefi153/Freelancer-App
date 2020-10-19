var notify_invalid_login = () => {
    alert("Invalid Login");
    document.getElementById("login_error_message").innerHTML = "Invalid username or passowrd"
}


var login_attempt = () => {
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var login_successful = JSON.parse(this.response);
          if(login_successful){
              window.location.replace("../pages/home.php");
          }
          else{

              notify_invalid_login();
          }
        }
    };
    xhttp.open("POST", "../php/process_login.php", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send("username=" + username + "&password=" + password);
}