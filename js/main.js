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
console.log("fsaaaredszerteaafdsf");
