<?php

namespace App\Services;

use App\Models\Avaliacao;

class AvaliacaoService
{
    /**
     * Criar uma avaliação para uma embalagem.
     *
     * @param array $data
     * @return Avaliacao
     */
    public function criarAvaliacao(array $data): Avaliacao
    {
        return Avaliacao::create($data);
    }

    /**
     * Verificar o status da avaliação (se passou ou falhou).
     *
     * @param Avaliacao $avaliacao
     * @return string
     */
    public function verificarStatusAvaliacao(Avaliacao $avaliacao): string
    {
        // Exemplos de lógica para processar a avaliação
        if ($avaliacao->defeitos_esteticos) {
            return "Falhou na inspeção estética";
        }

        if ($avaliacao->teste_resistencia === 'falhou') {
            return "Falhou no teste de resistência";
        }

        // Verificação genérica
        return "Aprovado";
    }

    /**
     * Obter todas as avaliações.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function obterAvaliacoes()
    {
        return Avaliacao::all();
    }

    /**
     * Excluir avaliação.
     *
     * @param Avaliacao $avaliacao
     * @return bool|null
     */
    public function excluirAvaliacao(Avaliacao $avaliacao): ?bool
    {
        return $avaliacao->delete();
    }
}
