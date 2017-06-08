<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="row">
    <article class="col s12 m12 l12">
        <section class="container">
            <form action="../Controller/editarFinalSensor.php" method="post">
                <?php foreach($sensor as $sen): ?>
                <div class="input-field">
                    <input type="text" value="<?php echo base64_decode(filter_input(INPUT_GET, 'id')); ?>" readonly="readonly" name="id" />
                </div>
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Descriçao do sensor" name="desc" id="desc">
                            <?php echo $sen->descricao; ?>
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
