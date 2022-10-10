@extends('layouts.base')

@section('title')
Hespéris  (1921-1929)
@endsection
@section('stylesheet')
<link href="css/stiliItalien.css" rel="stylesheet" />
<style>
  div.gallery {
  border: 1px solid #ccc;
}
  div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
@endsection
@section('body')
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
  <section id="sp-breadcrumb-block">
    <div class="container">
        <div class="row">
            <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <ol class="breadcrumb">
                                <li><a href="{{URL::to('/')}}" class="pathway">Accueil</a></li>
                                <li><a href="{{URL::to('/archive')}}" class="pathway">ARCHIVE</a></li>
                                <li><a href="#">Hespéris  (1921-1929)</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<br><br>
<div class="container">
  <div class="responsive">
    <div class="gallery">
        <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1921.pdf">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1921ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1921.pdf">Hespéris  1921</a>
        </div>
      </div>
    </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1922.pdf">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1922 TOME II FASC.1-2-3.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1922.pdf">Hespéris  1922</a>
        </div>
      </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1923.pdf">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1923 TOMEIII FASC.1-2-3-4.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1923.pdf">Hespéris  1923</a>
          </div>
              
      </div>
    </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1924.pdf">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1924 TOME IV FASC.1-2-3-4.jpg")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1924.pdf">Hespéris  1924</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1925.pdf">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1925 TOMEV FASC.1-2-3-4.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1925.pdf">Hespéris  1925</a>
              </div>
            </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1926.pdf">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1922 TOME II FASC.1-2-3.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1926.pdf">Hespéris  1926</a>
              </div>
            </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1927.pdf">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1927 TOME VII FASC.1-2-3-4.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1927.pdf">Hespéris  1927</a>
              </div>
            </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1928.pdf">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1928 TOME VIII FASC.1-2-3.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1928.pdf">Hespéris  1928</a>
              </div>
            </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1929.pdf">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1929 TOME IX FASC.1-2-3.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank" style="text-decoration: none" href="../../../Downloads/1921-1929/Hespéris Tamuda 1929.pdf">Hespéris  1929</a>
              </div>
            </div>
        </div>
</div>
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
