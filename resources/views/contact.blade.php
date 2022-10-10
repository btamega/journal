@extends('layouts.base')

@section('title')
{{__('messages.contact')}}
@endsection
@section('stylesheet')
<style>
h6{
	font-family:Abhaya Libre, sans-serif; font-size:27px; 
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
#sp-breadcrumb-block{ 
	background-color:#f6f6f6; 
}
#sp-block-acymailling{ 
	background-image:url("images/bg1.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:50% 50%; 
}
#sp-footer{ 
	background-color:#060d11; 
}
div.mod_search35 input[type="search"]{ 
	width:auto; 
}
#contact  {
  background-color: #2c3e50;
  color: #DFDFDF;
}
	</style>
@endsection
@section('body')
<body  class="site com-sppagebuilder layout2 homepage view-page  no-layout no-task itemid-556 fr-fr ltr  sticky-header layout-fluid off-canvas-menu-init">
<section id="sp-main-body">
	@if(App::getLocale()=='en' ||App::getLocale()=='fr')
		<div class="container">
			<div class="row">
				<div id="sp-component" class="col-sm-12 col-md-12">
					<div class="sp-column ">
						<div id="system-message-container"></div>
						<div class="contact" itemscope itemtype="https://schema.org/Person">						
							<div class="page-header">
								<h2>
									<span class="contact-name" itemprop="name">Khalid Ben Srhir Coordinateur Scientifique </span>
								</h2>
							</div>
							<h3>
								<span class="contact-category">Sample Data-Contact
                                
								</span>
							</h3>
							<div id="slide-contact" class="accordion">		
								<div class="accordion-group">
									<div class="accordion-heading">
										<strong><a href="#basic-details" data-toggle="collapse" class="accordion-toggle">Contact</a></strong>
									</div>
									<div class="accordion-body collapse in" id="basic-details">
										<div class="accordion-inner">	
										<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
											<dt>
												<span class="jicons-icons">
													<img src="images/con_address.png" alt="Adresse: " />			
												</span>
											</dt>
											<dd>
												<span class="contact-street" itemprop="streetAddress">
													Faculté de Lettre et des Sciences Humaines  BP 1040 Rabat Maroc					<br />
												</span>
											</dd>
											<dt>
												<span class="jicons-icons" itemprop="email">
													<img src="images/emailButton.png" alt="E-mail: " />		
												</span>
											</dt>
											<dd>
												<span class="contact-emailto">
													<span id="cloak1eed0deaee23168f7e0c79d5de2cfdf4">Cette adresse e-mail est protégée contre les robots spammeurs. Vous devez activer le JavaScript pour la visualiser.</span><script type='text/javascript'>
													document.getElementById('cloak1eed0deaee23168f7e0c79d5de2cfdf4').innerHTML = '';
													var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
													var path = 'hr' + 'ef' + '=';
													var addy1eed0deaee23168f7e0c79d5de2cfdf4 = 'kh&#97;l&#105;db&#101;nsrh&#105;r' + '&#64;';
													addy1eed0deaee23168f7e0c79d5de2cfdf4 = addy1eed0deaee23168f7e0c79d5de2cfdf4 + 'gm&#97;&#105;l' + '&#46;' + 'c&#111;m';
													var addy_text1eed0deaee23168f7e0c79d5de2cfdf4 = 'kh&#97;l&#105;db&#101;nsrh&#105;r' + '&#64;' + 'gm&#97;&#105;l' + '&#46;' + 'c&#111;m';document.getElementById('cloak1eed0deaee23168f7e0c79d5de2cfdf4').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy1eed0deaee23168f7e0c79d5de2cfdf4 + '\'>'+addy_text1eed0deaee23168f7e0c79d5de2cfdf4+'<\/a>';
													</script>		
												</span>
											</dd>
										</dl>
									</div>
								</div>
							</div>	
							<div class="accordion-group">
								<div class="accordion-heading">
									<strong><a href="#display-form" data-toggle="collapse" class="accordion-toggle collapsed">Formulaire de Contact</a></strong>
								</div>
								<div class="accordion-body collapse" id="display-form">
									<div class="accordion-inner">		
									
										<section id="contact">
											<div class="container">
											<div class="box last">
												<div class="row">
												<div class="col-sm-12">
													<h1>Contactez-nous</h1>
										
													<div class="status alert alert-success" style="display:none"></div>
													<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="/articles_list" role="form">
														@csrf
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">
																<input type="text" name="userName" class="form-control" required="required" placeholder="Nom">
															</div>
															</div>
															<div class="col-sm-6">
															<div class="form-group">
																<input type="text" name="commentEmail" class="form-control" required="required" placeholder="Adresse émail">
															</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12">
															<div class="form-group">
																<textarea name="commentText" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
															</div>
															<div class="form-group">
																<input type="submit" class="btn btn-danger btn-lg" value=" Envoyer ">
															</div>
															</div>
														</div>
													</form>
												</div>
													
											</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>			
						</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	@else
		<div id="bodyArabe" dir="rtl">
			<div class="container">
				<div class="row">
					<div id="sp-component" class="col-sm-12 col-md-12">
						<div class="sp-column ">
							<div id="system-message-container"></div>
							<div class="contact" itemscope itemtype="https://schema.org/Person">						
								<div class="page-header">
									<h2>
										<span style="font-size: 20pt; font-family: Georgia, 'Times New Roman', Times, serif" class="contact-name" itemprop="name">خالد بن الصغير المنسق العلمي</span>
									</h2>
								</div>
								<h3>
									<span style="font-family: Georgia, 'Times New Roman', Times, serif" class="contact-category">اتصل بنا
									</span>
								</h3>
								<div id="slide-contact" class="accordion">		
									<div class="accordion-group">
										<div class="accordion-heading">
											<strong><a href="#basic-details" data-toggle="collapse" class="accordion-toggle">جهة الاتصال</a></strong>
										</div>
										<div class="accordion-body collapse in" id="basic-details">
											<div class="accordion-inner">	
											<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
												<dt>
													<span class="jicons-icons">
														<img src="images/con_address.png" alt="Adresse: " />			
													</span>
												</dt>
												<dd style="font-size:14pt">
													<span class="contact-street" itemprop="streetAddress">
														Faculté de Lettre et des Sciences Humaines  BP 1040 Rabat Maroc					<br />
													</span>
												</dd>
												<dt>
													<span class="jicons-icons" itemprop="email">
														<img src="images/emailButton.png" alt="E-mail: " />		
													</span>
												</dt>
												<dd>
													<span class="contact-emailto">
														<span style="font-size:14pt" id="cloak1eed0deaee23168f7e0c79d5de2cfdf4">Cette adresse e-mail est protégée contre les robots spammeurs. Vous devez activer le JavaScript pour la visualiser.</span><script type='text/javascript'>
														document.getElementById('cloak1eed0deaee23168f7e0c79d5de2cfdf4').innerHTML = '';
														var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
														var path = 'hr' + 'ef' + '=';
														var addy1eed0deaee23168f7e0c79d5de2cfdf4 = 'kh&#97;l&#105;db&#101;nsrh&#105;r' + '&#64;';
														addy1eed0deaee23168f7e0c79d5de2cfdf4 = addy1eed0deaee23168f7e0c79d5de2cfdf4 + 'gm&#97;&#105;l' + '&#46;' + 'c&#111;m';
														var addy_text1eed0deaee23168f7e0c79d5de2cfdf4 = 'kh&#97;l&#105;db&#101;nsrh&#105;r' + '&#64;' + 'gm&#97;&#105;l' + '&#46;' + 'c&#111;m';document.getElementById('cloak1eed0deaee23168f7e0c79d5de2cfdf4').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy1eed0deaee23168f7e0c79d5de2cfdf4 + '\'>'+addy_text1eed0deaee23168f7e0c79d5de2cfdf4+'<\/a>';
														</script>		
													</span>
												</dd>
											</dl>
										</div>
									</div>
								</div>	
								<div class="accordion-group">
									<div class="accordion-heading">
										<strong><a href="#display-form" data-toggle="collapse" class="accordion-toggle collapsed">نموذج الاتصال</a></strong>
									</div>
									<div class="accordion-body collapse" id="display-form">
										<div class="accordion-inner">		
											<section id="contact">
												<div class="container">
												<div class="box last">
													<div class="row">
													<div class="col-sm-12">
														<h1>هيسبريس-تمودا</h1>
														<div class="status alert alert-success" style="display:none"></div>
														<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="/sendemail.php" role="form">
														<div class="row">
															<div class="col-sm-6">
																
																<div class="form-group">
																	<input type="text" class="form-control" required="required" placeholder="الاسم ">
																</div>
																</div>
																<div class="col-sm-6">
																<div class="form-group">
																	<input type="text" class="form-control" required="required" placeholder="البريد الالكتروني">
																</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																<div class="form-group">
																	<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="الرسالة"></textarea>
																</div>
																<div class="form-group">
																	<input type="submit" class="btn btn-danger btn-lg" value=" إرسال البريد الإلكتروني ">
																</div>
																</div>
															</div>
															</form>
														</div>
														<div class="col-sm-6">
															
															
															
														</div>
													</div>
												</div>
											</div>
										</section>
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
	
