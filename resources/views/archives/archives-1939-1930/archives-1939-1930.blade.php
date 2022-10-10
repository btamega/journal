@extends('layouts.base')

@section('title')
Hespéris  (1930-1939)
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
                                <li><a href="#">Hespéris  (1930-1939)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1930.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1936ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1930.pdf")}}">Hespéris  1930</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1931.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1931ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1931.pdf")}}">Hespéris  1931</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1932.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1932ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1932.pdf")}}">Hespéris  1932</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1933.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1933ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1933.pdf")}}">Hespéris  1933</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1934.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1934ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1934.pdf")}}">Hespéris  1934</a>
                </div>
             </div>
            </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1935.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1935ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1935.pdf")}}">Hespéris  1935</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1936.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1936ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1936.pdf")}}">Hespéris  1936</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1937.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1937ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1937.pdf")}}">Hespéris  1937</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1938.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1938ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1938.pdf")}}">Hespéris  1938</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1939.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1939ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1930-1939/Hespéris Tamuda 1939.pdf")}}">Hespéris  1939</a>
                </div>
             </div>
            </div>
</div>
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
