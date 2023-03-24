<?php 
    include("config/cabecalho.php");
    include("config/conexao.php");
?>    
    <div class="div-global">

        <div class="div-menu-lateral">
            <img src="img/img/senai-logo1.png" alt="">

            <button>Painel de controle</button>
            <button>Usuários</button>
            <button>Minha conta</button>
            <button>Segurança</button>
            <button>Corporativo</button>
            <button>Esportes</button>
            <button>Acadêmico</button>
            <button>Relatórios</button>
            <button>Custumozação</button>
            <button>Alertas</button>
        </div>

        <div class="div-conteudo">

            <header class="topo">
                <nav>
                    <a href="">Dashboards</a>
                    <a href="">Páginas</a>
                    <a href="">Aplicativos</a>
                    <a href="">Ajuda</a>
                </nav>

                <form action="" method="POST">
                    <input type="text">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </header>

            <main class="corpo">

                <div class="painel-controle">
                    <h1>E-commerce | Painel de Controle</h1>

                    <div class="vendas-mes">
                        <p>aqui vai ser o valor</p>
                        <p>Vendas esse mês</p>
                        <i class="fa-solid fa-coins"></i>
                    </div>

                    <div class="produtos-ativos">
                        <p>345</p>
                        <p>Produtos ativos</p>
                    </div>

                    <div class="fornecedores">
                        <p>25</p>
                        <p>Fornecedores</p>
                    </div>

                    <div class="clientes">
                        <p>4500</p>
                        <p>Clientes</p>
                    </div>

                </div>

                <div class="carrinho">
                    <div class="carrinho-ativo">

                    </div>

                    <div class="novo-aplicativo">

                    </div>
                </div>
                
                <div class="pedido-vendas">
                    <div class="pedido">

                    </div>

                    <div class="venda">

                    </div>
                </div>

            </main>

            <footer class="rodape">
                <p>2023© Senai Livre - Sistema de Controle</p>
            </footer>
        </div>

    </div>
<?php 
    include("config/rodape.php");
?>    