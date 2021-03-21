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
                            <legend>Padrões de Projeto - Factory</legend>
                            <div class="row">
                                    &nbsp;
                            </div>
                            <div class="row">
                                    <?php
                                        include 'src/factory/factoryIf.php';
                                        include 'src/factory/admin.php';
                                        include 'src/factory/gerente.php';
                                        include 'src/factory/usuario.php';
                                        include 'src/factory/perfil_factory.php';
                                        
                                        $perfil = new PerfilFactory();
                                   
                                        echo "<div class=\"col-12 alert alert-danger\">";
                                        $novoPerfil = $perfil->gerarPerfil("admin");
                                        $novoPerfil->criarPerfil();
                                        echo "</div>";
                                        
                                        echo "<div class=\"col-12 alert alert-success\">";
                                        $novoPerfil = $perfil->gerarPerfil("usuario");
                                        $novoPerfil->criarPerfil();
                                         echo "</div>";
                                        
                                        echo "<div class=\"col-12 alert alert-warning\">";
                                        $novoPerfil = $perfil->gerarPerfil("gerente");
                                        $novoPerfil->criarPerfil();
                                         echo "</div>";
		
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