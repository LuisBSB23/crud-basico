<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }
    
    public function create()
    {
        return view('pedidos.create');
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', ['pedido' => $pedido]);
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', ['pedido' => $pedido]);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        
        $request->validate([
            'cliente' => 'required|string|max:255',
            'produto' => 'required|string|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
        ]);

        $pedido->update([
            'cliente' => $request->cliente,
            'produto' => $request->produto,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco
        ]);
        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    public function delete($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.delete', ['pedido' => $pedido]);
    }
     
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
    
        return redirect()->route('pedidos.index')->with('success', 'Pedido excluído com sucesso!');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'produto' => 'required|string|max:255',
            'quantidade' => 'required|numeric',
            'preco' => 'required|numeric',
        ]);
    
        $pedido = Pedido::create([
            'cliente' => $request->cliente,
            'produto' => $request->produto,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco,
        ]);
    
        return redirect()->route('pedidos.show', ['id' => $pedido->id])->with('success', 'Pedido cadastrado com sucesso!');
    }
}

