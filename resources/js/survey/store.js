import axios from "axios";

const createSurveyForm = document.forms.createSurveyForm;
const closeBtn = createSurveyForm.querySelector('button.close-btn');
const createSurvey = document.querySelector('section.content button.create-survey');
const blurLevel = 5;
createSurvey.addEventListener('click', (event_) => {


    createSurveyForm.style.display = 'block';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;
    
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
    .then( (result ) => console.dir(result))
    .catch( ( error ) =>  console.error(error))
    ;
})