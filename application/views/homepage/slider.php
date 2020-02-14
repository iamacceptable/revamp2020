<section>
    <div class="pagebanner-2">
        <div class="pagebanner-2__item">
            <div class="pagebanner-brg pagebanner-brg--1">
                <div class="extra-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#" class="pagebanner-brg--1__thumb wow fadeInLeft">
                                <img src="<?= base_url();?>assets/images/uploads/pagebanner/sign.png" alt="sign">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="pagebanner-brg--1__right wow fadeInRight">
                                <div class="pagebanner-brg--1__info">
                                    <h5>#A Fest That Never Ends</h5>
                                    <h2 class="pagebanner-brg--1__webdesign">It's Start With You</h2>
                                    <h3 class="pagebanner-brg--1__conference" style="color: white">REVAMP 2020</h3>
                                </div>
                                <div class="pagebanner__count-down-area">
                                    <div class="pagebanner__count-down">
                                        <p id="CD__day">0</p><span>DAYS</span>
                                    </div>
                                    <div class="pagebanner__count-down">
                                        <p id="CD__hour">0</p><span>HOURS</span>
                                    </div>
                                    <div class="pagebanner__count-down ">
                                        <p id="CD__min">0</p><span>MINS</span>
                                    </div>
                                    <div class="pagebanner__count-down ">
                                        <p id="CD__sec">0</p><span>SECS</span>
                                    </div>
                                </div>
                                <?php if(isset($_SESSION['active']) && $_SESSION['active'] == 'true'){?>
                                    <a><?= $_SESSION['puid'];?></a>
                                <?php } else{ ?>
                                    <a href="<?= base_url();?>Registration">Registration</a>
                                <?php } ?>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>