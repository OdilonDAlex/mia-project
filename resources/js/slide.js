var slideContainer = document.querySelector('div.slide-container');
var [...slideItems] = slideContainer.querySelectorAll('div.slide-item');
var slideButtons = slideContainer.querySelectorAll('button');

var interval;

slideButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();


        slide(button.getAttribute('id'));
        
        clearInterval(interval);
        runAutoScroll(direction=button.getAttribute('id'));
    })
})

function slide(direction='forward'){
    let active = slideContainer.querySelector('div.slide-item.active');
    let prev = slideContainer.querySelector('div.slide-item.prev');
    let next = slideContainer.querySelector('div.slide-item.next');

    let activeIndex = slideItems.indexOf(active);
    let newActiveIndex = direction=='forward' ? getNext(activeIndex, slideItems.length) : getPred(activeIndex, slideItems.length);

    let prevIndex = getPred(newActiveIndex, slideItems.length);
    let nextIndex =  getNext(newActiveIndex,slideItems.length);
 
    if(direction=='forward'){
        prev.style.zIndex = 0;
    }
    else {
        next.style.zIndex = 0;
    }

    slideItems[newActiveIndex].style.zIndex = 3;
    slideItems[newActiveIndex].style.filter = 'none';
    active.style.zIndex = 2;
    active.style.filter = 'blur(1px)';
    // slideItems[newActiveIndex].style.opacity = 1;
    // active.style.opacity = .6;

    if(direction=='backward'){
        slideItems[prevIndex].style.animation = 'toPrev .70s ease';
    }
    else {
        slideItems[nextIndex].style.animation = 'toNext .70s ease';
    }

    active.style.animation = `${direction} .75s ease-in-out`;
    slideItems[newActiveIndex].style.animation = `${direction=='forward' ? 'fromNext' : 'fromPrev'} .75s ease-in-out`;
    

    setTimeout((e) => {
        active.className = active.className.replace(/ active/, '');
        prev.className = prev.className.replace(/ prev/, '');
        next.className = next.className.replace(/ next/, '');
        
        slideItems[newActiveIndex].className += ' active';
        slideItems[prevIndex].className += ' prev';
        slideItems[nextIndex].className += ' next';
        
        active.style.animation = `none`;
        slideItems[newActiveIndex].style.animation = 'none';
        active.style.zIndex = 0;
        // active.style.opacity = .6;
    }, 700)
}

function getPred(index, max){
    return (--index < 0 ? (max - 1) : index); 
}

function getNext(index, max){
    return (++index) % max;
}


function runAutoScroll(direction){
    interval = setInterval((e) => {
        slide(direction=direction)
    }, 5000);
}

runAutoScroll();