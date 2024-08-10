export class Accordion {

    constructor(title, description){
        this.title = title;
        this.description = description;
        this.htmlElement = null;
        this.render();
    }

    render(){
        let container = document.createElement('div');
        container.className = "accordeon survey";

        let button = document.createElement('button');
        button.setAttribute('aria-label', 'Titre du sondage');
        button.className = "survey-title show-description";
        button.innerText = this.title;

        let p = document.createElement('p');
        p.className = 'survey-description';
        p.innerText = this.description;

        container.appendChild(button);
        container.appendChild(p);

        this.htmlElement = container;
    }
}