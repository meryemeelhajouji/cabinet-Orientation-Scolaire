let questions = [
    {
        question: " Quel est ton niveau d’étude  ?", 
        type: "multichoix", choix: ["Seconde","Première"," Terminale"]
    },
    {
        question: "Dans quel domaine ou filière souhaites-tu étudier ?", 
        type: "text", min: 33, max: 42
    },
    {
        question: "Quelle est ta voie ?", 
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
let resultat = []
for(let k = 0; k < 3; k++){
    resultat[k] = '';
}
let affichage = () => {
    score.textContent = i+1
    bar.style.width = `${4.17 * (i+1)}%`;
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