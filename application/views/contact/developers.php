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
<section class="blog-area">
    <div class="extra-container">
        <div class="schedule__tittle">
            <h1>Meet Developers</h1>
        </div>
    </div>
    <div class="container">
        <div class="blog">
            <div data-wow-delay="0.2s" class="blog__item wow fadeInLeft">
                <div class="blog__item__thumb">
                    <img src="<?= base_url();?>assets/images/uploads/coordinator/revamp/amit_kumar.jpg" alt="Amit Kumar">
                </div>
                <div align="center" class="marg">
                    <h4>Amit Kumar</h4>
                    <h6>CSE Department 4th Year</h6>
                    <h6>UI/UX Designer</h6>
                </div>
            </div>
            <div data-wow-delay="0.2s" class="blog__item wow fadeInUp">
                <div class="blog__item__thumb">
                    <img src="<?= base_url();?>assets/images/uploads/coordinator/revamp/shubham_kumar.jpg" alt="Shubham Kumar">
                </div>
                <div align="center" class="marg">
                    <h4>Shubham Kumar</h4>
                    <h6>CSE Department 4th Year</h6>
                    <h6>Backend &amp; DevOps Developer</h6>
                </div>
            </div>
            <div data-wow-delay="0.2s" class="blog__item wow fadeInRight">
                <div class="blog__item__thumb">
                    <img src="<?= base_url();?>assets/images/uploads/coordinator/revamp/harshit.jpg" alt="Harshit">
                </div>
                <div align="center" class="marg">
                    <h4>Harshit Gautam</h4>
                    <h6>CSE Department 2th Year</h6>
                    <h6>Junior Web Designer</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>