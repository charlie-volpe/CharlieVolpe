$('#menu-icon').click( function(){
  if( $('.menu').hasClass('hide') ) {
    $('.menu').removeClass('hide');
    $('.menu').addClass('show');
  }
  else{
    $('.menu').addClass('hide');
    $('.menu').removeClass('show');
  }
});