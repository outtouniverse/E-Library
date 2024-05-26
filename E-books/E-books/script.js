'use strict';

// const readMoreLink = document.querySelector('.btn-link');

//         // Add click event listener
//         readMoreLink.addEventListener('click', function(event) {
//             event.preventDefault(); // Prevent default link behavior
//             window.location.href = 'readmore.html';
//         });

//  // Find all read more links
//  const readMoreLinks = document.querySelectorAll('.btn-link');
    
 // Add click event listener to each link
//  readMoreLinks.forEach(link => {
//      link.addEventListener('click', function(event) {
//          event.preventDefault(); // Prevent default link behavior

//          // Get the href attribute value (URL)
//          const href = this.getAttribute('href');

//          // Navigate to the URL
//          window.location.href = href;
//      });
//  });




//  const editButtons = document.querySelectorAll('.edit-btn');

//         // Add click event listener to each button
//         editButtons.forEach(button => {
//             button.addEventListener('click', function(event) {
                
//               // Here you can add the logic to handle the edit action
//                 // For example, you can redirect to an edit page or show a modal for editing
//                 // alert('Edit functionality to be implemented!');
//                 console.log('Edit button clicked');

//             });
//         });


/**
 * add event on element
 */

const addEventOnelem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * toggle navbar
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navToggler = document.querySelector("[data-nav-toggler]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
}

addEventOnelem(navToggler, 'click', toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
}

addEventOnelem(navbarLinks, "click", closeNavbar);



/**
 * header active on scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const activeHeader = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

addEventOnelem(window, "scroll", activeHeader);



/**
 * filter tab
 */

const tabCard = document.querySelectorAll("[data-tab-card]");

let lastTabCard = tabCard[0];

const navigateTab = function () {
  lastTabCard.classList.remove("active");
  this.classList.add("active");
  lastTabCard = this;
}

addEventOnelem(tabCard, "click", navigateTab);