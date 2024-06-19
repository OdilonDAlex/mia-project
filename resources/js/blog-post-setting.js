const threeDots = document.querySelectorAll(".three-dots")

threeDots.forEach(function (anchor) {
anchor.addEventListener('click',(e) => {
    // e.preventDefault();
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