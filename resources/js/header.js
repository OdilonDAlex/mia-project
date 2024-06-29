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

document.onload = function() {
    $(document).ready(function() {
        $('.container-profil').hide();
    
        $('.acronym-user').click(function() {
            $('.container-profil').toggle(200);
        })
    })
}
