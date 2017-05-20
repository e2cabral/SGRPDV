<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="">
    <article class="col s12 m12 l12">
        <section class="container">
            <form action="../Controller/editarFinalData.php" method="post">
                <?php foreach($familia as $fam): ?>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu nome completo" id="nome" name="nome" value="<?php echo $fam->nome; ?>" required />
                        <label for="nome"><?php echo $fam->nome; ?></label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="number" title="Digite seu cpf" id="cpf" name="cpf" value="<?php echo $fam->cpf; ?>" readonly="readonly"/>
                        <label for="cpf"><?php echo $fam->cpf; ?></label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite sua idade" id="idade" name="idade" value="<?php echo $fam->idade; ?>" required />
                        <label for="idade"><?php echo $fam->idade; ?></label>
                    </div>


                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu Login" id="login" name="login" value="<?php echo $fam->login; ?>" required />
                        <label for="login"><?php echo $fam->login; ?></label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite sua Senha" id="senha" name="senha" value="<?php echo $fam->senha; ?>" required />
                        <label for="senha"><?php echo $fam->senha; ?></label>
                    </div>


                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite o seu endereço" id="endereco" name="endereco" value="<?php echo $fam->endereco; ?>" required />
                        <label for=""><?php echo $fam->endereco; ?></label>
                    </div>

                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite a sua cidade" id="cidade" name="cidade" value="<?php echo $fam->cidade; ?>" required />
                        <label for="cidade"><?php echo $fam->cidade; ?></label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite o seu CEP" id="cep" name="cep" value="<?php echo $fam->cep; ?>" required />
                        <label for="cep"><?php echo $fam->cep; ?></label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu telefone" id="tel" name="tel" value="<?php echo $fam->telefone; ?>" required />
                        <label for="tel"><?php echo $fam->telefone; ?></label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu celular" id="cel" name="cel" value="<?php echo $fam->celular; ?>" required />
                        <label for="cel"><?php echo $fam->celular; ?></label>
                    </div>
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <textarea class="materialize-textarea" title="Informe o seu grau de parentesco" name="def" id="def">
                            <?php echo $fam->grauParentesco; ?>
                        </textarea>
                        <label for="def">Informe o seu grau de parentesco</label>
                        <input type="submit" name="cadastrar" value="Atualizar" class="btn  blue grey darken-4">
                    </div>
                <?php endforeach; ?>
                </form>
        </section>
    </article>

</div>
<?php include 'includes/footer.php'; ?>
