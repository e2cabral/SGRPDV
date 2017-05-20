<?php include 'includes/header.php'; ?>

    <article class="container">
        <h4 class="grey-text darken-4 center">Cadastrar Sensor</h4>
        <section class="row">
            <div class="col s12 m12 l12">
                <form action="../Controller/cadastrar-sensorCtrl.php" method="post">
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Descrição do sensor" name="desc" id="def">

                        </textarea>
                        <label for="def">Descrição do sensor</label>
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn  blue grey darken-4 waves-effect waves-light">
                    </div>
                </form>
            </div>
        </section>
    </article>

    <?php include 'includes/footer.php'; ?>
