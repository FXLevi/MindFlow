<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materiais de Estudo — MindFlow</title>
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
    <header class="flex items-center justify-between flex-wrap gap-3 md:gap-4 mb-5 md:mb-6">
      <h1 class="text-xl md:text-[28px] font-bold text-gray-800">Materiais de Estudo</h1>
      <div class="flex items-center gap-2 md:gap-3">
        <!-- JS irá abrir o formulário de adição de material ao clicar neste botão -->
        <a href="model_materias.php" class="h-10 px-3 md:px-4 bg-[#222] hover:bg-[#333] text-white text-sm font-semibold rounded-lg transition-colors inline-flex items-center">
          + <span class="hidden md:inline ml-1">Adicionar material</span><span class="md:hidden ml-1">Adicionar</span>
        </a>
        <!-- JS irá exibir um painel de filtros ao clicar neste botão -->
        <button class="h-10 px-3 md:px-4 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 text-sm font-semibold rounded-lg transition-colors">
          Filtros
        </button>
      </div>
    </header>

    <!--====================
    | Grid de cards |
    =====================-->
    <!--
      Os cards têm largura e altura fixas definidas diretamente no elemento.
      O grid usa flex-wrap para quebrar linhas sem expandir os cards para preencher o espaço.
      Em mobile, os cards ficam levemente menores (w-[160px] h-[220px]) para caber 2 por linha.
      Assim, ao excluir um card, os demais não alteram seu tamanho.
    -->
    <section aria-labelledby="titulo-materiais-grid">
      <h2 id="titulo-materiais-grid" class="sr-only">Lista de materiais</h2>

      <ul class="flex flex-wrap gap-3 md:gap-5 list-none" role="list">

        <!-- card: repetir este bloco via PHP/JS -->
        <li>
          <article class="bg-white border border-gray-200 rounded-xl p-4 md:p-5 w-[160px] h-[220px] md:w-[220px] md:h-[250px] flex flex-col">
            <h3 class="text-sm md:text-base font-semibold text-gray-800 mb-1 leading-snug">Manual de Boas Práticas</h3>
            <p class="text-xs md:text-sm text-gray-500 mb-1">Enviado por Supervisor</p>
            <time class="text-xs md:text-sm text-gray-400" datetime="2024-05-10">10/05/2024</time>
            <footer class="mt-auto">
              <button class="px-3 md:px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-xs md:text-sm font-medium text-gray-700 transition-colors">
                Documento
              </button>
            </footer>
          </article>
        </li>

        <li>
          <article class="bg-white border border-gray-200 rounded-xl p-4 md:p-5 w-[160px] h-[220px] md:w-[220px] md:h-[250px] flex flex-col">
            <h3 class="text-sm md:text-base font-semibold text-gray-800 mb-1 leading-snug">Guia de Boas Condutas</h3>
            <p class="text-xs md:text-sm text-gray-500 mb-1">Enviado por Supervisor</p>
            <time class="text-xs md:text-sm text-gray-400" datetime="2024-05-05">05/05/2024</time>
            <footer class="mt-auto">
              <button class="px-3 md:px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-xs md:text-sm font-medium text-gray-700 transition-colors">
                Documento
              </button>
            </footer>
          </article>
        </li>

        <li>
          <article class="bg-white border border-gray-200 rounded-xl p-4 md:p-5 w-[160px] h-[220px] md:w-[220px] md:h-[250px] flex flex-col">
            <h3 class="text-sm md:text-base font-semibold text-gray-800 mb-1 leading-snug">Checklist de Segurança</h3>
            <p class="text-xs md:text-sm text-gray-500 mb-1">Enviado por Supervisor</p>
            <time class="text-xs md:text-sm text-gray-400" datetime="2024-05-03">03/05/2024</time>
            <footer class="mt-auto">
              <button class="px-3 md:px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg text-xs md:text-sm font-medium text-gray-700 transition-colors">
                Planilha
              </button>
            </footer>
          </article>
        </li>

        <!-- Card de adição -->
        <!-- JS irá abrir o formulário de novo material ao clicar neste card -->
        <li>
          <a href="model_materias.php"
             class="bg-white border border-dashed border-gray-300 rounded-xl p-4 md:p-5 w-[160px] h-[220px] md:w-[220px] md:h-[250px] flex flex-col items-center justify-center gap-3 text-gray-400 hover:bg-gray-50 transition-colors"
             aria-label="Adicionar novo material">
            <span class="text-3xl md:text-4xl leading-none" aria-hidden="true">+</span>
            <p class="text-xs md:text-sm">Adicionar material</p>
          </a>
        </li>

      </ul>
    </section>

    <!--====================
    | Paginação |
    =====================-->
    <!-- JS irá atualizar a lista de cards e o estado ativo dos botões ao navegar entre páginas -->
    <nav class="mt-6 md:mt-8 flex justify-center items-center gap-2" aria-label="Paginação de materiais">
      <button class="w-9 h-9 md:w-10 md:h-10 bg-white border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors" aria-label="Página anterior">
        &lt;
      </button>
      <button class="w-9 h-9 md:w-10 md:h-10 bg-[#222] text-white rounded-lg text-sm font-semibold" aria-current="page" aria-label="Página 1">
        1
      </button>
      <button class="w-9 h-9 md:w-10 md:h-10 bg-white border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors" aria-label="Página 2">
        2
      </button>
      <button class="w-9 h-9 md:w-10 md:h-10 bg-white border border-gray-200 rounded-lg text-sm text-gray-600 hover:bg-gray-50 transition-colors" aria-label="Próxima página">
        &gt;
      </button>
    </nav>

  </main>

</body>
</html>
