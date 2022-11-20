@extends('layouts.base')

@section('title')
{{$journalName->value }} | RECOMMANDATIONS
@endsection
@section('stylesheet')
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
									<div>{!!$recommandationText->value!!}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
		@else
		<div id="bodyArabe" dir="rtl">
			<div id="sp-page-builder" class="sp-page-builder home-page page-8">
				<div class="page-content">
					<div id="content" class="right_sidebar">
					<div class="inner">
						<div class="general_content">                                                                        
							<div class="main_content" style="padding: 30px">
								<p style="box-sizing: inherit; margin: 1rem 0px; font-size: 20pt; text-align: center;">
									<span style="box-sizing: inherit; font-family: 'Traditional Arabic', serif; font-size: medium;">
										<span style="color: #ff9900;">
											<strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 20pt;">
												<span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
													<span style="color: #3b5998; font-size: 28pt;">{{__('messages.titreRecommandation')}} &nbsp; </span>
												</span>
											</strong>
										</span>
									</span>
								</p>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;" align="center">
									<span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;"> 
										<span style="font-size: 20pt;">
											{{__('messages.paragraphe_1_Recommandation')}}
										</span>
									</span>
									<span style="font-size: 14pt;">
										<span style="box-sizing: inherit;"></span>
										<span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;"></span>
									</span>
								</p>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'Times New Roman', serif; letter-spacing: -0.2pt;">
											{{__('messages.paragraphe_2_Recommandation')}}
										</span>
									</span>
								</p>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;">   
											{{__('messages.paragraphe_3_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #ff0000;">
									<strong style="box-sizing: inherit;">
										<span style="box-sizing: inherit;"><span style="box-sizing: inherit; font-size: 20pt;">{{__('messages.titre-1-ParaRecommandation')}}</span>
										
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_4_Recommandation')}}
										</span>
									</span>
								</p>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_5_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #ff0000;">
									<strong style="box-sizing: inherit; font-size: 20px; ">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-2-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_6_Recommandation')}}
										</span>
									</span>
								</p>
								<strong style="box-sizing: inherit;">
									<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
										<span style="color: #ff0000;">{{__('messages.titre-3-ParaRecommandation')}}:</span>
									</span>
								</strong>
									
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_7_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #ff0000;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-4-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_8_Recommandation')}}
										</span>
									</span>
								</p>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_9_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #ff0000;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-5-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 20pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_10_Recommandation')}}
										</span>
									</span>
								</p>
								<div style="text-align: center">
									<img class="img-responsive" src="images/table.png" >
			
								</div>
								<span style="color: #3b5998;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-6-ParaRecommandation')}}</span>
									</strong>
								</span> <br>
								<span style="color: #ff0000;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-7-ParaRecommandation')}}</span>
									</strong>
								</span> <br>
								<span style="color: #3b5998;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-8-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_11_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #3b5998;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-9-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_12_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="color: #3b5998;">
									<strong style="box-sizing: inherit;  font-size: 20px;">
										<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_13_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-11-ParaRecommandation')}}</strong></span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_14_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-12-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_15_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-12-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_16_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_17_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-14-ParaRecommandation')}}</strong></span>
									</strong>
								</span> <br>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_18_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_19_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_20_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-17-ParaRecommandation')}}</strong></span>
									</strong>
								</span> <br>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_21_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_22_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_23_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-17-ParaRecommandation')}}</strong></span>
									</strong>
								</span> <br>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_24_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_25_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_26_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-18-ParaRecommandation')}}</strong></span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_27_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_28_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_29_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-19-ParaRecommandation')}}</strong></span>
									</strong>
								</span> <br>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_30_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_31_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_32_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="color: #ff0000;"><strong style="box-sizing: inherit;">{{__('messages.titre-20-ParaRecommandation')}}</strong></span>
									</strong>
								</span> <br>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-15-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_33_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-16-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_34_Recommandation')}}
										</span>
									</span>
								</p>
								<span style="box-sizing: inherit; font-size: 20pt; font-family: 'Times New Roman', serif;">
									<strong>
									<span style="box-sizing: inherit; color:#3b5998; font-size: 20pt; font-family: 'Times New Roman', serif;">{{__('messages.titre-10-ParaRecommandation')}}</span>
									</strong>
								</span>
								<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
									<span style="box-sizing: inherit; font-size: 14pt;">
										<span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
											{{__('messages.paragraphe_35_Recommandation')}}
										</span>
									</span>
								</p>
								

							</div>
						</div>
					</div>
			</div>
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
		</div>
		@endif
	</div>
</body>
@else
<div style="margin-left:20%;padding:1px 16px;height:1000px;">
    <div>{!!$recommandationText->value!!}</div>
</div>
@endif
@endsection