@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')
<div class="row">
        <div class="col-md-12">
           <h1>Vendas do dia</h1>
        </div>
    </div>
<form clas="ml-4">
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputState">Pagamento</label>
      <select id="inputState" class="form-control">
        <option selected value="selecione">Selecione</option>
        <option value="dinheiro" >Dinheiro</option>
        <option value="debito" >Cartão débito</option>
        <option value="crédito">Cartão crédito</option>
        <option value="boleto">Boleto</option>
        <option value="cheque">Cheque</option>
      </select>
    </div>
    <div class="form-row">
    <div class="form-group col-md-9 col-lg-12  ml-2">
      <label for="inputEmail4">Valor</label>
      <input type="text" class="form-control" id="valor" placeholder="Ex: 25,00">
    </div>
</div>

    <div class="form-row">
    <div class="form-group col-md-9 col-lg-12 ml-2">
      <label for="inputEmail4">Data</label>
      <input type="date" class="form-control" id="date">
    </div>      
    </div>

    
   
</div>



</form>

<hr>
@endsection
