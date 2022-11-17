<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Menus du journal</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset("template/assets/favicon/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("template/assets/favicon/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("template/assets/favicon/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("template/assets/favicon/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("template/assets/favicon/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("template/assets/favicon/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("template/assets/favicon/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("template/assets/favicon/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("template/assets/favicon/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("template/assets/favicon/android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("template/assets/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("template/assets/favicon/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("template/assets/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("template/assets/favicon/manifest.json")}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset("template/assets/favicon/ms-icon-144x144.png")}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset("template/node_modules/vendors/simplebar/css/simplebar.css")}}">
    <link rel="stylesheet" href="{{asset("template/css/vendors/simplebar.css")}}">
    <!-- Main styles for this application-->
    <link href="{{asset("template/css/style.css")}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{asset("template/css/examples.css")}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
      #btnModify{
        display: none;
      }
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color:#4169E1;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
      }
      #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }
      @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
      }
      @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
      }
      @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
      }
      @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
      }
      </style>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <style>
      #btnModify{
        display: none;
      }
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color:#4169E1;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
      }
      #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }
      @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
      }
      @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
      }
      @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
      }
      @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
      }
      </style>
      
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{asset("template/assets/brand/coreui.svg#full")}}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{asset("template/assets/brand/coreui.svg#signet")}}"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("admin/template")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/assets/icons/align-center.svg")}}"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Template</li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("admin/colors")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-drop")}}"></use>
            </svg> Colors</a></li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("template/name")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-pencil")}}"></use>
            </svg> Journal</a></li>
        <li class="nav-title">Components</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-puzzle")}}"></use>
            </svg> Menus</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/accordion")}}"><span class="nav-icon"></span> Accordion</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/breadcrumb")}}"><span class="nav-icon"></span> Breadcrumb</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/cards")}}"><span class="nav-icon"></span> Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/carousel")}}"><span class="nav-icon"></span> Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/collapse")}}"><span class="nav-icon"></span> Collapse</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/list-group")}}"><span class="nav-icon"></span> List group</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/navs-tabs")}}"><span class="nav-icon"></span> Navs &amp; Tabs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/pagination")}}"><span class="nav-icon"></span> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/placeholders")}}"><span class="nav-icon"></span> Placeholders</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/popovers")}}"><span class="nav-icon"></span> Popovers</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/progress")}}"><span class="nav-icon"></span> Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/scrollspy")}}"><span class="nav-icon"></span> Scrollspy</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/spinners")}}"><span class="nav-icon"></span> Spinners</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/tables")}}"><span class="nav-icon"></span> Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/tooltips")}}"><span class="nav-icon"></span> Tooltips</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-cursor")}}"></use>
            </svg> Outils</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Logos</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Base de données</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Ressources</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="charts.html">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-chart-pie")}}"></use>
            </svg> Charts</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-notes")}}"></use>
            </svg> Forms</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{URL::to("template/form")}}"> Form Control</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
            <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-star")}}"></use>
            </svg> Icons</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bell")}}"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="widgets.html">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-calculator")}}"></use>
            </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-star")}}"></use>
            </svg> Pages</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-account-logout")}}"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-account-logout")}}"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bug")}}"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bug")}}"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-description")}}"></use>
            </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-layers")}}"></use>
            </svg> Try CoreUI
            <div class="fw-semibold">PRO</div></a></li>
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-menu")}}"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{asset("template/assets/brand/coreui.svg#full")}}"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bell")}}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-list-rich")}}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-envelope-open")}}"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{asset("template/assets/img/avatars/8.jpg")}}" alt="user@email.com"></div></a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bell")}}"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-envelope-open")}}"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-task")}}"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-comment-square")}}"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-user")}}"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-settings")}}"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-credit-card")}}"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-file")}}"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-lock-locked")}}"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-account-logout")}}"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item"><a href="{{URL::to("admin/template")}}">Home</a>
              </li>
              <li class="breadcrumb-item active"><span>Menus</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header"><strong>Veuillez remplir les champs ci-dessous</strong></div>
                  <div class="card-body">
                    {{-- <p class="text-medium-emphasis small">The tabs plugin also works with pills.</p> --}}
                    <div class="example">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-546" role="tab">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                            </svg>Vos menus</a></li>
                      </ul>
                      <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-546">
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach($menus as $key => $value)
                                <li class="nav-item" role="presentation">
                                    <button onclick="setId('{{ $value }}')" class="nav-link" id="pills-{{ $value }}-tab" data-coreui-toggle="pill" data-coreui-target="#pills-{{ $value }}" type="button" role="tab" aria-controls="pills-{{ $value }}" aria-selected="true">{{ $value }}</button>
                                </li>
                            @endforeach
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade" id="pills-Home" role="tabpanel" aria-labelledby="pills-Home-tab">
                                <form id="homeForm">
                                    <textarea name="homeText" id="summernoteHome" cols="30" rows="10"></textarea>
                                    <button class="btn btn-success" type="button" onclick="submitHome()">Envoyer</button>
                                </form>
                              <p id="home" style="text-align: center"></p>
                            </div>
                            <div class="tab-pane fade" id="pills-About" role="tabpanel" aria-labelledby="pills-About-tab">
                              <form id="aboutForm">
                                  <textarea name="aboutText" id="summernoteAbout" cols="30" rows="10"></textarea>
                                  <button class="btn btn-success" type="button" onclick="submitAbout()">Envoyer</button>
                              </form>
                              <p id="about" style="text-align: center"></p>
                            </div>
                            <div class="tab-pane fade" id="pills-Recommandation" role="tabpanel" aria-labelledby="pills-Recommandation-tab">
                              <form id="recommandationForm">
                                  <textarea name="recommandationText" id="summernoteRecommandation" cols="30" rows="10"></textarea>
                                  <button class="btn btn-success" type="button" onclick="submitRecommandation()">Envoyer</button>
                              </form>
                              <p id="recommandation" style="text-align: center"></p>
                            </div>
                            <div class="tab-pane fade" id="pills-Archives" role="tabpanel" aria-labelledby="pills-Archives-tab">
                              <form id="archivesForm">
                                  <textarea name="archivesText" id="summernoteArchives" cols="30" rows="10"></textarea>
                                  <button class="btn btn-success" type="button" onclick="submitArchives()" id="sendArchives">Envoyer</button>
                              </form>
                              <p id="archives" style="text-align: center"></p>
                            </div>
                            <div class="tab-pane fade" id="pills-Contact" role="tabpanel" aria-labelledby="pills-Contact-tab">
                              <form id="contactForm">
                                  <textarea name="contactText" id="summernoteContact" cols="30" rows="10"></textarea>
                                  <button class="btn btn-success" type="button" onclick="submitContact()" id="sendContact">Envoyer</button>
                              </form>
                              <p id="contact" style="text-align: center"></p>
                            </div>
                            <div class="tab-pane fade" id="pills-LastIssues" role="tabpanel" aria-labelledby="pills-LastIssues-tab">
                              <form id="lastIssuesForm">
                                  <textarea name="lastIssuesText" id="summernoteLastIssues" cols="30" rows="10"></textarea>
                                  <button class="btn btn-success" type="button" onclick="submitLastIssues()" id="sendLastIssues">Envoyer</button>
                              </form>
                              <p id="contact" style="text-align: center"></p>
                            </div>
                            <form>
                              <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <button class="btn btn-info" type="button" id="confirm" onclick="store()">Confirmer</button>
                                    </div>
                                    <div class="col-sm-6">
                                      <button class="btn btn-danger" type="reset" id="cancel">Annuler</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <div id="snackbar">Vos données ont été enregistrées avec succès</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <footer class="footer">
        <div>Copyrights&copy; 2022 IRISI.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://www.linkedin.com/in/bougary-tamega-13a8a71a4/">TAMEGA Bougary</a></div>
      </footer>
    </div>
    <script src="{{asset("template/node_modules/vendors/@coreui/coreui/js/coreui.bundle.min.js")}}"></script>
    <script src="{{asset("template/node_modules/vendors/simplebar/js/simplebar.min.js")}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset("template/node_modules/vendors/chart.js/js/chart.min.js")}}"></script>
    <script src="{{asset("template/node_modules/vendors/@coreui/chartjs/js/coreui-chartjs.js")}}"></script>
    <script src="{{asset("template/node_modules/vendors/@coreui/utils/js/coreui-utils.js")}}"></script>
    <script src="{{asset("template/js/main.js")}}"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
       {{-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> --}}
       
       <script>
          function checkInputs() {
            var isValid = true;
            $('textarea').each(function() {
              if ($(this).val() === '') {
                // $('#confirm').prop('disabled', true)
                isValid = false;
                return false;
              }
            });
            if(isValid) {
              window.alert('success filled')
              document.getElementById("confirm").style.display="block";
              document.getElementById("cancel").style.display="block";
            }
            return isValid;
          }
          function submitHome() {
            // checkInputs();
            var contenu = document.getElementById("summernoteHome").value;
              let _token   = $('meta[name="csrf-token"]').attr('content');
              $.ajax({
                type: "POST",
                url: "/template/menuHome",
                data: {
                  homeText:contenu,
                  _token: _token},  
                success: function (dataResult){	
                  $(this).find(':button[type=submit]').prop('disabled', true);
              document.getElementById("homeForm").style.display="none";
              document.getElementById("home").innerHTML= "Form submitted";
              var x = document.getElementById("snackbar");
              x.className = "show";
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
            });
          }
          function store() {
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/template/menu",
                data: {
                  _token: _token},  
                success: function (data){
                  window.alert('success filled')
                  if (window.confirm('Do you want to continue?'))
                    {
                      window.location.href = "/template/collapse"
                    }
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
              })
            
          }
          function submitAbout() {
            // checkInputs();
            var contenu = document.getElementById("summernoteAbout").value;
              let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/template/menuAbout",
                data: {
                  aboutText:contenu,
                  _token: _token},  
                success: function (data){
                  $(this).find(':button[type=submit]').prop('disabled', true);
                  document.getElementById("aboutForm").style.display="none";
                  document.getElementById("about").innerHTML= "Form submitted";
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
            });
          }
          function submitRecommandation() {
            // checkInputs();
            var contenu = document.getElementById("summernoteRecommandation").value;
              let _token   = $('meta[name="csrf-token"]').attr('content');
              $.ajax({
                type: "POST",
                url: "/template/menuRecommandation",
                data: {
                  recommandationText:contenu,
                  _token: _token},  
                success: function (data){
                  $(this).find(':button[type=submit]').prop('disabled', true);
                  document.getElementById("recommandationForm").style.display="none";
                  document.getElementById("recommandation").innerHTML= "Form submitted";
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
            });
          }
          function submitArchives() {
            // checkInputs();
            var contenu = document.getElementById("summernoteArchives").value;
              let _token   = $('meta[name="csrf-token"]').attr('content');
              $.ajax({
                type: "POST",
                url: "/template/menuArchives",
                data: {
                  archivesText:contenu,
                  _token: _token},  
                success: function (data){
                  $(this).find(':button[type=submit]').prop('disabled', true);
                  document.getElementById("archivesForm").style.display="none";
                  document.getElementById("archives").innerHTML= "Form submitted";
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
            });
          }
          function submitContact() {
            // checkInputs();
            var contenu = document.getElementById("summernoteContact").value;
              let _token   = $('meta[name="csrf-token"]').attr('content');
              $.ajax({
                type: "POST",
                url: "/template/menuContact",
                data: {
                  contactText:contenu,
                  _token: _token},  
                success: function (data){
                  $(this).find(':button[type=submit]').prop('disabled', true);
                  document.getElementById("contactForm").style.display="none";
                  document.getElementById("contact").innerHTML= "Form submitted";
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
                },
                error: function() {
                  window.alert('There was some error performing the AJAX call!');
              }
            });
            
          }
          function submitLastIssues() {
            
          }
          function setId(params) {
            $('#summernoteHome').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteAbout').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteRecommandation').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteArchives').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteContact').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteRecommandations').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
            $('#summernoteLastIssues').summernote({
              placeholder: 'Description ...',
              tabsize: 2,
              height: 300,
              toolbar: [
                ['style', ['style']],
                ['fontsize', ['fontsize']],
                ['fontname', ['fontname']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']]
              ]
            });
          }
         </script>
  </body>
</html>