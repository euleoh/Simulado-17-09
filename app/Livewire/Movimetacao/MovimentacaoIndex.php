<?php

namespace App\Livewire\Movimetacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoIndex extends Component
{
    public function delete($id){
        $movimentacao = Movimentacao::find($id);
        if($movimentacao != null){
            $movimentacao->delete();
            session()->flash('success', 'Excluído');
        }
    }


    public function render()
    {
        $movimentacaos = Movimentacao::orderBy('data_movimentacao', 'desc')->get();

        return view('livewire.movimetacao.movimentacao-index', compact('movimentacaos'));
    }
}
