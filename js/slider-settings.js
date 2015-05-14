var tpj=jQuery;
tpj.noConflict();
    tpj(document).ready(function($) {
       tpj('.slider').revolution(
          {
              delay:9000,
              startheight:450,
              startwidth:960,
    
              hideThumbs:300,
    
              thumbWidth:100,	
              thumbHeight:50,
              thumbAmount:5,
    
              navigationType:"both",					
              navigationArrows:"verticalcentered",		
              navigationStyle:"round",				
    
              touchenabled:"on",					
              onHoverStop:"on",					
    
              navOffsetHorizontal:0,
              navOffsetVertical:20,
    
              stopAtSlide:-1,
              stopAfterLoops:-1,
    
              shadow:0,						
              fullWidth:"off"					
          });
    });
