<!DOCTYPE html>
<html>
<head id="ctl00_Head1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name='csrf-token' content='{{csrf_token()}}' />
    <meta charset="UTF-8" />
    <title> Terminal Web - Documentos </title>
    <link href="{{asset('css/main.css')}}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/main2.css')}}" rel="stylesheet" type="text/css" />

    <script type="text/javascript">

        function centralizar() {
            var cortinaDialogo = $('div[id$="CortinaDialogo"]');
            var dialogo = $('div[class$="dialogo"]');
            dialogo.center();
            cortinaDialogo.centerCortina();
        };
    </script>
<body>
<form name="aspnetForm" method="post" action="./Arquivo.aspx" onsubmit="javascript:return WebForm_OnSubmit();" id="aspnetForm">
    <div>
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
        <input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['aspnetForm'];
        if (!theForm) {
            theForm = document.aspnetForm;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
        //]]>
    </script>
    <script type="text/javascript" language="javascript">
        function RedimensionaPopup(x,y)
        {
            var ifr = document.getElementById("fraPopup");
            ifr.width = x;
            ifr.height = y;
            var ipn = document.getElementById("ctl00_Panel1");
            ipn.width = x;
            ipn.height = y;
        }
    </script>
    <script type="text/javascript" language="javascript">
        function CancelaPopup()
        {
            var pn = xGetElementById("ctl00_Panel1");
            pn.visible = false;
            __doPostBack('ctl00_lkbRefresh','');
        }
    </script>
    <script type="text/javascript">
        //<![CDATA[
        var __cultureInfo = {"name":"pt-BR","numberFormat":{"CurrencyDecimalDigits":2,"CurrencyDecimalSeparator":",","IsReadOnly":true,"CurrencyGroupSizes":[3],"NumberGroupSizes":[3],"PercentGroupSizes":[3],"CurrencyGroupSeparator":".","CurrencySymbol":"R$","NaNSymbol":"NaN (Não é um número)","CurrencyNegativePattern":9,"NumberNegativePattern":1,"PercentPositivePattern":1,"PercentNegativePattern":1,"NegativeInfinitySymbol":"-Infinito","NegativeSign":"-","NumberDecimalDigits":2,"NumberDecimalSeparator":",","NumberGroupSeparator":".","CurrencyPositivePattern":2,"PositiveInfinitySymbol":"+Infinito","PositiveSign":"+","PercentDecimalDigits":2,"PercentDecimalSeparator":",","PercentGroupSeparator":".","PercentSymbol":"%","PerMilleSymbol":"?","NativeDigits":["0","1","2","3","4","5","6","7","8","9"],"DigitSubstitution":1},"dateTimeFormat":{"AMDesignator":"","Calendar":{"MinSupportedDateTime":"\/Date(-62135589600000)\/","MaxSupportedDateTime":"\/Date(253402300799999)\/","AlgorithmType":1,"CalendarType":1,"Eras":[1],"TwoDigitYearMax":2029,"IsReadOnly":true},"DateSeparator":"/","FirstDayOfWeek":0,"CalendarWeekRule":0,"FullDateTimePattern":"dddd, d\u0027 de \u0027MMMM\u0027 de \u0027yyyy HH:mm:ss","LongDatePattern":"dddd, d\u0027 de \u0027MMMM\u0027 de \u0027yyyy","LongTimePattern":"HH:mm:ss","MonthDayPattern":"dd\u0027 de \u0027MMMM","PMDesignator":"","RFC1123Pattern":"ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","ShortDatePattern":"dd/MM/yyyy","ShortTimePattern":"HH:mm","SortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","TimeSeparator":":","UniversalSortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","YearMonthPattern":"MMMM\u0027 de \u0027yyyy","AbbreviatedDayNames":["dom","seg","ter","qua","qui","sex","sáb"],"ShortestDayNames":["D","S","T","Q","Q","S","S"],"DayNames":["domingo","segunda-feira","terça-feira","quarta-feira","quinta-feira","sexta-feira","sábado"],"AbbreviatedMonthNames":["jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez",""],"MonthNames":["janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro",""],"IsReadOnly":true,"NativeCalendarName":"Calendário gregoriano","AbbreviatedMonthGenitiveNames":["jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez",""],"MonthGenitiveNames":["janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro",""]},"eras":[1,"d.C.",null,0]};//]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        function WebForm_OnSubmit() {
            if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
            return true;
        }
        //]]>
    </script>

    <div>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="236576AB" />
        <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="f6Ew8e3J5dYEZz6JsceWNz2dn1q2rkuBdEhNRaflAbaN6oithcjbCuP02bg+LoQvLuQac52BALfo5J+Bzat/Vh1gf3jscxYq6BmLuXPYk8PZjTskPBj8EF/aJ9OJ6r1JmJtTdkwO0Uy2cqmpM+4hSJf9kJLUnMDjABFVeI5gkYEczSKHvTxoJVFMMyEa9YP2Rwijz5QiMP/MI4h+FwVoQR0lvigPCOJplj3ISYSU0xqPDbtCZeC/WxI+mruJycwF5AhEail0nBjGTTgPdUcM/rBkTQpjxKVv3ftP4Q66C2o27YmLrsx573sT8H2JgZsl" />
    </div>
    <input type="hidden" name="ctl00$numeroSerieHiddenField" id="numeroSerieHiddenField" value="6715" />
    <div id="div-navegador-incompativel" class="dn">
        <label id="navegadorIncompativelLabel"></label>
    </div>
    <div id="mainDiv">
        <div id="cabecalhoDiv">
            <img id="ctl00_imgLogo" src="{{asset('images/logo-aubrick.png')}}" alt="ASSOCIAÇÃO EDUCACIONAL CAMPO BELO" style="border-width:0px;"  />

            <span id="ctl00_LabelNomeUnidade" class="informacaoUnidade p80">Entrega de Documentos</span>
        </div>

        <div id="dadosUsuarioDiv" class="db mb10">
					<span class="m6">
						<span id="ctl00_nomeResponsavel" class="dib">
						</span>
						<span class="dib m6">
							<span id="ctl00_lbNome">Seja bem-vindo {{$fisica->NOME}}.</span>
						</span>
					</span>
            <span class="f-r mr10">
						<a id="ctl00_linkSair" href="http://localhost/sg_web/default.aspx?escola=6725">Sair</a>
					</span>
        </div>

        <div id="menuDiv">
            <a href="Default.aspx?iPos=0" title="Mural de avisos"></a>
            <a href="http://localhost/sg_web/default.aspx?escola=6725" title="Voltar">
						<span id="ctl00_liArquivos" class="selecionado">
							<img src="{{asset('images/icon.png')}}" alt="Meus arquivos" />
							Voltar
						</span>
            </a>
            <a href="FichaCadastral.aspx" title="Ficha cadastral"></a>
            <a href="FichaFin.aspx" title="Ficha financeira do usuário"></a>
            <a href="#" title="Documentos">
						<span id="ctl00_liConsulta">
							<img src="{{asset('images/icon-comment.png')}}" alt="Consultas" />
							Documentos
						</span>
            </a>
            <a href="Frequencia.aspx" title="Lançamento de frequência dos alunos"></a>
            <a href="LancNotas.aspx" title="Lançamento de notas dos alunos"></a>
            <a href="PlanejamentoAulas.aspx" title="Lançamento do planejamento de aula"></a>
            <a href="Solicitacao.aspx" title="Solicitações do usuário"></a>
            <a href="Rematricula.aspx" title="Rematrículas disponíveis"></a>
            <a href="CursosEAD.aspx" id="ctl00_aCursoEAD" title="Cursos EAD"></a>
            <a href="ParecerDescritivo.aspx" title="Parecer descritivo"></a>
        </div>

        <div id="conteudoDiv">
            <script type="text/javascript">
                function SelectDisc(comp)
                {
                    //Indica se esta checado ou não
                    var bChecado = comp.checked;

                    for (i=0;i < this.theForm.elements.length;i++)
                    {
                        if(this.theForm.elements[i].type == "checkbox")
                        {
                            if ((this.theForm.elements[i].id != "ctl00_ContentPlaceHolder1_cbkdisciplinas") &&
                                (this.theForm.elements[i].id != "ctl00_ContentPlaceHolder1_chbPublico"))
                            {
                                this.theForm.elements[i].checked = bChecado;
                            }
                        }
                    }
                }

                function fraPopupConfirma()
                {
                    var resp = fraPopup.confirma();
                    if (resp)
                    {
                        var vlkbOk = document.getElementById("ctl00_ContentPlaceHolder1_lkbRefresh");
                        vlkbOk.click();
                    }
                }

                function fraPopupCancela()
                {
                    fraPopup.cancela();
                }
            </script>

            <div id="controleArquivosDiv">
                <div class="menu">
                    <div id="ctl00_ContentPlaceHolder1_menuUpdatePanel"></div>
                    <div id="ctl00_ContentPlaceHolder1_carregandoUpdateProgress" style="display:none;">
                        <div class="carregando">
                            <div>
                                <span>Aguarde...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="ctl00_ContentPlaceHolder1_filtroArquivoUpdatePanel">
                        <fieldset class="w655 mlauto mrauto db">
                            <legend></legend>
                        </fieldset>
                        <div id="ctl00_ContentPlaceHolder1_grupoCollectionControl_grupoCollectionPanel" class="grupo_collection_control">
                            <div>
                                <div id="ctl00_ContentPlaceHolder1_grupoCollectionControl_grupoControl0_descricaoPanel" class="tituloCollapsiblePanelExtender">
                                    <span id="ctl00_ContentPlaceHolder1_grupoCollectionControl_grupoControl0_descricaoLabel">Listagem de documentos da matrícula</span>
                                </div>

                                <div id="">
                                    <table class="grid" cellspacing="1" border="1" id="" style="border-collapse:collapse;">
                                        <thead>
                                        <tr>
                                            <th>Documento</th>
                                            <th>Entregue</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($matr_doc as $doc)
                                            <tr>
                                                <td><span>{{ $documentos::find($doc->DOCUMENTO)->DESCRICAO}}</span></td>
                                                <td><span>@if ( $doc->APRESENTADO == 1) Entregue @else Pendente @endif</span></td>

                                                <td class="text-center">
                                                    <form action="{{route('enviar.create')}}" method="post" enctype="multipart/form-data">
                                                        <input type="file" data-id="{{$doc->DOCUMENTO}}"/>
                                                        <input type="submit"/>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <input type="hidden" name="ctl00$ContentPlaceHolder1$grupoCollectionControl$grupoControl0$arquivoCollectionCollapsiblePanelExtender_ClientState" id="ctl00_ContentPlaceHolder1_grupoCollectionControl_grupoControl0_arquivoCollectionCollapsiblePanelExtender_ClientState" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="alunoPlano" id="alunoPlan" style="display:none;">
                <strong>
                    <p id="alunoMsg" style="margin: 2px;"></p>
                    <p id="planoMsg" style="margin: 2px;" value=null>*Plano de pagamento*</p>
                </strong>
            </div>
            <div class="textos" id="txt" style="display:none;">
                <strong>
                    <p id="msg1" style="margin: 2px;">Processo Concluído com Sucesso.</p>
                </strong>
                <p id="msg2" style="margin: 2px;">Em breve os boletos bancários serão encaminhados por e-mail. </p>
                <p id="msg3" style="margin: 2px;">Aguarde o Contrato de Prestação de Serviços Educacionais 2020 e Requerimento de Matrícula que serão enviados via Aplicativo Aubrick.</p>
            </div>
            <div class="novoPlano" style="display:none;">
                <a href="#AtualizaPagina" id="AtualizarPagina" > Escolher o plano de pagamento de outro aluno</a>
            </div>
        </div>
        <div class=buttomPrint style="display:none;">
            <input type="image" src="{{asset('images/print.png')}}" name="printPage" class="btnPrint" id="print">
            <p>Imprimir Página</p>
        </div>


        <div id="rodape">
					<span class="f-l">
						<span id="ctl00_lbInfoUnid1" class="db"></span>
						<span id="ctl00_lbInfoUnid2" class="db"></span>
					</span>
            <span class="f-r">
						<a id="primaA" href="http://www.prima.com.br" title="Desenvolvido por Prima" target="_blank">
							<img id="ctl00_ImageLogoPrima" src="{{asset('images/logotipo-Sophia-Rodape.png')}}" alt="SophiA" style="border-width:0px;" />
						</a>
					</span>
        </div>

        <script type="text/javascript">
            function fraPopupCancela() {
                var pn = xGetElementById("ctl00_Panel1");
                pn.visible = false;
                fraPopup.cancela();
            };
        </script>
        <span id="ctl00_SpanScript"></span>
    </div>

    <script type="text/javascript">
        //<![CDATA[
        var Page_Validators =  new Array(document.getElementById("ctl00_ContentPlaceHolder1_dataInicialCompareValidator"), document.getElementById("ctl00_ContentPlaceHolder1_dataFinalCompareValidator"));
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[
        /*var ctl00_ContentPlaceHolder1_dataInicialCompareValidator = document.all ? document.all["ctl00_ContentPlaceHolder1_dataInicialCompareValidator"] : document.getElementById("ctl00_ContentPlaceHolder1_dataInicialCompareValidator");
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.controltovalidate = "ctl00_ContentPlaceHolder1_dataInicialTextBox";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.errormessage = "Data inválida";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.display = "Dynamic";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.validationGroup = "FiltroArquivo";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.type = "Date";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.dateorder = "dmy";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.cutoffyear = "2029";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.century = "2000";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.evaluationfunction = "CompareValidatorEvaluateIsValid";
            ctl00_ContentPlaceHolder1_dataInicialCompareValidator.operator = "DataTypeCheck";
        var ctl00_ContentPlaceHolder1_dataFinalCompareValidator = document.all ? document.all["ctl00_ContentPlaceHolder1_dataFinalCompareValidator"] : document.getElementById("ctl00_ContentPlaceHolder1_dataFinalCompareValidator");
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.controltovalidate = "ctl00_ContentPlaceHolder1_dataFinalTextBox";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.errormessage = "Data inválida";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.display = "Dynamic";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.validationGroup = "FiltroArquivo";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.type = "Date";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.dateorder = "dmy";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.cutoffyear = "2029";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.century = "2000";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.evaluationfunction = "CompareValidatorEvaluateIsValid";
            ctl00_ContentPlaceHolder1_dataFinalCompareValidator.operator = "DataTypeCheck";
        //]]>*/
    </script>


    <script type="text/javascript">
        //<![CDATA[

        var Page_ValidationActive = false;
        if (typeof(ValidatorOnLoad) == "function") {
            ValidatorOnLoad();
        }

        function ValidatorOnSubmit() {
            if (Page_ValidationActive) {
                return ValidatorCommonOnSubmit();
            }
            else {
                return true;
            }
        }
    </script>
</form>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-16322340-1', 'auto');
    ga('send', 'pageview');

</script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
