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
    <title>Fascicules du journal</title>
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
              <li class="breadcrumb-item active"><span>Journal</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header">Informations de base</div>
            <div class="card-body">
              <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Nombre de fascicules</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$fascicules->count()}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre de messages
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$nombreMessages}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Nombre d'abonnés</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$nombreUsers}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            Ajouter un fascicule
                        </div>
                        <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @elseif(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @elseif(session('fileExist'))
                        <div class="alert alert-danger">
                            {{ session('fileExist') }}
                        </div>
                        @elseif(session('fileSize'))
                        <div class="alert alert-danger">
                            {{ session('fileSize') }}
                        </div>
                        @elseif(session('fasciculeExist'))
                        <div class="alert alert-danger">
                            {{ session('fasciculeExist') }}
                        </div>
                        @endif
                        <form class="user" action="/createFascicule" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-select" id="exampleSelect1" name="volume">
                                        @foreach($volumes as $volume)
                                        <option>{{$volume->Titre}} {{$volume->Nom_Volume}}</option>
                                        @endforeach
                                      </select>
                                    <small class="form-text text-muted">Sélectionner un volume du fascicule <span style="color: red">(*)</span></small>
                                
                                </div>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control form-control-user" name="annee"
                                        placeholder="Année" required>
                                        <small id="emailHelp" class="form-text text-muted">Année du fascicule</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" name="imageFascicule"
                                    placeholder="Image de couverture" required>
                                    <small id="emailHelp" class="form-text text-muted">Couverture jaune</small>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" multiple="multiple" name="imageCouverture[]"
                                    placeholder="Image de couverture" required>
                                    <small id="emailHelp" class="form-text text-muted">Couvertures blanches - <span style="color: red"> plusieurs fichiers peuvent être chargés simultanément</span></small>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="number" class="form-control form-control-user"
                                       name="numeroFascicule" placeholder="Numéro du fascicule" required>
                                </div>
                            </div>
                           <br>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <button type="reset" class="btn btn-danger btn-user btn-block">Annuler</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                   

                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" style="text-decoration: none" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des fascicules existants</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">fascicules</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Fascicules</th>
                                                        <th>Volume</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Fascicules</th>
                                                        <th>Volume</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach($fascicules as $item)
                                                    <tr>
                                                        <td>{{$item->Nom.' '.$item->numero.' '.$item->Année}}</td>
                                                        @foreach($volumes as $volume)
                                                            @if($volume->id_volume==$item->id_volume)
                                                                <td>
                                                                    {{$volume->Titre.' '.$volume->Nom_Volume}}
                                                                </td>
                                                            @endif
                                                        @endforeach
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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