
$(document).ready(function(){
    //Add a jQuery onClick event to slide the menu down
    $('.navigation-btn').click(function(){
        $('.navigation').slideToggle('slow', function(){
            //Once sliding has finished, check whether the navigation is hidden
            //or not. If it is hidden then remove the display part of the
            //style attribute and replace it with a css equivilant.
            //Remove the CSS equivilant otherwise
            if ( $(this).is(':hidden') )
            {
                $(this).addClass('hiddenMenu');
                $(this).css('display', '');
            }
            else
            {
                $(this).removeClass('hiddenMenu');
            }
        });
    });
});