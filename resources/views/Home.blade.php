<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escolha certa</title>
</head>
<body>
    <h2 style="display: none" id="casoDe">
        Vamos entender e resolver:
    </h2>
    <!--PRIMEIRA PERGUNTA-->
    <p id="primeiraPergunta">
        No seu conflito atual você acha necessário 
        um intermedio de um terceiro para ser solucionado?
    </p>
    <button id="primeiraPerguntaSimJuridico" onclick="simJuridicoFunction()">
        Sim, uma autoridade do poder juridico
    </button> 
    <button id="primeiraPerguntaSim" onclick="simFunction()">
        Sim, porém esse não necessita ser do poder juridico
    </button>
    <button id="primeiraPerguntaNao" onclick="naoFunction()">
        Não, pois acredito que podemos resolver esse problema sem envolver mais pessoas
    </button>
    <!--PRIMEIRA PERGUNTA-->

    <!-- PERGUNTA -->
    <p style="display: none" id="perguntaSobreProvasEEvidencias">
        Você acredita que através de provas e evidencias analisadas 
        por um intermediador(do poder juridico)
        o conflito pode ser encerrado da melhor maneira possível?
    </p>
    <button style="display: none" id="perguntaSobreProvasEEvidenciasSim" onclick="SimProvasEEvidenciasFunction()">
        Sim
    </button>

    <button style="display: none" id="perguntaSobreProvasEEvidenciasNao" onclick="NaoProvasEEvidenciasFunction()"> 
        Não
    </button>
    <!-- PERGUNTA -->

    <!--SEGUNDA PERGUNTA-->
    <p style="display: none">
        Você acredita que o conflito pode ser encarado de uma forma
        a melhorar o laço entre os individuos presentes nele?
    </p>
    <button style="display: none">
        Sim
    </button>
    <button style="display: none">
        Não
    </button>
    <!--SEGUNDA PERGUNTA-->

    <!-- TERCEIRA PERGUNTA -->
    <p style="display: none">
        Você acredita que algum dos envolvidos pode vir a ceder, afim de
        apaziguar o conflito?
    </p>
    <button style="display: none"> 
        Sim
    </button>
    <button style="display: none">
        Não
    </button>
    <!-- TERCEIRA PERGUNTA -->

    <!-- QUARTA PERGUNTA -->
    <p style="display: none" id="intermediadorDeveInterferirMais">
        No estado atual do conflito você acredita que o intermediador deve 
        ser mais presente ou menos diante ao conflito?   
    </p>

    <button style="display: none" id="intermediadorMaisPresente" onclick="intermediadorMaisPresenteFunction()">
        Mais presente
    </button>

    <button style="display: none" id="intermediadorMenosPresente" onclick="intermediadorMenosPresenteFunction()">
        Menos presente
    </button>
    <!-- QUARTA PERGUNTA -->

    <p style="display: none" id="melhorarLaco">
        Você gostaria de usar esse conflito como um meio para fortalecer os lanços entre
        os individuos presentes nele?
    </p>

    <button style="display: none" id="melhorarLacoSim" onclick="melhorarLacoSimFunction()">
        Sim, seria muito interessante.
    </button>

    <button style="display: none" id="melhorarLacoNao" onclick="melhorarLacoNaoFunction()">
        Não, essa não é uma prioridade nesse caso.
    </button>

    <p style="display: none" id="cederDoConflito">
        Em sua opinião você acredita que algum dos individuos presente no conflito 
        está disposto a "ceder" alguns dos seus direitos ou posicionamento a fim de finalizar esse
        conflito de maneira mais simples?
    </p>

    <button style="display: none" id="cederDoConflitoSim" onclick="cederDoConflitoSimFunction()">
        Sim.
    </button>

    <button style="display: none" id="cederDoConflitoNao" onclick="cederDoConflitoNaoFunction()">
        Não.
    </button>

    <!-- HETEROCOMPOSITIVO -->

    <p style="display: none" id="Heterocompositivo">
        Atualmente você parece estar situado em 
        métodos adversariais heterocompositivos: nesses casos a
        solução independe da vontade dos litigantes, pois é tomada
        por um terceiro (juiz ou arbitro), ocorrendo a colheita de
        provas e análise dos argumentos das partes, sendo que o
        terceiro substitui a vontade das partes.
        <br>
        DICA: Os conflitos não costumam se resolver somente no juridico,
        pois acabam deixando "pontas soltas". (Mas caso seja a única opção,
        é interessante encontrar bons profissonais que possam estar te dando
        o melhor auxilio no setor juridico). 
    </p>
    <!-- HETEROCOMPOSITIVO -->

    <!-- Conciliacao -->
    <p style="display: none" id="Conciliacao">
        Conciliação: mecanismo de obtenção da autocomposição,
        que pode ser desenvolvido por juiz ou conciliador, com a
        participação mais efetiva desse terceiro, na proposta de
        solução, visando solucionar o conflito (Calmon).
        É um processo técnico, desenvolvido pelo método
        consensual, autocompositivo, em que terceiro imparcial,
        auxilia as partes com perguntas, propostas e sugestões a
        encontrar soluções que possam atender aos seus interesses,
        materializando um acordo
    </p>
    <!-- Conciliacao -->

    <!-- MEDIAÇÃO -->
    <p style="display: none" id="Mediacao">
        Mediação: técnica de resolução de conflitos intermediada
        por um terceiro que tem por objetivo solucionar
        pacificamente as divergências entre as pessoas,
        fortalecendo suas relações (com o menor desgaste possível)
        preservando os laços de confiança e os compromissos
        recíprocos que os vinculam (Bacellar).
    </p>
    <!-- MEDIAÇÃO -->

    <!-- negociação -->
    <p style="display: none" id="Negociacao">
        Negociação: técnica destinada a resolver diretamente
        divergências de interesses que tem por objetivo criar,
        manter ou evoluir um relacionamento baseado na
        confiança, gerando compromissos múltiplos e facilitando a
        formulação de opções para um acordo ou de novos acordos.
        (Bacellar).
    </p>

    <!-- negociação -->

    <!-- unilateral -->
    <p style="display: none" id="unilateral">
        Unilateral: quando parte de um dos envolvidos; se
        dividindo em: - renúncia: quando aquele que deduz
        pretensão abre mão da mesma (abandona) sem qualquer
        exigência; não necessita de anuência (concordância) da
        parte contrária;
        - submissão: quando a parte devedora abre mão da sua
        resistência, concordando totalmente com a pretensão da
        parte contrária.
    </p>
    <!-- unilateral -->

    <!-- bilateral -->
    <p style="display: none" id="bilateral">
        b)Bilateral: quando a composição parte de ambos, que se
        manifesta pela transação, que é o acordo caracterizado por
        concessões recíprocas, ou seja, quando os envolvidos
        abrem mão parcialmente do que entendem ser seu de
        direito, diferente do abandono da pretensão (autor) ou do
        abandono da resistência (requerido). É um sacrifício
        recíproco de interesses, onde cada parte abdica
        parcialmente se suas pretensões.
    </p>
    <!-- bilateral -->
