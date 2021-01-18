@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="title">Bem vindo ao Excelência Sistemas!</h4>
          <p class="category">Desenvolvido por
            <a href="https://www.c2atech.com.br">C2A Techonoly</a>
          </p>
        </div>
        <div class="card-header" style="text-align: center;">
        <h4>Escolha a opção desejada:</h4>
        </div>

        <div class="card-body all-icons">
          <div class="row">
            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
           <a href="{{route('vendas.index')}}">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">VENDAS</h4>
                <p class="category">Clique e saiba mais sobre suas vendas, entradas e saídas de caixa</p>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-coins"></i> 
                <h4 class="mt-4">FLUXO DE CAIXA</h4>
                <p class="category">Aqui você tem acesso total ao fluxo de caixa da sua empresa.</p>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-notes"></i>
                <h4 class="mt-4">DRE SINTÉTICA</h4>
                <p class="category">Demonstração do resultado do Exercício de forma mais resumida.</p>

              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-single-copy-04"></i>
                <h4 class="mt-4">DRE ANALÍTICA</h4>
                <p class="category">Demonstração do resultado do Exercício de forma mais detalhada.</p>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-paper"></i>
                <h4 class="mt-4">RESUMO DO MÊS</h4>
                <p class="category">Todas as informações da sua empresa você encontra aqui.</p>
              </div>
            </a>
            </div>
            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-money-coins"></i>
                <h4 class="mt-4">SALDOS BANCÁRIOS</h4>
                <p class="category">Para consulta de saldos da empresa, clique aqui.</p>
                
              </div>
            </a>
            </div>
          </div>
        </div>
        </div>
        </div>

@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
