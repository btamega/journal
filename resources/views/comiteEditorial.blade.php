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
                        <p style="box-sizing: inherit; margin: 1rem 0px; font-size: 12.8px; text-align: center;">
                            <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;">
                                <span style="color: #ff9900;">
                                    <strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 12.16px;">
                                        <span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                            <span style="color: #3b5998; font-size: 28pt;">{{__('messages.titreComiteEditorial')}} &nbsp; </span>
                                        </span> <br>
										<h2 style="box-sizing: inherit; margin: 0px; text-rendering: optimizelegibility; font-size: 1.5em; font-family: Verdana; color: #6c6c6c; line-height: 1.1; padding: 0.5em 0.2em 0.5em 20px; background-image: url('/fr/../img/h2.gif'); background-position: 0px 10px; background-repeat: no-repeat; background-attachment: initial; text-align: center;">
											<span style="color: #3b5998;">
												<em style="box-sizing: inherit;">
													<span style="box-sizing: inherit; font-family: 'times new roman', times;">
														<strong style="box-sizing: inherit;">
															<span style="box-sizing: inherit; font-size: 24pt;"><br style="box-sizing: inherit;" /></span>
														</strong>
													</span>
												</em>
												<span style="font-size: 18pt;">
													<span style="box-sizing: inherit;">
														<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial1')}}</span>
														<br style="box-sizing: inherit;" />
													</span>
													<span style="box-sizing: inherit; font-size: 16pt;">
														<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
															<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial2')}}</span>
														</span>
													</span>
												</span>
											</span>
											<br style="box-sizing: inherit;" />
											<br style="box-sizing: inherit;" />
											<span style="font-size: 14pt; color: #3b5998;">
												<span style="font-size: 16pt;">
													<strong style="box-sizing: inherit;">
														<span style="box-sizing: inherit;">
															<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
																<em style="box-sizing: inherit;">{{__('messages.soustitreComiteEditorial3')}} </em><br style="box-sizing: inherit;" />
															</span>
														</span>
													</strong>
												</span>
												<span style="box-sizing: inherit;">
													<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
														<span style="font-size: 16pt;">{{__('messages.soustitreComiteEditorial4')}}</span>
													</span> <br style="box-sizing: inherit;" />
													<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial5')}}</span>
													</span>
												</span>
											</span>
										</h2>
										<div style="box-sizing: inherit; font-size: 12.16px;">
											<h4 style="box-sizing: inherit; margin: 0px; text-rendering: optimizelegibility; font-size: 1.5em; font-family: 'Times New Roman', Times, serif; font-weight: 400; color: #3b5998; font-style: italic;">
												<span style="color: #3b5998; font-size: 20pt;">    
													<span style="font-size: 16pt;"><strong><span style="box-sizing: inherit;">{{__('messages.soustitreComiteEditorial6')}}</span></strong></span>
												</span>
											</h4>
										</div>
                                    </strong>
                                </span>
                            </span>
                        </p>
						
                        <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;" align="center">
                            <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;"> 
                                <span style="font-size: 14pt;">
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://fr.wikipedia.org/wiki/Ahmed_Toufiq" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_1_ComiteEditorial')}}</a>
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
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.amrh.ma/?page_id=1414&amp;lang=fr" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_2_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
                        <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;">   
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_3_ComiteEditorial')}}</a>
                                   </span>
                            </span>
                        </p>
                        <p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif;">   
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://alacademia.org.ma/membre/%D8%B1%D8%AD%D9%85%D8%A9-%D8%A8%D9%88%D8%B1%D9%82%D9%8A%D8%A9-2/" target="_blank" rel="noopener noreferrer"
                                    {{__('messages.auteur_4_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://fr.wikipedia.org/wiki/Mohamed_Tozy">{{__('messages.auteur_5_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://www.ushmm.org/research/competitive-academic-programs/fellows-and-scholars/all-fellows-and-scholars/2014-daniel-j-schroeter" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_6_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://scholar.google.es/citations?user=N9AcRJcAAAAJ&amp;hl=en" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_7_ComiteEditorial')}}</a> 
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.bibliomonde.com/auteur/abdou-filali-ansary-28.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_8_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://chsim.ehess.fr/index.php?82" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_9_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://www.dohainstitute.edu.qa/EN/People/Academic-Affairs/School-of-Social-Sciences-and-Humanities/Pages/Faculty/Abdelhamid-H%C3%A9nia.aspx">{{__('messages.auteur_10_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.aoi.uzh.ch/de/islamwissenschaft/personen/professoren/dennerlein.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_11_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://cesor.ehess.fr/2015/02/02/nabil-mouline/">{{__('messages.auteur_12_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://crh.ehess.fr/index.php?143" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_13_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://history.ucsc.edu/faculty/profiles/singleton.php?&amp;singleton=true&amp;cruz_id=eburke" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_14_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://uam.academia.edu/BERNABELOPEZGARCIA" target="_parent">{{__('messages.auteur_15_ComiteEditorial')}}</a> 
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://www.college-de-france.fr/site/henry-laurens/biographie__1.htm" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_16_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://uam.academia.edu/ANGELESRAMIREZ">{{__('messages.auteur_17_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://fr.wikipedia.org/wiki/Daniel_Rivet" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_18_ComiteEditorial')}}</a> 
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://chsim.ehess.fr/index.php?74"  target="_blank" rel="noopener noreferrer">{{__('messages.auteur_19_ComiteEditorial')}} </a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.anthro.ucla.edu/faculty/aomar-boum" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_20_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<h4 style="box-sizing: inherit; margin: 0.75em 1em 0.25em 0em; text-rendering: optimizelegibility; font-size: 1.5em; font-family: 'Times New Roman', Times, serif; font-weight: 400; color: #006699; font-style: italic;">
							<span style="font-size: 16pt;">    
							<strong>
								<span style="box-sizing: inherit; color: #3b5998;">{{__('messages.comiteRedaction_ComiteEditorial')}}</span>
							</strong>
							</span>
						</h4>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5a.academia.edu/MohamedBerriane">{{__('messages.auteur_21_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.rencontresaverroes.com/bio-mohammed-kenbib">{{__('messages.auteur_22_ComiteEditorial')}}</a> 
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_23_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="color: #3b5998; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_24_ComiteEditorial')}}</a> 
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_25_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.aui.ma/en/shss/faculty.html?itemid=289">{{__('messages.auteur_26_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5s.academia.edu/RahalBoubrik">{{__('messages.auteur_27_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://enarch.academia.edu/HassanRadoine">{{__('messages.auteur_28_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_29_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://acrps.academia.edu/MohammedAbattouy" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_30_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_31_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archeo.ens.fr/spip.php?article48">{{__('messages.auteur_32_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_33_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_34_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://univh2m.academia.edu/Leilamaziane" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_35_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_36_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
                                    {{__('messages.auteur_37_ComiteEditorial')}}
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://competences.imist.ma/CVdetails.htm;jsessionid=1C267FCF25E76CEB61FAB8D317A61B7A?idCompetence=1419">{{__('messages.auteur_38_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="color: #3b5998; text-decoration: none; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://ciham.msh-lse.fr/membres/abdallah-fili">{{__('messages.auteur_39_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						<p style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'times new roman'; font-size: 12.8px; font-weight: 400; text-indent: 0px; text-align: justify;">
                            <span style="box-sizing: inherit; font-size: 14pt;">
                                <span style="box-sizing: inherit; font-family: 'times new roman', times;" data-offset-key="48or4-0-0"> 
									<a style="color: #3b5998; text-decoration: none; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="https://www.sit.edu/sit_faculty/taieb-belghazi-phd/">{{__('messages.auteur_40_ComiteEditorial')}}</a>
                                </span>
                            </span>
                        </p>
						
                        

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
								<div style="box-sizing: inherit; margin: 1rem 0px; color: #000000; font-family: 'Traditional Arabic', serif; font-size: 20px; font-weight: 400; text-indent: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;" align="center">
									<div style="box-sizing: inherit; max-height: 1e+06px; overflow: hidden; max-width: 800px; margin: 0px auto; padding: 15px 0px 75px; float: left;">
										<p style="box-sizing: inherit; margin: 1rem 0px; font-size: 12.8px; text-align: center;">
											<span style="box-sizing: inherit; font-family: 'Times New Roman', Times, serif; font-size: medium;">
												<span style="color: #ff9900;">
													<strong style="box-sizing: inherit; color: #333333; font-family: 'times new roman'; font-size: 12.16px;">
														<span style="box-sizing: inherit; font-size: 14pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
															<span style="color: #3b5998; font-size: 28pt;">{{__('messages.titreComiteEditorial')}} &nbsp; </span>
														</span> <br>
														<h2 style="box-sizing: inherit; margin: 0px; text-rendering: optimizelegibility; font-size: 1.5em; font-family: Verdana; color: #6c6c6c; line-height: 1.1; padding: 0.5em 0.2em 0.5em 20px; background-image: url('/fr/../img/h2.gif'); background-position: 0px 10px; background-repeat: no-repeat; background-attachment: initial; text-align: center;">
															<span style="color: #3b5998;">
																<em style="box-sizing: inherit;">
																	<span style="box-sizing: inherit; font-family: 'times new roman', times;">
																		<strong style="box-sizing: inherit;">
																			<span style="box-sizing: inherit; font-size: 24pt;"><br style="box-sizing: inherit;" /></span>
																		</strong>
																	</span>
																</em>
																<span style="font-size: 18pt;">
																	<span style="box-sizing: inherit;">
																		<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial1')}}</span>
																		<br style="box-sizing: inherit;" />
																	</span>
																	<span style="box-sizing: inherit; font-size: 16pt;">
																		<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
																			<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial2')}}</span>
																		</span>
																	</span>
																</span>
															</span>
															<br style="box-sizing: inherit;" />
															<br style="box-sizing: inherit;" />
															<span style="font-size: 14pt; color: #3b5998;">
																<span style="font-size: 16pt;">
																	<strong style="box-sizing: inherit;">
																		<span style="box-sizing: inherit;">
																			<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
																				<em style="box-sizing: inherit;">{{__('messages.soustitreComiteEditorial3')}} </em><br style="box-sizing: inherit;" />
																			</span>
																		</span>
																	</strong>
																</span>
																<span style="box-sizing: inherit;">
																	<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">
																		<span style="font-size: 16pt;">{{__('messages.soustitreComiteEditorial4')}}</span>
																	</span> <br style="box-sizing: inherit;" />
																	<span style="box-sizing: inherit; font-family: 'Times New Roman', serif;">{{__('messages.soustitreComiteEditorial5')}}</span>
																	</span>
																</span>
															</span>
														</h2>
														<div style="box-sizing: inherit; font-size: 12.16px;">
															<h4 style="box-sizing: inherit; margin: 0px; text-rendering: optimizelegibility; font-size: 1.5em; font-family: 'Times New Roman', Times, serif; font-weight: 400; color: #3b5998; font-style: normal;">
																<span style="color: #3b5998; font-size: 20pt;">    
																	<span style="font-size: 16pt;"><strong><span style="box-sizing: inherit;">{{__('messages.soustitreComiteEditorial6')}}</span></strong></span>
																</span>
															</h4>
														</div>
													</strong>
												</span>
											</span>
										</p>
										<div style="box-sizing: inherit;">
											<div style="box-sizing: inherit; color: #111111; font-family: 'Book Antiqua', serif; font-size: 11.9px;">
												<ul style="box-sizing: inherit; margin-top: 1.5rem; margin-bottom: 1.5rem; margin-left: 1.5rem; padding: 0px;">
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5a.academia.edu/MohamedBerriane">{{__('messages.auteur_1_ComiteEditorial')}}</a>
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.rencontresaverroes.com/bio-mohammed-kenbib">{{__('messages.auteur_2_ComiteEditorial')}}</a> 
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_3_ComiteEditorial')}}</a>
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="color: #3b5998; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_4_ComiteEditorial')}}</a> 
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">{{__('messages.auteur_5_ComiteEditorial')}}</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.aui.ma/en/shss/faculty.html?itemid=289">{{__('messages.auteur_6_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5s.academia.edu/RahalBoubrik">{{__('messages.auteur_7_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://enarch.academia.edu/HassanRadoine">{{__('messages.auteur_8_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">{{__('messages.auteur_9_ComiteEditorial')}}
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://acrps.academia.edu/MohammedAbattouy" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_10_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><span style="box-sizing: inherit; color: #3b5998;">{{__('messages.auteur_11_ComiteEditorial')}}</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archeo.ens.fr/spip.php?article48">{{__('messages.auteur_12_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_13_ComiteEditorial')}} </span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_14_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://univh2m.academia.edu/Leilamaziane" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_15_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_16_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_17_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://competences.imist.ma/CVdetails.htm;jsessionid=1C267FCF25E76CEB61FAB8D317A61B7A?idCompetence=1419">{{__('messages.auteur_18_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><span style="text-decoration: underline;"><a style="color: #3b5998; text-decoration: underline; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://chsim.ehess.fr/index.php?74">{{__('messages.auteur_19_ComiteEditorial')}}</a></span></span></li>
													
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><span style="text-decoration: underline;"><a style="color: #3b5998; text-decoration: underline; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://www.anthro.ucla.edu/faculty/aomar-boum">{{__('messages.auteur_20_ComiteEditorial')}}</a></span></span></li>
												</ul>
											</div>
										</div>
										<h4 style="box-sizing: inherit; margin: 0.75em 1em 0.25em 0em; text-rendering: optimizelegibility; font-size: 1.5em; font-family: 'Times New Roman', Times, serif; font-weight: 400; color: #3b5998; "><span style="font-size: 20pt;">    
											<strong><span style="box-sizing: inherit; color: #3b5998;">{{__('messages.comiteRedaction_ComiteEditorial')}}</span></strong></span></h4>
										<div style="box-sizing: inherit;">
											<div style="box-sizing: inherit; color: #111111; font-family: 'Book Antiqua', serif; font-size: 11.9px;">
												<ul style="box-sizing: inherit; margin-top: 1.5rem; margin-bottom: 1.5rem; margin-left: 1.5rem; padding: 0px;">
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5a.academia.edu/MohamedBerriane">{{__('messages.auteur_21_ComiteEditorial')}}</a>
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.rencontresaverroes.com/bio-mohammed-kenbib">{{__('messages.auteur_22_ComiteEditorial')}}</a> 
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_23_ComiteEditorial')}}</a>
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="color: #3b5998; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://www.archivesdumaroc.ma/page/le-mot-du-directeur.html" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_24_ComiteEditorial')}}</a> 
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">{{__('messages.auteur_25_ComiteEditorial')}}</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.aui.ma/en/shss/faculty.html?itemid=289">{{__('messages.auteur_26_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://um5s.academia.edu/RahalBoubrik">{{__('messages.auteur_27_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">
															<a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://enarch.academia.edu/HassanRadoine">{{__('messages.auteur_28_ComiteEditorial')}}</a>
														</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;">
														<span style="font-size: 20pt;">{{__('messages.auteur_29_ComiteEditorial')}}
														</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://acrps.academia.edu/MohammedAbattouy" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_30_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><span style="box-sizing: inherit; color: #3b5998;">{{__('messages.auteur_31_ComiteEditorial')}}</span>
													</li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://www.archeo.ens.fr/spip.php?article48">{{__('messages.auteur_32_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_33_ComiteEditorial')}} </span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_34_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="https://univh2m.academia.edu/Leilamaziane" target="_blank" rel="noopener noreferrer">{{__('messages.auteur_35_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_36_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;">{{__('messages.auteur_37_ComiteEditorial')}}</span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="box-sizing: inherit; background: transparent; color: #3b5998; transition: all 0.2s ease 0s;" href="http://competences.imist.ma/CVdetails.htm;jsessionid=1C267FCF25E76CEB61FAB8D317A61B7A?idCompetence=1419">{{__('messages.auteur_38_ComiteEditorial')}}</a></span></li>
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="color: #3b5998; text-decoration: none; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="http://ciham.msh-lse.fr/membres/abdallah-fili">{{__('messages.auteur_39_ComiteEditorial')}}</a></span></span></li>
													
													<li style="box-sizing: inherit; list-style: none; margin-left: 0px; padding-left: 0px; text-align: justify;"><span style="font-size: 20pt;"><a style="color: #3b5998; text-decoration: none; background: transparent; box-sizing: inherit; transition: all 0.2s ease 0s;" href="https://www.sit.edu/sit_faculty/taieb-belghazi-phd/">{{__('messages.auteur_40_ComiteEditorial')}}</a></span></span></li>
												</ul>
											</div>
										</div>
									
									</div>
									<div class="article-footer-wrap">
										<div class="article-footer-top">
											<div class="helix-social-share">
												<div class="helix-social-share-icon">
													<ul>
														<li>
															<div class="facebook" data-toggle="tooltip" data-placement="top" title="Share On Facebook">
																<a class="facebook" onClick="window.open('http://www.facebook.com/sharer.php?u=http://hesperis-tamuda.com/fr/index.php/comite-editorial','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=http://hesperis-tamuda.com/fr/index.php/comite-editorial">
																	<i class="fa fa-facebook"></i>
																</a>
															</div>
														</li>
														<li>
															<div class="twitter"  data-toggle="tooltip" data-placement="top" title="Share On Twitter">													
																<a class="twitter" onClick="window.open('http://twitter.com/share?url=http://hesperis-tamuda.com/fr/index.php/comite-editorial&amp;text=COMITÉ%20ÉDITORIAL','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=http://hesperis-tamuda.com/fr/index.php/comite-editorial&amp;text=COMITÉ%20ÉDITORIAL">
																	<i class="fa fa-twitter"></i>
																</a>
															</div>
														</li>
														<li>
															<div class="google-plus">
																<a class="gplus" data-toggle="tooltip" data-placement="top" title="Share On Google Plus" onClick="window.open('https://plus.google.com/share?url=http://hesperis-tamuda.com/fr/index.php/comite-editorial','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=http://hesperis-tamuda.com/fr/index.php/comite-editorial" >
																<i class="fa fa-google-plus"></i></a>
															</div>
														</li>
														<li>
															<div class="linkedin">
																<a class="linkedin" data-toggle="tooltip" data-placement="top" title="Share On Linkedin" onClick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=http://hesperis-tamuda.com/fr/index.php/comite-editorial','Linkedin','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=http://hesperis-tamuda.com/fr/index.php/comite-editorial" >
																	
																<i class="fa fa-linkedin-square"></i></a>
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
@endsection


