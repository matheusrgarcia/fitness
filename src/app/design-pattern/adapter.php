<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Testando Padrões</title>
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="src/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <form method="post">
        <div class="container">
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                &nbsp;
            </div>
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                    <fieldset>
                            <legend>Padrões de Projeto - Adapter</legend>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                <?php
                                    
                                    include 'src/adapter/tocadoravancado.php';
                                    include 'src/adapter/tocadorbasico.php';
                                    
                                    include 'src/adapter/audioplayer.php';
                                    include 'src/adapter/cdplayer.php';
                                    include 'src/adapter/vinilplayer.php';
                                    
                                    include 'src/adapter/midiaadapter.php';
                                ?>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="tocador">Escolher Aparelho:</label>
                                        <select class="form-control" name="tocador" id="tocador">
                                            <option>- - SELECIONE - -</option>
                                            <option value="AudioPlayer">Audio Player</option>
                                            <option value="CdPlayer">CD Player</option>
                                            <option value="VinilPlayer">Vinil Player</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="midia">Escolher Mídia:</label>
                                        <select class="form-control" name="midia" id="midia">
                                            <option>- - SELECIONE - -</option>
                                            <option value="cd">CD</option>
                                            <option value="vinil">Vinil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="musica">Escolher Música:</label>
                                        <select class="form-control" name="musica" id="musica">
                                            <option>- - SELECIONE - -</option>
                                            <option value="Rock">Rock</option>
                                            <option value="Forró">Forró</option>
                                            <option value="Samba">Samba</option>
                                            <option value="MPB">MPB</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-success">Tocar</button>
                            </div>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                <div class="alert alert-info">
                                    <?php
                                        if(isset($_POST)){
                                            
                                            if($_POST['tocador'] == "AudioPlayer")
                                                $tocador = new AudioPlayer;
                                            if($_POST['tocador'] == "CdPlayer")
                                                $tocador = new CdPlayer;
                                            if($_POST['tocador'] == "VinilPlayer")
                                                $tocador = new VinilPlayer;
                                            
                                            echo "Aparelho {$_POST['tocador']}<br>";

                                            $tocador->tocar($_POST['midia'], $_POST['musica']);
                                        }
                                    ?>
                                </div>
                            </div>
                    </fieldset>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>
    </form>
</body>
</html>