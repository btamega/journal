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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
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
        <li class="nav-item mt-auto"><a class="nav-link" href="{{URL::to("template/auteurs")}}">
          <svg class="nav-icon">
            <use xlink:href="{{asset("template/node_modules/vendors/@coreui/icons/svg/free.svg#cil-people")}}"></use>
          </svg> Auteurs</a></li>
          <li class="nav-item mt-auto"><a class="nav-link" href="{{URL::to("template/sommaires")}}">
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
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-133">
                    <div class="d-flex align-items-start">
                      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($menus as $key => $value)
                          <button onclick="setId('{{ $value }}')" class="nav-link" id="pills-{{ $value }}-tab" data-coreui-toggle="pill" data-coreui-target="#pills-{{ $value }}" type="button" role="tab" aria-controls="pills-{{ $value }}" aria-selected="true">{{ $value }}</button>
                        @endforeach
                        <br>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <button class="btn btn-info" type="button" id="confirm" onclick="store()">Confirmer</button>
                            </div>
                            <div class="col-sm-6">
                              <button class="btn btn-danger" type="reset" id="cancel">Annuler</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="pills-Home" role="tabpanel" aria-labelledby="v-pills-Home-tab">
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
            success: function (data){
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
              window.alert('Successfully filled')
              if (window.confirm('Do you want to continue?'))
                {
                  window.location.href = "/template/volume"
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
     <script type="text/javascript">
     let btn = document.getElementById("btnSubmit");
     btn.addEventListener('click', function(){
      var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);
          });
      function showfield(){
        var text = document.getElementById("text");
        var checkBox = document.getElementById("myCheck");
        if (checkBox.checked == true){
          text.style.display = "block";
        } else {
          text.style.display = "none";
        }
      }
      function showOrganisation(){
        var text = document.getElementById("textUniversite");
        var checkBox = document.getElementById("universityId");
        var textAssociation = document.getElementById("textAssociation");
        var checkBoxAssociation = document.getElementById("associationId");
        if (checkBox.checked == true){
          checkBoxAssociation.checked=false;
          text.style.display = "block";
          textAssociation.value='';
          textAssociation.style.display = "none";
        } else {
          checkBoxAssociation.checked=true;
          text.value='';
          text.style.display = "none";
          textAssociation.style.display = "block";
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