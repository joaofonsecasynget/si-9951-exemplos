# Guia da turma 12ºMM — Sistemas de Informação

Instruções para preparares o teu computador e o teu repositório da **UFCD 9951 Linguagem de programação web de servidor**. Faz os passos pela ordem e só avances quando vires o resultado esperado.

> **Regras em todas as aulas:** todo o teu trabalho fica no teu repositório do GitHub e a entrega é o **commit e o push**, feitos no VS Code — não há entregas no Teams. Antes de começares, fazes sempre **pull** (ou Sync Changes).

## O teu repositório

- Nome: **`si-9951`** (exatamente assim, em minúsculas), **privado**, com README.
- Colaborador: o professor, utilizador **`joaofonsecasynget`**.
- Onde o clonas no computador: **`C:\xampp\htdocs`** (no Mac, `/Applications/XAMPP/htdocs`).
- Organização:
  - uma pasta por aula: `aula-03/`, `aula-04/`, …, com os ficheiros `.php` e `.html` dessa aula
  - as folhas de estilo de cada aula ficam em `css/`, **dentro** da pasta da aula

```
si-9951/
  README.md
  aula-03/
    ola.php
    agora.php
  aula-04/
    tipos.php
    css/
      estilo.css
```

Nomes sempre sem espaços, sem acentos, em minúsculas, e com o número da aula com dois algarismos (`aula-03`, não `aula3` nem `Aula 3`).

## 1. Criar a conta no GitHub

1. Abre `https://github.com/signup`.
2. Usa o **email da escola** (`…@aelousada.net`) e uma palavra-passe forte, só tua.
3. Escolhe um username que te identifique (por exemplo `nome-apelido`), sem alcunhas.
4. Resolve a verificação e escreve o código que recebes no email da escola.

**Resultado esperado:** estás na página inicial do GitHub, com o teu username no canto superior direito.

## 2. Criar o repositório `si-9951`

1. No GitHub, **+** (canto superior direito) → **New repository**.
2. Repository name: `si-9951`. Escolhe **Private** e marca **Add a README file**. **Create repository**.
3. **Settings** → **Collaborators** → **Add people** → `joaofonsecasynget` → **Add … to this repository**.

**Resultado esperado:** o repositório tem o cadeado (privado) e o professor aparece em Collaborators.

## 3. Instalar o Git

- **Windows:** descarrega em `https://git-scm.com/download/win` e aceita as opções marcadas, exceto: em *default editor* escolhe **Visual Studio Code**; em *initial branch* escolhe **Override** com `main`.
- **Sem administrador (computadores da escola):** usa o **Portable Git** (mesma página), extrai-o para a tua pasta de utilizador e, no VS Code, em Definições, põe em `git.path` o caminho de `cmd\git.exe`.
- **macOS:** no Terminal, `git --version`; se pedir, instala as ferramentas de linha de comandos.

**Resultado esperado:** `git --version` mostra `git version 2.x.x`.

## 4. Instalar o VS Code e as extensões

1. Descarrega em `https://code.visualstudio.com` (no Windows, o **User Installer**, com **Add to PATH**).
2. No VS Code, **Ctrl+Shift+X** (Mac: **Cmd+Shift+X**) e instala:
   - **PHP Intelephense**

**Resultado esperado:** as extensões aparecem em Extensões → Installed.

## 5. Configurar o Git (uma vez por computador)

No VS Code, **Terminal → New Terminal**, e escreve, uma linha de cada vez (com o teu nome e o teu email):

```
git config --global user.name "Nome Apelido"
git config --global user.email "numero@aelousada.net"
git config --global init.defaultBranch main
```

Confirma com `git config --global --list`. **Num computador partilhado da escola**, confirma no início de cada aula que o nome e o email são os teus: se não forem, os teus commits ficam com o nome de um colega.

## 6. Clonar o repositório no VS Code

1. **Ctrl+Shift+P** → `Git: Clone` → **Clone from GitHub**; na primeira vez, inicia sessão no GitHub e autoriza.
2. Escolhe `teu-username/si-9951` e a pasta: **`C:\xampp\htdocs`** (no Mac, `/Applications/XAMPP/htdocs`).
3. **Open**. Cria as pastas da organização acima com **New Folder**, no explorador do VS Code.

**Resultado esperado:** o explorador do VS Code mostra o repositório, o README.md e as tuas pastas.

## 7. O ciclo de trabalho, sempre no VS Code

1. **Pull antes de começar:** painel **Controlo de código-fonte** (**Ctrl+Shift+G**) → **…** → **Pull** (ou **Sync Changes**).
2. **Trabalha** e guarda com **Ctrl+S**. Os ficheiros alterados aparecem no painel com **M** (modificado) ou **U** (novo).
3. **Commit:** escreve na caixa **Message** o que fizeste (por exemplo `Aula 4: variáveis, tipos e operadores`) e carrega em **Commit** (✓); se perguntar pelo *stage*, responde **Yes**.
4. **Push:** carrega em **Sync Changes**.
5. **Confirma no GitHub** que os ficheiros e a tua mensagem lá estão.

- O repositório tem de ficar dentro de `htdocs`, senão o Apache do XAMPP não mostra as páginas.
- Para ver uma página: liga o Apache no painel do XAMPP e abre `http://localhost/si-9951/aula-04/tipos.php` no browser.
- Sem XAMPP (plano B): no terminal do VS Code, dentro da pasta do repositório, `php -S localhost:8000` e abre `http://localhost:8000/aula-04/tipos.php`.

## 8. Quando corre mal

| O que aparece | O que fazer |
|---|---|
| `Please tell me who you are` / `Author identity unknown` | Faz a parte 5. |
| `Updates were rejected because the remote contains work…` | Faz **Pull** e depois **Sync Changes**. |
| `Merge` ou ficheiros com conflito (**C**) | Não apagues nada: chama o professor. |
| O VS Code pede para iniciar sessão | Inicia sessão no GitHub com a **tua** conta. |
| `Repository not found` / `Permission denied` | Confirma que estás com a tua conta e no teu repositório. |
| O ficheiro não aparece no GitHub | Faltou o commit ou o push: vê o painel e faz **Sync Changes**. |
| O ficheiro está na pasta errada | Arrasta-o no explorador do VS Code para a pasta certa, commit e Sync Changes. |

## 9. Verificação final

- [ ] A conta do GitHub usa o email da escola.
- [ ] O repositório chama-se `si-9951`, é privado e o professor é colaborador.
- [ ] `git config --global --list` mostra o teu nome e o teu email.
- [ ] O VS Code tem as extensões da disciplina.
- [ ] Fizeste um commit de teste e vês a tua mensagem no GitHub.

Este repositório (`si-9951-exemplos`) tem os exemplos das aulas, organizados como o teu. Podes copiá-los; o que conta é perceberes o código.
