@extends('layouts.base')

@section('title')
Hespéris  (1940-1949)
@endsection
@section('stylesheet')
<link href="css/stiliItalien.css" rel="stylesheet"/>
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
                                <li><a href="#">Hespéris  (1940-1949)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1940.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1946ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1940.pdf")}}">Hespéris  1940</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1941.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1941ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1941.pdf")}}">Hespéris  1941</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1942.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1942ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1942.pdf")}}">Hespéris  1942</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1943.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1943ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1943.pdf")}}">Hespéris  1943</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1944.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1944ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1944.pdf")}}">Hespéris  1944</a>
                </div>
             </div>
            </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1945.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1945ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1945.pdf")}}">Hespéris  1945</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1946.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1946ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1946.pdf")}}">Hespéris  1946</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1947.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1947ht.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1947.pdf")}}">Hespéris  1947</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1948.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1948ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1948.pdf")}}">Hespéris  1948</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1949.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1949ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1940-1949/Hespéris Tamuda 1949.pdf")}}">Hespéris  1949</a>
                </div>
             </div>
            </div>
</div>
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
