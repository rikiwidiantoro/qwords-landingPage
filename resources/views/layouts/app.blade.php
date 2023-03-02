<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Landing Page Index</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        {{-- bootstrap css cdn --}}
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
        {{-- <div class="relative flex items-top bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
            

      {{-- nav-info --}}
      <div class="nav-info navbar navbar-expand-lg bg-dark text-bg-dark px-0 py-1 m-0" data-bs-theme="dark">
        <div class="container">
          <div>Cloud Hosting Indonesia dengan pelayanan terbaik dan harganya murah dengan diskon nama domain.</div>
        </div>
      </div>
      {{-- nav-info --}}

      {{-- navbar --}}
      <nav class="navbar navbar-expand-lg bg-dark text-bg-dark py-3" data-bs-theme="dark">
        <div class="container">
          <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/logo-light.png" alt="Logo Qwords" width="120">
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cloud Hosting
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Server
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Internet Access
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Domain
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Email Suite
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Customor Care
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>              
          </div>
            <form class="d-flex " role="search">
              {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
              <button class="btn btn-outline-warning px-4" type="submit">Login</button>
            </form>
        </div>
      </nav>
      {{-- navbar --}}

      {{-- header --}}
      <header class="bg-dark text-bg-dark">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-8">
              <h1 class="display-5 fw-bold">Cloud Hosting Indonesia</h1>
              <p class="col-md-8 fs-4">Cloud Hosting Indonesia dengan pelayanan terbaik dan harga murah serta diskon nama domain.</p>
              <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
            <div class="col-md-4 text-end">
              <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/illustration/internet-rumah-cepat.png" alt="gambar1" width="300">
            </div>
          </div>
        </div>
      </header>
      {{-- header --}}


      {{-- main --}}
      <main>
        <div class="container py-5">
          <div class="row">
            <div class="col-md-12">
              <div class="main-layanan text-center">
                <h1>Cloud Hosting dan VPS Diskon Hingga 60% !</h1>
                <p>Layanan unggulan dengan teknologi terbaik untuk website anda</p>
                <div class="kotak mt-5">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="card border-0 p-5" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                        <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-vhp.svg" class="card-img-top" alt="gambar">
                        <div class="card-body">
                          <a href="">Value Cloud Hosting</a>
                          <h4>VCH1</h4>
                          <p class="card-text">Rp 14.500</p>
                          <button type="button" class="btn btn-outline-warning">order sekarang</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="main-layanan-other text-center">
                <h1>Lihat Juga Layanan Kami Yang Lain</h1>
                <p>Layanan unggulan dengan teknologi terbaik untuk website anda</p>
              </div>
              <div class="kotak mt-4">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card border-0 p-3" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                      {{-- <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-vhp.svg" class="card-img-top" alt="gambar"> --}}
                      <div class="card-body">
                        <h4>SSL</h4>
                        <p class="card-text">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</p>
                        <span class="card-text">Mulai dari <br> Rp 112.000/thn</span><br>
                        <button type="button" class="btn btn-outline-warning">order sekarang</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="main-solusi-text text-center">
                <h1>Solusi Terbaik dari Kami</h1>
                <p>Kami menawarkan solusi terbaik untuk segala kebutuhan website dan sistem anda. Mulai dari blog hingga website bisnis dan perusahaan.</p>
              </div>
              <div class="main-blog">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card border-0" style="background-image: url('https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-corporate.png'); background-size: cover; height: 250px">
                      <div class="card-body" style="height: 250px;"><br><br><br><br><br>
                        <span class="card-text text-white align-bottom">Perusahaan <br> Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="main-komitmen text-center">
                <h1>Komitmen Qwords</h1>
                <p>Berbagai Alasan Mengapa Pelanggan memilih Qwords</p>
              </div>
              <div class="kotak mt-4">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card border-0 p-3" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                      {{-- <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-vhp.svg" class="card-img-top" alt="gambar"> --}}
                      <div class="card-body">
                        <h4>Layanan 24/7</h4>
                        <p class="card-text">Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-5">
              <div class="main-pelanggan text-center mb-3">
                <h1>Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h1>
              </div>
              <img style="width: 100%;" src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partner-desktop.2.jpg">
            </div>
            <div class="col-md-12 mt-5">
              <div class="main-partner text-center mb-3">
                <h1>Partner kami</h1>
              </div>
              <div class="row" style="justify-content: center;align-items: center;">
                <div class="list-pelanggan col-md-2">
                  <a href="https://cloud.google.com/find-a-partner/partner/pt-qwords-company-international">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/googlecloud.png" alt="partner">
                  </a>
                </div>
                <div class="list-pelanggan col-md-2">
                  <a href="https://partnernoc.cpanel.net/res/6321/qwordscom-goldenfastnet.htm">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_cpanel.png" alt="partner">
                  </a>
                </div>
                <div class="list-pelanggan col-md-2">
                  <a href="https://www.idea.or.id/directory-anggota?search=Qwords">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_idea.png" alt="partner">
                  </a>
                </div>
                <div class="row list-pelanggan w-100 col-md-1">
                <a href="https://ach.id/keanggotaan/">
                <img data-lazyloaded="1" src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_achi.png" data-src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_achi.png" alt="partner" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_achi.png" alt="partner" /></noscript>
                </a></div><div class="row list-pelanggan w-100 col-md-2">
                <a href="https://pandi.id/registrar/">
                <img data-lazyloaded="1" src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_pandi.png" data-src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_pandi.png" alt="partner" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_pandi.png" alt="partner" /></noscript>
                </a></div><div class="row list-pelanggan w-100 col-md-2">
                <a href="#">
                <img data-lazyloaded="1" src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/AREDO-transparent.png" data-src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/AREDO-transparent.png" alt="partner" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/AREDO-transparent.png" alt="partner" /></noscript>
                </a></div><div class="row list-pelanggan w-100 col-md-2">
                <a href="https://www.icann.org/en/accredited-registrars?sort-direction=asc&amp;sort-param=name&amp;page=1&amp;iana-number=4029&amp;view-all=true">
                <img data-lazyloaded="1" src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_icann.png" data-src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_icann.png" alt="partner" data-ll-status="loaded" class="entered litespeed-loaded"><noscript><img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/partners/ic_icann.png" alt="partner" /></noscript>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      {{-- main --}}



        



        {{-- bootstrap js cdn --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
