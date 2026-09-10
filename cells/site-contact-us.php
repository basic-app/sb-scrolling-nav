<?php

if (!$title && !$content_html)
{
    return;
}

?>
<!-- Contact section-->
<section id="contact">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($content_html):?>
                    <div class="lead"><?= $content_html;?></div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>