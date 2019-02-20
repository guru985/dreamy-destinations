(function(jQuery) {
  jQuery.fn.menumaker = function(options) {  
   var cssmenu = jQuery(this), settings = jQuery.extend({
     format: "dropdown",
     sticky: false
   }, options);
   return this.each(function() {
     jQuery(this).find(".button").on('click', function(){
       jQuery(this).toggleClass('menu-opened');
       var mainmenu = jQuery(this).next('ul');
       if (mainmenu.hasClass('open')) { 
         mainmenu.slideToggle().removeClass('open');
       }
       else {
         mainmenu.slideToggle().addClass('open');
         if (settings.format === "dropdown") {
           mainmenu.find('ul').show();
         }
       }
     });
     cssmenu.find('li ul').parent().addClass('has-sub');
     multiTg = function() {
       cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
       cssmenu.find('.submenu-button').on('click', function() {
         jQuery(this).toggleClass('submenu-opened');
         if (jQuery(this).siblings('ul').hasClass('open')) {
           jQuery(this).siblings('ul').removeClass('open').slideToggle();
         }
         else {
           jQuery(this).siblings('ul').addClass('open').slideToggle();
         }
       });
     };
     if (settings.format === 'multitoggle') multiTg();
     else cssmenu.addClass('dropdown');
     if (settings.sticky === true) cssmenu.css('position', 'fixed');
     resizeFix = function() {
      var mediasize = 1000;
      if (jQuery( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if (jQuery(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return jQuery(window).on('resize', resizeFix);
 });
 };
})(jQuery);

(function(jQuery){
  jQuery(document).ready(function(){
    jQuery("#cssmenu").menumaker({
     format: "multitoggle"
   });
  });
})(jQuery);