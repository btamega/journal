@extends('layouts.base')

@section('title')
Hespéris Tamuda
@endsection
<!-- Style d'accueil -->
@section('stylesheet')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
img {
  max-width: 100%;
  height: auto;
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

@endsection
@section('body')
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
    <div class="container">
    @if(App::getLocale()=='en' ||App::getLocale()=='fr')
        <div id="sp-page-builder" class="sp-page-builder home-page page-8">
            <div class="page-content">
                <div id="content" class="right_sidebar">
                <div class="inner">
                    <div class="general_content">                                                                        
                        <div class="main_content" style="padding: 30px">
                                <div>{!!$homeText->value!!}</div>
                            {{-- <p style="box-sizing: inherit; margin: 1rem 0px; font-size: 12.8px; text-align: center;">
                                <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;">
                                    <span style="color: #ff9900;">
                                        <strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 12.16px;">
                                            <span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                <span style="color: #3b5998; font-size: 28pt;">{{__('messages.titreHome1')}} &nbsp; </span>
                                            </span>
                                        </strong>
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;" align="center">
                                <img class="img" src="{{asset("images\WhatsApp Image 2021-10-03 at 13.08.38.jpeg")}}">
                                <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;"> 
                                    <span style="font-size: 14pt;">
                                        {{__('messages.paragraphe1')}}
                                    </span>
                                </span>
                                <span style="font-size: 14pt;">
                                    <span style="box-sizing: inherit;"></span>
                                    <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;"></span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 14pt;">
                                    <span style="box-sizing: inherit; font-family: 'Times New Roman', serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe2')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 14pt;">
                                    <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;">   
                                        {{__('messages.paragraphe3')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="box-sizing: inherit; font-size: 14pt;">
                                    <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                        {{__('messages.paragraphe4')}}
                                    </span>
                                </span>
                            </p> --}}
                            

                        </div>
                    </div>
                </div>
        </div>
    @else
    <div dir="rtl">
        <div id="sp-page-builder" class="sp-page-builder home-page page-8">
            <div class="page-content">
                <div id="content" class="right_sidebar">
                <div class="inner">
                    <div class="general_content">                                                                        
                        <div class="main_content" style="padding: 30px">
                            <p style="box-sizing: inherit; margin: 1rem 0px; font-size: 20pt; text-align: center;">
                                <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt;">
                                    <span style="color: #ff9900;">
                                        <strong style="box-sizing: inherit; color: #333333; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 12.16px;">
                                            <span style="box-sizing: inherit; font-size: 20pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                <span style="color: #3b5998; font-size: 28pt;">{{__('messages.titreHome1')}} &nbsp; </span>
                                            </span>
                                        </strong>
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px 0.0001pt; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 12.16px; line-height:normal; text-indent: 0px; text-align: justify;">
                            <img style="float: right" src="{{asset("images\WhatsApp Image 2021-10-03 at 13.08.38.jpeg")}}">
                                
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe1')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe2')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe3')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe4')}}
                                    </span>
                                </span>
                            </p>
                            

                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endif
    <!-- Liste des universités -->
    <section id="section-id-1489028018413" class="sppb-section ">
        <div class="sppb-row-container">
            <div class="sppb-row">
                <div class="sppb-col-md-12">
                    <div id="column-id-1489028018414" class="sppb-addon-container" >
                        <div id="sppb-addon-1488967667781" class="clearfix">
                            <div class="sppb-addon sppb-addon-module ">
                                <div class="sppb-addon-content">
                                    <div class="custom"  >
                                        <ul class="custom-1">
                                            <li class="item">
                                                <div class="main"><img src="images/UM5.png" width="56" height="47" /><br />
                                                    <div class="content">
                                                        <h3><a href="http://www.um5.ac.ma/um5r/">Université Mohamed 5</a></h3>
                                                        <p>Rabat- Maroc</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="main"><img src="images/faculté des lettres.jpeg" width="56" height="47" /><br />
                                                    <div class="content">
                                                        <h3><a href="http://www.um5.ac.ma/um5r/">Faculté des lettres</a></h3>
                                                        <p>Rabat- Maroc</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="main"><img style="font-size: 12.16px;" src="data:image/png;base64,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" width="47" height="47" /><br />
                                                    <div class="content">
                                                        <h3><a href="https://clarivate.com/">Clarivate Analytics</a></h3>
                                                        <p>Jersey - USA</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br> 
    </div>
            <!-- Fin liste des universités -->
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
    </div>
</body>
@endsection


