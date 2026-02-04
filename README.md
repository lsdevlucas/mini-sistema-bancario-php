# Sistema de Saldo Bancário

Sistema bancário simples em PHP para linha de comando (CLI). Desenvolvido como projeto final de curso — meu primeiro projeto em PHP.

## Sobre o projeto

O programa simula um caixa eletrônico básico: você pode consultar o saldo, fazer depósitos e saques. O saldo e o nome do titular são mantidos em memória enquanto o programa estiver rodando.

## Funcionalidades

- **Consultar saldo** — Exibe o saldo atual da conta
- **Depositar** — Adiciona valor ao saldo (apenas valores positivos)
- **Sacar** — Retira valor do saldo (valida se há saldo suficiente)
- **Sair** — Encerra o sistema

## Requisitos

- [PHP](https://www.php.net/) instalado (versão 7.x ou 8.x)
- Terminal ou prompt de comando

## Como executar

1. Clone ou baixe este repositório.
2. No terminal, entre na pasta do projeto:
   ```bash
   cd "Sistema Bancário"
   ```
3. Execute o script:
   ```bash
   php sistema-saldo-bancario.php
   ```
4. Use o menu numérico (1, 2, 3 ou 4) e pressione Enter para interagir.

## Exemplo de uso

```
*************** Sistema de Saldo Bancário ***************

Titular: Lucas Silva

**********************************************************

1. Consultar Saldo Atual
2. Depositar
3. Sacar Valor
4. Sair

Digite a opção desejada: 1
```

## Estrutura do projeto

```
Sistema Bancário/
├── sistema-saldo-bancario.php   # Código principal do sistema
└── README.md                    # Este arquivo
```

## Observações

- O saldo inicial é **R$ 1.000,00** e o titular padrão é **Lucas Silva** (definidos no início do arquivo).
- Os dados não são salvos em arquivo ou banco: ao fechar o programa, tudo é perdido.
- O sistema foi feito para rodar no terminal, usando entrada pelo teclado.

## Licença

Projeto de estudo — livre para uso e modificação.

---

Desenvolvido como projeto final de curso em PHP.
