<?php

namespace App\Services;

use App\Models\LaudoGerado;
use App\Models\Avaliacao;
use App\Models\Empresa;

class LaudoGeradoService
{
    /**
     * Criar um laudo gerado a partir da avaliação e empresa associada.
     *
     * @param array $data
     * @return LaudoGerado
     */
    public function gerarLaudo(array $data): LaudoGerado
    {
        // Primeiro, gerar o conteúdo do laudo
        $avaliacao = Avaliacao::find($data['id_avaliacao']);
        $empresa = Empresa::find($data['id_empresa']);
        $conteudoLaudo = $this->montarConteudoLaudo($avaliacao, $empresa);

        // Criar o laudo gerado no banco de dados
        return LaudoGerado::create([
            'id_empresa' => $data['id_empresa'],
            'id_avaliacao' => $data['id_avaliacao'],
            'conteudo' => $conteudoLaudo,
            'data_geracao' => now(),
        ]);
    }

    /**
     * Montar o conteúdo do laudo baseado na avaliação e empresa.
     *
     * @param Avaliacao $avaliacao
     * @param Empresa $empresa
     * @return string
     */
    public function montarConteudoLaudo(Avaliacao $avaliacao, Empresa $empresa): string
    {
        // Exemplo de formatação de conteúdo
        $conteudo = "Laudo da empresa: {$empresa->nome}\n";
        $conteudo .= "CNPJ: {$empresa->cnpj}\n";
        $conteudo .= "Resultado da avaliação: {$avaliacao->conclusao}\n";
        $conteudo .= "Recomendação: {$avaliacao->recomendacoes}\n";
        return $conteudo;
    }

    /**
     * Obter todos os laudos gerados.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function obterTodosLaudos()
    {
        return LaudoGerado::all();
    }

    /**
     * Excluir um laudo gerado.
     *
     * @param LaudoGerado $laudoGerado
     * @return bool|null
     */
    public function excluirLaudo(LaudoGerado $laudoGerado): ?bool
    {
        return $laudoGerado->delete();
    }
}
