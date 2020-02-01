<?php require_once('header.php'); ?>

<section>
    <!-- CADASTRO CLIENTE -->
    <div class="row">
        <div class="col-4">
            <div class="row align-items-start justify-content-center">
                <h3 id="txtCliente">Novo Cliente</h3>
            </div>
            <div class="row align-items-end justify-content-center">
                <img src="images/modern_woman.svg" class="imgCliente">
            </div>
        </div>

        <div class="col-8">
            <form>
                <!-- PRIMEIRA LINHA -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome Completo</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome completo">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTelefone">Telefone</label>
                        <input type="text" class="form-control" id="inputTelefone" placeholder="(011) 9 9999-9999">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCPF">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" placeholder="123.456.789-00">
                    </div>
                </div>

                <!-- SEGUNDA LINHA -->
                <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="somemail@email.com">
                </div>

                <!-- TERCEIRA LINHA -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEndr">Endereço</label>
                        <input type="text" class="form-control" id="inputEndr" placeholder="Main St.">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputEndrNum">Número</label>
                        <input type="number" class="form-control" id="inputEndrNum" placeholder="123">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP" placeholder="12.345-678">
                    </div>
                </div>
            </form>
            <div class="row flexcontainerCadastroCliente">
                <button type="submit" class="btnSubmit btn btn-primary">Cadastrar Cliente</button>
                <a href="cadastro-animal.php"><button type="submit" class="btnCadastroAnimal btn btn-primary">Cadastrar Animal</button></a>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>