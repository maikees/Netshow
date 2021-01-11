<?php

namespace App\Http\Controllers;

use App\Mail\SaveContact;
use App\Models\Contato;
use Illuminate\Support\Facades\Mail;
use MOCUtils\Helpers\HelperController;

class ContatoController extends Controller
{
    /**
     * @description Retorna a view de contato não possuindo parâmetros adicionais
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('contato.contato');
    }

    /**
     * @return mixed
     */
    public function save()
    {
        $request = request();

        $request->validate([
            'nome' => 'required',
            'email' => 'required|email:rfc,dns',
            'telefone' => 'required|celular_com_ddd',
            'mensagem' => 'required',
            'arquivo' => 'required|max:500|mimes:pdf,doc,docx,odt,txt',
        ], [
            'mimes' => 'Os tipos de arquivos válidos são pdf,doc,docx,odt,txt.',
            'max' => 'O tamanho máximo do arquivo é de 500KB.'
        ]);

        /**
         * Executa uma transaction qualquer erro transacional irá da um rollback no database.
         * */
        $helperController = new HelperController(function () {
            $contato = new Contato();
            $contato->nome = request()->input('nome');
            $contato->email = request()->input('email');
            $contato->telefone = request()->input('telefone');
            $contato->mensagem = request()->input('mensagem');
            $contato->ip = request()->ip();
            $contato->save();

            $file = request()->file('arquivo');
            $file->storeAs('uploads', $contato->id . '-' . $file->getClientOriginalName());
            $contato->arquivo = 'uploads' . DS . $contato->id . '-' . $file->getClientOriginalName();
            $contato->save();

            throw_if(!env('MAIL_TO_SEND'), new \Exception("Configure a variável MAIL_TO_SEND com o e-mail desejado!"));

            Mail::to(env('MAIL_TO_SEND'))->send(new SaveContact($contato));

            return $contato;
        });

        $retorno = $helperController->getObject();

        return $helperController->BackToWith(['success' => "Contato de <code> " . @$retorno->nome . " </code> registrado com sucesso."]);
    }
}
