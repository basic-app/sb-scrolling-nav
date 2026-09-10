<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Core\SettingsCell;

class SiteServices extends SettingsCell
{
    protected string $view = __DIR__ . '/../../cells/site-services.php';

    public $title;
    
    public $content_html;
}