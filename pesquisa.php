<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaboradores — MindFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#f4f6f9] min-h-screen">

    <div class="flex min-h-screen">
          <!-- Sidebar -->
     <?php include('header.php'); ?>
    
        <main class="flex-1 p-4 sm:p-6 overflow-x-hidden pb-24 md:pb-6">

            <section class="bg-white border border-gray-200 rounded-xl p-4 sm:p-6 w-full overflow-hidden">
                <!-- Título -->
                <div class=" border-b border-gray-100 flex gap-10 -mt-2" >
                    <a href="colaboradores.php" class="text-base font-bold text-gray-800 md:text-lg hover:text-green-500">Cadastro de Colaborador</a>
                    <h2 class="text-base font-bold text-gray-800 md:text-lg">Procurar Colaborador</h2>
                </div>

                <!-- Busca -->
                <div class="flex items-center gap-3 h-11 px-4 border border-gray-300 rounded-lg bg-white w-full max-w-sm mt-6">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 text-sm"></i>
                    <input type="text" id="searchInput" placeholder="Buscar colaborador..." class="flex-1 text-sm focus:outline-none bg-transparent text-gray-700 placeholder-gray-400">
                </div>

                <!-- Tabela -->
                <div class="overflow-x-auto w-full">
                    <table class="w-full text-sm">
                        <colgroup>
                            <col class="w-[25%]">
                            <col class="w-[18%]">
                            <col class="w-[18%]">
                            <col class="w-[20%]">
                            <col class="w-[19%]">
                        </colgroup>

                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wide py-3 pr-4">
                                    Nome
                                </th>
                                <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wide py-3 pr-4">
                                    Função
                                </th>
                                <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wide py-3 pr-4">
                                    Cargo
                                </th>
                                <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wide py-3 pr-4">
                                    Permissões
                                </th>
                                <th class="text-left text-xs font-semibold text-gray-500 uppercase tracking-wide py-3">
                                    Ações
                                </th>
                            </tr>
                        </thead>

                        <tbody id="tabelaBody" class="divide-y divide-gray-100">
                            <!-- Dados carregados via PHP ou JS -->
                        </tbody>

                    </table>
                </div>

            </section>

        </main>

    </div>

</body>
</html>