<?php

namespace App\Services;

use App\Models\ProdutoEmbalagem;

class ProdutoEmbalagemService
{
    /**
     * Criar uma nova embalagem.
     *
     * @param array $data
     * @return ProdutoEmbalagem
     */
    public function criarEmbalagem(array $data): ProdutoEmbalagem
    {
        return ProdutoEmbalagem::create($data);
    }

    /**
     * Obter todas as embalagens.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function obterTodasEmbalagens()
    {
        return ProdutoEmbalagem::all();
    }

    /**
     * Atualizar dados de uma embalagem existente.
     *
     * @param ProdutoEmbalagem $embalagem
     * @param array $data
     * @return bool
     */
    public function atualizarEmbalagem(ProdutoEmbalagem $embalagem, array $data): bool
    {
        return $embalagem->update($data);
    }

    /**
     * Excluir uma embalagem.
     *
     * @param ProdutoEmbalagem $embalagem
     * @return bool|null
     */
    public function excluirEmbalagem(ProdutoEmbalagem $embalagem): ?bool
    {
        return $embalagem->delete();
    }
}
