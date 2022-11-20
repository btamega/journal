<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Génération de template</title>
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
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">GENERATEUR DE REVUE
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("admin/template")}}">
          <svg class="nav-icon">
            <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-bar-chart")}}"></use>
          </svg> Dashboard
           </a>
          </li>
        <li class="nav-title">Template</li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("admin/colors")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-drop")}}"></use>
            </svg> Couleurs</a></li>
        <li class="nav-item"><a class="nav-link" href="{{URL::to("template/name")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-pencil")}}"></use>
            </svg> Journal</a></li>
        <li class="nav-title">Publications</li>
        <li class="nav-group"><a class="nav-link" href="{{URL::to('/template/volume')}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-puzzle")}}"></use>
            </svg> Volumes</a>
        </li>
        <li class="nav-group"><a class="nav-link" href="{{URL::to('template/fascicule')}}">
          <svg class="nav-icon">
            <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-spreadsheet")}}"></use>
          </svg> Fascicules</a>
      </li>
      <li class="nav-group"><a class="nav-link" href="{{URL::to('template/articles')}}">
          <svg class="nav-icon">
            <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-notes")}}"></use>
          </svg> Articles</a>
      </li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link" href="{{URL::to("template/admins")}}">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-user")}}"></use>
            </svg> Admins</a>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="{{URL::to("template/auteurs")}}" target="_blank">
          <svg class="nav-icon">
            <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-people")}}"></use>
          </svg> Auteurs</a></li>
          <li class="nav-item mt-auto"><a class="nav-link" href="{{URL::to("template/sommaires")}}" target="_blank">
            <svg class="nav-icon">
              <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-description")}}"></use>
            </svg> Sommaires</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger">
          </li>
      </ul>
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
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
         
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
    <script> 
    </script>
  </body>
</html>