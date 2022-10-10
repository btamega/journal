@extends('layouts.base')

@section('title')
Hespéris Tamuda (1970-1979)
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
                                <li><a href="#">Hespéris Tamuda (1970-1979)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1970.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1970.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1970.pdf")}}">Hespéris Tamuda 1970</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1971.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1971.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1971.pdf")}}">Hespéris Tamuda  1971</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1972.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1972.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hesperis-Tamuda 1972.pdf")}}">Hespéris Tamuda  1972</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1973.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1973.png")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1973.pdf")}}">Hespéris Tamuda  1973</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1974.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1974.png")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1974.pdf")}}">Hespéris Tamuda  1974</a>
                </div>
             </div>
            </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1975.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1975.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1975.pdf")}}">Hespéris Tamuda  1975</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1976-1977.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1976-77.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1976-1977.pdf")}}">Hespéris Tamuda  1976-77</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1978_1979.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1978-79.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1978_1979.pdf")}}">Hespéris Tamuda  1978-79</a>
            </div>
         </div>
        </div>
</div> 
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
