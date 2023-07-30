function validateForm() {
  

  if (validateName() && validateEmail() && validatePhone() && validateGender() && validateAge()
      && validateDrivingLicense() && validateTransportLicense() && validateTransport() && validatePasswword()){

    registerUser();

  }

}





function validateName(){

  let nameField = document.forms["reg-form"]["name"];
  let name = nameField.value;

  if (name == "") {
    console.log(name);
    nameField.setCustomValidity('Name is Required');
    nameField.reportValidity();


    return false;
  }

  return true;

}





function validateEmail(){
  
  let emailField = document.forms["reg-form"]["email"];
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



function validatePhone() {

  let phoneField = document.forms["reg-form"]["phone"];
  let phone = phoneField.value;

  if (phone.trim() == "") {
    phoneField.setCustomValidity('Pnone Number is Required');
    phoneField.reportValidity();

    return false;
  } else if(phone.length != 11){
    phoneField.setCustomValidity('Please Enter Valid Phone Number');
    phoneField.reportValidity();

    return false;
  }


  return true;


}

function validateGender() {
  let genderField = document.forms["reg-form"]["gender"];
  let gender = genderField.value;
  if (typeof gender == "undefined" || gender ==  null || gender == "") {

    genderField[0].setCustomValidity('Please Select Your Gender');
    genderField[0].reportValidity();

    return false;
  }


  return true;
}



function validateAge(){

  let dobField = document.forms["reg-form"]["dob"];
  let dob = dobField.value;

  if (typeof  dob == "undefined" || dob ==  null || dob == ""){

    dobField.setCustomValidity('Please Select Your Birth Date');
    dobField.reportValidity();

    return false;

  }


  let genderField = document.forms["reg-form"]["gender"];
  let gender = genderField.value;

  /**calculate age from birth day**/

  var today = new Date();
  var birthDate = new Date(dob);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
  }


  if (gender == "male" && age<18) {
      dobField.setCustomValidity('Your age must be at least 18');
      dobField.reportValidity();

      return false;
  } else if (gender == "female" && age<20) {
    
      dobField.setCustomValidity('our age must be at least 20');
      dobField.reportValidity();

      return false;
  }

  return true;

}




function validateDrivingLicense(){

  let drivingLicenseField = document.forms["reg-form"]["driving_license_no"];
  let drivingLicense = drivingLicenseField.value;


  if (typeof  drivingLicense == "undefined" || drivingLicense ==  null || drivingLicense == ""){

    drivingLicenseField.setCustomValidity('Please Enter Your Driving License No.');
    drivingLicenseField.reportValidity();

    return false;

  }


  const pattern = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;

  if(!pattern.test(drivingLicense)){

    drivingLicenseField.setCustomValidity('License no. must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character');
    drivingLicenseField.reportValidity();
    return false;

  }

  return true;


}

function validateTransportLicense() {

  let transportLicenseField = document.forms["reg-form"]["transport_license_no"];
  let transportLicense = transportLicenseField.value;


  if (typeof transportLicense == "undefined" || transportLicense ==  null || transportLicense == ""){

    transportLicenseField.setCustomValidity('Please Enter Your Driving License No.');
    transportLicenseField.reportValidity();

    return false;

  }


  const pattern = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;

  if(!pattern.test(transportLicense)){

    transportLicenseField.setCustomValidity('License no. must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character');
    transportLicenseField.reportValidity();
    return false;

  }

  return true;

}


function validateTransport(){
  let deliveryAreaField = document.forms["reg-form"]["delivery_area"];
  let deliveryArea = deliveryAreaField.value;

  let transportAreaField = document.forms["reg-form"]["transport"];
  let transport = transportAreaField.value;

  if (deliveryArea == "outside_dhaka" && transport == "bike") {
     
      transportAreaField.setCustomValidity("You can't use Bike for outside Dhaka");
      transportAreaField.reportValidity();

      return false;
  }

  return true;

}


function validatePasswword(){

  const pattern = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;

  let passwordField = document.forms["reg-form"]["pass"];
  let password = passwordField.value;

  let confirmPasswordField = document.forms["reg-form"]["confirm_pass"];
  let confirmPassword = confirmPasswordField.value;



  if (typeof password == "undefined" || password ==  null || password == ""){

    passwordField.setCustomValidity('Please Enter A Password.');
    passwordField.reportValidity();

    return false;

  } else if(!pattern.test(password)){

    passwordField.setCustomValidity('Password must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character');
    passwordField.reportValidity();
    
    return false;

  } else if (password != confirmPassword) {

    confirmPasswordField.setCustomValidity("Password Doesn't Match.");
    confirmPasswordField.reportValidity();

    return false;

  }

  return true;

}

function registerUser() {

  let name = document.forms["reg-form"]["name"].value;
  let email = document.forms["reg-form"]["email"].value;
  let phone = document.forms["reg-form"]["phone"].value;
  let gender = document.forms["reg-form"]["gender"].value;
  let dob = document.forms["reg-form"]["dob"].value;
  let drivingLicenseNo = document.forms["reg-form"]["driving_license_no"].value;
  let transportLicenseNo = document.forms["reg-form"]["transport_license_no"].value;
  let deliveryArea = document.forms["reg-form"]["delivery_area"].value;
  let transport = document.forms["reg-form"]["transport"].value;
  let paymentOption = document.forms["reg-form"]["payment_option"].value;
  let password = document.forms["reg-form"]["confirm_pass"].value;


  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      console.log("#############");
      console.log(this.responseText);

      const response = JSON.parse(this.responseText);

      if (response.status == 200) {
        window.location.replace("login.php");
      } else if (response.status == 409){
        alert(response.message);
      }
    }
  };

    var requestBody = "name=" + name + "&email=" + email 
                    + "&phone=" + phone + "&gender=" + gender
                    + "&dob=" + dob + "&driving_license_no="
                    + drivingLicenseNo + "&transport_license_no="
                    + transportLicenseNo + "&delivery_area=" + deliveryArea 
                    + "&transport=" + transport + "&payment_option=" + paymentOption 
                    + "&password=" + password;

    xmlhttp.open("POST","api/registration_api.php?" + requestBody,true);
    xmlhttp.send();

}