(function($) {
var jQueryaffectedElements = jQuery("body, p, h1, h2, h3, h4, h5, h6, div, a, span, html, ul, li, ol, audio, br, hr, form, section, font, head, header, i, input, img, label, table"); // Can be extended, ex. $("div, p, span.someClass")
// Storing the original size in a data attribute so size can be reset
jQueryaffectedElements.each( function(){
  var jQuerythis = jQuery(this);
  jQuerythis.data("orig-size",jQuerythis.css("font-size") );
});

jQuery("#btn-increase_wp_font_rp").click(function(){
  changeFontSize(1);
})

jQuery("#btn-decrease_wp_font_rp").click(function(){
  changeFontSize(-1);
})

jQuery("#btn-orig_wp_font_rp").click(function(){
  jQueryaffectedElements.each( function(){
        var jQuerythis = jQuery(this);
        jQuerythis.css( "font-size" , jQuerythis.data("orig-size") );
   });
})
function changeFontSize(direction){
    jQueryaffectedElements.each( function(){
        var jQuerythis = jQuery(this);
        jQuerythis.css( "font-size" , parseInt(jQuerythis.css("font-size"))+direction );
    });
}

})(jQuery);
