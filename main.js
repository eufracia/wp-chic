
var navBtn = document.querySelector('#header-nav-button');

navBtn.addEventListener('click', function(e) {
  var navMenu = document.querySelector('#header-nav');
  navMenu.classList.toggle('header-navs-ul-active');
});
