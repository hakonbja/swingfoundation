'use strict'

//activate on page load
document.addEventListener("DOMContentLoaded", function(event) {
  addToggleMobileNavbar();
  addToggleSubmenus();
  setTopMargin();
  setHeaderBackgroundHeight();
  highlightSelectedMenuItems();
  addSubmenusClickEvent();
});



function addToggleMobileNavbar() {
  let mobileNavbar = document.getElementById('js-navbar__mobile');
  let hamburger = document.getElementById('js-hamburger');
  let navbarLogo = document.getElementById("js-navbar__logo__mobile");
  hamburger.addEventListener("click", function(ev) {
    mobileNavbar.classList.toggle('open');
    hamburger.classList.toggle('open');
    navbarLogo.classList.toggle('open');
  });
}

function closeMobileNavbar() {
  let mobileNavbar = document.getElementById('js-navbar__mobile');
  let hamburger = document.getElementById('js-hamburger');
  let navbarLogo = document.getElementById("js-navbar__logo__mobile");

  mobileNavbar.classList.remove('open');
  hamburger.classList.remove('open');
  navbarLogo.classList.remove('open');
}

function addToggleSubmenus() {
  let menuParent = document.getElementsByClassName("menu-item-has-children");
  for (let parent of menuParent) {
    parent.addEventListener("click", function() {
      if (navbarIsMobile()) {
        this.classList.toggle("open");
      }
    });
  }
}

function closeSubmenus() {
  let menuParent = document.getElementsByClassName("menu-item-has-children");
  for (let parent of menuParent) {
    parent.classList.remove("open");
  }
  console.log("closeSubmenus() finished running.");
}

function addSubmenusClickEvent() {
  let subMenu = document.querySelectorAll("#js-navbar__mobile .sub-menu li a")
  for (let item of subMenu) {
    item.addEventListener("click", function() {
      closeMobileNavbar();
    });
  }
}


function setTopMargin() {
  let navbarDesktop = document.getElementById("js-navbar__desktop__wrapper").offsetHeight;
  let navbarMobile = document.getElementById("js-navbar__mobile__wrapper").offsetHeight;

  if (!isFrontpage()) {
    let pageHeader = document.getElementsByClassName("page-header")[0].offsetHeight,
    content = document.getElementsByClassName("content")[0],
    offset = -8,
    newMargin = offset + pageHeader + navbarDesktop + navbarMobile;
    content.style.marginTop = newMargin + "px";
  }

  // also set top of anchors
  let anchors = document.getElementsByClassName("anchor");
  let navbarHeight = (navbarIsMobile()) ? navbarMobile : navbarDesktop;
  if (anchors.length > 0) {
    for (let anchor of anchors) {
      anchor.style.top = "-" + navbarHeight + "px";
    }
  }

}

function setHeaderBackgroundHeight() {
  let pageHeader = document.getElementsByClassName("page-header")[0],
  headerBackground = document.getElementsByClassName("header-background")[0];

  if (pageHeader && pageHeader.offsetWidth >= 450 && pageHeader.offsetHeight > 88) {
    headerBackground.style.height = pageHeader.offsetHeight - 16 + "px";
  } else if (pageHeader) {
    headerBackground.style.height = pageHeader.offsetHeight - 12 + "px";
  }
}

function isFrontpage() {
  let frontPage = document.getElementsByClassName("front-page")[0];
  if (frontPage) {
    return true;
  } else {
    return false;
  }
}

function navbarIsMobile() {
  let navbarMobile = document.getElementById("js-navbar__mobile__wrapper");
  let display = (navbarMobile.currentStyle) ? navbarMobile.currentStyle.display : getComputedStyle(navbarMobile, null).display;
  if (display === "block") {
    return true;
  } else {
    return false;
  }
}

