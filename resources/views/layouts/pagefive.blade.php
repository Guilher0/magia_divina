@extends('layouts.default')

@section('content')
<section class="titulo">
    {{--Cria a imagem de fundo com o titulo da pagina--}}
    <div id="img-bg5" class="bg5 img-bg5" ></div>
    <div id="title" class="title-img tamanho-container">
        <h1 class="title-divorcio" style="font-size: 60px; text-align:start;">
            Equilíbrio dos chakras e meridianos trazendo saúde e melhor fluxo da vida.
        </h1>
    </div>
</section>
<section class="objetivo">
    <div class="texto-objetivos tamanho-container">
        <div class="titulo-objetivo">
            <h2>Acupuntura Etérica</h2>
        </div>
        <h3>
            Colocação de agulhas de Acupuntura de forma etérica (fluídica) em pontos específicos do corpo humano e dos animais para recepção da energia Ki (essência da vida).
        </h3>

        <div class="titulo-objetivo">
            <h2>Cura Pleidiana</h2>
        </div>
        <h3>
            Harmonização dos principais centros de força para o despertar espiritual através da ativação de uma frequência amorosa profunda. Utiliza o poderoso símbolo Flor da Vida.
        </h3>

        <div class="titulo-objetivo">
            <h2>Equilíbrio dos Meridianos Níveis 1 a 10</h2>
        </div>
        <h3>
            <b>Nível 1 e 2:</b> limpeza dos Meridianos (linhas de energia que percorrem a superfície do corpo, ligadas aos órgãos vitais) com a dissolução de bloqueios energéticos. <b>Nível 3 e 4:</b> trabalha questões emocionais do passado ressignificando situações de conflito. <b>Nível 5 e 6:</b> Equilibra as energias masculinas e femininas do sistema energético, o Yin e o Yang, auxiliando na resolução de conflitos de gênero. <b>Nível 7 e 8:</b> Alinha o indivíduo com sua chama interior, favorecendo clareza de raciocínio e esperança num futuro melhor. Auxilia a transcender pequenas preocupações. <b>Nível 9 e 10:</b> Trabalha a resistência em todos os níveis, especialmente se houver estagnação, procrastinação. Libera a energia vital (Ki), permitindo um melhor fluxo na vida. Possibilita a conexão com ideias e pessoas positivas.
        </h3>
    </div>
</section>

<section id="servicos" class="atendimentos">
    <div class="container-atendimento">

        <div class="title title-atendimento">
            <h2>Quais outros tipos de serviço fazemos?</h2>
        </div>

        <div class="cards">

            <div class="card">
                <div class="card-image um"></div>
                <div class="category"> <a href="/reiki">Reiki Usui e Karuna Reiki</a></div>
            </div>

            <div class="card">
                <div class="card-image dois"></div>
                <div class="category"> <a href="/sevenReiki">Seven Reiki / Estrela de Midas</a> </div>
            </div>

            <div class="card">
                <div class="card-image tres"></div>
                <div class="category"> <a href="/fragmentosAlma">Fragmentos de Alma / Divórcio Energético</a> </div>
            </div>

            <div class="card">
                <div class="card-image quatro"></div>
                <div class="category"> <a href="/acupunturaEterica">Acupuntura Etérica/Cura Pleidiana/Equilíbrio dos Meridianos</a></div>
            </div>

            <div class="card">
                <div class="card-image cinco"></div>
                <div class="category"> <a href="/animalReiki">Gaia Animal Reiki</a></div>
            </div>
        </div>
    </div>
</section>

{{-- Criando parte da "Jornada" da Simone --}}
<section id="jornada" class="jornada">
    <div class="title tamanho-container">
        <h2>
            Minha Jornada
        </h2>
    </div>
    <div class="perfil tamanho-container">
        <figure class="foto-perfil">
            <img src="{{ asset('perfil/293283772_6060383903988787_7740042795123711964_n.jpg') }}" alt="perfil">
            <figcaption class="texto-perfil">
                Simone Chaves<br>Miranda Esposito
            </figcaption>
        </figure>
    </div>

    <div class="texto-jornada tamanho-container">
        <p>
            Terapeuta Holística natural de Governador Valadares, Minas Gerais, Brasil, 27/08/1969. Bacharel em Psicologia pela Universidade Vale do Rio Doce com especialização em Comportamento Organizacional e Gestão de Pessoas, Acadêmica da Mente N1, Holococriadora Turma 09, Maga, Master Healing, Terapeuta Reikiana (Sistemas Usui, karuna Reiki, Seven Reiki – Cristais, Estrela de Midas, Intuição e Sein Tai Chi - Master Gaia Animal Reiki, Anjos da Terra Cura). Terapeuta Esotérica: Acupuntura Etérica, Apometria, Arteterapia, Chama Violeta Quântica I e II,  Comando Estelar Santa Esmeralda, Cura Pleidiana I e II, Cura Arcturiana I a IV, EFT Quântica, Equilíbrio do Fluxo – Aura, Chakras, Sono e Mental, Florais de Bach e Florais Etéricos, Geoterapia, Guia Estelar Lira e Sintonização da Herança Galática, O Despertar das Mãos Etéricas, Magias do Eu Natural, Manifestação de Midas, Mesa Radiônica da Prosperidade, Mesa Radiônica para Relacionamentos, Mesa Radiônica Saint Germain, Radiestesia e Radiônica, Sacerdócio da Ordem Melchizedek I a IV, Radiestesia, Reflexologia, Respiração Terapêutica.
        </p>
    </div>
</section>


@endsection
