<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Nicolas Mace</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <!-- HOME -->

    <div class="d-flex flex-column">
      <h1 class="my-5 pt-5 text-center">Front End Web Development</h1>
      <div id="logo" class="animated fadeInUpBig text-center"><img class="img-fluid" src="img/logo.svg" alt=""></div>
    </div>

    <!-- INFORMATION -->

    <div id="elt1" class="d-flex justify-content-center align-items-center animated zoomInDown" data-toggle="tooltip" data-placement="right" data-html="true" title="<div style='color:tomato;font-family:Orbitron;'>About</div>">
      <div class="menu">
        <span><i class="fa fa-id-card-o"></i></span>
      </div>
      <div class="container text-center text-white ">
        <span class="cross"><i class="fa fa-times fa-5x"></i></span>
        <div id="about" class="mx-auto my-4 py-2">
          <h2>About Me</h2>
          <span id="typed"></span>
        </div>
        <div id="skills" class="mx-auto mb-4 p-2">
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">HTML</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">CSS</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">JavaScript</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">PHP</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">SQL</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Angular</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Vue</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Wordpress</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Linux</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Shell</div>
          </div>
        </div>
      </div>
    </div>

    <!-- GALERIE -->

    <div id="elt2" class="d-flex justify-content-center align-items-center animated zoomInDown" data-toggle="tooltip" data-placement="left" data-html="true" title="<div style='color:tomato;font-family:Orbitron;'>Galerie</div>">

      <div class="menu">
        <span><i class="fa fa-television"></i></span>
      </div>

      <div class="container text-center text-white">
        <span class="cross"><i class="fa fa-times fa-5x"></i></span>
        <div id="galerie" class="mx-auto my-4 py-4">
          <h2>Galerie</h2>
          <span id="typed2"></span>
        </div>

        <div id="slider" class="mx-auto mb-4 p-5">
          <div class="carousel">
            <div class="item">
              <a href="#" title="adminUI" data-toggle="modal" data-target=".modal-lg-1"><img class="img-fluid" src="img/slider/adminUI.png" alt="First slide"></a>
            </div>
            <div class="item">
              <a href="#" title="glozzom" data-toggle="modal" data-target=".modal-lg-2"><img class="img-fluid" src="img/slider/glozzom.png" alt="Second slide"></a>
            </div>
            <div class="item">
              <a href="#" title="glozzom" data-toggle="modal" data-target=".modal-lg-3"><img class="img-fluid" src="img/slider/looplab.png" alt="Third slide"></a>
            </div>
            <div class="item">
              <a href="#" title="glozzom" data-toggle="modal" data-target=".modal-lg-4"><img class="img-fluid" src="img/slider/mizuxe.png" alt="Third slide"></a>
            </div>
            <div class="item">
              <a href="#" title="glozzom" data-toggle="modal" data-target=".modal-lg-5"><img class="img-fluid" src="img/slider/portfolio.png" alt="Third slide"></a>
            </div>
            <div class="item">
              <a href="#" title="glozzom" data-toggle="modal" data-target=".modal-lg-6"><img class="img-fluid" src="img/slider/omnifood.png" alt="Third slide"></a>
            </div>
          </div>
        </div>
      </div>



    </div>

    <!-- CONTACT -->

    <div id="elt3" class="d-flex flex-column justify-content-center align-items-center animated zoomInDown" data-toggle="tooltip" data-placement="left" data-html="true" title="<div style='color:tomato;font-family:Orbitron;'>Contact</div>">
      <div class="menu">
        <span><i class="fa fa-envelope-o"></i></span>
      </div>
      <div class="container text-center text-white">
        <span class="cross"><i class="fa fa-times fa-5x"></i></span>
        <div id="contact" class="mx-auto my-2 py-2 py-sm-4">
          <h2>Contact</h2>
        </div>
        <div id="formulaire" class="mx-auto my-3 p-4">
          <form id="form">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user-o fa-2x"></i></div>
                <input type="text" class="form-control" id="form_name" placeholder="Enter your name" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''?>">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-o fa-2x"></i></div>
                <input type="email" class="form-control" id="form_email" placeholder="Enter your email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''?>">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-align-justify fa-2x"></i></div>
                <textarea class="form-control" id="form_message" rows="8" placeholder="Message..." name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''?></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- GAME -->

    <div id="elt4" class="d-flex justify-content-center align-items-center animated zoomInDown" data-toggle="tooltip" data-placement="right" data-html="true" title="<div style='color:tomato;font-family:Orbitron;'>Games</div>">
      <div class="menu">
        <span><i class="fa fa-gamepad"></i></span>
      </div>
      <div class="container text-center text-white">
        <span class="cross"><i class="fa fa-times fa-5x"></i></span>
        <div id="games" class="my-4 py-4">
          <h2>Games</h2>
          <p>Under Construction</p>
        </div>
      </div>
    </div>

      <!-- Large modal galerie -->

      <div class="modal fade modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Admin UI</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/adminUI.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Glozzom</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/glozzom.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-lg-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LoopLab</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/looplab.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-lg-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Mizuxe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/mizuxe.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-lg-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Portfolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/portfolio.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-lg-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Omnifood</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img class="img-fluid" src="img/slider/modal/omnifood.png" alt="">
            </div>
          </div>
        </div>
      </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="node_modules/typed.js/lib/typed.js"></script>
    <script src="node_modules/slick-carousel/slick/slick.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