</section>
<section id="sp-block-acymailling">
	<div class="container">
		<div class="row">
			<div id="sp-position2" class="col-xs-12 col-sm-6 col-md-6">
				<div class="sp-column ">
					<div class="sp-module mod-acymailing">
						<div class="sp-module-content">
							<div class="acymailing_modulemod-acymailing" id="acymailing_module_formAcymailing44651">
								<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing44651"  >
									<form id="formAcymailing44651" action="/fr/index.php/nous-contacter" onsubmit="return submitacymailingform('optin','formAcymailing44651', 0)" method="post" name="formAcymailing44651"  >
										<div class="acymailing_module_form" >
											<table class="acymailing_form">
												<tr>
													<td class="acyfield_email acy_requiredField">
														<input id="user_email_formAcymailing44651"  onfocus="if(this.value == 'ENTER YOUR EMAIL') this.value = '';" onblur="if(this.value=='') this.value='ENTER YOUR EMAIL';" class="inputbox" type="text" name="user[email]" style="width:80%" value="ENTER YOUR EMAIL" title="ENTER YOUR EMAIL"/>
													</td> 												
													<td  class="acysubbuttons">
														<input class="button subbutton btn btn-primary" type="submit" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing44651', 0); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
													</td>
												</tr>
											</table>
											<input type="hidden" name="ajax" value="0" />
											<input type="hidden" name="acy_source" value="module_120" />
											<input type="hidden" name="ctrl" value="sub"/>
											<input type="hidden" name="task" value="notask"/>
											<input type="hidden" name="redirect" value="http%3A%2F%2Fhesperis-tamuda.com%2Ffr%2Findex.php%2Fnous-contacter"/>
											<input type="hidden" name="redirectunsub" value="http%3A%2F%2Fhesperis-tamuda.com%2Ffr%2Findex.php%2Fnous-contacter"/>
											<input type="hidden" name="option" value="com_acymailing"/>
											<input type="hidden" name="hiddenlists" value="1"/>
											<input type="hidden" name="acyformname" value="formAcymailing44651" />
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sp-position3" class="col-sm-6 col-md-6">
				<div class="sp-column ">
					<div class="sp-module  social-list">
						<div class="sp-module-content">
							<div class="custom social-list"  >
								<ul class="list-item">
									<li class="item"><a title="facebook" href="https://www.facebook.com/hesperistamudaOfficiel/"><i class="fa fa-facebook">facebook</i></a></li>
									<li class="item"><a title="twitter" href="https://twitter.com/smartaddons"><i class="fa fa-twitter">twitter</i></a></li>
									<li class="item"><a title="google" href="https://plus.google.com/+Smartaddons/posts"><i class="fa fa-google-plus">google</i></a></li>
									<li class="item"><a title="instagram" href="https://www.pinterest.com/smartaddons/"><i class="fa fa-instagram">instagram</i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

</body>
@endsection