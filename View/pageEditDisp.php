<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="">
    <article class="col s12 m12 l12">
        <section class="container">
            <form action="../Controller/editarFinalDisp.php" method="post">
                <?php foreach($disp as $d): ?>
                <div class="input-field">
                    <input type="text" value="<?php echo base64_decode(filter_input(INPUT_GET, 'id')); ?>" readonly="readonly" name="id" />
                </div>
                <div class="col s6 m6 l6 input-field">
                    <input type="text" title="Digite seu nome completo" id="serial" name="serial" value="<?php echo $d->serial; ?>" />
                        <label for="serial">Descrição da porta serial</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <select class="" name="tipo" required>
                            <option value="" disabled="disabled"><?php echo $d->tipo; ?></option>
                            <option value="Uno" class="active">Arduino Uno</option>
                            <option value="Leonardo">Arduino Leonardo</option>
                            <option value="Mega">Arduino Mega</option>
                            <option value="Nano">Arduino Nano</option>
                            <option value="Genuino">Arduino Genuino</option>
                            <option value="Outro">Arduino Outro</option>
                        </select>
                    </div>
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Descriçao do sensor" name="desc" id="desc">
                            <?php echo $d->descricao; ?>
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
