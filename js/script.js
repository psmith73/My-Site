/*========== WAYPOINTS ==========*/

$(function(){ // a self calling function
    function onScrollInit( items, trigger ) { // a custom made function
        items.each( function() { //for every element in items run function
        var osElement = $(this), //set osElement to the current 
            osAnimationClass = osElement.attr('data-animation'), //get value of attribute data-animation type
            osAnimationDelay = osElement.attr('data-delay'); //get value of attribute data-delay time

            osElement.css({ //change css of element
                '-webkit-animation-delay':  osAnimationDelay, //for safari browsers
                '-moz-animation-delay':     osAnimationDelay, //for mozilla browsers
                'animation-delay':          osAnimationDelay //normal
            });

            var osTrigger = ( trigger ) ? trigger : osElement; //if trigger is present, set it to osTrigger. Else set osElement to osTrigger

            osTrigger.waypoint(function() { //scroll upwards and downwards
                osElement.addClass('animated').addClass(osAnimationClass).removeClass('hidden'); //add animated and the data-animation class to the element.
                },{
                    triggerOnce: true, //only once this animation should happen
                    offset: '74%' // animation should happen when the element is 70% below from the top of the browser window
            });
        });
    }

    onScrollInit( $('.os-animation') ); //function call with only items
    onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') ); //function call with items and trigger
});

/*========== NAVBAR TRANSPARENT TO SOLID ==========*/

$(document).ready(function() { //when document(DOM) loads completely. 
    // Transition effect for navbar 
    $(window).scroll(function() { //function is called while you scrolls 
      // checks if window is scrolled more than 300px, adds/removes solid class
      if($(this).scrollTop() > 300) { 
          $('.navbar').addClass('solid'); //add class 'solid' in any element which has class 'navbar'
      } else {
          $('.navbar').removeClass('solid'); //remove class 'solid' in any element which has class 'navbar'
      }
    });
});

/*========== CLOSE MOBILE NAV ON CLICK ==========*/

$(document).ready(function () { //when document loads completely.
$(document).click(function (event) { //click anywhere
    var clickover = $(event.target); //get the target element where you clicked
    var _opened = $(".navbar-collapse").hasClass("show"); //check if element with 'navbar-collapse' class has a class called show. Returns true and false.
    if (_opened === true && !clickover.hasClass("navbar-toggler")) { // if _opened is true and clickover(element we clicked) doesn't have 'navbar-toggler' class
        $(".navbar-toggler").click(); //toggle the navbar; close the navbar menu in mobile.
    }
});
});

/*========== SMOOTH SCROLLING TO LINKS ==========*/

$(document).ready(function(){ //document is loaded
// Add smooth scrolling to all links
$("a").on('click', function(event) {//click on any link;anchor tag;

// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") { //for e.g. website.com#home - #home
  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;
  //console.log('hash:',hash)

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({ //animate whole html and body elements
    scrollTop: $(hash).offset().top //scroll to the element with that hash
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash; //website.com - website.com#home
    //Optional remove "window.location.hash = hash;" to prevent transparent navbar on load
  });
} // End if
});
});

/*========== BOUNCING DOWN ARROW ==========*/
//down arrow at top
$(document).ready(function(){
$(window).scroll(function(){ //browser scroll 
$(".arrow").css("opacity", 1 - $(window).scrollTop() / 250); //set opacity css from 1 to -(negative) infinity of element with class 'arrow'
//250 is fade pixels
});
});

/*========== TOP SCROLL BUTTON ==========*/

$(document).ready(function() { //when document is ready
$(window).scroll(function() { //when webpage is scrolled
if ($(this).scrollTop() > 500) { //if scroll from top is more than 500
  $('.top-scroll').fadeIn(); //display element with class 'top-scroll'; opacity increases
} else { //if not
  $('.top-scroll').fadeOut(); //hide element with class 'top-scroll'; opacity decreases
}
});
});

/*========== CONTACT FORM ==========*/
$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();


    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    // data = JSON object that contact.php returns

                    // we recieve the type of the message: success x danger and apply it to the 
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#contact-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
