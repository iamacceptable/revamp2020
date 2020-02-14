<body>
<header id="header-3">
    <div class="extra-container ">
        <div class="header-2 ">
            <div class="header__logo">
                <?php if($navbar == 'Infinito'){ ?>
                    <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/images/infinito.png" alt="logo"></a>
                <?php } else if($navbar == 'Revamp'){?>
                    <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/images/revamp.png" alt="logo"></a>
                <?php }?>
            </div>
     
            <div id="header-trans2__btn" class="header__menu-icon">
                <div class="header__menu-icon__dot ">
                    <span ></span>
                    <span ></span>
                </div>
                <div class="header__menu-icon__dot header__menu-icon__dot--vertical">
                    <span ></span>
                    <span ></span>
                </div>
                <div class="header__menu-icon__dot header__menu-icon__dot--skew">
                    <span ></span>
                    <span ></span>
                </div>
                <div class="header__menu-icon__dot header__menu-icon__dot--skew-reverse">
                    <span ></span>
                    <span ></span>
                </div>
            </div>
       
        </div>
    </div>
</header>
