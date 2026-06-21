<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início — MindFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#f4f6f9] flex font-sans">

  <!--====================
  | SIDEBAR |
  =====================-->
  <?php include('header.php'); ?>

  <div class="flex-1 min-w-0 flex flex-col">

    <!--====================
    | Topbar |
    =====================-->
    <!-- Em mobile, o topbar exibe apenas o logo centralizado, ícone de notificação e avatar -->
    <header class="bg-white border-b border-gray-200 px-4 md:px-6 py-3 md:py-4 flex items-center justify-between gap-4 sticky top-0 z-10">

      <!-- Logo mobile (visível apenas em mobile, substituindo o nome) -->
      <a href="dashboard.php" class="md:hidden block">
        <img src="img/logo.svg" alt="MindFlow" class="h-7 w-auto">
      </a>

      <!-- Boas-vindas (visível apenas em desktop) -->
      <!-- JS/PHP irá substituir "Renan" pelo nome do usuário logado -->
      <hgroup class="hidden md:block">
        <h1 class="text-lg font-bold text-gray-800 leading-tight">Olá, Renan!</h1>
        <p class="text-sm text-gray-400">Aqui está o que importa hoje.</p>
      </hgroup>

      <!-- Ações e perfil -->
      <div class="flex items-center gap-3 md:gap-4">

        <!-- Notificações -->
        <!-- JS irá exibir um dropdown de notificações ao clicar neste botão -->
        <button class="relative w-9 h-9 flex items-center justify-center rounded-lg text-gray-500 hover:bg-gray-100 transition-colors" aria-label="Notificações">
          <i class="fa-regular fa-bell text-base" aria-hidden="true"></i>
          <!-- JS irá exibir/ocultar este indicador quando houver notificações não lidas -->
          <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-[#8a09aa] rounded-full" aria-hidden="true"></span>
        </button>

        <!-- Perfil do usuário -->
        <!-- JS irá abrir um dropdown com opções de perfil/logout ao clicar neste botão -->
        <button class="flex items-center gap-2.5 hover:bg-gray-100 rounded-lg px-2 py-1.5 transition-colors" aria-label="Menu do usuário" aria-haspopup="true" aria-expanded="false">
          <!-- JS/PHP irá substituir as iniciais pela foto do usuário, se houver -->
          <span class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600 shrink-0" aria-hidden="true">
            RS
          </span>
          <!-- Nome e cargo: ocultos em mobile para economizar espaço -->
          <div class="hidden md:block text-left leading-tight">
            <!-- JS/PHP irá substituir pelo nome e cargo do usuário logado -->
            <p class="text-sm font-semibold text-gray-800">Renan Silva</p>
            <p class="text-xs text-gray-400">Supervisor</p>
          </div>
          <!-- Chevron: oculto em mobile -->
          <svg class="hidden md:block w-4 h-4 text-gray-400 ml-1" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

      </div>
    </header>

    <!-- pb-20 em mobile reserva espaço para a bottom nav fixa -->
    <main class="flex-1 min-w-0 p-4 md:p-5 pb-24 md:pb-5">

      <!--====================
      | Boas-vindas mobile |
      =====================-->
      <!-- Visível apenas em mobile, abaixo do topbar -->
      <div class="md:hidden mb-5">
        <!-- JS/PHP irá substituir "Renan" pelo nome do usuário logado -->
        <h1 class="text-xl font-bold text-gray-800 leading-tight">Olá, Renan! 👋</h1>
        <p class="text-sm text-gray-400">Aqui está o que importa hoje.</p>
      </div>

      <!--====================
      | Cards Fixados |
      =====================-->
      <section aria-labelledby="titulo-cards-fixados">
        <div class="flex items-center justify-between mb-3">
          <h2 id="titulo-cards-fixados" class="flex items-center gap-2 text-lg md:text-[28px] font-bold text-gray-800">
            <!-- Em mobile, usa ícone de pin inline -->
            <img src="img/pin-icon.svg" alt="" aria-hidden="true" class="w-5 h-5 md:w-6 md:h-6 rotate-[40deg]">
            <span class="hidden md:inline">Cards Fixados</span>
            <span class="md:hidden">Seus cards fixos</span>
          </h2>
          <!-- Link "Ver todos" visível apenas em mobile -->
          <!-- JS irá navegar para a listagem completa de cards ao clicar -->
          <a href="#" class="md:hidden text-xs text-[#8a09aa] font-semibold">Ver todos</a>
        </div>

        <!-- Scroll horizontal: JS irá adicionar/remover cards dentro desta lista -->
        <div class="overflow-x-auto pb-2 [scrollbar-width:thin] [scrollbar-color:#6c5ce7_#ede8ff]">
          <ul class="flex flex-nowrap gap-3 md:gap-4 w-max min-w-full pb-1 list-none" role="list">

            <!-- card-pg-inicio: repetir este bloco via PHP/JS -->
            <li>
              <article class="bg-white rounded-xl shadow-sm p-4 w-[160px] md:w-[200px] text-center">
                <h3 class="text-sm font-semibold text-gray-800 mb-1">Título do Card</h3>
                <p class="text-xs text-gray-500 mb-3">Descrição curta</p>
                <!-- JS irá atualizar o status de acordo com a seleção do usuário -->
                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-md inline-block">Em andamento</span>
              </article>
            </li>

            <!-- Segundo card de exemplo para scroll horizontal no mobile -->
            <li>
              <article class="bg-white rounded-xl shadow-sm p-4 w-[160px] md:w-[200px] text-center">
                <h3 class="text-sm font-semibold text-gray-800 mb-1">Título do Card</h3>
                <p class="text-xs text-gray-500 mb-3">Descrição curta</p>
                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-md inline-block">Em andamento</span>
              </article>
            </li>

          </ul>
        </div>
      </section>

      <!--====================
      | Materiais de Estudo |
      =====================-->
      <section class="mt-6 md:mt-8 bg-white rounded-xl shadow-sm p-4 md:p-5" aria-labelledby="titulo-materiais">

        <header class="flex items-center justify-between mb-4">
          <h2 id="titulo-materiais" class="text-base font-semibold text-gray-800">Materiais de Estudo</h2>
          <!-- Link "Ver todos" visível apenas em mobile -->
          <a href="materiais.php" class="md:hidden text-xs text-[#8a09aa] font-semibold">Ver todos</a>
        </header>

        <!-- material-item: repetir este bloco via PHP/JS -->
        <ul class="flex flex-col divide-y divide-gray-100 list-none" role="list">

          <li>
            <article class="flex items-center justify-between px-2 md:px-3 py-3 rounded-lg border border-transparent hover:bg-[#f8f9ff] hover:border-[#dcdcff] transition-colors">
              <!-- Ícone de documento em mobile (da imagem de referência) -->
              <div class="flex items-center gap-3">
                <div class="md:hidden w-9 h-9 bg-gray-100 rounded-lg flex items-center justify-center shrink-0">
                  <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <div class="flex flex-col gap-0.5">
                  <strong class="text-sm font-semibold text-gray-800">Treinamento LGPD</strong>
                  <span class="text-xs text-gray-400">Enviado por: Supervisor</span>
                  <!-- Data visível apenas em mobile -->
                  <time class="md:hidden text-xs text-gray-400">08/05/2024</time>
                  <!-- Label "Curso obrigatório" visível apenas em desktop -->
                  <span class="hidden md:inline text-xs text-gray-400">Curso obrigatório</span>
                </div>
              </div>
              <!-- Botão de download/acesso -->
              <a href="materiais.php" class="flex items-center gap-1.5 bg-[#6c5ce7] hover:bg-[#5a4bdc] text-white text-xs px-3 py-1.5 rounded-lg transition-colors shrink-0">
                <img src="img/compatilhar-icon.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5 -rotate-45">
                <span class="hidden md:inline">Material</span>
              </a>
            </article>
          </li>

          <!-- Segundo item: visível apenas em mobile para espelhar a imagem de referência -->
          <li class="md:hidden">
            <article class="flex items-center justify-between px-2 py-3 rounded-lg border border-transparent hover:bg-[#f8f9ff] hover:border-[#dcdcff] transition-colors">
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-gray-100 rounded-lg flex items-center justify-center shrink-0">
                  <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <div class="flex flex-col gap-0.5">
                  <strong class="text-sm font-semibold text-gray-800">Política de Segurança</strong>
                  <span class="text-xs text-gray-400">Enviado por: Supervisor</span>
                  <time class="text-xs text-gray-400">10/05/2024</time>
                </div>
              </div>
              <a href="materiais.php" class="flex items-center bg-[#6c5ce7] hover:bg-[#5a4bdc] text-white text-xs px-3 py-1.5 rounded-lg transition-colors shrink-0">
                <img src="img/compatilhar-icon.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5 -rotate-45">
              </a>
            </article>
          </li>

        </ul>

      </section>

    </main>

  </div>

</body>
</html>
