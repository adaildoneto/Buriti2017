
jQuery(document).ready(function ($) {
  $('.slider-noticias-container').slick({
  dots: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  speed: 1800,
  autoplay: true,
  autoplaySpeed: 10000,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
  });
  // FIM Slick Slider

});

jQuery(document).ready(function ($) {
$('.especiald').slick({
    dots: true,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 9000,
    slidesToShow: 3,
    slidesToScroll: 1,

    });

  });

  // INICIO Slick Modchip
jQuery(document).ready(function ($) {
  $('.mod-chips').slick({
  infinite: true,
  speed: 1800,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 1000,
  variableWidth: true,
  responsive: [
  {
  breakpoint: 1024,
  settings: {
  slidesToShow: 2,
  slidesToScroll: 1,
  }
  },
  {
  breakpoint: 600,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1
  }
  },
  {
  breakpoint: 480,
  settings: {
  slidesToShow: 3,
  slidesToScroll: 1
  }
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
});

jQuery(document).ready(function ($) {
$('.eventos').slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 9000,
  slidesToShow: 4,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1150,
      settings: {
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 9000,
        slidesToScroll: 2,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 9000,
        slidesToScroll: 1,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 9000,
        arrows: false,
        dots: false,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});

jQuery(document).ready(function ($) {
  var scre = $("body").width();
  if (scre > 480) {
  $('.sidebar').pushpin({
    top: 1840,
    bottom: $('.testesidebar').height() + 1840 - $('.sidebar').height(),
    offset: 60
  });
  }
});

jQuery(document).ready(function ($) {
    var sizeNoticias = $('.bloco-des-noticias2').width();
    $('.sidebar').css({"width": +sizeNoticias+"px"});
  $(window).resize(function(){
    var sizeNoticias = $('.bloco-des-noticias2').width();
    $('.sidebar').css({"width": +sizeNoticias+"px"});
    });
      });

// INICIO Social bar
jQuery(document).ready(function ($) {
$('.social-bar').pushpin({
top: $(".autoH-top").height()+120,
bottom: $(".autoH-post").height()+$(".autoH-top").height()-$(".social-bar").height(),
offset: 80
});
});
// FIM Social bar

function goBack() {
    window.history.back()
};

window.twttr = (function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0],
  t = window.twttr || {};
if (d.getElementById(id)) return t;
js = d.createElement(s);
js.id = id;
js.src = "https://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js, fjs);

t._e = [];
t.ready = function(f) {
  t._e.push(f);
};

return t;
}(document, "script", "twitter-wjs"));

jQuery(document).ready(function ($) {
$('.button-collapse').sideNav();
});

jQuery(document).ready(function ($) {
$(".mod-chips a").addClass("chip");
});
function abrir(URL) {

  var width = 250;
  var height = 350;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}

// Find all iframes
jQuery(document).ready(function ($) {
var $iframes = $( "iframe" );

// Find &#x26; save the aspect ratio for all iframes
$iframes.each(function () {
  $( this ).data( "ratio", this.height / this.width )
    // Remove the hardcoded width &#x26; height attributes
    .removeAttr( "width" )
    .removeAttr( "height" );
});

// Resize the iframes when the window is resized
$( window ).resize( function () {
  $iframes.each( function() {
    // Get the parent container&#x27;s width
    var width = $( this ).parent().width();
    $( this ).width( width )
      .height( width * $( this ).data( "ratio" ) );
  });
// Resize to fix all iframes on page load.
}).resize();
});

//antes e depois das imagens
// Call & init
jQuery(document).ready(function($){
  $('.ba-slider').each(function(){
    var cur = $(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize.
// Because we all do this: i.imgur.com/YkbaV.gif
jQuery(document).ready(function ($) {
$(window).resize(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});
});

function drags(dragElement, resizeElement, container) {

  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {

    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');

    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();

    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;

    // Calculate the dragging distance on mousemove.
    dragElement.parents().on("mousemove touchmove", function(e) {

      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

      leftValue = moveX + posX - dragWidth;

      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }

      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

      // Set the new values for the slider and the handle.
      // Bind mouseup events to stop dragging.
      jQuery(document).ready(function($){
      $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      $('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
  });
};
jQuery(document).ready(function ($) {
$('.wp_pagination').find('ul').addClass('pagination');
});
jQuery(document).ready(function ($) {
$('.pagination').find('li').addClass('waves-effect');
});
jQuery(document).ready(function ($) {
$('.current').addClass('btn-flat orange white-text');
});
jQuery(document).ready(function ($) {
$('.calendar_wrap').addClass('white-text');
});
jQuery(document).ready(function ($) {
$('#wp-calendar').addClass('centered');
});
jQuery(document).ready(function ($) {
$('#wp-calendar').find('a').addClass('chip orange lighten-4 red-text darken-text-3');
});
jQuery(document).ready(function ($) {
$('#post').find('img').addClass('responsive-img aligncenter');
});
jQuery(document).ready(function ($) {
$('#no-responsive').removeClass('responsive-img aligncenter');
});
jQuery(document).ready(function ($) {
$('.wp-caption').width('auto').height('auto');
});
jQuery(document).ready(function ($) {
$('.wp-caption-text').width('auto').height('auto');
});
jQuery(document).ready(function ($) {
$('wp-caption aligncenter').addClass('alignleft');
});
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

jQuery(document).ready(function ($) {
$('.encontro').dropdown({
     inDuration: 300,
     outDuration: 225,
     constrainWidth: false, // Does not change width of dropdown to that of the activator
     hover: true, // Activate on hover
     gutter: 30, // Spacing from edge
     belowOrigin: false, // Displays dropdown below the button
     alignment: 'left', // Displays dropdown with edge aligned to the left of button
     stopPropagation: false // Stops event propagation
   }
 );
});

jQuery(window).load(function() {
    var container = document.querySelector('#grid-marcia');
    var msnry = new Masonry( container, {
      itemSelector: '.grid-item',
      columnHeight: '.grid-item',
    });

      });

      // INICIO Modal video
      jQuery(document).ready(function ($) {
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal({dismissible: false});
      });
      });
      // FIM Modal video

      jQuery(document).ready(function ($) {
      $(document).ready(function(){
          $(".modal-trigger").click(function () {
            var videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC + "?rel=0&controls=0&showinfo=0&html5=0&autoplay=1";
          $('div.video-container').html('<iframe src='+ videoSRCauto +' width="500" height="281" frameborder="0" allowfullscreen=""></iframe>');
            $('.modal-close').click(function () {
              $('.video-container' + ' iframe').attr('src', videoSRC);
            });
          });
      });
      });


  jQuery(document).ready(function ($) {
      // Obtém todos os cookies do documento
      var cookies = document.cookie;

      // Verifica se o cookie existe
      if (cookies.indexOf("usuarioVisualizouModal") == -1)
      {
      // Entra aqui caso o cookie não exista no  navegador do usuário

      // Crio um objeto Date do Javascript pegando a data de hoje e incrementando + 7 dias nessa data
      var diasparaexpirar = 0.01;
      var expiracao = new Date();
      expiracao.setTime(expiracao.getTime() + (diasparaexpirar * 24*60*60*1000));

      // Converte a data para GMT
      expiracao = expiracao.toUTCString();

      // Crio o cookie com a data de expiração
      document.cookie = 'usuarioVisualizouModal=SIM; expires=' + expiracao+'; path=/';

      // Exibo o modal
      $('#modal1').modal();
    $('#modal1').modal('open');
      }
      });


    jQuery(document).ready(function ($) {
      $('#gabinetes').slick({
        dots: false,
        infinite: true,
        vertical: true,
        verticalSwiping: true,
        speed: 900,
        slidesToShow: 3,
      });
    });

  jQuery(document).ready(function($){
      $('.parallax').parallax();
    });


    jQuery(document).ready(function($){
         // globals
         var canvas;
         var ctx;
         var W;
         var H;
         var mp = 150; //max particles
         var particles = [];
         var angle = 0;
         var tiltAngle = 0;
         var confettiActive = false;
         var animationComplete = true;
         var deactivationTimerHandler;
         var reactivationTimerHandler;
         var animationHandler;

         // objects

         var particleColors = {
             colorOptions: ["DodgerBlue", "OliveDrab", "Gold", "pink", "SlateBlue", "lightblue", "Violet", "PaleGreen", "SteelBlue", "SandyBrown", "Chocolate", "Crimson"],
             colorIndex: 0,
             colorIncrementer: 0,
             colorThreshold: 10,
             getColor: function () {
                 if (this.colorIncrementer >= 10) {
                     this.colorIncrementer = 0;
                     this.colorIndex++;
                     if (this.colorIndex >= this.colorOptions.length) {
                         this.colorIndex = 0;
                     }
                 }
                 this.colorIncrementer++;
                 return this.colorOptions[this.colorIndex];
             }
         }

         function confettiParticle(color) {
             this.x = Math.random() * W; // x-coordinate
             this.y = (Math.random() * H) - H; //y-coordinate
             this.r = RandomFromTo(10, 30); //radius;
             this.d = (Math.random() * mp) + 10; //density;
             this.color = color;
             this.tilt = Math.floor(Math.random() * 10) - 10;
             this.tiltAngleIncremental = (Math.random() * 0.07) + .05;
             this.tiltAngle = 0;

             this.draw = function () {
                 ctx.beginPath();
                 ctx.lineWidth = this.r / 2;
                 ctx.strokeStyle = this.color;
                 ctx.moveTo(this.x + this.tilt + (this.r / 4), this.y);
                 ctx.lineTo(this.x + this.tilt, this.y + this.tilt + (this.r / 4));
                 return ctx.stroke();
             }
         }

      jQuery(document).ready(function($){
             SetGlobals();
             InitializeButton();
             InitializeConfetti();

             $(window).resize(function () {
                 W = window.innerWidth;
                 H = window.innerHeight;
                 canvas.width = W;
                 canvas.height = H;
             });

         });

         function InitializeButton() {
             $('#stopButton').click(DeactivateConfetti);
             $('#startButton').click(RestartConfetti);
         }

         function SetGlobals() {
             canvas = document.getElementById("canvas");
             ctx = canvas.getContext("2d");
             W = window.innerWidth;
             H = window.innerHeight;
             canvas.width = W;
             canvas.height = H;
         }

         function InitializeConfetti() {
             particles = [];
             animationComplete = false;
             for (var i = 0; i < mp; i++) {
                 var particleColor = particleColors.getColor();
                 particles.push(new confettiParticle(particleColor));
             }
             StartConfetti();
         }

         function Draw() {
             ctx.clearRect(0, 0, W, H);
             var results = [];
             for (var i = 0; i < mp; i++) {
                 (function (j) {
                     results.push(particles[j].draw());
                 })(i);
             }
             Update();

             return results;
         }

         function RandomFromTo(from, to) {
             return Math.floor(Math.random() * (to - from + 1) + from);
         }


         function Update() {
             var remainingFlakes = 0;
             var particle;
             angle += 0.01;
             tiltAngle += 0.1;

             for (var i = 0; i < mp; i++) {
                 particle = particles[i];
                 if (animationComplete) return;

                 if (!confettiActive && particle.y < -15) {
                     particle.y = H + 100;
                     continue;
                 }

                 stepParticle(particle, i);

                 if (particle.y <= H) {
                     remainingFlakes++;
                 }
                 CheckForReposition(particle, i);
             }

             if (remainingFlakes === 0) {
                 StopConfetti();
             }
         }

         function CheckForReposition(particle, index) {
             if ((particle.x > W + 20 || particle.x < -20 || particle.y > H) && confettiActive) {
                 if (index % 5 > 0 || index % 2 == 0) //66.67% of the flakes
                 {
                     repositionParticle(particle, Math.random() * W, -10, Math.floor(Math.random() * 10) - 20);
                 } else {
                     if (Math.sin(angle) > 0) {
                         //Enter from the left
                         repositionParticle(particle, -20, Math.random() * H, Math.floor(Math.random() * 10) - 20);
                     } else {
                         //Enter from the right
                         repositionParticle(particle, W + 20, Math.random() * H, Math.floor(Math.random() * 10) - 20);
                     }
                 }
             }
         }
         function stepParticle(particle, particleIndex) {
             particle.tiltAngle += particle.tiltAngleIncremental;
             particle.y += (Math.cos(angle + particle.d) + 3 + particle.r / 2) / 2;
             particle.x += Math.sin(angle);
             particle.tilt = (Math.sin(particle.tiltAngle - (particleIndex / 3))) * 15;
         }

         function repositionParticle(particle, xCoordinate, yCoordinate, tilt) {
             particle.x = xCoordinate;
             particle.y = yCoordinate;
             particle.tilt = tilt;
         }

         function StartConfetti() {
             W = window.innerWidth;
             H = window.innerHeight;
             canvas.width = W;
             canvas.height = H;
             (function animloop() {
                 if (animationComplete) return null;
                 animationHandler = requestAnimFrame(animloop);
                 return Draw();
             })();
         }

         function ClearTimers() {
             clearTimeout(reactivationTimerHandler);
             clearTimeout(animationHandler);
         }

         function DeactivateConfetti() {
             confettiActive = false;
             ClearTimers();
         }

         function StopConfetti() {
             animationComplete = true;
             if (ctx == undefined) return;
             ctx.clearRect(0, 0, W, H);
         }

         function RestartConfetti() {
             ClearTimers();
             StopConfetti();
             reactivationTimerHandler = setTimeout(function () {
                 confettiActive = true;
                 animationComplete = false;
                 InitializeConfetti();
             }, 100);

         }

         window.requestAnimFrame = (function () {
             return window.requestAnimationFrame ||
             window.webkitRequestAnimationFrame ||
             window.mozRequestAnimationFrame ||
             window.oRequestAnimationFrame ||
             window.msRequestAnimationFrame ||
             function (callback) {
                 return window.setTimeout(callback, 1000 / 60);
             };
         })();
     })();
