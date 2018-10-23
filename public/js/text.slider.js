$(document).ready(function () {
    //rotation speed and timer
    var speed = 50000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
/**************************************************************************/
$(document).ready(function () {
    //rotation speed and timer
    var speed_industries = 50000;
    
    var run_industries = setInterval(rotate, speed_industries);
    var slides_industries = $('.slide-industries');
    var container_industries = $('#slides-industries ul');
    var elm_industries = container_industries.find(':first-child').prop("tagName");
    var item_width_industries = container_industries.width();
    var previous_industries = 'prev-industries'; //id of previous button
    var next_industries = 'next-industries'; //id of next button
    slides_industries.width(item_width_industries); //set the slides to the correct pixel width
    container_industries.parent().width(item_width_industries);
    container_industries.width(slides_industries.length * item_width_industries); //set the slides container to the correct total width
    container_industries.find(elm_industries + ':first').before(container_industries.find(elm_industries + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons-industries a').click(function (e) {
        //slide the item
        
        if (container_industries.is(':animated')) {
            return false;
        }
        if (e.target.id == previous_industries) {
            container_industries.stop().animate({
                'left': 0
            }, 1500, function () {
                container_industries.find(elm_industries + ':first').before(container_industries.find(elm_industries + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next_industries) {
            container_industries.stop().animate({
                'left': item_width_industries * -2
            }, 1500, function () {
                container_industries.find(elm_industries + ':last').after(container_industries.find(elm_industries + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container_industries.parent().mouseenter(function () {
        clearInterval(run_industries);
    }).mouseleave(function () {
        run_industries = setInterval(rotate, speed_industries);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container_industries.css({
            'left': -1 * item_width_industries
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next-industries').click();
}