<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<h2>Cadastro</h2>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control>"
                id="nome" name="nome" placeholder="Nome">
        </div>

        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text"
                class="form-control>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text"
                class="form-control>"
                id="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>

        <div class="form-group col-md-6">
            <input type="radio"
                class="form-control"
                id="Sexo" name="sexo">
            <label for="sexo">Sexo</label>
        </div>
    </div>

        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text"
                class="form-control>"
                id="salario" name="salario"
                placeholder="Salário">
        </div>
    </div>

    <button class="btn btn-primary btn-lg">Enviar</button>
</form>