</body>
</html>

<script>
    function naoFunction()
    {
        var p = document.getElementById("primeiraPergunta")
        var buttonSimJuridico =  document.getElementById("primeiraPerguntaSimJuridico")
        var buttonSim = document.getElementById("primeiraPerguntaSim")
        var buttonNao = document.getElementById("primeiraPerguntaNao")

        var p2 = document.getElementById("melhorarLaco")
        var buttonMelhorarLacoSim = document.getElementById("melhorarLacoSim")
        var buttonmelhorarLacoNao = document.getElementById("melhorarLacoNao")

        p.style.display = "none";
        buttonSimJuridico.style.display = "none";
        buttonSim.style.display = "none";
        buttonNao.style.display = "none";

        p2.style.display = "block";
        buttonMelhorarLacoSim.style.display = "block";
        buttonmelhorarLacoNao.style.display = "block";
    }
    function simJuridicoFunction()
    {
        var p = document.getElementById("primeiraPergunta")
        var buttonSimJuridico =  document.getElementById("primeiraPerguntaSimJuridico")
        var buttonSim = document.getElementById("primeiraPerguntaSim")
        var buttonNao = document.getElementById("primeiraPerguntaNao")

        var p2 = document.getElementById("perguntaSobreProvasEEvidencias")
        var buttonProvasEEvidenciasSim = document.getElementById("perguntaSobreProvasEEvidenciasSim")
        var buttonProvasEEvidenciasNao = document.getElementById("perguntaSobreProvasEEvidenciasNao")

        p.style.display = "none";
        buttonSimJuridico.style.display = "none";
        buttonSim.style.display = "none";
        buttonNao.style.display = "none";

        p2.style.display = "block";
        buttonProvasEEvidenciasSim.style.display = "block";
        buttonProvasEEvidenciasNao.style.display = "block";
    }
    function simFunction()
    {
        var p = document.getElementById("primeiraPergunta")
        var buttonSimJuridico =  document.getElementById("primeiraPerguntaSimJuridico")
        var buttonSim = document.getElementById("primeiraPerguntaSim")
        var buttonNao = document.getElementById("primeiraPerguntaNao")

        var pIntermediadorDeveInterferirMais = document.getElementById("intermediadorDeveInterferirMais");
        var buttonIntermediadorMaisPresente = document.getElementById("intermediadorMaisPresente");
        var buttonIntermediadorMenosPresente = document.getElementById("intermediadorMenosPresente");

        p.style.display = "none";
        buttonSimJuridico.style.display = "none";
        buttonSim.style.display = "none";
        buttonNao.style.display = "none";

        pIntermediadorDeveInterferirMais.style.display = "block";
        buttonIntermediadorMaisPresente.style.display = "block";
        buttonIntermediadorMenosPresente.style.display = "block";
    }


    function melhorarLacoNaoFunction()
    {
        var p = document.getElementById("melhorarLaco")
        var buttonMelhorarLacoSim = document.getElementById("melhorarLacoSim")
        var buttonmelhorarLacoNao = document.getElementById("melhorarLacoNao")

        var pCederDoConflito = document.getElementById("cederDoConflito");
        var buttonCederDoConflitoSim = document.getElementById("cederDoConflitoSim");
        var buttonCederDoConflitoNao = document.getElementById("cederDoConflitoNao");

        p.style.display = "none";
        buttonMelhorarLacoSim.style.display = "none";
        buttonmelhorarLacoNao.style.display = "none";

        pCederDoConflito.style.display = "block";
        buttonCederDoConflitoSim.style.display = "block";
        buttonCederDoConflitoNao.style.display = "block";
    }
    function melhorarLacoSimFunction()
    {
        var p = document.getElementById("melhorarLaco")
        var buttonMelhorarLacoSim = document.getElementById("melhorarLacoSim")
        var buttonmelhorarLacoNao = document.getElementById("melhorarLacoNao")

        var h2CasoDe = document.getElementById("casoDe");
        var negociacao = document.getElementById("Negociacao");

        p.style.display = "none";
        buttonMelhorarLacoSim.style.display = "none";
        buttonmelhorarLacoNao.style.display = "none";

        h2CasoDe.style.display = "block"
        negociacao.style.display = "block";
    }



    function SimProvasEEvidenciasFunction()
    {
        var p = document.getElementById("perguntaSobreProvasEEvidencias");
        var buttonPerguntaSobreProvasEEvidenciasSim = document.getElementById("perguntaSobreProvasEEvidenciasSim");
        var buttonPerguntaSobreProvasEEvidenciasNao = document.getElementById("perguntaSobreProvasEEvidenciasNao");
        var h2CasoDe = document.getElementById("casoDe");
        var Heterocompositivo = document.getElementById("Heterocompositivo");

        p.style.display = "none";
        buttonPerguntaSobreProvasEEvidenciasSim.style.display = "none";
        buttonPerguntaSobreProvasEEvidenciasNao.style.display = "none";

        h2CasoDe.style.display = "block"
        Heterocompositivo.style.display = "block"
    }
    function NaoProvasEEvidenciasFunction()
    {
        var p = document.getElementById("perguntaSobreProvasEEvidencias");
        var buttonPerguntaSobreProvasEEvidenciasSim = document.getElementById("perguntaSobreProvasEEvidenciasSim");
        var buttonPerguntaSobreProvasEEvidenciasNao = document.getElementById("perguntaSobreProvasEEvidenciasNao");
        var pIntermediadorDeveInterferirMais = document.getElementById("intermediadorDeveInterferirMais");
        var buttonIntermediadorMaisPresente = document.getElementById("intermediadorMaisPresente");
        var buttonIntermediadorMenosPresente = document.getElementById("intermediadorMenosPresente");

        p.style.display = "none";
        buttonPerguntaSobreProvasEEvidenciasSim.style.display = "none";
        buttonPerguntaSobreProvasEEvidenciasNao.style.display = "none";

        pIntermediadorDeveInterferirMais.style.display = "block";
        buttonIntermediadorMaisPresente.style.display = "block";
        buttonIntermediadorMenosPresente.style.display = "block";
    }


    function intermediadorMaisPresenteFunction()
    {
        var pIntermediadorDeveInterferirMais = document.getElementById("intermediadorDeveInterferirMais");
        var buttonIntermediadorMaisPresente = document.getElementById("intermediadorMaisPresente");
        var buttonIntermediadorMenosPresente = document.getElementById("intermediadorMenosPresente");
        
        var h2CasoDe = document.getElementById("casoDe");
        var conciliacao = document.getElementById("Conciliacao");

        pIntermediadorDeveInterferirMais.style.display = "none";
        buttonIntermediadorMaisPresente.style.display = "none";
        buttonIntermediadorMenosPresente.style.display = "none";

        h2CasoDe.style.display = "block";
        conciliacao.style.display = "block";
    }
    function intermediadorMenosPresenteFunction()
    {
        var pIntermediadorDeveInterferirMais = document.getElementById("intermediadorDeveInterferirMais");
        var buttonIntermediadorMaisPresente = document.getElementById("intermediadorMaisPresente");
        var buttonIntermediadorMenosPresente = document.getElementById("intermediadorMenosPresente");
        var h2CasoDe = document.getElementById("casoDe");
        var mediacao = document.getElementById("Mediacao");

        pIntermediadorDeveInterferirMais.style.display = "none";
        buttonIntermediadorMaisPresente.style.display = "none";
        buttonIntermediadorMenosPresente.style.display = "none";

        h2CasoDe.style.display = "block";
        mediacao.style.display = "block";
    }

    function cederDoConflitoSimFunction()
    {
        var pCederDoConflito = document.getElementById("cederDoConflito");
        var buttonCederDoConflitoSim = document.getElementById("cederDoConflitoSim");
        var buttonCederDoConflitoNao = document.getElementById("cederDoConflitoNao");

        var h2CasoDe = document.getElementById("casoDe");
        var unilateral = document.getElementById("unilateral");

        pCederDoConflito.style.display = "none";
        buttonCederDoConflitoSim.style.display = "none";
        buttonCederDoConflitoNao.style.display = "none";

        h2CasoDe.style.display = "block";
        unilateral.style.display = "block";
    }

    function cederDoConflitoNaoFunction()
    {
        var pCederDoConflito = document.getElementById("cederDoConflito");
        var buttonCederDoConflitoSim = document.getElementById("cederDoConflitoSim");
        var buttonCederDoConflitoNao = document.getElementById("cederDoConflitoNao");

        var h2CasoDe = document.getElementById("casoDe");
        var bilateral = document.getElementById("bilateral");

        pCederDoConflito.style.display = "none";
        buttonCederDoConflitoSim.style.display = "none";
        buttonCederDoConflitoNao.style.display = "none";

        h2CasoDe.style.display = "block";
        bilateral.style.display = "block";
    }

</script>