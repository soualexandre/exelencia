@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

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
              <div class="font-icon-detail">
                <h4 class="mt-4">Vendas no mês</h4>
                <h1>200</h1>
              </div>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                <h4 class="mt-4">Vendas no mês</h4>
                <h1>200</h1>
              </div>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                <h4 class="mt-4">Vendas no mês</h4>
                <h1>200</h1>
              </div>
            </div>

            <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail">
                <h4 class="mt-4">Vendas no mês</h4>
                <h1>200</h1>
              </div>
            </div>


          </div>
        </div>
     

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    
                  </th>
                  <th>
                   Pagamento
                  </th>
                  <th>
                    Valor
                  </th>
                  <th>
                   Data
                  </th>
                </thead>
                <tbody>
                @foreach($vendas as $venda)
                  <tr>
                    <td>
                      
                    </td>
                    <td>
                      {{$venda->pagamento}}
                    </td>
                    <td>
                    {{$venda->valor}}
                    </td>
                    <td>
                    {{date('d/m/y', strtotime($venda->data))}} 
                    </td>
                   
                  </tr>
         @endforeach
           
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


@endsection