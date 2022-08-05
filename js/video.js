/*let videoList = document.querySelectorAll('.video__list-section .sud__listSection .list');


videoList.forEach(vid => {
    vid.onclick = () => {
        videoList.forEach(remove =>{remove.classList.remove('active')});
        vid.classList.add('active');
        let src = vid.querySelectorAll('.video__list-section .sud__listSection .list .list-video').src;
        let title = vid.querySelectorAll('.video__list-section .sud__listSection .list .list-title').innerHTML;
        document.querySelector('.video__container .section__video').src = src;
        document.querySelector('.conten.video__container .section__video').play();
        document.querySelector('.video__container .video__titel').innerHTML = title;
    };
});

*/

let videoList = document.querySelectorAll('.video-list-containerR .listR');

videoList.forEach(vid =>{
   vid.onclick = (e) =>{
      
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-videoR').src;
      let title = vid.querySelector('.list-titleR').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
      e.preventDefault();
   };
});



