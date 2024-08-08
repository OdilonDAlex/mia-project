export class Popup {
    constructor (content_, parent_popup) {
        this.popup = document.createElement('div')
        this.popup.className = 'container-popup'
        this.popup.innerHTML = content_
        this.popup_parent = parent_popup
        this.body = document.querySelector('body')

        // close the popup by clicking on the x icon
        // this.popup.querySelector('.close-popup').addEventListener('click', () => this.removePopup)

        // add style to the popup and its parent
        this.setStyleOnParent()
        this.setProperStyleOnPopup()
    }
        
    showPopup () {
        // add the popup in the parent_popup
        this.body.style.overflow = 'hidden'
        this.popup_parent.appendChild(this.popup)

        // style popup on entering
        // console.log(this.popup_parent)
    }

    removePopup () {
        // remove the popup from the body
        this.popup_parent.removeChild(this.popup)
        console.log(this.popup_parent);
        
    }

    setProperStyleOnPopup () {
        this.popup.style.height = 'calc(100vh - 50px)'
        this.popup.style.width = '100vw'
        this.popup.style.backgroundColor = '#0000006e'
        this.popup.style.display = 'flex'
        this.popup.style.alignItems = 'center'
        this.popup.style.justifyContent = 'center'
        this.popup.style.overflow = 'hidden'
        this.popup.style.position = 'absolute'
        this.popup.style.left = '0'
        this.popup.style.top = '0'
        // this.popup.style.zIndex = '5'
    }

    setStyleOnParent () {
        this.popup_parent.style.position = 'relative'
        this.popup_parent.style.backgroundColor = '#00000025';
        this.popup_parent.style.display = 'flex';
        this.popup_parent.style.justifyContent = 'center';
        this.popup_parent.style.alignItems = 'center';
    }
}