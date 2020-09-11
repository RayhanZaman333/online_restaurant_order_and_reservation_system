(function ($) {
    "use strict";
		
	// Preloder
	$(window).on('load', function() {
		$('#status').fadeOut();
		$('#preloader').delay(100).fadeOut('fast');
		$('body').delay(100).css({'overflow':'visible'});
	});
	
	//Sticky Menu
	$(document).ready(function () {
		if (jQuery(window).width() >= 320){
			$(window).bind('scroll', function() {
				if ($(window).scrollTop() > 100) {
					 $('#sticky-menu').addClass('fixed');
				 }
				 else {
					 $('#sticky-menu').removeClass('fixed');
				 }
			});
		}
	});
	
	//mobile menu
	$(document).ready(function(){
		var ulNav= "#nav", openNav= "activeNav";
		
		$('.toggle-menu').on('click',function(e){
			if($(ulNav).hasClass(openNav)){
				$(ulNav).removeClass(openNav);
			}else{
				$(ulNav).addClass(openNav);
			}
			e.preventDefault();
		});
	});
	
	//Banner Carousel
	$(".banner-area").owlCarousel({
		items:1,
		loop:true,
		nav:true,
		navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		dots:false,
		autoplay:false
	});
	
	//popup video
	$('#vidBox').VideoPopUp({
		opener: "video-trigger",
		idvideo: "demo"
	});
	
	//tab panel
	$('.tab-navbar ul li').on('click',function(){
		$('.tab-navbar ul li').removeClass('active-tab');
		$(this).addClass('active-tab');
	});
	
	$(window).on('load', function all() {
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'block';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'none';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'none';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'none';
		var elContent5= document.getElementById('content5');
			elContent5.style.display = 'none';
		var elContent6= document.getElementById('content6');
			elContent6.style.display = 'none';
	});
	
	$('#button1').on('click', function button1(){
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'none';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'block';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'none';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'none';
		var elContent5 = document.getElementById('content5');
			elContent5.style.display = 'none';
		var elContent6 = document.getElementById('content6');
			elContent6.style.display = 'none';
	});
	
	$('#button2').on('click', function button2(){
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'none';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'none';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'block';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'none';
		var elContent5 = document.getElementById('content5');
			elContent5.style.display = 'none';
		var elContent6 = document.getElementById('content6');
			elContent6.style.display = 'none';
	});
	
	$('#button3').on('click', function button3(){
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'none';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'none';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'none';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'block';
		var elContent5 = document.getElementById('content5');
			elContent5.style.display = 'none';
		var elContent6 = document.getElementById('content6');
			elContent6.style.display = 'none';
	});
	
	$('#button4').on('click', function button4(){
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'none';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'none';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'none';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'none';
		var elContent5 = document.getElementById('content5');
			elContent5.style.display = 'block';
		var elContent6 = document.getElementById('content6');
			elContent6.style.display = 'none';
	});
	
	$('#button5').on('click', function button5(){
		var elContent1 = document.getElementById('content1');
			elContent1.style.display = 'none';
		var elContent2 = document.getElementById('content2');
			elContent2.style.display = 'none';
		var elContent3 = document.getElementById('content3');
			elContent3.style.display = 'none';
		var elContent4 = document.getElementById('content4');
			elContent4.style.display = 'none';
		var elContent5 = document.getElementById('content5');
			elContent5.style.display = 'none';
		var elContent6 = document.getElementById('content6');
			elContent6.style.display = 'block';
	});

	//Isotope portfolio
	$('.all-gallery-items').isotope({
		itemSelector:'.single-gallery'
	});

	$('.portfolio-nav ul li').on('click',function(){
		$('.portfolio-nav ul li').removeClass('active-portfolio');
		$(this).addClass('active-portfolio');
		
		var selector = $(this).attr('data-filter');
		$('.all-gallery-items').isotope({
			filter:selector,
			itemSelector:'.single-gallery'
		});
	});
	
	//Magnify popup jquery
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-link',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        }
        , image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
	
	//Datepicker
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	
	//Chef Carousel
	$(".all-chefs").owlCarousel({
		items:3,
		loop:true,
		nav:false,
		dots:true,
		autoplay:true,
		responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,
				},
				900:{
					items:3,
				}
			}
	});
	
	//counter
	$(".counter-value").counterUp({
		delay:5,
		time:1000
	});
	
	//testimonial carousel
	$(".all-testimonials").owlCarousel({
		items:1,
		loop:true,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		autoplay:true
	});
	
	//Sponsor Carousel
	$(".all-sponsors").owlCarousel({
		items:4,
		loop:true,
		nav:false,
		dots:false,
		autoplay:true,
		responsiveClass:true,
			responsive:{
				0:{
					items:2,
				},
				600:{
					items:3,
				},
				900:{
					items:4,
				}
			}
	});
	
	//blog-slider carousel
	$(".blog-slider").owlCarousel({
		items:1,
		loop:true,
		dots:true,
		nav:false,
		autoplay:false
	});

	
})(jQuery);

