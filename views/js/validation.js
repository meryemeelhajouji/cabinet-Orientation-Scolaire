function validation(){
    let phone = document.getElementById('tele').value;

    const ajexphone =/^\+?(0|(212))[657]\d{8}$/
  
   
   
    if (phone == "") {
     document.getElementById('phoneid').innerHTML=" ** Please fill the phone field";
     document.getElementById('phoneid').style.color="red";
     return false;
   }else if (!phone.match(ajexphone)) {
     document.getElementById('phoneid').innerHTML =" ** Not a valid Phone Number"
     document.getElementById('phoneid').style.color="red";
     return false;
   }else{
     document.getElementById('phoneid').innerHTML=" ** Validé";
     document.getElementById('phoneid').style.color="#0dca4c";
   }

  
   
 
   
   
   
   
   
   
   
   }