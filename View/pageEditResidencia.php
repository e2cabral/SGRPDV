<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="">
    <article class="col s6 m6 l6">
        <section class="container">
            <form action="../Controller/editarFinalResidencia.php" method="post">
                <?php foreach($res as $r): ?>
                <div class="input-field">
                    <input type="text" value="<?php echo base64_decode(filter_input(INPUT_GET, 'id')); ?>" readonly="readonly" name="id" />
                </div>
                    <div class="col s6 m6 l6 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Descriçao do sensor" name="desc" id="desc">
                            <?php echo $r->descricao; ?>
                        </textarea>
                        <label for="def">Descrição do sensor</label>
                        <input type="submit" name="cadastrar" value="Atualizar" class="btn  blue grey darken-4">
                    </div>
                <?php endforeach; ?>
                </form>
        </section>
    </article>

</div>
<?php include 'includes/footer.php'; ?>
