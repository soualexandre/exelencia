<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendas;
use App\Models\VendasEntrada;
use Illuminate\Support\Facades\DB;


class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;

        $vendas = Vendas::where('id_usuario', $id)->orderBy('id', 'DESC')->paginate('8');

        return view('vendas.index', compact('vendas'));
    }

    public function entrada(){

        $vendasentrada = VendasEntrada::orderBy('id', 'DESC')->paginate('8');

        return view('vendas.entrada',compact('vendasentrada'));
    }

    public function saida(){
        return view('vendas.saida');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pagamento = $request->input('pagamento');
        $valor = $request->input('valor');
        $data = $request->input('data');
        $id = auth()->user()->id;
        
        DB::insert('insert into vendas (pagamento, valor, data, id_usuario) values (?, ?, ?, ?)', [$pagamento, $valor, $data, $id]);

        return back()->withStatus(__('Operação adicionada com sucesso'));

    }

    public function vendasentrada(Request $request)
    {
        $validated = $request->validate([
            'pagamento' => 'required|max:255',
            'valor' => 'required',
            'data' => 'required',
        ]);
        
        VendasEntrada::create($validated);

        $vendasentrada = VendasEntrada::orderBy('id', 'DESC');

        return back()->withStatus(__('Operação adicionada com sucesso'));

    }


    public function fluxo(Request $request)
    {
       
        $id = auth()->user()->id;

        $vendas = Vendas::where('id_usuario', $id)->orderBy('id', 'DESC')->paginate('50');

        return view('caixa.fluxoCaixa', compact('vendas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendas = Vendas::find($id);
        $vendas->delete();
        return back()->withPasswordStatus(__('A notícia foi deletada'),compact('vendas'));
    }
}
