<?php
include 'includes/header.php';
include './../Controller/editarPageCtrl.php';
?>
<div class="">
    <article class="col s12 m12 l12">
        <section class="container">
            <form action="../Controller/editarFinalDef.php" method="post">
                <?php foreach($deficiente as $def): ?>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu nome completo" id="nome" name="nome" value="<?php echo $def->nome; ?>" required />
                        <label for="nome">Edite o seu nome</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="number" title="Digite seu cpf" id="cpf" name="cpf" value="<?php echo $def->cpf; ?>" readonly="readonly" />
                        <label for="cpf">Não é possível editar o CPF</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite sua idade" id="idade" name="idade" value="<?php echo $def->idade; ?>" required />
                        <label for="idade">Edite o sua idade</label>
                    </div>


<!--                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu Login" id="login" name="login" value="<?php echo $def->login; ?>" required />
                        <label for="login"><?php echo $def->login; ?></label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite sua Senha" id="senha" name="senha" value="<?php echo $def->senha; ?>" required />
                        <label for="senha"><?php echo $def->senha; ?></label>
                    </div>-->


                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite o seu endereço" id="endereco" name="endereco" value="<?php echo $def->endereco; ?>" required />
                        <label for="">Edite o seu endereço</label>
                    </div>

                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite a sua cidade" id="cidade" name="cidade" value="<?php echo $def->cidade; ?>" required />
                        <label for="cidade">Edite o sua cidade</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite o seu CEP" id="cep" name="cep" value="<?php echo $def->cep; ?>" required />
                        <label for="cep">Edite o seu CEP</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu telefone" id="tel" name="tel" value="<?php echo $def->telefone; ?>" required />
                        <label for="tel">Edite o seu telefone</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu celular" id="cel" name="cel" value="<?php echo $def->celular; ?>" required />
                        <label for="cel">Edite o seu celular</label>
                    </div>
                    <div class="col s12 m12 l12 input-field">
                        <br />
                        <select name="def" >
                            <option value="<?php echo $def->grauDeficiencia; ?>" readonly selected><?php echo $def->grauDeficiencia; ?></option>
                            <option value="Congenita">Congênita</option>
                            <option value="Adquirida">Adquirida</option>
                        </select>

                        <label for="def">Informe o seu grau de parentesco</label>
                        <input type="submit" name="cadastrar" value="Atualizar" class="btn  blue grey darken-4">
                    </div>
                <?php endforeach; ?>
                </form>
        </section>
    </article>

</div>
<?php include 'includes/footer.php'; ?>
