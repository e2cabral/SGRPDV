<?php include 'includes/header.php'; ?>

    <article class="container">
        <h4 class="grey-text darken-4 center">Cadastrar Dispositivo</h4>
        <section class="row">
            <div class="col s12 m12 l12">
                <form action="../Controller/cadastrarDispositivoCtrl.php" method="post">
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu nome completo" id="serial" name="serial" required />
                        <label for="serial">Descrição da porta serial</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <select class="" name="tipo" required>
                            <option value="" disabled="disabled">Selecione o tipo de Dispositivo</option>
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
                        <textarea name="desc" class="materialize-textarea">

                        </textarea>
                        <label for="desc">Descrição do dispositivo</label>
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn blue grey darken-4 waves-effect waves-light">
                    </div>
                </form>
            </div>
        </section>
    </article>

    <?php include 'includes/footer.php'; ?>
