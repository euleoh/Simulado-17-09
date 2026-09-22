<?php

use App\Livewire\Auth\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Movimetacao\MovimentacaoCreate;
use App\Livewire\Movimetacao\MovimentacaoIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Models\Movimentacao;
use Illuminate\Support\Facades\Route;

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');

Route::get('produto/index', ProdutoIndex::class)->name('produto.index');

Route::get('produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');

Route::get('movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');

Route::get('movimentacao/index', MovimentacaoIndex::class)->name('movimentacao.index');

Route::get('login', Login::class)->name('login');

Route::get('/dashboard', Dashboard::class)->name('dashboard');