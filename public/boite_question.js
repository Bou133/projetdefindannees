import { questionnaire } from "./questionnaire.js";

export const boite_question = (questionnaire) =>{
     
    
    const random = parseInt(Math.random() * questionnaire.length  );
    
    const questionnairechoix = questionnaire[random] ;  

     const possibilities = [] ;
     
     possibilities.push (questionnairechoix.reponse_1);
     possibilities.push (questionnairechoix.reponse_2);
     possibilities.push (questionnairechoix.reponse_3);
     possibilities.push (questionnairechoix.reponse_4);

    
    
    
       possibilities.sort((a , b) => {
        return a.charCodeAt(0) - b.charCodeAt(0)

     });
    
    
    
    
    
    
    
    
    
    const asking = { 
         ask : questionnairechoix.question ,         
          possibilities ,

           



     } ;

          console.log(asking);

          return asking ;


}