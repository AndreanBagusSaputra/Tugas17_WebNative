<?php
    include_once 'top.php';
    include_once 'menu.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1></h1>
            <?php
                // algoritma menangkap url agar masuk kedalam index
                $url = $_GET['url'];
                if($url == 'dashboard'){
                    include_once 'dashboard.php';
                } elseif (!empty($url)){
                    include_once ''.$url.'.php';
                } else { 'dashboard.php';
                }
            ?>
        </div>
    </main>
</div>

<?php
    include_once 'bottom.php';
?>