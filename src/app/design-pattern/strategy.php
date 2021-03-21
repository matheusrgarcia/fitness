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
                            <legend>Padrões de Projeto - Strategy</legend>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                    <?php
                                        include 'src/strategy/crud.php';
                                        include 'src/strategy/contexto.php';
                                        include 'src/strategy/delete.php';
                                        include 'src/strategy/read.php';
                                        include 'src/strategy/create.php';
                                        include 'src/strategy/update.php';
                                   
                                        $context = new Contexto(new Create);
                                        echo "<div class=\"col-12 alert alert-danger\">Chamando Create -> ". $context->executaStrategy("Dados 1")."</div>";

                                        $context = new Contexto(new Read);
                                        echo "<div class=\"col-12 alert alert-success\">Chamando Read -> ". $context->executaStrategy("Dados 2")."</div>";
                                        
                                        $context = new Contexto(new Update);
                                        echo "<div class=\"col-12 alert alert-info\">Chamando Update -> ". $context->executaStrategy("Dados 3")."</div>";
                                        
                                        $context = new Contexto(new Delete);
                                        echo "<div class=\"col-12 alert alert-dark\">Chamando Delete -> ". $context->executaStrategy("Dados 4")."</div>";
                                    ?>
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