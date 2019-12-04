<?php

define("URL_PREFIX","");

//INCLUDE API
include_once("api/definitions.php");

//INCLUDE VIEWS
include_once("views/head.php");
include_once("views/header.php");

?>
    <br>
    <div id="alert-del" class="alert alert-success alert-dismissible fade show noshow" role="alert">
        Carga limpada com sucesso e pode ser vista no histórico.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="container card-fixed">
        <div class="card-body">
            <h3 class="card-title title">Minhas Cargas:</h3>
            <div class="col-sm h3">
                <div class="row">
                    <span class="col-sm"><b>Carga</b></span>
                    <span class="col-sm"><b>Status</b></span>
                    <span class="col-sm"><b>Preço</b></span>
                    <span class="col-sm"><b>Motorista</b></span>
                    <span class="col-sm"><b></b></span>
                </div>
                <div class="row" id="carga1">
                    <span class="col-sm">Carga 1</span>
                    <span class="col-sm text-success">Entregue</span>
                    <span class="col-sm">R$ 850,00</span>
                    <span class="col-sm">João</span>
                    <span class="col-sm"><i class="col-sm-2 fas fa-trash-alt text-dark" onclick="apagar(1)" data-toggle="tooltip" data-placement="right" title="Limpar"></i></span>
                </div>
                <div class="row" id="carga2">
                    <span class="col-sm">Carga 2</span>
                    <span class="col-sm text-warning">Transporte</span>
                    <span class="col-sm">R$ 650,00</span>
                    <span class="col-sm">Paulo</span>
                    <span class="col-sm"><i class="col-sm-2 fas fa-eye text-info" onclick="mostrar(2)" data-toggle="tooltip" data-placement="right" title="Ver"></i></span>
                </div>
                <div class="row" id="carga3">
                    <span class="col-sm">Carga 3</span>
                    <span class="col-sm text-danger">Procurando...</span>
                    <span class="col-sm">R$ 1050,00</span>
                    <span class="col-sm">Procurando...</span>
                    <span class="col-sm"><i class="col-sm-2 fas fa-times-circle text-danger" data-toggle="tooltip" data-placement="right" title="Cancelar"></i></span>
                </div>
                <div class="row noshow" id="carga4">
                    <span class="col-sm" id="nome4">Texto</span>
                    <span class="col-sm text-danger">Procurando...</span>
                    <span class="col-sm" id="preco4">Texto</span>
                    <span class="col-sm">Procurando...</span>
                    <span class="col-sm"><i class="col-sm-2 fas fa-times-circle text-danger" data-toggle="tooltip" data-placement="right" title="Cancelar"></i></span>
                </div>
            </div>
            <br>
            <button id="cadastrocarga" class="btn btn-info" data-toggle="modal" data-target="#modalcadastro">Cadastrar Carga</button>
            <button class="btn btn-dark">Histórico de Cargas</button><br>
        </div>
    </div>
    
    <div id="modalcadastro" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro de Carga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="carganome" name="carganome" class="form-control" placeholder="Nome da Carga" required><br>
                <input type="text" id="preco" name="preco" class="form-control" placeholder="Preço" required><br>
                <input type="text" name="tipocarga" class="form-control" placeholder="Tipo de Carga" required><br>
                <input type="text" name="tipocarroceria" class="form-control" placeholder="Tipo de Carroceria" required><br>
                <input type="text" name="peso" class="form-control" placeholder="Peso" required><br>
                <input type="text" name="origem" class="form-control" placeholder="Endereço de origem" required><br>
                <input type="text" name="ceporigem" class="form-control" placeholder="CEP de origem" required><br>
                <input type="text" name="destino" class="form-control" placeholder="Endereço de destino" required><br>
                <input type="text" name="cepdestino" class="form-control" placeholder="CEP de destino" required><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="criarcarga()" data-dismiss="modal">Cadastrar Carga</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button><br><br><br>
            </div>
            </div>
        </div>
    </div>

<?php

include_once("views/footer.php");

?>
<script>

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('#modalcadastro').on('shown.bs.modal', function () {
        $('#cadastrocarga').trigger('focus')
    })

    function apagar(carganum){
        switch(carganum) {
            case 1: {
                $("#carga1").hide();
                $("#alert-del").show();
                console.log("Carga 1 apagada");
                break;
            }
            case 2: {
                $("#carga2").hide();
                console.log("Carga 2 apagada");
                break;
            }
            case 3: {
                $("#carga3").hide();
                console.log("Carga 3 apagada");
                break;
            }
            default: console.log("error: numero de carga inválido");
        }
    }
    function editar(carganum){
        switch(carganum) {
            case 1: {
                console.log("Carga 1 editada");
                break;
            }
            default: console.log("error: numero de carga inválido");
        }
    }
    function criarcarga() {
        carganome = $("#carganome").val();
        preco = "R$ " + $("#preco").val();

        $('#nome4').html(carganome);
        $('#preco4').html(preco);
        //$('#carga4').show();
        $('#carga4').css("display","flex");
    }
</script>