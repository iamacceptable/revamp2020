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
                <h1>Register as New Participant</h1>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contact-info__item-left wow fadeInRight">
                    <h4>Fill the following details:</h4>
                    <div class="fillin-form">
                        <form action="<?= base_url()?>Registration/register" method="POST">
                            <label style="color: red;"><?= form_error('name');?></label>
                            <label style="color: red;"><?= form_error('rollNo');?></label>
                            <label style="color: red;"><?= form_error('fName');?></label>
                            <label style="color: red;"><?= form_error('mName');?></label>
                            <label style="color: red;"><?= form_error('mNumber');?></label>
                            <label style="color: red;"><?= form_error('email');?></label>
                            <label style="color: red;"><?= form_error('branch');?></label>
                            <label style="color: red;"><?= form_error('year');?></label>
                            <label style="color: red;"><?= form_error('aadhar');?></label>
                            <label style="color: red;"><?= form_error('college');?></label>
                            <label style="color: red;"><?= form_error('university');?></label>
                            <div class="fillin-form__fields"> 
                                <input required type="text" placeholder="*Full Name" name="name" value="<?= set_value('name');?>"><br>
                                <input value="<?= set_value('rollNo');?>" required type="number" placeholder="*University Roll Number" name="rollNo">
                            </div>
                            <div class="fillin-form__fields"> 
                                <input value="<?= set_value('fName');?>" required type="text" placeholder="*Father's Name" name="fName">
                                <input value="<?= set_value('mName');?>" required type="text" placeholder="*Mother's Name" name="mName">
                            </div>
                            <div class="fillin-form__fields"> 
                                <input required type="number" value="<?= set_value('mNumber');?>" minlength="10" maxlength="10" placeholder="*Phone Number (+91)" name="mNumber">
                                <input required type="email" placeholder="*Email Address" value="<?= set_value('email');?>" name="email">
                            </div>
                            <div class="fillin-form__fields"> 
                                <input required type="text" placeholder="*Branch" name="branch" value="<?= set_value('branch');?>">
                                <input value="<?= set_value('year'); ?>" required type="number" placeholder="*Year" name="year">
                            </div>
                            <div class="fillin-form__fields">   
                                <input required type="number" value="<?= set_value('aadhar');?>" name="aadhar" placeholder="*Aadhar Number">
                                <select name="gender">
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>
                            </div>
                            <label>College &amp; University:</label>
                            <div class="fillin-form__fields">   
                                <select name="college_option" id="college">
                                    <option value="0">Krishna Engineering College, Mohan Nagar</option>
                                    <option value="1">Others..</option>
                                </select>
                            </div>
                            <div class="fillin-form__fields" id="college_info" style="display: none;">   
                                <input required type="text" name="college" placeholder="*College Name" value="Krishna Engineering College" id="colle">
                                <input required type="text" name="university" placeholder="*University Name" value="Dr. A.P.J. Abdul Kalam Technical University" id="univ">
                            </div>
                            <label>*Participants can participate in the events by visiting the events page after logging in by their Mobile Number!!</label>
                            <label>*You can login with your registered mobile number and roll number as your default password!!</label>
                            <label>*Ceredentials are also mailed to your registered email address with uniwue participation code!!</label>
                            <div class="fillin-form__submit">
                                <svg viewBox="4 0 118 98.6" class="hand-draw"><path class="hand-med-hover" d="M33.2,31.2C53.8,14.1,78.4,9.5,96.9,19.4c12.2,6.5,26.7,21.9,23.9,37.8c-3.9,22.2-39.1,37.1-65.6,34.5c-8.8-0.9-17.6-3.8-25.3-8.2C16.7,76,4.5,63.1,4.4,47.2C4.3,32.4,15,19.3,27.2,12.1c3.6-2.1,7.5-3.9,11.5-5.3c15.2-5.5,27.7-2.5,32.7-1.3c3.6,0.9,18,4.9,29.9,19c5.4,6.3,11.2,13.1,12.5,24.5c0.3,2.6,2,20.2-10.5,34.1C93.9,93.4,82,94,70,94.7c-9.9,0.6-25.8,1.5-39.3-10.1c-2.3-2-20.5-18.1-16-38.8c2.4-10.8,10-18.2,12.4-20.5c6.8-6.6,13.6-8.9,19.7-11C52,12.7,63,9.1,76.3,11.8c5,1,14.8,3.1,23.4,11.9c2.4,2.5,9.2,9.7,11.6,22c0.8,4.2,2.2,11.4-0.4,19.1c-4.9,14.2-20.9,19.7-28.3,22.4c-6,2.1-18,6.4-31.1,1.9c-16.1-5.4-33.7-23.9-28.8-44.2C25.5,33.2,35,24,44.6,19.9c14.3-6.2,26.1,0,28,1"/></svg>
                                <input class="moving-btn" type="submit">
                            </div>
                        </form>
                        <br><br>
                    </div>
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