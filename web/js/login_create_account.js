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
               //Display a general error message
               alert(response)
               document.getElementById("login_status").innerHTML = response;
           }
      }
  }
  var query = ('username=' + username + '&password=' + password)
  xhttp.open('POST', '../php/process_login.php', true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(query);
}
