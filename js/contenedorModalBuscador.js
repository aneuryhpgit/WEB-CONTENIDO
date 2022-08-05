const btnLanzarModal = document.getElementById('lanzar__modal');
const btnOcultarModal = document.getElementById('shear__cerrar');
const ocultarBoton = document.getElementById('cerrar_boton');
const contennedorModal = document.getElementById('contenedor__modal');

btnLanzarModal.addEventListener('click', (e) => {
    e.preventDefault();
    contennedorModal.classList.add('mostrar');

});

btnOcultarModal.addEventListener('click', (e) =>{
    contennedorModal.classList.remove('mostrar');

});