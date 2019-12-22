<?php
$about_title	= get_field('about_title');
$about_body	= get_field('about_body');
$about_image = get_field('about_image');
$about_button_text = get_field('about_button_text');
?>

<!-- ABOUT
================================================== -->
<section id="about">

        <div class="container-fluid">
            <div class="row flex-md-row-reverse">
                <div class="col-md-6">
                    <div class="about_text-box">
                        <h3><?php echo $about_title;?></h3>
                        <?php echo $about_body;?>
                        <button class="btn btn-outline-dark btn-md btn-link rounded-0 text-dark"><?php echo $about_button_text;?></button>
                    </div>
                </div>
                <div class="col-md-6 pl-md-0">
                    <img src="<?php echo $about_image['url'];?>" alt="">
                </div>
            </div>
        </div>

</section><!-- ABOUT -->