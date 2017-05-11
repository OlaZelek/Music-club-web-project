$(document).ready(function(){

	//main menu - icons
	var $icon_link = $(".icon_link");
	var $menu_des = $(".menu_des"); 

	$icon_link.on("mouseover", function(){
		$(this).next().fadeIn(300);
	});

	$icon_link.on("mouseleave", function(){
		$menu_des.fadeOut(300);
	});


	var $main_navigation_a = $(".navigation").find("a");

	$main_navigation_a.click(function(e) {
		e.preventDefault();
		
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 500);
	});


	//mobile menu
	var $mobile_menu_icon = $(".mobile_menu_icon");
	console.log($mobile_menu_icon);
	var $mobile_menu = $("#mobile_menu");
	var $close_icon = $(".icon-cancel");

	$mobile_menu_icon.on("click", function(){    

		$mobile_menu.slideDown();

		$(this).fadeOut();
		$close_icon.fadeIn();
	});

	$close_icon.on("click", function(){
		
		$mobile_menu.slideUp();

		$(this).fadeOut();
		$mobile_menu_icon.fadeIn();
	});

	
	var $mobile_menu_a = $("#mobile_menu").find("a");

	$mobile_menu_a.click(function(e) {
		e.preventDefault();
		$mobile_menu.hide();
		$close_icon.hide();
		$mobile_menu_icon.show();
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 70
		}, 500);
	});


	//about section
	var $about = $(".about-description");
	console.log($about);

	var timeout = setTimeout(function () {
		$about.fadeIn();
	}, 2000);


	//drinks menu - drop down list
	var $drop_list = $(".drop_list").find("a");
	console.log($drop_list);

	var $drinks_ul = $(".whiskey_ul");
	$drinks_ul.hide();

	$drop_list.on("click", function(e){

		if($(this).next().is(":hidden")){
			$(this).next().slideDown();
		}
		else{
			$(this).next().slideUp();
		}

	});


	//concerts section
	var $next_concerts = $(".next");
	var $concert_box = $("#concerts_box");
	var $concertList = $('#concerts_box .concert_item');

    $next_concerts.on("click", function(e){
    	e.preventDefault();
    	if ($concert_box.hasClass('allShown')) {
            $concert_box.removeClass('allShown');
            $concertList.hide();
            $concertList.eq(0).show();
            $concertList.eq(1).show();
            $concertList.eq(2).show();

			$('html, body').animate({
				scrollTop: $('#concerts').offset().top
			}, 500);

			//$next_concerts.text('Więcej');
			$next_concerts.text('Wcześniejsze');
		} else {
			var $nextConcerts = $('.concert_item:visible:last').nextAll(':lt(3)');
			if ($nextConcerts.length > 0) {
				$nextConcerts.show();
			} else {
				$next_concerts.text('Zwiń');
				$concert_box.addClass('allShown');
			}
		}
    });


    //gallery section on mobile portrait
	var $show_all = $(".show-all");

	$show_all.on("click", function(){
		$(this).parents('#gallery').addClass('visible-items');
	});


	//form - validation
	var $submit = $("input[type=submit]");
	var $name = $("#name");
	console.log($name);
	var $email = $("#email");
	console.log($email);
	var $textarea = $("#info");
	var $error = $("#error");
	var $success = $("#success");

	function checkData(e){

		$name_val = $name.val();
		$email_val = $email.val();
		$textarea_val = $textarea.val();
		var re = /\S+@\S+\.\S+/;
    
		if($name_val.length < 3){
			$error.show().text("Podane imię jest za krótkie - podaj przynajmniej 3 znaki");
			return false;
		}
		else if(!re.test($email_val)){
			$error.show().text("Podany adres e-mail jest niepoprawny - brak znaków @ i .");
			return false;
		}
		else if($textarea_val.length < 3){
			$error.show().text("Wiadomość jest za krótka - podaj przynajmniej 3 znaki");
			return false;
		}
		else{
			console.log("dane poprawne");
			return true;
		}
	}

	function sendMessage(e){
		if(checkData() === true){
			$error.hide();

			$.ajax( theme_uri + '/mail.php' )
			  .done(function(resp) {
			    $success.show().text(resp);
			});
		}
	}

	$submit.on("click", function(e){
		e.preventDefault();

		checkData();
		sendMessage();

	});

	$("a[rel^='prettyPhoto[gallery]']").magnificPopup({type:'image'});
});


//prettyPhoto slider

// j(function(){
// 	j("a[rel^='prettyPhoto[gallery]']").prettyPhoto();
// });