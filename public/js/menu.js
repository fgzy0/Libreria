

let menuBtn2 = document.querySelector('.menu-btn-2');
let menu2 = document.querySelector('.menu-2');
menuBtn2.addEventListener('click', function(){
	menu2.classList.toggle('active');
  menuBtn2.classList.toggle('active');
})

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnAccount = document.querySelector('.account');
const btnAccount2 = document.querySelector('.account-2');
const iconClose = document.querySelector('.bebra');
const dopMenu = document.querySelector('.dop-ul');
const btnMenu = document.querySelector('#btn-menu');
const background = document.querySelector('.background');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
    
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
})

btnAccount.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
    background.classList.remove('background');
    background.classList.add('blur');
})

btnAccount2.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
    menu2.classList.toggle('active');
    menuBtn2.classList.toggle('active');
    background.classList.remove('background');
    background.classList.add('blur');
})

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
    background.classList.remove('blur');
    background.classList.add('background');
})

btnMenu.addEventListener('click', () => {
    dopMenu.classList.add('active');
})

setInterval(function(){
    dopMenu.classList.remove('active');
}, 6000);


