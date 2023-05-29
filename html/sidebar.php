<!DOCTYPE html>
<html lang="en">
  <body>
       <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Trecho a seguir originalmente era 'components' agora é 'cadastros', ao lado de cada href há o nome original de cada página-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cadastros-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Cadastros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cadastros-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#cadastros-genericos-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>1- Genéricos</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i>
            </a>
              <ul id="cadastros-genericos-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
                <a href="../grupo_produtos/index.php">
                  <i class="bi bi-circle"></i><span>1- Grupos de Produtos</span>
                </a>
                <a href="../pracas_clientes/index.php">
                  <i class="bi bi-circle"></i><span>2- Praças de Clientes</span>
                </a>
                <a href="../codigos_fiscais/index.php">
                  <i class="bi bi-circle"></i><span>3- Códigos Fiscais</span>
                </a>
                <a href="../situacao_tributaria/index.php">
                  <i class="bi bi-circle"></i><span>4- Situação tributária</span>
                </a>
                <a href="../forma_pagamento/index.php">
                  <i class="bi bi-circle"></i><span>5- Forma de Pagamento </span>
                </a>
                <a href="../historicos/index.php">
                  <i class="bi bi-circle"></i><span>6- Históricos</span>
                </a>
                <a href="../observacoes/index.php">
                  <i class="bi bi-circle"></i><span>7- Observações</span>
                </a>
                <a href="../bancos/index.php">
                  <i class="bi bi-circle"></i><span>8- Bancos</span>
                </a>
                <a href="../operacoes_bancos/index.php">
                 <i class="bi bi-circle"></i> <span>9- Operações/Bancos</span>
                </a>
                <a href="../tipo_moedas/index.php">
                  <i class="bi bi-circle"></i><span>a- Tipo de Moedas</span>
                </a>
                <a href="../plano_contas/index.php">
                  <i class="bi bi-circle"></i><span>b- Plano de Contas</span>
                </a>
                <a href="../tipo_atividades/index.php">
                  <i class="bi bi-circle"></i><span>c- Tipo de Atividades </span>
                </a>
                <a href="../centro_custo/index.php">
                  <i class="bi bi-circle"></i><span>d- Centro de Custo</span>
                </a>
                <a href="../aliquota_produtos/index.php">
                  <i class="bi bi-circle"></i><span>e- Alíquotas dos produtos </span>
                </a>
                <a href="../reducao_z/index.php">
                  <i class="bi bi-circle"></i><span>f- Redução Z </span>
                </a>
                <a href="../condicoes_fornecimento/index.php">
                  <i class="bi bi-circle"></i><span>g- Condições de Fornecimento</span>
                </a>
                <a href="../setores_pedidos/index.php">
                  <i class="bi bi-circle"></i><span>h- Setores dos Pedidos</span>
                </a>
                <a href="../tabela_precos/index.php">
                  <i class="bi bi-circle"></i><span>i- Tabela de Preços</span>
                </a>
                <a href="../subgrupo_produtos/index.php">
                  <i class="bi bi-circle"></i><span>j- SubGrupo de Produtos</span>
                </a>
                <a href="../plano_contas_contabeis/index.php">
                  <i class="bi bi-circle"></i><span>k- Plano de Contas Contábeis</span>
                </a>
              </ul>
          </li>
          <li>
            <a href="cadastro-clientes.html"> <!-- components-accordion.html -->
              <i class="bi bi-circle"></i><span>2- Clientes</span>
            </a>
          </li>
          <li>
            <a href="../fornecedores/index.php"> <!-- components-badges.html -->
              <i class="bi bi-circle"></i><span>3- Fornecedores</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#cadastros-produtos-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>4- Produtos</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px"></i>
            </a>
              <ul id="cadastros-produtos-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
                <a href="cadastro-produtos-manutencao.html">
                  <i class="bi bi-circle"></i><span>Manutenção</span>
                </a>
                <a href="cadastro-produtos-ajuste_preco.html">
                  <i class="bi bi-circle"></i><span>Ajuste de preço</span>
                </a>
              </ul>
          </li>
          <li>
            <a href="cadastro-funcionarios.html"> <!-- components-buttons.html -->
              <i class="bi bi-circle"></i><span>5- Funcionários/vendedores</span>
            </a>
          </li>
          <li>
            <a href="cadastro-transportador.html"> <!-- components-cards.html -->
              <i class="bi bi-circle"></i><span>6- Transportador</span>
            </a>
          </li>
          <li>
            <a href="cadastro-conta_correntes.html"> <!-- components-carousel.html -->
              <i class="bi bi-circle"></i><span>7- Conta correntes</span>
            </a>
          </li>
          <li>
            <a href="cadastro-agenda_contatos.html"> <!-- components-list-group.html -->
              <i class="bi bi-circle"></i><span>8- Agenda(contatos)</span>
            </a>
          </li>
          <li>
            <a href="cadastro-servicos.html"> <!-- components-modal.html -->
              <i class="bi bi-circle"></i><span>9- Serviços/Mão de obra</span>
            </a>
          </li>
          <li>
            <a href="cadastro-mural_recados.html"> <!-- components-tabs.html -->
              <i class="bi bi-circle"></i><span>A- Mural de recados</span>
            </a>
          </li>
          <li>
            <a href="cadastro-veiculos.html"> <!-- components-pagination.html -->
              <i class="bi bi-circle"></i><span>B- Veículos</span>
            </a>
          </li>
          <li>
            <a href="cadastro-representantes.html"> <!-- components-progress.html -->
              <i class="bi bi-circle"></i><span>C- Representantes</span>
            </a>
          </li>
          <li>
            <a href="cadastro-status.html">  <!-- components-spinners.html -->
              <i class="bi bi-circle"></i><span>D- Status/Cores</span>
            </a>
          </li>
          <li>
            <a href="cadastro-controle.html"> <!-- components-tooltips.html -->
              <i class="bi bi-circle"></i><span>E- Controle PCP</span>
            </a>
          </li>
          <li>
            <a href="cadastro-empresas.html"> 
              <i class="bi bi-circle"></i><span>F- Empresas</span>
            </a>
          </li>
          <li>
            <a href="cadastro-contador.html">
              <i class="bi bi-circle"></i><span>G- Contador</span>
            </a>
          </li>
          <li>
            <a href="components-fator_preco.html">
              <i class="bi bi-circle"></i><span>H- Fator de preço</span>
            </a>
          </li>
        </ul>
      </li><!-- End cadastro (antigo Components) Nav -->

      <!-- Trecho a seguir originalmente era 'forms' agora é 'manutenção'-->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manutenção</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="manutencao-entrada_mercadoria.html">  <!-- forms-elements.html -->
              <i class="bi bi-circle"></i><span>1- Entradas de Mercadorias</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_devolucao.html">  <!-- forms-layouts.html-->
              <i class="bi bi-circle"></i><span>2- Vendas e Devolução - NFe</span>
            </a>
          </li>
          <li>
            <a href="manutencao-pedidos_de_venda_orcamento_os.html"> <!-- forms-editors.html-->
              <i class="bi bi-circle"></i><span>3- Pedidos de Venda e Orçamentos/OS</span>
            </a>
          </li>
          <li>
            <a href="manutencao-pedidos_de_compra.html">   <!-- forms-validation.html-->
              <i class="bi bi-circle"></i><span>4- Pedidos de Compra</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_balcao.html"> 
              <i class="bi bi-circle"></i><span>5- Venda no Balcão - ECF-FI</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#manutencao-acert-estoq-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>5 - Acerto de Estoque</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px"></i>
            </a>
              <ul id="manutencao-acert-estoq-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
                <a href="cadastro-produtos-manutencao.html">
                  <i class="bi bi-circle"></i><span>Entrada de Produtos</span>
                </a>
                <a href="cadastro-produtos-ajuste_preco.html">
                  <i class="bi bi-circle"></i><span>Saída de Produtos</span>
                </a>
              </ul>
          </li>
          <li>
            <a href="manutencao-ordem_producao.html">
              <i class="bi bi-circle"></i><span>7- Ordem Produção</span>
            </a>
          </li>
          <li>
            <a href="manutencao-producao_lajes.html">
              <i class="bi bi-circle"></i><span>8- Produção de Lajes</span>
            </a>
          </li>
          <li>
            <a href="manutencao-solic_serv_externo.html">
              <i class="bi bi-circle"></i><span>9- Solicitação de Serviço Externo</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_resumida.html">
              <i class="bi bi-circle"></i><span>A- Venda Resumida</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_resumida_kg.html">
              <i class="bi bi-circle"></i><span>B- Venda Resumida Kilos</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_cupom_nf.html">
              <i class="bi bi-circle"></i><span>C- Venda Cupom NF</span>
            </a>
          </li>
          <li>
            <a href="manutencao-venda_cupom_nfce.html">
              <i class="bi bi-circle"></i><span>D- Venda Cupom NFCe</span>
            </a>
          </li>
          <li>
            <a href="manutencao-lancamento_combustivel.html">
              <i class="bi bi-circle"></i><span>E- Lançamento de Combustível</span>
            </a>
          </li>
          <li>
            <a href="manutencao-emissao_mdfe.html">
              <i class="bi bi-circle"></i><span>F- Emissão de MDFe</span>
            </a>
          </li>
          <li>
            <a href="manutencao-entradas_ctes.html">
              <i class="bi bi-circle"></i><span>G- Entradas de CTes</span>
            </a>
          </li>
          <li>
            <a href="manutencao-proposta_deposito.html">
              <i class="bi bi-circle"></i><span>H- Proposta Depósito</span>
            </a>
          </li>
          <li>
            <a href="manutencao-entrega_programada.html">
              <i class="bi bi-circle"></i><span>I- Entrega Programada Depósito</span>
            </a>
          </li>
          <li>
            <a href="manutencao-controle_prod.html">
              <i class="bi bi-circle"></i><span>J- Controle de Produção</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Administrativo</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="administrativo-contas_pagar.html"> <!-- tables-general.html -->
              <i class="bi bi-circle"></i><span>1- Contas a Pagar</span>
            </a>
          </li>
          <li>
            <a href="administrativo-contas_pagar_lote.html"> <!-- tables-data.html -->
              <i class="bi bi-circle"></i><span>2- Contas a Pagar em Lote</span>
            </a>
          </li>
          <li>
            <a href="administrativo-lancamento_salario_vales.html"> 
              <i class="bi bi-circle"></i><span>3- Lançamento de Salário e Vales</span>
            </a>
          </li>
          <li>
            <a href="administrativo-contas_receber.html"> 
              <i class="bi bi-circle"></i><span>4- Contas a Receber</span>
            </a>
          </li>
          <li>
            <a href="administrativo-Baixa_contas_receb_lote.html"> 
              <i class="bi bi-circle"></i><span>5- Baixa de Contas a Receber em Lote</span>
            </a>
          </li>
          <li>
            <a href="administrativo-fluxo_bancário.html"> 
              <i class="bi bi-circle"></i><span>6- Fluxo Bancário</span>
            </a>
          </li>
          <li>
            <a href="administrativo-cheques_recebidos.html">
              <i class="bi bi-circle"></i><span>7- Cheques Recebidos</span>
            </a>
          </li>
          <li>
            <a href="administrativo-fluxo_caixa.html">
              <i class="bi bi-circle"></i><span>8- Fluxo de Caixa</span>
            </a>
          </li>
          <li>
            <a href="administrativo-balancete_mensal.html">
              <i class="bi bi-circle"></i><span>9- Balancete Mensal</span>
            </a>
          </li>
          <li>
            <a href="administrativo-cheques_emitidos.html">
              <i class="bi bi-circle"></i><span>A- Cheques Emitidos</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-graph-up-arrow"></i><span>Relatórios</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a class="nav-link collapsed" data-bs-target="#moviment-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>1- Movimentação</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i> 
            </a>
            <ul id="moviment-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
              <li>
                <a href="relatorios-movimentacao-compras_prod.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>1- Compras por Produto</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-compras_forn.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>2- Compras por Fornecedor</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-compras_period.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>3- Compras por Período</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-compras_grupo.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>4- Compras por Grupo</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-vendas_period.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>5- Vendas por Período</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-vendas_prod.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>6- Vendas por Produto(Mapa de Carga)</span>
                </a>
              </li>
              <li>
                <a class="nav-link collapsed" data-bs-target="#vend_cli-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-circle-fill"></i><span>7- Vendas por Cliente</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i> 
                 </a>
                 <ul id="vend_cli-nav" class="nav-content2 collapse" data-bs-parent="#sidebar-nav2">
                    <li>
                      <a href="relatorios-movimentacao-vendas_cli_rel_prod.html"> <!-- charts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>Relação de Produtos</span>
                      </a>
                    </li>
                    <li>
                      <a href="relatorios-movimentacao-vendas_cli_rel_vendas.html"> <!-- charts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>Relação de Vendas</span>
                      </a>
                    </li>
                 </ul>
              </li>
              <li>
                <a href="relatorios-movimentacao-vendas_praca.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>8- Vendas por Praça</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-vendas_grupo.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>9- Vendas por Grupo</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-vendas_vendedor.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>A- Vendas por Vendedor </span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-comiss_vendedor.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>B- Comissões por Vendedores</span>
                </a>
              </li>
              <li>
                <a class="nav-link collapsed" data-bs-target="#vend_pedidos-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-circle-fill"></i><span>C- Pedidos</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i> 
                 </a>
                 <ul id="vend_pedidos-nav" class="nav-content2 collapse" data-bs-parent="#sidebar-nav2">
                    <li>
                      <a href="relatorios-movimentacao-pedidos_todos.html"> <!-- charts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>Todos</span>
                       </a>
                    </li>
                    <li>
                      <a href="relatorios-movimentacao-pedidos_baixados.html"> <!-- charts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>Baixados</span>
                       </a>
                    </li>
                    <li>
                      <a href="relatorios-movimentacao-pedidos_por_prod.html"> <!-- charts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>Por Produto</span>
                       </a>
                    </li>
                 </ul>
              </li>
              <li>
                <a href="relatorios-movimentacao-pos_vendas.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>D- Posição de Vendas</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-devolucao_periodo.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>E- Devolução por Período</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-balancete_mensal.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>F- Balancete Mensal</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-acerto_estoque.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>G- Acerto de Estoque</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-saldo_estoque.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>H- Saldo em Estoque</span>
                </a>
              </li>
              <li>
                <a href="relatorios-movimentacao-impress_lote_nfe.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>I - Impressão em Lote de NF-e</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#financeiro-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>2 - Financeiro</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i> 
            </a>
            <ul id="financeiro-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
              <li>
                <a href="relatorios-financeiro-titulos_pagar.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>1- Títulos a Pagar</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-titulos_receber.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>2- Títulos a Receber</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-fluxo_bancario.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>3- Fluxo Bancário</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-fluxo_caixa.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>4- Fluxo de Caixa</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-bloq_dubl_carn.html"> <!-- chcarts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>5- Bloquetos/Duplicatas/Carnês</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-cheques_receb.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>6- Cheques Recebidos</span>
                </a>
              </li>
              <li>
                <a href="relatorios-financeiro-test_contas_receb.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>(C) - Teste de Contas a Receber</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#cadastrosf-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>3- Cadastros</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i>
            </a>
            <ul id="cadastrosf-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
              <li>
                <a href="relatorios-cadastros-clientes.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>1- Clientes</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-fornecedores.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>2- Fornecedores</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-produtos.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>3- Produtos</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-vendedores.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>4- Vendedores</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-transportador.html"> <!-- chcarts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>5- Transportador</span>
                </a>
              </li>
              <li>
                <a class="nav-link collapsed" data-bs-target="#referenciais-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-circle-fill"></i><span>6- Referênciais</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i>
                </a>
                <ul id="referenciais-nav" class="nav-content2 collapse" data-bs-parent="#sidebar-nav2">
                  <li>
                      <a href="relatorios-cadastros-referenciais-grupo_prod.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>1- Grupo de Produtos</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-praca_cli.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>2- Praça de Clientes</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-cod_fisc.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>3- Códigos Fiscais</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-sit_trib.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>4- Situação Tributáriaa</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-forma_pag.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>5- Forma de Pagamento</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-hist.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>6- Histórico</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-obs.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>7- Observação</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-bancos.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>8- Bancos</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-op_banc.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>9- Operações Bancárias</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-padronizados.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>0- Padronizados</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-tipo_moeda.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>A- Tipo de Moedas</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-plano_conta.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>B- Plano de Contas</span>
                      </a>
                  </li>
                  <li>
                      <a href="relatorios-cadastros-referenciais-tipo_ativ.html"> <!-- chcarts-apexcharts.html -->
                        <i class="bi bi-circle"></i><span>C- Tipo de Atividades</span>
                      </a>
                  </li>

                </ul>
              </li>
              <li>
                <a href="relatorios-cadastros-conta_corrente.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>7- Conta  Corrente</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-agenda.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>8- Agenda (Contatos)</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-inventario.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>9- Inventário</span>
                </a>
              </li>
              <li>
                <a href="relatorios-cadastros-rel_vendas.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>(C) - Relatório de Vendas ABC</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-target="#graficos-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-circle-fill"></i><span>4- Gráficos</span><i class="bi bi-chevron-down ms-auto" style="font-size: 15px;"></i>
            </a>
            <ul id="graficos-nav" class="nav-content1 collapse" data-bs-parent="#sidebar-nav1">
              <li>
                <a href="relatorios-graf_vendedor.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>1- Vendas por Vendedor</span>
                </a>
              </li>
              <li>
                <a href="relatorios-graf_rel_vendas_dfg.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>(C) - Relatório de Vendas DFG</span>
                </a>
              </li>
              <li>
                <a href="relatorios-graf_test_graf.html"> <!-- charts-apexcharts.html -->
                  <i class="bi bi-circle"></i><span>(C) - Teste de Gráfico 123</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="relatorios-meus_relatorios.html"> 
              <i class="bi bi-circle"></i><span>5- Meus Relatórios</span>
            </a>
          </li>
          <li>
            <a href="relatorios-customizados.html"> 
              <i class="bi bi-circle"></i><span>6- Customizados</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-activity"></i><span>Clínica</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="clinica-agenda.html"> <!-- icons-bootstrap.html -->
              <i class="bi bi-circle"></i><span>Agenda</span>
            </a>
          </li>
          <li>
            <a href="clinica-abertura_atendimento.html">  <!-- icons-remix.html -->
              <i class="bi bi-circle"></i><span>Abertura de Atendimento</span>
            </a>
          </li>
          <li>
            <a href="clinica-lancamento_procedimentos.html"> <!-- icons-boxicons.html -->
              <i class="bi bi-circle"></i><span>Lançamento de Procedimentos</span>
            </a>
          </li>
          <li>
            <a href="clinica-fechamento_atendimento.html"> 
              <i class="bi bi-circle"></i><span>Fechamento de Atendimento</span>
            </a>
          </li>
          <li>
            <a href="clinica-historio_paciente.html"> 
              <i class="bi bi-circle"></i><span>Histórico do Paciente</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart"></i><span>Mercado Livre</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="mercado_livre-pedidos.html"> <!-- icons-bootstrap.html -->
              <i class="bi bi-circle"></i><span>Pedidos</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-star"></i><span>Buffet Festas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="buffet_festas-agenda_festas_online.html"> <!-- icons-bootstrap.html -->
              <i class="bi bi-circle"></i><span>Agenda de Festas Online</span>
            </a>
          </li>
          <li>
            <a href="buffet_festas-cadastro_festas.html"> <!--icons-remix.html -->
              <i class="bi bi-circle"></i><span>Cadastro de Festas</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->


       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-telephone"></i><span>Tele-marketing</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tele_marketing-clientes.html"> <!-- icons-bootstrap.html -->
              <i class="bi bi-circle"></i><span>Clientes</span>
            </a>
          </li>
          <li>
            <a href="tele_marketing-sac.html"> <!--icons-remix.html -->
              <i class="bi bi-circle"></i><span>SAC</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav4" data-bs-toggle="collapse" href="#">
          <i class="bi bi-window"></i><span>Parâmetros</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="parametros-config_gerais_empresa.html"> <!-- icons-bootstrap.html -->
              <i class="bi bi-circle"></i><span>1- Configurações Gerais da Empresa</span>
            </a>
          </li>
          <li>
            <a href="parametros-formatacao_docs.html"> <!--icons-remix.html -->
              <i class="bi bi-circle"></i><span>2- Formatação de Documentos</span>
            </a>
          </li>
          <li>
            <a href="parametros-op_impressoras_fiscais.html">
              <i class="bi bi-circle"></i><span>3- Opções das Impressoras Fiscais</span>
            </a>
          </li>
           <li>
            <a href="parametros-geracao_arquivo_sicoob.html">
              <i class="bi bi-circle"></i><span>4- Geração de Arquivo Remessa para SICOOB</span>
            </a>
          </li>
           <li>
            <a href="parametros-ajuda_sistema.html">
              <i class="bi bi-circle"></i><span>5- Ajuda do Sistema</span>
            </a>
          </li>
           <li>
            <a href="parametros-info_sistema.html">
              <i class="bi bi-circle"></i><span>6- Informações sobre o Sistema</span>
            </a>
          </li>
           <li>
            <a href="parametros-exporta_txt_palm_pocket.html">
              <i class="bi bi-circle"></i><span>7- Exporta .TXT para PALM ou Pocket PC.</span>
            </a>
          </li>
           <li>
            <a href="parametros-gera_arquivo_sintegra.html">
              <i class="bi bi-circle"></i><span>8- Gera arquivo para o Sintegra</span>
            </a>
          </li>
           <li>
            <a href="parametros-validador.html">
              <i class="bi bi-circle"></i><span>9- Validador "Valida-PR"</span>
            </a>
          </li>
           <li>
            <a href="parametros-visualizador_nfe.html">
              <i class="bi bi-circle"></i><span>A- Visualizador de NF-e (XML)</span>
            </a>
          </li>
           <li>
            <a href="parametros-cadastro_modulos.html">
              <i class="bi bi-circle"></i><span>B- Cadastro de Modulos</span>
            </a>
          </li>
           <li>
            <a href="parametros-consulta_sql.html">
              <i class="bi bi-circle"></i><span>C- Consulta SQL</span>
            </a>
          </li>
           <li>
            <a href="parametros-validados_sintegra_2012.html">
              <i class="bi bi-circle"></i><span>D- Validados Sintegra 2012</span>
            </a>
          </li>
           <li>
            <a href="parametros-gera_arquivo_sped_pis.html">
              <i class="bi bi-circle"></i><span>E- Gera Arquivo para o SPED PIS/COFINS</span>
            </a>
          </li>
           <li>
            <a href="parametros-verifica_xml.html">
              <i class="bi bi-circle"></i><span>F- Verifica arquivo XML</span>
            </a>
          </li>
           <li>
            <a href="parametros-gera_arquivo_sped_icms.html">
              <i class="bi bi-circle"></i><span>G- Gera Arquivo para o SPED ICMS/IPI</span>
            </a>
          </li>
           <li>
            <a href="parametros-mostra_resumo_diario.html">
              <i class="bi bi-circle"></i><span>H- Mostra Resumo Diario</span>
            </a>
          </li>
           <li>
            <a href="parametros-limpeza_base_dados.html">
              <i class="bi bi-circle"></i><span>I- Limpeza de Base de Dados</span>
            </a>
          </li>
           <li>
            <a href="parametros-val_campos.html">
              <i class="bi bi-circle"></i><span>J- Validação de Campos</span>
            </a>
          </li>
           <li>
            <a href="parametros-executar.html">
              <i class="bi bi-circle"></i><span>K- Executar</span>
            </a>
          </li>
           <li>
            <a href="parametros-momento_reflexao.html">
              <i class="bi bi-circle"></i><span>L- Momento de Reflexão</span>
            </a>
          </li>
           <li>
            <a href="parametros-atualiza_dados_bethel.html">
              <i class="bi bi-circle"></i><span>M- Atualiza Dados Bethel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav5" data-bs-toggle="collapse" href="#">
          <i class="bi bi-wifi"></i><span>Internet</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="internet-envia_prod_serv_online.html">
              <i class="bi bi-circle"></i><span>Envia Produtos para Servidor Online</span> <!-- icons-bootstrap.html -->
            </a>
          </li>
          <li>
            <a href="internet-baixa_prod_serv_online.html">
              <i class="bi bi-circle"></i><span>Baixa Produtos para Servidor Online</span> <!--icons-remix.html -->
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nav6" data-bs-toggle="collapse" href="#">
          <i class="bi bi-x"></i><span>Sair</span>
        </a>
        
      </li>
      <!-- Dashboard-->


      <li class="nav-heading">Páginas</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contato</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../usuario/registro.php">
          <i class="bi bi-card-list"></i>
          <span>Registro</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Em branco</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  </body>
</html>