<section>
    <div class="menu-nav">
        <div class="extra-container">
            <div class="menu-nav-close"></div>
            <nav>
                <ul>
                    <li>
                        <a class="menu-link link--kukuri" href="<?= base_url();?>" data-letters="Home">Home</a>
                    </li>
                    <li>
                        <a class="menu-link link--kukuri" data-letters="Events">Events</a><i class="fa fa-angle-down"></i>
                        <ul class="sub-menu">
                            <li><a class="menu-link link--kukuri" data-letters="Infinito 2k20" href="<?= base_url();?>Events/infinito">Infinito 2k20</a></li>
                            <li><a class="menu-link link--kukuri" data-letters="Revamp 2k20" href="<?= base_url();?>Events/revamp">Revamp 2k20</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-link link--kukuri" href="#" data-letters="Coordinators">Coordinators</a><i class="fa fa-angle-down"></i>
                        <ul class="sub-menu">
                            <li><a class="menu-link link--kukuri" data-letters="Infinito Coordinators" href="<?= base_url();?>Coordinator/infinito">Infinito Coordinators</a></li>
                            <li><a class="menu-link link--kukuri" data-letters="Revamp Coordinators" href="<?= base_url();?>Coordinator/revamp">Revamp Coordinators</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="menu-link link--kukuri" href="venue.php" data-letters="Venue">Venue</a></li>
                    <li><a class="menu-link link--kukuri" href="schedule.php" data-letters="Schedule">Schedule</a></li> -->
                    
                    <li><a class="menu-link link--kukuri" href="<?= base_url();?>Contact" data-letters="Contact">Contact</a></li>
                    <li>
                        <a class="menu-link link--kukuri" data-letters="Developers" href="<?= base_url();?>Contact/developers">Developers</a>
                    </li>
                    <?php if(isset($_SESSION['active']) && $_SESSION['active'] == 'true'){?>
                        <!-- <li>
                            <a class="menu-link link--kukuri" data-letters="My Profile" href="<?= base_url();?>Registration/authenticate">My Profile</a>
                        </li> -->
                        <li>
                            <a class="menu-link link--kukuri" data-letters="Logout" href="<?= base_url();?>Registration/logout">Logout</a>
                        </li>
                    <?php } else{ ?>
                        <li>
                            <a class="menu-link link--kukuri" data-letters="Login" href="<?= base_url();?>Registration/authenticate">Login</a>
                        </li>
                    <?php } ?>
                </ul> 
            </nav>
        </div>
    </div>
</section>