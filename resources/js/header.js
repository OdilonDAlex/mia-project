const header = document.querySelector('header');
let prevPos = window.pageYOffset;

window.onscroll = function() {
  var curPos = window.pageYOffset;
  if (prevPos > curPos) {
    header.style.top = "0";
  } else {
    header.style.top = "-50px";
  }
  prevPos = curPos;
}

window.addEventListener('DOMContentLoaded', (event_) => {
  event_.preventDefault()

  function togglePopupUserMoreInfo (targetElement) {
    console.log('hey you come here');
    targetElement.style.display == 'none'? targetElement.style.display == 'block' : targetElement.style.display = 'none'
  }

  const containerUserInfoHeader = document.querySelector('.container-info-user-header')
  const popupUserMoreInfo = document.querySelector('form.container-profil')

  containerUserInfoHeader.addEventListener('click', () => {
    
    togglePopupUserMoreInfo(popupUserMoreInfo)
  })
})