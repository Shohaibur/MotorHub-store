function checkName()
{
    var x=document.getElementById("fname").value;
    var correctWay = /^[a-zA-Z\s]+$/;
    if(x.length == 0  )
    { 
        
        return false;
    }
    else{
        if( x.match(correctWay))
          {
            return true;
         }
         else{
             return true;
         }
       
   }

 }

 function emailcheck()
 {
    var y=document.getElementById("fmail").value;
    if(y.indexOf('@')<=0 || y.charAt(y.length-4)!='.')
    {
        return false;
    }
    else 
    {
        return true;
    }
 }

 function checkPassword()
 {
      var z= document.getElementById("fpass").value;
      var a= document.getElementById("fCpass").value;
      if(a==z)
      {
        return true;
      }
      else
      {
        return false;
      }
      
 }

 function checkTin()
 {
    var b = document.getElementById("tinnumber").value;
    if(b.length>0 && b.length<7)
    {
        return true;
    }
    else
    {
        return false;
    }
 }

function validateForm()
{
   if(checkName() ==  true  && emailcheck()==true  && checkPassword()==true && checkTin()==true )
   {
    return true;
   }
   else return false;
}