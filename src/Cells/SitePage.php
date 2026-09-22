<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Core\Cell;

class SitePage extends Cell
{
    protected string $view = __DIR__ . '/../../cells/site-page.php';

    public $title;
    
    public $content_html;

    public ?array $attributes = [];
}