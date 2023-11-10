<section class="inner-banner bg_img" style="background: url(https://project.ianstudios.my.id/btour/assets/images/frontend/breadcrumb/61f14e10b48871643204112.jpg) center">
    <div class="container">
        <div class="inner-banner-content">
            <h2 class="title">Elf - Kenjeran (SBY) - Kota Batu</h2>
        </div>
    </div>
</section>
<div class="padding-top padding-bottom" data-select2-id="select2-data-9-e71a">
    <div class="container" data-select2-id="select2-data-8-6mrg">
        <div class="row gx-xl-5 gy-4 gy-sm-5 justify-content-center" data-select2-id="select2-data-7-nj2u">
            <div class="col-lg-4 col-md-6" data-select2-id="select2-data-6-sfgc">
                <div class="seat-overview-wrapper">
                    <form action="<?= site_url('snap')?>" method="POST" id="bookingForm" class="row gy-2">
                        <input type="hidden" name="_token" value="4foafOns8WjR2LTv4E5EL5dwuAAeJDLtKuoNSsnh"> <input type="text" name="price" hidden="">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="date_of_journey" class="form-label">Tanggal Berangkat</label>
                                <input type="text" disabled id="date_of_journey" class="form--control datepicker hasDatepicker" value="11/10/2023" name="date_of_journey">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pickup_point" class="form-label">Tujuan</label>
                                <input type="text" disabled id="date_of_journey" class="form--control datepicker hasDatepicker" value="Bromo" name="date_of_journey">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="dropping_point" class="form-label">Jam Keberangkatan</label>
                                <input type="text" disabled id="date_of_journey" class="form--control datepicker hasDatepicker" value="17:00 WIB" name="date_of_journey">
                            </div>
                        </div>
                        
                        <div class="booked-seat-details my-3 d-none">
                            <label>Selected Seats</label>
                            <div class="list-group seat-details-animate">
                                <span class="list-group-item d-flex bg--base text-white justify-content-between">Seat Details<span>Price</span></span>
                                <div class="selected-seat-details"></div>
                            </div>
                        </div>
                        <input type="text" name="seats" hidden="">
                        <div class="col-12">
                            <button type="submit" class="book-bus-btn">Lanjutkan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h6 class="title">Keterangan</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio temporibus, amet ipsum odit tempore itaque eum. Quas aspernatur possimus cupiditate! Quia, voluptates! Laborum, necessitatibus neque unde repellat impedit ab provident.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bookConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Confirm Booking</h5>
                <button type="button" class="w-auto btn--close" data-bs-dismiss="modal"><i class="las la-times"></i></button>
            </div>
            <div class="modal-body">
                <strong class="text-dark">Ingin membooking seat ini?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger w-auto btn--sm px-3" data-bs-dismiss="modal">
                    Tutup </button>
                <button type="submit" class="btn btn--success btn--sm w-auto" id="btnBookConfirm">Confirm </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Alert Message</h5>
                <button type="button" class="w-auto btn--close" data-bs-dismiss="modal"><i class="las la-times"></i></button>
            </div>
            <div class="modal-body">
                <strong>
                    <p class="error-message text-danger">Select Pickup Point &amp; Dropping Point Properly</p>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn--danger w-auto btn--sm px-3" data-bs-dismiss="modal">
                    Lanjutkan </button>
            </div>
        </div>
    </div>
</div>

<section class="footer-seciton">
    <div class="footer-top">
        <div class="container">
            <div class="row footer-wrapper gy-sm-5 gy-4">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget">
                        <div class="logo">
                            <img src="./Lunaria Travel - Elf - Kenjeran (SBY) - Kota Batu_files/logowhite.png" alt="Logo">
                        </div>
                        <p>Lunaria Travel adalah perusahaan perorangan penyedia armada untuk perjalanan bisnis atau tour anda</p>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/"><i class="lab la-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=en"><i class="lab la-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://vimeo.com/log_in"><i class="lab la-vimeo"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/?hl=en"><i class="lab la-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Link Terkait</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/about-us">Tentang</a>
                            </li>
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/faq">FAQs</a>
                            </li>
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/blog">Blog</a>
                            </li>
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/contact">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Kebijakan</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/policy/69/privacy-policy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/policy/71/terms-and-conditions">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="https://project.ianstudios.my.id/btour/policy/90/ticket-policies">Ticket Policies</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Informasi Kontak</h4>
                        <ul class="footer-contacts">
                            <li>
                                <i class="las la-map-pin"></i> Gresik, Indonesia
                            </li>
                            <li>
                                <i class="las la-phone-volume"></i> <a href="tel:+62 89699307980"> +62 89699307980</a>
                            </li>
                            <li>
                                <i class="las la-envelope"></i> <a href="mailto:admin@lunaria.ianstudios.my.id"> admin@lunaria.ianstudios.my.id</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>