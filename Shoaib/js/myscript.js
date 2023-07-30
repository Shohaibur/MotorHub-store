 function checkname()
 { 
 var x=document.getElementById("name").value;
 if(x.length <5){
 document.getElementById("error").innerHTML="please enter valid name";
 return false;
 }
 else{
  document.getElementById("error").innerHTML=x;
  return true;
 }
 }

 function checkpassword()
 {
 var x=document.getElementById("pass").value;
 if(x.length <8){
 document.getElementById("errorp").innerHTML="please enter unique pass";
 return false;
 }
 else{
  document.getElementById("errorp").innerHTML=x;
  return true;
 }
 }
 function checkage()
 {
  var age=document.getElementById("age").value;
  
  if (isNaN(age)||age<18||age>100)
  {
    document.getElementById("errora").innerHTML="please enter valid Age";
 return false;
  }
  else{
    document.getElementById("errora").innerHTML=age;
    return true;
  }
 }

function securityno(){
  var ssno=document.getElementById("ssn").value;
  if(ssno.length <14){
  document.getElementById("ssnerror").innerHTML="enter 13 digit social security no.";
  return false;
  }
  else{
   document.getElementById("ssnerror").innerHTML=ssno;
   return true;
  }



}
function validateForm()
{
  if(checkname()==true)
  {
    return true;
  }
  else
  {
    return false;

  }

}


function getuser()
{
    var name=document.getElementById("search").value;

var myobj= new XMLHttpRequest();

myobj.onreadystatechange = function (){
if(this.readyState==4 && this.status==200)
{
  document.getElementById("print").innerHTML=  this.responseText;
}

};


  myobj.open("GET","http://localhost/secA/control/ajaxget.php?searchdata="+name,true);
  myobj.send();


}

