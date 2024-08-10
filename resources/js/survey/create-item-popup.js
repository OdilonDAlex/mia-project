const createItemPost = document.querySelector('form.create-item-popup');
const closeBtn = createItemPost.querySelector('button.close-btn');
const createItem = document.querySelector('section.content button.create-survey-item');
const mainContent = document.querySelector('section.content div.main-content');
const blurLevel = 5;

createItem.addEventListener('click', (event_) => {

    
    
    createItemPost.style.display = 'block';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;

    closeBtn.addEventListener('click', (event) => {
        event.preventDefault();
        createItemPost.style.display = 'none';
        document.querySelector('section.content').style.filter = 'blur(0px)';
    })
})