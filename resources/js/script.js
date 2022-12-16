let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

let cartItem = document.querySelector('.cart-items-container');


window.onscroll = () =>{
    navbar.classList.remove('active');
}