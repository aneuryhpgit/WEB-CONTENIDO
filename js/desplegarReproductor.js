document.querySelectorAll('.contenedor__segundo .video__list-section .sud__listSection .listSection__interior .list-videoM').forEach(vid => {
    vid.onclick = (e) => {
        e.preventDefault();
        document.querySelector('.contenedor-de-reproduccion').style.display = 'block';
        document.querySelector('.contenedor-de-reproduccion .main-video-container .caja_reproductor .reproductor').src = vid.getAttribute('src');

    }

});





