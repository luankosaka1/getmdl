<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/getmdl/material.indigo-pink.min.css">
        <script src="js/getmdl/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Projeto X</span>

                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>

                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="">Home</a>
                        <a class="mdl-navigation__link" href="">Sobre</a>
                        <a class="mdl-navigation__link" href="">Contato</a>
                        <a class="mdl-navigation__link" href="">Login</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Title</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Home</a>
                    <a class="mdl-navigation__link" href="">Sobre</a>
                    <a class="mdl-navigation__link" href="">Contato</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-table mdl-cell--12-col-phone">
                            <div class="mdl-grid">
                                <?php include './html/include/session-star.php'; ?>
                            </div>
                        </div>

                        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-table mdl-cell--12-col-phone">
                            <div class="mdl-grid">
                                <?php include './html/include/card-media.php'; ?>
                            </div>
                        </div>

                        <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-table mdl-cell--12-col-phone">
                            <div class="mdl-grid">
                                <?php include './html/include/card-share.php'; ?>
                            </div>
                            <div class="mdl-grid">
                                <?php include './html/include/card-info.php'; ?>
                            </div>
                            <div class="mdl-grid">
                                <?php include './html/include/card-share.php'; ?>
                            </div>
                        </div>

                        <div class="mdl-cell mdl-cell--2-col mdl-cell--12-col-table mdl-cell--12-col-phone">
                            <div class="mdl-grid">
                                <?php include './html/include/session-contact.php'; ?>
                            </div>
                            <div class="mdl-grid">
                                <?php include './html/include/session-contact.php'; ?>
                            </div>
                        </div>
                    </div>

                    <?php include './html/footer.php'; ?>
                </div>
            </main>
        </div>

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>
</html>
