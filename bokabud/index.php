<?php
include "include/mvc.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Bókabúð</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="page-content">
            <h1>Finndu upplýsingar um bækur</h1><br>
            <?php
            $view->selectOutput();
            if(isset($_GET['book'])){
                $books = $view->infoOutput($_GET['book']);
            }

            ?>
        </div>
    </main>
</div>

<footer class="mdl-mini-footer">
    <div class="mdl-mini-footer__right-section">
        <div class="mdl-logo">Bókabúð</div>
        <ul class="mdl-mini-footer__link-list">
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy & Terms</a></li>
        </ul>
    </div>
</footer>
</body>
</html>