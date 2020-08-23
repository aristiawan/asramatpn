<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Asrama</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/jquery-ui.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/aos.css') }}">
    <link rel="stylesheet" href=" {{ URL::asset('template/oneschool/oneschool/css/style.css') }}">

    <style>
      #message-danger, #message-success{
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          z-index:999; 
      }
      #danger-message, #success-message {
          margin: 0 auto;
      }

      .usia:focus, .jenjang:focus {   
        border-color: rgba(126, 239, 104, 0.8) !important;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6) !important;
        outline: 1 !important;
      }

      .form-control{ 
          height: 50px !important;
      }
    </style>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  @if(\Session::has('message-danger'))
  <div id="message-danger" >
      <div style="padding: 5px;">
          <div id="danger-message" class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <p > {{Session::get('message-danger')}}</p>
          </div>
      </div>
    </div>
    @endif
    @if(\Session::has('message-success'))
    <div id="message-success" >
        <div style="padding: 5px;">
            <div id="success-message" class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p> {{Session::get('message-success')}}</p>
            </div>
        </div>
    </div>
    @endif

  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="mr-auto w-25 text-left">
            <nav class="site-navigation position-relative text-left" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li>
                  <div class="site-logo mr-auto"><a href="#footer-section" class="nav-link">ASRAMA PUTRA TPN KUTAI BARAT</a></div>
                </li>
              </ul>
            </nav>
          </div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">HOME</a></li>
                <li><a href="#login-section" class="nav-link" id="to-login">LOGIN</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#survey-section" class="nav-link"><span>KUESIONER</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>

    <div class="intro-section" id="home-section">
      <div class="slide-1" style="background-image: url({{ URL::asset('template/oneschool/oneschool/images/kantor-bupati-kutai-barat.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
                <div style="text-align: center; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; color:white;">
                  <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Website Kuesioner Asrama</h1>
                  <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">Website Ini Digunakan Untuk Mengukur Timgkat Kepuasan Penghuni Asrama Terhadap Fasilitas Asrama</h2>
                  <nav role="navigation">
                    <ul class="main-menu">
                      <li>
                        <p data-aos="fade-up" data-aos-delay="300">
                          <a href="#survey-section" class="btn py-3 px-5 btn-pill" style="background-color:#7971ea !important;color: #fff !important">START KUESIONER</a>
                        </p>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="survey-section">
      <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="form-group row justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="100"> 
              <h2 class="section-title mb-3">Kuesioner </h2>
            </div>
              <form method="post" action="/kuisoner/tambah" data-aos="fade-up" data-aos-delay="200">
              @csrf 
              <div class="form-group row">
                <span> Keterangan &nbsp; : </span>
                <span>&nbsp;  | &nbsp;</span>
              @foreach($data_nilai as $penilaian)
                 <span>
                    {{$penilaian->kode_nilai}} = {{$penilaian->keterangan}} 
                </span>
                <span>
                &nbsp; | &nbsp;
                </span>
              @endforeach
              </div>
              </br>
              <div class="form-row">
                <div class="col">
                  <label for="Usia">Usia</label>
                  <input type="number" name="input[usia]" class="form-control usia" required >
                </div>
                <div class="col">
                  <label for="Jenjang Pendidikan">Jenjang Pendidikan</label>
                  <select class="form-control jenjang" name="input[jenjang_pendidikan]" id="jenjang-pendidikan" required>
                    <option value="" ></option>
                    @foreach($jenjang_pendidikan as $jp)
                    <option value="{{$jp->id_jenjang}}">{{$jp->jenjang}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              </br>
              <div class="form-group row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th scope="col" class="text-center">No</th>
                          <th scope="col" class="text-center">Fasilitas</th>
                          @foreach($data_nilai as $penilaian)
                          <th scope="col" class="text-center">{{$penilaian->kode_nilai}}</th>
                          @endforeach
                        </tr>
                    </thead>
                    <tbody>
                    @php ($temp_fasilitas = '')
                    @php ($value = 0)
                    @foreach($data as $kuisoner)
                      @if ($kuisoner->fasilitas != $temp_fasilitas)
                        @php ($start = 0)
                        @php ($temp_fasilitas = $kuisoner->fasilitas)
                        <tr>
                            <td colspan="7" class="font-weight-bold">{{$kuisoner->fasilitas}}</td>
                        </tr>
                      @endif
                        <tr>
                            <input type="hidden" name="input[penunjang_fasilitas][{{$value}}]" value="{{$kuisoner->id_penunjang_fasilitas}}">
                            <td class="text-justify">{{$start+1}}</td>
                            <td class="text-justify">{{$kuisoner->penunjang}}</td>
                            @foreach($data_nilai as $penilaian)
                            <td class="text-center"><input type="radio" name="input[nilai][{{$value}}]" id="inlineRadio2" value="{{$penilaian->id_penilaian}}" required></td>
                            @endforeach
                        </tr>
                      @php ($start = $start+1)
                      @php ($value = $value+1)
                    @endforeach
                    </tbody>
                  </table>
              </div>

              <div class="form-group row justify-content-center align-items-center">
                <div class="col-md-6">
                  <button type="submit" class="btn py-3 px-5 btn-block btn-pill" style="background-color:#1c4b82 !important; color:#fff !important;">
                    SUBMIT
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div id="login-section" class="site-section bg-image overlay" style="background-image: url({{ URL::asset('template/oneschool/oneschool/images/macandahan.JPG')}})" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center align-items-center">
            @include('login')
        </div>
      </div>
    </div>

    <footer class="footer-section" id="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ml-auto" data-aos-delay="500">
            <div class="col-md-12 text-center">
              <img src="{{ URL::asset('template/oneschool/oneschool/images/aristiawan.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
              <h3>Aristiawan</h3>
            </div>
          </div>

          <div class="col-md-4" style="text-align: center;">
            <h3>Asrama Putra TPN Kutai Barat</h3>
            <p>Jl persada 4, RT/RW 10/14, No.240, Karangnongko, Maguwoharjo, depok, Sleman, Yogyakarta</p>
          </div>

          <div class="col-md-4 ml-auto justify-content-center align-items-center" style="text-align: center;">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section">Home</a></li>
              <li><a href="#login-section">Login</a></li>
              <li><a href="#survey-section">Survey</a></li>
            </ul>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div> 
 

  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery-3.3.1.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery-ui.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/popper.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/bootstrap.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/owl.carousel.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery.stellar.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery.countdown.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/bootstrap-datepicker.min.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery.easing.1.3.js') }}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/aos.js')}}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery.fancybox.min.js')}}"></script>
  <script src=" {{ URL::asset('template/oneschool/oneschool/js/jquery.sticky.js')}}"></script>
  <script src="{{ URL::asset('template/oneschool/oneschool/js/main.js')}}"></script>
  <script>
  $(document).ready(function(){

      window.setTimeout(function() {
          $("#message-success").fadeTo(500, 0).slideUp(500, function(){
              $('#message-success').hide();
          });
      }, 5000);

      window.setTimeout(function() {
          $("#message-danger").fadeTo(500, 0).slideUp(500, function(){
              $('#message-danger').hide();
          });
      }, 5000);
  });
  </script>
  </body>
</html>