
   let questions = [
    {
        question: " Quel est ton niveau d’étude ?", 
        type: "multichoix", choix: ["Seconde","Première"," Terminale"]
     },
    {
        question: " Quelle est ta voie ?", 
        type: "multichoix", choix: ["Voie générale ","Voie professionnelle","Voie technologique","Voie technologique"]    
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
for(let k = 0; k < 24; k++){
    r[k] = '';
}
let affichage = () => {
    score.textContent = i+1
    bar.style.width = `${100/2 * (i)}%`;
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
            <input type="number" min="${questions[i].min}" max="${questions[i].max}" class="form-control" name="reponse" placeholder="${questions[i].min}-${questions[i].max}">
            <span class="input-group-text">${questions[i].unite}</span>
        </div> `;
    }else{
        formulaire.innerHTML = `
        <div class="mb-3">
            <input type="text" name="reponse" class="form-control">
        </div>`
    }
}
affichage()

form.addEventListener("submit",(e) => {
    e.preventDefault()
    if(questions[i].type == "text"){
        if((form.reponse.value >= questions[i].min) && (form.reponse.value <= questions[i].max)){
            r[i] = form.reponse.value;
        }
        else{
            alert("Valeur non valide:")
            return
        }
    }else{
        r[i] = form.reponse.value;
    }
    i++
    if(i == 2){
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
          
           
            <p> Il vous suffit de répondre le plus sérieusement possible aux questions proposées et le plus honnêtement
              possible aussi. Choisissez obligatoirement parmi le choix qui vous correspond le plus.</p>
    
          </div>
    
        </div>
    
        </div>
    
      </section>
                        `;
    }else
        affichage()
})