console.log('wokting')

let burger = document.querySelector('.nav__burger')
let burgerLine = document.querySelectorAll('.nav__burger-stripe')

let site = document.querySelector('.site')
let modal = document.createElement('div')
modal.className = 'modal'
site.appendChild(modal)
let modalBox1 = document.createElement('div')
let modalBox2 = document.createElement('div')
modalBox1.className = 'modal-box'
modalBox2.className = 'modal-box'
modal.appendChild(modalBox1)
modal.appendChild(modalBox2)
let modalText1 = document.createElement('a')
let modalText2 = document.createElement('a')
modalText1.href ='/about'
modalText2.href ='/contacts'
modalText1.className = 'modal-text'
modalText2.className = 'modal-text'
modalText1.innerHTML = 'about'
modalText2.innerHTML = 'contact'
modalBox1.appendChild(modalText1)
modalBox2.appendChild(modalText2)

let heading = document.querySelector('.heading')

let fadeOutElements = document.querySelectorAll('header, main, footer')

burger.addEventListener('mouseenter', () => {
    burgerLine.forEach(line => line.style.backgroundColor = '#49f002')
})
burger.addEventListener('mouseleave', () => {
    if (burgerLine[0].classList.contains('nav__burger-stripe--bright')){
        burgerLine.forEach(line => line.style.backgroundColor = 'white')
    } else {
        burgerLine.forEach(line => line.style.backgroundColor = 'black')
    }
})

console.log(burgerLine[0].classList.contains('nav__burger-stripe--bright'))

burger.addEventListener('click', () => {

    fadeOutElements.forEach(el => {
        el.style.opacity = 0;
        el.style.zIndex = -1
    })
    modal.style.opacity = 1;
    modal.style.zIndex = 2;

})

