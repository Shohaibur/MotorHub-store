function logout(){


	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
  
        console.log(this.responseText);
  
        const response = JSON.parse(this.responseText);
  
        if (response.status == 200) {
          window.location.replace("login.php");
        }
      }
    };
  
    xmlhttp.open("POST","api/logout_api.php",true);
    xmlhttp.send();

}