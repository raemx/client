//Responsive navigation menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("active");
  navigation.classList.toggle("active");
});





window.addEventListener('scroll', reveal);

function reveal(){
  var reveals = document.querySelectorAll('.reveal');

  for(var i = 0; i < reveals.length; i++){

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 50;

    if(revealtop < windowheight - revealpoint){
      reveals[i].classList.add('active');
    }
    else{
      reveals[i].classList.remove('active');
    }
  }
}




   
window.addEventListener('scroll', reveal2);

function reveal2(){
  var reveals = document.querySelectorAll('.reveal2');

  for(var i = 0; i < reveals.length; i++){

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 5;

    if(revealtop < windowheight - revealpoint){
      reveals[i].classList.add('active');
    }
    else{
      reveals[i].classList.remove('active');
    }
  }
}

//Show columns on index
const pagecontain = document.querySelector('.page-contain');
const add = document.querySelector('#add');

add.addEventListener('click', () => {
  pagecontain.classList.add('show');
})

 
//Typewriter effect on index
const texts = ['NZUBE UFODIKE', 'INVESTOR', 'ENTREPRENEUR', 'TV PRODUCER', 'DIRECTOR'];
  let count = 0;
  let index = 0;
  let text = "";
  let l = "";
  
  (function type(){
      if (count === texts.length){
          count = 0;
      }
      text = texts[count]
      l = text.slice(0, ++index);
  
      document.querySelector(".typing").textContent = l;
      if (l.length === text.length){
          count++;
          index = 0;
      }
      setTimeout(type, 450);
  }());

  //Contact page validation 
  function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    let y = document.forms["myForm"]["femail"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    } else if (y == "") {
      alert("Email must be filled out");
      return false;
  
  }
}

