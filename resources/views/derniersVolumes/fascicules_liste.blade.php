@extends('layouts.base')

@section('title')
{{$volume->Titre}} ({{$volume->Année}})
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
	<br> <br>
	<div class="container">
		@foreach($fascicules as $fascicule)
		<div class="responsive">
			<div class="gallery">
				<div class="desc">{{$fascicule->Nom}}  {{$fascicule->numero}} ({{$fascicule->Année}})</div>
				<a style="text-decoration: none" href="/fascicule/{{$fascicule->id_fascicule}}/articles">
				@foreach($vignettes as $vignette)
				@if ($vignette->id_fascicule==$fascicule->id_fascicule)
				<img style="width: 600px; height:400px" src="{{asset($vignette->Path)}}" alt="Image not found" width="600" height="400">
				@endif
				@endforeach
				</a>
				<div class="desc">{{$fascicule->Titre_Fascicule}}</div>
			</div>
		</div>
		@endforeach
	</div>
	<br> <br>
  </body>
@endsection
