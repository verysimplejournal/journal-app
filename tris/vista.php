<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tris</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php require dirname(__DIR__) . '/menu-nav.php'; ?>
    <div class="container mt-3 p-5">
        <?php if (!$_SESSION['gioco_iniziato']) { ?>
            <div class="row m-2 py-2">
                <div class="alert alert-info">
                    <span>Clicca sul buttone per iniziare</span>
                </div>
            </div>
            <div class="row m-2 py-2">
                <form action="<?php echo $_CONFIG['url']; ?>tris/index.php" method="post">
                    <div class="col-12">
                        <input type="hidden" name="inizia" value="1">
                        <button class="btn btn-primary">Inizia</button>
                    </div>
                </form>
            </div>
        <?php } else { ?>
            <div class="row m-2 py-2">
                <div class="alert alert-info">
                    <span>Giocatore: <strong><?php echo $_SESSION['giocatore']; ?></strong></span>
                <?php
                    echo $message . '<br>';
                    $fine = controlla($_SESSION['positioni']);
                    echo '<br>';
                    var_dump($_POST);
                ?>
                </div>
            </div>
            <?php
                foreach ($posizioni as $lettera => $numeri) {
                    echo '<div class="row m-2 py-2">';
                    foreach ($numeri as $numero) {
                        echo '<div class="col-4">
                        <form action="'.$_CONFIG['url'].'tris/" method="post">
                            <div class="d-grid">
    
                                <input type="hidden" name="giocatore" value="'.$_SESSION['giocatore'].'">
                                <input type="hidden" name="posizione" value="'.($lettera . $numero).'">
                                <button type="submit" class="btn btn-primary btn-block" '. ($fine ? 'disabled' : '' ) .'>
                                    <strong class="display-6"> ' . ($_SESSION['positioni'][$lettera][$numero] ?? '?') . '</strong>
                                </button>
                            </div>
                        </form>
                    </div>';
                    }
                    echo '</div>';
                }
            ?>
            <!-- <div class="row m-2 py-2">
                <div class="col-4">
                    <form action="https://anatoliyz.playground.verysimplejournal.com/tris/" method="post">
                        <div class="d-grid">

                            <input type="hidden" name="giocatore" value="<?php echo $_SESSION['giocatore']; ?>">
                            <input type="hidden" name="posizione" value="A1">
                            <button type="submit" class="btn btn-primary btn-block">
                                <?php
                                echo $_SESSION['positioni']['A1'] ?? '?';
                                ?>
                            </button>

                        </div>
                    </form>
                </div>
                <div class="col-4">
                <form action="https://anatoliyz.playground.verysimplejournal.com/tris/" method="post">
                        <div class="d-grid">

                            <input type="hidden" name="giocatore" value="<?php echo $_SESSION['giocatore']; ?>">
                            <input type="hidden" name="posizione" value="A2">
                            <button type="submit" class="btn btn-primary btn-block">
                                <?php
                                echo $_SESSION['positioni']['A2'] ?? '?';
                                ?>
                            </button>

                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
            </div>
            <div class="row m-2 py-2">
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
            </div>
            <div class="row m-2 py-2">
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-grid">
                        <button onclick="return false;" class="btn btn-primary btn-block">?</button>
                    </div>
                </div>
            </div> -->
            <div class="row m-2 py-2">
                <form action="<?php echo $_CONFIG['url']; ?>tris/fine_partita.php" method="post">
                    <div class="col-12">
                        <input type="hidden" name="inizia" value="1">
                        <button class="btn btn-primary">Ricomincia</button>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
    <!-- <script>
    function sendMove(position) {
        let buttonSend = Document.getElementById('send');
        let posizione = Document.getElementById('posizione');
        alert(position);
        posizione.value = position;
        buttonSend.click();
        return false;
    }
</script> -->
</body>

</html>