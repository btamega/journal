@extends('layouts.base')

@section('title')
{{$fascicule->Nom}}  {{$fascicule->numero}} ({{$fascicule->Année}})
@endsection
@section('stylesheet')   
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

.slider-text{
    background-color: #35443585 !important;
}
@media only screen and (max-width: 768px) {
 .img {
  width: 100%;
  height: 495.1px;
}
}
.img {
  float: left;
}

</style>
<link href="{{asset("css/styleInput.css")}}" rel="stylesheet" />
<link href="{{asset("css/style_article.css")}}" rel="stylesheet" />
<link href="{{asset("css/style.css")}}" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
@media only screen and (max-width: 768px) {
    .swiper-slide-image {
    width: 100%;
  }
} 

.carousel-control-prev{
    background: #3c3e3f;
}
.carousel-control-next{
    background: #3c3e3f;
}

.zoom:hover {
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.text {
  background-color: #2796bd;
  /* color: white; */
  font-size: 16px;
  padding: 1px 2px;
  border-radius: 4px;
}
.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}
.btn-success{
    transform: scale(1.5);
}
.txt-center {
	text-align: center;
}

img{
    background-color: transparent;
    float: left;
}
p{
  text-align: justify;
  font-size: 20px;
  font-family: 'Bodoni MT', 'Didot', 'Didot LT STD';
}
@media only screen and (min-width: 768px) {
    .swiper-slide-image {
    margin-left: 35%;
    margin-right: 25%;
  }
}
</style>
@endsection
@section('body')
@if ($menu->value=="Horizontal")
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
    <section id="sp-breadcrumb-block">
        <div class="container">
            <div class="row">
                <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                    <div class="sp-column ">
                        <div class="sp-module ">
                            <div class="sp-module-content">
                                <ol class="breadcrumb">
                                    <li><a href="{{URL::to('/home')}}" class="pathway">{{__('messages.accueil')}}</a></li>
                                    <li><a href="{{URL::to('/')}}" class="pathway">{{__('messages.derniersVolumes')}}</a></li>
                                    @foreach ($lastIssues as $item)
                                        @if($item->id_volume==$fascicule->id_volume)
                                            <li><a href="/volume/{{$item->id_volume}}/fascicules">{{$item->Titre}} ({{$item->Année}})</a> </li>
                                            <li class="active"><a href="#">{{$fascicule->Nom}}  {{$fascicule->numero}} ({{$fascicule->Année}})</a> </li>
                                        @endif
                                    @endforeach
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
        <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active zoom">
                        @foreach($jaunes as $jaune)
                        @if ($jaune->id_fascicule==$fascicule->id_fascicule)
                        <a href="#"><img style="height: 400px; width:auto;" width="240" height="145"  class="swiper-slide-image" src="{{asset($jaune->Path)}}" alt="First slide"> </a> 
                        <div class="middle">
                            <div class="text">
                                <a class="preview btn btn-success" href="{{asset($jaune->Path)}}"><img src="{{asset("images/eye.svg")}}" alt="test"></a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @foreach($vignettes as $images)
                    <div class="carousel-item zoom">
                        <img style="height: 400px; width:350px; " width="240" height="145"  class="swiper-slide-image" src="{{asset($images->Path)}}" alt="First slide">
                        <div class="middle">
                            <div class="text">
                                <a class="preview btn btn-success" href="{{asset($images->Path)}}"><img src="{{asset("images/eye.svg")}}" alt="test"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div> 
        <div class="col-md-10">
            <div class="block_blog_1">
                <span style="color: black; padding-top: 70px; padding-left: 0; font-size: 20px;">Sommaire-Contents-Sumario&nbsp; </span> <br>
                @foreach($sommaires as $sommaire)
                @if ($sommaire->id_fascicule==$fascicule->id_fascicule)
                <span style="color: black; padding-top: 70px; padding-left: 0; font-size: 20px;">{{$sommaire->Titre}}&nbsp; </span>
                @foreach($data as $d)
                    @if(($d[0]->id_sommaire)==$sommaire->id_sommaire)
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>
                                <a target="_blank" id="article" href="../../../Downloads/{{$d[0]->Lien_Telechargement}}"> {{$d[0]->Titre}} <span style="color: black; float:right"><h5>{{$d[0]->Nbre_Page}}</h5></span> </a> 
                                
                                <div class="meta">
                                    @foreach($d[1] as $a)
                                        <div class="post-author inline author">{{$a->Prenom}} {{$a->Nom}} {{$a->stat}}</div>
                                    @endforeach
                                    <br>
                                    
                                    <div class="post-author inline author">Date de publication: {{$d[0]->Date_Publication}}</div>
                                    
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @endif
                @endforeach
                @endif
                
                @endforeach
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
</body>
@else
<div style="margin-left:20%;padding:1px 16px;height:1000px;">
    <body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
        <section id="sp-breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                        <div class="sp-column ">
                            <div class="sp-module ">
                                <div class="sp-module-content">
                                    <ol class="breadcrumb">
                                        <li><a href="{{URL::to('/home')}}" class="pathway">{{__('messages.accueil')}}</a></li>
                                        <li><a href="{{URL::to('/')}}" class="pathway">{{__('messages.derniersVolumes')}}</a></li>
                                        @foreach ($lastIssues as $item)
                                            @if($item->id_volume==$fascicule->id_volume)
                                                <li><a href="/volume/{{$item->id_volume}}/fascicules">{{$item->Titre}} ({{$item->Année}})</a> </li>
                                                <li class="active"><a href="#">{{$fascicule->Nom}}  {{$fascicule->numero}} ({{$fascicule->Année}})</a> </li>
                                            @endif
                                        @endforeach
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
            <div class="col-md-10">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active zoom">
                            @foreach($jaunes as $jaune)
                            @if ($jaune->id_fascicule==$fascicule->id_fascicule)
                            <a href="#"><img style="height: 400px; width:auto;" width="240" height="145"  class="swiper-slide-image" src="{{asset($jaune->Path)}}" alt="First slide"> </a> 
                            <div class="middle">
                                <div class="text">
                                    <a class="preview btn btn-success" href="{{asset($jaune->Path)}}"><img src="{{asset("images/eye.svg")}}" alt="test"></a>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @foreach($vignettes as $images)
                        <div class="carousel-item zoom">
                            <img style="height: 400px; width:350px; " width="240" height="145"  class="swiper-slide-image" src="{{asset($images->Path)}}" alt="First slide">
                            <div class="middle">
                                <div class="text">
                                    <a class="preview btn btn-success" href="{{asset($images->Path)}}"><img src="{{asset("images/eye.svg")}}" alt="test"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> 
            <div class="col-md-10">
                <div class="block_blog_1">
                    <span style="color: black; padding-top: 70px; padding-left: 0; font-size: 20px;">Sommaire-Contents-Sumario&nbsp; </span> <br>
                    @foreach($sommaires as $sommaire)
                    @if ($sommaire->id_fascicule==$fascicule->id_fascicule)
                    <span style="color: black; padding-top: 70px; padding-left: 0; font-size: 20px;">{{$sommaire->Titre}}&nbsp; </span>
                    @foreach($data as $d)
                        @if(($d[0]->id_sommaire)==$sommaire->id_sommaire)
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <a target="_blank" id="article" href="../../../Downloads/{{$d[0]->Lien_Telechargement}}"> {{$d[0]->Titre}} <span style="color: black; float:right"><h5>{{$d[0]->Nbre_Page}}</h5></span> </a> 
                                    
                                    <div class="meta">
                                        @foreach($d[1] as $a)
                                            <div class="post-author inline author">{{$a->Prenom}} {{$a->Nom}} {{$a->stat}}</div>
                                        @endforeach
                                        <br>
                                        
                                        <div class="post-author inline author">Date de publication: {{$d[0]->Date_Publication}}</div>
                                        
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        @endif
                    @endforeach
                    @endif
                    
                    @endforeach
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
    </body>
</div>
@endif
@endsection
