$(function(){
  // Objektum nyitó/záró
  $('*[toggle]').click(function(){
    var opened = ($(this).attr('toggle-status') == 0) ? false : true;
    var target = $(this).attr('toggle');

    if (opened) {
      $(target).removeClass('opened');
      $(this).attr('toggle-status', 0).removeClass('toggler-opened');
    } else {
      $(target).addClass('opened');
      $(this).attr('toggle-status', 1).addClass('toggler-opened');
    }
  });
});
