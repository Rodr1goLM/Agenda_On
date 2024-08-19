namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::all();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        return view('unidades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'pais' => 'required',
        ]);

        Unidade::create($request->all());
        return redirect()->route('unidade.index')->with('success', 'Unidade criada com sucesso.');
    }

    public function show(Unidade $unidade)
    {
        return view('unidades.show', compact('unidade'));
    }

    public function edit(Unidade $unidade)
    {
        return view('unidades.edit', compact('unidade'));
    }

    public function update(Request $request, Unidade $unidade)
    {
        $request->validate([
            'nome' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'pais' => 'required',
        ]);

        $unidade->update($request->all());
        return redirect()->route('unidade.index')->with('success', 'Unidade atualizada com sucesso.');
    }

    public function destroy(Unidade $unidade)
    {
        $unidade->delete();
        return redirect()->route('unidade.index')->with('success', 'Unidade excluída com sucesso.');
    }
}
