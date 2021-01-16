@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')
<div class="row">
  <div class="col-md-12">

    <!--Inicio DropDown -->
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{route('vendas.index')}}">Vendas Efetivadas - DRE</a>
        <a class="dropdown-item" href="{{route('vendas.entrada')}}">Entradas de Caixa</a>
        <a class="dropdown-item" href="{{route('vendas.saida')}}">Saídas de Caixa</a>
      </div>
    </div>
    <h2>Vendas Efetivadas - DRE</h2>
  </div>


</div>
<form clas="ml-4" method="post" action="{{route('vendas.create')}}" >
@csrf
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputState">Pagamento</label>
      <select id="inputState" class="form-control" required name="pagamento">
        <option selected value="selecione">Selecione</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="debito">Cartão débito</option>
        <option value="crédito">Cartão crédito</option>
        <option value="boleto">Boleto</option>
        <option value="cheque">Cheque</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12  ml-2">
        <label for="inputEmail4">Valor</label>
        <input type="text" class="form-control" id="valor" placeholder="Ex: 25,00" required name="valor">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12 ml-2">
        <label for="inputEmail4">Data</label>
        <input type="date" class="form-control" id="date" required name="data">
      </div>
    </div>

  </div>

  <button type="submit" class="btn btn-primary"  href="{{route('vendas.create')}}">Cadastrar Venda</button>

</form>

<hr>
<div class="col-md-12">
  <h3>Informações</h3>

</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pagamento</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
@foreach($vendas as $venda)

    <tr>
      <th scope="row">{{$venda->id}}</th>
      <td>{{$venda->pagamento}}</td>
      <td>{{$venda->valor}}</td>
      <td>{{$venda->data}}</td>
      <td>
      <a href="#alterar">Alterar</a>
      <a href="#alterar">Deletar</a>

      </td>


  @endforeach

    </tr>

  </tbody>

</table>
{{$vendas->links()}}


@endsection