@extends('layouts.base')

@section('title')
{{__('messages.titreEthique')}}
@endsection
@section('stylesheet')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">
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
#sp-block-acymailling{ 
	background-image:url("images/bg1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:50% 50%; 
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
.layout2 #sp-header-bottom
{
	background: #3b5998;
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
    p{
        font-size: 14pt;
    }
	a.one:link {color:#ff0000;}
	a.one:visited {color:#0000ff;}
	a.one:hover {color:#3b5998;}
</style>
@endsection

@section('body')
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">

@if(App::getLocale()=='en' ||App::getLocale()=='fr')
<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div id="sp-page-builder" class="sp-page-builder home-page page-8">
        <div class="page-content">
            <div id="content" class="right_sidebar">
            <div class="inner">
                <div class="general_content">                                                                        
                    <div class="main_content" style="padding: 30px">
                        <p style="box-sizing: inherit; margin: 1rem 0px; font-size: 12.8px; text-align: center;">
                            <span style="box-sizing: inherit; font-family: 'Traditional Arabic', serif; font-size: medium;">
                                <span style="color: #ff9900;">
                                    <strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 14pt;">
                                        <span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                           
                                        </span>
                                    </strong>
                                </span>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <h2 style="text-align: center; color: #ff0000;font-size:3.1rem">{{__('messages.titreEthique')}}</h2>
    <p>{{__('messages.ethiqueParagraphe-1-1')}} <a target="_blank" href="http://publicationethics.org/">{{__('messages.ethiqueParagraphe-1-2')}}</a> {{__('messages.ethiqueParagraphe-1-3')}}</p>
    <h1 style="font-weight: bold; color: black">{{__('messages.ethiqueAuteurs')}}</h1> <br>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueOriginalite')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-2')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiquePublication')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-3')}}</p> 
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueReconnaissance')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-4')}}</p> 
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueCopyright')}}</h3></em>
    <p>
        {{__('messages.ethiqueParagraphe-5')}} <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/">{{__('messages.ethiquePoint-1-link')}}</a>. {{__('messages.ethiqueParagraphe-5-1')}}
    </p>
    <p>
        <ul>
            <li>
                {{__('messages.ethiquePoint-1-1')}} <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/">{{__('messages.ethiquePoint-1-link')}}</a> {{__('messages.ethiquePoint-1-2')}}
            </li>
            <li>
                {{__('messages.ethiquePoint-2-1')}}  <a href="{{URL::to("/")}}">{{__('messages.ethiquePoint-2-link')}}</a> {{__('messages.ethiquePoint-2-2')}}
            </li>
            <li>
                {{__('messages.ethiquePoint-3')}}  
            </li>
        </ul>
    </p>
    <h3 style="font-weight: bold; color: black">{{__('messages.ethiquePaternite')}}</h3>
    <p>{{__('messages.ethiqueParagraphe-6')}}</p>
    <p>
        <ul>
            <li>
                {{__('messages.ethiquePoint-4')}} 
            </li>
            <li>
                {{__('messages.ethiquePoint-5')}}  
            </li>
            <li>
                {{__('messages.ethiquePoint-6')}}  
            </li>
            <li>
                {{__('messages.ethiquePoint-7')}}  
            </li>
        </ul>
    </p>
    <p>{{__('messages.ethiqueParagraphe-7')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueAuteur')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-8')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueReconnaissanceFinancement')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-9')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueDivulgation')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-10')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueErreur')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-11')}}</p> <br>
    <h1 style="font-weight: bold; color: black">{{__('messages.ethiqueReviseur')}}</h1> <br>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueProcessus')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-12')}}</p>
    <p>
        <a href="{{URL::to("/")}}">{{__('messages.ethiquePoint-2-link')}}</a>
        {{__('messages.ethiqueParagraphe-13')}}
    </p> 
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueContribution')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-14')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueNonQualifie')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-15')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueConfidentialite')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-16')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueNorme')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-17')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueReconnaissance')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-18')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueConflit')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-19')}}</p>
    <h1 style="font-weight: bold; color: black">{{__('messages.ethiqueEditeur')}}</h1> <br>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueDecision')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-20')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueFrancJeu')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-21')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueConfidentialite')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-22')}}</p>
    <em><h3 style="font-weight: bold; color: black">{{__('messages.ethiqueDivulgation')}}</h3></em>
    <p>{{__('messages.ethiqueParagraphe-23')}}</p>
    <br><br><br>
