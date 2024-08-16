import { Popup } from "./Popup.js"

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
    const btnsShowComment = document.querySelectorAll('button.btn-comment')
    const lblsShowComment = document.querySelectorAll('.see-comments')
    const txtAreaCreatePost = document.querySelector('textarea.txtarea-create-post')   

    /**
     * Toggle the blur of the elements aside and main
     */
    function toggleBlurToAnElement() {
        const main = document.querySelector('main')
        const aside = document.querySelector('aside')
        main.style.filter == "blur(5px)" ? main.style.filter = "blur(0px)" : main.style.filter = "blur(5px)"
        aside.style.filter == "blur(5px)" ? aside.style.filter = "blur(0px)" : aside.style.filter = "blur(5px)"
    }
    
    /**
     * Remove the blur to the elements (aside, main)
     * Remove the popup container from the section using the class Popup
     * @param {Object} popup 
     */
    function removePopUpContent (popup) {
        toggleBlurToAnElement()
        popup.removePopup()
    }

    /**
     * Add a blur to the elements (aside, main)
     * Show the popup
     * @param {object} popup 
     */
    function showPopupContent (popup) {
        toggleBlurToAnElement()
        popup.showPopup()
    }
    
    /**
     * Create a popup that allowed the users to create their own post
     * Processing the popupHtmlElementToCreateNewPost which contains the HTML code using the class Popup
     */
    function popupToCreateNewPost() {
        // HTML element of the popup post creation
        const popupHtmlElementToCreateNewPost = `
            <span class="close-popup-to-create-new-post">
                <?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M18,6h0a1,1,0,0,0-1.414,0L12,10.586,7.414,6A1,1,0,0,0,6,6H6A1,1,0,0,0,6,7.414L10.586,12,6,16.586A1,1,0,0,0,6,18H6a1,1,0,0,0,1.414,0L12,13.414,16.586,18A1,1,0,0,0,18,18h0a1,1,0,0,0,0-1.414L13.414,12,18,7.414A1,1,0,0,0,18,6Z"/></svg>
            </span>
            <form action="" method="POST" class="form">
                <div class="header-create-post-user-info">
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
            `
        const popup = new Popup(popupHtmlElementToCreateNewPost, section)
        const closePopupToCreateNewPost = popup.popup.querySelector('span.close-popup-to-create-new-post')
        
        // show the popup
        showPopupContent(popup)

        // close the popup by clicking the x icon
        closePopupToCreateNewPost.addEventListener('click', function () {
            removePopUpContent(popup)
        })
    }

    /**
     * get actions when the buttons comment or label see comment are clicked (showing and removing)
     */
    function doShowPopupCreateNewComment () {
        const popup = new Popup(contentPopup, section)
        const closePopup = popup.popup.querySelector('p.close-popup')

        showPopupContent(popup)

        closePopup.addEventListener('click', function() {
            removePopUpContent(popup)
        })
    }

    // clicking each label to see comments, these are the actions
    lblsShowComment.forEach(lblShowComment => {
        lblShowComment.addEventListener('click', (event_) => {
            event_.preventDefault()
            doShowPopupCreateNewComment()        
        })
    })

    // clicking each btn to see comments, these are the actions (same as label)
    btnsShowComment.forEach(btnShowComment => {
        btnShowComment.addEventListener('click', (event_) => {
            event_.preventDefault()
            doShowPopupCreateNewComment()
        })
    })

    txtAreaCreatePost.onclick = function () {
        popupToCreateNewPost()    
    }

    // select all element (three dots)to make the anchors, and using forEach to add an action to each of them
    const threeDotsToToggleAnchors = document.querySelectorAll('section.content p.three-dots')

    threeDotsToToggleAnchors.forEach(threeDotsToToggleAnchor => {
        threeDotsToToggleAnchor.addEventListener('click', (event_) => {
            event_.preventDefault()
            let parentTogglerAnchor = event_.target.parentNode
            let thisCurrentAnchor = parentTogglerAnchor.querySelector('.pop-up')
    
            if(thisCurrentAnchor) {
                parentTogglerAnchor.removeChild(thisCurrentAnchor)
            }
            else {
                /**
                 * Add the element of the anchor into the parent
                 * @var containerSingleAnchorForm parent of the anchor that we're about to create
                 */
                let containerSingleAnchorForm = document.createElement('div')
                containerSingleAnchorForm.classList.add('pop-up')
                containerSingleAnchorForm.innerHTML += `
                    <span class="arrow"></span>
                    <form action="" method="POST">
                        <input type="submit" value="Partager">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" value="Signaler">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" value="Supprimer">
                    </form>`
                parentTogglerAnchor.appendChild(containerSingleAnchorForm)
            }
        })
    })

    window.onclick = function(event) {
        var anchors = document.querySelectorAll("div.plus-info")
        if (!event.target.matches('.three-dots')) {
            for (let i = 0; i < anchors.length; i++) {
                var openAnchor = anchors[i].querySelector(".pop-up")
                if (openAnchor) {
                    console.log(openAnchor.parentNode)
                    openAnchor.parentNode.removeChild(openAnchor)
                }
            }
        }
        else {
            for (let index = 0; index < anchors.length; index++) {
                var tmpAnchor = anchors[index].querySelector('.pop-up')
                if (!tmpAnchor) {
                    console.dir(tmpAnchor)
                    anchors[index].removeChild(tmpAnchor)
                }
            }            
            
        }
    }
})