const menu = document.getElementById('header__menu');
const abrir = document.getElementById('header__btn-accion');
const cerrar = document.getElementById('header__cerrar');
const cerrarButonRef = document.getElementById('btn_ref');


//escuchar el evento del click

abrir.addEventListener('click',(e) =>{
    menu.classList.add('mostrar__menu')
})

cerrar.addEventListener('click',(e) =>{
    menu.classList.remove('mostrar__menu')

})

cerrarButonRef.addEventListener('click',(e) =>{
    menu.classList.remove('mostrar__menu')

})

