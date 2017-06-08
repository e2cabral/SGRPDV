<?php include 'includes/header.php'; ?>
<?php require_once '../Controller/impressaoConsulta.php'; ?>
<article class="col s12 m12 l12">
    <div class="container">
        <div class=" grey-text grey-darken-4">
            <form action="" method="post">
                <div class="input-field">
                    <input type="text" name="cpf" />
                    <label for="cpf">Digite o seu CPF </label>
                </div>
                <div class="input-field">
                    <input type="submit" name="enviar" value="Consultar" class="btn waves-effect waves-light blue-grey darken-4" />
                </div>
            </form>
        </div>
    </div>
</article>
<br>
<br>
<br>
<article class="container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Imprimir</th>
            </tr>
        </thead>

        <tbody>
            <?php
            //../Controller/impressaoConsulta.php
            //var_dump($imp);
            foreach ($imp as $i) {
                echo "<tr><td>".$i->nome."</td><td>".$i->cpf."</td><td><a href=impressaoPdf.php?".base64_encode($i->cpf).">Visualizar Impressão</a></td></tr>";
            }
            //echo filter_input(INPUT_POST, 'cpf');
            ?>
        </tbody>
    </table>
</article>
<?php include 'includes/footer.php'; ?>
