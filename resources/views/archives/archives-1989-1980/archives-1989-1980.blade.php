@extends('layouts.base')

@section('title')
Hespéris Tamuda (1980-1989)
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
                                <li><a href="#">Hespéris Tamuda (1980-1989)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1980-1981.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1980-81.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1980-1981.pdf")}}">Hespéris Tamuda 1980-1981</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1982-1983.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1982-83.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1982-1983.pdf")}}">Hespéris Tamuda  1982-1983</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1984.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1982-83.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1984.pdf")}}">Hespéris Tamuda  1984</a>
            </div>
         </div>
        </div>
      <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1985.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1985.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1985.pdf")}}">Hespéris Tamuda  1985</a>
          </div>
      </div>
      </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1986.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1986.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1986.pdf")}}">Hespéris Tamuda  1986</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1987.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1987.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1987.pdf")}}">Hespéris Tamuda  1987</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1980-1989/Hespéris-Tamuda 1988-1989.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1988-89.png")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1970-1979/Hespéris-Tamuda 1988-1989.pdf")}}">Hespéris Tamuda  1988-1989</a>
              </div>
           </div>
          </div>
</div>
<br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
