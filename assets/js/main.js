// import '../css/style.css'

console.log('hello from js bangssss');

const menuToggle = document.getElementById('menu-toggle1');
const menuNav = document.getElementById('menu');

menuToggle.addEventListener('click', function () {
  console.log('test listenere');
  // menuNav.classList.toggle('menu-nav');
})

console.table([menuNav, menuToggle])