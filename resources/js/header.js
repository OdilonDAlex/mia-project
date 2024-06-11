document.onload = function() {
    $(document).ready(function() {
        $('.container-profil').hide();
    
        $('.acronym-user').click(function() {
            $('.container-profil').toggle(200);
        })
    })
}
