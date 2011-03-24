$( function(){
  $( '#wrap' ).find( '.not-ready' ).bind( 'click', function( e ){
    e.preventDefault();
    $.msg({ 
      bgPath : '/example_site/assets/img/',
      content : 'The page is not ready yet, please try again later.' 
    });
  });
});
