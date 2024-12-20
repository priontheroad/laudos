# Estrutura de Dados - Banco de Dados

## 1. Tabela: Empresa

- **ID** (chave primária)
- **Nome da Empresa**
- **CNPJ**
- **Endereço**
- **Responsável Técnico**
- **Cargo do Responsável Técnico**
- **Telefone**
- **E-mail**

## 2. Tabela: Produto/Embalagem

- **ID** (chave primária)
- **Nome do Produto**
- **Tipo de Embalagem**
- **Material Utilizado**
- **Peso**
- **Dimensões** (Largura, Altura, Profundidade)
- **Finalidade**
- **Marca/Identificação**

## 3. Tabela: Avaliação

- **ID** (chave primária)
- **ID_Embalagem** (chave estrangeira da Tabela Produto/Embalagem)
- **Data da Avaliação**
- **Inspeção Visual** (com campo para descrição de defeitos ou problemas encontrados)
- **Defeitos Estéticos** (com campo para descrição e porcentagem de falhas encontradas)
- **Resultado do Teste de Dimensões** (com tolerâncias específicas e medidas de aprovação)
- **Teste de Resistência a Compressão**
- **Impacto e Dano por Queda** (informar se houve ou não falhas após queda de determinada altura)
- **Teste de Estanqueidade** (informar se foi aplicado e qual foi o resultado)
- **Testes de Material** (com o nome das normas aplicadas, como teste de material certificado, etc.)
- **Conclusão Geral**
- **Recomendações de Melhoria**

## 4. Tabela: Laudo Gerado

- **ID** (chave primária)
- **ID_Empresa** (chave estrangeira da Tabela Empresa)
- **ID_Avaliação** (chave estrangeira da Tabela Avaliação)
- **Conteúdo do Laudo** (Texto completo gerado automaticamente)
- **Data da Geração do Laudo**

## Fluxo do Sistema

### Entrada de Dados

O software deve permitir ao usuário preencher ou importar informações sobre a empresa, produto/embalagem e detalhes da avaliação, como mostrado nas tabelas acima.

O usuário deve ter a capacidade de inserir dados sobre a inspeção visual, os testes realizados (dimensões, compressão, impacto, estanqueidade, etc.), e qualquer detalhe relacionado à avaliação dos lotes de embalagens.

### Processamento de Avaliação

O sistema deve analisar as informações inseridas, comparar os resultados com os critérios de aprovação/validação, como especificações e normas, para determinar se o produto passa ou falha.

Com base nos testes, o sistema gera automaticamente a conclusão, que inclui a aprovação geral ou possíveis problemas encontrados, como falhas estéticas ou de resistência.

### Geração de Laudo

Com os dados completos da avaliação (como informações da empresa, produto e resultados dos testes), o sistema gera automaticamente o laudo de qualidade.

O laudo deve ser gerado em um formato padronizado (ex.: PDF ou documento com layout pronto) que inclua todas as informações necessárias para o cliente.

Além disso, o sistema pode sugerir um texto de recomendação para correção ou melhorias, baseado nas falhas identificadas nos testes.

### Automatização do Relatório

O sistema preencheria automaticamente os campos do laudo com as informações coletadas, criando um documento como o modelo detalhado que forneci anteriormente. Por exemplo, ele preencheria se a embalagem passou no teste de resistência, nos testes de impacto, ou quais melhorias foram sugeridas.

---

## Exemplo de Layout do Formulário para Preenchimento

### Informações da Empresa

- **Nome da Empresa:** 
- **CNPJ:** 
- **Endereço:** 
- **Responsável Técnico:** 
- **Cargo do Responsável Técnico:** 
- **Telefone:** 
- **E-mail:** 

### Informações do Produto/Embalagem

- **Nome do Produto:** 
- **Tipo de Embalagem:** 
- **Material Utilizado:**
- **Peso:** 
- **Dimensões:**
  - Largura: 
  - Altura: 
  - Profundidade: 
- **Finalidade:**
- **Marca ou Identificação:** 

### Processo de Avaliação

- **Inspeção Visual:** 
- **Defeitos Estéticos:** 
- **Teste de Dimensões:** 
- **Teste de Resistência a Compressão:** 
- **Impacto e Queda:** 
- **Teste de Estanqueidade (se necessário):** 
- **Resultados dos Testes de Material:** 

### Conclusão

A embalagem [Passou/Falhou] nos testes de qualidade.

- **Recomendações de Melhoria:** Criar assinatura digital para validação dos laudos.

### Gerar Laudo

- **Botão de Geração Automática de Laudo:** Ao clicar nesse botão, o sistema deverá gerar o laudo completo, preenchendo todos os campos previamente descritos.
