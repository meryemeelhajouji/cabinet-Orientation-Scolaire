
function validation(){

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
      
    let offre = document.getElementById('offre').value;
    if (offre == "") {
        document.getElementById('offreid').innerHTML=" **Veuillez choise votre choix.";
        document.getElementById('offreid').style.color="red";
        return false;
    ;
      }else{
        document.getElementById('offreid').innerHTML=" ** Validé";
        document.getElementById('offreid').style.color="#0dca4c";
      }
}