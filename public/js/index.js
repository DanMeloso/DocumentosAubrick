var buttonElements = document.querySelector('button')

buttonElements.addEventListener()


/*var inputCodext = document.getElementById('codext');
var buttonBusca = document.getElementById('btnBusca');
var buttonPagamento = document.getElementById('btnPagamento');
var buttonImprimir = document.getElementById('print');
var linkAtualizar = document.getElementById('AtualizarPagina');*/


/*buttonBusca.addEventListener('click', function(event) {
    event.preventDefault();
    var codext = inputCodext.value;
    if (codext.length > 0)
        buscaAluno(codext);
});

linkAtualizar.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.reload();
});

buttonImprimir.addEventListener('click', function(event) {
    event.preventDefault();
    window.print();
});

buttonPagamento.addEventListener('click', function(event) {
    event.preventDefault();
    var value = $("input[name='formaPagamento']:checked").val();
    enviaAtendimento(value, $("#codigoAluno").val());
    //console.log(value);
    document.getElementById("btnPagamento").disabled = true
});

/*function buscaAluno(codext) {
    $.ajax({
        url: 'http://localhost:8000/api/carteirinha?codext=' + codext,
        headers: {
            'Authorization': 'db!WHn_m95yKU6UF'
        },
        dataType: 'json',
        method: 'GET',
        success: function(response) {
            if (response) {
                $("#nomeAluno").text(response.nome);
                $("#codigoAluno").val(response.codigo);
                $('#alunoMsg').text(response.nome);

                //console.log(response.nome)
                if(response.nome=="Aluno não encontrado"){
                    document.getElementById("btnPagamento").disabled = true;
                    $("#txt").hide();
                }
                else{
                    document.getElementById("btnPagamento").disabled = false;
                }

            }
        },
        error: function(error) {

            console.log("error");

        }
    });
}

function enviaAtendimento (formaPagamento, codigoAluno){
    $.ajax({
        url: 'http://localhost:8000/api/criarAtendimento',
        headers: {
            'Authorization': 'db!WHn_m95yKU6UF'
        },
        data: {
            codigoAluno: codigoAluno,
            formaPagamento: formaPagamento

        },
        method: 'post',
        dataType: 'json',

        success: function(response){
            if (response.cadastrado) {

                $("#txt").show();
                $(".buttomPrint").show();
                $(".novoPlano").show();
                $(".alunoPlano").show();
                $(".formaPagamento").hide();
                $("#ctl00_ContentPlaceHolder1_grupoCollectionControl_grupoCollectionPanel").hide();
                $(".formaPagamento").hide();
                $(".formaPagamento").hide();
                document.getElementById("btnBusca").disabled = true;
            }
        },
        error: function(error){
            console.log(error);
        }

    });
    if(formaPagamento=="umaParcela"){
        $('#planoMsg').text("Anuidade à vista – 10/12/2019");
    } else if(formaPagamento=="duasParcelas"){
        $('#planoMsg').text("Pagamento semestral – 10/12/2019 e 10/06/2020");
    }
     else if(formaPagamento=="dozeParcelas"){
        $('#planoMsg').text("12 parcelas – janeiro a dezembro");
    }
    else{
        $('#planoMsg').text("Parcela não identificada");
    }


}*/
