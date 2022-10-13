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
    <title>Informations du journal</title>
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
              <li class="breadcrumb-item active"><span>Journal</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">Basic example</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">The default list group is an unordered list with items and the proper CSS classes. Build upon it with the options that follow, or with your CSS as required.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-361" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#basic-example" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-361">
                        <ul class="list-group">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">active items</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Attach <code>.active</code> to a <code>.list-group-item</code> to show the current active selection.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-114" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#active-items" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-114">
                        <ul class="list-group">
                          <li class="list-group-item active">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">disabled items</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Attach <code>.disabled</code> to a <code>.list-group-item</code> to make it appear disabled. Remark that some of the elements with <code>.disabled</code> will also require custom JavaScript to disable their click events (e.g., links).</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-934" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#disabled-items" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-934">
                        <ul class="list-group">
                          <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                          <li class="list-group-item">A fourth item</li>
                          <li class="list-group-item">And a fifth one</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">disabled links</span></div>
                <div class="card-body">
                  <div class="list-group">
                    <p class="text-medium-emphasis small">Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create<em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>
                    <p class="text-medium-emphasis small">Be sure to<strong> not use the standard <code>.btn</code> classes here</strong>.</p>
                    <div class="example">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1218" role="tab">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                            </svg>Preview</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#links-and-buttons" target="_blank">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                            </svg>Code</a></li>
                      </ul>
                      <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1218">
                          <div class="list-group"><a class="list-group-item list-group-item-action active" href="#" aria-current="true">The current link item</a><a class="list-group-item list-group-item-action" href="#">A second link item</a><a class="list-group-item list-group-item-action" href="#">A third link item</a><a class="list-group-item list-group-item-action" href="#">A fourth link item</a><a class="list-group-item list-group-item-action disabled" href="#" tabindex="-1" aria-disabled="true">A disabled link item</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">disabled buttons</span></div>
                <div class="card-body">
                  <div class="list-group">
                    <p class="text-medium-emphasis small">With <code>&lt;button&gt;</code>s, you can also make use of the <code>disabled</code> attribute instead of the <code>.disabled</code> class. Sadly, <code>&lt;a&gt;</code>s don’t support the disabled attribute.</p>
                    <div class="example">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-151" role="tab">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                            </svg>Preview</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#links-and-buttons" target="_blank">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                            </svg>Code</a></li>
                      </ul>
                      <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-151">
                          <div class="list-group">
                            <button class="list-group-item list-group-item-action active" type="button" aria-current="true">The current button</button>
                            <button class="list-group-item list-group-item-action" type="button">A second item</button>
                            <button class="list-group-item list-group-item-action" type="button">A third button item</button>
                            <button class="list-group-item list-group-item-action" type="button">A fourth button item</button>
                            <button class="list-group-item list-group-item-action" type="button" disabled>A disabled button item</button>
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
                <div class="card-header"><strong>List group</strong><span class="small ms-1">flush</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Add <code>.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1221" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#flush" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1221">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                          <li class="list-group-item">A fourth item</li>
                          <li class="list-group-item">And a fifth one</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">horizontal</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl|xxl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently<strong> horizontal list groups cannot be combined with flush list groups.</strong></p>
                  <p class="text-medium-emphasis small"><strong>ProTip:</strong> Want equal-width list group items when horizontal? Add <code>.flex-fill</code> to each list group item.</p>
                  <div class="list-group">
                    <div class="example">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-483" role="tab">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                            </svg>Preview</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#horizontal" target="_blank">
                            <svg class="icon me-2">
                              <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                            </svg>Code</a></li>
                      </ul>
                      <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-483">
                          <ul class="list-group list-group-horizontal mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-sm mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-lg mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-xl mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-xxl mb-1">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">contextual classes</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Use contextual classes to style list items with a stateful background and color.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-189" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#contextual-classes" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-189">
                        <ul class="list-group">
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                          <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                          <li class="list-group-item list-group-item-success">This is a success list group item</li>
                          <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                          <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                          <li class="list-group-item list-group-item-info">This is a info list group item</li>
                          <li class="list-group-item list-group-item-light">This is a light list group item</li>
                          <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">contextual with <code>.action</code></span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Contextual classes also work with <code>.list-group-item-action</code>. Note the addition of the hover styles here not present in the previous example. Also supported is the <code>.active</code> state; apply it to indicate an active selection on a contextual list group item.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-511" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#contextual-classes" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-511">
                        <div class="list-group"><a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a><a class="list-group-item list-group-item-action list-group-item-primary" href="#">
                            This is a primary list
                            group item</a><a class="list-group-item list-group-item-action list-group-item-secondary" href="#">
                            This is a secondary
                            list group item</a><a class="list-group-item list-group-item-action list-group-item-success" href="#">
                            This is a success list
                            group item</a><a class="list-group-item list-group-item-action list-group-item-danger" href="#">
                            This is a danger list
                            group item</a><a class="list-group-item list-group-item-action list-group-item-warning" href="#">
                            This is a warning list
                            group item</a><a class="list-group-item list-group-item-action list-group-item-info" href="#">
                            This is a info list group
                            item</a><a class="list-group-item list-group-item-action list-group-item-light" href="#">
                            This is a light list group
                            item</a><a class="list-group-item list-group-item-action list-group-item-dark" href="#">
                            This is a dark list group
                            item</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>List group</strong><span class="small ms-1">with badges</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Add badges to any list group item to show unread counts, activity, and more with the help of some<a href="https://coreui.io/docs/utilities/flex/">utilities</a>.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-405" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#with-badges" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-405">
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">A list item<span class="badge bg-primary rounded-pill">14</span></li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">A second list item<span class="badge bg-primary rounded-pill">2</span></li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">A third list item<span class="badge bg-primary rounded-pill">1</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header">
                  <stron>List group</stron><span class="small ms-1">custom content</span>
                </div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Add nearly any HTML within, even for linked list groups like the one below, with the help of<a href="https://coreui.io/docs/utilities/flex/">flexbox utilities</a>.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-140" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#custom-content" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-140">
                        <div class="list-group"><a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5><small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small></a><a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5><small class="text-medium-emphasis">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-medium-emphasis">Donec id elit non mi porta.</small></a><a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">List group item heading</h5><small class="text-medium-emphasis">3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-medium-emphasis">Donec id elit non mi porta.</small></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="card mb-4">
                <div class="card-header"><strong> List group</strong><span class="small ms-1">tab Javascript plugin</span></div>
                <div class="card-body">
                  <p class="text-medium-emphasis small">Use the tab JavaScript plugin—include it individually or through the compiled <code>coreui.js</code> file—to extend our list group to create tabbable panes of local content.</p>
                  <div class="example">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-671" role="tab">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                          </svg>Preview</a></li>
                      <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/list-group/#javascript-behavior" target="_blank">
                          <svg class="icon me-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                          </svg>Code</a></li>
                    </ul>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-671">
                        <div class="row">
                          <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action" id="list-home-list" data-coreui-toggle="tab" href="#list-home" role="tab" aria-controls="list-home" aria-selected="false">Home</a><a class="list-group-item list-group-item-action active" id="list-profile-list" data-coreui-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile" aria-selected="true">Profile</a><a class="list-group-item list-group-item-action" id="list-messages-list" data-coreui-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a><a class="list-group-item list-group-item-action" id="list-settings-list" data-coreui-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a></div>
                          </div>
                          <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                              <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.</p>
                              </div>
                              <div class="tab-pane fade active show" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</p>
                              </div>
                              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
                              </div>
                              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
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
    <script> 
    </script>
     <script type="text/javascript">
      function showfield(){
        var text = document.getElementById("text");
        var checkBox = document.getElementById("myCheck");
        if (checkBox.checked == true){
          text.style.display = "block";
        } else {
          text.style.display = "none";
        }
      }
      function toggle(source) {
        checkboxes = document.getElementsByName('menu');
        var check = document.getElementById("all");
        if (check.checked == true){
          for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = source.checked;
        }
        }else{
          for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = false;
        }
      }
        
      }
      </script>
  </body>
</html>