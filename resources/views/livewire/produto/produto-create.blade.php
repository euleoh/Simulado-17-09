<div>
    <div class="card position-absolute top-50 start-50 translate-middle">
        <div class="card-body">
            <form class="row g-3" wire:submit.prevent='store'>
                <div class="col-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id='nome' placeholder="Nome" wire:model='nome'>
                </div>
                <div class="col-12">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" id='valor' placeholder="R$" wire:model='valor'>
                </div>
                <div class="col-12">
                    <label for="nome" class="form-label">Quant. Estoque</label>
                    <input type="text" class="form-control" id='qtd_estoque' placeholder="" wire:model='qtd_estoque'>
                </div>
                <div class="col-12">
                    <label for="nome" class="form-label">Quant. Mínima</label>
                    <input type="text" class="form-control" id='qtd_minima' placeholder="" wire:model='qtd_minima'>
                </div>
                <div class="col-12">
                    <label for="nome" class="form-label">Observações</label>
                    <input type="text" class="form-control" id='observacoes' placeholder="" wire:model='observacoes'>
                </div>


                <div>
                    <div class="col-12 m-3">
                        <button type="submit" class="btn btn-primary"> Salvar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