</div>

@else
<div id="bodyArabe" dir="rtl">
    <div class="container">
        <div id="sp-page-builder" class="sp-page-builder home-page page-8">
            <div class="page-content">
                <div id="content" class="right_sidebar">
                <div class="inner">
                    <div class="general_content">                                                                        
                        <div class="main_content" style="padding: 30px">
                            <p style="box-sizing: inherit; margin: 1rem 0px; font-size: 12.8px; text-align: center;">
                                <span style="box-sizing: inherit; font-family: 'Traditional Arabic', serif; font-size: medium;">
                                    <span style="color: #ff9900;">
                                        <strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 14pt;">
                                            <span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                               
                                            </span>
                                        </strong>
                                    </span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <h2 style="text-align: center; color: #ff0000;font-size:3.1rem; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.titreEthique')}}</h2>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif; ">{{__('messages.ethiqueParagraphe-1-1')}} <a style="font-size: 20px" target="_blank" href="http://publicationethics.org/">{{__('messages.ethiqueParagraphe-1-2')}}</a> {{__('messages.ethiqueParagraphe-1-3')}}</p>
        <h1 style="font-size: 3.2rem;font-weight:bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueAuteurs')}}</h1> <br>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueOriginalite')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-2')}}</p>
        <h3 style="font-size: 2.4rem;font-family: Georgia, 'Times New Roman', Times, serif; color: black;">{{__('messages.ethiquePublication')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;">{{__('messages.ethiqueParagraphe-3')}}</p> 
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueReconnaissance')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-4')}}</p> 
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueCopyright')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">
            {{__('messages.ethiqueParagraphe-5')}} <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/">{{__('messages.ethiquePoint-1-link')}}</a>. {{__('messages.ethiqueParagraphe-5-1')}}
        </p>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">
            <ul>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-1-1')}} <a target="_blank" href="https://creativecommons.org/licenses/by/4.0/">{{__('messages.ethiquePoint-1-link')}}</a> {{__('messages.ethiquePoint-1-2')}}
                </li>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-2-1')}}  <a dir="rtl" style="font-style: italic" href="{{URL::to("/")}}">{{__('messages.ethiquePoint-2-link')}}</a> {{__('messages.ethiquePoint-2-2')}}
                </li>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-3')}}  
                </li>
            </ul>
        </p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiquePaternite')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-6')}}</p>
        <p>
            <ul>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-4')}} 
                </li>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-5')}}  
                </li>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-6')}}  
                </li>
                <li style="font-family: Georgia, 'Times New Roman', Times, serif">
                    {{__('messages.ethiquePoint-7')}}  
                </li>
            </ul>
        </p>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-7')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueAuteur')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-8')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueReconnaissanceFinancement')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-9')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueDivulgation')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-10')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueErreur')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-11')}}</p> <br>
        <h1 style="font-size: 3.2rem;font-weight:bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueReviseur')}}</h1> <br>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueProcessus')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-12')}}</p>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">
            <a href="{{URL::to("/")}}">{{__('messages.ethiquePoint-2-link')}}</a>
            {{__('messages.ethiqueParagraphe-13')}}
        </p> 
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueContribution')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-14')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueNonQualifie')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-15')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueConfidentialite')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-16')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueNorme')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-17')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueReconnaissance')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-18')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueConflit')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-19')}}</p>
        <h1 style="font-size: 3.2rem;font-weight:bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueEditeur')}}</h1> <br>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueDecision')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-20')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueFrancJeu')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-21')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueConfidentialite')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-22')}}</p>
        <h3 style="font-size: 2.4rem;font-weight: bold; color: black; font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueDivulgation')}}</h3>
        <p style="font-family: Georgia, 'Times New Roman', Times, serif">{{__('messages.ethiqueParagraphe-23')}}</p>
        <br><br><br>
    </div>
    
</div>

@endif
</body>
@endsection