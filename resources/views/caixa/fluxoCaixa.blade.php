@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
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
                    {{$venda->data}}
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