// snackbar
function myFunction() {
	// Get the snackbar DIV
	var x = document.getElementById("snackbar");
	
	// Add the "show" class to DIV
	x.className = "show";
	
	// After 3 seconds, remove the show class from DIV
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}


//modal
// function popup_modal(){
// 	document.getElementById('order-form').style.display='block';
// }

// function popup_close(){
// 	document.getElementById('order-form').style.display='none';
// }
	
// var modal = document.getElementById('order-form');
// window.onclick = function(event){
// 	if(event.target == modal){
// 		modal.style.display = "none";
// 	}
// }


//order count
function order(id) {
	var qnty = document.getElementById('qnty').value;
	//alert(id);
	//alert(qnty);
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
	  if (this.readyState == 4 && this.status == 200) {
		//document.getElementById("demo").innerHTML = this.responseText;
		myFunction();
	  }
	};
	xhttp.open("GET", "http://localhost/ajax/orders.php?id="+id+"&qnty="+qnty, true);
	xhttp.send();
}


// remove order item
function orderCancel(id) {
	//alert(id);
	//alert(qnty);
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
	  if (this.readyState == 4 && this.status == 200) {
		//document.getElementById("demo").innerHTML = this.responseText;

		orderList();
	  }
	};
	xhttp.open("GET", "http://localhost/ajax/removeOrder.php?id="+id, true);
	xhttp.send();
}


// get order list
function orderList() {
	//alert(id);
	//alert(qnty);
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange=function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("orders").innerHTML = this.responseText;
	  }
	};
	xhttp.open("GET", "http://localhost/ajax/orderList.php", true);
	xhttp.send();
}


// reservation cancel message
function reservationCancel() {
	alert("To cancel your reservation, contact us at +8801955181028. Thank you!");
}


// reservation date check
function tbl_date() {
	var date = document.getElementById('datepicker').value;
	//alert(date);

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange=function() {
		// var rev = "";
	  if (this.readyState == 4 && this.status == 200) {
				var obj = JSON.parse(this.responseText);
				
				document.getElementById('tbl').innerHTML = "<option value='0'>Select 1</option>";
				obj.forEach(function(e){
						
						document.getElementById('tbl').innerHTML += "<option value="+e.rt_id+" id= rev_+"+e.id+">"+e.rt_name+" max => "+ e.max_accomodate+"</option>";
					
				});

				
				// alert(responseText);
			//document.getElementById("orders").innerHTML = this.responseText;
	  }
	};
	xhttp.open("GET", "http://localhost/ajax/reserveTable.php?date="+date, true);
	xhttp.send();
}
	

// booked table time display
function tbl_id() {
	var id = document.getElementById('tbl').value;
	var date = document.getElementById('datepicker').value;
	//alert(id);
	//alert(date);

	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange=function() {
		// var rev = "";
		if (this.readyState == 4 && this.status == 200) {
				var obj = JSON.parse(this.responseText);
				
				document.getElementById('booked').value = "";
				document.getElementById('booked').value = "AVAILABLE ";
				var booked = false;
				
				obj.forEach(function(e){
					if(booked == false)
					{
						document.getElementById('booked').value = "";
						document.getElementById('booked').value = "BOOKED => ";
						booked = true;
					}
						
						document.getElementById('booked').value += "("+e.time+")";
					
				});

				
				// alert(responseText);
			//document.getElementById("orders").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "http://localhost/ajax/reserveTime.php?id="+id+"&date="+date, true);
	xhttp.send();
}


// function sendSMS()
// {
// 	var xhr = new XMLHttpRequest();
// 	xhr.open("GET", "https://platform.clickatell.com/messages/http/send?apiKey=tQ9tJuJcSjKoABEOncHPtA==&to=8801955181028&content=Hi there...", true);
// 	xhr.onreadystatechange = function(){
// 		if (xhr.readyState == 4 && xhr.status == 200){
// 			console.log('success')
// 		}
// 	};
// 	xhr.send();

// 	alert("SMS");
// }


// validation
// function validateName(){    //checking name
// 	var nameLen = document.getElementById("name").value.length;
// 	if(nameLen > 0){
// 			document.getElementById("msgName").style.display = "none";
			
// 	}
// 	else{
// 			document.getElementById("msgName").style.display = "block";
// 			validate = false;
// 	}
// }

// function validatePhone(){    //checking phone
// 	var num = document.myform.phone.value;
// 	if(isNaN(num)){
// 			document.getElementById('msgName').innerHTML = "Enter Your Phone Number";
// 			return false;
// 	}
// 	else{
// 			return true;
// 	}
// }

// function validateData(){
// 	validate = true;
// 	validateName();
// 	if(validate == true)
// 	{
// 			return true;
// 	}
// 	else
// 	{
// 			return false;
// 	}
// }