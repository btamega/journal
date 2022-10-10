@extends('layouts.base')

@section('title')

{{$_GET['searchword']}}


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
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
    

    <br><br>
    <div class="container">
       <div class="col-md-10">
            <div class="block_blog_1">
                <span style="color: black; padding-top: 70px; padding-left: 0; font-size: 20px;">Resultats de recherche&nbsp; </span><br><br>
                 @foreach($articles as $d)
                   <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>
                                <a target="_blank" id="article" href="../../../Downloads/{{$d->Lien_Telechargement}}"> {{$d->Titre}} <span style="color: black; float:right"><h5>{{$d->Nbre_Page}}</h5></span> </a> 
                                
                                <div class="meta">
                                    @foreach($auteurs as $a)
                                    @if ($a->id_articles==$d->id_articles)
                                    <div class="post-author inline author">{{$a->Prenom}} {{$a->Nom}} {{$a->stat}}</div>
                                    @endif
                                    @endforeach
                                    <br>
                                    
                                    <div class="post-author inline author">Date de publication: {{$d->Date_Publication}}</div>
                                    
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                   @endforeach
                @foreach($SearchAuteurs as $d)
                @foreach($Searcharticles as $item)
                   @if(($d->id_articles)==$item->id_articles)
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>
                                <a target="_blank" id="article" href="../../../Downloads/{{$item->Lien_Telechargement}}"> {{$item->Titre}} <span style="color: black; float:right"><h5>{{$item->Nbre_Page}}</h5></span> </a> 
                                
                                <div class="meta">
                                    <div class="post-author inline author">{{$d->Prenom}} {{$d->Nom}} {{$d->stat}}</div>
                                   <br>
                                    
                                    <div class="post-author inline author">Date de publication: {{$item->Date_Publication}}</div>
                                    
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scrollup">&nbsp;</a>
</body>
@endsection
