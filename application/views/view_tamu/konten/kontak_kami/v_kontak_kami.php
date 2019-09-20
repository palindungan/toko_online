<!-- Begin Li's Breadcrumb Area -->
<?php $this->load->view("view_tamu/konten/kontak_kami/_partials/breadcrumb.php") ?>
<!-- Li's Breadcrumb Area End Here -->

<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <div id="google-map"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Kontak Kami</h3>
                    <p class="contact-page-message mb-25">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Alamat</h4>
                        <p>Jawa Timur , Jember jln mastrib</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>Mobile : (08) 123 456 789</p>
                        <p>Mobile 2 : (08) 123 456 789</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>yourmail@domain.com</p>
                        <p>support@hastech.company</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Kirim Pesanmu</h3>
                    <div class="contact-form">
                        <form id="contact-form" action="http://demo.hasthemes.com/limupa-v3/limupa/mail.php" method="post">
                            <div class="form-group">
                                <label>Nama Anda <span class="required">*</span></label>
                                <input type="text" name="customerName" id="customername" required>
                            </div>
                            <div class="form-group">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="customerEmail" id="customerEmail" required>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="contactSubject" id="contactSubject">
                            </div>
                            <div class="form-group mb-30">
                                <label>Tulis Pesan Anda</label>
                                <textarea name="contactMessage" id="contactMessage"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Main Page Area End Here -->

<!-- kontak_kami Start area -->
<?php $this->load->view("view_tamu/konten/kontak_kami/_partials/javascript.php") ?>
<!-- kontak_kami End here -->