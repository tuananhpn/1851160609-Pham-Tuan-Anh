
function myFunction() {
    var x = document.getElementById("mytopnav");
    if (x.className === "main-nav") {
      x.className += " responsive";
    } else {
      x.className = "main-nav";
    }
}
// const navSlide = () => {
//     const checkbtn = document.querySelector('.checkbtn');
//     const nav = document.querySelector('main-nav');
//     checkbtn.addEventListener('click',() =>{
//         nav.classList.toggle('nav-active');
//         main-nav.forEach((link, index) =>{
//             if(link.style.animation){
//                 link.style.animation = '';
//             }else{
//                 link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 0
//             }
//         });

//     });
// }
// navSlide();