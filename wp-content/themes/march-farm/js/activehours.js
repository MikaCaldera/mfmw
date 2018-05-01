console.log('active-hours.js loaded successfully');


jQuery(document).ready(function($){

    // get the current day
    var date_obj = new Date();
    var today = date_obj.getDay();
    // because javascript doesn't have day names in date functions, we make a dictionary object
    day_dict = {
        1: 'monday',
        2: 'tuesday',
        3: 'wednesday',
        4: 'thursday',
        5: 'friday',
        6: 'saturday',
        7: 'sunday'
    };

    // loop through the off canvas menu list, and add the class to make the current day purple
    $('.off-canvas-menu-hours').each(function(elem){
        // check the current day against each of the elements, and... add the class for purple text
        if($(this).data('day') === day_dict[today]){
            $(this).addClass('current-hours');
        } else {
            // there's no need to remove a class that isn't there in the first place, but... just in case...
            $(this).removeClass('current-hours');
        }
    });

    // loop through the mobile widget list, add the class to make the current day purple, hide all non-current days
    $('.hours-widget-item').each(function(elem){
        // check the current day against each of the elements, and... add the class for purple text
        if($(this).data('day') === day_dict[today]){
            $(this).addClass('current-hours');
        } else {
            // there's no need to remove a class that isn't there in the first place, but... just in case...
            $(this).hide();
        }
    });

    $('#library-hours-dropdown-button').click(function(){
        // change the arrow to direction
        $('#library-hours-dropdown-button').toggleClass('library-hours-down library-hours-up');

        $('.hours-widget-item').each(function(elem){
            // check the current day against each of the elements, and... add the class for purple text
            if($(this).data('day') !== day_dict[today]){
                $(this).toggle('slide');
            }
        });
    });





}); // end document.ready()
