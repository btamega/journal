@extends('layouts.base')

@section('title')
Hespéris Tamuda (2000-2009)
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
                                <li><a href="#">Hespéris-Tamuda (2000-2009)</a></li>
                                
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
        <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/1-2001.pdf")}}">
        <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/2001-1.png")}}" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc">
            <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/1-2001.pdf")}}">Hespéris Tamuda 2001-1</a>
        </div>
     </div>
    </div>
    <div class="responsive">
      <div class="gallery">
          <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/2-2001.pdf")}}">
          <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/2001-2.png")}}" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">
              <a target="_blank" style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/2-2001.pdf")}}">Hespéris Tamuda 2001-2</a>
          </div>
       </div>
      </div>
      <div class="responsive">
        <div class="gallery">
            <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris Tamuda 2007.pdf")}}">
            <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/2001-1.png")}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris Tamuda 2007.pdf")}}">Hespéris Tamuda 2007</a>
            </div>
         </div>
        </div>
        <div class="responsive">
          <div class="gallery">
              <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris Tamuda 2008.pdf")}}">
              <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/2001-1.png")}}" alt="Cinque Terre" width="600" height="400">
              </a>
              <div class="desc">
                  <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris Tamuda 2008.pdf")}}">Hespéris Tamuda 2008</a>
              </div>
           </div>
          </div>
          <div class="responsive">
            <div class="gallery">
                <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris-Tamuda 2009.pdf")}}">
                <img style="width: 600px; height:400px" src="{{asset("images/Couvertures/2001-2.png")}}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">
                    <a target="_blank"style="text-decoration: none" href="{{asset("../../../Downloads/2000-2009/Hespéris-Tamuda 2009.pdf")}}">Hespéris Tamuda 2009</a>
                </div>
             </div>
            </div>
</div>
<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection
