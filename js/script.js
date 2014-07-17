/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
    $("#consulta_experto").validate();
    $("#newsletter").validate();

    $("a.submit_consulta").click(function (e) {
    	$("#consulta_experto").submit();
    	return false;
    });


    $("a.newsletter").click(function (e) {
    	$("#newsletter").submit();
    	return false;
    });
    var mostrar=1;

    $("a.boton").click(function(e){
        id=this.id.split("-");
        id=id[1];

        $("#ver-"+mostrar).removeClass("active");

         $("#mostrar-"+mostrar).fadeOut( "fast", function() {
            $("#mostrar-"+id).fadeIn();
            mostrar=id;
            $("#ver-"+id).addClass("active");
         });

    });

  }
};




})(jQuery, Drupal, this, this.document);
