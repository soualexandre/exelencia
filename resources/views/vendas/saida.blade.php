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
        <h2>Saídas de Caixa</h2>
    </div>


</div>
<form clas="ml-4">
    <h4><b>Tributos:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o Tributo</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="dinheiro">Simples Nacional</option>
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


<form clas="ml-4">
    <h4><b>Custo Aquisição/Custo da Compra:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o custo</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Fornecedores</option>
                <option value="">Frete sobre compras</option>
                <option value="">ICMS Diferencial de Aliquota</option>
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

<form clas="ml-4">
    <h4><b>Gasto com vendas:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de gasto</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Combustível / Frete na venda</option>
                <option value="">Taxa do Aluguel das máquinas de cartão</option>
                <option value="">Marketing</option>
                <option value="">Parceiros</option>
                <option value="">Frete sobre vendas</option>
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

<form clas="ml-4">
    <h4><b>Gasto com pessoal:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de gasto pessoal</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Salários Bruto</option>
                <option value="">Sindicato</option>
                <option value="">Vales/adiantamentos</option>
                <option value="">13° Salário</option>
                <option value="">Férias</option>
                <option value="">Rescisões Contratuais</option>
                <option value="">Uniformes</option>
                <option value="">Exames Médicos</option>
                <option value="">Jantas/Lanches/Bebidas</option>
                <option value="">Prêmios e outros benefícios</option>
                <option value="">Benefício Social - Sindicato</option>
                <option value="">Pró - Labore Sócio 1</option>
                <option value="">Pró - Labore Sócio 2</option>      
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

<form clas="ml-4">
    <h4><b>Despesas Administrativas:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de despesa</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Taxa e tarifas das contas corrente</option>
                <option value="">Manutenção do veículo da empresa</option>
                <option value="">Material de Limpeza</option>
                <option value="">Manutenção de Máquinas e equipamentos</option>
                <option value="">Serviço Copa</option>
                <option value="">Cartório</option>  
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

<form clas="ml-4">
    <h4><b>Despesas Financeiras:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha qual o tipo de despesa financeira</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Juros - venda no débito</option>
                <option value="">Juros - venda no crédito</option>
                <option value="">Juros - cheque especial</option>
                <option value="">Juros - antecipação de vendas cartão</option>
                <option value="">Juros - não identificado</option>
               
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
<form clas="ml-4">
    <h4><b>Encargos Sociais e demais despesas:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha a despesa</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Perdas, prejuizos, desperdícios</option>
                <option value="">Reformas e manutenção - predial, móveis, máquinas</option>
                <option value="">INSS s/Pró -Labore</option> 
                <option value="">Taxas Municipais</option>
                <option value="">FGTS</option>
                <option value="">IOF</option>  
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

<form clas="ml-4">
    <h4><b>Pagamento de Empréstimos e Financiamentos:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de despesa de pagamento</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Empréstimo para investimentos</option>
                <option value="">Pagamento de parcelamento de impostos</option>
                <option value="">Juros</option> 
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

<form clas="ml-4">
    <h4><b>Compra de Imobilizado:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de despesa de compra</label>
            <select id="inputState" class="form-control">
                <option selected value="selecione">Selecione</option>
                <option value="">Máquinas e equipamentos</option>
                <option value="">Móveis e Utensilios</option>
                <option value="">investimento Predial</option> 
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

<form clas="ml-4">
    <h4><b>Demais movimentações Financeiras:</b></h4>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="inputState">Escolha o tipo de despesa de compra</label>
          <input type="text" class="form-control" id="demais" placeholder="Digite as demais despesas">
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

<!--Inicio Tabela -->
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