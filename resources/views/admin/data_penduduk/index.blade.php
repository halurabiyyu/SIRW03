<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Use tables to show more complex amount of data">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.67.1">

<title>Tables · Volt Laravel Dashboard Documentation</title>





<!-- Bootstrap core CSS -->


<link type="text/css" href="../../assets/vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/notyf/notyf.min.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/fullcalendar/main.min.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">


<link type="text/css" href="../../assets/vendor/leaflet/dist/leaflet.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/docs.css">


<!-- Favicons -->
<link rel="apple-touch-icon" href="../../assets/img/favicon/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="../../assets/img/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="../../assets/img/favicon/favicon-16x16.png" sizes="16x16" type="image/png">

<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="../../assets/img/favicon/favicon.ico">
<meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

<link rel="canonical" href="https://themesberg.com/product/laravel/volt-admin-dashboard-template">
<meta  name="keywords" content="themesberg, updivision, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, Volt Laravel Admin Dashboard, livewire volt dashboard, volt admin, livewire dashboard, livewire admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, volt dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, volt dashboard, volt laravel bootstrap 5 dashboard"></meta>
<meta  name="description" content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js"></meta>
<meta  itemprop="name" content="Volt Laravel Admin Dashboard by Themesberg & UPDIVISION"></meta>
<meta  itemprop="description" content="Volt Laravel Admin Dashboard features dozens of UI components and a Laravel backend with Livewire & Alpine.js"></meta>
<meta  itemprop="image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-laravel-dashboard/volt-free-laravel-dashboard.jpg"></meta>
<meta  name="twitter:card" content="product"></meta>
<meta  name="twitter:site" content="@themesberg"></meta>
<meta name="twitter:title" content="Tables · Volt Laravel Dashboard Documentation">
<meta name="twitter:description" content="Use tables to show more complex amount of data">
<meta name="twitter:image" content="../../assets/img/volt-bootstrap-5-dashboard-preview.jpg">

