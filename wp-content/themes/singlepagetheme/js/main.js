$ = jQuery.noConflict();

$(document).ready(function() {
  $('section#screenshots a').on('click', function() {
    $('div#modal img').attr('src', $(this).attr('data-image-url') );
  });

  var nav = $('.navbar-fixed-top');

  // Smooth Scrolling
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 300) {
      nav.addClass('effect');
    } else {
      nav.removeClass('effect');
    }
  });

  // Animations
  $('#about .blue-circle').waypoint(function() {
    $('#about .blue-circle').addClass('animated fadeInUp')
  }, {
    offset: '50%'
  }); // end #about .blue-circle

  $('#features .blue-circle').waypoint(function() {
    $(this.element).addClass('animated fadeInUp')

  }, {
    offset: '50%'
  }); // end #features .blue-circle

  $('.features-image img').waypoint(function() {
    $('.features-image img').addClass('animated rubberBand')
  }, {
    offset: '50%'
  }); // end .features-image

  $('#screenshots .col-xs-4').waypoint(function() {
    $(this.element).addClass('animated zoomIn');
    $(this.element).css({'opacity':1})
  }, {
    offset: '50%'
  }); // end .screenshots

  $('#download div.phone img').waypoint(function() {
    $(this.element).addClass('animated fadeInRight');
  }, {
    offset: '50%'
  }); // end phone

  $('#download .platforms > div').waypoint(function() {
    $(this.element).addClass('animated fadeInUp');
  }, {
    offset: '50%'
  }); // end platforms

  $('#form').bootstrapValidator( {
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh',
    },
    fields: {
      name: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          },
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'This field is required'
          },
          emailAddress: {
            message: 'The input is not a valid address'
          }
        }
      },
      message: {
        validators: {
          notEmpty: {
            message: 'The message cannot be empty. You can think of something to write.'
          },
        }
      }
    }
  }).on('success.form.bv', function(e) {
    e.preventDefault();

    var $form = $(e.target);

    var bv = $form.data('bootstrapValidator');

    $.post($form.attr('action'), $form.serialize(), function(result) {
      console.log(result);
    },'json' );
  });
}); // end document

  smoothScroll.init( {
    speed: 700,
    easing: 'easeInOutQuad',
    updateURL: false,
    offset: 0
  });
