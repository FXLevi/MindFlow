<!--====================
| SIDEBAR — desktop |
=====================-->
<!-- Em mobile (< md), esta aside é ocultada em favor da bottom nav abaixo -->
<aside class="hidden md:flex w-[220px] min-w-[220px] bg-white h-screen sticky top-0 border-r border-gray-200 flex-col p-5 shrink-0">

  <a href="dashboard.php" class="mb-8 block">
    <img src="img/logo.svg" alt="MindFlow logo" class="w-full max-w-[160px]">
  </a>

  <nav class="flex flex-col flex-1 gap-1" aria-label="Menu principal">
    <a href="dashboard.php" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 transition-colors">
      Início
    </a>
    <a href="colaboradores.php" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 transition-colors">
      Colaboradores
    </a>
    <a href="tarefas.php" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 transition-colors">
      Tarefas
    </a>
    <a href="materiais.php" class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-100 transition-colors">
      Materiais de Estudo
    </a>
  </nav>

  <footer class="border-t border-gray-100 pt-4 mt-4">
    <a href="login.php"
       class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium text-red-500 hover:bg-red-50 transition-colors">
      <img src="img/sair-icone.svg" alt="" aria-hidden="true" class="w-3.5 h-3.5 mr-2">
      Sair
    </a>
  </footer>

</aside>

<!--====================
| BOTTOM NAV — mobile |
=====================-->
<!-- Visível apenas em telas menores que md (< 768px) -->
<!-- JS irá adicionar classe ativa no item correspondente à página atual -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 flex items-center justify-around px-2 py-2 safe-bottom" aria-label="Menu de navegação mobile">

  <a href="dashboard.php"
     class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-lg text-gray-500 hover:text-[#8a09aa] transition-colors min-w-[56px]"
     aria-label="Início">
    <!-- Ícone: casa -->
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg>
    <span class="text-[10px] font-medium leading-none">Início</span>
  </a>

  <a href="tarefas.php"
     class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-lg text-gray-500 hover:text-[#8a09aa] transition-colors min-w-[56px]"
     aria-label="Tarefas">
    <!-- Ícone: checklist -->
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
    </svg>
    <span class="text-[10px] font-medium leading-none">Tarefas</span>
  </a>

  <a href="colaboradores.php"
     class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-lg text-gray-500 hover:text-[#8a09aa] transition-colors min-w-[56px]"
     aria-label="Colaboradores">
    <!-- Ícone: pessoa -->
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
    </svg>
    <span class="text-[10px] font-medium leading-none">Colaboradores</span>
  </a>

  <a href="materiais.php"
     class="flex flex-col items-center gap-1 px-3 py-1.5 rounded-lg text-gray-500 hover:text-[#8a09aa] transition-colors min-w-[56px]"
     aria-label="Materiais">
    <!-- Ícone: documento -->
    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
    </svg>
    <span class="text-[10px] font-medium leading-none">Materiais</span>
  </a>

</nav>
