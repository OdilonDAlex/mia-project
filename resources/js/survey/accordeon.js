const accordeonShowButton = document.querySelectorAll('section.content aside .show-description');

accordeonShowButton.forEach(button => {
    button.addEventListener('click', (event_) => {
        event_.preventDefault();
        let parentElement = event_.target.parentElement;
        if(parentElement.classList.contains('active')){
            parentElement.classList.remove('active');
            button.style.borderRadius = '4px';
        }
        else {
            parentElement.classList.add('active');
            button.style.borderRadius = '4px 4px 0 0';
        }
    })
})