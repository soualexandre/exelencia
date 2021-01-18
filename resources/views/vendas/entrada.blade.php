@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')

@include('alerts.success')
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
    <h2>Entradas de Caixa</h2>
  </div>


</div>
<form clas="ml-4" method="post" action="{{route('vendas.createvendasentrada')}}">
@csrf
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputState">Recebimentos</label>
      <select id="inputState" class="form-control" required name="pagamento">
        <option selected value="selecione">Selecione</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="cartao de debito">Cartão débito</option>
        <option value="cartao de credito">Cartão crédito</option>
        <option value="boleto">Boleto</option>
        <option value="cheque">Cheque</option>
        <option value="vendas em carteira">Vendas em Carteira</option>
        <option value="emprestimos">Empréstimos</option>
        <option value="pagamento antecipado">Pagamento antecipado</option>
        <option value="limite de cheque especial">Limite de cheque especial das contas bancárias</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12  ml-2">
        <label for="inputEmail4">Valor</label>
        <input type="text" class="form-control" id="valor" placeholder="Ex: 25 ,00" required name="valor">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12 ml-2">
        <label for="inputEmail4">Data</label>
        <input type="date" class="form-control" id="date" required name="data">
      </div>
    </div>

  </div>

  <button type="submit" href="{{route('vendas.createvendasentrada')}}" class="btn btn-primary">Cadastrar</button>

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
@foreach($vendasentrada as $venda)

    <tr>
      <th scope="row">{{$venda->id}}</th>
      <td>{{$venda->pagamento}}</td>
      <td>{{$venda->valor}}</td>
      <td>{{$venda->data}}</td>
      <td>
      <a href="#alterar">Alterar</a>
      <a href="{{route('vendas.destroy', $venda->id)}}">Deletar</a>

      </td>


  @endforeach

    </tr>

  </tbody>

</table>


@endsection