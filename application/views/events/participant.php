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
                <h1>Add Participants</h1>
            </div>
            <?php
            //echo $teamCount;
                if($details->max > $teamCount){

            ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="contact-info__item-left wow fadeInRight">
                    <h4>Add Participant of  (<?= $details->name;?>):</h4>
                    <?php if(isset($error)){?>
                        <h6><?= $error;?></h6>
                    <?php }?>
                    <div class="fillin-form">
                        <form action="<?= base_url()?>Events/participate/<?= $details->id;?>" method="POST">
                            <label>Unique Id will be found on the homepage once logged in!!</label>
                            <div class="fillin-form__fields">   
                                <input required type="text" name="puid" placeholder="*Enter Unique Id" >
                                <input required type="hidden" name="teamid" placeholder="*Enter Unique Id" value="<?= '1';?>">
                            </div>
                            <div class="fillin-form__submit">
                                <svg viewBox="4 0 118 98.6" class="hand-draw"><path class="hand-med-hover" d="M33.2,31.2C53.8,14.1,78.4,9.5,96.9,19.4c12.2,6.5,26.7,21.9,23.9,37.8c-3.9,22.2-39.1,37.1-65.6,34.5c-8.8-0.9-17.6-3.8-25.3-8.2C16.7,76,4.5,63.1,4.4,47.2C4.3,32.4,15,19.3,27.2,12.1c3.6-2.1,7.5-3.9,11.5-5.3c15.2-5.5,27.7-2.5,32.7-1.3c3.6,0.9,18,4.9,29.9,19c5.4,6.3,11.2,13.1,12.5,24.5c0.3,2.6,2,20.2-10.5,34.1C93.9,93.4,82,94,70,94.7c-9.9,0.6-25.8,1.5-39.3-10.1c-2.3-2-20.5-18.1-16-38.8c2.4-10.8,10-18.2,12.4-20.5c6.8-6.6,13.6-8.9,19.7-11C52,12.7,63,9.1,76.3,11.8c5,1,14.8,3.1,23.4,11.9c2.4,2.5,9.2,9.7,11.6,22c0.8,4.2,2.2,11.4-0.4,19.1c-4.9,14.2-20.9,19.7-28.3,22.4c-6,2.1-18,6.4-31.1,1.9c-16.1-5.4-33.7-23.9-28.8-44.2C25.5,33.2,35,24,44.6,19.9c14.3-6.2,26.1,0,28,1"/></svg>
                                <input class="moving-btn" type="submit" value="Add">
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
            </div>
            </div>
            <?php }?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <label>
                        <?php
                            if($details->min > $teamCount){
                                echo 'Team Incompleted';
                            }
                            else if($details->max < $teamCount){
                                echo 'Team OverFlow';
                            }
                            else{
                                echo 'Team Completed';
                            }
                        ?>
                    </label>
                    <?php if(isset($perror)){?>
                        <h6><?= $perror;?></h6>
                    <?php }?>
                    <table>
                        <tr>
                            <th>
                                S.no.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                PUID
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        <?php $i=1; foreach($teams as $team):?>
                            <tr>
                                <td><?= $i++;?></td>
                                <td><?= $team['name'];?></td>
                                <td><?= $team['p_id'];?></td>
                                <td><?php if($team['pid'] == $team['fgg']){?>
                                    
                                <?php 
                                        echo 'You can\'t delete Team Leader';
                                        } 
                                        elseif ($_SESSION['id'] == $team['fgg']) {
                                    ?>
                                    <a href="<?= base_url();?>Events/deleteMember/<?= $team['id'];?>/<?= $details->id; ?>"><i class="fa fa-trash"></i> Delete</a>
                                    <?php
                                } else{ echo 'You aren\'t Team Leader';}?></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
      
    </div>
</section>
<?php
	$this->view('components/section_footer');
	$this->view('components/footer');
?>