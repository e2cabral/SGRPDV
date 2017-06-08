<?php include 'View/includes/header-out.php' ?>
<?php
//include_once 'Controller/processo.php';
?>
<br /><br />
<div class="container">
    <article class="row background-input">
        <section class="col s12 m6 l6">
            <ul class="tabs transparent">
                <li class="tab"><a href="#entrar" class="grey-text" title="Clique aqui para entrar">Entrar</a></li>
                <li class="tab"><a href="#cadastrar" class="grey-text" title="Clique aqui para se cadastrar">Cadastrar-se</a></li>
            </ul>
            <div id="entrar">
                <br />
                <br />
                <form action="Controller/logarCtrl.php" method="post" class="grey-text">
                    <div class="input-field">
                        <input type="text" name="login" id="login" class="validate" title="Login" required>
                        <label for="login">Login</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="senha" id="senha" class="validate" title="Senha" required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="input-field center">
                        <input type="submit" value="Entrar" class="waves-effect waves-light btn-large blue-grey darken-4" title="Clique aqui para entrar">
                    </div>
                </form>
            </div>
            <div id="cadastrar">
                <br />
                <br />
                <section class="row">
                    <div class="col s6 m6 l6">
                        <form action="Controller/cadastrarCtrl.php" method="post">
                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite seu nome completo" id="nome" name="nome" required />
                                <label for="nome">Digite seu nome completo</label>
                            </div>
                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite seu cpf" id="cpf" name="cpf" required />
                                <label for="cpf">Digite seu CPF</label>
                            </div>
                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite sua idade" id="idade" name="idade" required />
                                <label for="idade">Digite sua idade</label>
                            </div>


                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite seu Login" id="login" name="login" required />
                                <label for="login">Digite seu Login</label>
                            </div>
                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite sua Senha" id="senha" name="senha" required />
                                <label for="senha">Digite sua Senha</label>
                            </div>


                            <div class="col s6 m6 l6 input-field">
                                <input type="text" title="Digite o seu endereço" id="endereco" name="endereco" required />
                                <label for="">Digite o seu endereço</label>
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
                            <div class="col s6 m6 l6 input-field">
                                <br />
                                <textarea class="materialize-textarea" title="Informe o seu grau de parentesco" name="def" id="def">

                                </textarea>
                                <label for="def">Informe o seu grau de parentesco</label>
                                <input type="submit" name="cadastrar" value="Cadastrar" class="btn  blue grey darken-4">
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
        <section class="col s12 m6 l6">
            <h4 class="grey-text text-darken-4">Sistema de <strong>Gerenciamento Residencial</strong> para Pessoas com <strong>Deficiência Visual</strong></h4>
            <p class="grey-text">O projeto da casa inteligente tem a foco de agregar uma maior autonomia para pessoas com deficiência visual. Esta residência e os acessórios como o óculos e bengala podem ser utilizados por deficientes visuais de diferentes idades desde uma criança que já anda sem auxílio de seus pais até mesmo um deficiente que esteja com seus 70 anos de idade ou mais.
                Ambos podem utilizar sistema e os acessórios com menor preocupações e maior segurança, porque os objetos que auxiliam são identificados como sistema de GPS. Movidos em aumentar a qualidade de vida, conforto, proteção e autonomia desse importante grupo de deficiente visual que são mais de 35 milhões de pessoas.
                O projeto utiliza as tecnologias da  internet das coisas em uma residência como também na concepção de uma bengala e um óculos voltado para atender necessidades de pessoas com deficiência visual, desde as atividades mais básicas ou até mesmo as mais complexas que teriam de ter o auxílio de uma outra pessoa, como ir a outros lugares, não andar em lugares que põe o risco do deficiente. Essa tecnologia vem suprir as necessidades especiais de seus usuários, além de oferecer mais tenacidade e autonomia ao público deficiente visual.
            </p>
        </section>
    </article>
</div>


<br /><br />
<footer class="page-footer transparent">
    <div class="container">
        <div class="footer-copyright">© 2017 Copyright by Edson & Alex, All rights reserved.</div>
    </div>
</footer>
<script src="View/js/jquery-3.1.1.min.js"></script>
<script src="View/js/main.js"></script>
<script src="View/materialize/js/materialize.min.js"></script>
</body>

</html>
