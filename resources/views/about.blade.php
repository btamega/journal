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
@if ($menu->value=="Horizontal")
<body class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
    <div class="container">
    @if(App::getLocale()=='en' ||App::getLocale()=='fr')
    <div id="sp-page-builder" class="sp-page-builder home-page page-8">
        <div class="page-content">
            <div id="content" class="right_sidebar">
            <div class="inner">
                <div class="general_content">                                                                        
                    <div class="main_content" style="padding: 30px">
                        <div>{!!$aboutText->value!!}</div>
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
                            <img style="float: right; padding-left:20px; width:189px; height:267px" src="{{asset("images/volumes_2021/2021-1-1.jpg")}}">
                                
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_1_About')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_2_About')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_3_About')}}
                                    </span>
                                </span>
                            </p>
                            <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_4_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_5_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_6_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_7_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_8_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_9_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_10_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_11_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: justify;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_12_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: center;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_13_About')}}
                                    </span>
                                </span>
                            </p>
							<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20pt; font-weight: 400; text-indent: 0px; text-align: center;">
                                <span style="font-size: 20pt;">
                                    <span style="box-sizing: inherit; font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: -0.2pt;">
                                        {{__('messages.paragraphe_14_About')}}
                                    </span>
                                </span>
                            </p>
                            

                        </div>
                    </div>
                </div>
        </div>
    </div>
    @endif
   
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
@else
<div style="margin-left:20%;padding:1px 16px;height:1000px;">
    <div>{!!$aboutText->value!!}</div>
</div>
@endif
@endsection


