/*const notificarBtn = document.querySelector('#btn_suscribir');

notificarBtn.addEventListener('click', () => {
    Notification.requestPermission().then(resultado => {
        console.log('Respuesta: ', resultado);
    })
});


const verNotificacion = document.querySelector('#enbiar-notificaciones');

verNotificacion.addEventListener('click', () => {
    if (Notification.permission === 'granted') {
        const notificacion = new Notification('Esta es la notificacion', {
            
        });

        notificacion.onclick = function(){
            window.open('http://google.com');
        }
    }
})
*/

let button = document.querySelector('button');
button.addEventListener('click', () => {
    if(!window.Notification) return;
   
    Notification
    .requestPermission()
    .then(showNotification)
});


function showNotification(permission){
    if(permission !== 'granted') return;
    let notification = new Notification('My Title', {
        body:"Hi, how are you today?",
        icon:'icon.png'        
    })
    notification.onclick = () => {
        // window.open('https://google.com')
        window.location.href= "https://www.google.com"
    }
}

