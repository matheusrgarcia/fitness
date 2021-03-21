<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Testando Padrões</title>
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="src/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
    <form>
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
                            <legend>Padrões de Projeto - Observer</legend>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                <div class="alert-info">
                                    <?php
                                        include 'src/observer/observer.php';
                                        include 'src/observer/sujeito_atualizar.php';
                                        include 'src/observer/auditoria_observer.php';
                                        include 'src/observer/dados_observer.php';
                                        
                                        $sujeito = new SujeitoAtualizar;
		
                                        new AuditoriaObserver($sujeito);
                                        new DadosObserver($sujeito);
		
                                        echo "<div class=\"col-12 alert alert-danger\">";
                                        echo "Primeira notificação aos observadores...<br>";
                                        $sujeito->setNotificacao();
                                        echo "</div>";
		
                                        echo "<div class=\"col-12 alert alert-success\">";
                                        echo "Segunda notificação aos observadores...<br>";
                                        $sujeito->setNotificacao(); 
                                        echo "</div>";
                                        
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