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
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Example</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Cards are built with as little markup and styles as possible but still manage to deliver a bunch of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. Cards have no top, left, and right margins by default, so use <a href="https://coreui.io/docs/utilities/spacing/">spacing utilities</a> as needed. They have no fixed width to start, so they’ll fill the full width of its parent.</p>
              <p class="text-medium-emphasis small">Below is an example of a basic card with mixed content and a fixed width. Cards have no fixed width to start, so they’ll naturally fill the full width of its parent element. This is easily customized with our various <a href="#sizing">sizing options</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-476" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#example" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-476">
                    <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Body</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">The main block of a card is the <code>.card-body</code>. Use it whenever you need a padded section within a card.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1112" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#body" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1112">
                    <div class="card">
                      <div class="card-body">This is some text within a card body.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Titles, text, and links</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Card titles are managed by adding <code>.card-title</code> to a <code> &lt;h*&gt;</code> tag. Identically, links are attached and collected next to each other by adding <code>.card-link</code> to an <code> &lt;a&gt;</code> tag.</p>
              <p class="text-medium-emphasis small">Subtitles are managed by adding a <code>.card-subtitle</code> to a <code> &lt;h*&gt;</code> tag. If the <code>.card-title</code> also, the <code>.card-subtitle</code> items are stored in a <code>.card-body</code> item, the card title, and subtitle are arranged rightly.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-406" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#titles-text-and-links" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-406">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-medium-emphasis">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Images</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small"><code>.card-img-top</code> places a picture to the top of the card. With <code>.card-text</code>, text can be added to the card. Text within <code>.card-text</code> can additionally be styled with the regular HTML tags.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-619" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#titles-text-and-links" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-619">
                    <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">List groups</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Create lists of content in a card with a flush list group.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-349" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#list-groups" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-349">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <div class="card-header">Featured</div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                          </ul>
                          <div class="card-footer">Card footer</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Kitchen sink</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Combine and match many content types to build the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1160" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#kitchen-sink" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1160">
                    <div class="card" style="width: 18rem;"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                      </ul>
                      <div class="card-body"><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Header and footer</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add an optional header and/or footer within a card.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-239" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#header-and-footer" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-239">
                    <div class="card mb-3">
                      <div class="card-header">Featured</div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Card headers can be styled by adding <code>.card-header</code> to <code> &lt;h*&gt;</code> elements.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-927" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#header-and-footer" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-927">
                    <div class="card mb-3">
                      <h5 class="card-header">Featured</h5>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1043" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#header-and-footer" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1043">
                    <div class="card mb-3">
                      <div class="card-header">Quote</div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p>A well-known quote, contained in a blockquote element.</p>
                          <footer class="blockquote-footer">Someone famous in 
                            <cite title="Source Title">Source Title</cite>
                          </footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-341" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#header-and-footer" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-341">
                    <div class="card text-center">
                      <div class="card-header">Featured</div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                      <div class="card-footer text-medium-emphasis">2 days ago</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using grid markup</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Using the grid, wrap cards in columns and rows as needed.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-277" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#using-grid-markup" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-277">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using utilities</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use some of <a href="https://coreui.io/docs/utilities/sizing/">available sizing utilities</a> to rapidly set a card’s width.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-825" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#using-utilities" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-825">
                    <div class="card w-75 mb-3">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                      </div>
                    </div>
                    <div class="card w-50">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Button</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Sizing - Using custom CSS</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use custom CSS in your stylesheets or as inline styles to set a width.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-560" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#using-custom-css" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-560">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Text alignment</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">You can instantly change the text arrangement of any card—in its whole or specific parts—with <a href="https://coreui.io/docs/utilities/text/#text-alignment">text align classes</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-952" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#text-alignment" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-952">
                    <div class="card mb-3" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card mb-3 text-center" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                    <div class="card mb-3 text-end" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Navigation</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Add some navigation to a card’s header (or block) with Bootstrap’s <a href="https://coreui.io/docs/components/navs-tabs/">nav components</a>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1013" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#navigation" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1013">
                    <div class="card text-center">
                      <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item"><a class="nav-link active" aria-current="true" href="#">Active</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-135" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#navigation" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-135">
                    <div class="card text-center">
                      <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                          <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a class="btn btn-primary" href="#">Go somewhere</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Image caps</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Similar to headers and footers, cards can include top and bottom “image caps”—images at the top or bottom of a card.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-509" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#image-caps" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-509">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card mb-3"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div><img class="card-img-bottom" src="assets/img/full.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Image overlays</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Adapt an image into a background and overlay your text. Depending on the image, you may need additional styles or utilities.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-428" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#image-overlays" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-428">
                    <div class="card bg-dark text-white"><img class="card-img" src="assets/img/full.jpg" alt="">
                      <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Horizontal</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Using a combination of grid and utility classes, cards can be made horizontal in a mobile-friendly and responsive way. In the example below, we remove the grid gutters with <code>.g-0</code> and use <code>.col-md-*</code> classes to make the card horizontal at the <code>md</code> breakpoint. Further adjustments may be needed depending on your card content.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-716" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#horizontal" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-716">
                    <div class="card">
                      <div class="row g-0">
                        <div class="col-md-4"><img class="card-img" src="assets/img/full.jpg" alt=""></div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Card styles - Background and color</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">
                Cards include various options for customizing their backgrounds, borders, and color.
                Use <a href="https://coreui.io/docs/utilities/colors/">text color</a> and <a href="https://coreui.io/docs/utilities/background/">background utilities</a> to change the appearance of a card.
              </p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1265" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#background-and-color" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1265">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="card text-white bg-primary mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-secondary mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-success mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-danger mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-warning mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-info mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-dark bg-light mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card text-white bg-dark mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Card styles - Border</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/utilities/borders/">border utilities</a> to change just the <code>border-color</code> of a card. Note that you can put <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card’s contents as shown below.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-444" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#border" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-444">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="card border-primary mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-primary">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4"> 
                        <div class="card border-secondary mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-secondary">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-success mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4"> 
                        <div class="card border-danger mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-danger">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-warning mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-warning">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-info mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-info">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-light mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-dark mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-dark">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Top border</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use <a href="https://coreui.io/docs/utilities/borders/">border utilities</a> to change just the <code>border-top-color</code> of a card. Note that you can put <code>.text-{color}</code> classes on the parent <code>.card</code> or a subset of the card’s contents as shown below.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-564" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#top-border" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-564">
                    <div class="row">
                      <div class="col-xl-4">
                        <div class="card border-top-primary border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-primary">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-secondary border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-secondary">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-success border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-success">
                            <h5 class="card-title">Success card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-danger border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-danger">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-warning border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-warning">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-info border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-info">
                            <h5 class="card-title">Info card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-light border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4">
                        <div class="card border-top-dark border-top-3 mb-3">
                          <div class="card-header">Header</div>
                          <div class="card-body text-dark">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Mixins utilities</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">You are able to adjust the borders on the card elements as needed, and even exclude their <code>background-color</code> with <code>.bg-transparent</code>.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-424" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#mixins-utilities" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-424">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                      <div class="card-header bg-transparent border-success">Header</div>
                      <div class="card-body text-success">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <div class="card-footer bg-transparent border-success">Footer</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Card groups</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use card groups to render cards as a single, attached element with equal width and height columns. Card groups start off stacked and use <code>display: flex;</code> to become attached with uniform dimensions starting at the <code>sm</code> breakpoint.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-639" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-639">
                    <div class="card-group">
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          <p class="card-text"><small class="text-medium-emphasis">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">When using card groups with footers, their content will automatically line up.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-567" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#card-groups" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-567">
                    <div class="card-group">
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                      </div>
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                      </div>
                      <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-header"><strong>Card</strong><span class="small ms-1">Grid cards</span></div>
            <div class="card-body">
              <p class="text-medium-emphasis small">Use the Bootstrap grid system and its <a href="https://coreui.io/docs/layout/grid/#row-columns"><code>.row-cols</code> classes</a> to control how many grid columns (wrapped around your cards) you show per row. For example, here’s <code>.row-cols-1</code> laying out the cards on one column, and <code>.row-cols-md-2</code> splitting four cards to equal width across multiple rows, from the medium breakpoint up.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-159" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#grid-cards" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-159">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Change it to <code>.row-cols-3</code> and you’ll see the fourth card wrap.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1212" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#grid-cards" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1212">
                    <div class="row">
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">When you need equal height, add <code>.h-100</code> to the cards. If you want equal heights by default, you can set <code>$card-height: 100%</code> in Sass.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-916" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#grid-cards" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-916">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a short card.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-medium-emphasis small">Just like with card groups, card footers will automatically line up.</p>
              <div class="example">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1263" role="tab">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-media-play"></use>
                      </svg>Preview</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://coreui.io/docs/components/card/#grid-cards" target="_blank">
                      <svg class="icon me-2">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-code"></use>
                      </svg>Code</a></li>
                </ul>
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1263">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card h-100"><img class="card-img-top" src="assets/img/full.jpg" alt="">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer"><small class="text-medium-emphasis">Last updated 3 mins ago</small></div>
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