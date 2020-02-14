<?php
	// all bootstrap files
	$this->view('components/header');
	//section header to enable navbar
	$this->view('components/section_header_other');
	//main navbar
?>
<section class="header-posistion"></section>
<?php
	$this->view('components/navbar');
	//preloader
	$this->view('components/loader');
?>
	<section>
    <div class="extra-container">
        <div class="porfolio-single__tittle">
            <h1><?= $details->name;?></h1>
        </div>
    </div>
    <div class="portfolio-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="porfolio-single__pictute wow fadeInUp">
                        <img src="<?= base_url();?>assets/images/uploads/events/<?= $details->img;?>" alt="<?= $details->name;?>">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight">
                    <div class="portfolio-single__content">
                        <h5 class="t-upcase">Team : <?php echo $details->min; if($details->max > 0) echo ' - '.$details->max;?></h5>
                        <h5 class="t-upcase">Set of Rules</h5>

                        <p>Rules will be uploaded shortly</p>
                        <br>
                        <?php if($details->entry > 0){?>
                        <h5 class="t-upcase">Entry Fee : ₹<?= $details->entry;?></h5>
                        <?php }?>
                        <ul>       
                            <?php if($details->venue != ''){ ?> 
                                <li><span>Venue :</span><a href="#"><?= $details->venue;?></a></li>
                            <?php }?>
                            <li><span>Faculty Coordinator :</span><a href="#"><?= $details->fname;?></a></li>
                            <li><span>Phone No. :</span><a href="#"><?= $details->fphone;?></a></li>
                            <li><span>Student Coordinator :</span><a><?= $details->cname.' ('.$details->cbranch.' Department '.$details->year.' Year)'?></a></li>
                            <li><span>Phone No. :</span><a href="#">+91 <?= $details->cphone;?></a></li>
                            <li><div class="footer__get-ticket footer-move-up">
                <a href="<?= base_url();?>Events/participate_tl/<?= $details->id;?>">Participate</a>
            </div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>