/* Hide header text, not navbar, on scroll */

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  if (!isFrontpage()) {
    let header = document.getElementsByTagName("header")[0];
    let headerText = document.getElementById("js-header-top").offsetHeight;
    let currentScrollPos = window.pageYOffset;
    if (currentScrollPos > headerText) {
      header.style.top = "-" + headerText + "px";
    } else {
      header.style.top = "0";
    }
  }
}

/* Show header when mouse is close to top of viewport - NOT IN USE */

// document.onmousemove = handleMouseMove;
function handleMouseMove(event) {
    let eventDoc, doc, body;

    event = event || window.event; // IE-ism

    // If pageX/Y aren't available and clientX/Y are,
    // calculate pageX/Y - logic taken from jQuery.
    // (This is to support old IE)
    if (event.pageX == null && event.clientX != null) {
        eventDoc = (event.target && event.target.ownerDocument) || document;
        doc = eventDoc.documentElement;
        body = eventDoc.body;

        event.pageX = event.clientX +
          (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
          (doc && doc.clientLeft || body && body.clientLeft || 0);
        event.pageY = event.clientY +
          (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
          (doc && doc.clientTop  || body && body.clientTop  || 0 );
    }
  // console.log(event.clientY);
  let headerTop = document.getElementById("js-header-top");
  let header = document.getElementsByTagName("header")[0];
  if (event.clientY < 80) {
    if (!isFrontpage()) {
      header.style.top = "-" + headerTop.offsetHeight + "px";
    } else {
      header.style.top = "0px";
    }
  }
}

/* enable highlighting on custom current-menu-items, only for sub-menu items */

function highlightSelectedMenuItems() {
  window.addEventListener("hashchange", highlightSelectedMenuItems, false);

  let href = window.location.href;
  let menuItems = document.querySelectorAll("ul.sub-menu a");
  for (let item of menuItems) {
    if (item.href === href) {
      item.classList.add("js-current-menu-item");
    } else {
      item.classList.remove("js-current-menu-item");
    }
  }
}


  // if (prevScrollpos > currentScrollPos) {
  //   header.style.top = "0";
  // } else {
  //   header.style.top = "-" + headerHeight + "px";
  // }




// Use this maybe later
// all classes slider
var slider = document.getElementById("slider"),
    sliderItems = document.getElementById("items"),
    prev = document.getElementById("prev"),
    next = document.getElementById("next");

// slide(slider, sliderItems, prev, next);

function slide(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      firstSlide = slides[0],
      lastSlide = slides[slidesLength - 1],
      // cloneFirst = firstSlide.cloneNode(true),
      // cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;

  // Clone first and last slide
  // items.appendChild(cloneFirst);
  // items.insertBefore(cloneLast, firstSlide);
  // wrapper.classList.add('loaded');

  // Mouse and Touch events
  items.onmousedown = dragStart;

  // Touch events
  items.addEventListener('touchstart', dragStart);
  items.addEventListener('touchend', dragEnd);
  items.addEventListener('touchmove', dragAction);

  // Click events
  prev.addEventListener('click', function () { shiftSlide(-1) });
  next.addEventListener('click', function () { shiftSlide(1) });

  // Transition events
  items.addEventListener('transitionend', checkIndex);

  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;

    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  function dragAction (e) {
    e = e || window.event;

    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    items.style.left = (items.offsetLeft - posX2) + "px";
  }

  function dragEnd (e) {
    posFinal = items.offsetLeft;
    // if (posFinal - posInitial < -threshold) {
    //   shiftSlide(1, 'drag');
    // } else if (posFinal - posInitial > threshold) {
    //   shiftSlide(-1, 'drag');
    // } else {
    //   items.style.left = (posInitial) + "px";
    // }


    document.onmouseup = null;
    document.onmousemove = null;
  }

  function shiftSlide(dir, action) {
    items.classList.add('shifting');

    if (allowShift) {
      if (!action) { posInitial = items.offsetLeft; }

      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;
      }
    };

    allowShift = false;
  }

  function checkIndex (){
    items.classList.remove('shifting');

    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }

    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }

    allowShift = true;
  }
}
