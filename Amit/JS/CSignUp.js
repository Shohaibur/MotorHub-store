function validateForm() {
  let Cfname = document.getElementById('Cfname').value;
  let Clname = document.getElementById('Clname').value;
  let Cemail = document.getElementById('Cemail').value;
  let Cdob = document.getElementById('Cdob').value;
  let Cgender = document.getElementById('Cgender').value;
  let Cphn = document.getElementById('Cphn').value;
  let Ccity = document.getElementById('Ccity').value;
  let Caddress = document.getElementById('Caddress').value;
  let Cpass = document.getElementById('Cpass').value;

  if (Cfname == '') {
    document.getElementById('CfnameER').innerHTML =
      'First Name Must Be Filled Out';
    return false;
  } else if (Clname == '') {
    document.getElementById('ClnameER').innerHTML =
      'Last Name Must Be Filled Out';
    return false;
  } else if (Cemail == '') {
    document.getElementById('CemailER').innerHTML = 'Email Must Be Filled Out';
    return false;
  } else if (Cpass == '') {
    document.getElementById('CpassER').innerHTML =
      'Password Must Be Filled Out';
    return false;
  } else if (Cpass.length < 8) {
    document.getElementById('CpassER').innerHTML =
      'Password Must Be Atleast 8 Characters';
    return false;
  } else if (Cdob == '') {
    document.getElementById('CdobER').innerHTML = 'DOB Must Be Filled Out';
    return false;
  } else if (Cgender == '') {
    document.getElementById('CgenderER').innerHTML =
      'Gender Must Be Filled Out';
    return false;
  } else if (Cphn == '') {
    document.getElementById('CphnER').innerHTML = 'Phone Must Be Filled Out';
    return false;
  } else if (Ccity == '') {
    document.getElementById('CcityER').innerHTML = 'City Must Be Filled Out';
    return false;
  } else if (Caddress == '') {
    document.getElementById('ER').innerHTML = 'Address Must Be Filled Out';
    return false;
  }
}