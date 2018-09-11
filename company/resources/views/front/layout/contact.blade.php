<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
<script>
   //GoogleMaps start
   $( document ).ready(function() {
   	initMap();
   });
   function initMap() {
       var mapDiv = document.getElementById('google-map');
       var map = new google.maps.Map(mapDiv, {
         center: {lat: 10.7717778, lng: 106.6868165},
         zoom: 17,
   		scrollwheel: false,
       });
       var marker = new google.maps.Marker({
           position: {lat: 10.7717778, lng: 106.6868165},
           map: map,
           title: 'Hùng Đại Dương'
         });
   }
   //GoogleMaps end
</script>
<section id="contact" class="home-section text-center">
   <div class="heading-contact">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
               <div class="wow bounceInDown" data-wow-delay="0.4s">
                  <div class="section-heading">
                     <h2>Liên Hệ</h2>
                     <i class="fa fa-2x fa-angle-down"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="google-map"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-2 col-lg-offset-5">
            <hr class="marginbot-50">
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8">
            <div class="boxed-grey">
               <form id="contact-form">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">
                           Tên</label>
                           <input type="text" class="form-control" id="name" placeholder="Nhập vào tên" required="required" />
                        </div>
                        <div class="form-group">
                           <label for="email">
                           Địa Chỉ Email</label>
                           <div class="input-group">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                              </span>
                              <input type="email" class="form-control" id="email" placeholder="Nhập vào địa chỉ email" required="required" />
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="subject">
                           Tiêu Đề</label>
                           <select id="subject" name="subject" class="form-control" required="required">
                              <option value="na" selected="">Chọn:</option>
                              <option value="service">Hỗ trợ dịch vụ</option>
                              <option value="suggestions">Mua hàng</option>
                              <option value="product">Thanh toán</option>
                              <option value="product">Khác</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">
                           Nội Dung</label>
                           <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                              placeholder="Nhập vào nội dung"></textarea>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                        Gửi</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="widget-contact">
               <h5>Trụ sở chính</h5>
               <address>
                  <abbr title="Địa chỉ">Địa chỉ:</abbr>84/1 Sương Nguyệt Ánh, P. Bến Thành, Q.1, TP.HCM<br>
                  <abbr title="Số điện thoại">Số điện thoại:</abbr> +848 – 3839 3887 <br />
                  <abbr title="Fax">Fax:</abbr> +848 – 3839 3889
               </address>
               <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#">hdd.headoffice@hungdaiduong.com.vn</a>
               </address>
               <address>
                  <strong>Tìm chúng tôi trên: </strong><br>
                  <ul class="company-social">
                     <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                     <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                     <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                     <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
               </address>
            </div>
         </div>
      </div>
   </div>
</section>