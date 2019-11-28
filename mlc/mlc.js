    //blinker is an id  
    var blink_speed = 500;   //change timer here!
var t = setInterval(function () {
    var ele = document.getElementById('mlc_blinker');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

  
  jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('.mlc_btt').fadeIn('slow');
        } else {
            $('.mlc_btt').fadeOut('slow');
        }
    });
    $('.mlc_btt').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);  //change timer here!
        return false;
    });
});
 
 
    $(document).ready(function(){
   $('.mlc_drag_r').draggable( { cursor: 'pointer' , revert: true, revertDuration: 1000 } );   //change timer here!
   
   });
   
   
   
   $(function(){
var animationName ='swing';   // change animation name here
  var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    $('.mlc_aniClick').on('click', function(){
	 $('.mlc_aniAct').addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
	
	});   

});


  $(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 3000;   //change fade out timer here
function hidePreloader() {
var preloader = $('.mlc_preloder');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});


CKEDITOR.editorConfig = function( config ) {
//	config.language = 'en';
	// config.uiColor = '#F7B42C';
	config.height = 300;
//	config.width = 500;
//	config.toolbarCanCollapse = true;
};

 
/////////////////////////////////////////////// 
 
   $(document).ready(function(){
   $('.mlc_drag').draggable( { cursor: 'pointer'} );
   
   });
   
   

   $(' .mlc_sort1, .mlc_sort2, .mlc_sort3, .mlc_sort4 , .mlc_sort5').sortable( { cursor: 'pointer'} );
 
 
   $('.mlc_resize').resizable( { handles: 'all' } ); // {animate:true, handles: 'all', ghost: true});
   






/////////////////////////////////////////////// 

  
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  

   // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();	

  
  
  		 
				 //discovery features
				 $('.tap-target').tapTarget('open');
				$('.tap-target').tapTarget('close');
				
				
				
				  $(document).ready(function() {
    $('select').material_select();
  });
   

   
    // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
