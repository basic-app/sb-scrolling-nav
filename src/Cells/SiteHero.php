<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Settings\SettingsCell;

class SiteHero extends SettingsCell
{
    protected string $view = __DIR__ . '/../../cells/site-hero.php';

    public $title;
    
    public $description;
    
    public $background_image_path = null;

    public $assetsPath = 'assets/sb-scrolling-nav';
}