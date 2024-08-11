import axios from "axios";

const surveyItemsOptionButton = document.querySelectorAll('section.content div.survey-item .option-button');

surveyItemsOptionButton.forEach(button => {
    button.addEventListener('click', (event_) => {
        event_.preventDefault();
        let parent_ = button.parentElement.parentElement 
        let action = parent_.querySelector('div.action');

        action.classList.toggle('active')
        if(action.classList.contains('active')){
            action.style.display = 'block';
            
            let itemId = parent_.querySelector('input[type="hidden"]').value;
            let editButton = action.querySelector('button.edit');
            let deleteButton = action.querySelector('button.delete');

            editButton.onclick = function(){
                console.log('modification de ' + itemId);
            }

            deleteButton.onclick = function(){
                console.log('suppression de ' + itemId);
                axios.delete(`${window.origin}/survey/item/delete`, {
                    data: {
                        id: itemId,
                    },
                })
                .then( ( r ) => {
                    // notification
                    parent_.parentElement.removeChild(parent_);
                })
                .catch( (error) => {
                    console.error(error);
                })
            }
            
        }
        else {
            action.style.display = 'none';
        }
    })
})