$( function(){
  // fancy box settings
  $( '#gallery' ).find( 'a' ).
    fancybox({
      overlayColor : 'black',
      overlayOpacity : 0.6,
      padding : 0,
      speedIn :	600,
      speedOut :	200,
      titlePosition : 'over'
    });
});
