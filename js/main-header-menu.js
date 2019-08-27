// mobile size menu
const mainHeader = document.querySelector(".main-header")
const dropdownMenu = document.querySelector(".dropdown-menu ul")
const dropdownMenuItems = document.querySelectorAll(".dropdown-menu-item")
const HEADER_HEIGHT = 70
const DROPDOWN_MENU_HEIGHT = 200;
const TOP_DISTANCE_TO_HIDE_THE_HEADER = 330

// SHOW/HIDE MAIN HEADER ON SCROLL
// const showMainHeader = () => mainHeader.style.top = "0"

let previousScrollPosition = window.pageYOffset

const toggleMainHeader = window.onscroll = () => {
    let currentScrollPosition = window.pageYOffset
    // if (previousScrollPosition > currentScrollPosition || currentScrollPosition < TOP_DISTANCE_TO_HIDE_THE_HEADER) showMainHeader()

    previousScrollPosition = currentScrollPosition
}


// TOGGLE DROPDOWN MENU
let dropdownMenuState = 0
const openDropdownMenu = () => dropdownMenu.style.height = `${DROPDOWN_MENU_HEIGHT}px`

const closeDropdownMenu = () => {
    dropdownMenuState = 0
    dropdownMenu.style.height = "0"
}

const toggleDropdownMenu = n => {
    dropdownMenuState += n
    switch (dropdownMenuState) {
        case 1:
            openDropdownMenu()
            break
        case 2:
            closeDropdownMenu()
            break
        default:
            closeDropdownMenu()
    }
}

const closeDropdownMenuSelectingItem = (() => dropdownMenuItems.forEach((item) => item.addEventListener("click", closeDropdownMenu)))()

// menu End


 
/*-------scorll animation -------------*/

jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
		$animatables.each(function(i) {
       var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
			}
    });

	};
  
  // Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});

