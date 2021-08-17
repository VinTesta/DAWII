<?php
require_once("../util/dao-loader.php");
// VERIFICAR SE O CLIENTE JÁ NÃO ESTA CADASTRADO E BLOQUEA-LO
?>

<section class="container-cadastro">
    <div class="box-form">
        <h1 class="tittle-cadastro">Cadastro de Cliente</h1>
        <form action="../cadastro-cliente/" method="post">
            <label class="label-input-form" for="nome_cliente"><i class="icon-input-form fas fa-user"></i>
            <input class="input-form" placeholder="Nome Completo" type="text" name="nome_cliente" id="nome_cliente">
            </label>

            <label class="label-input-form" for="email_cliente"><i class="icon-input-form fas fa-envelope"></i>
            <input class="input-form" placeholder="E-mail válido" type="email" name="email_cliente" id="email_cliente">
            </label>

            <label class="label-input-form" for="senha_cliente"><i class="icon-input-form fas fa-key"></i>
            <input class="input-form" placeholder="Senha" type="password" name="senha_cliente" id="senha_cliente">
            </label>

            <label class="label-input-form" for="confirma_senha_cliente">
            <input class="input-form" placeholder="Confirmar Senha" type="password" name="confirma_senha_cliente" id="confirma_senha_cliente">
            </label>
            
            <label for="opcao_email"><i class="fas fa-inbox"></i>Desejo receber e e-mails e promoções!
            <input class="check-form" type="checkbox" name="opcao_email" id="opcao_email">
            </label>

            <button type="submit" class="btn-form" id="btnEnviaFormulario" name="btnEnviaFormulario">Sign Up</button>
        </form>
    </div>
</section>
