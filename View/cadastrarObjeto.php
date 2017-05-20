<?php include 'includes/header.php'; ?>

    <article class="container">
        <h4 class="grey-text darken-4 center">Cadastrar Óculos</h4>
        <section class="row">
            <div class="col s12 m12 l12">
                <form action="../Controller/cadastrarObjeto.php" method="post">
                    <br />
                    <div class="col s12 m12 l12 input-field">
                        <br>
                        <select class="select-label" name="tipo">
                            <option value="" disabled="disabled">Escolha o objeto</option>
                            <option value="Oculos">Óculos</option>
                            <option value="Bengala">Bengala</option>
                        </select>
                        <label for="disc">Tipo do Objeto</label>
                    </div>
                    <div class="col s12 m12 l12 input-field">
                        <br>
                        <textarea class="materialize-textarea" name="desc">
                            
                        </textarea>
                        <label for="disc">Descrição do Objeto</label>
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn blue grey darken-4 waves-effect waves-light">
                    </div>
                </form>
            </div>
        </section>
    </article>

    <?php include 'includes/footer.php'; ?>
