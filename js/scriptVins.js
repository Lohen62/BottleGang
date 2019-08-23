// external js: flickity.pkgd.js

var carouselContainers = document.querySelectorAll('.wine');

for ( var i=0; i < carouselContainers.length; i++ ) {
  var container = carouselContainers[i];
  initCarouselContainer( container );
}

function initCarouselContainer( container ) {
  var carousel = container.querySelector('.main-carousel');
var flkty = new Flickity( carousel , {
  // options
  cellAlign: 'left',
  contain: true,
  pageDots: false,
  draggable: true,
  autoPlay: false,
selectedAttraction: 0.008,
friction: 0.18,
groupCells : 4
});


  
}



function animNav()
{
    var nav = document.querySelector(".navbar");
    var liste = document.querySelectorAll(".itemMenu");
  var caddie = document.querySelector(".panier");
    if(scrollY>0)
    {
        nav.classList.add("navbarActive");
        liste.forEach(michel => {
          michel.classList.add("itemMenuActive");
        });
        caddie.classList.add("panierActive");
    }
    else
    {
      nav.classList.remove("navbarActive");
      liste.forEach(michel => {
        michel.classList.remove("itemMenuActive");
      });
      caddie.classList.remove("panierActive");
    }
}

addEventListener("scroll", animNav);



// var elem = document.querySelector('.main-carousel');
// var flkty = new Flickity( elem, {
//   // options
//   cellAlign: 'left',
//   contain: true,
//   pageDots: false,
//   draggable: true,
//   autoPlay: false,
// selectedAttraction: 0.008,
// friction: 0.18,
// groupCells : 4
// });

// // element argument can be a selector string
// //   for an individual element
// var flkty = new Flickity( '.main-carousel', {
//   // options
// });
// console.log("fsaaaredszertaeaafdsf");



