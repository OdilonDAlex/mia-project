import axios from "axios";
import { Accordion } from "./models";

const createSurveyForm = document.forms.createSurveyForm;
const closeBtn = createSurveyForm.querySelector('button.close-btn');
const createSurvey = document.querySelector('section.content button.create-survey');
const blurLevel = 5;
const newSurveyContainer = document.querySelector('aside section.unpublished-survey');
createSurvey.addEventListener('click', (event_) => {


    createSurveyForm.style.display = 'block';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;
    createSurveyForm.style.animation = 'show .3s ease-in-out';

    closeBtn.addEventListener('click', (event) => {
        event.preventDefault();
        createSurveyForm.elements.title.value = '';
        createSurveyForm.elements.description.value = '';
        createSurveyForm.style.display = 'none';
        document.querySelector('section.content').style.filter = 'none';
    })
})


createSurveyForm.addEventListener('submit', (event_) => {
    event_.preventDefault();

    let title = createSurveyForm.elements.title.value;
    let description = createSurveyForm.elements.description.value;

    axios.post(`${window.origin}/survey/store`, {
        title: title,
        description: description
    })
    .then( ( result ) => {
        createSurveyForm.elements.title.value = '';
        createSurveyForm.elements.description.value = '';
        createSurveyForm.style.display = 'none';
        document.querySelector('section.content').style.filter = 'none';

        let newAccordion = new Accordion(title, description);

        newSurveyContainer.appendChild(newAccordion.htmlElement);
        let newSurveyButton =  newAccordion.htmlElement.querySelector('button');
        
        newSurveyButton.addEventListener('click', (event_) => {
            event_.preventDefault();
            let parentElement = event_.target.parentElement;
            if(parentElement.classList.contains('active')){
                parentElement.classList.remove('active');
                newSurveyButton.style.borderRadius = '4px';
            }
            else {
                parentElement.classList.add('active');
                newSurveyButton.style.borderRadius = '4px 4px 0 0';
            }
        })

        //  notification succé
    })
    .catch( ( error ) =>  {
        // notification rouge  ( indiquant les erreurs )
    })
    ;
})