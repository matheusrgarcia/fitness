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
                            <legend>Padrões de Projeto - Singeton</legend>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                <div class="alert alert-info">
                                    <?php
                                        include 'src/singleton/singleton.php';
                                        
                                        $obj = new singleton;
                                        $obj->main();
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