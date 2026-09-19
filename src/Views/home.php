<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use BasicApp\Block\Models\Blocks;

echo view_cell('SiteHero');

$model = model(Blocks::class);

$blocks = $model->where('block_active', 1)
    ->orderBy('block_sort', 'ASC')
    ->findAll();

$pageClass = null;

foreach($blocks as $i => $block)
{
    $pageClass = ($i + 1) % 2 === 0 ? 'bg-light' : '';

    echo view_cell('SitePage', [
        'title' => $block->block_name,
        'content_html' => $block->block_content_html,
        'attributes' => [
            'id' => $block->block_uid,
            'class' => $pageClass
        ]
    ]);
}