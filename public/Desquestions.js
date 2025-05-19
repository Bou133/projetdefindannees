import questionnaire from "./questionnaire.js" ;

let panneau = {
        question: null,
        reponse : null ,
        fin : null ,

};
 ;

const init = () => {
    panneau.question = document.querySelector('#question');
    panneau.reponse = document.querySelector('#reponse');
    panneau.fin = document.querySelector('#fin');
    

    const qs = questionnaire.json() ;

    console.log(qs) ;


  








};


window.onload = init ;