<!-- Facebook -->
<meta property="og:url" content="../../components/tables/">
<meta property="og:title" content="Tables · Volt Laravel Dashboard Documentation">
<meta property="og:description" content="Use tables to show more complex amount of data">
<meta property="og:type" content="website">
<meta property="og:image" content="../../assets/img/volt-bootstrap-5-dashboard-preview.jpg">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-141734189-6');
</script>
<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({
      'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-THQTXJ7');</script>
<!-- End Google Tag Manager -->


  </head>
  <body>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THQTXJ7" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <header class="navbar navbar-nav navbar-expand navbar-dark navbar-theme-primary">
  <div class="container px-3 px-md-4">
    <div class="d-flex align-items-center">
      <a class="navbar-brand me-4" href="../../getting-started/overview/index.html" aria-label="Volt Documentation">
        <img src="../../assets/brand/light.svg" height="30" alt="Volt logo">
        <span class="ms-2">Volt Docs</span>
      </a>

      <div class="navbar-nav-scroll order-md-0 justify-content-start d-none d-md-flex">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link" href="https://themesberg.com/templates/laravel/" target="_blank" rel="noopener">Themes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownPreview" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Live preview <svg class="icon icon-xs" style="height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownPreview">
              <li>
                <a href="https://volt-laravel-admin-dashboard.updivision.com/" target="_blank" class="dropdown-item">Volt Laravel Dashboard</a>
              </li>
              <li>
                <a href="https://volt-pro-laravel-admin-dashboard.updivision.com/" target="_blank" class="dropdown-item">Volt PRO Laravel Dashboard</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownSupport" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Support <svg class="icon icon-xs" style="height: 1rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownSupport">
              <li>
                <a href="https://github.com/themesberg/volt-laravel-dashboard/issues" target="_blank" class="dropdown-item">Volt Laravel Dashboard</a>
              </li>
              <li>
                <a href="https://themesberg.com/contact" target="_blank" class="dropdown-item">Volt PRO Laravel Dashboard</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <button class="btn btn-link bd-search-docs-toggle d-lg-none p-0 ms-3 order-3 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>
    </button>

    <div class="d-flex align-items-center">
      <ul class="flex-row list-unstyled me-3 mb-0 d-none d-lg-flex">
        <li class="me-3">
          <a href="https://www.facebook.com/themesberg/" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="icon icon-xs text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
          </a>
        </li>
        <li class="me-3">
          <a href="https://twitter.com/themesberg" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="icon icon-xs text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
          </a>
        </li>
        <li class="me-3">
          <a href="https://github.com/themesberg/volt-laravel-dashboard" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="icon icon-xs text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
          </a>
        </li>
      </ul>
      <div class="d-none d-lg-flex">
        <a class="btn btn-secondary text-dark animate-up-2 ms-3 d-none d-sm-flex align-items-center justify-content-center" href="https://themesberg.com/product/laravel/volt-pro-admin-dashboard-template" target="_blank"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>Buy now</a>
        <a class="btn btn-outline-white animate-up-2 ms-3 d-none d-sm-inline-block" href="https://themesberg.com/product/laravel/volt-admin-dashboard-template" target="_blank">Try free demo</a>
      </div>
    </div>
  </div>
</header>

    <nav class="bd-subnavbar pt-3 pb-3 pb-md-3 d-lg-none">
  <div class="container">




    <div class="d-flex w-100 align-items-center justify-content-end justify-lg-content-between">
      <ul class="flex-row list-unstyled me-3 mb-0 d-none d-lg-flex">
        <li class="me-3">
          <a href="https://www.facebook.com/themesberg/" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="icon icon-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
          </a>
        </li>
        <li class="me-3">
          <a href="https://twitter.com/themesberg" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="icon icon-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
          </a>
        </li>
        <li class="me-3">
          <a href="https://github.com/themesberg/volt-laravel-dashboard" target="_blank">
            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="icon icon-xs text-gray-800" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
          </a>
        </li>
      </ul>
      <div>
        <a class="btn btn-secondary text-dark animate-up-2 ms-2 ms-lg-3" href="https://themesberg.com/product/laravel/volt-pro-admin-dashboard-template" target="_blank"><svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>Buy now</a>
        <a class="btn btn-outline-gray-800 animate-up-2 ms-2 ms-lg-3" href="https://themesberg.com/product/laravel/volt-admin-dashboard-template" target="_blank">Try free demo</a>
      </div>
    </div>


  </div>
</nav>


    <div class="container my-4">
      <div class="row flex-xl-nowrap">
        <div class="col-lg-2 bd-sidebar" style="width: 19%;">
          <nav class="collapse bd-links" id="bd-docs-nav" aria-label="Main navigation"><ul class="list-unstyled">

            <li class="bd-sidenav-group my-1 js-sidenav-group has-children">
              <a class="d-inline-flex align-items-center bd-sidenav-group-link"   href="../../getting-started/overview/index.html">
                Getting started
              </a>
              <ul class="nav bd-sidenav flex-column mb-2">
                <li >
                  <a href="../../getting-started/overview/index.html">Overview
                  </a>
                </li>
                <li >
                  <a href="../../getting-started/download/index.html" >Download
                  </a>
                </li>
                <li >
                  <a href="../../getting-started/installation/index.html" >Installation
                  </a>
                </li>
                <li>
                  <a href="../../getting-started/license/index.html">License
                  </a>
                </li>
                <li >
                  <a href="../../getting-started/file-structure/index.html" >File structure
                  </a>
                </li>
                <li >
                  <a href="../../getting-started/build-tools/index.html" >Build tools
                  </a>
                </li>
                <li>
                  <a href="../../getting-started/changelog/index.html">Changelog
                  </a>
                </li>
            </ul>
            </li>

            <li class="bd-sidenav-group my-1 js-sidenav-group has-children">
                      <a class="d-inline-flex align-items-center bd-sidenav-group-link"   href="../../laravel-example-pages/settings/index.html">
                        Laravel example pages
                      </a>
                      <ul class="nav bd-sidenav flex-column mb-2">
                          <li>
                            <a href="../../laravel-example-pages/sign-in/index.html">Sign in
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/sign-up/index.html">Sign up
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/forgot-password/index.html">Forgot password
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/reset-password/index.html">Reset password
                            </a>
                          </li>
                           <li >
                            <a href="../../laravel-example-pages/settings/index.html" >Profile
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/role-management/index.html">Role Management<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/user-management/index.html">User Management<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/tag-management/index.html">Tag Management<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/category-management/index.html">Category Management<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                            </a>
                          </li>
                          <li>
                            <a href="../../laravel-example-pages/item-management/index.html">Item Management<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                            </a>
                          </li>
                      </ul>
              </li>

              <li class="bd-sidenav-group my-1 js-sidenav-group has-children">
                <a class="d-inline-flex align-items-center bd-sidenav-group-link"   href="../../foundation/colors/index.html"  >
                  Foundation
                </a>
                <ul class="nav bd-sidenav flex-column mb-2">
                    <li >
                      <a href="../../foundation/colors/index.html" >Colors
                      </a>
                    </li>
                    <li>
                      <a href="../../foundation/grid/index.html">Grid
                      </a>
                    </li>
                    <li>
                      <a href="../../foundation/icons/index.html">Icons
                      </a>
                    </li>
                    <li>
                      <a href="../../foundation/typography/index.html">Typography
                      </a>
                    </li>
                </ul>
              </li>

              <li class="bd-sidenav-group my-1 active js-sidenav-group has-children">
                <a class="d-inline-flex align-items-center bd-sidenav-group-link"   href="../../components/accordions/index.html"  aria-current="true">
                  Components
                </a>
                <ul class="nav bd-sidenav flex-column mb-2">
                    <li >
                      <a href="../../components/accordions/index.html" >Accordions
                      </a>
                    </li>
                    <li>
                      <a href="../../components/alerts/index.html">Alerts
                      </a>
                    </li>
                    <li>
                      <a href="../../components/badges/index.html">Badges
                      </a>
                    </li>
                    <li>
                      <a href="../../components/widgets/index.html">Widgets
                      </a>
                    </li>
                    <li>
                      <a href="../../components/breadcrumbs/index.html">Breadcrumbs
                      </a>
                    </li>
                    <li>
                      <a href="../../components/buttons/index.html">Buttons
                      </a>
                    </li>
                    <li>
                      <a href="../../components/forms/index.html">Forms
                      </a>
                    </li>
                    <li>
                      <a href="../../components/modals/index.html">Modals
                      </a>
                    </li>
                    <li>
                      <a href="../../components/navs/index.html">Navs
                      </a>
                    </li>
                    <li>
                      <a href="../../components/navbars/index.html">Navbars
                      </a>
                    </li>
                    <li >
                      <a href="../../components/pagination/index.html" >Pagination
                      </a>
                    </li>
                    <li>
                      <a href="../../components/popovers/index.html">Popovers
                      </a>
                    </li>
                    <li>
                      <a href="../../components/progress/index.html">Progress
                      </a>
                    </li>
                    <li class="active bd-sidenav-active">
                      <a href="../../components/tables/index.html" aria-current="page">Tables
                      </a>
                    </li>
                    <li>
                      <a href="../../components/tabs/index.html">Tabs
                      </a>
                    </li>
                    <li>
                      <a href="../../components/toasts/index.html">Toasts
                      </a>
                    </li>
                    <li>
                      <a href="../../components/tooltips/index.html">Tooltips
                      </a>
                    </li>
                </ul>
              </li>

              <li class="bd-sidenav-group my-1 js-sidenav-group has-children">
                <a class="d-inline-flex align-items-center bd-sidenav-group-link"   href="../../plugins/chartist/index.html">
                  Plugins
                </a>
                <ul class="nav bd-sidenav flex-column mb-2">
                    <li >
                      <a href="../../plugins/chartist/index.html" >Chartist
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/datepicker/index.html">Datepicker
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/notifications/index.html">Notifications
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/kanban/index.html">Kanban
                      </a>
                    </li>
                    <li >
                      <a href="../../plugins/apexcharts/index.html">ApexCharts<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/mapbox/index.html">MapBox<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li >
                      <a href="../../plugins/calendar/index.html">Calendar<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/sweet-alerts/index.html">Sweet Alerts<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/dropzone/index.html">DropZone<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/datatables/index.html">DataTables<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/svg-map/index.html">SVG Map<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                    <li>
                      <a href="../../plugins/choices-js/index.html">Choices JS<span class="badge badge-sm bg-secondary text-gray-800 py-1 px-2 ms-2">Pro</span>
                      </a>
                    </li>
                </ul>
              </li>

  </ul>
</nav>

        </div>

        <main class="col-lg-7 py-md-3 px-lg-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Tables </h1>
          <p class="bd-lead">Use tables to show more complex amount of data</p>

          <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEBDT237&placement=themesbergcom" id="_carbonads_js"></script>



          <h2 id="default">Default</h2>
<div class="bd-example">
<div class="table-responsive">
    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
            <tr>
                <th class="border-0 rounded-start">Country</th>
                <th class="border-0">All</th>
                <th class="border-0 rounded-end">All Change</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/united-states-of-america.svg">
                        <div><span class="h6">United States</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">106</td>
                <td class="border-0 text-danger">
                    <span class="fas fa-angle-down"></span>
                    <span class="font-weight-bold">5</span>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/canada.svg">
                        <div><span class="h6">Canada</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">76</td>
                <td class="border-0 text-success">
                    <span class="fas fa-angle-up"></span>
                    <span class="font-weight-bold">17</span>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/united-kingdom.svg">
                        <div><span class="h6">United Kingdom</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">147</td>
                <td class="border-0 text-success">
                    <span class="fas fa-angle-up"></span>
                    <span class="font-weight-bold">10</span>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/france.svg">
                        <div><span class="h6">France</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">112</td>
                <td class="border-0 text-success">
                    <span class="fas fa-angle-up"></span>
                    <span class="font-weight-bold">3</span>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/japan.svg">
                        <div><span class="h6">Japan</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">115</td>
                <td class="border-0 text-danger">
                    <span class="fas fa-angle-down"></span>
                    <span class="font-weight-bold">12</span>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Item -->
            <tr>
                <td class="border-0">
                    <a href="#" class="d-flex align-items-center">
                        <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../../assets/img/flags/germany.svg">
                        <div><span class="h6">Germany</span></div>
                    </a>
                </td>
                <td class="border-0 font-weight-bold">220</td>
                <td class="border-0 text-danger">
                    <span class="fas fa-angle-down"></span>
                    <span class="font-weight-bold">56</span>
                </td>
            </tr>
            <!-- End of Item -->
        </tbody>
    </table>
</div>
</div><div class="highlight"><pre ><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-centered table-nowrap mb-0 rounded&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">thead</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;thead-light&#34;</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">th</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 rounded-start&#34;</span><span class="p">&gt;</span>Country<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">th</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>All<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">th</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 rounded-end&#34;</span><span class="p">&gt;</span>All Change<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/united-states-of-america.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>United States<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>106<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-danger&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-down&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>5<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/canada.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>Canada<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>76<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-success&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-up&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>17<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/united-kingdom.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>United Kingdom<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>147<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-success&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-up&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>10<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/france.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>France<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>112<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-success&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-up&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/japan.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>Japan<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>115<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-danger&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-down&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>12<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
            <span class="c">&lt;!-- Item --&gt;</span>
            <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-2 image image-small rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;Image placeholder&#34;</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;../../assets/img/flags/germany.svg&#34;</span><span class="p">&gt;</span>
                        <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>Germany<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
                    <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 font-weight-bold&#34;</span><span class="p">&gt;</span>220<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
                <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0 text-danger&#34;</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;fas fa-angle-down&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;font-weight-bold&#34;</span><span class="p">&gt;</span>56<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
                <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="c">&lt;!-- End of Item --&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
<h2 id="datatables-span-classbadge-bg-secondary-font-small-px-2-py-1-text-gray-800-ms-2-fw-boldprospan">DataTables <span class="badge bg-secondary font-small px-2 py-1 text-gray-800 ms-2 fw-bold">Pro</span></h2>
<p>Use the following markup to create searchable datables:</p>
<div class="bd-example">
<div class="table-responsive py-4">
    <table class="table table-flush" id="datatable">
        <thead class="thead-light">
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr>
        <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
        </tr>
        <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>$433,060</td>
        </tr>
        <tr>
            <td>Airi Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$162,700</td>
        </tr>
        <tr>
            <td>Brielle Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>$372,000</td>
        </tr>
        <tr>
            <td>Herrod Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012/08/06</td>
            <td>$137,500</td>
        </tr>
        <tr>
            <td>Rhona Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010/10/14</td>
            <td>$327,900</td>
        </tr>
        <tr>
            <td>Colleen Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009/09/15</td>
            <td>$205,500</td>
        </tr>
        <tr>
            <td>Sonya Frost</td>
            <td>Software Engineer</td>
            <td>Edinburgh</td>
            <td>23</td>
            <td>2008/12/13</td>
            <td>$103,600</td>
        </tr>
        <tr>
            <td>Jena Gaines</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>30</td>
            <td>2008/12/19</td>
            <td>$90,560</td>
        </tr>
        <tr>
            <td>Quinn Flynn</td>
            <td>Support Lead</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2013/03/03</td>
            <td>$342,000</td>
        </tr>
        <tr>
            <td>Charde Marshall</td>
            <td>Regional Director</td>
            <td>San Francisco</td>
            <td>36</td>
            <td>2008/10/16</td>
            <td>$470,600</td>
        </tr>
        <tr>
            <td>Haley Kennedy</td>
            <td>Senior Marketing Designer</td>
            <td>London</td>
            <td>43</td>
            <td>2012/12/18</td>
            <td>$313,500</td>
        </tr>
        <tr>
            <td>Tatyana Fitzpatrick</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>19</td>
            <td>2010/03/17</td>
            <td>$385,750</td>
        </tr>
        <tr>
            <td>Michael Silva</td>
            <td>Marketing Designer</td>
            <td>London</td>
            <td>66</td>
            <td>2012/11/27</td>
            <td>$198,500</td>
        </tr>
        <tr>
            <td>Paul Byrd</td>
            <td>Chief Financial Officer (CFO)</td>
            <td>New York</td>
            <td>64</td>
            <td>2010/06/09</td>
            <td>$725,000</td>
        </tr>
        <tr>
            <td>Gloria Little</td>
            <td>Systems Administrator</td>
            <td>New York</td>
            <td>59</td>
            <td>2009/04/10</td>
            <td>$237,500</td>
        </tr>
        <tr>
            <td>Bradley Greer</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>41</td>
            <td>2012/10/13</td>
            <td>$132,000</td>
        </tr>
        <tr>
            <td>Dai Rios</td>
            <td>Personnel Lead</td>
            <td>Edinburgh</td>
            <td>35</td>
            <td>2012/09/26</td>
            <td>$217,500</td>
        </tr>
        <tr>
            <td>Jenette Caldwell</td>
            <td>Development Lead</td>
            <td>New York</td>
            <td>30</td>
            <td>2011/09/03</td>
            <td>$345,000</td>
        </tr>
        <tr>
            <td>Yuri Berry</td>
            <td>Chief Marketing Officer (CMO)</td>
            <td>New York</td>
            <td>40</td>
            <td>2009/06/25</td>
            <td>$675,000</td>
        </tr>
        <tr>
            <td>Caesar Vance</td>
            <td>Pre-Sales Support</td>
            <td>New York</td>
            <td>21</td>
            <td>2011/12/12</td>
            <td>$106,450</td>
        </tr>
        <tr>
            <td>Doris Wilder</td>
            <td>Sales Assistant</td>
            <td>Sidney</td>
            <td>23</td>
            <td>2010/09/20</td>
            <td>$85,600</td>
        </tr>
        <tr>
            <td>Angelica Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
            <td>47</td>
            <td>2009/10/09</td>
            <td>$1,200,000</td>
        </tr>
        <tr>
            <td>Gavin Joyce</td>
            <td>Developer</td>
            <td>Edinburgh</td>
            <td>42</td>
            <td>2010/12/22</td>
            <td>$92,575</td>
        </tr>
        <tr>
            <td>Jennifer Chang</td>
            <td>Regional Director</td>
            <td>Singapore</td>
            <td>28</td>
            <td>2010/11/14</td>
            <td>$357,650</td>
        </tr>
        <tr>
            <td>Brenden Wagner</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>28</td>
            <td>2011/06/07</td>
            <td>$206,850</td>
        </tr>
        <tr>
            <td>Fiona Green</td>
            <td>Chief Operating Officer (COO)</td>
            <td>San Francisco</td>
            <td>48</td>
            <td>2010/03/11</td>
            <td>$850,000</td>
        </tr>
        <tr>
            <td>Shou Itou</td>
            <td>Regional Marketing</td>
            <td>Tokyo</td>
            <td>20</td>
            <td>2011/08/14</td>
            <td>$163,000</td>
        </tr>
        <tr>
            <td>Michelle House</td>
            <td>Integration Specialist</td>
            <td>Sidney</td>
            <td>37</td>
            <td>2011/06/02</td>
            <td>$95,400</td>
        </tr>
        <tr>
            <td>Suki Burks</td>
            <td>Developer</td>
            <td>London</td>
            <td>53</td>
            <td>2009/10/22</td>
            <td>$114,500</td>
        </tr>
        <tr>
            <td>Prescott Bartlett</td>
            <td>Technical Author</td>
            <td>London</td>
            <td>27</td>
            <td>2011/05/07</td>
            <td>$145,000</td>
        </tr>
        <tr>
            <td>Gavin Cortez</td>
            <td>Team Leader</td>
            <td>San Francisco</td>
            <td>22</td>
            <td>2008/10/26</td>
            <td>$235,500</td>
        </tr>
        <tr>
            <td>Martena Mccray</td>
            <td>Post-Sales support</td>
            <td>Edinburgh</td>
            <td>46</td>
            <td>2011/03/09</td>
            <td>$324,050</td>
        </tr>
        <tr>
            <td>Unity Butler</td>
            <td>Marketing Designer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/12/09</td>
            <td>$85,675</td>
        </tr>
        <tr>
            <td>Howard Hatfield</td>
            <td>Office Manager</td>
            <td>San Francisco</td>
            <td>51</td>
            <td>2008/12/16</td>
            <td>$164,500</td>
        </tr>
        <tr>
            <td>Hope Fuentes</td>
            <td>Secretary</td>
            <td>San Francisco</td>
            <td>41</td>
            <td>2010/02/12</td>
            <td>$109,850</td>
        </tr>
        <tr>
            <td>Vivian Harrell</td>
            <td>Financial Controller</td>
            <td>San Francisco</td>
            <td>62</td>
            <td>2009/02/14</td>
            <td>$452,500</td>
        </tr>
        <tr>
            <td>Timothy Mooney</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>37</td>
            <td>2008/12/11</td>
            <td>$136,200</td>
        </tr>
        <tr>
            <td>Jackson Bradshaw</td>
            <td>Director</td>
            <td>New York</td>
            <td>65</td>
            <td>2008/09/26</td>
            <td>$645,750</td>
        </tr>
        <tr>
            <td>Olivia Liang</td>
            <td>Support Engineer</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2011/02/03</td>
            <td>$234,500</td>
        </tr>
        <tr>
            <td>Bruno Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>38</td>
            <td>2011/05/03</td>
            <td>$163,500</td>
        </tr>
        <tr>
            <td>Sakura Yamamoto</td>
            <td>Support Engineer</td>
            <td>Tokyo</td>
            <td>37</td>
            <td>2009/08/19</td>
            <td>$139,575</td>
        </tr>
        <tr>
            <td>Thor Walton</td>
            <td>Developer</td>
            <td>New York</td>
            <td>61</td>
            <td>2013/08/11</td>
            <td>$98,540</td>
        </tr>
        <tr>
            <td>Finn Camacho</td>
            <td>Support Engineer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/07/07</td>
            <td>$87,500</td>
        </tr>
        <tr>
            <td>Serge Baldwin</td>
            <td>Data Coordinator</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2012/04/09</td>
            <td>$138,575</td>
        </tr>
        <tr>
            <td>Zenaida Frank</td>
            <td>Software Engineer</td>
            <td>New York</td>
            <td>63</td>
            <td>2010/01/04</td>
            <td>$125,250</td>
        </tr>
        <tr>
            <td>Zorita Serrano</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>56</td>
            <td>2012/06/01</td>
            <td>$115,000</td>
        </tr>
        <tr>
            <td>Jennifer Acosta</td>
            <td>Junior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>43</td>
            <td>2013/02/01</td>
            <td>$75,650</td>
        </tr>
        <tr>
            <td>Cara Stevens</td>
            <td>Sales Assistant</td>
            <td>New York</td>
            <td>46</td>
            <td>2011/12/06</td>
            <td>$145,600</td>
        </tr>
        <tr>
            <td>Hermione Butler</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>47</td>
            <td>2011/03/21</td>
            <td>$356,250</td>
        </tr>
        <tr>
            <td>Lael Greer</td>
            <td>Systems Administrator</td>
            <td>London</td>
            <td>21</td>
            <td>2009/02/27</td>
            <td>$103,500</td>
        </tr>
        <tr>
            <td>Jonas Alexander</td>
            <td>Developer</td>
            <td>San Francisco</td>
            <td>30</td>
            <td>2010/07/14</td>
            <td>$86,500</td>
        </tr>
        <tr>
            <td>Shad Decker</td>
            <td>Regional Director</td>
            <td>Edinburgh</td>
            <td>51</td>
            <td>2008/11/13</td>
            <td>$183,000</td>
        </tr>
        <tr>
            <td>Michael Bruce</td>
            <td>Javascript Developer</td>
            <td>Singapore</td>
            <td>29</td>
            <td>2011/06/27</td>
            <td>$183,000</td>
        </tr>
        <tr>
            <td>Donna Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011/01/25</td>
            <td>$112,000</td>
        </tr>
        </tbody>
    </table>
    </div>
</div><div class="highlight"><pre ><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive py-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-flush&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;datatable&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">thead</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;thead-light&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Name<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Position<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Office<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Age<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Start date<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">th</span><span class="p">&gt;</span>Salary<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tiger Nixon<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>System Architect<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>61<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/04/25<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$320,800<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Garrett Winters<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Accountant<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tokyo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>63<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/07/25<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$170,750<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Ashton Cox<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Junior Technical Author<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>66<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/01/12<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$86,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Cedric Kelly<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Senior Javascript Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>22<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/03/29<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$433,060<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Airi Satou<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Accountant<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tokyo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>33<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/11/28<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$162,700<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Brielle Williamson<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Integration Specialist<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>61<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/12/02<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$372,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Herrod Chandler<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sales Assistant<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>59<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/08/06<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$137,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Rhona Davidson<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Integration Specialist<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tokyo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>55<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/10/14<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$327,900<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Colleen Hurst<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Javascript Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>39<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/09/15<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$205,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sonya Frost<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>23<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/12/13<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$103,600<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jena Gaines<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Office Manager<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>30<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/12/19<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$90,560<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Quinn Flynn<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Support Lead<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>22<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2013/03/03<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$342,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Charde Marshall<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>36<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/10/16<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$470,600<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Haley Kennedy<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Senior Marketing Designer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>43<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/12/18<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$313,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tatyana Fitzpatrick<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>19<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/03/17<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$385,750<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Michael Silva<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Marketing Designer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>66<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/11/27<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$198,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Paul Byrd<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Chief Financial Officer (CFO)<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>64<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/06/09<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$725,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Gloria Little<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Systems Administrator<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>59<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/04/10<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$237,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Bradley Greer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>41<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/10/13<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$132,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Dai Rios<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Personnel Lead<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>35<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/09/26<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$217,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jenette Caldwell<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Development Lead<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>30<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/09/03<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$345,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Yuri Berry<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Chief Marketing Officer (CMO)<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>40<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/06/25<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$675,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Caesar Vance<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Pre-Sales Support<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>21<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/12/12<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$106,450<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Doris Wilder<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sales Assistant<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sidney<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>23<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/09/20<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$85,600<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Angelica Ramos<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Chief Executive Officer (CEO)<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>47<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/10/09<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$1,200,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Gavin Joyce<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>42<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/12/22<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$92,575<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jennifer Chang<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Singapore<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>28<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/11/14<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$357,650<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Brenden Wagner<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>28<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/06/07<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$206,850<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Fiona Green<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Chief Operating Officer (COO)<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>48<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/03/11<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$850,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Shou Itou<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Marketing<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tokyo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>20<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/08/14<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$163,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Michelle House<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Integration Specialist<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sidney<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>37<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/06/02<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$95,400<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Suki Burks<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>53<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/10/22<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$114,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Prescott Bartlett<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Technical Author<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>27<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/05/07<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$145,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Gavin Cortez<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Team Leader<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>22<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/10/26<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$235,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Martena Mccray<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Post-Sales support<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>46<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/03/09<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$324,050<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Unity Butler<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Marketing Designer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>47<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/12/09<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$85,675<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Howard Hatfield<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Office Manager<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>51<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/12/16<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$164,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Hope Fuentes<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Secretary<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>41<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/02/12<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$109,850<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Vivian Harrell<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Financial Controller<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>62<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/02/14<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$452,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Timothy Mooney<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Office Manager<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>37<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/12/11<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$136,200<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jackson Bradshaw<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>65<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/09/26<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$645,750<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Olivia Liang<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Support Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Singapore<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>64<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/02/03<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$234,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Bruno Nash<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>38<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/05/03<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$163,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sakura Yamamoto<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Support Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Tokyo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>37<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/08/19<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$139,575<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Thor Walton<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>61<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2013/08/11<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$98,540<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Finn Camacho<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Support Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>47<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/07/07<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$87,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Serge Baldwin<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Data Coordinator<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Singapore<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>64<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/04/09<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$138,575<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Zenaida Frank<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>63<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/01/04<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$125,250<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Zorita Serrano<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Software Engineer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>56<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2012/06/01<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$115,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jennifer Acosta<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Junior Javascript Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>43<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2013/02/01<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$75,650<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Cara Stevens<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Sales Assistant<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>46<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/12/06<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$145,600<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Hermione Butler<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>47<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/03/21<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$356,250<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Lael Greer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Systems Administrator<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>London<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>21<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2009/02/27<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$103,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jonas Alexander<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>San Francisco<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>30<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2010/07/14<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$86,500<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Shad Decker<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Regional Director<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Edinburgh<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>51<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2008/11/13<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$183,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Michael Bruce<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Javascript Developer<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Singapore<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>29<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/06/27<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$183,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Donna Snider<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Customer Support<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>New York<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>27<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>2011/01/25<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
            <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>$112,000<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>

        </main>

        <div class="col-lg-3 bd-sidebar">

            <nav class="bd-toc bd-links mb-5 text-muted list-style-none" aria-label="Secondary navigation">
              <nav id="TableOfContents">
  <ul>
    <li><a href="#default">Default</a></li>
    <li><a href="#datatables-span-classbadge-bg-secondary-font-small-px-2-py-1-text-gray-800-ms-2-fw-boldprospan">DataTables <span class="badge bg-secondary font-small px-2 py-1 text-gray-800 ms-2 fw-bold">Pro</span></a></li>
  </ul>
</nav>
            </nav>

        </div>
      </div>
    </div>

    <footer class="bd-footer p-3 pt-5 p-md-5 mt-5 bg-primary text-white text-center">
  <div class="container">
    <a href="https://themesberg.com" target="_blank">
      <img src="../../assets/brand/themesberg.svg" class="mb-4" width="35" alt="Themesberg Logo">
    </a>
    <a href="https://updivision.com" target="_blank">
      <img src="../../assets/img/updivision.png"class="image-sm mb-4 mx-2" alt="Upvidision Logo">
    </a>
    <p class="font-small mb-4">Designed and built by <a href="https://themesberg.com" target="_blank">Themesberg</a> and <a href="https://updivision.com" target="_blank">Upvidision</a>.</p>
    <hr class="my-4" style="background: #181e38">
    <ul class="bd-footer-links mb-2">
      <li class="me-3"><a href="https://themesberg.com/themes" target="_blank">Products</a></li>
      <li class="me-3"><a href="https://themesberg.com/blog" target="_blank">Blog</a></li>
      <li class="me-3"><a href="https://themesberg.com/about" target="_blank">About</a></li>
      <li><a href="https://themesberg.com/contact" target="_blank">Contact</a></li>
    </ul>
  </div>
</footer>


<script src="../../assets/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="../../assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>


<script src="../../assets/vendor/nouislider/distribute/nouislider.min.js"></script>


<script src="../../assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>


<script src="../../assets/vendor/countup.js/dist/countUp.umd.js"></script>


<script src="../../assets/vendor/chartist/dist/chartist.min.js"></script>
<script src="../../assets/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>


<script src="../../assets/vendor/apexcharts/dist/apexcharts.min.js"></script>


<script src="../../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>


<script src="../../assets/vendor/simple-datatables/dist/umd/simple-datatables.js"></script>


<script src="../../assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>


<script src="../../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>


<script src="../../assets/vendor/fullcalendar/main.min.js"></script>


<script src="../../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>


<script src="../../assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>


<script src="../../assets/vendor/notyf/notyf.min.js"></script>


<script src="../../assets/vendor/leaflet/dist/leaflet.js"></script>


<script src="../../assets/vendor/svg-pan-zoom/dist/svg-pan-zoom.min.js"></script>
<script src="../../assets/vendor/svgmap/dist/svgMap.min.js"></script>

<script src="../../assets/vendor/clipboard.min.js"></script>
<script src="../../assets/vendor/anchor.min.js"></script>

<script src="../../docs/1.0/assets/js/docs.min.js"></script>

  </body>
</html>
