<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\SbScrollingNav\Cells;

use BasicApp\Core\Cell;

class SiteLayout extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/site-layout.php';

    public ?string $baseUrl = null;

    public ?string $lang = null;

    public ?string $content = null;

    public ?string $title = null;

    public ?string $keywords = null;

    public ?string $description = null;

    public ?string $scripts = null;

    public ?string $styles = null;

    public ?string $name = null;

    public ?string $copyright = null;

    public ?string $activeMenu = null;

    public ?array $menu = [];

    public function mount()
    {
        $this->baseUrl = $this->baseUrl ?? base_url('/');
    }
}
