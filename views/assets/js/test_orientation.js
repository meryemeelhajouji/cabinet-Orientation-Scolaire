
   let questions = [
    {
        question: " Quel est ton niveau d’étude ?", 
        type: "multichoix", choix: ["Seconde","Première"," Terminale"]
     },
    {
        question: " Quelle est ta voie ?", 
        type: "multichoix", choix: ["Voie générale ","Voie professionnelle","Voie technologique" ]   
    },

    {
        question: " Dans quel domaine ou filière tu étudier maintenant ?", 
        type: "text" 
    },
    {
        question: " Cochez le métier qui vous correspond le plus", 
        type: "multichoix", choix: [
        "technicienne informatique",
        " Cadre en Marketing digital",
        "Comptable/financier ",
        "Médecin généraliste "]    
    } ,
    {
        question: "développe des programmes des site web ou des robot", 
        type: "multichoix", choix: ["oui ","non"]    
   
    } ,
    {
        question: "Prodiguer des soins à des personnes éprouvant des problèmes de santé physique ou mentale.", 
        type: "multichoix", choix: ["oui ","non"]    
   
    } ,
    {
        question: "Résous des problèmes d’entreprises et gère leurs finances.", 
        type: "multichoix", choix: ["oui ","non"]    
   
    } ,
    {
        question: "Participer à des activités de prévention et de dépistage en rapport avec la santé humaine.", 
        type: "multichoix", choix: ["oui ","non"]    
   
    },
    {
        question: "Travailler en équipe et interagir avec d'autres personnes.", 
        type: "multichoix", choix: ["oui ","non"]    
   
    }
    ,
    {
        question: "Fais des études de marché.", 
        type: "multichoix", choix: ["oui ","non"]    
   
    }
   
    
]

let i = 0
let form = document.querySelector("form")
let score = document.querySelector("#score")
let question = document.querySelector("#question")
let formulaire = document.querySelector("#formulaire")
let precedent = document.querySelector("#precedent")
let main = document.querySelector("main")
let bar = document.querySelector(".progress-bar")
let r = []
for(let k = 0; k < 10; k++){
    r[k] = '';
}
let affichage = () => {
    score.textContent = i+1
    bar.style.width = `${100/10 * (i)}%`;
    (i == 0) ? precedent.setAttribute('disabled', ''): precedent.removeAttribute('disabled');
    question.textContent = questions[i].question
    if(questions[i].type == "multichoix"){
        formulaire.innerHTML = ""
        questions[i].choix.forEach((choix, index) => {
            formulaire.innerHTML += `
            <div class="bclChoix">
                <label for="${index}" class="choix">${choix}</label>
                <input class="form-check-input" type="radio" id="${index}" name="reponse" value="${choix}" required>
            </div> `;
        })
    }else if(questions[i].type == "text"){
        formulaire.innerHTML = `
        <div class="input-group mb-3">
            <input type="text"  class="form-control" name="reponse" placeholder="votre choix required">
          
        </div> `;
    }
}
affichage()
function sendResultToBackend(result){
    console.log('sending stat started!');
    let formData=new FormData();
    formData.append('resultat',result);
    $.ajax({
        data:formData,
        url: "http://localhost/cabinetdOrientationScolaire/saveQuizeResult",
        method: 'POST',
        processData: false,
        contentType: false,
        success: function (data) {
            console.log('response from server');
            console.log(data);
        }
      });
  }

form.addEventListener("submit",(e) => {
    e.preventDefault()
    if(questions[i].type == "text"){
        r[i] = form.reponse.value;
    }else{
        r[i] = form.reponse.value;
    }
    i++
    if(i == 10){
        let result=resultatAlgo();
        console.log('test 1');
        sendResultToBackend(result);
        main.innerHTML = `
        <section id="values" class="values ">
        <div class="d-flex justify-content-center align-items-center w-100 p-3  ">
    
          <div class="   px-5 py-5  mb-1 border-1 style_card ">
            <div class="board-stepper fw-bold text-center d-flex justify-content-around align-items-center">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10">
                  <ellipse id="Ellipse_270" data-name="Ellipse 270" cx="5.5" cy="5" rx="5.5" ry="5" fill="#DD10C9" />
                </svg>
                <div class="information">Informations</div>
              </div>
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 25">
                    <ellipse id="Ellipse_270" data-name="Ellipse 270" cx="5.5" cy="5" rx="5.5" ry="5" fill="#DD10C9" />
    
                </svg>
                <div class="information">Questionnaire</div>
              </div>
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10">
                    <circle id="Ellipse_271" data-name="Ellipse 271" cx="19.5" cy="19.5" r="19.5" fill="#f8f9fa"
                    stroke="#DD10C9" stroke-width=10 />
                  <circle id="Ellipse_275" data-name="Ellipse 275" cx="5" cy="5" r="5" transform="translate(15 14)"
                    fill="#DD10C9" />            </svg>
                <div class="information">Résultats</div>
              </div>
            </div>
          
     
            <p> ${result}</p>
    
          </div>
    
        </div>
    
        </div>
    
      </section>
                        `;
    }else
        affichage()
})
precedent.addEventListener("click", () => {
    i--;
    affichage()
})

let filièreInformatique = () => {
    let info = 0;
    if(r[3] =="technicienne informatique")  info++ ;
    if(r[4] =="oui ") info++ ;
    return info;
}
let filièreMarketing = () => {
    let mark = 0;
    if(r[3] =="Cadre en Marketing digital") mark++;
     if(r[9] =="oui ")  mark++;
    return mark;
}
let filièreCopmtFinance= () => {
    let c = 0;
    if(r[3] =="Comptable/financier")  c++;
   if(r[6] =="oui ") c++;
    return c;
}
let filièreMedecin= () => {
    let med = 0;
    if(r[3] =="Médecin généraliste") med++;
    if(r[5] =="oui ")  med++;
    return med;
}

let resultatAlgo = () => {
    let infor = filièreInformatique();
    let marke = filièreMarketing();
    let com = filièreCopmtFinance();
    let medec = filièreMedecin();
    if(infor >=1){
        return `Nous avons compilé pour vous la somme des points accordés pour chacune de vos réponses.
                Voici les spécialité   les plus susceptibles de vous intéresser  informatique `;}
    else if(marke >=1){
         return `Nous avons compilé pour vous la somme des points accordés pour chacune de vos réponses.
         Voici les spécialité   les plus susceptibles de vous intéresser marketing`;}            
    else if(com >=1){
         return `Nous avons compilé pour vous la somme des points accordés pour chacune de vos réponses.
         Voici les spécialité   les plus susceptibles de vous intéresser comptabilité`;}  
    else if(medec >=1){
         return `Nous avons compilé pour vous la somme des points accordés pour chacune de vos réponses.
         Voici les spécialité   les plus susceptibles de vous intéresser médcine`;}                                                         
    else{
         return marke;  
    }
                       

}
