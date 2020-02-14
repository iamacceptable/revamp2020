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
    <div class="contact-info">
        <div class="container">
            <div class="contact__tittle">
                <h1>Contact Us</h1>
            </div>
            <div class="row">
                <?php $this->view('contact/faculties');?>
                <div class="row" style="margin:30px 0px 30px;">
                   <?php 
                   		$this->view('contact/info');
                   		$this->view('contact/form');
                   	?>
                     
                </div>
            </div>
        </div>
      
    </div>
</section>
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>