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
    <h2>Entradas de Caixa</h2>
  </div>


</div>
<form clas="ml-4">
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputState">Recebimentos</label>
      <select id="inputState" class="form-control">
        <option selected value="selecione">Selecione</option>
        <option value="dinheiro">Dinheiro</option>
        <option value="debito">Cartão débito</option>
        <option value="crédito">Cartão crédito</option>
        <option value="boleto">Boleto</option>
        <option value="cheque">Cheque</option>
        <option value="cheque">Vendas em Carteira</option>
        <option value="cheque">Empréstimos</option>
        <option value="cheque">Pagamento antecipado</option>
        <option value="cheque">Limite de cheque especial das contas bancárias</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12  ml-2">
        <label for="inputEmail4">Valor</label>
        <input type="text" class="form-control" id="valor" placeholder="Ex: 25 ,00">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-9 col-lg-12 ml-2">
        <label for="inputEmail4">Data</label>
        <input type="date" class="form-control" id="date">
      </div>
    </div>

  </div>

  <button type="button" class="btn btn-primary">Cadastrar</button>

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
    <tr>
      <th scope="row">1</th>
      <td>Credito</td>
      <td>R$150,00</td>
      <td>09/03/1998</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Debito</td>
      <td>R$160,00</td>
      <td>09/03/1998</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Boleto</td>
      <td>R$190,00</td>
      <td>09/03/1998</td>
    </tr>
  </tbody>
</table>


@endsection