$(document).ready(function(){
	
// load page  bya load  finction  test 	
    $(".allNews").click(function(){
        $("#content").load("pages/Allnews.html");
    });
	
	
	 $(".Politic").click(function(){
        $("#content").load("pages/Politic.html");
    });
	
	 $(".Business").click(function(){
        $("#content").load("pages/Business.html");
    });
	
	 $(".Sport").click(function(){
        $("#content").load("pages/Sport.html");
    });
	 $(".Travel").click(function(){
        $("#content").load("pages/Travel.html");
    });
	
	 $(".Logo-active").click(function(){
        $("#content").load("pages/home.html");
    });	
	// search effict 
	
	$(".nav-seconed .navbar-right .btnSearch").click(function(){
	
	$(".nav-seconed span > input").toggle(800);
	
	});
	
	//nav bar color
	
	$('.navbar li').click(function(){

$(this).addClass('activee').siblings().removeClass('activee');
	
        });
	
});



//start new curasol  section  

(function() {
  /*  
  ...customise bootstrap carousel 
  ...change bootstrap carousel interval
  */
  $('#carousel-itemm').carousel({
    interval: 4000
  });
}());


(function() {
  $('.carousel-multiItem  .item').each(function() {
    var itemToClone = $(this);
    /*
    .....number  of item show  in slide  !
    */
    for (var i = 1; i < 3; i++) {
      /* 
        ..... go to the  next  item  in curasol 
      */
      itemToClone = itemToClone.next();

      /*  ....
        when that  item is last  item  in cauarsol-item  do this choos first sibling item and 
         go to do  add it , clone, add class, and add to collection
      */

      /*    else..... 
            skip this  condition and go to  add item content  and  clone it ....
      */

      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      /* 
        .... show the first-child in item class  " this div contain the content inside in" 
        ... then clone this selector "clearly meaning copy the data"
        ...  and give  it tha css style 
        ...  then add it  to collection in slide 
      */
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-" + (i))
        .appendTo($(this));

      $(".carousel-multiItem ").find(".item").css("transition", "   500ms ease-in-out all  ").css("transition", "  500ms ease-in-out all").css("backface-visibility", "visible").css("transform", "none!important")

      /*
       .... you  can  use  bootstrap function  if you used bootstrap CDN 
       .... but iam used  always  bootstrap.min.js   so  i do  this 
      
       .... @media all and (min-width: 768px) and (transform-3d),
           all and (min-width: 768px) and (-webkit-transform-3d)
      */
	}
  });
}());






/* smoth scrooll*/
var scrollButton  =$("#scroll-up");

	$(window).scroll(function(){
	
		
	if($(this).scrollTop()>=900){
	
		scrollButton.show();
	}
		else{
		scrollButton.hide();
		}
	});
	
	scrollButton.click(function(){
	$("html,body").animate({scrollTop:0},2500);
	});





