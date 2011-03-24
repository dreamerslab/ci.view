$( function(){

  var validata_rules = {
    name : {
      required : true
    },
    email : {
      required : true,
      email : true
    },
    comments : {
      required : true
    }
  },

  validata_msg = {
    name : {
      required : 'We need to know who you are.'
    },
    email : {
      required : 'We need to know how to reply you.',
      email : 'The email format is incorrect.'
    },
    comments : {
      required : 'Are you sure you want to leave your comments empty?'
    }
  },

  send = function(){
    $form.ajaxSubmit({
      target : '#jquery-msg-content',
      url : '/example_site/index.php/contact/send',
      dataType : 'json',
      data : { ajax : 1 },
      success : function( rsp ){
        // set msg to success or error by the ajax reponse
        var msg = rsp[ 'success' ] == true ?
          'Your comments have been sent, thank you!' :
          'We are having problems sending your comments, please try again later :3';

        // display msg and unblock the screen after 3 second
        $.msg( 'replace', msg ).
          msg( 'unblock', [ 3000, 1 ]);
      }
    });

  },

  // cache DOM el
  $form = $( '#email-form' );

  $form.validate({
    rules : validata_rules,
    messages : validata_msg,
    submitHandler : function(){
      $.msg({
        autoUnblock : false,
        afterBlock : send,
        bgPath : '/example_site/assets/img/',
        // clear input values before unblock screen
        beforeUnblock : function(){
          $form.clearForm();
        },
        // set default content to a loading img
        content : '<img src="/example_site/assets/img/loading.gif"/>',
        msgID : 1
      });
    }
  });

  // preload img
  $.preload( '/example_site/assets/img/loading.gif' );
  
  $( '#sub-nav' ).find( 'li:not(.selected)' ).find( 'a' ).bind( 'click', function( e ){
    e.preventDefault();
    $.msg({ 
      bgPath : '/example_site/assets/img/',
      content : 'The page is not ready yet, please try again later.' 
    });
  });
  
});