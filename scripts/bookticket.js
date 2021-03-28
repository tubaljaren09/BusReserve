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

// Close modal without click x button
window.onclick = function(e){
    if(e.target == modal){
        modal.style.display = "none";
    }
}
// Price 
document.getElementById('route').addEventListener('change', () => {
    let route = document.getElementById('route');
    let value = route.options[route.selectedIndex].value;

    if (value == 'Manila to Cebu'){
        document.getElementById('price').innerHTML='&#8369;1,000';
    }
    if (value == 'Manila to Bicol'){
        document.getElementById('price').innerHTML='&#8369;800';
    }
    if (value == 'Manila to Bataan'){
        document.getElementById('price').innerHTML='&#8369;500';
    }
});

// Prevent refresh
if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}