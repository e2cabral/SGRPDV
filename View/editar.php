<?php
include 'includes/header.php';
include './../Controller/editarCtrl.php';
?>
<div class="">
    <article class="col s12 m12 l12">
        <article class="row">
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Usuarios</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Email</th><th>Login</th><th>Senha</th><th>Grau de parentesco</th>
                        </tr>
                    </thead>
                    <tbody>
<!--                            <td>Lucas</td><td>161517761</td><td><a href="" name="cpf">Atualizar</a></td><td><a href="#!">Excluir</a></td>-->
                            <?php
                                foreach($familia as $fam){
                                    echo "<tr><td>{$fam->nome}</td><td>{$fam->login}</td><td>{$fam->senha}</td><td>{$fam->grauParentesco}</td><td><a href='pageEdit.php?id=".base64_encode($fam->cpf)."'>Editar</a></td><td><a href='../Controller/deleteCtrl.php?id=".base64_encode($fam->cpf)."'>Excluir</a></td></tr>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Deficientes</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Email</th><th>Cpf</th><th>Telefone</th><th>Grau de Deficiência</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($deficiente as $def){
                                    echo "<tr><td>{$def->nome}</td><td>{$def->cpf}</td><td>{$def->telefone}</td><td>{$def->grauDeficiencia}</td><td><a href='pageEditDef.php?id=".base64_encode($def->cpf)."'>Editar</a></td><td><a href='../Controller/deleteCtrl.php?id=".base64_encode($def->cpf)."'>Excluir</a></td></tr>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Dispositivos</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Serial</th><th>Tipo</th><th>Descrição</th><th>Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($dispositivo as $disp){
                                echo "<tr><td>{$disp->serial}</td><td>{$disp->tipo}</td><td>{$disp->descricao}</td><td>{$disp->Id}</td><td><a href='pageEditDisp.php?id=".base64_encode($disp->Id)."'>Editar</a></td><td><a href='../Controller/deleteCtrl.php?id=".base64_encode($disp->Id)."'>Excluir</a></td></tr>";
                                //echo '<br><br>';
                            }
                        ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Sensores</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Descrição</th><th>Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($sensor as $sen){
                                    echo "<tr><td>{$sen->descricao}</td><td>{$sen->Id}</td><td><a href='pageEditSensor.php?id=".base64_encode($sen->Id)."'>Editar</a></td><td><a href='../Controller/deleteCtrl.php?id=".base64_encode($sen->Id)."'>Excluir</a></td></tr>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Objetos</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Nome</th><th>CPF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João</td><td>161517761</td><td><a href="#!">Atualizar</a></td><td><a href="#!">Excluir</a></td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
            <section class="col s6 m6 l6">
                <div class="">
                <h4 class="center">Lista de Residências</h4>
                <div class="divider"></div>
                <table class="highlight bordered">
                    <thead>
                        <tr>
                            <th>Nome</th><th>CPF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João</td><td>161517761</td><td><a href="#!">Atualizar</a></td><td><a href="#!">Excluir</a></td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                </div>
            </section>
        </article>
    </article>
</div>
<?php include 'includes/footer.php'; ?>
