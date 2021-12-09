<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <style>
    .nav-link {
      font-family: Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 20px;
      font-weight: 500 !important;
      color: rgba(255, 255, 255, 0.5) !important;
    }

    .nav-item a:hover {
      color: white !important;
      font-family: Roboto, Noto Naskh Arabic UI, Arial, sans-serif;
      font-size: 20px;
      font-weight: 500;
    }

    .nav-item {
      margin: 0 10px;
    }

    .active {
      color: white !important;
    }

    .slidertop .onetitle {
      font-family: YouTube Sans, Roboto, Noto Naskh Arabic UI, Arial,
        sans-serif;
      font-size: 30px;
      font-weight: 700;
    }

    .onetitle {
      font-family: YouTube Sans, Roboto, Noto Naskh Arabic UI, Arial,
        sans-serif;
      font-size: 30px;
      font-weight: 700;
      color: white !important;
      margin-bottom: 30px !important;
    }

    .card {
      border: none !important;
      background-color: black !important;
      border-radius: 0 !important;
      color: white !important;
    }

    .card-body {
      padding-left: 0 !important;
    }

    .card p {
      color: rgba(255, 255, 255, 0.5) !important;
    }

    .listmusic {
      display: flex;
      flex-direction: column;
      margin-top: 30px;
    }

    .listmusic ul {
      width: 50%;
      list-style: none;
      padding-left: 0;
    }

    .musicview {
      color: white;
      margin-top: 30px;
      display: flex;
      flex-direction: row;
    }

    .musicview img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-right: 20px;
    }
  </style>
</head>

<body style="background-color: black">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding: 8px 0" ;>
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="15" alt="" loading="lazy" />
      </a>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <!-- Left links -->
        <ul class="navbar-nav">
          <li class="nav-item text-center">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>

        <!-- Notifications -->
        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>

        <!-- Avatar -->
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <br /><br />
  <div class="container slidertop">
    <div class="row">
      <div class="col-md-6">
        <h3 class="onetitle">Heheh</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <div class="container slidertop">
    <div class="row">
      <div class="col-md-6">
        <h3 class="onetitle">Recommended Music Video</h3>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="listmusic container">
    <h5 class="onetitle">Musik Ngab</h5>
    <ul>

    </ul>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(".slidertop").hide();
      $(".listmusic").hide();
      // show on scroll
      $(window).scroll(function() {
        if ($(this).scrollTop() > 90) {
          $(".listmusic").fadeIn(1500);
        } else {
          $(".listmusic").fadeOut();
        }
      });
      $(".slidertop").slideDown(1000);
    });
  </script>
  <script>
    $(document).ready(function() {
      $.ajax({
        url: "data.php",
        type: "GET",
        dataType: "json",
        success: function(data) {
          // console.log(data);
          var html = "";
          $.each(data, function(key, value) {
            console.log(value);
            html +=
              '<li><div class="musicview"><img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />';
            html += '<div class="musicinfo"><h5>' + value.name + " - " + value.judul + "</h5>";
            html += "<p>" + value.vokalis + "</p></div></div></li>";
          });
          $(".listmusic ul").html(html);
        },
        error: function(err) {
          // console.log(err.responseText);
        },
      });
    });
  </script>
</body>

</html>