function burgerMenu(){
    const menu = document.querySelector('#menu')
    const burger = document.querySelector('.burger')

    burger.addEventListener('click', () => {
        burger.classList.toggle('active')
    })
}

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnAccount = document.querySelector('.account');
const iconClose = document.querySelector('.bebra');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
})

btnAccount.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
})

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
})
