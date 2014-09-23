<?php
  // Script para centrar los textos según el idioma.
  global $language;
  $lang = $language->language;
  $datax1 = 10;
  $datax2 = -25;
  $datax3 = 00;
  $datax4 = 00;
  switch ($lang) {
    case "es":
      $datax1 = 00;
      $datax2 = -25;
      $datax3 = 00;
	  $datax4 = 00;
      break;
    case "en":
      $datax1 = 0;
      $datax2 = 0;
      $datax3 = 00;
	  $datax4 = 00;
      break;
    case "fr":
      $datax1 = -15;
      $datax2 = 40;
      $datax3 = 60;
      break;
    case "de":
      $datax1 = 0;
      $datax2 = 10;
      $datax3 = 30;
      break;
    case "it":
      $datax1 = 0;
      $datax2 = 40;
      $datax3 = 60;
      break;
    case "pt-pt":
      $datax1 = -20;
      $datax2 = 10;
      $datax3 = 75;
      break;
    case "ru":
      $datax1 = 50;
      $datax2 = 10;
      $datax3 = 60;
      break;
  }
?>
<div class="slider-container">
  <div id="revolutionSlider" class="slider">
  	<ul>
  		<li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

        <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-f.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- <div class="tp-caption sft stb visible-lg"
										 data-x="35"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									

									<!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->
									                                                                       
                                        <div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax2; ?>"
										 data-y="0"
										 data-speed="300"
										 data-start="1500"
                     data-easing="easeOutExpo">	<img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/hd-slider-trans.png" alt=""></div>



                                    <div class="tp-caption top-label lfl stb"
                     data-x="<?php print $datax1; ?>"
										 data-y="150"
										 data-speed="300"
										 data-start="1200"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt="">  <?php print t('Whenever you need a valve...'); ?>  <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>
                     
                     
                                    <div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax1; ?>"
										 data-y="210"
										 data-speed="300"
										 data-start="1500"
                     data-easing="easeOutExpo">	<?php print t('CMO valves'); ?></div>

									<div class="tp-caption bottom-label sft stb"
                     data-x="<?php print $datax3; ?>"
										 data-y="2650"
										 data-speed="1200"
										 data-start="2000"
                     data-easing="easeOutExpo"><?php print t('will be there.'); ?></div>
                     
                     <div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax4; ?>"
										 data-y="280"
										 data-speed="1200"
										 data-start="2000"
                     data-easing="easeOutExpo"><?php print t('Check our products and features.'); ?></div>

									<div class="tp-caption customin customout"
										data-x="right" data-hoffset="-40"
										data-y="center" data-voffset="0"
										data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="800"
										data-start="1200"
										data-easing="Power4.easeOut"
										data-endspeed="500"
										data-endeasing="Power4.easeIn"
										style="z-index: 3"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/hd-slider.jpg" alt="">
                  </div>
                </li>
                
                
                
                <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

        <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-c.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- <div class="tp-caption sft stb visible-lg"
										 data-x="35"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="150"
										 data-speed="1200"
										 data-start="500"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt="">  <?php print t('Construcciones Metálicas de obturación'); ?>  <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>

									<!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax2; ?>"
										 data-y="210"
										 data-speed="1200"
										 data-start="1500"
                     data-easing="easeOutExpo">	<?php print t('CMO valves'); ?></div>

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="270"
										 data-speed="1200"
										 data-start="2500"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt="">  <?php print t('Distribuidores en más de 70 países'); ?>  <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>
                     
                     <!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption customin customout"
										data-x="right" data-hoffset="40"
										data-y="center" data-voffset="0"
										data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="1200"
										data-start="700"
										data-easing="Power4.easeOut"
										data-endspeed="500"
										data-endeasing="Power4.easeIn"
										style="z-index: 3"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/hd-slider-2.jpg" alt="">
                  </div>
                </li>
				
				 <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

        <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-d.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- <div class="tp-caption sft stb visible-lg"
										 data-x="35"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax1; ?>"
										 data-y="125"
										 data-speed="300"
										 data-start="500"
                     data-easing="easeOutExpo"><?php print t('Aplicaciones para la industria.'); ?> </div>

									<!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax2; ?>"
										 data-y="210"
										 data-speed="1200"
										 data-start="1500"
                     data-easing="easeOutExpo">	<?php print t('Industria del papel, Industria Minera, Gestión de sólidos, Plantas químicas'); ?></div>

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="270"
										 data-speed="1200"
										 data-start="3000"
                     data-easing="easeOutExpo">  <?php print t('Bombeos, Industria alimenticia, Tratamiento de aguas, Descarga de silos'); ?>  </div>
                     
                     <div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="330"
										 data-speed="1200"
										 data-start="4500"
                     data-easing="easeOutExpo">  <?php print t(' Presas, Centrales eléctricas, Centrales térmicas, Sector energético'); ?>  </div>
                     
                    

					</li>
                
                
                
				 <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

        <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-e.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- <div class="tp-caption sft stb visible-lg"
										 data-x="35"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="150"
										 data-speed="300"
										 data-start="500"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt="">  <?php print t('Construcciones Metálicas de obturación'); ?>  <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>

									<!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax2; ?>"
										 data-y="210"
										 data-speed="1200"
										 data-start="1500"
                     data-easing="easeOutExpo">	<?php print t('CMO valves'); ?></div>

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="270"
										 data-speed="1200"
										 data-start="3000"
                     data-easing="easeOutExpo">  <?php print t('Cada día, nos esforzamos para convertirnos en su'); ?>  </div>
                     
                     		<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="330"
										 data-speed="1200"
										 data-start="3000"
                     data-easing="easeOutExpo">  <?php print t('partner especializado en válvulas industriales.'); ?>  </div>
                     
                     <!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									
                </li>

                
