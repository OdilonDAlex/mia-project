import axios from "axios";

const createItemForm = document.querySelector('form.create-item-popup');
const closeBtn = createItemForm.querySelector('button.close-btn');
const createItem = document.querySelector('section.content button.create-survey-item');
const blurLevel = 5;
const newAnswerButton = createItemForm.querySelector('button.new-answers');
const answerType =  createItemForm.elements.type;

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
        // notification et integration
        createItemForm.style.display = 'none';
        window.location.reload();
        console.log(result);
    })
    .catch( (e) => {
        // console.error('une erreur s\'est produite');
        console.error(e);
    });
})

newAnswerButton.addEventListener('click', (event_) => {
    event_.preventDefault();

    let answersNumber = createItemForm.querySelectorAll('div.answer').length;
    let answerContainer = document.createElement('div');
    answerContainer.className = 'answer';

    let label = document.createElement('label');
    label.className = "answer-index";
    label.innerText = answersNumber + 1;

    let input = document.createElement('input');
    input.setAttribute('type', 'text');

    answerContainer.appendChild(label);
    answerContainer.appendChild(input);

    createItemForm.querySelector('div.answers').insertBefore(answerContainer, newAnswerButton);
})

answerType.onchange = function(){
    let inputs = createItemForm.querySelectorAll('div.answer input');
    
    inputs.forEach(input => {
        input.value = '';
        input.disabled = false;
    })

    if(answerType.value == 'boolean') {
        let parent_ = inputs[0].parentElement.parentElement;
        for(let i = 2; i < inputs.length; i++){
            parent_.removeChild(inputs[i].parentElement);
        }

        inputs.forEach(input => {
            input.setAttribute('type', 'text');
            input.disabled = true;
        })

        inputs[0].value = "Oui";
        inputs[1].value = "Non";
    }
    else {
        inputs.forEach(input => {input.setAttribute('type', answerType.value); })
    }

}