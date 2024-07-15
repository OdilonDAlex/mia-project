const bgColor = document.querySelectorAll('.color');
const leftSide = document.querySelector('.left-side-container');
const popUpblogCreation = document.querySelector('.pop-up-blog-creation');
const popUpblogCreationForm = document.querySelector('.pop-up-blog-creation form');
const rightSide = document.querySelector('main.container-blog');
const threeDots = document.querySelectorAll(".three-dots");
const txtarea = document.querySelector('div.container-tools textarea');
const section = document.querySelector('section.content');

threeDots.forEach(function (anchor) {
    anchor.addEventListener('click',(e) => {
        let parentDots = e.target.parentNode;
        let thisPopUp = parentDots.querySelector('.pop-up');
        console.log(thisPopUp);

        if(thisPopUp) {
            parentDots.removeChild(thisPopUp);
        }
        else {
            let containerForm = document.createElement('div');
            containerForm.classList.add('pop-up');
            containerForm.innerHTML += `
                    <span class="arrow"></span>
                    <form action="" method="POST">
                        <input type="submit" value="Partager">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" value="Signaler">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" value="Supprimer">
                    </form>`;
            parentDots.appendChild(containerForm);
        }

    });
});

txtarea.addEventListener('click', (event) => {
    section.innerHTML += `
            <div class="pop-up-blog-creation">
                <form action="" method="POST">
                    <span>
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"/></svg>
                    </span>
                    <div class="header-blog-creation">
                        <div class="acronym-user">An</div>
                        <p class="author-name">Author Name</p>
                    </div>
                    <textarea name="" id="" placeholder="Lorem ipsum dolor sit amet..."></textarea>
                    <div class="container-bg-choice">
                        <p>Choisir votre style de fond</p>
                        <div class="bg-choice">
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                            <p class="color"></p>
                        </div>
                    </div>
                    <div class="container-btn-">
                        <button type="submit">Publier</button>
                    </div>
                </form>
            </div>`;

    leftSide.style.filter = 'blur(5px)';
    rightSide.style.filter = 'blur(5px)';

    section.querySelector('div.pop-up-blog-creation form span').addEventListener('click', (e) => {
        document.querySelector('.pop-up-blog-creation form').style.transform = 'scale(0)';
        document.querySelector('.pop-up-blog-creation form').style.transition = 'transform .3s ease-in-out';
        setTimeout(() => {
            leftSide.style.filter = 'blur(0px)';
            rightSide.style.filter = 'blur(0px)';
            // txtarea.addEventListener('click', blogCreation);
            section.removeChild(e.target.parentElement.parentElement.parentElement);
        }, 300);
    })
} )
// function blogCreation() {
//     section.innerHTML += `
//             <div class="pop-up-blog-creation">
//                 <form action="" method="POST">
//                     <span>
//                         <?xml version="1.0" encoding="UTF-8"?>
//                         <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"/></svg>
//                     </span>
//                     <div class="header-blog-creation">
//                         <div class="acronym-user">An</div>
//                         <p class="author-name">Author Name</p>
//                     </div>
//                     <textarea name="" id="" placeholder="Lorem ipsum dolor sit amet..."></textarea>
//                     <div class="container-bg-choice">
//                         <p>Choisir votre style de fond</p>
//                         <div class="bg-choice">
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                             <p class="color"></p>
//                         </div>
//                     </div>
//                     <div class="container-btn-">
//                         <button type="submit">Publier</button>
//                     </div>
//                 </form>
//             </div>`;

//     leftSide.style.filter = 'blur(5px)';
//     rightSide.style.filter = 'blur(5px)';

//     section.querySelector('div.pop-up-blog-creation form span').addEventListener('click', (e) => {
//         document.querySelector('.pop-up-blog-creation form').style.transform = 'scale(0)';
//         document.querySelector('.pop-up-blog-creation form').style.transition = 'transform .3s ease-in-out';
//         setTimeout(() => {
//             leftSide.style.filter = 'blur(0px)';
//             rightSide.style.filter = 'blur(0px)';
//             txtarea.addEventListener('click', blogCreation);
//             section.removeChild(e.target.parentElement.parentElement.parentElement);
//         }, 300);
//     })
// }

// function closePopUp() {
//     document.querySelector('.pop-up-blog-creation form').style.transform = 'scale(0)';
//     document.querySelector('.pop-up-blog-creation form').style.transition = 'transform .3s ease-in-out';
//     setTimeout(() => {
//         leftSide.style.filter = 'blur(0px)';
//         rightSide.style.filter = 'blur(0px)';
//         section.removeChild(document.querySelector('.pop-up-blog-creation'));
//     }, 300);
// }