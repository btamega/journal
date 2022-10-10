@extends('layouts.base')

@section('title')
Hespéris Tamuda
@endsection
<!-- Style d'accueil -->
@section('stylesheet')
<link href="css/styleMenuDropDown.css" rel="stylesheet"/>
<style>

#sp-page-builder #section-id-1567612635273{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
#sp-page-builder #section-id-1489028018413{
    margin:0px 0px 0px 0px;
    padding:30px 0px 0px 0px;
}
#sp-page-builder #section-id-1489028018418{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
#sp-page-builder #section-id-1488967667777{
    margin:0px 0px 0px 0px;
    padding:30px 0px 0px 0px;
}
#sp-page-builder #section-id-1568029480880{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
h6{
    font-family:Abhaya Libre, sans-serif; 
    font-size:27px; 
    font-weight:normal; 
}
.sp-megamenu-parent{
    font-family:Abhaya Libre, sans-serif; 
    font-size:18px; 
    font-weight:normal; 
}
#sp-header-top{ 
    background-color:#ececec; 
}
#sp-footer{ 
    background-color:#060d11; 
}
div.mod_search35 input[type="search"]{
     width:auto; 
    }
   
</style>
<link href="css/styleMenuDropDown.css" rel="stylesheet" />
<link href="css/stiliItalien.css" rel="stylesheet" />

<style>

#sp-page-builder #section-id-1567612635273{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
#sp-page-builder #section-id-1489028018413{
    margin:0px 0px 0px 0px;
    padding:30px 0px 0px 0px;
}
#sp-page-builder #section-id-1489028018418{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
#sp-page-builder #section-id-1488967667777{
    margin:0px 0px 0px 0px;
    padding:30px 0px 0px 0px;
}
#sp-page-builder #section-id-1568029480880{
    margin:0px 0px 0px 0px;
    padding:50px 0px 50px 0px;
}
h6{
    font-family:Abhaya Libre, sans-serif; 
    font-size:27px; 
    font-weight:normal; 
}
.sp-megamenu-parent{
    font-family:Abhaya Libre, sans-serif; 
    font-size:18px; 
    font-weight:normal; 
}
#sp-header-top{ 
    background-color:#ececec; 
}
#sp-footer{ 
    background-color:#060d11; 
}
div.mod_search35 input[type="search"]{
     width:auto; 
    }
   
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
   <div class="container">
        <div id="sp-page-builder" class="sp-page-builder home-page page-8">
                <div class="page-content">
                    <br> <br>
                    @if(App::getLocale()=='en' ||App::getLocale()=='fr')
                    <div class="contents">
                        @foreach($archives as $item)
                        @if ($item->Année>=2016)
                            <div class="responsive">
                            <div class="gallery">
                                <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">
                                    <div class="desc">
                                        <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">{{$item->Titre}} ({{$item->Année}})</a>
                                    </div>
                                <img style="width: 600px; height:400px" src="{{asset($item->cover)}}" alt="Cinque Terre" width="600" height="400">
                                </a>
                                <div class="desc">{{$item->Nom_Volume}}</div>
                                
                            </div>
                            </div>
                        @else
                            @foreach($fascicules as $fascicule)
                                @if($fascicule->id_volume==$item->id_volume)
                                    <div class="responsive">
                                    <div class="gallery">
                                        <a style="text-decoration: none" href="/fascicule/{{$fascicule->id_fascicule}}/articles">
                                            <div class="desc">
                                                <a style="text-decoration: none" href="/fascicule/{{$fascicule->id_fascicule}}/articles">{{$item->Titre}} ({{$item->Année}})</a>
                                            </div>
                                        <img style="width: 600px; height:400px" src="{{asset($item->cover)}}" alt="Cinque Terre" width="600" height="400">
                                        </a>
                                        <div class="desc">{{$item->Nom_Volume}}</div>
                                        
                                    </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @endforeach
                        </div>
                        <br> <br>
                    @else
                    <div class="contents">
                        @foreach($archives as $item)
                        @if ($item->Année>=2016)
                            <div class="responsive">
                            <div class="gallery">
                                <div class="desc">
                                    <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">{{$item->Nom_Volume}}</a>
                                </div>
                                <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">
                                <div class="desc">{{$item->Nom_Volume}}</div>
                                <img style="width: 600px; height:400px" src="{{asset($item->cover)}}" alt="Cinque Terre" width="600" height="400">
                                </a>
                                <div class="desc">
                                    <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">{{$item->Titre}} ({{$item->Année}})</a>
                                </div>
                            </div>
                            </div>
                        @else
                            @foreach($fascicules as $fascicule)
                                @if($fascicule->id_volume==$item->id_volume)
                                    <div class="responsive">
                                    <div class="gallery">
                                        <div class="desc">
                                            <a style="text-decoration: none" href="/volume/{{$item->id_volume}}/fascicules">{{$item->Nom_Volume}}</a>
                                        </div>
                                        <a style="text-decoration: none" href="/fascicule/{{$fascicule->id_fascicule}}/articles">
                                        <div class="desc">{{$item->Nom_Volume}}</div>
                                        <img style="width: 600px; height:400px" src="{{asset($item->cover)}}" alt="Cinque Terre" width="600" height="400">
                                        </a>
                                        <div class="desc">
                                            <a style="text-decoration: none" href="/fascicule/{{$fascicule->id_fascicule}}/articles">{{$item->Titre}} ({{$item->Année}})</a>
                                        </div>
                                            
                                    </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @endforeach
                        </div>
                        <br> <br>
                    @endif
                    
                    
                    <div class="container">

                    <section id="section-id-1489028018418" class="sppb-section "  >
                        <div class="sppb-row-container">
                            <div class="sppb-row">
                                <div class="sppb-col-md-9">
                                    <div id="column-id-1489028018419" class="sppb-addon-container " >
                                        <div id="sppb-addon-1489045700856" class="clearfix">
                                            <div class="sppb-addon sppb-addon-module margin-bottom">
                                                <div class="sppb-addon-content"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-id-1488967667777" class="sppb-section "  >
                        <div class="sppb-row-container">
                            <div class="sppb-row">
                                <div class="sppb-col-md-12">
                                    <div id="column-id-1488967667778" class="sppb-addon-container" ></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-id-1568029480880" class="sppb-section "  >
                        <div class="sppb-row-container">
                            <div class="sppb-row">
                                <div class="sppb-col-md-12">
                                    <div id="column-id-1568029480881" class="sppb-addon-container" ></div>
                                </div>
                            </div>
                        </div>
                    </section>	
                </div>
                </div>
            <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
        </div>
    </div>
</body>
@endsection


