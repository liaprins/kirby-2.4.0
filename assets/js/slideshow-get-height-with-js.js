function getOffset(el) {
  el = el.getBoundingClientRect();
  return {
    left: el.left + window.scrollX,
    top: el.top + window.scrollY
  }
}


function slideshow() {

    var galleryList = document.getElementsByClassName('gallery');

    var container = document.getElementById('slideshowtest');

    // for each gallery
    for (i = 0; i < galleryList.length; i++) {

        // create div for all but the first slide
        var advanceContainer = document.createElement('div');
        galleryList[i].appendChild(advanceContainer);
        advanceContainer.setAttribute('id', 'advancecontainer');

        //create dots container
        var dotsContainer = document.createElement('div');
        galleryList[i].appendChild(dotsContainer);


        // for each slide within each gallery (but subtract 2 to keep from counting the dotsContainer and advanceContainer as children)
        for (j = 1; j < (galleryList[i].children.length - 2); j++) {
        // for (j = 0; j < (galleryList[i].children.length - 2); j++) {
            // create dots
            var dot = document.createElement('span');
            dot.innerHTML = '+';
            // put dots into dots container
            dotsContainer.appendChild(dot);

            // !!! THIS CHUNK OF CODE WILL NEED TO BE MEDIAQUERIED WITHIN JS, VIA if-statements on window.screenWidth (see menu.js)
            var slide = galleryList[i].children;
            slide[j].style.position = "absolute";
            slide[j].style.left = 'calc(700px * ' + j + ')';    // this size works for 1225+ only
            // slide[j].style.top = '-' + slide[0].offsetHeight + 'px';
            // var rect = slide[0].getBoundingClientRect();    // vertical location

            /*
            var bodyRect = document.body.getBoundingClientRect(),
            elemRect = slide[0].getBoundingClientRect(),
            offset   = elemRect.top - bodyRect.top;
            slide[j].style.top = (offset - 184) + 'px';
            */

            var testing = getOffset(slide[j]).top;
            slide[j].style.top = (testing - slide[0].offsetHeight - 234) + 'px';

        }   // close j
    }   // close i

}   // close function

window.addEventListener('DOMContentLoaded', slideshow, false);