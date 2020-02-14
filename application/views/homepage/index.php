<?php
	// all bootstrap files
	$this->view('components/header');
	//section header to enable navbar
	$this->view('components/section_header');
	//main navbar
	$this->view('components/navbar');
	//preloader
	$this->view('components/loader');
	$this->view('homepage/slider');
?>
<!-- dates header, events coming in this part -->
<section>
	<?php
		$this->view('homepage/dates');
		$this->view('homepage/events');
	?>
</section>
<?php
	//schedule
	$this->view('homepage/schedule');
	$this->view('homepage/blog_events');
	$this->view('homepage/sponsor');
?>
<!-- footer start from here -->
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>