const aboutSection = document.querySelector('#aboutSection');
const nav = document.querySelector('nav');
const headerContent = document.querySelector('.header-scroll')
const aboutImage = document.querySelector('#aboutImage')

let navHeight = nav.scrollHeight

function inViewPort(el){
  let rect = el.getBoundingClientRect()
  return(
    (rect.top <= 0 && rect.bottom >= 0) || 
    (rect.bottom >= window.innerHeight && rect.top <= window.innerHeight)||
    (rect.top >= 0 && rect.bottom <= window.innerHeight)
  )
}
function moveHeader(){
  // let top = window.scrollY;
  let mainOnTop = headerContent.getBoundingClientRect().top - navHeight
// console.log(inViewPort(aboutImage))
  mainOnTop< 0 
  ? nav.classList.add('begin-scroll')
  : nav.classList.remove('begin-scroll')

  // headerContent.style.transform = `translateY(-${top/1.5}px)`

  window.requestAnimationFrame(moveHeader)

}

window.requestAnimationFrame(moveHeader)


const navbarToggler = document.querySelector('.navbar-toggler');
const navbar = document.querySelector('.navbar-nav');
navbarToggler.addEventListener('click', (e)=>{

    const value = navbarToggler.getAttribute('aria-expanded')

    if(value === 'false'){
      document.body.classList.add('no-scroll');
      navbar.classList.add('show');
      navbarToggler.setAttribute('aria-expanded', "true");


    } else if (value === 'true'){
     document.body.classList.remove('no-scroll');
      navbar.classList.remove('show');
      navbarToggler.setAttribute('aria-expanded', "false");
    }
       
})




if(document.querySelector('.testimonial-slider')){
  $(document).ready(function(){
   
    $('.testimonial-slider').slick({
        dots: true,
        autoplay:true,
        infinite: true,
        centerMode: true,
        centerPadding: '300px',
        slidesToShow: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '100px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '10px',
              slidesToShow: 1
            }
          }
        ]
      });
    
    })
    

}

