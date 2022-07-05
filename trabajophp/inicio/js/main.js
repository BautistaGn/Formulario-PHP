const lineas = document.querySelector('.toggle-btn');
console.log(lineas);
lineas.addEventListener('click', function(){
   document.getElementById('sidebar').classList.toggle('active')
});