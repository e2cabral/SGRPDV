<?php include 'includes/header.php'; ?>

    <article class="container">
        <h4 class="grey-text darken-4 center">Cadastrar Usuários</h4>
        <section class="row">
            <div class="col s12 m12 l12">
                <form action="../Controller/cadastrarDeficienteCtrl.php" method="post">
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite seu nome completo" id="nome" name="nome" required />
                        <label for="nome">Digite seu nome completo</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="number" title="Digite seu cpf" id="cpf" name="cpf" required />
                        <label for="cpf">Digite seu CPF</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite sua idade" id="idade" name="idade" required />
                        <label for="idade">Digite sua idade</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite o seu endereço" id="endereco" name="endereco" required />
                        <label for="">Digite o seu endereço</label>
                    </div>
                    <div class="col s6 m6 l6 input-field">
                        <input type="text" title="Digite o seu bairro" id="bairro" name="bairro" required />
                        <label for="bairro">Digite o seu bairro</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite a sua cidade" id="cidade" name="cidade" required />
                        <label for="cidade">Digite a sua cidade</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="text" title="Digite o seu CEP" id="cep" name="cep" required />
                        <label for="cep">Digite o seu CEP</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu telefone" id="tel" name="tel" required />
                        <label for="tel">Digite o seu telefone</label>
                    </div>
                    <div class="col s12 m6 l6 input-field">
                        <input type="tel" title="Digite o seu celular" id="cel" name="cel" required />
                        <label for="cel">Digite o seu celular</label>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <select name="def">
                            <option value="" disabled selected>Escolha uma opção</option>
                            <option value="congenita">Congênita</option>
                            <option value="adquirida">Adquirida</option>
                        </select>
                        <!--<label for="def">Informe seu grau de deficiência</label>-->
                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn blue grey darken-4">
                    </div>
                </form>
            </div>
        </section>
    </article>

    <?php include 'includes/footer.php'; ?>
