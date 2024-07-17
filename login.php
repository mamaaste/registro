<?php
session_start();
if (!isset($_SESSION['nombres']) || !isset($_SESSION['id'])) {
    header('location: index.html');
}
echo "administrador ". $_SESSION['nombres'];
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Heustonn</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Heustonn
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="login.php">inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="regisp.php"> registros de maestros </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cerrar.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="https://th.bing.com/th?id=OSK.63ba93d665cd4963464b31d48eb203fd&w=102&h=102&c=7&o=6&dpr=1.3&pid=SANGAM" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                        Kimetsu  <br>
                        no Yaiba <br>
                          <span>
                          Serie de manga
                          </span>
                        </h1>
                        <p>
La triste historia entre personas y demonios, el manejo de espadas demoníacas
y, ocasionalmente,
los personajes cómicos se han vuelto
populares, y la circulación acumulada de 1 ~ 23 volúmenes ha superado los
150 millones de copias.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEABsbGxscGx4hIR4qLSgtKj04MzM4PV1CR0JHQl2NWGdYWGdYjX2Xe3N7l33gsJycsOD/2c7Z//////////////8BGxsbGxwbHiEhHiotKC0qPTgzMzg9XUJHQkdCXY1YZ1hYZ1iNfZd7c3uXfeCwnJyw4P/Zztn////////////////CABEIAGYAZgMBIgACEQEDEQH/xAAZAAEBAQEBAQAAAAAAAAAAAAAAAgEDBAb/2gAIAQEAAAAA+mAAAAAAPJnG+s2udjocr2ia3j2md0qWuFVVRvPrzuOk45VWsqUt68e3nvpMdJw6t2Nluc9eoAAAAAA//8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//aAAoCAhADEAAAAAADGs63mkVJZbKhSWwIKAlkxrbpyAAAAP/EAC8QAAIBAwICCAYDAQAAAAAAAAECEQADEiExE0EiMlFhcXKhwQQzU4GRsUNQUmL/2gAIAQEAAT8A/p1RW0ZemNyae2gjo77AVwlyAKx40oJYoxaAYX8TQtWwJxpQSemGKnqTRS2N0EAEk0tu00wkehoSjKJJVu3kaxBuEOsz1TRt2lEldBUWOdsjzA0qhLkDQFSY7xQ+Y/gtOrEgqQCJrhIGRY3BB+1FAvDA/wB+xq4ehcHYpp/4vP7GnUsjAcwRSKQWJiSdhWQe4ANkMnxp+va8T+qdSykCmSFLsBllP2JiKVApJBJ5STNLrcudwUVdAJQEwCT+qUOWUssYg/cmn61od5PpV35b+U0xk2vN7VcJCORuFNJIZlJJ2I8DV2AM+a03zLY8xq6YtsZimaBgSMcpmZ0mYp7l1FDmNT1eykytqF4ZMc1iixYRwWPjEUilUVSdhUMrswXKY8azb6TelIjIzNhM7Qer3Cazb6T+lKjrDADn0e41mTpwn9KRWQmbX4Ow7Nayb6TfkUCRtZI8IorxjDKQo7eZpEBByksDBORotbB1RoneSaRixdEbog9b2FMtpSoYEljEkzTZIJDHHv1jvpEDLrlMkHpHcUgRwSAynzGg5VXy1xMeNHYcQkk7KKCrJALoRymKWWbpzziCRtpT4KYxc+DGkZcgbZmVMik613z+woskXFChWLaf9a0kZ3fN7UVWHlwryZyOm+9KAvwzDWMWieyrXVPmb91aKlSEBWtVAVtw4JPbPOnHVYCSpmna00ENryxOtSoNrEaYtWSC6CRGnWpLiIihpEaExz7KRLqLBtknmQRqaVGDsSuI7JnWmtsTmuhA+xrFzvZPpRS6+/RjYb68ppEuqI4TfkGks3k1x0PKRIFNbdmEoQIhpO4rh3gIxy7DImil7/OPe1H4e+G0WQNjIrg3TvaP2YCnsO4CFSij+o//xAAiEQEAAQIFBQEAAAAAAAAAAAABABARAhIgQUIDITAxUTL/2gAIAQIBAT8A1uJOMOqvBmZ+S7Ly9H1AApvRmYKbaLzs0SqvyXxZvyy+PY8//8QAJhEAAgEDAwIHAQAAAAAAAAAAAAERITFRAhJBYaEDIDBCcYGR0f/aAAgBAwEBPwDz7Vk2LJCyQupBC6/gzn6JeeGL+ntZj4ZpnubNWqty7Ih15LJ4OiOCOB7lZwWkTHVPMnLrQRTPcjw3fU/X/9k=" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                        Serie de manga <br>
                        japonesa <br>
                          <span>
                            Service
                          </span>
                        </h1>
                        <p>
                        es una serie japonesa de manga shōnen escrita e ilustrada por Atsushi Ōkubo.
                         Fue publicado por Kōdansha y se serializó en la Shōnen Magazine desde el 23 de septiembre
                          de 2015 hasta febrero del 2022, teniendo un total de treinta y cuatro tankōbons.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="slider_item-box layout_padding2">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="img-box">
                      <div>
                        <img src="https://th.bing.com/th?id=OSK.HERORrdqKNOB_lPaW-WtCZFi_3X9EnLjSLTjXy7GzidOCCw&w=472&h=280&c=13&rs=2&o=6&dpr=1.3&pid=SANGAM" alt="" class="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Lionel  <br>
                          Messi <br>
                          <span>
                            Service
                          </span>
                        </h1>
                        <p>
                        "Tanto en el fútbol como en la relojería, el talento 
                        y la elegancia no significan nada sin rigor y precisión."
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="container">
        <div class="slider_nav-box">
          <div class="btn-box">
            <a href="">
              Read More
            </a>
            <hr>
          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <div class="bg">

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            ABOUT OUR COMPANY
          </h3>
        </div>
        <p class="layout_padding2-top">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        </p>
        <div class="img-box layout_padding2">
          <img src="images/about-img.jpg" alt="">
        </div>
        <p class="layout_padding2-bottom">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        </p>
      </div>
      <div class="container">
        <div class="btn-box">
          <a href="">
            Read More
          </a>
          <hr>
        </div>
      </div>
    </section>


    <!-- end about section -->

    <!-- service section -->

    <section class="service_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            OUR SERVICES
          </h3>
        </div>
        <p class="">
          ad minim veniam, quis nostrud exercitation ullamco
        </p>
        <div class="service_container ">
          <div class="row">
            <div class="col-md-3">
              <div class="box b-1">
                <div class="img-box">
                  <img src="images/s-1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Tab Services
                  </h6>
                  <p>
                    adipiscing elit, sed do eiusmod tempor incididunt
                  </p>
                  <div class="btn-box">
                    <a href="">
                      Read More
                    </a>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-2">
                <div class="img-box">
                  <img src="images/s-2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Pipe Water
                  </h6>
                  <p>
                    adipiscing elit, sed do eiusmod tempor incididunt
                  </p>
                  <div class="btn-box">
                    <a href="">
                      Read More
                    </a>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-3">
                <div class="img-box">
                  <img src="images/s-3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Washing Machine
                  </h6>
                  <p>
                    adipiscing elit, sed do eiusmod tempor incididunt
                  </p>
                  <div class="btn-box">
                    <a href="">
                      Read More
                    </a>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box b-4">
                <div class="img-box">
                  <img src="images/s-4.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    Hand Washing
                  </h6>
                  <p>
                    adipiscing elit, sed do eiusmod tempor incididunt
                  </p>
                  <div class="btn-box">
                    <a href="">
                      Read More
                    </a>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end service section -->

    <!-- work section -->

    <section class="work_section layout_padding">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            HOW IT WORKS
          </h3>
        </div>
      </div>
      <div class="work_container ">
        <div class="box b-1">
          <div class="img-box">
            <img src="images/w-1.png" alt="">
          </div>
          <div class="name">
            <h6>
              Adipiscing elit
            </h6>
          </div>
        </div>
        <div class="box b-2">
          <div class="img-box ">
            <img src="images/w-2.png" alt="">
          </div>
          <div class="name">
            <h6>
              Adipiscing elit
            </h6>
          </div>
        </div>
        <div class="box b-3">
          <div class="img-box ">
            <img src="images/w-3.png" alt="">
          </div>
          <div class="name">
            <h6>
              Adipiscing elit
            </h6>
          </div>
        </div>
        <div class="box b-4">
          <div class="img-box ">
            <img src="images/w-4.png" alt="">
          </div>
          <div class="name">
            <h6>
              Adipiscing elit
            </h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="btn-box">
          <a href="">
            Read More
          </a>
          <hr>
        </div>
      </div>
    </section>


    <!-- end work section -->

    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="custom_heading-container">
        <h3 class=" ">
          Booking Online
        </h3>
      </div>
      <div class="container layout_padding2-top">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="">
              <div>
                <input type="text" placeholder="NAME">
              </div>
              <div>
                <input type="email" placeholder="EMAIL">
              </div>
              <div>
                <input type="text" placeholder="PHONE NUMBER">
              </div>
              <div>
                <select name="" id="">
                  <option value="" disabled selected>TYPE OF SERVICE</option>
                  <option value="">Service 1</option>
                  <option value="">Service 2</option>
                  <option value="">Service 3</option>
                </select>
              </div>
              <div>
                <input type="text" class="message-box" placeholder="MESSAGE">
              </div>
              <div class="d-flex justify-content-center ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section>

    <!-- end contact section -->

    <section class="client_section layout_padding-bottom">
      <div class="container">
        <div class="custom_heading-container">
          <h3 class=" ">
            What clients says
          </h3>
        </div>
        <div class="layout_padding2-top">
          <div class="client_container">
            <div class="detail-box">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              </p>
            </div>
            <div class="client_id">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="name">
                <h5>
                  tempor incididunt
                </h5>
                <h6>
                  Owner
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info-logo">
              <h2>
                Heustonn
              </h2>
              <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-nav">
              <h4>
                Navigation
              </h4>
              <ul>
                <li>
                  <a href="index.html">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    About
                  </a>
                </li>
                <li>
                  <a href="service.html">
                    Services
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
                <li>
                  <a href="#">
                    Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-contact">
              <h4>
                Contact Info
              </h4>
              <div class="location">
                <h6>
                  Corporate Office Address:
                </h6>
                <a href="">
                  <img src="images/location.png" alt="">
                  <span>
                    Loram ipusm New York, NY 36524
                  </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Customer Service:
                </h6>
                <a href="">
                  <img src="images/telephone.png" alt="">
                  <span>
                    ( +01 1234567890 )
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="discover">
              <h4>
                Discover
              </h4>
              <ul>
                <li>
                  <a href="">
                    Help
                  </a>
                </li>
                <li>
                  <a href="">
                    How It Works

                  </a>
                </li>
                <li>
                  <a href="">
                    subscribe
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact Us
                  </a>
                </li>
              </ul>
              <div class="social-box">
                <a href="">
                  <img src="images/facebook.png" alt="">
                </a>
                <a href="">
                  <img src="images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/google-plus.png" alt="">
                </a>
                <a href="">
                  <img src="images/linkedin.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        Copyright &copy; 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>