@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">100 Awesome Nucleo Icons</h5>
          <p class="category">Handcrafted by our friends from
            <a href="https://nucleoapp.com/?ref=1712">NucleoApp</a>
          </p>
        </div>

        <div class="card-body all-icons">
          <div class="row">
            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
           <a href="{{route('vendas.index')}}">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">VENDAS</h4>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">FLUXO DE CAIXA</h4>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">DRE SINTÉTICA</h4>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">DRE ANALÍTICA</h4>
              </div>
            </a>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">RESUMO DO MÊS</h4>
              </div>
            </a>
            </div>
            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <a href="">
              <div class="font-icon-detail">
                <i class="tim-icons icon-cart"></i>
                <h4 class="mt-4">SALDOS BANCÁRIOS</h4>
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
