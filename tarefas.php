<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarefas — MindFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#f4f6f9] flex font-sans">

  <!--====================
  | SIDEBAR |
  =====================-->
  <?php include('header.php'); ?>

  <main class="flex-1 min-w-0 p-4 md:p-5 flex flex-col min-h-screen pb-24 md:pb-5">
    

    <!--====================
    | Cabeçalho da página |
    =====================-->
    <!-- Desktop: layout original com botões expostos -->
    <!-- Mobile: título + ícones de filtro e adicionar (sem textos) -->
    <header class="flex items-center gap-3 md:gap-4 flex-wrap mb-2">
      <h1 class="text-xl md:text-[28px] font-bold text-gray-800 flex-1">Tarefas</h1>

      <!-- Botão "Adicionar Coluna": oculto em mobile (não relevante para touch) -->
      <button class="hidden md:inline-flex h-10 px-4 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
        + Adicionar Coluna
      </button>

      <div class="flex items-center gap-2">
        <!-- JS irá abrir um menu/modal de filtros ao clicar neste botão -->
        <button class="h-10 w-10 flex items-center justify-center border border-gray-300 rounded-lg bg-white hover:bg-gray-50 transition-colors" aria-label="Filtrar tarefas">
          <img src="img/filtrar-icon.svg" alt="" aria-hidden="true" class="w-5 h-5">
        </button>

        <!-- Botão adicionar: texto visível apenas em desktop, ícone + texto em mobile reduzido -->
        <!-- JS irá abrir o formulário de criação de tarefa ao clicar neste botão -->
        <button class="h-10 flex items-center gap-1.5 px-3 md:px-4 bg-[#bd16f0] hover:bg-[#9b10c8] text-white text-sm font-medium rounded-lg transition-colors">
          <span class="text-base leading-none">+</span>
          <span class="hidden md:inline">Adicionar Tarefa</span>
        </button>
      </div>
    </header>

    <!--====================
    | Board Kanban |
    =====================-->
    <!-- Em mobile, o board mantém scroll horizontal. As colunas têm largura menor (240px vs 280px) -->
    <!-- JS irá adicionar/remover colunas dentro do board conforme necessário -->
    <div class="flex-1 overflow-x-auto overflow-y-visible py-4 md:py-5 px-0 [scrollbar-width:thin] [scrollbar-color:#bd16f0_#ede8ff]">
      <div class="flex flex-nowrap gap-3 md:gap-5 w-max min-w-full">

        <!--===== Coluna: A Fazer =====-->
        <section class="bg-[#fafafa] border border-gray-200 rounded-xl p-3 md:p-4 min-h-[400px] md:min-h-[500px] w-[240px] md:w-[280px] shrink-0 flex flex-col gap-3" aria-labelledby="col-a-fazer">

          <header class="flex items-center justify-between mb-1 md:mb-2">
            <h2 id="col-a-fazer" class="text-base md:text-lg font-bold text-gray-800">
              A Fazer <span class="text-sm font-normal text-gray-400 ml-1">3</span>
            </h2>
            <!-- JS irá exibir um menu de opções da coluna (renomear, excluir etc.) ao clicar -->
            <button class="text-gray-400 hover:text-gray-600 transition-colors" aria-label="Opções da coluna A Fazer" aria-haspopup="true">
              <img src="img/tresponto.svg" alt="" aria-hidden="true" class="w-4 h-4">
            </button>
          </header>

          <!-- card-pg-tarefas: JS irá abrir o modal lateral com os detalhes ao clicar no card -->
          <!-- Em mobile, o toque no card também deve abrir o modal (comportamento JS) -->
          <ul class="flex flex-col gap-3 list-none" role="list">

            <li>
              <article class="bg-white border border-gray-200 rounded-xl p-3 md:p-[14px] cursor-pointer hover:shadow-md hover:-translate-y-0.5 transition-all active:scale-[0.98]"
                       data-titulo="Configurar backup do servidor"
                       data-status="A Fazer"
                       data-status-dot="gray"
                       data-prazo="25/05/2024"
                       data-descricao="Configurar backup automatizado e agendado para todos os servidores de produção, garantindo retenção mínima de 30 dias.">
                <h3 class="text-sm font-semibold text-gray-800 mb-2 md:mb-3 leading-snug">Configurar backup do servidor</h3>
                <dl class="flex flex-col gap-1.5">
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Status</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <span class="w-3 h-3 rounded-full bg-gray-400 inline-block shrink-0" aria-hidden="true"></span>
                      A Fazer
                    </dd>
                  </div>
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Prazo</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <img src="img/calendario.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                      <time datetime="2024-05-25">25/05/2024</time>
                    </dd>
                  </div>
                </dl>
                <footer class="flex justify-end mt-2">
                  <span class="flex items-center gap-1 text-xs text-gray-400" aria-label="2 anexos">
                    <img src="img/caixa.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                    2
                  </span>
                </footer>
              </article>
            </li>

            <li>
              <article class="bg-white border border-gray-200 rounded-xl p-3 md:p-[14px] cursor-pointer hover:shadow-md hover:-translate-y-0.5 transition-all active:scale-[0.98]"
                       data-titulo="Implementar MFA"
                       data-status="Em Andamento"
                       data-status-dot="blue"
                       data-prazo="20/05/2024"
                       data-descricao="Implementar autenticação de múltiplos fatores para todos os usuários do sistema, cobrindo e-mail, aplicativo autenticador e SMS."
                       data-anexos='[{"nome":"planejamento_mfa.pdf","tamanho":"1.2 MB"},{"nome":"checklist_mfa.xlsx","tamanho":"800 KB"}]'>
                <h3 class="text-sm font-semibold text-gray-800 mb-2 md:mb-3 leading-snug">Implementar MFA</h3>
                <dl class="flex flex-col gap-1.5">
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Status</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <span class="w-3 h-3 rounded-full bg-[#4d8df7] inline-block shrink-0" aria-hidden="true"></span>
                      Em Andamento
                    </dd>
                  </div>
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Prazo</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <img src="img/calendario.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                      <time datetime="2024-05-20">20/05/2024</time>
                    </dd>
                  </div>
                </dl>
                <footer class="flex justify-end mt-2">
                  <span class="flex items-center gap-1 text-xs text-gray-400" aria-label="2 anexos">
                    <img src="img/caixa.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                    2
                  </span>
                </footer>
              </article>
            </li>

            <li>
              <article class="bg-white border border-gray-200 rounded-xl p-3 md:p-[14px] cursor-pointer hover:shadow-md hover:-translate-y-0.5 transition-all active:scale-[0.98]"
                       data-titulo="Treinamento equipe"
                       data-status="Concluído"
                       data-status-dot="green"
                       data-prazo="10/05/2024"
                       data-descricao="Treinamento de boas práticas de segurança digital realizado com toda a equipe. Certificados emitidos."
                       data-anexos='[{"nome":"certificados.zip","tamanho":"3.1 MB"}]'>
                <h3 class="text-sm font-semibold text-gray-800 mb-2 md:mb-3 leading-snug">Treinamento equipe</h3>
                <dl class="flex flex-col gap-1.5">
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Status</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <span class="w-3 h-3 rounded-full bg-[#35b56a] inline-block shrink-0" aria-hidden="true"></span>
                      Concluído
                    </dd>
                  </div>
                  <div class="flex items-center gap-1.5">
                    <dt class="sr-only">Prazo</dt>
                    <dd class="flex items-center gap-1.5 text-xs text-gray-500">
                      <img src="img/calendario.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                      <time datetime="2024-05-10">10/05/2024</time>
                    </dd>
                  </div>
                </dl>
                <footer class="flex justify-end mt-2">
                  <span class="flex items-center gap-1 text-xs text-gray-400" aria-label="1 anexo">
                    <img src="img/caixa.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
                    1
                  </span>
                </footer>
              </article>
            </li>

          </ul>

          <!-- JS irá adicionar novos cards nesta coluna ao confirmar a criação de uma tarefa -->
          <button class="w-full border border-dashed border-gray-300 rounded-xl py-2.5 md:py-3 text-sm text-gray-500 hover:bg-gray-50 transition-colors mt-auto">
            + Adicionar card
          </button>

        </section>
        <!-- Fim coluna A Fazer -->
        <!-- JS irá renderizar as demais colunas dinamicamente seguindo o mesmo padrão acima -->

      </div>
    </div>

    <!--====================
    | Legenda de Status |
    =====================-->
    <!-- Em mobile, a legenda fica compacta em linha única com scroll ou wrap -->
    <footer class="mt-auto pt-3 md:pt-4 border border-gray-200 rounded-xl px-4 md:px-5 py-3 md:py-4 flex items-center gap-4 md:gap-7 flex-wrap text-xs md:text-sm text-gray-600" aria-label="Legenda de status das tarefas">
      <strong class="text-gray-700">Legenda:</strong>
      <span class="flex items-center gap-1.5 md:gap-2">
        <span class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-gray-400 inline-block" aria-hidden="true"></span>
        A Fazer
      </span>
      <span class="flex items-center gap-1.5 md:gap-2">
        <span class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-[#4d8df7] inline-block" aria-hidden="true"></span>
        Em Andamento
      </span>
      <span class="flex items-center gap-1.5 md:gap-2">
        <span class="w-3 h-3 md:w-3.5 md:h-3.5 rounded-full bg-[#35b56a] inline-block" aria-hidden="true"></span>
        Concluído
      </span>
    </footer>

  </main>

  <!--=================================
  | Modal lateral — Detalhes do card |
  ===================================-->
  <!-- JS irá adicionar/remover a classe 'active' no overlay e no aside para abrir/fechar o painel -->
  <!-- JS também irá popular os campos #modalTitulo, #modalDescricao, #modalPrazo e #modalAnexos com os dados do card clicado -->
  <!-- Em mobile, o modal ocupa largura total (100vw) ou quase toda (95vw) para melhor usabilidade -->

  <div id="modalOverlay"
       class="hidden fixed inset-0 bg-black/25 z-[100]"></div>

  <aside id="modalPanel"
         role="dialog" aria-modal="true" aria-labelledby="modalTitulo"
         class="fixed top-0 right-0 w-full md:w-[340px] h-screen bg-white shadow-2xl z-[101]
                flex flex-col overflow-y-auto
                translate-x-full transition-transform duration-[250ms] ease-in-out">

    <header class="flex items-start justify-between gap-3 px-5 py-[22px] border-b border-gray-100">
      <h2 id="modalTitulo" class="text-base font-bold text-gray-900 leading-snug"></h2>
      <button id="modalClose" aria-label="Fechar painel"
              class="text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded px-1.5 py-0.5 text-xl leading-none transition-colors shrink-0">
        ✕
      </button>
    </header>

    <div class="flex-1 flex flex-col gap-5 p-5">

      <!-- Descrição -->
      <section aria-labelledby="modal-label-descricao">
        <h3 id="modal-label-descricao" class="text-xs font-bold text-gray-700 uppercase tracking-wide mb-2">Descrição</h3>
        <p id="modalDescricao" class="text-sm text-gray-500 leading-relaxed"></p>
      </section>

      <!-- Prazo -->
      <section aria-labelledby="modal-label-prazo">
        <h3 id="modal-label-prazo" class="text-xs font-bold text-gray-700 uppercase tracking-wide mb-2">Prazo</h3>
        <div class="flex items-center gap-2 text-sm text-gray-700">
          <img src="img/calendario.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5">
          <time id="modalPrazo"></time>
        </div>
      </section>

      <!-- Anexos -->
      <section aria-labelledby="modal-label-anexos">
        <h3 id="modal-label-anexos" class="text-xs font-bold text-gray-700 uppercase tracking-wide mb-2">Anexos / Trabalho realizado</h3>

        <!-- JS irá implementar o comportamento de drag-and-drop e seleção de arquivos nesta área -->
        <label class="block border-2 border-dashed border-gray-300 rounded-xl py-6 px-4 text-center text-gray-400 text-sm leading-relaxed cursor-pointer hover:bg-gray-50 transition-colors">
          <span class="block mb-1.5">
            <img src="img/compatilhar.svg" alt="" aria-hidden="true" class="w-5 h-5 mx-auto">
          </span>
          Arraste e solte arquivos aqui<br>
          ou <b class="text-[#6c5ce7]">clique para anexar</b>
          <!-- Input oculto ativado via clique no label -->
          <input type="file" class="hidden" multiple>
        </label>

        <!-- JS irá popular esta área com a lista de arquivos do card -->
        <ul id="modalAnexos" class="flex flex-col gap-2 mt-2 list-none" role="list"></ul>

      </section>
    </div>

    <footer class="px-5 py-4 border-t border-gray-100 shrink-0">
      <!-- Em mobile, botão "Mover card" conforme wireframe -->
      <button id="modalFechar"
              class="w-full py-3 bg-gray-600 hover:bg-gray-800 text-white rounded-xl text-sm font-semibold transition-colors">
        Fechar
      </button>
    </footer>

  </aside>

</body>
</html>
