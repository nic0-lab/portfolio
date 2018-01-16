var element1 = document.getElementById('elt1');
var element2 = document.getElementById('elt2');
var element3 = document.getElementById('elt3');
var element4 = document.getElementById('elt4');

// INFORMATION

function information() {
  if (section) {
    typed = new Typed('#typed', {
      strings: ["Hi, my name is Nicolas Mace. I am a self-taught web developer &amp; designer based in France. Currently studying at Free Code Camp. I have a passion for developing websites &amp; web applications. I like to use free &amp; open source tools &amp; I love CLI!."],
      typeSpeed: 20,
      backSpeed: 0,
      fadeOut: true,
    });
  } else {
    typed.destroy();  
  }
}

// GALERIE

function galerie() {
  if (section) {
    typed = new Typed('#typed2', {
      strings: ["Here are some exemples of websites that I developed"],
      typeSpeed: 20,
      backSpeed: 0,
      fadeOut: true,
    });
  } else {
    typed.destroy();  
  }
}

// CONTACT

function contact() {

}

// GAMES

function games() {

}

// Animation à l'accueil

function move() {
  [element1.style.top,
    element1.style.left,
    element2.style.top,
    element2.style.right,
    element3.style.bottom,
    element3.style.right,
    element4.style.bottom,
    element4.style.left] = ['0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%'];
}

function radius() {
  [element1.style.borderRadius,
    element2.style.borderRadius,
    element3.style.borderRadius,
    element4.style.borderRadius] = ['0px 0px 100px 0px', '0px 0px 0px 100px', '100px 0px 0px 0px ', '0px 100px 0px 0px '];
}

setTimeout(move, 2000);
setTimeout(radius, 1000);

// variable pour savoir si une section est ouverte ou si on est en page d'accueil
var section = false;
// variable pour créer l'objet TypedJS
var typed;

function scale(element) {
  element.addEventListener('click', function() {
    if(!section) {
      this.childNodes[1].style.display = 'none';
      this.className = 'd-flex justify-content-center align-items-center animated open';
      this.style.width = '100vw';
      this.style.height = '100vh';
      this.style.borderRadius = '0px';
      this.style.zIndex =  '1000';
      this.style.cursor =  'auto';
      this.querySelector('.container').style.display = 'block';
      this.querySelector('.container').style.opacity = '1';
      $('[data-toggle="tooltip"]').tooltip('hide');
      $('[data-toggle="tooltip"]').tooltip('disable');
      section = true;

      switch (element.id) {
        case "elt1":
          information();
          break;
        case "elt2":
          galerie();
          break;
        case "elt3":
          break;
        case "elt4":
          break;
      }
    }
  }, true);
  element.childNodes[3].childNodes[1].addEventListener('click', function () {
    if(section) {
        this.parentElement.parentElement.className = 'd-flex justify-content-center align-items-center animated hinge';
      setTimeout( () => {
        this.parentElement.parentElement.childNodes[1].style.display = 'block';
        this.parentElement.parentElement.style.width = '150px';
        this.parentElement.parentElement.style.height = '150px';
        radius();
        this.parentElement.parentElement.style.zIndex =  '1';
        this.parentElement.parentElement.style.cursor =  'pointer';
        this.parentElement.parentElement.className = 'd-flex justify-content-center align-items-center animated zoomInDown';
        this.parentElement.style.display = 'none';
        this.parentElement.style.opacity = '0';
      }, 1500);
      $('[data-toggle="tooltip"]').tooltip('enable');
      section = false;

      switch (element.id) {
        case "elt1":
          information();
          break;
        case "elt2":
          galerie();
          break;
        case "elt3":
          break;
        case "elt4":
          break;
      }
    }
  });

}

scale(element1);
scale(element2);
scale(element3);
scale(element4);

// TOOLTIPS
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
})

// GALERIE CAROUSEL

$('.carousel').slick({
  autoplay: true,
  autospeed: 2000,
  dots: true
});

// CONTACT
$( "#form" ).on( "submit", function( event ) {
  event.preventDefault();
  // div avec message Sending Response... avec une petite animation de chargement
  // supprimer les variables de sessions
      $('#form button').hide();
      $('#formulaire').append('<div class="alert alert-warning pt-1">Please wait...</div>');
  $.post("post_contact.php", $(this).serialize(), function(data) {
        $('#formulaire div.alert').remove();
    console.log('response');
    console.log(data);
    if(data == '1') {
      $('#formulaire').append('<div class="alert alert-success">Your request has been sent successfully.</div>');
      setTimeout(function() {
        document.getElementById('form').reset();
        $('#formulaire div.alert').remove();
      $('#form button').show();
      }, 5000);
    } else {
      $('#formulaire').append('<div class="alert alert-danger">Error, your request has not been sent.</div>');
      setTimeout(function() {
        $('#formulaire div.alert').remove();
      $('#form button').show();
      }, 5000);

    }
  })
});
