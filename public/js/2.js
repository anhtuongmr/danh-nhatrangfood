$(document).ready(function() {

	var top_menu = $('.top-menu');
	var top_header = $('.top-header');
	$(window).scroll(function(event) {
		if($(this).scrollTop() > 25){
			top_menu.addClass('top-menu-fixed');
		}
		else{
			top_menu.removeClass('top-menu-fixed');
		}	
	});



	// $('.nhahang-noibat').slick({
	// 	//infinite: true,
	// 	//slidesToShow: 4,
 //  		//slidesToScroll: 3,
 //  		slidesToShow: 4,
 //  		slidesToScroll: 2,
 //  		autoplay: true,
 //  		autoplaySpeed: 3000
 //  	});

	$('.monan-noibat').slick({
		//infinite: true,
		//slidesToShow: 4,
  		//slidesToScroll: 3,

  		slidesToShow: 4,
  		slidesToScroll: 2,
 		autoplay: true,
  		autoplaySpeed: 3000

  	});

  	if($(".back-top").length > 0){
		$(window).scroll(function () {
			var vitri = $(window).scrollTop();
			if (vitri > 300) {
				$(".back-top").show()
			} else {
				$(".back-top").hide()
			}
		});
		// $(".back-top").click(function () {
		// 	$('body,html').animate({
		// 		scrollTop: 0
		// 	})
		// })
		$('.back-top').on('click', function(event) {
			//event.preventDefault();
			console.log("thanh cong khong!");
			$('body').animate({scrollTop: 0}, 1000);
		});
	}	

	$('.chitietquanan-menu nav ul li:nth-child(2) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */

		$('body').animate({	scrollTop: $('.monan-phothong').offset().top - 190},500);
	});	
	$('.chitietquanan-menu nav ul li:nth-child(3) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('body').animate({	scrollTop: $('.bando').offset().top - 190},700);
	});	
	$('.chitietquanan-menu nav ul li:nth-child(4) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('body').animate({	scrollTop: $('.binhluan').offset().top - 190},1000);
	});	


	//Form đặt bàn
	// $('.btn-book').on('click', function(event) {
	// 	//event.preventDefault();
	// 	/* Act on the event */
	// 	$('.thongtin-datban').show();
	// 	$('.layer-black').show();
	// });	
	// $('.icon-thoat, .layer-black').click(function(event) {
	// 	$('.thongtin-datban').hide();
	// 	$('.layer-black').hide();
	// });

	// $('.btn-book').on('click', function(event) {
	// 	event.preventDefault();
	// 	/* Act on the event */
	// 	$.ajax({
	// 			method: "POST",// phương thức dữ liệu được truyền đi
	// 			url: "controllers/quanan.php",// gọi đến file server show_data.php để xử lý
	// 			data: $(".").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
	// 			success : function(response){//kết quả trả về từ server nếu gửi thành công
	// 				console.log(response);
	// 			}
	// 		});
	// });

});

function show_diem_dg()
      {
        // Lấy hai thẻ HTML
        var input = document.getElementById("cl");
        //var div = document.getElementsByClassName("dg-diem");
        //var div = document.getElementsByClassName('dg-diem');
        var div = document.getElementById("dg-diem");
         
        // Gán nội dung ô input vào thẻ div
        	div.innerHTML = input.value;
      }
   // <input type="text" id="cl" value="" onchange="show_result()"/>
    //<div id="dg-diem"></div>

//js input time
$(function(){  
  $('input[type="time"][value="now"]').each(function(){    
    var d = new Date(),        
        h = d.getHours(),
        m = d.getMinutes();
    if(h < 10) h = '0' + h; 
    if(m < 10) m = '0' + m; 
    $(this).attr({
      'value': h + ':' + m
    });
  });
});


//XU LY DAT BAN

