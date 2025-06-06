<?php
namespace App\Http\Controllers; 
use App\Models\Categoria;
use App\Models\Producto; 
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /*
    Display a listing of the resource.
    */
    public function index()
    {
        $productos = Producto::orderBy('marca')->paginate(10); 
        return view('productos.index', compact('productos'));
    }

    /*
    Show the form for creating a new resource.
    */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /*
    Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    /*
    Display the specified resource.
    */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto'), compact('categorias'));
    }

    /*
    Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all(); 
        
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /*
    Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        Producto::find($id)->update($request->all()); return redirect()->route('productos.index');
    }

    /*
    Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Producto::find($id)->delete();
        return redirect()->route('productos.index');
    }
}
