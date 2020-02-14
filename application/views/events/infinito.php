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
	$this->view('events/infinito_events');
?>
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>