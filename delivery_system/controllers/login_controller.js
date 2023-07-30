function validateForm() {


  if(validateEmail() && validatePasswword()){

    login();

  }
}

function validateEmail(){
  
  let emailField = document.forms["login-form"]["email"];
  let email = emailField.value;

  const pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  
  if (email.trim() == "") {
    emailField.setCustomValidity('Email is Required');
    emailField.reportValidity();

    return false;
  } else if(!pattern.test(email)){
    emailField.setCustomValidity('Please Enter Valid Email');
    emailField.reportValidity();
    return false;
  }

  return true;
}



function validatePasswword(){

  const pattern = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;

  let passwordField = document.forms["login-form"]["password"];
  let password = passwordField.value;




  if (typeof password == "undefined" || password ==  null || password == ""){

    passwordField.setCustomValidity('Please Enter A Password.');
    passwordField.reportValidity();

    return false;

  } else if(!pattern.test(password)){

    passwordField.setCustomValidity('Password must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character');
    passwordField.reportValidity();

    return false;

  }

  return true;

}


function login() {
  let email = document.forms["login-form"]["email"].value;
  let password = document.forms["login-form"]["password"].value;



  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);

        const response = JSON.parse(this.responseText);

        if (response.status == 200) {
          window.location.replace("home.php");
        } else if (response.status == 401){
          alert(response.message);
        }
      }
    };

  var requestBody = "email=" + email + "&password=" + password;

    xmlhttp.open("POST","api/login_api.php?" + requestBody,true);
    xmlhttp.send();


}



