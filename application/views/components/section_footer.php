<footer>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    
    <div class="container">   
        <div class="footer ">
            <a class="footer__logo"><img class="footer-move-up" src="<?= base_url();?>assets/images/regal_logo.png" alt="logo"></a>
            <div class="footer__site-text">
                <p class="footer-move-up">HOST: KEC REGAL SOCIETY</p>
            </div>
            <?php if(isset($_SESSION['active']) && $_SESSION['active'] == 'true'){?>
                <div class="footer__get-ticket footer-move-up">
                    <a href="<?= base_url();?>Events/infinito">Explore</a>
                </div>
            <?php } else{ ?>
                <div class="footer__get-ticket footer-move-up">
                    <a href="<?= base_url();?>Registration">REGISTRATION</a>
                </div>
            <?php } ?>
            
            <br>
            <div class="footer__menu footer-move-up">
                <ul>                           
                    <li><a href="<?= base_url();?>">Home</a></li>
                    <li><a href="https://www.krishnacollege.ac.in/events-activities/gallery">Gallery 2k19</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Schedule.php">Schedule</a></li>
                </ul>   
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="copy-right__area">
                <p class="copy-right__left" >
                    <i class="fa fa-copyright"></i> 2020 <span>REVAMP</span> | All Rights Reserved | <a href="http://www.krishnacollege.ac.in">Krishna Engineering College</a> | Developed with <i class="fa fa-heart"></i> by: <span>Amit Kumar</span> &amp; <span>Shubham Kumar</span>
                </p>
            </div>
        </div>
    </div>
</footer>