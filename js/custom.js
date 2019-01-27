function showMobileMenu() { 

  var mobileMenu = document.getElementById("primaryMenuWrapper");
  var burgerMenuButton = document.getElementById("mobileMenuBurgerButton");
  mobileMenu.classList.toggle("show");
  mobileMenuBurgerButton.classList.toggle("is-active");
  document.body.classList.toggle("unscrollable");

}

window.onload = function() { 
  let currentYear = new Date().getFullYear();
  console.log(currentYear);
  console.log('hello');
  let el = document.querySelector('.year');
  el.innerHTML = currentYear;
}

document.getElementById('copyright_date').innerHTML = '<a href="https://www.johnyang.co">WordPress Design &amp; Development by J.Y.</a>';