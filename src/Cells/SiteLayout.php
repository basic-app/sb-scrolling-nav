<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Core\Cell;

class SiteLayout extends Cell
{
    protected string $view = __DIR__ . '/../../cells/site-layout.php';

    public $lang;

    public $content;

    public $title;

    public $keywords;

    public $description;

    public $scripts;

    public $styles;

    public $baseUrl;

    public $assetsPath = 'assets/sb-scrolling-nav';

    public $name;

    public $copyright;

    public $activeMenu;

    public array $menu = [];

    public function mount()
    {
        $this->baseUrl = $this->baseUrl ?? base_url('/');
    }
}