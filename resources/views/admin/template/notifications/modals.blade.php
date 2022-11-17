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
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/notifications/modals')}}"><span class="nav-icon"></span> Modals</a></li>
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
                <div class="card-header"><strong>Modal</strong></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-108" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#modal-components" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-108">
                        <div class="docs-example-modal">
                          <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Modal title</h5>
                                  <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                  <button class="btn btn-primary" type="button">Save changes</button>
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
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Live demo</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-35" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#live-demo" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-35">
                        <div class="modal fade" id="exampleModalLive" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Woohoo, you're reading this text in a modal!</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalLive">Launch demo modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Static backdrop</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-803" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#static-backdrop" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-803">
                        <div class="modal fade" id="staticBackdropLive" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLiveLabel">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Understood</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#staticBackdropLive">Launch static backdrop modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Scrolling long content</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-339" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#scrolling-long-content" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-339">
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>What follows is just some placeholder text for this modal dialog. Sipping on Rosé, Silver Lake sun, coming up all lazy. It’s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I'll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It's time to bring out the big balloons. You could've been the greatest. Passport stamps, she's cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                <p>We're living the life. We're doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl's a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                                <p>Before you met me I was alright but things were kinda heavy. Peach-pink lips, yeah, everybody stares. This is no big deal. Calling out my name. I could have rewrite your addiction. She's got that, je ne sais quoi, you know it. Heavy is the head that wears the crown. 'Cause, baby, you're a firework. Like thunder gonna shake the ground.</p>
                                <p>Just own the night like the 4th of July! I’m gon’ put her in a coma. What you're waiting for, it's time for you to show it off. Can't replace you with a million rings. You open my eyes and I'm ready to go, lead me into the light. And here you are. I’m gon’ put her in a coma. Come on, let your colours burst. So cover your eyes, I have a surprise. As I march alone to a different beat. Glitter all over the room pink flamingos in the pool.</p>
                                <p>You just gotta ignite the light and let it shine! Come just as you are to me. Just own the night like the 4th of July. Infect me with your love and fill me with your poison. Come just as you are to me. End of the rainbow looking treasure.</p>
                                <p>I can't sleep let's run away and don't ever look back, don't ever look back. I can't sleep let's run away and don't ever look back, don't ever look back. Yes, we make angels cry, raining down on earth from up above. I'm walking on air (tonight). Let you put your hands on me in my skin-tight jeans. Stinging like a bee I earned my stripes. I went from zero, to my own hero. Even brighter than the moon, moon, moon. Make 'em go, 'Aah, aah, aah' as you shoot across the sky-y-y! Why don't you let me stop by?</p>
                                <p>Boom, boom, boom. Never made me blink one time. Yeah, you're lucky if you're on her plane. Talk about our future like we had a clue. Oh my God no exaggeration. You're original, cannot be replaced. The girl's a freak, she drive a jeep in Laguna Beach. It's no big deal, it's no big deal, it's no big deal. In another life I would make you stay. I'm ma get your heart racing in my skin-tight jeans. I wanna walk on your wave length and be there when you vibrate Never made me blink one time.</p>
                                <p>We'd keep all our promises be us against the world. If you get the chance you better keep her. It's time to bring out the big, big, big, big, big, big balloons. I hope you got a healthy appetite. Don't let the greatness get you down, oh, oh yeah. Yeah, she's footloose and so fancy free. I want the jaw droppin', eye poppin', head turnin', body shockin'. End of the rainbow looking treasure.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalLong">Launch demo modal</button>
                      </div>
                    </div>
                  </div>
                  <p class="text-medium-emphasis small">You can also create a scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-247" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#scrolling-long-content" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-247">
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>What follows is just some placeholder text for this modal dialog. You just gotta ignite the light and let it shine! Come just as you are to me. Just own the night like the 4th of July. Infect me with your love and fill me with your poison. Come just as you are to me. End of the rainbow looking treasure.</p>
                                <p>I can't sleep let's run away and don't ever look back, don't ever look back. I can't sleep let's run away and don't ever look back, don't ever look back. Yes, we make angels cry, raining down on earth from up above. I'm walking on air (tonight). Let you put your hands on me in my skin-tight jeans. Stinging like a bee I earned my stripes. I went from zero, to my own hero. Even brighter than the moon, moon, moon. Make 'em go, 'Aah, aah, aah' as you shoot across the sky-y-y! Why don't you let me stop by?</p>
                                <p>Boom, boom, boom. Never made me blink one time. Yeah, you're lucky if you're on her plane. Talk about our future like we had a clue. Oh my God no exaggeration. You're original, cannot be replaced. The girl's a freak, she drive a jeep in Laguna Beach. It's no big deal, it's no big deal, it's no big deal. In another life I would make you stay. I'm ma get your heart racing in my skin-tight jeans. I wanna walk on your wave length and be there when you vibrate Never made me blink one time.</p>
                                <p>We'd keep all our promises be us against the world. In another life I would be your girl. We can dance, until we die, you and I, will be young forever. And on my 18th Birthday we got matching tattoos. So open up your heart and just let it begin. 'Cause she's the muse and the artist. She eats your heart out. Like Jeffrey Dahmer (woo). Pop your confetti. (This is how we do) I know one spark will shock the world, yeah yeah. If you only knew what the future holds.</p>
                                <p>Sipping on Rosé, Silver Lake sun, coming up all lazy. It’s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I'll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It's time to bring out the big balloons. You could've been the greatest. Passport stamps, she's cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                <p>We're living the life. We're doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl's a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                                <p>Before you met me I was alright but things were kinda heavy. Peach-pink lips, yeah, everybody stares. This is no big deal. Calling out my name. I could have rewrite your addiction. She's got that, je ne sais quoi, you know it. Heavy is the head that wears the crown. 'Cause, baby, you're a firework. Like thunder gonna shake the ground.</p>
                                <p>Just own the night like the 4th of July! I’m gon’ put her in a coma. What you're waiting for, it's time for you to show it off. Can't replace you with a million rings. You open my eyes and I'm ready to go, lead me into the light. And here you are. I’m gon’ put her in a coma. Come on, let your colours burst. So cover your eyes, I have a surprise. As I march alone to a different beat. Glitter all over the room pink flamingos in the pool.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalScrollable">Launch demo modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Vertically centered</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Add <code>.modal-dialog-centered</code> to  <code>.modal-dialog</code> to vertically center the modal.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-542" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#vertically-centered" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-542">
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
                                <p>In this case, the dialog has a bit more content, just to show how vertical centering can be added to a scrollable modal.</p>
                                <p>What follows is just some placeholder text for this modal dialog. Sipping on Rosé, Silver Lake sun, coming up all lazy. It’s in the palm of your hand now baby. So we hit the boulevard. So make a wish, I'll make it like your birthday everyday. Do you ever feel already buried deep six feet under? It's time to bring out the big balloons. You could've been the greatest. Passport stamps, she's cosmopolitan. Your kiss is cosmic, every move is magic.</p>
                                <p>We're living the life. We're doing it right. Open up your heart. I was tryna hit it and quit it. Her love is like a drug. Always leaves a trail of stardust. The girl's a freak, she drive a jeep in Laguna Beach. Fine, fresh, fierce, we got it on lock. All my girls vintage Chanel baby.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalCenter">Vertically centered modal</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalCenteredScrollable">Vertically centered scrollable modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Tooltips and popovers</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small"><a href="https://coreui.io/docs/components/tooltips/">Tooltips</a> and<a href="https://coreui.io/docs/components/popovers/">popovers</a> can be placed within modals as needed. When modals are closed, any tooltips and popovers within are also automatically dismissed.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-381" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#tooltips-and-popovers" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-381">
                        <div class="modal fade" id="exampleModalPopovers" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <h5>Popover in a modal</h5>
                                <p>This
                                  <button class="btn btn-secondary popover-test" href="#" role="button" title="" data-coreui-toggle="popover" data-coreui-content="Popover body content is set in this attribute." data-coreui-container="#exampleModalPopovers" data-coreui-original-title="Popover title">button</button> triggers a popover on click.
                                </p>
                                <hr>
                                <h5>Tooltips in a modal</h5>
                                <p><a class="tooltip-test" href="#" title="" data-coreui-toggle="tooltip" data-coreui-container="#exampleModalPopovers" data-coreui-original-title="Tooltip">This link</a> and<a class="tooltip-test" href="#" title="" data-coreui-toggle="tooltip" data-coreui-container="#exampleModalPopovers" data-coreui-original-title="Tooltip">that link</a> have tooltips on hover.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalPopovers">Launch demo modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Using the grid</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Utilize the Bootstrap grid system within a modal by nesting <code>.container-fluid</code> within the <code>.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-320" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#using-the-grid" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-320">
                        <div class="modal fade" id="gridSystemModal" tabindex="-1" aria-labelledby="gridModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                    <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-9">Level 1: .col-sm-9
                                      <div class="row">
                                        <div class="col-8 col-sm-6">Level 2: .col-8 .col-sm-6</div>
                                        <div class="col-4 col-sm-6">Level 2: .col-4 .col-sm-6</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#gridSystemModal">Launch demo modal</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Varying modal content</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Have a bunch of buttons that all trigger the same modal with slightly different contents? Use <code>event.relatedTarget</code> and <a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes">HTML <code>data-coreui-*</code> attributes</a> to vary the contents of the modal depending on which button was clicked.</p>
                  <p class="text-medium-emphasis small">Below is a live demo followed by example HTML and JavaScript. For more information, <a href="#events">read the modal events docs</a> for details on <code>relatedTarget</code>.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-242" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#varying-modal-content" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-242">
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@mdo">Open modal for @mdo</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@fat">Open modal for @fat</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" data-coreui-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="mb-3">
                                    <label class="col-form-label" for="recipient-name">Recipient:</label>
                                    <input class="form-control" id="recipient-name" type="text">
                                  </div>
                                  <div class="mb-3">
                                    <label class="col-form-label" for="message-text">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Send message</button>
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
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Optional sizes</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Size</th>
                        <th>Class</th>
                        <th>Modal max-width</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Small</td>
                        <td><code>.modal-sm</code></td>
                        <td><code>300px</code></td>
                      </tr>
                      <tr>
                        <td>Default</td>
                        <td class="text-medium-emphasis">None</td>
                        <td><code>500px</code></td>
                      </tr>
                      <tr>
                        <td>Large</td>
                        <td><code>.modal-lg</code></td>
                        <td><code>800px</code></td>
                      </tr>
                      <tr>
                        <td>Extra large</td>
                        <td><code>.modal-xl</code></td>
                        <td><code>1140px</code></td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="text-medium-emphasis small">Our default modal without modifier class constitutes the “medium” size modal.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-547" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#optional-sizes" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-547">
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalXl">Extra large modal</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalLg">Large modal</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalSm">Small modal</button>
                        <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalLgLabel">Large modal</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalSmLabel">Small modal</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Modal</strong><span class="small ms-1">Fullscreen Modal</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a <code>.modal-dialog</code>.</p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Class</th>
                        <th>Availability</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><code>.modal-fullscreen</code></td>
                        <td>Always</td>
                      </tr>
                      <tr>
                        <td><code>.modal-fullscreen-sm-down</code></td>
                        <td>Below <code>576px</code></td>
                      </tr>
                      <tr>
                        <td><code>.modal-fullscreen-md-down</code></td>
                        <td>Below <code>768px</code></td>
                      </tr>
                      <tr>
                        <td><code>.modal-fullscreen-lg-down</code></td>
                        <td>Below <code>992px</code></td>
                      </tr>
                      <tr>
                        <td><code>.modal-fullscreen-xl-down</code></td>
                        <td>Below <code>1200px</code></td>
                      </tr>
                      <tr>
                        <td><code>.modal-fullscreen-xxl-down</code></td>
                        <td>Below <code>1400px</code></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1002" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/modal/#fullscreen-modal" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreen">Full screen</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreenSm">Full screen below sm</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreenMd">Full screen below md</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreenLg">Full screen below lg</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreenXl">Full screen below xl</button>
                        <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalFullscreenXxl">Full screen below xxl</button>
                        <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>What follows is just some placeholder text for this modal dialog. I feel like I'm already there. I’m gon’ put her in a coma. Boom, boom, boom. You're reading me like erotica, boy, you make me feel exotic, yeah. Happy birthday. From Tokyo to Mexico, to Rio. I knew you were.</p>
                                <p>Last Friday night. Calling out my name. Kiss her, touch her, squeeze her buns. Heavy is the head that wears the crown. So open up your heart and just let it begin. Boy all this time was worth the waiting. You know that I'm the girl that you should call. End of the rainbow looking treasure. You're reading me like erotica, boy, you make me feel exotic, yeah. Do you know that there's still a chance for you 'Cause there's a spark in you? So I sat quietly, agreed politely. From Tokyo to Mexico, to Rio.</p>
                                <p>Don't be a shy kinda guy I'll bet it's beautiful. You fall asleep during foreplay, 'Cause the pills you take, are more your forte. Open up your heart. You're never gonna be unsatisfied. Know that you are worthy. This one goes out to the ladies at breakfast in last night's dress. You think you've seen her in a magazine. I should've told you what you meant to me 'Cause now I pay the price. Takes you miles high, so high, 'cause she’s got that one international smile.</p>
                                <p>Yo, shout out to all you kids, buying bottle service, with your rent money. So I sat quietly, agreed politely. They say, be afraid you're not like the others, futuristic lover. Boom, boom, boom. Don't need apologies. We can dance, until we die, you and I, will be young forever. If you choose to walk away, don’t walk away. You know that I'm the girl that you should call. This Friday night, do it all again.</p>
                                <p>I'm walking on air. But lil' mama so dope. It's time to bring out the big balloons. Are you ready for, ready for. The boys break their necks try'na to creep a little sneak peek. Summer after high school when we first met. If you want it all. (This is how we do) You open my eyes and I'm ready to go, lead me into the light.</p>
                                <p>Growing fast into a bolt of lightning. We freak in my jeep, Snoop Doggy Dogg on the stereo. Baby do you dare to do this? Open up your heart and just let it begin. Peach-pink lips, yeah, everybody stares. Be your teenage dream tonight. Are you brave enough to let me see your peacock? You think I'm funny when I tell the punchline wrong. Woo! I knew you were. All this money can't buy me a time machine. I can't sleep let's run away and don't ever look back, don't ever look back.</p>
                                <p>Make it like your birthday everyday. I'm not sticking around to watch you go down. Uh-huh, I see you. For you I'll risk it all, all. I’m gon’ put her in a coma. She ride me like a roller coaster. You hear my voice, you hear that sound. 'Cause I will love you unconditionally (oh yeah). They say, be afraid you're not like the others, futuristic lover. There is no fear now, let go and just be free, I will love you unconditionally.</p>
                                <p>We can dance, until we die, you and I, will be young forever. Pop your Pérignon. Last Friday night, yeah I think we broke the law, always say we're gonna stop. Don't need apologies. Give you something good to celebrate. But don’t make me your enemy, your enemy, your enemy. Flowers in her hair, she don't care. Tone, tan fit and ready, turn it up cause its gettin' heavy.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen-sm-down">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen-md-down">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen-lg-down">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen-xl-down">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                          <div class="modal-dialog modal-fullscreen-xxl-down">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">...</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
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
  </body>
</html>