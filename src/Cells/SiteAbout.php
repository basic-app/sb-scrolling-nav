<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Core\SettingsCell;

class SiteAbout extends SettingsCell
{
    protected string $view = __DIR__ . '/../../cells/site-about.php';

    public $title;
    
    public $content_html;
}