<?php

declare(strict_types=1);

/** @var ?string $title */
/** @var ?string $content_html */
/** @var array $attributes */

?>
<section<?= stringify_attributes($attributes);?>>
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2><?= $title;?></h2>
                <div class="lead"><?= $content_html;?></div>
            </div>
        </div>
    </div>
</section>