 <!-- Banner Section Starts Here -->
 <section class="banner-section" style="background: url(https://booking.go2indonesia.my.id/assets/images/frontend/banner/61f118f07f1151643190512.png) repeat-x bottom;">
     <div class="container">
         <div class="banner-wrapper">
             <div class="banner-content">
                 <h1 class="title">Dapatkan Trip Anda Secara Online, Mudah dan Aman</h1>
                 <a href="https://booking.go2indonesia.my.id/tickets" class="cmn--btn">Dapatkan Sekarang</a>
             </div>
             <div class="ticket-form-wrapper">
                 <div class="ticket-header nav-tabs nav border-0">
                     <h4 class="title">Tentukan Tiket Anda</h4>
                 </div>
                 <div class="tab-content">
                     <div class="tab-pane fade show active" id="one-way">
                         <form action="<?= site_url('search') ?>" class="ticket-form row g-3 justify-content-center m-0">
                             <div class="col-md-6">
                                 <div class="form--group">
                                     <i class="fa fa-location-arrow"></i>
                                     <select name="pickup" class="form--control select2" tabindex="-1" aria-hidden="true">
                                         <option value="" disabled selected>Lokasi Anda</option>
                                         <?php
                                            foreach ($tujuan as $data) { ?>
                                             <option value="<?= $data['id'] ?>"><?= $data['name'] ?> (<?= $data['kode'] ?>)</option>
                                         <?php }
                                            ?>
                                     </select>
                                     <!-- </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-rd0r" style="width: 244px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pickup-wi-container"><span class="select2-selection__rendered" id="select2-pickup-wi-container" role="textbox" aria-readonly="true" title="Trip">Trip</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form--group">
                                     <i class="fa fa-map-marked"></i>
                                     <select name="pickup" class="form--control select2" data-select2-id="select2-data-4-hz1w" tabindex="-1" aria-hidden="true">
                                         <option value="" disabled selected>Tujuan</option>
                                         <?php
                                            foreach ($tujuan as $data) { ?>
                                             <option value="<?= $data['id'] ?>"><?= $data['name'] ?> (<?= $data['kode'] ?>)</option>
                                         <?php }
                                            ?>

                                     </select>
                                     <!-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-cby9" style="width: 244px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-pickup-s8-container"><span class="select2-selection__rendered" id="select2-pickup-s8-container" role="textbox" aria-readonly="true" title="Titik Jemput">Titik Jemput</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> -->
                                 </div>
                             </div>
                             <div class="col-md-12">
                                 <div class="form--group">
                                     <i class="fa fa-calendar-check"></i>
                                     <!--                                     <input type="date" name="date_of_journey" class="form--control datepicker hasDatepicker" placeholder="Tanggal Berangkat" autocomplete="off" id="dp1698121147332">-->
                                     <input type="text" name="tanggal" id="datepicker" class="form--control" placeholder="Pilih Tanggal" autocomplete="off" />
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form--group">
                                     <button>Cari Tiket</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Banner Section Ends Here -->

 <!-- Working Process Section Starts Here -->
 <section class="working-process padding-top padding-bottom">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-10">
                 <div class="section-header text-center">
                     <h2 class="title">Dapatkan Trip Anda Hanya Dengan 3 Langkah</h2>
                     <p>Order Trip di kami hanya dengan 3 langkah saja</p>
                 </div>
             </div>
         </div>
         <div class="row g-4 gy-md-5 justify-content-center">
             <div class="col-lg-4 col-md-6 col-sm-10">
                 <div class="working-process-item">
                     <div class="thumb-wrapper">
                         <span>01</span>
                         <div class="thumb">
                             <i class="fa fa-search"></i>
                         </div>
                     </div>
                     <div class="content">
                         <h4 class="title">Cari Destinasi Dan Jadwal Yang Cocok</h4>
                         <p>Pilih asal, tujuan, dan pilih tanggal perjalanan sesuai kebutuhan Anda</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-10">
                 <div class="working-process-item">
                     <div class="thumb-wrapper">
                         <span>02</span>
                         <div class="thumb">
                             <i class="fa fa-car"></i>
                         </div>
                     </div>
                     <div class="content">
                         <h4 class="title">Pilih Trip Yang Anda Inginkan</h4>
                         <p>Kemudian pilih tiket Anda sesuai dengan armada dan rute perjalanan</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-10">
                 <div class="working-process-item">
                     <div class="thumb-wrapper">
                         <span>03</span>
                         <div class="thumb">
                             <i class="fa fa-money-bill"></i>
                         </div>
                     </div>
                     <div class="content">
                         <h4 class="title">Pembayaran Mudah</h4>
                         <p>Lanjut pembayaran tiket Anda dengan sekali klik</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Working Process Section Ends Here -->
 <!-- Our Ameninies Section Starts Here -->
 <section class="amenities-section padding-bottom">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-10">
                 <div class="section-header text-center">
                     <h2 class="title">Fasilitas Yang Kami Tawarkan</h2>
                     <p>Fasilitas gratis dari kami untuk menemani selama di perjalanan Anda</p>
                 </div>
             </div>
         </div>
         <div class="amenities-wrapper">
             <div class="amenities-slider slick-initialized slick-slider">
                 <div class="slick-list draggable">
                     <div class="slick-track" style="opacity: 1; width: 980px; transform: translate3d(0px, 0px, 0px);">
                         <div class="single-slider slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 196px;" tabindex="0">
                             <div class="amenities-item">
                                 <div class="thumb">
                                     <i class="las la-wifi"></i>
                                 </div>
                                 <h6 class="title">Wifi</h6>
                             </div>
                         </div>
                         <div class="single-slider slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 196px;" tabindex="0">
                             <div class="amenities-item">
                                 <div class="thumb">
                                     <i class="las la-prescription-bottle"></i>
                                 </div>
                                 <h6 class="title">Air Minum</h6>
                             </div>
                         </div>
                         <div class="single-slider slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 196px;" tabindex="0">
                             <div class="amenities-item">
                                 <div class="thumb">
                                     <i class="las la-mortar-pestle"></i>
                                 </div>
                                 <h6 class="title">Makan 1x</h6>
                             </div>
                         </div>
                         <div class="single-slider slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 196px;" tabindex="0">
                             <div class="amenities-item">
                                 <div class="thumb">
                                     <i class="fas fa-grin-squint"></i>
                                 </div>
                                 <h6 class="title">Guide Berpengalaman</h6>
                             </div>
                         </div>
                         <div class="single-slider slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 196px;" tabindex="0">
                             <div class="amenities-item">
                                 <div class="thumb">
                                     <i class="fas fa-medkit"></i>
                                 </div>
                                 <h6 class="title">P3K KIT</h6>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Our Ameninies Section Ends Here -->
 <!-- Section Starts Here -->
 <section class="padding-bottom padding-top testimonial-section">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8">
                 <div class="section-header text-center">
                     <h2 class="title">Testimoni</h2>
                     <p>Lihat testimoni berikut dari pembeli kami</p>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center gy-5">
             <div class="col-lg-8 col-md-10">
                 <div class="testimonial-wrapper">
                     <div class="testimonial-slider slick-initialized slick-slider slick-dotted">
                         <div class="slick-list draggable" style="padding: 0px 50px;">
                             <div class="slick-track" style="opacity: 1; width: 4296px; transform: translate3d(-1432px, 0px, 0px);">
                                 <div class="single-slider slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 716px;" tabindex="-1">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Perjalanan yang asik dengan bus yang cukup nyaman</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ad31ec4d1643199187.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Kristin</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="single-slider slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 716px;" tabindex="-1">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Beli tiket perjalanan disini cepat dan ramah pelayanannya, harga yang ditawarkan cukup terjangkau dengan rute yang saya tuju</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ac0c23181643199168.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Silvia Hasibuan</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="single-slider slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 716px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Perjalanan yang asik dengan bus yang cukup nyaman</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ad31ec4d1643199187.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Kristin</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="single-slider slick-slide" data-slick-index="1" aria-hidden="true" style="width: 716px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Beli tiket perjalanan disini cepat dan ramah pelayanannya, harga yang ditawarkan cukup terjangkau dengan rute yang saya tuju</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ac0c23181643199168.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Silvia Hasibuan</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="single-slider slick-slide slick-cloned slick-center" data-slick-index="2" id="" aria-hidden="true" style="width: 716px;" tabindex="-1">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Perjalanan yang asik dengan bus yang cukup nyaman</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ad31ec4d1643199187.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Kristin</h5>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="single-slider slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 716px;" tabindex="-1">
                                     <div class="testimonial-item">
                                         <div class="content">
                                             <p>Beli tiket perjalanan disini cepat dan ramah pelayanannya, harga yang ditawarkan cukup terjangkau dengan rute yang saya tuju</p>
                                         </div>
                                         <div class="thumb-wrapper">
                                             <div class="thumb">
                                                 <img src="./content_explore_travel_files/61f13ac0c23181643199168.jpg" alt="testimonials">
                                             </div>
                                             <h5 class="name">Silvia Hasibuan</h5>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <ul class="slick-dots" style="" role="tablist">
                             <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li>
                             <li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Section Ends Here -->
 <!-- Blog Section Starts Here -->
 <section class="blog-section padding-top padding-bottom">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-10">
                 <div class="section-header text-center">
                     <h2 class="title">Recent Blog Post</h2>
                     <p>Have a look at our popular reason. why you should choose you bus. Just choose a Bus and get a ticket for your great journey. !</p>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center g-4">
         </div>
     </div>
 </section>
 <!-- Blog Section Ends Here -->


 <script>
     $(document).ready(function() {
         $('.select2').select2();
     });


     $(function() {
         $("#checkin").datepicker();
         $("#checkout").datepicker();
     });
 </script>