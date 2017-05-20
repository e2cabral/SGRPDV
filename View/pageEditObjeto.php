<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="">
    <article class="col s12 m12 l12">
        <section class="container">
            <form action="../Controller/editarFinalObjeto.php" method="post">
                <?php foreach($ob as $o): ?>
                <div class="input-field">
                    <input type="text" value="<?php echo base64_decode(filter_input(INPUT_GET, 'id')); ?>" readonly="readonly" name="id" />
                </div>
                <div class="col s12 m12 l12 input-field">
                        <br>
                        <select class="select-label" name="tipo">
                            <option value="" disabled="disabled"><?php echo $o->tipoObjeto; ?></option>
                            <option value="Oculos">Óculos</option>
                            <option value="Bengala">Bengala</option>
                        </select>
                        <label for="disc">Tipo do Objeto</label>
                    </div>
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Descriçao do sensor" name="desc" id="desc">
                            <?php echo $o->descricao; ?>
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
