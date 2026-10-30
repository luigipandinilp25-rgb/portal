# TESTES — Portal do Aluno

**Aluno:** Guilherme Kozeschen
**Ambiente:** PHP 8.3 (servidor embutido: `php -S 127.0.0.1:8080`), testes via navegador/requisições HTTP com cookie de sessão.
**Validação de sintaxe:** `php -l` em todos os arquivos — sem erros.

| Nº | Ação de teste | Resultado esperado | Resultado obtido | Status |
| --- | --- | --- | --- | --- |
| 1 | Abrir `index.php` | Título, links e rodapé visíveis | Título "Portal do Aluno", 3 links e rodapé exibidos | ✅ Passou |
| 2 | Enviar nome vazio | Erro de nome obrigatório | "O nome é obrigatório." | ✅ Passou |
| 3 | Enviar e-mail `teste` | Erro de e-mail inválido | "Informe um e-mail válido." | ✅ Passou |
| 4 | Enviar idade `0` | Erro de idade inválida | "A idade deve ser um número inteiro maior que zero." | ✅ Passou |
| 5 | Enviar `Ana Souza`, `ana@senac.br`, `22` | Cadastro exibido em `resultado.php` | Redirecionou para resultado com nome, e-mail, idade e mensagem de sucesso | ✅ Passou |
| 6 | Atualizar `resultado.php` | Dados continuam, mensagem some | Dados mantidos; mensagem de sucesso não reapareceu | ✅ Passou |
| 7 | Clicar em Encerrar sessão e abrir resultado | Nenhum cadastro na sessão | Redirecionou para `index.php`; resultado mostrou "Nenhum aluno cadastrado nesta sessão." | ✅ Passou |
| 8 | Nome `<h1>Ana</h1>` | Texto literal, sem título HTML | Saída `&lt;h1&gt;Ana&lt;/h1&gt;` (escapado com `htmlspecialchars`) | ✅ Passou |
| 9 | Nome e idade válidos + e-mail inválido | Volta ao formulário com valores preservados | Campos nome=`Ana`, e-mail=`teste`, idade=`22` preenchidos | ✅ Passou |

## Teste extra
- Acesso direto a `processar_cadastro.php` via GET → redireciona (302) para `cadastro.php`.
