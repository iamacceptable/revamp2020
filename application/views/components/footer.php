<?php if($navbar == 'registration'){ ?>
<script type="text/javascript">
  document.getElementById('college').addEventListener('change', function () {
    var style = 'none';
    if(this.value == 0){
        style = 'none';
        document.getElementById('colle').value = 'Krishna Engineering College';
        document.getElementById('univ').value = 'Dr. A.P.J. Abdul Kalam Technical University';
    }
    else{
        style = '';
        document.getElementById('colle').value = '';
        document.getElementById('univ').value = '';
    }
    document.getElementById('college_info').style.display = style;
});
</script>
<?php } ?>
<script src="<?= base_url();?>assets/scripts/jquery-3.4.1.js"> </script>

<script src="<?= base_url();?>assets/scripts/slick.min.js"></script>
<script src="<?= base_url();?>assets/scripts/isotope.pkgd.min.js"></script>
<script src="<?= base_url();?>assets/scripts/packery-mode.pkgd.min.js" ></script>
<script src="<?= base_url();?>assets/scripts/cells-by-row.js" ></script>
<script src="<?= base_url();?>assets/scripts/flickity.pkgd.min.js"></script>
<script src="<?= base_url();?>assets/scripts/anime.min.js"></script>
<script src="<?= base_url();?>assets/scripts/ScrollMagic.min.js" ></script>
<script src="<?= base_url();?>assets/scripts/TimelineMax.min.js"></script>
<script src="<?= base_url();?>assets/scripts/TweenMax.min.js" ></script>
<script src="<?= base_url();?>assets/scripts/animation.gsap.min.js"></script>
<script src="<?= base_url();?>assets/scripts/charming.min.js"></script>
<script src="<?= base_url();?>assets/scripts/wow.js"></script>
<script src="<?= base_url();?>assets/scripts/lightbox.js"></script>

<script src="<?= base_url();?>assets/scripts/app.js"></script>

</body>

</html>