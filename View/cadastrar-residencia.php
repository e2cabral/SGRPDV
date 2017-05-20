<?php include 'includes/header.php'; ?>

    <article class="container">
        <h4 class="grey-text darken-4 center">Cadastrar Residência</h4>
        <section class="row">
            <div class="col s12 m12 l12">
                <form action="../Controller/cadastrarResidencia.php" method="post">
                    <br />
                    <div class="col s12 m12 l12 input-field">
                        <br>
                        <textarea name="desc" id="desc" class="materialize-textarea">

                        </textarea>
                        <label for="disc">Descrição da residencia</label>
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn  blue grey darken-4 waves-effect waves-light">
                    </div>
                </form>
            </div>
        </section>
    </article>

    <?php include 'includes/footer.php'; ?>
