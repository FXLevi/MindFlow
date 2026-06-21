<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colaboradores — MindFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#f4f6f9] min-h-screen">

<div class="flex min-h-screen">

  <?php include('header.php'); ?>

  <main class="flex-1 p-4 sm:p-6 overflow-x-hidden pb-24 md:pb-6">


    <!-- Card -->
    <div class="w-full bg-white border border-gray-200 rounded-xl overflow-hidden">

      <form id="formColaborador" novalidate>

        <!-- JS irá ler/escrever este valor para distinguir cadastro de edição -->
        <input type="hidden" id="editIndex" value="-1">

        <!-- Cabeçalho do formulário -->
        <div class="px-4 sm:px-6 py-4 border-b border-gray-100 flex gap-10">
          <h2 class="text-base font-bold text-gray-800 md:text-lg">Cadastro de Colaborador</h2>
          <a href="pesquisa.php" class="text-base font-bold text-gray-800 md:text-lg hover:text-green-500">Procurar Colaborador</h2>
        </div>

        <!-- ===================================================
        | SEÇÃO 1 — DADOS PESSOAIS
        ==================================================== -->
        <details open class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-b border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Dados pessoais</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Nome completo -->
            <div class="sm:col-span-2 lg:col-span-1">
              <label for="inp-nome" class="block text-xs font-bold text-gray-700 mb-1.5">Nome completo</label>
              <input type="text" id="inp-nome" placeholder="Digite o nome completo" maxlength="120"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS exibirá esta mensagem quando o campo estiver vazio -->
              <span class="hidden text-xs text-red-500 mt-1 block" role="alert">Nome é obrigatório.</span>
            </div>

            <!-- CPF -->
            <div>
              <label for="inp-cpf" class="block text-xs font-bold text-gray-700 mb-1.5">CPF</label>
              <input type="text" id="inp-cpf" placeholder="000.000.000-00" maxlength="14" inputmode="numeric" autocomplete="off"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS aplicará máscara e validação de CPF -->
              <span class="hidden text-xs text-red-500 mt-1 block" role="alert">CPF inválido.</span>
            </div>

            <!-- RG -->
            <div>
              <label for="inp-rg" class="block text-xs font-bold text-gray-700 mb-1.5">RG</label>
              <input type="text" id="inp-rg" placeholder="00.000.000-0" maxlength="12" inputmode="numeric" autocomplete="off"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS aplicará máscara de RG -->
            </div>

            <!-- Data de nascimento -->
            <div>
              <label for="inp-nascimento" class="block text-xs font-bold text-gray-700 mb-1.5">Data de nascimento</label>
              <input type="date" id="inp-nascimento"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <!-- Estado civil -->
            <div>
              <label for="inp-estado-civil" class="block text-xs font-bold text-gray-700 mb-1.5">Estado civil</label>
              <select id="inp-estado-civil"
                      class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm text-gray-400 bg-white focus:outline-none focus:border-[#8a09aa] transition-colors appearance-none">
                <option value="" disabled selected>Selecione</option>
                <option class="text-gray-800">Solteiro(a)</option>
                <option class="text-gray-800">Casado(a)</option>
                <option class="text-gray-800">Divorciado(a)</option>
                <option class="text-gray-800">Viúvo(a)</option>
                <option class="text-gray-800">União estável</option>
              </select>
            </div>

            <!-- Nacionalidade -->
            <div>
              <label for="inp-nacionalidade" class="block text-xs font-bold text-gray-700 mb-1.5">Nacionalidade</label>
              <input type="text" id="inp-nacionalidade" placeholder="Ex.: Brasileira" maxlength="60"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <!-- Endereço — linha inteira -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-3">
              <label for="inp-endereco" class="block text-xs font-bold text-gray-700 mb-1.5">Endereço completo</label>
              <input type="text" id="inp-endereco" placeholder="Rua, número, bairro, cidade, estado" maxlength="200"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <div>
              <label for="inp-cep" class="block text-xs font-bold text-gray-700 mb-1.5">CEP</label>
              <input type="text" id="inp-cep" placeholder="00000-000" maxlength="9" inputmode="numeric"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS poderá integrar com a API ViaCEP para autocompletar o endereço -->
            </div>

            <!-- Telefone -->
            <div>
              <label for="inp-telefone" class="block text-xs font-bold text-gray-700 mb-1.5">Telefone</label>
              <input type="text" id="inp-telefone" placeholder="(00) 00000-0000" maxlength="15" inputmode="numeric"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS aplicará máscara de telefone -->
            </div>

            <div>
              <label for="inp-celular" class="block text-xs font-bold text-gray-700 mb-1.5">Celular</label>
              <input type="text" id="inp-celular" placeholder="(00) 00000-0000" maxlength="15" inputmode="numeric"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <!-- E-mail -->
            <div>
              <label for="inp-email" class="block text-xs font-bold text-gray-700 mb-1.5">E-mail</label>
              <input type="email" id="inp-email" placeholder="email@exemplo.com" maxlength="120"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <span class="hidden text-xs text-red-500 mt-1 block" role="alert">E-mail inválido.</span>
            </div>

              <!-- PIS/PASEP -->
            <div>
              <label for="inp-pis" class="block text-xs font-bold text-gray-700 mb-1.5">Número do PIS/PASEP</label>
              <input type="text" id="inp-pis" placeholder="000.00000.00-0" maxlength="14" inputmode="numeric"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS aplicará máscara de PIS/PASEP -->
            </div>

            <!-- Nome dos pais — linha inteira -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-3">
              <label for="inp-nome-pais" class="block text-xs font-bold text-gray-700 mb-1.5">Nome do pai</label>
              <input type="text" id="inp-nome-pais" placeholder="Nome completo dos pais" maxlength="200"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">

                     <label for="inp-nome-pais" class="block text-xs font-bold text-gray-700 mb-1.5">Nome da mãe</label>
              <input type="text" id="inp-nome-pais" placeholder="Nome completo dos pais" maxlength="200"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

          </div>
        </details>


        <!-- ===================================================
        | SEÇÃO 3 — DADOS PROFISSIONAIS
        ==================================================== -->
        <details open class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-y border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Dados profissionais</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <div>
              <label for="inp-cargo" class="block text-xs font-bold text-gray-700 mb-1.5">Cargo</label>
              <input type="text" id="inp-cargo" placeholder="Ex.: Desenvolvedor" maxlength="80"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <span class="hidden text-xs text-red-500 mt-1 block" role="alert">Cargo é obrigatório.</span>
            </div>

            <div>
              <label for="inp-setor" class="block text-xs font-bold text-gray-700 mb-1.5">Setor / Departamento</label>
              <input type="text" id="inp-setor" placeholder="Ex.: Tecnologia" maxlength="80"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <div>
              <label for="inp-admissao" class="block text-xs font-bold text-gray-700 mb-1.5">Data de admissão</label>
              <input type="date" id="inp-admissao"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>


            <div>
              <label for="inp-contrato" class="block text-xs font-bold text-gray-700 mb-1.5">Tipo de contrato</label>
              <select id="inp-contrato"
                      class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm text-gray-400 bg-white focus:outline-none focus:border-[#8a09aa] transition-colors appearance-none">
                <option value="" disabled selected>Selecione</option>
                <option class="text-gray-800">CLT</option>
                <option class="text-gray-800">PJ</option>
                <option class="text-gray-800">Estágio</option>
                <option class="text-gray-800">Temporário</option>
                <option class="text-gray-800">Autônomo</option>
              </select>
            </div>

            <!-- Salário com prefixo R$ -->
            <div>
              <label for="inp-salario" class="block text-xs font-bold text-gray-700 mb-1.5">Salário</label>
              <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none select-none">R$</span>
                <input type="text" id="inp-salario" placeholder="0,00" maxlength="14" inputmode="numeric"
                       class="w-full h-11 pl-9 pr-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
                <!-- JS aplicará máscara de moeda -->
              </div>
            </div>

            <div>
              <label for="inp-jornada" class="block text-xs font-bold text-gray-700 mb-1.5">Jornada de trabalho</label>
              <select id="inp-jornada"
                      class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm text-gray-400 bg-white focus:outline-none focus:border-[#8a09aa] transition-colors appearance-none">
                <option value="" disabled selected>Selecione</option>
                <option class="text-gray-800">44h semanais (8h/dia)</option>
                <option class="text-gray-800">40h semanais</option>
                <option class="text-gray-800">36h semanais</option>
                <option class="text-gray-800">30h semanais</option>
                <option class="text-gray-800">Meio período</option>
                <option class="text-gray-800">Outro</option>
              </select>
            </div>

            <!-- Supervisor — 2 colunas em sm/lg -->
            <div class="col-span-1 sm:col-span-2">
              <label for="inp-supervisor" class="block text-xs font-bold text-gray-700 mb-1.5">Supervisor ou gestor responsável</label>
              <input type="text" id="inp-supervisor" placeholder="Nome do supervisor" maxlength="120"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS poderá implementar autocomplete com colaboradores já cadastrados -->
            </div>

            <div>
              <label for="inp-funcao" class="block text-xs font-bold text-gray-700 mb-1.5">Função</label>
              <input type="text" id="inp-funcao" placeholder="Ex.: Analista" maxlength="60"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm placeholder:text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
              <span class="hidden text-xs text-red-500 mt-1 block" role="alert">Função é obrigatória.</span>
            </div>

          </div>
        </details>

        <!-- ===================================================
        | SEÇÃO 4 — DOCUMENTAÇÃO
        ==================================================== -->
        <details open class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-y border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Documentação</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 grid grid-cols-1 sm:grid-cols-2 gap-4">

            <div>
              <label for="inp-ctps" class="block text-xs font-bold text-gray-700 mb-1.5">Carteira de Trabalho (CTPS)</label>
              <input type="file" id="inp-ctps" accept=".pdf,.jpg,.jpeg,.png"
                     class="w-full text-sm text-gray-500 border border-gray-300 rounded-lg px-3 py-2.5 cursor-pointer focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS poderá validar tamanho e tipo do arquivo antes do envio -->
            </div>

            <div>
              <label for="inp-titulo" class="block text-xs font-bold text-gray-700 mb-1.5">Título de eleitor</label>
              <input type="file" id="inp-titulo" accept=".pdf,.jpg,.jpeg,.png"
                     class="w-full text-sm text-gray-500 border border-gray-300 rounded-lg px-3 py-2.5 cursor-pointer focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <div>
              <label for="inp-reservista" class="block text-xs font-bold text-gray-700 mb-1.5">
                Certificado de reservista
                <span class="font-normal text-gray-400 text-xs">(para homens, quando aplicável)</span>
              </label>
              <input type="file" id="inp-reservista" accept=".pdf,.jpg,.jpeg,.png"
                     class="w-full text-sm text-gray-500 border border-gray-300 rounded-lg px-3 py-2.5 cursor-pointer focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <div>
              <label for="inp-diplomas" class="block text-xs font-bold text-gray-700 mb-1.5">Certificados e diplomas</label>
              <input type="file" id="inp-diplomas" accept=".pdf,.jpg,.jpeg,.png" multiple
                     class="w-full text-sm text-gray-500 border border-gray-300 rounded-lg px-3 py-2.5 cursor-pointer focus:outline-none focus:border-[#8a09aa] transition-colors">
              <!-- JS exibirá lista de arquivos selecionados e permitirá remoção individual -->
            </div>

            <!-- CNH — linha inteira -->
            <div class="col-span-1 sm:col-span-2">
              <label for="inp-cnh" class="block text-xs font-bold text-gray-700 mb-1.5">
                Carteira de habilitação
                <span class="font-normal text-gray-400 text-xs">(se exigida pelo cargo)</span>
              </label>
              <input type="file" id="inp-cnh" accept=".pdf,.jpg,.jpeg,.png"
                     class="w-full text-sm text-gray-500 border border-gray-300 rounded-lg px-3 py-2.5 cursor-pointer focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

          </div>
        </details>

        <!-- ===================================================
        | SEÇÃO 5 — BENEFÍCIOS
        ==================================================== -->
        <details open class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-y border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Benefícios</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 grid grid-cols-1 sm:grid-cols-2 gap-3">

            <label class="flex items-center gap-2.5 text-sm font-medium text-gray-700 cursor-pointer">
              <input type="checkbox" id="chk-vale-transporte" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
              Vale-transporte
            </label>

            <label class="flex items-center gap-2.5 text-sm font-medium text-gray-700 cursor-pointer">
              <input type="checkbox" id="chk-vale-alimentacao" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
              Vale-alimentação / refeição
            </label>

            <label class="flex items-center gap-2.5 text-sm font-medium text-gray-700 cursor-pointer">
              <input type="checkbox" id="chk-plano-saude" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
              Plano de saúde
            </label>

            <label class="flex items-center gap-2.5 text-sm font-medium text-gray-700 cursor-pointer">
              <input type="checkbox" id="chk-plano-odonto" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
              Plano odontológico
            </label>

          </div>
        </details>
        <!-- ===================================================
        | SEÇÃO 6 — PERMISSÕES (original)
        ==================================================== -->
        <details open class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-y border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Permissões</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 space-y-4">
            <!--
              Pensado em fazer uma identificação visual para colaboradores desligados,
              mostrando qual era o nível de acesso que tinham — ex.: badge "Colaborador desligado"
              com ícone de aviso para diferenciar visualmente dos colaboradores ativos.
            -->

            <div>
              <label class="flex items-center gap-2.5 text-sm font-bold text-gray-800 cursor-pointer">
                <input type="checkbox" id="chk-admin" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
                Admin
              </label>
              <p class="text-xs text-gray-500 mt-1.5 ml-6">Permite inserir, deletar e visualizar dados de outros colaboradores.</p>
            </div>

            <div>
              <label class="flex items-center gap-2.5 text-sm font-bold text-gray-800 cursor-pointer">
                <input type="checkbox" id="chk-supervisor-perm" class="w-4 h-4 shrink-0 cursor-pointer accent-[#8a09aa]">
                Supervisor
              </label>
              <p class="text-xs text-gray-500 mt-1.5 ml-6">Permite adicionar, deletar e modificar cards.</p>
            </div>

          </div>
        </details>

        <!-- ===================================================
        | SEÇÃO 7 — DESLIGAMENTO (fechado por padrão)
        ==================================================== -->
        <details class="group">
          <summary class="flex items-center justify-between px-4 sm:px-6 py-3 border-y border-gray-100 hover:bg-gray-50 transition-colors select-none cursor-pointer list-none">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Desligamento</span>
            <i class="fa-solid fa-chevron-down text-gray-400 text-xs transition-transform duration-200 group-open:rotate-180"></i>
          </summary>

          <div class="px-4 sm:px-6 py-5 grid grid-cols-1 sm:grid-cols-2 gap-4">

            <div>
              <label for="inp-data-desligamento" class="block text-xs font-bold text-gray-700 mb-1.5">Data de desligamento</label>
              <input type="date" id="inp-data-desligamento"
                     class="w-full h-11 px-4 border border-gray-300 rounded-lg text-sm text-gray-400 focus:outline-none focus:border-[#8a09aa] transition-colors">
            </div>

            <div>
              <label for="inp-motivo-saida" class="block text-xs font-bold text-gray-700 mb-1.5">Motivo da saída</label>
              <select id="inp-motivo-saida"
                      class="w-full h-11 px-4 pr-10 border border-gray-300 rounded-lg text-sm text-gray-400 bg-white focus:outline-none focus:border-[#8a09aa] transition-colors appearance-none">
                <option value="" disabled selected>Selecione</option>
                <option class="text-gray-800">Pedido de demissão</option>
                <option class="text-gray-800">Demissão sem justa causa</option>
                <option class="text-gray-800">Demissão por justa causa</option>
                <option class="text-gray-800">Aposentadoria</option>
                <option class="text-gray-800">Fim de contrato</option>
                <option class="text-gray-800">Falecimento</option>
                <option class="text-gray-800">Outro</option>
              </select>
            </div>

          </div>
        </details>

        <!-- ===================================================
        | RODAPÉ — BOTÕES
        ==================================================== -->
        <footer class="flex flex-col-reverse gap-3 px-4 sm:px-6 py-4 border-t border-gray-100 sm:flex-row sm:justify-end">
          <!-- JS irá limpar o formulário e resetar o estado de edição ao clicar em Limpar -->
          <button type="button" id="btnCancelar"
                  class="w-full sm:w-auto sm:min-w-[120px] h-10 px-6 border border-gray-300 rounded-lg text-sm font-semibold text-gray-600 hover:bg-gray-50 transition-colors">
            Limpar
          </button>
          <button type="submit" id="btnSalvar"
                  class="w-full sm:w-auto sm:min-w-[120px] h-10 px-6 bg-[#8a09aa] hover:bg-[#70087a] text-white rounded-lg text-sm font-semibold transition-colors">
            Salvar
          </button>
        </footer>

      </form>
    </div>

  </main>
</body>
</html>