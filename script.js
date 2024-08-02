function toggleMenu() {
  const navbar = document.querySelector('#site-header');
  const burger = document.querySelector('#burger');
  const navLinks = document.querySelectorAll('.menu-item a');
  burger.addEventListener('click', ()=>{
      navbar.classList.toggle('show-nav');
  }
  );
  navLinks.forEach(link=>{
      link.addEventListener('click', ()=>{
          navbar.classList.remove('show-nav');
      }
      );
  }
  );
}
toggleMenu();
function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}

// comparison
const containers = document.querySelectorAll('.comparison__container');
const sliders = document.querySelectorAll('.comparison__slider');

sliders.forEach((slider, index) => {
  slider.addEventListener('input', (e) => {
      containers[index].style.setProperty('--position', `${e.target.value}%`);
  });
});