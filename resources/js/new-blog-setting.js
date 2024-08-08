import { Popup } from "./Popup.js";

// popup

const contentPopup = `
    <p class="close-popup">
        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="25px" height="25px"><path d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"/></svg>
    </p>
    <div class="comments-pop-up">
        <div class="info-blog">
            <div class="info-user">
                <div class="acronym-user">An</div>
                <div class="username-and-date">
                    <p class="author-name">Author Name</p>
                    <p class="date-pub">1 min</p>
                </div>
            </div>
            <div class="desciption-container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt praesentium quaerat provident explicabo. Mollitia, totam! Atque deserunt ipsam consequatur est vero suscipit corporis facere, possimus quis, repellendus quia quos ex.</p>
                <div class="reaction-container">
                    <div class="btn-reaction">
                        <div class="single-reaction">
                            <form class="svg-thumb">
                                <button type="submit">&uarr;</button>
                            </form>
                            <p class="reaction-number">23</p>
                        </div>
                        <div class="single-reaction">
                            <form class="svg-thumb">
                                <button type="submit">&darr;</button>
                            </form>
                            <p class="reaction-number">10</p>
                        </div>
                    </div>
                    <p class="comments-number">Commentaires 30</p>
                </div>
            </div>
            <div class="comments-tools">
                <textarea name="" id="" placeholder="Ecrivez ici..." rows="3"></textarea>
                <button type="submit">Commenter</button>
            </div>
        </div>

        <div class="container-all-comments">
            <div class="all-comments">
                <div class="container-single-comments">
                    <div class="poster-comment-info">
                        <p class="acronym-user">Up</p>
                        <p class="author-name">Username Poster</p>
                    </div>
                    <p class="content-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste harum, quo exercitationem optio esse omnis, nesciunt incidunt itaque cum pariatur vitae repudiandae vero. Consequatur.</p>
                </div>

                <div class="container-single-comments">
                    <div class="poster-comment-info">
                        <p class="acronym-user">Bp</p>
                        <p class="author-name">Bogosy Poster</p>
                    </div>
                    <p class="content-comment">Lorste harum, quo officia doloribus debitis veniam at excepturi exercitationem optio esse omnis, nesciunt incidunt itaque cum pariatur vitae repudiandae vero. Consequatur.</p>
                </div>

                <div class="container-single-comments">
                    <div class="poster-comment-info">
                        <p class="acronym-user">Pp</p>
                        <p class="author-name">Placide PD</p>
                    </div>
                    <p class="content-comment">Lorem ipsum dolor</p>
                </div>

                <div class="container-single-comments">
                    <div class="poster-comment-info">
                        <p class="acronym-user">Op</p>
                        <p class="author-name">Odilon PD</p>
                    </div>
                    <p class="content-comment"> Iste harum, quo officia doloribus debitis veniam at excepturi exercitationem optio esse omnis, nesciunt incidunt itaque cum pariatur vitae repudiandae vero. Consequatur.</p>
                </div>

                <div class="container-single-comments">
                    <div class="poster-comment-info">
                        <p class="acronym-user">Mp</p>
                        <p class="author-name">Message PD</p>
                    </div>
                    <p class="content-comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste harum.</p>
                </div>
            </div>
        </div>
    </div>
`

document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.content')
    const popup = new Popup(contentPopup, section)
    const closePopup = popup.popup.querySelector('p.close-popup')

    // let closePopup = section.querySelector('p.close-popup') 
    const showComment = document.querySelector('.see-comments')
    const btnShowComment = document.querySelector('.btn-comment')

    // function to remove the poup
    function removePopUpContent () {
        console.log('hello');
        popup.removePopup()
    }
    
    function showPopupContent () {
        popup.showPopup()
        // console.log("hello bjbjhbjhdbsjhsbdjhgbdgjjj");
    }
    // closePopup.addEventListener('click', removePopContent)
    showComment.addEventListener('click', showPopupContent)
    closePopup.addEventListener('click', removePopUpContent)

})