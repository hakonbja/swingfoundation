'use strict';

// activate on page load
document.addEventListener('DOMContentLoaded', function() {
  addHamburgerFunction();
  addToggleSubmenus();
  setTopMargin();
  setHeaderBackgroundHeight();
  highlightSelectedMenuItems();
  addSubmenusClickEvent();
  addTabsFunction();
  sessionStorageTabSetting();
});

function sessionStorageTabSetting() {
  const tabNr = window.sessionStorage.getItem('schedule_tab');
  if (tabNr) {
    selectTabContent(tabNr);
  }
}

function addTabsFunction() {
  const tabs = document.querySelectorAll('#js-tabs-content .tabs li');
  for (const tab of tabs) {
    tab.addEventListener('click', function() {
      if (!tab.classList.contains('disabled')) {
        const tabNr = tab.classList[0];
        const nr = tabNr.substring(tabNr.length - 1);
        selectTabContent(nr);
      }
    });
  }
}

function selectTabContent(nr) {
  const selected = document.querySelectorAll('#js-tabs-content .selected');
  for (const item of selected) {
    item.classList.remove('selected');
  }
  const tab = document.querySelector('#js-tabs-content .tab-' + nr);
  const content = document.querySelector('#js-tabs-content .content-' + nr);
  if (tab) {
    tab.classList.add('selected');
    content.classList.add('selected');
    // write new tab number to sessionStorage
    window.sessionStorage.setItem('schedule_tab', nr);
  }
}

function addHamburgerFunction() {
  const mobileNavbar = document.getElementById('js-navbar__mobile');
  const hamburger = document.getElementById('js-hamburger');
  const navbarLogo = document.getElementById('js-navbar__logo__mobile');
  hamburger.addEventListener('click', function() {
    mobileNavbar.classList.toggle('open');
    hamburger.classList.toggle('open');
    navbarLogo.classList.toggle('open');
  });
}


function closeMobileNavbar() {
  const mobileNavbar = document.getElementById('js-navbar__mobile');
  const hamburger = document.getElementById('js-hamburger');
  const navbarLogo = document.getElementById('js-navbar__logo__mobile');

  mobileNavbar.classList.remove('open');
  hamburger.classList.remove('open');
  navbarLogo.classList.remove('open');
}

function addToggleSubmenus() {
  const menuParent = document.getElementsByClassName('menu-item-has-children');
  for (const parent of menuParent) {
    parent.addEventListener('click', function() {
      if (navbarIsMobile()) {
        parent.classList.toggle('open');
      }
    });
  }
}


function addSubmenusClickEvent() {
  const subMenu = document.querySelectorAll('#js-navbar__mobile .sub-menu a');
  for (const item of subMenu) {
    item.addEventListener('click', function() {
      closeMobileNavbar();
    });
  }
}


function setTopMargin() {
  const navDesktop = document.getElementById('js-navbar__desktop__wrapper');
  const navDeskHeight = navDesktop.offsetHeight;
  const navMobile = document.getElementById('js-navbar__mobile__wrapper');
  const navMobileHeight = navMobile.offsetHeight;

  if (!isFrontpage()) {
    const pageHeader = document.querySelector('.page-header');
    const pageHeaderHeight = pageHeader.offsetHeight;
    const content = document.querySelector('.content');
    const offset = -8;
    const newMargin = offset + pageHeaderHeight + navDeskHeight + navMobileHeight;
    content.style.marginTop = newMargin + 'px';
  }

  // also set top of anchors
  const anchors = document.getElementsByClassName('anchor');
  const navHeight = (navbarIsMobile()) ? navMobile : navDesktop;
  if (anchors.length > 0) {
    for (const anchor of anchors) {
      anchor.style.top = '-' + navHeight + 'px';
    }
  }
}

function setHeaderBackgroundHeight() {
  const pageHeader = document.querySelector('.page-header');
  const headerBackground = document.querySelector('.header-background');

  if (pageHeader && pageHeader.offsetWidth >= 450 && pageHeader.offsetHeight > 88) {
    headerBackground.style.height = pageHeader.offsetHeight - 16 + 'px';
  } else if (pageHeader) {
    headerBackground.style.height = pageHeader.offsetHeight - 12 + 'px';
  }
}

function isFrontpage() {
  const frontPage = document.querySelector('.front-page');
  if (frontPage) {
    return true;
  } else {
    return false;
  }
}

function navbarIsMobile() {
  const navbarMobile = document.getElementById('js-navbar__mobile__wrapper');
  const display = (navbarMobile.currentStyle) ? navbarMobile.currentStyle.display : getComputedStyle(navbarMobile, null).display;
  if (display === 'block') {
    return true;
  } else {
    return false;
  }
}

/* Hide header text, not navbar, on scroll */

window.onscroll = function() {
  if (!isFrontpage()) {
    const header = document.getElementsByTagName('header')[0];
    const headerText = document.getElementById('js-header-top').offsetHeight;
    const currentScrollPos = window.pageYOffset;
    if (currentScrollPos > headerText) {
      header.style.top = '-' + headerText + 'px';
    } else {
      header.style.top = '0';
    }
  }
};


/* enable highlighting on custom current-menu-items, only for sub-menu items */

function highlightSelectedMenuItems() {
  window.addEventListener('hashchange', highlightSelectedMenuItems, false);

  const href = window.location.href;
  const menuItems = document.querySelectorAll('ul.sub-menu a');
  for (const item of menuItems) {
    if (item.href === href) {
      item.classList.add('js-current-menu-item');
    } else {
      item.classList.remove('js-current-menu-item');
    }
  }
}
