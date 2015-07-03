jQuery( "#authors li" ).each(function( index ) { //for each list item
    var name = jQuery(this).find('strong').html(); //get the string with that has the authorâ€™s name
    var pos = name.indexOf(" ("); //get everything before the opening parenthesis

    name = name.slice(0, pos); //only get the name we want
    jQuery(this).find('select option:contains(' + name + ')').attr("selected",true); //select the userâ€™s name from the closest select element for each list item
});
