let modal = document.getElementById('simpleModal');
let modalBtn = document.getElementById('modalBtn');
let closeBtn = document.querySelector('.closeBtn');
let submitBtn = document.getElementById('submit');

modalBtn.addEventListener('click', () => {
    modal.style.display = 'block'
})

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
})

if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}