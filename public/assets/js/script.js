// user avatar

const userAvatar = document.querySelector('.user-avatar');
const userImage = userAvatar.querySelector('img');
const userIcon = userAvatar.querySelector('.user-icon');

const hasUserImage = true; 

if (hasUserImage) {
  userImage.src = "user.png"; 
  userImage.style.display = "block";
  userIcon.style.display = "none";
} else {
  userImage.style.display = "none";
  userIcon.style.display = "block";
}



// dropdowns notifications

function myFunction() {
  document.getElementById("notifys").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.notification-btn')) {
    var dropdowns = document.getElementsByClassName("notification-contents");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


// show sideNavigation

document.addEventListener('DOMContentLoaded', function() {
  var menuIcon = document.getElementById('menu-icon');
  var sideNavigation = document.getElementById('side-navigation');

  menuIcon.addEventListener('click', function() {
      sideNavigation.classList.toggle('show-side-navigation');
  });

});


// animation on read text dashboard

function animateText() {
  const messages = document.querySelectorAll(".message-read");
  messages.forEach(message => message.classList.add("animate"));
}
setInterval(animateText, 3000);  
window.onload = animateText; 


// MAIN WEBSITE INTERACTIVITY 

   /* move header
    * -------------------------------------------------- */
   const ssMoveHeader = function () {

    const $hero = $('.s-hero'),
          $hdr = $('.s-header'),
          triggerHeight = $hero.outerHeight() - 170;


    $WIN.on('scroll', function () {

        let loc = $WIN.scrollTop();

        if (loc > triggerHeight) {
            $hdr.addClass('sticky');
        } else {
            $hdr.removeClass('sticky');
        }

        if (loc > triggerHeight + 20) {
            $hdr.addClass('offset');
        } else {
            $hdr.removeClass('offset');
        }

        if (loc > triggerHeight + 150) {
            $hdr.addClass('scrolling');
        } else {
            $hdr.removeClass('scrolling');
        }

    });

};



/* mobile menu
* ---------------------------------------------------- */ 
const ssMobileMenu = function() {

    const $toggleButton = $('.header-menu-toggle');
    const $headerContent = $('.header-content');
    const $siteBody = $("body");

    $toggleButton.on('click', function(event){
        event.preventDefault();
        $toggleButton.toggleClass('is-clicked');
        $siteBody.toggleClass('menu-is-open');
    });

    $headerContent.find('.header-nav a, .btn').on("click", function() {

        // at 900px and below
        if (window.matchMedia('(max-width: 900px)').matches) {
            $toggleButton.toggleClass('is-clicked');
            $siteBody.toggleClass('menu-is-open');
        }
    });

    $WIN.on('resize', function() {

        // above 900px
        if (window.matchMedia('(min-width: 901px)').matches) {
            if ($siteBody.hasClass("menu-is-open")) $siteBody.removeClass("menu-is-open");
            if ($toggleButton.hasClass("is-clicked")) $toggleButton.removeClass("is-clicked");
        }
    });

};



