var login_attempt = () => {
  var username = document.getElementById('username').value
  var password = document.getElementById('password').value
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
       if(this.readyState == 4 && this.status == 200){
           var response = this.response;
           if (response.includes("true"))
           {
               //redirect to the the user home page
              
           }
           else
           {
               //Display an error message
               error = document.getElementById("login_status")
               error.innerHTML = response;
               error.style.display = "block";
           }
      }
  }
  var query = ('username=' + username + '&password=' + password)
  xhttp.open('POST', '../php/process_login.php', true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(query);
}


var create_account_attempt = () => {
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
         if(this.readyState == 4 && this.status == 200){
             var response = this.response;
             if (response.includes("true"))
             {
                 //redirect to the the user home page
                
             }
             else
             {
                 //Display a error message
                 error = document.getElementById("login_status")
                 error.innerHTML = response;
                 error.style.display = "block";
             }
        }
    }
    var query = ('username=' + username + '&password=' + password)
    xhttp.open('POST', '../php/process_login.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(query);





}










var load_create_account = () => {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
         if(this.readyState == 4 && this.status == 200){
            var response = this.response;
            document.getElementById("main_group").innerHTML = response;
        }
    }
    xhttp.open('GET', './create_account_options.php', true);
    xhttp.send();
}

var load_log_in = () => {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
         if(this.readyState == 4 && this.status == 200){
            var response = this.response;
            document.getElementById("main_group").innerHTML = response;
        }
    }
    xhttp.open('GET', './log_in_options.php', true);
    xhttp.send();
}


