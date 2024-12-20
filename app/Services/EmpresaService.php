<?php

namespace App\Services;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Collection;

class EmpresaService
{
    /**
     * Criar uma nova empresa.
     *
     * @param array $data
     * @return Empresa
     */
    public function criarEmpresa(array $data): Empresa
    {
        return Empresa::create($data);
    }

    /**
     * Obter todas as empresas.
     *
     * @return Collection
     */
    public function obterTodasEmpresas(): Collection
    {
        return Empresa::all();
    }

    /**
     * Atualizar dados de uma empresa existente.
     *
     * @param Empresa $empresa
     * @param array $data
     * @return bool
     */
    public function atualizarEmpresa(Empresa $empresa, array $data): bool
    {
        return $empresa->update($data);
    }

    /**
     * Excluir uma empresa.
     *
     * @param Empresa $empresa
     * @return bool|null
     */
    public function excluirEmpresa(Empresa $empresa): ?bool
    {
        return $empresa->delete();
    }
}
