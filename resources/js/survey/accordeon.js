const accordeonShowButton = document.querySelectorAll('section.content aside .show-description');

accordeonShowButton.forEach(button => {
    button.addEventListener('click', (event_) => {
        event_.preventDefault();
        let parentElement = event_.target.parentElement;
        if(parentElement.classList.contains('active')){
            parentElement.classList.remove('active');
        }
        else {
            parentElement.classList.add('active');
        }
    })
})