<li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

        <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-e.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<!-- <div class="tp-caption sft stb visible-lg"
										 data-x="35"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="150"
										 data-speed="300"
										 data-start="500"
                     data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt="">  <?php print t('Construcciones Metálicas de obturación'); ?>  <img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>

									<!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									<div class="tp-caption main-label sft stb"
                     data-x="<?php print $datax2; ?>"
										 data-y="210"
										 data-speed="1200"
										 data-start="1500"
                     data-easing="easeOutExpo">	<?php print t('CMO valves'); ?></div>

									<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="270"
										 data-speed="1200"
										 data-start="3000"
                     data-easing="easeOutExpo">  <?php print t('Cada día, nos esforzamos para convertirnos en su'); ?>  </div>
                     
                     		<div class="tp-caption top-label lfl stl"
                     data-x="<?php print $datax1; ?>"
										 data-y="330"
										 data-speed="1200"
										 data-start="3000"
                     data-easing="easeOutExpo">  <?php print t('partner especializado en válvulas industriales.'); ?>  </div>
                     
                     <!--<div class="tp-caption sft stb visible-lg"
										 data-x="392"
										 data-y="150"
										 data-speed="300"
										 data-start="1000"
										 data-easing="easeOutExpo"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-title-border.png" alt=""></div>-->

									
                </li>
                                
                                <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

									<img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/custom-header-bg-b.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

									<div class="tp-caption customin customout"
										data-x="center" data-hoffset="0"
										data-y="center" data-voffset="0"
										data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="800"
										data-start="700"
										data-easing="Power4.easeOut"
										data-endspeed="500"
										data-endeasing="Power4.easeIn"
										style="z-index: 3"><img src="<?php print path_to_theme(); ?>/templates/partials/slider/img/slides/slide-concept-draft.png" alt="">
									</div>

									<div class="tp-caption customin customout"
										data-x="center" data-hoffset="0"
										data-y="center" data-voffset="-6"
										data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
										data-speed="600"
										data-start="100"
										data-easing="Power4.easeOut"
										data-endspeed="500"
										data-endeasing="Power4.easeOut"
										data-autoplay="false"
										data-autoplayonlyfirsttime="false"
										style="z-index: 8"><iframe src="//player.vimeo.com/video/31305629?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933&amp;autoplay=0" width="750" height="422" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>

								</li>
                                
                                
                                
                                
                                
            		
    </ul>
  </div>
</div>
