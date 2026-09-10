<!DOCTYPE html>
<html lang="<?= $lang;?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?= $title;?></title>
        <meta name="keywords" content="<?= esc($keywords);?>" />
        <meta name="description" content="<?= esc($description);?>" />
        <link rel="icon" type="image/x-icon" href="<?= base_url($assetsPath . '/assets/favicon.ico');?>" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url($assetsPath . '/css/styles.css');?>" rel="stylesheet" />
        <?= $styles;?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="<?= $baseUrl;?>"><?= $name;?></a>
                <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarResponsive" 
                    aria-controls="navbarResponsive" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <?php foreach($menu as $key => $value):?>
                            <li class="nav-item">
                                <a class="nav-link" 
                                    href="<?= esc($value['url']);?>"><?= $value['label'];?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </nav>
        <?= $content;?>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white"><?= $copyright;?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url($assetsPath . '/js/scripts.js');?>"></script>
        <?= $scripts;?>
    </body>
</html>