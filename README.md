# Enfermagem Escola — Sistema de Registro de Atendimentos

Sistema web desenvolvido para uma unidade da APAE com o objetivo de substituir o controle manual pelo registro digital de atendimentos
realizados pela equipe de enfermagem.

---

## Sobre o projeto

A equipe de enfermagem da APAE realiza diariamente uma série de atendimentos a assistidos
(alunos, funcionários e familiares), incluindo administração de medicamentos, trocas, banhos e
outros procedimentos. Até então, esses registros eram feitos manualmente em planilha, sem
histórico estruturado, sem rastreabilidade de qual profissional realizou cada atendimento e sem
forma prática de gerar relatórios para a coordenação.

O projeto nasceu de um levantamento de requisitos real: foram conduzidas entrevistas com a
enfermeira responsável para mapear o fluxo de trabalho atual, identificar os tipos de atendimento
existentes, entender as necessidades de consulta e relatório, e validar as decisões de modelagem
antes de iniciar o desenvolvimento. Toda a documentação de arquitetura e modelagem foi produzida
antes da primeira linha de código.

O sistema permite o registro de atendimentos com suporte a lançamento em lote (vários tipos de
atendimento para o mesmo assistido de uma vez), controle de status de realização (realizado ou
recusado, com motivo obrigatório em caso de recusa), histórico completo com filtros e exportação
em PDF, trilha de auditoria automática de todas as alterações, e cancelamento lógico de registros
(sem exclusão física, preservando a integridade dos dados de saúde conforme boas práticas de
LGPD).

---

## Funcionalidades

- Cadastro de assistidos com categoria (aluno, funcionário ou familiar) e plano de saúde
- Cadastro extensível de tipos de atendimento e profissionais da equipe
- Lançamento de atendimentos com suporte a múltiplos profissionais por atendimento
- Lançamento em lote: vários tipos de atendimento para o mesmo assistido em uma única tela
- Registro de recusa de atendimento com motivo obrigatório
- Detalhe de medicação vinculado a atendimentos do tipo Medicação
- Histórico com filtros por assistido, período, tipo e profissional
- Exportação do histórico em PDF para prestação de contas à coordenação
- Dashboard com indicadores do dia e da semana
- Cancelamento lógico de atendimentos com motivo (sem exclusão física)
- Trilha de auditoria automática via Eloquent Observer
- Controle de acesso por perfil (Admin e Enfermagem)

---

## Tecnologias

- **PHP 8.5**
- **Laravel 12**
- **MySQL 8**
- **Tailwind CSS**

---

## Status do projeto

🚧 **Em desenvolvimento**

Fases concluídas:
- Levantamento de requisitos e entrevista com a enfermeira responsável
- Documento de modelagem e arquitetura (v2.0)
- Migrations
- Models e relacionamentos Eloquent
- Seeders de dados iniciais

Em andamento:
- Controllers e rotas
- Views Blade com Tailwind CSS
- Policies e middleware de autorização
- Observer de auditoria

---

## Autor

Desenvolvido por **Marcelo** como projeto de estudo com caso de uso real.
Desenvolvedor PHP Laravel

[LinkedIn](https://linkedin.com/in/marcelo-lagazzi)
