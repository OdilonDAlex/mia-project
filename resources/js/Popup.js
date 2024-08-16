export class Popup {
    /**
     * add those proprieties to the class variables
     * create the html element which is gonna be the parent of those elements
     * @param {HTMLCollection} content_ 
     * @param {HTMLCollection} parent_popup 
     */
    constructor (content_, parent_popup) {
        this.popup = document.createElement('div')
        this.popup.className = 'container-popup'
        this.popup.innerHTML = content_
        this.popup_parent = parent_popup
        this.body = document.querySelector('body')

        // add style to the popup and its parent
        this.setStyleOnParent()
        this.setProperStyleOnPopup()
    }
        
    /**
     * Append the popup elements into the parent 
     */
    showPopup () {
        this.body.style.overflow = 'hidden'
        this.popup_parent.appendChild(this.popup)
    }

    /**
     * remove the popup from the body
     */
    removePopup () {
        this.popup_parent.removeChild(this.popup)
    }

    /**
     * set style the current popup
     */
    setProperStyleOnPopup () {
        this.popup.style.height = 'calc(100vh - 50px)'
        this.popup.style.width = '100vw'
        this.popup.style.backgroundColor = '#0000003b'
        this.popup.style.display = 'flex'
        this.popup.style.alignItems = 'center'
        this.popup.style.justifyContent = 'center'
        this.popup.style.overflow = 'hidden'
        this.popup.style.position = 'absolute'
        this.popup.style.left = '0'
        this.popup.style.top = '0'
    }

    /**
     * set style to the parent
     */
    setStyleOnParent () {
        this.popup_parent.style.position = 'absolute'
        this.popup_parent.style.display = 'flex'
        this.popup_parent.style.justifyContent = 'center'
        this.popup_parent.style.alignItems = 'center'
    }
}