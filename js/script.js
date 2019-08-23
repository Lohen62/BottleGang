var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true,
  pageDots: true,
  draggable: false,
  autoPlay: 4500,
  pauseAutoPlayOnHover: false,
  arrowShape:
  { 
    x0: 15,
    x1: 60, y1: 50,
    x2: 60, y2: 50,
    x3: 40
  },
selectedAttraction: 0.008,
friction: 0.18
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity( '.main-carousel', {
  // options
});



function animNav()
{
    var nav = document.querySelector(".navbar");
    var liste = document.querySelectorAll(".itemMenu");

    if(scrollY>0)
    {
        nav.classList.add("navbarActive");
        liste.forEach(michel => {
          michel.classList.add("itemMenuActive");
        });
    }
    else
    {
      nav.classList.remove("navbarActive");
      liste.forEach(michel => {
        michel.classList.remove("itemMenuActive");
      });
    }
}

addEventListener("scroll", animNav);