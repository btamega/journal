@extends('layouts.base')

@section('title')
Hespéris (1950-1959)
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
                                <li><a href="{{URL::to('/home')}}" class="pathway">Accueil</a></li>
                                <li><a href="{{URL::to('/')}}" class="pathway">ARCHIVE</a></li>
                                <li><a href="#">Hespéris (1950-1959)</a></li>
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1950.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1950ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1950.pdf")}}">Hespéris  1950</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1951.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1951ht.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1951.pdf")}}">Hespéris  1951</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1952.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1952ht.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1952.pdf")}}">Hespéris  1952</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1953.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1953ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1953.pdf")}}">Hespéris  1953</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1954.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1954ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1954.pdf")}}">Hespéris  1954</a>
                </div>
             </div>
            </div>
  <div class="responsive">
    <div class="gallery">
        <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1955.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1955ht.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1955.pdf")}}">Hespéris  1955</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1956.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1956ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1956.pdf")}}">Hespéris  1956</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1957.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1957ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1957.pdf")}}">Hespéris  1957</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1958.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1958ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1958.pdf")}}">Hespéris  1958</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1959.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/1959ht.jpg")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/1950-1959/Hespéris Tamuda 1959.pdf")}}">Hespéris  1959</a>
                </div>
             </div>
            </div>
</div> <br> <br>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection


