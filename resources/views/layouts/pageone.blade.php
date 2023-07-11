@extends('layouts.default')

@section('content')
<section class="titulo">
    {{--Cria a imagem de fundo com o titulo da pagina--}}
    <div id="img-bg" class="bg img-bg" ></div>
    <div id="title" class="title-img tamanho-container">
        <h1 class="titulo-principal">
            A solução rápida dos seus problemas<br>através da Magia Divina.
        </h1>
    </div>
</section>
<section class="objetivo">
    <div class="texto-objetivos tamanho-container">
        <div class="titulo-objetivo">
            <h2>A Magia no equilíbrio e cura<br>do ser humano e animais.</h2>
        </div>
        <h3>
            Transformação da realidade através do socorro imediato, conforto emocional, amparo espiritual, reconexão com a autoestima, restauração do equilíbrio físico, emocional e mental, abertura para a prosperidade e abundância.
            Utilização de princípios naturais e mágicos dos elementos da Natureza através da conexão com a Mãe Terra <b>(água, terra, fogo e ar);</b> princípio químico e sutil das ervas <b>(fito energia)</b>; cristais; mantras; símbolos, práticas ritualísticas e cerimoniais de limpeza, banimento, proteção e harmonização.
        </h3>
    </div>
</section>

<section id="servicos" class="atendimentos">
    <div class="container-atendimento">

        <div class="title title-atendimento">
            <h2>Quais outros tipos de terapias fazemos?</h2>
        </div>

        <div class="cards">

            <div class="card">
                <div class="card-image um"><a href="/reiki"><img src="{{ asset('atendimentos/Ses_Reiki_102.webp') }}" alt=""></a></div>
                <div class="category"> <a href="/reiki">Reiki Usui e Karuna Reiki</a></div>
            </div>

            <div class="card">
                <div class="card-image dois"><a href="/sevenReiki"><img src="{{ asset('atendimentos/ouro.jpg') }}" alt=""></a></div>
                <div class="category"> <a href="/sevenReiki">Seven Reiki / Estrela de Midas</a> </div>
            </div>

            <div class="card">
                <div class="card-image tres"><a href="/fragmentosAlma"><img src="{{ asset('atendimentos/divorcio.jpg') }}" alt=""></a></div>
                <div class="category"> <a href="/fragmentosAlma">Fragmentos de Alma / Divórcio Energético</a> </div>
            </div>

            <div class="card">
                <div class="card-image quatro"><a href="/acupunturaEterica"><img src="{{ asset('atendimentos/sistema-nervoso.jpg') }}" alt=""></a></div>
                <div class="category"> <a href="/acupunturaEterica">Acupuntura Etérica/Cura Pleidiana/Equilíbrio dos Meridianos</a></div>
            </div>

            <div class="card">
                <div class="card-image cinco"><a href="/animalReiki"><img src="{{ asset('atendimentos/animal.jpg') }}" alt=""></a></div>
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
            Terapeuta Holística natural de Governador Valadares, Minas Gerais, Brasil, 27/08/1969. Bacharel em Psicologia pela Universidade Vale do Rio Doce com especialização em Comportamento Organizacional e Gestão de Pessoas, Acadêmica da Mente N1, Holococriadora Turma 09, Master Healer, Terapeuta Reikiana (Sistemas Usui, karuna Reiki, Seven Reiki – Cristais, Estrela de Midas, Intuição e Sein Tai Chi - Master Gaia Animal Reiki, Anjos da Terra Cura). Terapeuta Quântica: Acupuntura Etérica, Apometria, Arteterapia, Chama Violeta Quântica I e II,  Comando Estelar Santa Esmeralda, Cura Pleidiana I e II, Cura Arcturiana I a IV, EFT Quântica, Equilíbrio do Fluxo – Aura, Chakras, Sono e Mental, Florais de Bach e Florais Etéricos, Geoterapia, Guia Estelar Lira e Sintonização da Herança Galática, O Despertar das Mãos Etéricas, Magias do Eu Natural, Manifestação de Midas, Mesa Radiônica da Prosperidade, Mesa Radiônica para Relacionamentos, Mesa Radiônica Saint Germain, Radiestesia e Radiônica, Sacerdócio da Ordem Melchizedek I a IV, Radiestesia, Reflexologia, Respiração Terapêutica.
        </p>
    </div>
</section>


@endsection
