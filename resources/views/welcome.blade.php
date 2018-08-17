<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>EONESIA</title>
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('eonesia/f-n/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="{{ asset('eonesia/f-n/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection" />
  <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('eonesia/f-n/css/animate.css')}}">
  <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">
  <style>
    .material-icons {
      color: black;
    }

    .right {
      color: black;
    }

    .people {
      color: white;
    }


  </style>
</head>
<body>
  <div id="particles-js"></div>
  <div class="navbar-fixed hoverable">
    <nav class="transparentBG" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">EONESIA</a>
        <ul class="right hide-on-med-and-down">
          <li>
            <a id="logo-container" class="scrollspy" href="#">HOME</a>
          </li>
          <li>
            <a id="logo-container" class="event" href="#event">EVENT</a>
          </li>
          <li>
            <a id="logo-container" class="patner" href="#patner">PATNER</a>
          </li>
          <li>
            <a id="logo-container" class="contact" href="#contact">CONTACT</a>
          </li>
          {{--  <li>
            <a id="logo-container" class="contact" href="{{ route('getData') }}">DAFTAR</a>
          </li>  --}}
        </ul>
        <ul id="nav-mobile" class="sidenav">
          <li>
            <a id="logo-container" class="scrollspy" href="#">HOME</a>
          </li>
          <li>
            <a id="logo-container" class="scrollspy" href="#event">EVENT</a>
          </li>
          <li>
            <a id="logo-container" class="scrollspy" href="#client">CLIENT</a>
          </li>
          <li>
            <a id="logo-container" href="#contact">CONTACT</a>
          </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
      </div>
    </nav>
  </div>
  @include('frontend._flash')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <br>
      <h1 class="header center orange-text">EVENT EONESIA</h1>
      <div class="row center">
        <h5 class="header col s12 light">Brand Activation | Apparel & Merchendise |
                        Advertising | Event Organizer | Product | 3D Animation | Exhibition | Multimedia
                        Development | Customer Insight</h5>
      </div>
      <br>
      <br>
      <div class="row center" id="event">
        <a class="btn-floating btn-large waves-effect waves-light white">
          <i id="bawah" class="material-icons animated infinite bounceInDown">arrow_downward</i>
        </a>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>
  {{-- <div class="container">
            <div class="row">
                <h2 class="header center event-tersedia">EVENT READY</h1>
                @foreach ($activities as $event)
                <div class="col l4 s12">
                    <div class="card hoverable event-card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{ $event->ImagePath }}">
                            <span class="card-title blue-text" id="instansi">{{ $event->penyelenggara }}</span>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{!! substr($event->nama_event,0,15) !!}...<i class="material-icons right">more_vert</i>
                            </span>
                            <p>
                                <a href="#"><i class="material-icons">event</i> Start : {{ $event->MulaiEvent }}</a>
                                <br>
                                <a href="#"><i class="material-icons">event_available</i> Finish : {{ $event->BerakhirEvent }}</a>
                                <br>
                                <a href="#"> <i class="material-icons">location_on</i>{{ $event->alamat }}</a>

                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $event->nama_event }}
                                <i class="material-icons right">close</i>
                            </span>
                            <p>{{ $event->ketentuan }}</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('pendaftaran', $event->slug) }}">
                                <button class="btn waves-effect waves-light orange accent-3" type="submit" name="action">Daftar Peserta Event
                                <i class="material-icons right">person_add</i>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
  <a href="#">
    <h1 id="patner" class="header event-tersedia center">OUR PATNER</h1>
  </a>
  <div class="parallax-container patner-bawah">
    <div class="parallax"><img src="{{ asset('eonesia/images/bh.png')}}"></div>
    <div class="">
      <!-- <div class="container-fluid grey lighten-2"> <div class="row center"> -->
      <div class="carousel">
        <div class="col l4 s12">
          <a class="carousel-item" href="#one!"><img class="responsive-img center" src="https://www.eonesia.id/image/kerjasama/png/bri.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#two!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/indosat.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#three!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/xl.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#four!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/bpjs.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#five!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/blackberry.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#six!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/abc.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#seven!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/pos.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#eight!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/ojk.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#nine!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/pnm.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#ten!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/propan.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#eleven!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/telkom.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#twelve!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/yamaha.png"></a>
        </div>
        <div class="col l4 s12">
          <a class="carousel-item" href="#thirteen!"><img class="responsive-img" src="https://www.eonesia.id/image/kerjasama/png/biznet.png"></a>
        </div>
      </div>
    </div>
    <!-- </div> </div> -->
  </div>
  <footer id="contact" class="page-footer  blue-grey darken-3">
    <div class="container contact-bawah">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Contact Us</h5>
          <table class="striped">
            <tbody>
              <tr>
                <td class="striped">Company Name</td>
                <td>: CV. Risa Creativindo</td>
              </tr>
              <tr>
                <td>Brand Name</td>
                <td>: EONESIA</td>
              </tr>
              <tr>
                <td class="striped">Legal Creativindo</td>
                <td>: CV. Risa Creativindo</td>
              </tr>
              <tr>
                <td>NPWP</td>
                <td>: 31.630.250.4-502.000</td>
              </tr>
              <tr>
                <td class="striped">Tagline</td>
                <td>: Turning Ideas Into Action</td>
              </tr>
              <tr>
                <td>Unit Division</td>
                <td>: Advertising, Production, EO</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Address</h5>
          <table class="striped">
            <tbody>
              <tr>
                <td style="border-width: 0px;">OFFICE</td>
                <td style="border-width: 0px;">Villa Madani No B43 Jl. Dharma Bakti Medono Pekalongan - Jawa Tengah 51111</td>
              </tr>
              <tr>
                <td style="border-width: 0px;">WORKSHOP</td>
                <td style="border-width: 0px;">Jaten, Teter, RT 02/01 Simo Boyolali Jawa Tengah 57377 Hp. 08562699626</td>
              </tr>
              <tr>
                <td style="border-width: 0px;">Email</td>
                <td style="border-width: 0px;">Marketing@Eonesia.id</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Sosial Media</h5>
          <ul>
            <li>
              <img src="https://png.icons8.com/color/50/000000/facebook.png">
              <img src="https://png.icons8.com/color/50/000000/twitter.png">
              <img src="https://png.icons8.com/color/50/000000/pinterest.png">
              <img src="https://png.icons8.com/color/50/000000/instagram-new.png">
              <img src="https://png.icons8.com/color/50/000000/linkedin.png">
              <img src="https://png.icons8.com/color/50/000000/whatsapp.png">
              <img src="https://png.icons8.com/color/50/000000/youtube-play.png">
              <img src="https://png.icons8.com/color/50/000000/google-plus-squared.png">
            </li>ooter-copyright
          </ul>
        </div>
      </div>
    </div>
    {{--  <div class="daftar-tombol blue-grey darken-3 center">
          <a class="white-text center" href="">DAFTAR</a>
      </div>  --}}
    <div class="footer-copyright blue-grey darken-3">
      <div class="container">
        <a class="white-text" href="">© 2017 e.o.n.e.s.i.a All rights reserved</a>
        <a href="#" class="right white-text">
          Web Design By MegonoDev</a>
      </div>
    </div>
  </footer>
<div class="fixed-action-btn">
  <a class="waves-effect waves-light btn-large red" href="{{ route('getData') }}">
   <i class="material-icons left people">people</i>
   <b>DAFTAR TEST DRIVE</b>
  </a>
</div>


  <script src="{{ asset('eonesia/f-n/js/particles.js')}}"></script>
  <script src="{{ asset('eonesia/f-n/js/app.js')}}"></script>
  <script src="{{ asset('eonesia/f-n/js/lib/stats.js')}}"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('eonesia/f-n/js/materialize.js')}}"></script>
  <script src="{{ asset('eonesia/f-n/js/init.js')}}"></script>
  <script src="{{ asset('eonesia/f-n/js/eonesia.js')}}"></script>
</body>
</html>
