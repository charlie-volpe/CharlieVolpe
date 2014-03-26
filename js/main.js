$('#menu-icon img').hover(
  function() {
    $('#menu-icon img').attr( "src", "http://goo.gl/9Xife2" );
  },function() {
    $('#menu-icon img').attr( "src", "http://goo.gl/3hQUbp" );
  }
);

$('#mail-icon').hover(
  function() {
    $('#mail-icon').attr( "src", "http://goo.gl/SmZlaQ" );
  }, function() {
    $('#mail-icon').attr( "src", "http://goo.gl/iI1vFP" );
  }
);
$('#linkedin-icon').hover(
  function() {
    $('#linkedin-icon').attr( "src", "http://goo.gl/ssLbK4" );
  }, function() {
    $('#linkedin-icon').attr( "src", "http://goo.gl/IjZzXo" );
  }
);
$('#newspaper-icon').hover(
  function() {
    $('#newspaper-icon').attr( "src", "http://goo.gl/CfckLs" );
  }, function() {
    $('#newspaper-icon').attr( "src", "http://goo.gl/a1fdb9" );
  }
);
$('#twitter-icon').hover(
  function() {
    $('#twitter-icon').attr( "src", "http://goo.gl/7JC7PL" );
  }, function() {
    $('#twitter-icon').attr( "src", "http://goo.gl/mtgRqy" );
  }
);
$('#github-icon').hover(
  function() {
    $('#github-icon').attr( "src", "http://goo.gl/hZsxoq" );
  }, function() {
    $('#github-icon').attr( "src", "http://goo.gl/GmNBNP" );
  }
);
$('#codepen-icon').hover(
  function() {
    $('#codepen-icon').attr( "src", "http://goo.gl/fY7TdB" );
  }, function() {
    $('#codepen-icon').attr( "src", "http://goo.gl/Jndxel" );
  }
);

$('#menu-icon img').click( function(){
  if( $('.menu').hasClass('hide') ) {
    $('.menu').removeClass('hide');
    $('.menu').addClass('show');
  }
  else{
    $('.menu').addClass('hide');
    $('.menu').removeClass('show');
  }
});