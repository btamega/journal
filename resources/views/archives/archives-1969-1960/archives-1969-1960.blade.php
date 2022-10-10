@extends('layouts.base')

@section('title')
Hespéris Tamuda (1960-1969)
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
                                <li><a href="#">Hespéris Tamuda (1960-1969)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1960.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1960.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1960.pdf")}}">Hespéris Tamuda 1960</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1961.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1961.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1961.pdf")}}">Hespéris Tamuda  1961</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1962.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1962.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1962.pdf")}}">Hespéris Tamuda  1962</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1963.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1962.png")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1963.pdf")}}">Hespéris Tamuda  1963</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1964.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1964.png")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1964.pdf")}}">Hespéris Tamuda  1964</a>
                </div>
             </div>
            </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1965.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1965.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1965.pdf")}}">Hespéris Tamuda  1965</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1966.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1966.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hespéris-Tamuda 1966.pdf")}}">Hespéris Tamuda  1966</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1967.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1967.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1967.pdf")}}">Hespéris Tamuda  1967</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1968.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1968.png")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1968.pdf")}}">Hespéris Tamuda  1968</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1969.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1969.png")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1960-1969/Hesperis-Tamuda 1969.pdf")}}">Hespéris Tamuda  1969</a>
                </div>
             </div>
            </div>

</div>
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
