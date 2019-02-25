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



jQuery(document).ready(function() {
  /*Query the user's IP address, make a request to freegeoip.net, parse json data for country code*/
  jQuery.getJSON("http://freegeoip.net/json/", function(data) {
    //set country code and name
    setCountry(data.country_code, data.country_name);
  });
  
})

function setCountry(code, name) {
  /*Move this <option> to the top of the list by removing it and recreating it at the top of the list*/
  jQuery('#country_select').find('option[value="' + code + '"]').remove();
  jQuery('#country_select').prepend('<option value="' + code + '" selected>' + name + '</option>');
}
