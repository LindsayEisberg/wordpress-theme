//need to include no conflict into WP sites as WP does not necessarily associate $ with jquery
jQuery(document).ready(function($){
  //code from template
  $(document).foundation();


  $( ".nav-toggle" ).click(function() {
    $(this).toggleClass("open");
    $("nav").fadeToggle(100);

    return false;
  });
});
