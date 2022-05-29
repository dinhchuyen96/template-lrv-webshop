// function validateCart() {
// 	let x = document.getElementById("quantity").value;
// 	let text;
// 	if (isNaN(x) || x < 1 || x > 69) {
// 	  text = "Mời bạn nhập lại";
// 	} 
// 	document.getElementById("err").innerHTML = text;
//   }

function showForm(id){
	// alert('#form-'+id);
	$('#form-'+id).toggle();
};
(function ($) {
	"use strict";
	$(window).on('load', function() {
        $('#exampleModalLong').modal('show');
    });		
		
		var $window = $(window);
		$window.on('scroll', function() {    
			var scroll = $window.scrollTop();
			if (scroll < 300) {
				$(".sticker").removeClass("sticky");
			}else{
				$(".sticker").addClass("sticky");
			}
		});
		
// Show hide password in Login Page

		$('#showpass1').click(function(){
			let input = $(this).prev();
			input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
		});
		$('#showpass2').click(function(){
			let input = $(this).prev();
			input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
		});
		$('#showpass3').click(function(){
			let input = $(this).prev();
			input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
		});


		// Scroll Back
		

		// Categories Item Show Hide

        $(".category-item-parent.hidden").hide();
        $(".more-btn").on('click', function (e) {
            e.preventDefault();
            $(".category-item-parent.hidden").toggle(500);
            var htmlAfter = "Hide Categories";
            var htmlBefore = "More Categories";

            $(this).html($(this).text() == htmlAfter ? htmlBefore : htmlAfter);
            $(this).toggleClass("minus");
		});
		
		/*Header Cart
		-----------------------------------*/
		var headerActionToggle = $('.ha-toggle');
		var headerActionDropdown = $('.ha-dropdown');
		// Toggle Header Cart
		headerActionToggle.on("click", function() {
			var $this = $(this);
			headerActionDropdown.slideUp();
			if($this.siblings('.ha-dropdown').is(':hidden')){
				$this.siblings('.ha-dropdown').slideDown();
			} else {
				$this.siblings('.ha-dropdown').slideUp();
			}
		});
		// Prevent closing Header Cart upon clicking inside the Header Cart
		$('.ha-dropdown').on('click', function(e) {
			e.stopPropagation();
		});


		// nice select active js
		$('select').niceSelect();


		// home slider
		var heroSlider = $('.hero-slider-active');
		heroSlider.slick({
		    arrows: true,
		    autoplay: false,
		    autoplaySpeed: 5000,
		    dots: true,
		    pauseOnFocus: false,
		    pauseOnHover: false,
		    fade: true,
		    infinite: true,
		    prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		    slidesToShow: 1,
		    responsive: [
		        {
					breakpoint: 767,
					settings: {
						dots: true,
					}
		        }
		    ]
		});

		// Checkout Address
		var country_arr = new Array(
            "Thành phố Hà Nội",
            "Tỉnh Hà Giang",
            "Tỉnh Cao Bằng",
            "Tỉnh Bắc Kạn",
            "Tỉnh Tuyên Quang",
            "Tỉnh Lào Cai",
            "Tỉnh Điện Biên",
            "Tỉnh Lai Châu",
            "Tỉnh Sơn La",
            "Tỉnh Yên Bái",
            "Tỉnh Hoà Bình",
            "Tỉnh Thái Nguyên",
            "Tỉnh Lạng Sơn",
            "Tỉnh Quảng Ninh",
            "Tỉnh Bắc Giang",
            "Tỉnh Phú Thọ",
            "Tỉnh Vĩnh Phúc",
            "Tỉnh Bắc Ninh",
            "Tỉnh Hải Dương",
            "Thành phố Hải Phòng",
            "Tỉnh Hưng Yên",
            "Tỉnh Thái Bình",
            "Tỉnh Hà Nam",
            "Tỉnh Nam Định",
            "Tỉnh Ninh Bình",
            "Tỉnh Thanh Hóa",
            "Tỉnh Nghệ An",
            "Tỉnh Hà Tĩnh",
            "Tỉnh Quảng Bình",
            "Tỉnh Quảng Trị",
            "Tỉnh Thừa Thiên Huế",
            "Thành phố Đà Nẵng",
            "Tỉnh Quảng Nam",
            "Tỉnh Quảng Ngãi",
            "Tỉnh Bình Định",
            "Tỉnh Phú Yên",
            "Tỉnh Khánh Hòa",
            "Tỉnh Ninh Thuận",
            "Tỉnh Bình Thuận",
            "Tỉnh Kon Tum",
            "Tỉnh Gia Lai",
            "Tỉnh Đắk Lắk",
            "Tỉnh Đắk Nông",
            "Tỉnh Lâm Đồng",
            "Tỉnh Bình Phước",
            "Tỉnh Tây Ninh",
            "Tỉnh Bình Dương",
            "Tỉnh Đồng Nai",
            "Tỉnh Bà Rịa - Vũng Tàu",
            "Thành phố Hồ Chí Minh",
            "Tỉnh Long An",
            "Tỉnh Tiền Giang",
            "Tỉnh Bến Tre",
            "Tỉnh Trà Vinh",
            "Tỉnh Vĩnh Long",
            "Tỉnh Đồng Tháp",
            "Tỉnh An Giang",
            "Tỉnh Kiên Giang",
            "Thành phố Cần Thơ",
            "Tỉnh Hậu Giang",
            "Tỉnh Sóc Trăng",
            "Tỉnh Bạc Liêu",
            "Tỉnh Cà Mau",
        );
    var s_a = new Array();
    s_a[0]="";
    s_a[1]="Quận Ba Đình|Quận Hoàn Kiếm|Quận Tây Hồ|Quận Long Biên|Quận Cầu Giấy|Quận Đống Đa|Quận Hai Bà Trưng|Quận Hoàng Mai|Quận Thanh Xuân|Huyện Sóc Sơn|Huyện Đông Anh|Huyện Gia Lâm|Quận Nam Từ Liêm|Huyện Thanh Trì|Quận Bắc Từ Liêm|Huyện Mê Linh|Quận Hà Đông|Thị xã Sơn Tây|Huyện Ba Vì|Huyện Phúc Thọ|Huyện Đan Phượng|Huyện Hoài Đức|Huyện Quốc Oai|Huyện Thạch Thất|Huyện Chương Mỹ|Huyện Thanh Oai|Huyện Thường Tín|Huyện Phú Xuyên|Huyện Ứng Hòa|Huyện Mỹ Đức|";
    s_a[2]="Thành phố Hà Giang|Huyện Đồng Văn|Huyện Mèo Vạc|Huyện Yên Minh|Huyện Quản Bạ|Huyện Vị Xuyên|Huyện Bắc Mê|Huyện Hoàng Su Phì|Huyện Xín Mần|Huyện Bắc Quang|Huyện Quang Bình|";
    s_a[3]="Thành phố Cao Bằng|Huyện Bảo Lâm|Huyện Bảo Lạc|Huyện Hà Quảng|Huyện Trùng Khánh|Huyện Hạ Lang|Huyện Quảng Hòa|Huyện Hoà An|Huyện Nguyên Bình|Huyện Thạch An|";
    s_a[4]="Thành Phố Bắc Kạn|Huyện Pác Nặm|Huyện Ba Bể|Huyện Ngân Sơn|Huyện Bạch Thông|Huyện Chợ Đồn|Huyện Chợ Mới|Huyện Na Rì|";
    s_a[5]="Thành phố Tuyên Quang|Huyện Lâm Bình|Huyện Na Hang|Huyện Chiêm Hóa|Huyện Hàm Yên|Huyện Yên Sơn|Huyện Sơn Dương|";
    s_a[6]="Thành phố Lào Cai|Huyện Bát Xát|Huyện Mường Khương|Huyện Si Ma Cai|Huyện Bắc Hà|Huyện Bảo Thắng|Huyện Bảo Yên|Thị xã Sa Pa|Huyện Văn Bàn|";
    s_a[7]="Thành phố Điện Biên Phủ|Thị Xã Mường Lay|Huyện Mường Nhé|Huyện Mường Chà|Huyện Tủa Chùa|Huyện Tuần Giáo|Huyện Điện Biên|Huyện Điện Biên Đông|Huyện Mường Ảng|Huyện Nậm Pồ|",
    s_a[8]="Thành phố Lai Châu|Huyện Tam Đường|Huyện Mường Tè|Huyện Sìn Hồ|Huyện Phong Thổ|Huyện Than Uyên|Huyện Tân Uyên|Huyện Nậm Nhùn|";
    s_a[9]="Thành phố Sơn La|Huyện Quỳnh Nhai|Huyện Thuận Châu|Huyện Mường La|Huyện Bắc Yên|Huyện Phù Yên|Huyện Mộc Châu|Huyện Yên Châu|Huyện Mai Sơn|Huyện Sông Mã|Huyện Sốp Cộp|Huyện Vân Hồ|";
    s_a[10]="Thành phố Yên Bái|Thị xã Nghĩa Lộ|Huyện Lục Yên|Huyện Văn Yên|Huyện Mù Căng Chải|Huyện Trấn Yên|Huyện Trạm Tấu|Huyện Văn Chấn|Huyện Yên Bình|";
    s_a[11]="Thành phố Hòa Bình|Huyện Đà Bắc|Huyện Lương Sơn|Huyện Kim Bôi|Huyện Cao Phong|Huyện Tân Lạc|Huyện Mai Châu|Huyện Lạc Sơn|Huyện Yên Thủy|Huyện Lạc Thủy|";
    s_a[12]="Thành phố Thái Nguyên|Thành phố Sông Công|Huyện Định Hóa|Huyện Phú Lương|Huyện Đồng Hỷ|Huyện Võ Nhai|Huyện Đại Từ|Thị xã Phổ Yên|Huyện Phú Bình|";
    s_a[13]="Thành phố Lạng Sơn|Huyện Tràng Định|Huyện Bình Gia|Huyện Văn Lãng|Huyện Cao Lộc|Huyện Văn Quan|Huyện Bắc Sơn|Huyện Hữu Lũng|Huyện Chi Lăng|Huyện Lộc Bình|Huyện Đình Lập|";
    s_a[14]="Thành phố Hạ Long|Thành phố Móng Cái|Thành phố Cẩm Phả|Thành phố Uông Bí|Huyện Bình Liêu|Huyện Tiên Yên|Huyện Đầm Hà|Huyện Hải Hà|Huyện Ba Chẽ|Huyện Vân Đồn|Thị xã Đông Triều|Thị xã Quảng Yên|Huyện Cô Tô|";
    s_a[15]="Thành phố Bắc Giang|Huyện Yên Thế|Huyện Tân Yên|Huyện Lạng Giang|Huyện Lục Nam|Huyện Lục Ngạn|Huyện Sơn Động|Huyện Yên Dũng|Huyện Việt Yên|Huyện Hiệp Hòa|";
    s_a[16]="Thành phố Việt Trì|Thị xã Phú Thọ|Huyện Đoan Hùng|Huyện Hạ Hoà|Huyện Thanh Ba|Huyện Phù Ninh|Huyện Yên Lập|Huyện Cẩm Khê|Huyện Tam Nông|Huyện Lâm Thao|Huyện Thanh Sơn|Huyện Thanh Thuỷ|Huyện Tân Sơn|";
    s_a[17]="Thành phố Vĩnh Yên|Thành phố Phúc Yên|Huyện Lập Thạch|Huyện Tam Dương|Huyện Tam Đảo|Huyện Bình Xuyên|Huyện Yên Lạc|Huyện Vĩnh Tường|Huyện Sông Lô|";
    s_a[18]="Thành phố Bắc Ninh|Huyện Yên Phong|Huyện Quế Võ|Huyện Tiên Du|Thị xã Từ Sơn|Huyện Thuận Thành|Huyện Gia Bình|Huyện Lương Tài|";
    s_a[19]="Thành phố Hải Dương|Thành phố Chí Linh|Huyện Nam Sách|Thị xã Kinh Môn|Huyện Kim Thành|Huyện Thanh Hà|Huyện Cẩm Giàng|Huyện Bình Giang|Huyện Gia Lộc|Huyện Tứ Kỳ|Huyện Ninh Giang|Huyện Thanh Miện|";
    s_a[20]="Quận Hồng Bàng|Quận Ngô Quyền|Quận Lê Chân|Quận Hải An|Quận Kiến An|Quận Đồ Sơn|Quận Dương Kinh|Huyện Thuỷ Nguyên|Huyện An Dương|Huyện An Lão|Huyện Kiến Thuỵ|Huyện Tiên Lãng|Huyện Vĩnh Bảo|Huyện Cát Hải|Huyện Bạch Long Vĩ|";
    s_a[21]="Thành phố Hưng Yên|Huyện Văn Lâm|Huyện Văn Giang|Huyện Yên Mỹ|Thị xã Mỹ Hào|Huyện Ân Thi|Huyện Khoái Châu|Huyện Kim Động|Huyện Tiên Lữ|Huyện Phù Cừ|";
    s_a[22]="Thành phố Thái Bình|Huyện Quỳnh Phụ|Huyện Hưng Hà|Huyện Đông Hưng|Huyện Thái Thụy|Huyện Tiền Hải|Huyện Kiến Xương|Huyện Vũ Thư|";
    s_a[23]="Thành phố Phủ Lý|Thị xã Duy Tiên|Huyện Kim Bảng|Huyện Thanh Liêm|Huyện Bình Lục|Huyện Lý Nhân|";
    s_a[24]="Thành phố Nam Định|Huyện Mỹ Lộc|Huyện Vụ Bản|Huyện Ý Yên|Huyện Nghĩa Hưng|Huyện Nam Trực|Huyện Trực Ninh|Huyện Xuân Trường|Huyện Giao Thủy|Huyện Hải Hậu|";
    s_a[25]="Thành phố Ninh Bình|Thành phố Tam Điệp|Huyện Nho Quan|Huyện Gia Viễn|Huyện Hoa Lư|Huyện Yên Khánh|Huyện Kim Sơn|Huyện Yên Mô|";
    s_a[26]="Thành phố Thanh Hóa|Thị xã Bỉm Sơn|Thành phố Sầm Sơn|Huyện Mường Lát|Huyện Quan Hóa|Huyện Bá Thước|Huyện Quan Sơn|Huyện Lang Chánh|Huyện Ngọc Lặc|Huyện Cẩm Thủy|Huyện Thạch Thành|Huyện Hà Trung|Huyện Vĩnh Lộc|Huyện Yên Định|Huyện Thọ Xuân|Huyện Thường Xuân|Huyện Triệu Sơn|Huyện Thiệu HóaHuyện Hoằng Hóa|Huyện Hậu Lộc|Huyện Nga SơnHuyện Như Xuân|Huyện Như Thanh|Huyện Nông Cống|Huyện Đông Sơn|Huyện Quảng Xương|Thị xã Nghi Sơn|";
    s_a[27]="Thành phố Vinh|Thị xã Cửa Lò|Thị xã Thái Hoà|Huyện Quế Phong|Huyện Quỳ Châu|Huyện Kỳ Sơn|Huyện Tương Dương|Huyện Nghĩa Đàn|Huyện Quỳ Hợp|Huyện Quỳnh Lưu|Huyện Con Cuông|Huyện Tân Kỳ|Huyện Anh Sơn|Huyện Diễn Châu|Huyện Yên Thành|Huyện Đô Lương|Huyện Thanh Chương|Huyện Nghi Lộc|Huyện Nam Đàn|Huyện Hưng Nguyên|Thị xã Hoàng Mai|";
    s_a[28]="Thành phố Hà Tĩnh|Thị xã Hồng Lĩnh|Huyện Hương Sơn|Huyện Đức Thọ|Huyện Vũ Quang|Huyện Nghi Xuân|Huyện Can Lộc|Huyện Hương Khê|Huyện Thạch Hà|Huyện Cẩm Xuyên|Huyện Kỳ Anh|Huyện Lộc Hà|Thị xã Kỳ Anh|";
    s_a[29]="Thành Phố Đồng Hới|Huyện Minh Hóa|Huyện Tuyên Hóa|Huyện Quảng Trạch|Huyện Bố Trạch|Huyện Quảng Ninh|Huyện Lệ Thủy|Thị xã Ba Đồn|";
    s_a[30]="Thành phố Đông Hà|Thị xã Quảng Trị|Huyện Vĩnh |Huyện Hướng Hóa|Huyện Gio Linh|Huyện Đa Krông|Huyện Cam Lộ|Huyện Triệu Phong|Huyện Hải Lăng|Huyện Cồn Cỏ|";
    s_a[31]="Thành phố Huế|Huyện Phong Điền|Huyện Quảng Điền|Huyện Phú Vang|Thị xã Hương Thủy|Thị xã Hương Trà|Huyện A Lưới|Huyện Phú Lộc|Huyện Nam Đông|";
    s_a[32]="Quận Liên Chiểu|Quận Thanh Khê|Quận Hải Châu|Quận Sơn Trà|Quận Ngũ Hành Sơn|Quận Cẩm Lệ|Huyện Hòa Vang|Huyện Hoàng Sa|";
    s_a[33]="Thành phố Tam Kỳ|Thành phố Hội An|Huyện Tây Giang|Huyện Đông Giang|Huyện Đại Lộc|Thị xã Điện Bàn|Huyện Duy Xuyên|Huyện Quế Sơn|Huyện Nam Giang|Huyện Phước Sơn|Huyện Hiệp Đức|Huyện Thăng Bình|Huyện Tiên Phước|Huyện Bắc Trà My|Huyện Nam Trà My|Huyện Núi Thành|Huyện Phú Ninh|Huyện Nông Sơn|";
    s_a[34]="Thành phố Quảng Ngãi|Huyện Bình Sơn|Huyện Trà Bồng|Huyện Sơn Tịnh|Huyện Tư Nghĩa|Huyện Sơn Hà|Huyện Sơn Tây|Huyện Minh Long|Huyện Nghĩa Hành|Huyện Mộ Đức|Thị xã Đức Phổ|Huyện Ba Tơ|Huyện Lý Sơn|";
    s_a[35]="Thành phố Quy Nhơn|Thị xã Hoài Nhơn|Huyện Hoài Ân|Huyện Phù Mỹ|Huyện Vĩnh Thạnh|Huyện Tây Sơn|Huyện Phù Cát|Thị xã An Nhơn|Huyện Tuy Phước|Huyện Vân Canh";
    s_a[36]="Thành phố Tuy Hoà|Thị xã Sông Cầu|Huyện Đồng Xuân|Huyện Tuy An|Huyện Sơn Hòa|Huyện Sông Hinh|Huyện Tây Hoà|Huyện Phú Hoà|Thị xã Đông Hòa|";
    s_a[37]="Thành phố Nha Trang|Thành phố Cam Ranh|Huyện Cam Lâm|Huyện Vạn Ninh|Thị xã Ninh Hòa|Huyện Khánh Vĩnh|Huyện Diên Khánh|Huyện Khánh Sơn|Huyện Trường Sa|";
    s_a[38]="Thành phố Phan Rang-Tháp Chàm|Huyện Bác Ái|Huyện Ninh Sơn|Huyện Ninh Hải|Huyện Ninh Phước|Huyện Thuận Bắc|Huyện Thuận Nam|";
    s_a[39]="Thành phố Phan Thiết|Thị xã La Gi|Huyện Tuy Phong|Huyện Bắc Bình|Huyện Hàm Thuận Bắc|Huyện Hàm Thuận Nam|Huyện Tánh Linh|Huyện Đức Linh|Huyện Hàm Tân|Huyện Phú Quí|"   
    s_a[40]="Thành phố Kon Tum|Huyện Đắk Glei|Huyện Ngọc Hồi|Huyện Đắk Tô|Huyện Kon Plông|Huyện Kon Rẫy|Huyện Đắk Hà|Huyện Sa Thầy|Huyện Tu Mơ Rông|Huyện Ia H' Drai|";
    s_a[41]="Thành phố Pleiku|Thị xã An Khê|Thị xã Ayun Pa|Huyện KBang|Huyện Đăk Đoa|Huyện Chư Păh|Huyện Ia Grai|Huyện Mang Yang|Huyện Kông Chro|Huyện Đức Cơ|Huyện Chư Prông|Huyện Chư Sê|Huyện Đăk Pơ|Huyện Ia Pa|Huyện Krông Pa|Huyện Phú Thiện|Huyện Chư Pưh|";
    s_a[42]="Thành phố Buôn Ma Thuột|Thị Xã Buôn Hồ|Huyện Ea H'leo|Huyện Ea Súp|Huyện Buôn Đôn|Huyện Cư M'gar|Huyện Krông Búk|Huyện Krông Năng|Huyện Ea Kar|Huyện M'Đrắk|Huyện Krông Bông|Huyện Krông Pắc|Huyện Krông A Na|Huyện Lắk|Huyện Cư Kuin|";
    s_a[43]="Thành phố Gia Nghĩa|Huyện Đăk Glong|Huyện Cư Jút|Huyện Đắk Mil|Huyện Krông Nô|Huyện Đắk Song|Huyện Đắk R'Lấp|Huyện Tuy Đức|";
    s_a[44]="Thành phố Đà Lạt|Thành phố Bảo Lộc|Huyện Đam Rông|Huyện Lạc Dương|Huyện Lâm Hà|Huyện Đơn Dương|Huyện Đức Trọng|Huyện Di Linh|Huyện Đạ Huoai|Huyện Đạ Tẻh|Huyện Cát Tiên|";
    s_a[45]="Thị xã Phước Long|Thành phố Đồng Xoài|Thị xã Bình Long|Huyện Bù Gia Mập|Huyện Lộc Ninh|Huyện Bù Đốp|Huyện Hớn Quản|Huyện Đồng Phú|Huyện Bù Đăng|Huyện Chơn Thành|Huyện Phú Riềng|";
    s_a[46]="Thành phố Tây Ninh|Huyện Tân Biên|Huyện Tân Châu|Huyện Dương Minh Châu|Huyện Châu Thành|Thị xã Hòa Thành|Huyện Gò Dầu|Huyện Bến Cầu|Thị xã Trảng Bàng|";
    s_a[47]="Thành phố Thủ Dầu Một|Huyện Bàu Bàng|Huyện Dầu Tiếng|Thị xã Bến Cát|Huyện Phú Giáo|Thị xã Tân Uyên|Thành phố Dĩ An|Thành phố Thuận An|Huyện Bắc Tân Uyên|";
    s_a[48]="Thành phố Biên Hòa|Thành phố Long Khánh|Huyện Tân Phú|Huyện Vĩnh Cửu|Huyện Định Quán|Huyện Trảng Bom|Huyện Thống Nhất|Huyện Cẩm Mỹ|Huyện Long Thành|Huyện Xuân Lộc|Huyện Nhơn Trạch|";
    s_a[49]="Thành phố Vũng Tàu|Thành phố Bà Rịa|Huyện Châu Đức|Huyện Xuyên Mộc|Huyện Long Điền|Huyện Đất Đỏ|Thị xã Phú Mỹ|Huyện Côn Đảo|";
    s_a[50]="Quận 1|Quận 12|Quận Gò Vấp|Quận Bình Thạnh|Quận Tân Bình|Quận Tân Phú|Quận Phú Nhuận|Thành phố Thủ Đức|Quận 3|Quận 10|Quận 11|Quận 4|Quận 5|Quận 6|Quận 8|Quận Bình Tân|Quận 7|Huyện Củ Chi|Huyện Hóc Môn|Huyện Bình Chánh|Huyện Nhà Bè|Huyện Cần Giờ|";
    s_a[51]="Thành phố Tân An|Thị xã Kiến Tường|Huyện Tân Hưng|Huyện Vĩnh Hưng|Huyện Mộc Hóa|Huyện Tân Thạnh|Huyện Thạnh Hóa|Huyện Đức Huệ|Huyện Đức Hòa|Huyện Bến Lức|Huyện Thủ Thừa|Huyện Tân Trụ|Huyện Cần Đước|Huyện Cần Giuộc|";
    s_a[52]="Thành phố Mỹ Tho|Thị xã Gò Công|Thị xã Cai Lậy|Huyện Tân Phước|Huyện Cái Bè|Huyện Cai Lậy|Huyện Chợ Gạo|Huyện Gò Công Tây|Huyện Gò Công Đông|Huyện Tân Phú Đông|";
    s_a[53]="Thành phố Bến Tre|Huyện Chợ Lách|Huyện Mỏ Cày Nam|Huyện Giồng Trôm|Huyện Bình Đại|Huyện Ba Tri|Huyện Thạnh Phú|Huyện Mỏ Cày Bắc|";
    s_a[54]="Thành phố Trà Vinh|Huyện Càng Long|Huyện Cầu Kè|Huyện Tiểu Cần|Huyện Cầu Ngang|Huyện Trà Cú|Huyện Duyên Hải|Thị xã Duyên Hải|";
    s_a[55]="Thành phố Vĩnh Long|Huyện Long Hồ|Huyện Mang Thít|Huyện  Vũng Liêm|Huyện Tam Bình|Thị xã Bình Minh|Huyện Trà Ôn|Huyện Bình Tân|";
    s_a[56]="Thành phố Cao Lãnh|Thành phố Sa Đéc|Thành phố Hồng Ngự|Huyện Tân Hồng|Huyện Hồng Ngự|Huyện Tháp Mười|Huyện Cao Lãnh|Huyện Thanh Bình|Huyện Lấp Vò|Huyện Lai Vung|";
    s_a[57]="Thành phố Long Xuyên|Thành phố Châu Đốc|Huyện An Phú|Thị xã Tân Châu|Huyện Phú Tân|Huyện Châu Phú|Huyện Tịnh Biên|Huyện Tri Tôn|Huyện Thoại Sơn|";
    s_a[58]="Thành phố Rạch Giá|Thành phố Hà Tiên|Huyện Kiên Lương|Huyện Hòn Đất|Huyện Tân Hiệp|Huyện Giồng Riềng|Huyện Gò Quao|Huyện An Biên|Huyện An Minh|Huyện Vĩnh Thuận|Thành phố Phú Quốc|Huyện Kiên Hải|Huyện U Minh Thượng|Huyện Giang Thành|";
    s_a[59]="Quận Ninh Kiều|Quận Ô Môn|Quận Bình Thuỷ|Quận Cái Răng|Quận Thốt Nốt|Huyện Cờ Đỏ|Huyện Thới Lai|";
    s_a[60]="Thành phố Vị Thanh|Thành phố Ngã Bảy|Huyện Châu Thành A|Huyện Phụng Hiệp|Huyện Vị Thuỷ|Huyện Long Mỹ|Thị xã Long Mỹ|";
    s_a[61]="Thành phố Sóc Trăng|Huyện Kế Sách|Huyện Mỹ Tú|Huyện Cù Lao Dung|Huyện Long Phú|Huyện Mỹ Xuyên|Thị xã Ngã Năm|Huyện Thạnh Trị|Thị xã Vĩnh Châu|Huyện Trần Đề|";
    s_a[62]="Thành phố Bạc Liêu|Huyện Hồng Dân|Huyện Phước Long|Huyện Vĩnh Lợi|Thị xã Giá Rai|Huyện Đông Hải|Huyện Hoà Bình|";
    s_a[63]="Thành phố Cà Mau|Huyện U Minh|Huyện Thới Bình|Huyện Trần Văn Thời|Huyện Cái Nước|Huyện Đầm Dơi|Huyện Năm Căn|Huyện Ngọc Hiển|";
    


    
    var s_b = new Array();
    s_b[1,1]="c11|c12|c13|c14|c15|c16|c17|c18|c19|c10";
    s_b[1,2]="c21|c22|c23|c24|c25|c26|c27|c28|c29|c210";
    s_b[2,1]="d11|d12|d13|d14|d15|d16|d17|d18|d19|d10";
    s_b[2,2]="d21|d22|d23|d24|d25|d26|d27|d28|d29|d210";
    function print_country(country_id){
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var option_str = document.getElementById(country_id);
        option_str.length=0;
        option_str.options[0] = new Option('Tỉnh / Thành phố','');
        option_str.selectedIndex = 0;
        for (var i=0; i<country_arr.length; i++) {
            option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
        }
    }
    
    function print_state(state_id, state_index){
        var option_str = document.getElementById(state_id);
        option_str.length=0;
        option_str.options[0] = new Option('Quận / Huyện','');
        option_str.selectedIndex = 0;
        var state_arr = s_a[state_index].split("|");
        for (var i=0; i<state_arr.length; i++) {
            option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
        }
    }
    //This function is incorrect, just to demonstrate, please help to correct this
    
    function print_district(district_id, district_index){
        var option_str = document.getElementById(district_id);
        option_str.length=0;
        option_str.options[0] = new Option('Phường / xã','');
        option_str.selectedIndex = 0;
        var district_arr = s_b[district_index].split("|");
        for (var i=0; i<district_arr.length; i++) {
            option_str.options[option_str.length] = new Option(district_arr[i],district_arr[i]);
        }
    }
    
    
	$(document).ready(function () {
		// print_country("country");
		// setTimeout2(function() {
		// 	$("#alert_cat").fadeOut('fast');
		// 	console.log('ahihi')
		// }, 5000)
		
		if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
			$(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
		}
		$(window).on("scroll", function() {
			localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
		});
	
	  });
	$('#mobile-menu').each(function() {
		var $this = $(this);
		var $screenWidth = $this.attr('data-screen') ? parseInt($this.attr('data-screen'), 10) : 991;
		$this.meanmenu({
			meanMenuContainer: '.mobile-menu',
			meanScreenWidth: $screenWidth,
			meanRevealPosition: 'right'
		}); 
	}); 
    
		// product slider
		var product = $('.product-gallary-active');
		    product.owlCarousel({
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:2,
					nav:false
		        },
		        768:{
		            items:3
		        },
		        992:{
		            items:4
		        },
		       	1024:{
		            items:4
				},
				1600:{
		            items:7
		        }
				
		    }
		});

		// product slider
		var product2 = $('.product-gallary-active2');
		    product2.owlCarousel({
	        items: 5,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:2,
					nav:false
		        },
		        768:{
		            items:3
		        },

		        992:{
		            items:3
		        },

		       	1024:{
		            items:4
				},
				1600:{
		            items:6
		        }
		    }
		});

		// owl carousel active
		var product = $('.product-gallary-active3');
		    product.owlCarousel({
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:2,
					nav:false
		        },
		        768:{
		            items:2
		        },
		        992:{
		            items:3
		        },
		       	1024:{
		            items:3
				},
				1600:{
		            items:5
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:1,
					nav:false
		        },
		        768:{
		            items:2
		        },
		        992:{
		            items:3
		        },
		       	1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active4');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:1,
					nav:false
				},
				576:{
					items:2,
		        },
		        768:{
		            items:2
		        },
		        992:{
		            items:2
		        },
		       1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var featured = $('.pro-module-four-active2');
		featured.owlCarousel({
	        items: 3,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:1,
					nav:false
		        },
		        768:{
		            items:2
		        },
		        992:{
		            items:2
		        },
		       	1024:{
		            items:3
				},
				1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var module_four = $('.featured-cat-active');
		module_four.owlCarousel({
	        items: 4,
			loop: true,
			margin: 30,
			dots:false,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
		            items:1
		        },
		        768:{
		            items:2
		        },
		        992:{
		            items:3
		        },
		       	1200:{
		            items:3
		        },
		        1600:{
		            items:4
		        }
		    }
		});

		// owl carousel active
		var product3 = $('.pro-module3-active');
		    product3.owlCarousel({
	        items: 5,
			loop: true,
			dots:false,
			margin: 30,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:2,
					nav:false
		        },
		        768:{
		            items:3
		        },
		        992:{
		            items:3
		        },
		       	1024:{
		            items:4
				},
				1600:{
		            items:6
		        }
		    }
		});

		// owl carousel active
		var featured_2 = $('.featured-home2-active');
		featured_2.owlCarousel({
	        items: 5,
			loop: true,
			margin: 30,
			dots:false,
	        nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
					items:1,
					nav:false
		        },
		        480:{
					items:2,
					nav:false
		        },
		        768:{
		            items:3
		        },
		        992:{
		            items:3
		        },
		       	1024:{
		            items:4
				},
				1600:{
		            items:7
		        }
		    }
		});

		// product slider
		var brand = $('.brand-active');
			brand.owlCarousel({
	        items: 6,
			loop: true,
			dots:false,
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
		            items:1
		        },
		        480:{
		            items:3
		        },
		        768:{
		            items:4
		        },
		        992:{
		            items:4
		        },
		       	1100:{
		            items:6
				}
		    }
		});

		// brand slider 2
		var brand2 = $('.brand2-slider-active');
			brand2.owlCarousel({
	        items: 6,
			loop: true,
			dots:false,
	        autoplay: false,
	        stagePadding: 0,
	        smartSpeed: 700,
	        responsive:{
				0:{
		            items:1
		        },
		        480:{
		            items:3
		        },
		        768:{
		            items:4
		        },
		        992:{
		            items:4
		        },
		       	1100:{
		            items:6
		        }
		    }
		});

		// Flash sale active
		var flash_sale = $('.flash-sale-active');
			flash_sale.owlCarousel({
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
				},
				480:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:1
				},
				1100:{
					items:1
				}
		   	}
		});

		// owl carousel active
		var flash_sale = $('.flash-sale-active4');
			flash_sale.owlCarousel({
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:4
				},
				1024:{
					items:5
				},
				1600:{
					items:6
				}
		   	}
		});

		// latest product slider
		var latest_pro = $('.latest-slide-active');
			latest_pro.owlCarousel({
			margin: 30,
			loop: true,
			dots:false,
			autoplay: false,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:1
			   },

			   576:{
					items:2
				},
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
			
		});

		// Latest blog
		var latest_news = $('.latest-blog-active');
			latest_news.owlCarousel({
	        items: 1,
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
		});

		// owl carousel active
		var latest_news = $('.latest-blog-active4');
			latest_news.owlCarousel({
	        items: 1,
			loop: true,
			margin: 30,
			dots:false,
			autoplay: false,
			nav:true,
	        navText:['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:4
			   },

			   1024:{
				   items:5
			   },
			   1600:{
				items:6
			}
		   }
		});

		// owl carousel active
		$('.blog-thumb-active').owlCarousel({
	        autoplay: true,
			loop: true,
	        nav: true,
	        autoplayTimeout: 8000,
	        items: 1,
	        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	        dots:false,
	    });

		// Testimonial active
		var testimonial = $('.testimonial-active');
			testimonial.owlCarousel({
			loop: true,
			margin: 30,
			autoplay: false,
			dots:true,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2,
				   dots: false
			   },
		
			   768:{
				   items:2
			   },

			   992:{
				   items:1
			   },

			  1100:{
				   items:1
			   }
		   }
		});

		// Testimonial active
		var pro_gallery = $('.product-gallery-active');
			pro_gallery.owlCarousel({
			loop: true,
			margin: 30,
			autoplay: false,
	        stagePadding: 0,
			smartSpeed: 700,
			responsive:{
				0:{
				   items:1
			   },

			   480:{
				   items:2,
				   dots: false
			   },
		
			   768:{
				   items:3
			   },

			   992:{
				   items:3
			   },

			  1100:{
				   items:4
			   }
		   }
		});

		// slick active
		$('#menu2').slicknav({
			label: "Categories",
			prependTo: '.categories-menu-bar',
			closedSymbol: '+',
			openedSymbol: '-'
		});

		// pricing filter
		$( "#price-slider" ).slider({
			range: true,
			min: 0,
			max: 500,
			values: [ 0, 500 ],
			slide: function( event, ui ) {
			 $( "#min-price" ).val('$' + ui.values[ 0 ] );
			 $( "#max-price" ).val('$' + ui.values[ 1 ] );
			  }
		});
		   $( "#min-price" ).val('$' + $( "#price-slider" ).slider( "values", 0 ));   
		   $( "#max-price" ).val('$' + $( "#price-slider" ).slider( "values", 1 )); 

		// magnificPopup img view 
		$('.img-popup').magnificPopup({
			type: 'image',
			gallery: {
			  enabled: true
			}
		});

		// magnificPopup video view
		$('.play-btn').magnificPopup({
            type: 'iframe'
        });


	    // scroll to top
	    $(window).on('scroll',function(){
		    if($(this).scrollTop() > 600){
		        $('.scroll-top').removeClass('not-visible');
		    }
		    else{
		        $('.scroll-top').addClass('not-visible');
		    }
		});
	    $('.scroll-top').on('click',function (event){
	        $('html,body').animate({
	            scrollTop:0
	        },1000);
		});
		
		// product view mode change js
		$('.product-view-mode a').on('click', function(e){
			e.preventDefault();
			
			var shopProductWrap = $('.shop-product-wrap');
			var viewMode = $(this).data('target');
			
			$('.product-view-mode a').removeClass('active');
			$(this).addClass('active');
			shopProductWrap.removeClass('grid list column_3').addClass(viewMode);
		})

		// product details slider active
		$('.product-large-slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			asNavFor: '.pro-nav'
		});

		// slick carousel active
		$('.pro-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-left"></i></button>',
			nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-right"></i></button>',
			asNavFor: '.product-large-slider',
			centerMode: true,
			arrows: true,
			centerPadding: 0,
			focusOnSelect: true
		});

		// product details vertical slider active
		$('.product-large-slider1').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			asNavFor: '.pro-nav1'
		});

		// slick carousel active
		$('.pro-nav1').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			prevArrow: '<button type="button" class="arrow-prev"><i class="fa fa-long-arrow-up"></i></button>',
			nextArrow: '<button type="button" class="arrow-next"><i class="fa fa-long-arrow-down"></i></button>',
			asNavFor: '.product-large-slider1',
			centerMode: true,
			arrows: true,
			vertical: true,
			centerPadding: 0,
			focusOnSelect: true
		});

		// modal fix
		$('.modal').on('shown.bs.modal', function (e) {
			$('.pro-nav').resize();
		})
	

		// Checkout Page Accordion Behaviour
		$( '#show_login' ).on('click', function() {
			$( '#checkout_login' ).slideToggle(300);
		});

		$( '#show_coupon' ).on('click', function() {
			$( '#checkout_coupon' ).slideToggle(300);
		});

		$("#different_shipping").on("change",function(){
			$(".ship-box-info").slideToggle(300);
		});

		$("#create_account").on("change",function(){
			$(".new-account-info").slideToggle(300);
		});

		//Product Quantity 
		$('.product-qty').append('<span class="dec qtybtn"><i class="fa fa-minus"></i></span><span class="inc qtybtn"><i class="fa fa-plus"></i></span>');
		$('.qtybtn').on('click', function() {
		    var $button = $(this);
		    var oldValue = $button.parent().find('input').val();
		    if ($button.hasClass('inc')) {
		        var newVal = parseFloat(oldValue) + 1;
		    } else {
		        // Don't allow decrementing below zero
		        if (oldValue > 0) {
		            var newVal = parseFloat(oldValue) - 1;
		        } else {
		            newVal = 0;
		        }
		    }
		    $button.parent().find('input').val(newVal);
		});

		// sticky sidebar
		$('.is-stickyy').stickySidebar({
			topSpacing: 100,
			bottomSpacing: -20
		  }); 

		/*---- Countdown Activation ----*/
		$('[data-countdown]').each(function() {
			var $this = $(this), finalDate = $(this).data('countdown');
			$this.countdown(finalDate, function(event) {
				$this.html(event.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Min</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Sec</span></div>'));
			});
		});


		// Mailchimp for dynamic newsletter
		$('#mc-form').ajaxChimp({
			language: 'en',
			callback: mailChimpResponse,
			// ADD YOUR MAILCHIMP URL BELOW HERE!
			url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

		});

	    // mailchimp active js
		function mailChimpResponse(resp) {
			if (resp.result === 'success') {
				$('.mailchimp-success').html('' + resp.msg).fadeIn(900);
				$('.mailchimp-error').fadeOut(400);

			} else if (resp.result === 'error') {
				$('.mailchimp-error').html('' + resp.msg).fadeIn(900);
			}
		}

})(jQuery);	