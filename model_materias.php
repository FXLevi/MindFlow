<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Material — MindFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#f4f6f9] flex font-sans">

  <!--====================
  | SIDEBAR |
  =====================-->
  <?php include('header.php'); ?>

  <!-- pb-24 em mobile reserva espaço para a bottom nav fixa -->
  <main class="flex-1 min-w-0 p-4 md:p-9 min-h-screen pb-24 md:pb-9">

    <!--====================
    | Cabeçalho |
    =====================-->
    <header class="flex items-center gap-3 md:gap-4 mb-6 md:mb-8">
      <!-- JS irá navegar de volta para materiais.php ao clicar na seta -->
      <a href="materiais.php" aria-label="Voltar para Materiais de Estudo"
         class="w-9 h-9 flex items-center justify-center rounded-lg bg-white border border-gray-200 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors shrink-0">
        ←
      </a>
      <h1 class="text-xl md:text-[28px] font-bold text-gray-800">Adicionar Material de Estudo</h1>
    </header>

    <!--====================
    | Formulário |
    =====================-->
    <!-- max-w-[700px] em desktop; largura total em mobile -->
    <form class="flex flex-col gap-4 md:gap-5 w-full max-w-[700px]" novalidate>

      <!-- Nome do Material -->
      <p class="flex flex-col gap-1.5">
        <label for="inp-nome-material" class="text-sm font-semibold text-gray-800">Nome do Material</label>
        <input type="text" id="inp-nome-material" name="nome" placeholder="Digite o nome do material"
               class="w-full px-4 py-[13px] md:py-[15px] border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-gray-500 transition-colors bg-white">
      </p>

      <!-- Descrição -->
      <p class="flex flex-col gap-1.5">
        <label for="inp-descricao" class="text-sm font-semibold text-gray-800">Descrição</label>
        <textarea id="inp-descricao" name="descricao" placeholder="Digite uma descrição sobre o material" rows="4"
                  class="w-full px-4 py-[13px] md:py-[15px] border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-gray-500 transition-colors resize-none bg-white"></textarea>
      </p>

      <!-- Tipo -->
      <p class="flex flex-col gap-1.5">
        <label for="inp-tipo" class="text-sm font-semibold text-gray-800">Tipo</label>
        <select id="inp-tipo" name="tipo"
                class="w-full px-4 py-[13px] md:py-[15px] border border-gray-300 rounded-xl text-sm focus:outline-none focus:border-gray-500 transition-colors bg-white text-gray-700 appearance-none cursor-pointer">
          <option value="">Selecione o tipo</option>
          <option value="documento">Documento</option>
          <option value="apresentacao">Apresentação</option>
          <option value="planilha">Planilha</option>
        </select>
      </p>

      <!-- Upload -->
      <!-- O <label> envolve a área de drop, ativando o input ao clicar em qualquer ponto da área -->
      <div class="flex flex-col gap-1.5">
        <span class="text-sm font-semibold text-gray-800" id="label-upload">Upload do Arquivo</span>
        <label for="inp-arquivo" aria-labelledby="label-upload"
               class="border-2 border-dashed border-gray-300 rounded-2xl py-8 md:py-10 px-6 text-center bg-white cursor-pointer hover:bg-gray-50 transition-colors block">
          <!-- JS irá implementar drag-and-drop nesta área -->
          <p class="text-[40px] md:text-[50px] leading-none mb-3 md:mb-4" aria-hidden="true">☁</p>
          <p class="text-sm text-gray-600 mb-2">
            Arraste e solte o arquivo aqui<br>ou <b>clique para selecionar</b>
          </p>
          <small class="text-xs text-gray-400 leading-relaxed">
            Formatos permitidos: PDF, DOCX, XLSX, PPTX, MP4, JPG<br>
            Tamanho máximo: 20MB
          </small>
          <input type="file" id="inp-arquivo" name="arquivo"
                 accept=".pdf,.docx,.xlsx,.pptx,.mp4,.jpg,.jpeg" class="hidden">
        </label>
      </div>

      <!-- Botões -->
      <!-- Em mobile: botões em coluna, ocupando largura total (mais fácil de tocar) -->
      <!-- Em desktop: alinhados à direita, lado a lado -->
      <footer class="flex flex-col-reverse md:flex-row md:justify-end items-stretch md:items-center gap-3 mt-3 md:mt-5">
        <!-- JS irá limpar o formulário e redirecionar para materiais.php ao cancelar -->
        <button type="button"
                class="w-full md:w-auto px-7 py-[14px] bg-gray-100 hover:bg-gray-200 rounded-xl text-sm font-bold text-gray-700 transition-colors">
          Cancelar
        </button>
        <button type="submit"
                class="w-full md:w-auto px-7 py-[14px] bg-[#222] hover:bg-[#333] text-white rounded-xl text-sm font-bold transition-colors">
          Salvar
        </button>
      </footer>

    </form>

  </main>

</body>
</html>
