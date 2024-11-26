<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AppController extends Controller
{
    public function sobre()
    {
        $nome = "Laravel";
        $nomes = ["PHP", "COMPOSER", "LARAVEL"];
        return view('sobre', ['nome' => $nome, 'nome2' => $nomes]);

    }
    public function exibirUsuarios()
    {

        $usuarios = Usuario::all();
        return view('usuarios', ['users' => $usuarios]);
    }

    public function addUsuario(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nome = $request->fnome;
        $usuario->email = $request->femail;
        // fazendo criptografia da senha, comentário: Larissa
        $usuario->senha = Hash::make($request->fsenha);
        $usuario->save();
        return redirect('/usuarios');
    }

    public function editUsuario($id)
    {
        //busca pelo id
        $usuario = Usuario::findOrFail($id);

        //retorna os dados do usuario na view
        return view('editar', ['user' => $usuario]);

    }

    public function atualizar(Request $request)
    {
        $usuario = Usuario::findOrFail($request->id);
        $dados = [
            'nome' => $request->fnome,
            'email' => $request->femail
        ];
        //dados atualizados do form e passa pra base de dados 
        $usuario->update($dados);
        return redirect('/usuarios');
    }

    public function delUsuario($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }

    #autenticação do usuário, comentário: Larissa
    public function Entrar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required', 'string'],
        ]);


        $usuario = Usuario::where('email', $credentials['email'])->first();

        if ($usuario && Hash::check($credentials['senha'], $usuario->senha)) {
            $request->session()->regenerate();

            return view('dashboard', ['email' => $usuario->email, 'nome' => $usuario->nome]);
        }

        return back()->withErrors([
            'email' => 'As informações estão erradas, Por favor tente novamente!',
        ])->onlyInput('email');
    }

    //função para a saída, comentário: Larissa
    public function Sair(){

        Auth::logout();

    return redirect ('/entrar_usuario');
    }
}
