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
               alert("user is loged in")
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
    var password2 = document.getElementById('password2').value
    var role_id = document.getElementById('account_type').value
    var organization = document.getElementById('organization').value
    var first_name = document.getElementById('first_name').value
    var last_name = document.getElementById('last_name').value
    var phone_number = document.getElementById('phone_number').value
    var email = document.getElementById('email').value


    if(username == ""
    || password == ""
    || password2 == ""
    || role_id == ""
    || organization == ""
    || first_name == ""
    || last_name == ""
    || phone_number == ""
    || email == ""
    ){
        //Display a error message
        error = document.getElementById("create_account_status")
        error.innerHTML = "All inputs are required";
        error.style.display = "block"; 
        focusOnFirstEmtyInput();  
    }
    else if (password != password2)
    {
        //Display a error message
        error = document.getElementById("create_account_status")
        error.innerHTML = "The provided passwords need to match";
        error.style.display = "block"; 
        document.getElementById('password').focus()          
    }
    else
    {
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
             if(this.readyState == 4 && this.status == 200){
                 var response = this.response;
                 if (response.includes("true"))
                 {
                     //redirect to the the user home page
                     window.location.href = "./login_create_account.php?account_created=true";
                 }
                 else
                 {
                     //Display a error message
                     error = document.getElementById("create_account_status")
                     error.innerHTML = response;
                     error.style.display = "block";
                 }
            }
        }
        var query = 
          'username=' + username 
        + '&password=' + password 
        + '&role_id=' + role_id
        + '&organization=' + organization 
        + '&first_name=' + first_name
        + '&last_name=' + last_name
        + '&phone_number=' + phone_number 
        + '&email=' + email
        
        xhttp.open('POST', '../php/process_account_creation.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(query);
    }
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

var focusOnFirstEmtyInput = () => {

    var username = document.getElementById('username')
    var password = document.getElementById('password')
    var password2 = document.getElementById('password2')
    var role_id = document.getElementById('account_type')
    var organization = document.getElementById('organization')
    var first_name = document.getElementById('first_name')
    var last_name = document.getElementById('last_name')
    var phone_number = document.getElementById('phone_number')
    var email = document.getElementById('email')
    
    if(username.value == ""){
        username.focus()
    }
    else if(password.value == ""){
        password.focus()
    }
    else if(password2.value == ""){
        password2.focus()     
    }
    else if(role_id.value == ""){
        role_id.focus()    
    }
    else if(organization.value == ""){
        organization.focus()   
    }
    else if(first_name.value == ""){
        first_name.focus()   
    }
    else if(last_name.value == ""){
        last_name.focus()   
    }
    else if(phone_number.value == ""){
        phone_number.focus()   
    }
    else if(email.value == ""){
        email.focus()   
    }


}



