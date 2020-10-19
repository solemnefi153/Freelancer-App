var notify_invalid_login = () => {
    document.getElementById("login_error_message").innerHTML = "Invalid username or passowrd"
}


var login_attempt = () => {
    
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var login_report = JSON.parse(this.response);
          if(login_report["login_successful"]){
              if(login_report["role"] == "admin")
              {
                window.location.replace("../pages/admin_portal.php");
              }
              else
              {
                window.location.replace("../pages/client_portal.php");
              }
          }
          else{

              notify_invalid_login();
          }
        }
    }
    xhttp.open("POST", "../php/process_login.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username=" + username + "&password=" + password);
}