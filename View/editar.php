<?php
include 'includes/header.php';
include './../Controller/editarCtrl.php';
?>
<div class="">
    <article class="col s6 m6 l6">
        <article class="row">
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Familiares</h5></li>
                            <?php
                                foreach($familia as $fam){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$fam->nome}</span>"
                                        . "<p>{$fam->login} | "
                                        . "{$fam->senha}</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEdit.php?id=".base64_encode($fam->cpf)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?idfam=".base64_encode($fam->cpf)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
            
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Deficientes</h5></li>
                            <?php
                                foreach($deficiente as $def){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$def->nome}</span>"
                                        . "<p>{$def->cpf} | "
                                        . "{$def->telefone}</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEditDef.php?id=".base64_encode($def->cpf)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?iddef=".base64_encode($def->cpf)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
            
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Dispositivos</h5></li>
                            <?php
                                foreach($dispositivo as $disp){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$disp->serial}</span>"
                                        . "<p>{$disp->tipo} | "
                                        . "{$disp->descricao}</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEditDisp.php?id=".base64_encode($disp->Id)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?iddisp=".base64_encode($disp->Id)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
            
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Sensores</h5></li>
                            <?php
                                foreach($sensor as $sen){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$sen->descricao}</span>"
                                        . "<p>{$sen->Id}</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEditSensor.php?id=".base64_encode($sen->Id)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?idsen=".base64_encode($sen->Id)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
            
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Objetos</h5></li>
                            <?php
                                foreach($objeto as $o){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$o->descricao}</span>"
                                        . "<p>{$o->tipoObjeto} | "
                                        . "$o->Id</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEditObjeto.php?id=".base64_encode($o->Id)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?idob=".base64_encode($o->Id)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
            
            <section class="col s4 m4 l4">
                <ul class="collection with-header">
                    <li class="collection-header center"><h5>Residência</h5></li>
                            <?php
                                foreach($residencia as $r){
                                    echo "<li class='collection-item avatar'>"
                                        . "<span class='title'>{$r->descricao}</span>"
                                        . "<p>{$r->Id}</p>"
                                        . "<p class='secondary-content'><a class='' href='pageEditResidencia.php?id=".base64_encode($r->Id)."'>Editar</a><br>"
                                        . "<a class='' href='../Controller/deleteCtrl.php?idres=".base64_encode($r->Id)."'>Excluir</a></p>"
                                    . "</li>";
                                    //echo '<br><br>';
                                }
                            ?>
                    </ul>
            </section>
        </article>
    </article>
</div>
<?php include 'includes/footer.php'; ?>
