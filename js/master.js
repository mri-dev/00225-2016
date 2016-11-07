$(function(){
  // Cookie szabályzat
  $.cookieAccepter('https://serverland.hu/terms.php');
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

  $('#menu > li').click(function(e){
    var lie = $(this);
    $('#menu > li.active').removeClass('active');

    if ( !lie.hasClass('active') ) {
      lie.addClass('active');
    }
  });

  // User menu toggler
  $('#usermenuvtoggler').click(function(e){
    var mt = $(this);
    $('#menu > li.active').removeClass('active');

    if ( !mt.hasClass('opened') ) {
      mt.addClass('opened');
      mt.text('Menü összecsukása');
      $('#uvmenu').addClass('opened');
    }else{
      mt.removeClass('opened');
      mt.text('Menü kinyitás');
      $('#uvmenu').removeClass('opened');
    }
  });

});
