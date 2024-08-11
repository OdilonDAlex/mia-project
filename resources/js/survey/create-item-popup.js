import axios from "axios";

const createItemForm = document.querySelector('form.create-item-popup');
const closeBtn = createItemForm.querySelector('button.close-btn');
const createItem = document.querySelector('section.content button.create-survey-item');
const blurLevel = 5;


createItem.addEventListener('click', (event_) => {

    createItemForm.style.display = 'block';
    createItemForm.style.animation = 'show .3s ease-in-out';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;

    closeBtn.addEventListener('click', (event) => {
        event.preventDefault();
        createItemForm.style.display = 'none';
        document.querySelector('section.content').style.filter = 'blur(0px)';
    })
})

createItemForm.addEventListener('submit', (event_) => {
    event_.preventDefault();

    let [...answersInput] = createItemForm.querySelectorAll('div.answer input');
    let answers = answersInput.map((input) => input.value);
    let question = createItemForm.elements.question.value;
    let survey_id = createItemForm.elements.survey_id.value;
    let answers_type = createItemForm.elements.type.value;
    axios.post(`${window.origin}/survey/item/store`, {
        survey_id: survey_id,
        question: question,
        answers: answers,
        answers_type: answers_type, 
    })
    .then( (result) => {
        console.log(result);
    })
    .catch( (e) => {
        // console.error('une erreur s\'est produite');
        console.error(e);
    });
})