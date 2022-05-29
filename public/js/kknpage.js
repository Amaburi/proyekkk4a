document.querySelectorAll('.video-container img').forEach(img =>{
  img.onclick = () =>{
    document.querySelector('.popup-video').style.display = 'block';
    document.querySelector('.popup-video video').src = img.getAttribute('src');
  }
} );
document.querySelector('.popup-video span').onclick = () => {
  document.querySelector('.popup-video').style.display = 'none';
}