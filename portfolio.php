<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ABM</title>
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/index.png"> -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="fonts/css/fontawesome.min.css">
  <link rel="stylesheet" href="fonts/css/all.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.5/flickity.min.css'>

  <style>
    .port-grid {
      width: 33.33%;
      padding: 15px;
    }

    .resize-port {
      display: flex;
      justify-content: flex-end;
      position: sticky;
      top: 85px;
    }

    .resize-port span i {
      height: 80%;
      width: 80%;
      margin: 2px;
      background-color: #1c3814;

    }

    .resize-port span {
      display: flex;
      height: 40px;
      flex-direction: row;
      width: 40px;
      background: #aad01942;
      padding: 4px;
      margin: 10px 3px;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border: 2px solid #55555526;

    }

    .resize-port span.act {

      background: #aad0199e;
    }

    @media(max-width:991px){
      .resize-port{display: none;}
    }
  </style>
</head>



<body style="overflow: visible;">

  <?php include('header.php');

  ?>

  <section class="banner green pb-2">

    <div class="container py-3">


      <h2><strong> Portfolio </strong></h2>

      <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item"><a href="#">Home</a></li>

          <li class="breadcrumb-item active" aria-current="page">Portfolio</li>

        </ol>

      </nav>

    </div>

  </section>


  <section class="portfolio">
    <div class="container">
      <div class="section-title text-center">
        <h2>My <span> Portfolio</span></h2>
      </div>

      <div class="resize-port text-dark">
        <span id="quart" class="act"><i></i><i></i><i></i></span>
        <span id="half"><i></i><i></i></span>
        <span id="full"><i></i></span>
      </div>

      <div class="room-outer">
        <div class="row g-2">

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/pala.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Pala Dental</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://paladentalclinic.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/pala.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/wb.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Wedding Butterfly</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/june/wedding-butterflies/index.php" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/wb.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/vmx.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>vmx connectors</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/05/vmxconnectors.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/vmx.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/kl24.jpg" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>keralalive24</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://keralalive24.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/portfolio/kl24.jpg" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/trisun.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Trisun</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/07/trison/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/trisun.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/rainy.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Rainy Kerala HouseBoat</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://rainykeralahouseboats.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/rainy.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/oroma.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Oroma</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/07/oromahinternational.com2/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/oroma.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/marvel.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Marvel Tour</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/marveltours.in/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/marvel.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/mafas.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Mafas Hearing</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="http://mafashearingsolutions.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/mafas.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/lulu.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>lulu Fashion</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/april/lulu3/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/lulu.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/lecas.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Lecas</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/06/lecas/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/lecas.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/guardian.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Guardian</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/guardian.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/green.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Green Curam</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://greencuram.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/green.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/adlux.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Adlux</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/adlux/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/adlux.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/apollo.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Apollo Hospital</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/apollo-hospital-new/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/apollo.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/rp.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>RP Group</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/rp.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/di.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Design Identity</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://designidentity.in/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/di.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/unimoni.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>unimoni</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/06/unimoni.in/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/unimoni.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/johnstar.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Johnstar construction</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/05/johnstarconstruction.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/johnstar.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/kcms.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Karnataka College</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://mttmkcmsblr.org/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/kcms.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/cas.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>CAS Hotels</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://cashotels.in/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/cas.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/southcab.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Southindiancabs</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://southindiancabs.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/southcab.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/jeong.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Jeong</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/jeong/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/jeong.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>

          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/mapp.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Mapplawchambers</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/05/mapplawchambers/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/mapp.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>


          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/winter.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>winterwale</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://globosoft.org/2022/march/wintervalestay/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/winter.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>


          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/online.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Onlineattestation</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://www.onlineattestation.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/online.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>


          <div class="port-grid mar-bottom-30">
            <div class="port-item">
              <div class="port-image"> <img src="images/portfolio/geo.png" alt="image"> </div>
              <div class="port-content">
                <div class="port-title">
                  <h4>Geo Enterprises</h4>

                </div>

                <div class="room-btns mar-top-20 ">
                  <a href="https://geoenterpriseskerala.com/" class="btn btn-black mar-right-10" target="_blank"> Visit Site </a>
                  <a href="images/pdf/geo.pdf" class="btn btn-orange" download>Download</a>
                </div>
              </div>
            </div>
          </div>


          

        </div>
      </div>
     
    </div>
  </section>

  <?php include('footer.php');

  ?>


  <script>
    $(document).ready(function() {

      if ($(window).width() >= 992) {

        $("#full").click(function() {
          $(".port-grid").css('width', '100%');
          $(".resize-port span").removeClass('act');
          $(this).addClass('act');
        });

        $("#half").click(function() {
          $(".port-grid").css('width', '50%');
          $(".resize-port span").removeClass('act');
          $(this).addClass('act');
        });

        $("#quart").click(function() {
          $(".port-grid").css('width', '33.33%');
          $(".resize-port span").removeClass('act');
          $(this).addClass('act');
        });


      } else {
        $(".port-grid").css('width', '100%');
      }


    });
  </script>

</body>

</html>