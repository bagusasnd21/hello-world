$(document).ready(function () {
  /* Hamburger Menu */
  var trigger1 = $('#hamburgerFixIOSclosed'),
      trigger2 = $('#hamburgerFixIOSopen'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger1.click(function () {
      hamburger_cross1();
    });

    trigger2.click(function () {
      hamburger_cross2();
    });

    function hamburger_cross1() {
      if (isClosed == true) {
        overlay.hide();
        trigger1.removeClass('is-open');
        trigger1.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger1.removeClass('is-closed');
        // trigger1.addClass('is-open');
        isClosed = true;
      }
  }

  function hamburger_cross2() {
    if (isClosed == false) {
      overlay.show();
      trigger2.addClass('is-closed');
      trigger2.removeClass('is-open');
      isClosed = true;
    } else {
      overlay.hide();
      trigger2.addClass('is-open');
      trigger2.removeClass('is-closed');
      trigger1.addClass('is-closed');
      isClosed = false;
    }
  }
  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });

  /* Show / Hide Footer */
  $('.hide-sitemap').addClass("collapsed");
  $('.hide-sitemap').click(function() {
    var $this = $(this);

    if ($this.hasClass("collapsed")) {
      $(this).find('i').removeClass("fa fa-caret-down").addClass("fa fa-caret-up");
    } else {
      $(this).find('i').removeClass("fa fa-caret-up").addClass("fa fa-caret-down");
    }
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 10) {
      $('.hamburger.is-closed').css('display','none');
    }
    else {
      $('.hamburger.is-closed').css('display','block');
    }
  });

  $(function() {
    $(".hamburger").click(function () {
        if ($("body").hasClass("is-open")) {
          $("body").removeClass("is-open");
          $("html").removeClass("is-open");
        } else {
          $("body").addClass("is-open");
          $("html").addClass("is-open");
        }
    });
  });

  $('#registerStep1').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
    $("body").addClass('pr-0i');
  })
  $('#registerStep1').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep2').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
  })
  $('#registerStep2').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep3').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
    $("body").addClass('pr-0i');
  })
  $('#registerStep3').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep4').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
  })
  $('#registerStep4').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep5').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
    $("body").addClass('pr-0i');
  })
  $('#registerStep5').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep6').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
  })
  $('#registerStep6').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })
  $('#registerStep7').on('shown.bs.modal', function (e) {
    $("body").addClass('modal-open');
    $("body").addClass('pr-0i');
  })
  $('#registerStep7').on('hidden.bs.modal', function (e) {
    $("body").removeClass('modal-open');
  })

  $(function(){
    $('input,textarea,select').on('blur', function(){
       if($(this).val()!=='') {
         $(this).addClass('blue-border');
       } else {
         $(this).removeClass('blue-border');
       }
    });
  });

  $(function(){
    $('input,textarea,select').on('blur', function(){
      $(this).removeClass('blue-border');
    });
  });

  $('#modalVid').on('hidden.bs.modal', function () {
    $('video')[0].pause();
  });

  // $('.collapse').on('shown.bs.collapse', function (e) {
  //    var id = $(e.target).prop('id');
  //     // To scroll to panel-body (untested)
  //     // var id = $(e.target).children('.panel-body').prop('id');
  //    navigateToElement(id);
  // })
  //
  // function navigateToElement(id) {
  //   $('#scrollBoxContent').animate({
  //     scrollTop: $("#" + id).offset().top
  //   }, 1000);
  // }

});

function setModalMaxHeight(element) {
  this.$element     = $(element);
  this.$content     = this.$element.find('.modal-content');
  var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
  var dialogMargin  = $(window).width() < 768 ? 20 : 60;
  var contentHeight = $(window).height() - (dialogMargin + borderWidth);
  var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
  var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
  var maxHeight     = contentHeight - (headerHeight + footerHeight);

  this.$content.css({
      'overflow': 'hidden'
  });

  this.$element
    .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
    });
}

$('.modal').on('show.bs.modal', function() {
  $(this).show();
  setModalMaxHeight(this);
});

$(window).resize(function() {
  if ($('.modal.in').length == 1) {
    setModalMaxHeight($('.modal.in'));
  }
});

/* CodeMirror */
$('.code').each(function() {
  var $this = $(this),
      $code = $this.text(),
      $mode = $this.data('language');

  $this.empty();
  $this.addClass('cm-s-bootstrap');
  CodeMirror.runMode($code, $mode, this);
});
