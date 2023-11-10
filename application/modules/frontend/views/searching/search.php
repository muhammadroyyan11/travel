<div class="ticket-search-bar bg_img padding-top" style="
        background: url(https://booking.go2indonesia.my.id/assets/images/default.png)
          left center;
      ">
    <div class="container">
        <div class="bus-search-header">
            <form action="#" class="ticket-form ticket-form-two row g-3 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="form--group">
                        <i class="fa fa-location-arrow"></i>
                        <select name="pickup" class="form--control select2 select2-hidden-accessible" data-select2-id="select2-data-1-rn6i" tabindex="-1" aria-hidden="true">
                            <option value="" disabled selected>
                                Trip
                            </option>
                            <?php
                            foreach ($tujuan as $data) { ?>
                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?> (<?= $data['kode'] ?>)</option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="form--group">
                        <i class="fa fa-map-marker"></i>
                        <select name="pickup" class="form--control select2 select2-hidden-accessible" data-select2-id="select2-data-4-eglx" tabindex="-1" aria-hidden="true">
                            <option value="" disabled selected>
                                Titik Jemput
                            </option>
                            <?php
                            foreach ($tujuan as $data) { ?>
                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?> (<?= $data['kode'] ?>)</option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="form--group">
                        <i class="fa fa-calendar-check"></i>
                        <input type="text" name="date_of_journey" class="form--control" placeholder="Tanggal Berangkat" autocomplete="off" value="" id="datepickersearch" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="form--group">
                        <button>Cari Tiket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Ticket Search Starts -->

<!-- Ticket Section Starts Here -->
<section class="ticket-section padding-bottom section-bg">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-3">
                <form action="#" id="filterForm">
                    <div class="ticket-filter">
                        <div class="filter-header filter-item">
                            <h4 class="title mb-0">Filter</h4>
                            <button type="reset" class="reset-button h-auto">
                                Reset All
                            </button>
                        </div>

                        <div class="filter-item">
                            <h5 class="title">Pilihan Jam</h5>
                            <ul class="bus-type">
                                <li class="custom--checkbox">
                                    <input name="schedules[]" class="search" value="1" id="schedule.1" type="checkbox" />
                                    <label for="schedule.1"><span><span><i class="las la-clock"></i> 07:00 pagi - 10:00
                                                pagi
                                            </span></span></label>
                                </li>
                                <li class="custom--checkbox">
                                    <input name="schedules[]" class="search" value="2" id="schedule.2" type="checkbox" />
                                    <label for="schedule.2"><span><span><i class="las la-clock"></i> 11:01 malam - 02:01
                                                siang
                                            </span></span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-9">
                <div class="ticket-wrapper mt-3">
                    <div class="ticket-item">
                        <div class="ticket-item-inner">
                            <h5 class="bus-name">
                                Mobil - Kenjeran (SBY) - Bromo (meeting point malang)
                            </h5>
                            <span class="bus-info">Seat Layout - 1 x 3</span>
                            <span class="ratting"><i class="las la-bus"></i>Mobil</span>
                        </div>
                        <div class="ticket-item-inner travel-time">
                            <div class="bus-time">
                                <p class="time">11:01 malam</p>
                                <p class="place">Kenjeran (SBY)</p>
                            </div>
                            <div class="bus-time">
                                <i class="las la-arrow-right"></i>
                                <p>±09 jam</p>
                            </div>
                            <div class="bus-time">
                                <p class="time">02:01 siang</p>
                                <p class="place">Bromo</p>
                            </div>
                        </div>
                        <div class="ticket-item-inner book-ticket">
                            <p class="rent mb-0">Rp300.000,00</p>
                            <div class="seats-left mt-2 mb-3 fs--14px">
                                Hari Libur:
                                <div class="d-inline-flex flex-wrap" style="gap: 5px">
                                    <span class="badge badge--primary">Senin</span>
                                </div>
                            </div>
                            <a class="btn btn--base" href="<?= site_url('detail') ?>">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="ticket-wrapper mt-3">
                    <div class="ticket-item">
                        <div class="ticket-item-inner">
                            <h5 class="bus-name">
                                Mobil - Kenjeran (SBY) - Bromo (meeting point malang)
                            </h5>
                            <span class="bus-info">Seat Layout - 1 x 3</span>
                            <span class="ratting"><i class="las la-bus"></i>Mobil</span>
                        </div>
                        <div class="ticket-item-inner travel-time">
                            <div class="bus-time">
                                <p class="time">11:01 malam</p>
                                <p class="place">Kenjeran (SBY)</p>
                            </div>
                            <div class="bus-time">
                                <i class="las la-arrow-right"></i>
                                <p>±09 jam</p>
                            </div>
                            <div class="bus-time">
                                <p class="time">02:01 siang</p>
                                <p class="place">Bromo</p>
                            </div>
                        </div>
                        <div class="ticket-item-inner book-ticket">
                            <p class="rent mb-0">Rp300.000,00</p>
                            <div class="seats-left mt-2 mb-3 fs--14px">
                                Hari Libur:
                                <div class="d-inline-flex flex-wrap" style="gap: 5px">
                                    <span class="badge badge--primary">Senin</span>
                                </div>
                            </div>
                            <a class="btn btn--base" href="<?= site_url('detail') ?>">Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>