<?php
$skills_title	= get_field('skills_section_title');
$skills_body = get_field('skills_section_body');
$skill_1 = get_field('skill_1');
$skill_2 = get_field('skill_2');
$skill_3 = get_field('skill_3');
?>

<!-- SKILLS
================================================== -->
<section id="skills">

    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-6 justify-content-md-center align-items-md-center">
                <div class="about_text-box">
                    <h3><?php echo $skills_title;?></h3>
                    <?php echo $skills_body;?>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <ul>
                    <li><?php echo $skill_1;?></li>
                    <li><?php echo $skill_2;?></li>
                    <li><?php echo $skill_3;?></li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- SKILLS -->
