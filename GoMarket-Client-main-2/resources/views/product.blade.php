<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" rel=stylesheet>
  <link href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css" rel=stylesheet>
  <link href="{{ asset('resources/css/theme.css') }}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
  <style>
  .logo-brand {
    width: 50px;
    height: 50px;
  }
  .icon-flex {
    display: flex;
  }
  .cart-group-icon {
    position: relative;
  }

  .cart-group-icon .cart-box-icon {
    position: absolute;
    top: 20%;
    left: 2rem;
    color: #EEEEEE;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  </style>
</head>

<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <section class="py-5 overflow-hidden bg-primary" id="home">
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex" href="{{ route('app-home') }}"><img class="d-inline-block logo-brand" src="{{ asset('resources/images/logo.png') }}" alt="logo" /><span class="text-1000 fs-3 fw-bold ms-2 text-gradient">GoMarket</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <form>
            <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
              <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food" aria-label="Search" />
            </div>
          </form>
          <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
            <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Ngành hàng
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">Rau củ quả</button></li>
                <li><button class="dropdown-item" type="button">Thực phẩm sống</button></li>
                <li><button class="dropdown-item" type="button">Thực phẩm khô, đồ hộp</button></li>
                <li><button class="dropdown-item" type="button">Trái Cây</button></li>
                <li><button class="dropdown-item" type="button">Mặt hàng gia vị</button></li>
                <li><button class="dropdown-item" type="button">Đồ sinh hoạt</button></li>
                <li><button class="dropdown-item" type="button">Nước uống</button></li>
              </ul>
              {{-- <button class="btn btn-primary">      {{count($cart)}}  @foreach($cart as $cartDetail)
                <span>{{$cartDetail["productName"]}}</span>
                @endforeach</button> --}}
            </div>
            <div class="cart-group-icon">
              <a class="btn btn-primary badge-notification badge rounded-pill" type="button" href="{{ route('app-cart') }}">
                <span class="material-icons">shopping_cart</span>
              </a>
              @if ($cart)
                @if (count($cart) > 0)
                <span id="navbarNotificationCounter" class="cart-box-icon badge rounded-pill badge-notification bg-danger" alt="Notifications" style="color: rgb(255, 255, 255) !important;">{{$cartCount}}</span>
                @endif
              @endif
            </div>
            @if ($user)
            <ul class="navbar-nav ms-auto me-4 me-lg-4">
              <li class="nav-item dropdown">
                <button class="btn btn-primary dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown"
                  aria-expanded="false">Tài khoản</button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">Thay đổi thông tin</a></li>
                  <li><a class="dropdown-item" href="#!">Tình trạng hoạt động</a></li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li><a class="dropdown-item" href="#!">Đăng xuất</a></li>
                </ul>
              </li>
            </ul>
            @else
            <a href="{{ route('app-login') }}" class="btn btn-white shadow-warning text-warning" type="button"> <i class="fas fa-user me-2"></i>Login</a>
            @endif
          </div>
        </div>
      </nav>
    </section>

    <!-- <section> begin ============================-->
    <section class="py-4 pt-5">

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card card-span mb-3 shadow-lg">
              <div class="card-body py-0">
                <div class="row justify-content-center">
                  <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src={{$product["image"]}} alt="..." /></div>
                  <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                    <h1 class="card-title mt-xl-5 mb-4"><span class="text-primary">{{$product["productName"]}}</span></h1>
                    <p class="fs-1">{{$product["storeName"]}}</p>
                    <div><span class="text-1000 fw-bold">{{$product["price"]}} Đ</span></div>
                    <div class="d-flex mb-4" style="max-width: 200px">
                      <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <span>-</span>
                      </button>
                      <input class="border-0 input-box form-control" type="number" placeholder="1"/>
                      <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <span>+</span>
                      </button>
                    </div>
                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="">Đặt vào giỏ<i class="fas fa-chevron-right ms-2"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <section class="py-4 overflow-hidden">

      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Sản Phẩm Tiêu Biểu</h5>
          </div>
          <div class="col-12">
            <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row gx-3 h-100 align-items-center">
                    @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                      <a href="https://www.google.com/">
                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src={{$product["image"]}} alt="..." />
                          <div class="card-body ps-0">
                            <h5 class="fw-bold text-1000 text-truncate mb-1">{{$product["productName"]}}</h5>
                            <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">{{$product["storeName"]}}</span></div><span class="text-1000 fw-bold">{{$product["price"]}}</span>
                          </div>
                        </div>
                      </a>
                      <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Đặt vào giỏ</a></div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 pt-7 bg-1000">

      <div class="container">
        <div class="row justify-content-lg-between">
          <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Francisco</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Miami</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Diego</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">East Bay</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Long Beach</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los Angeles</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington DC</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Seattle</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Portland</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Nashville</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York City</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange County</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Atlanta</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Charlotte</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Denver</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Chicago</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Phoenix</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Las Vegas</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Oklahoma City</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Columbus</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Mexico</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Albuquerque</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Sacramento</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Orleans</a></li>
            </ul>
          </div>
        </div>
        <hr class="text-900" />
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About Us</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Careers</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
            <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp; Support</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner with us </a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Ride with us</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie Policy</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-8 col-lg-6 col-xxl-4">
            <h5 class="lh-lg fw-bold text-500">FOLLOW US</h5>
            <div class="text-start my-3"> <a href="#!">
                <svg class="svg-inline--fa fa-instagram logo-brand fa-w-14 fs-2 me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path fill="#BDBDBD" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                </svg></a><a href="#!">
                <svg class="svg-inline--fa fa-facebook logo-brand fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="#BDBDBD" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                </svg></a><a href="#!">
                <svg class="svg-inline--fa fa-twitter  logo-brand  fa-w-16 fs-2 mx-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="#BDBDBD" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg></a></div>
            <h3 class="text-500 my-4">Receive exclusive offers and <br />discounts in your mailbox</h3>
            <div class="row input-group-icon mb-5">
              <div class="col-auto"><i class="fas fa-envelope input-box-icon text-500 ms-3"></i>
                <input class="form-control input-box bg-800 border-0" type="email" placeholder="Enter Email" aria-label="email" />
              </div>
              <div class="col-auto">
                <button class="btn btn-primary" type="submit">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
        <hr class="border border-800" />
        <div class="row flex-center pb-3">
          <div class="col-md-6 order-0">
            <p class="text-200 text-center text-md-start">All rights Reserved &copy; Your Company, 2021</p>
          </div>
          <div class="col-md-6 order-1">
            <p class="text-200 text-center text-md-end"> Made with&nbsp;
              <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFB30E" viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
              </svg>&nbsp;by&nbsp;<a class="text-200 fw-bold" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
            </p>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
</body>

</html>
