

function validation(){

    var name = document.getElementById('nom').value;
      
    if ( name == ""){
   
        document.getElementById('nameid').innerHTML=" ** Veuillez saisir votre Nom. ";
        document.getElementById('nameid').style.color="red";
        return false;
       }else{
        document.getElementById('nameid').innerHTML=" ** Validé";
        document.getElementById('nameid').style.color="#0dca4c";
      
       }

       
    let email = document.getElementById('email').value;
    const mailformat = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*$/ ;
       
    if (email == "") {
        document.getElementById('emailid').innerHTML = " **Veuillez saisir votre email."
        document.getElementById('emailid').style.color="red";
        return false;
       
      }else if (!email.match(mailformat)) {
        document.getElementById('emailid').innerHTML = " **Format  Invalid"
          document.getElementById('emailid').style.color="red";
        return false;
      }else{
        document.getElementById('emailid').innerHTML=" ** Validé";
        document.getElementById('emailid').style.color="#0dca4c";
      }
      let adresse = document.getElementById('adresse').value;
   
      if ( adresse == ""){
   
        document.getElementById('adressid').innerHTML=" ** Veuillez saisir votre addresse.";
        document.getElementById('adressid').style.color="red";
        return false;
       }else{
        document.getElementById('adressid').innerHTML=" ** Validé";
        document.getElementById('adressid').style.color="#0dca4c";
      
       }

       
    let phone = document.getElementById('tele').value;
    const ajexphone =/^\+?(0|(212))[657]\d{8}$/ ;
    if (phone == "") {
        document.getElementById('phoneid').innerHTML=" **Veuillez saisir votre Téléphone.";
        document.getElementById('phoneid').style.color="red";
        return false;
      }else if (!phone.match(ajexphone)) {
        document.getElementById('phoneid').innerHTML =" **  invalid Téléphone Number"
        document.getElementById('phoneid').style.color="red";
        return false;
      }else{
        document.getElementById('phoneid').innerHTML=" ** Validé";
        document.getElementById('phoneid').style.color="#0dca4c";
      }

      var password = document.getElementById('password').value;
      
      if ( password == ""){
     
          document.getElementById('passwordid').innerHTML=" ** PVeuillez saisir votre password.";
          document.getElementById('passwordid').style.color="red";
          return false;
         
         }else{
          document.getElementById('passwordid').innerHTML=" ** Validé";
          document.getElementById('passwordid').style.color="#0dca4c";
        
         }

   } 
  