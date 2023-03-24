<?php 
    include("config/cabecalho.php");
    include("config/conexao.php")
?>    
    <div class="div-global">

        <div class="div-menu-lateral">
            <img class="logo" src="img/logo-senai.png" alt="">

            <button>
                <img src="img/Frame.png" alt="">
                Painel de controle
            </button>

            <button>
                <img src="img/agenda.png" alt="">
                Usuários
            </button>

            <button>
                <img src="img/prisma.png" alt="">
                Minha conta
            </button>

            <button>
                <img src="img/conta2.png" alt="">
                Segurança
            </button>

            <button>
                <img src="img/pastinha.png" alt="">
                Corporativo
            </button>

            <button>
                <img src="img/bola.png" alt="">
                Esportes
            </button>

            <button>
                <img src="img/monumento.png" alt="">
                Acadêmico
            </button>

            <button>
                <img src="img/graficoPizza.png" alt="">
                Relatórios
            </button>
            <button>
                <img src="img/balde.png" alt="">
                Custumozação
            </button>
            <button>
                <img src="img/sino.png" alt="">
                Alertas
            </button>
        </div>

        <div class="div-conteudo">

            <header class="topo">
                <nav>
                    <a class="dashboards" href="">Dashboards</a>
                    <a href="">Páginas</a>
                    <a href="">Aplicativos</a>
                    <a href="">Ajuda</a>
                </nav>
                <nav>
                    <a href="cadastrouser.php">Criar conta</a>
                    <a href="loginuser.php">entrar</a>
                    <a href="cadastrofornec.php">cadastrar fornecedor</a>
                    <a href="cadastroproduto.php">cadastrar produto</a>
                </nav>

                <form action="" method="POST">
                    <input type="text">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </header>

            <main class="corpo">
                <h1>E-commerce | Painel de Controle</h1>
                <div class="painel-controle">

                    <div class="vendas-mes">
                        <div>
                            <p>aqui vai ser o valor</p>
                            <p>Vendas esse mês</p>
                        </div>
                        <i class="fa-solid fa-coins"></i>
                    </div>

                    <div class="produtos-ativos">
                        <?php        
                            $query_produtos = "SELECT COUNT(id) AS p FROM produto";
                            $result_produtos = $conexao->prepare($query_produtos);
                            $result_produtos->execute();

                            $row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC);
                            echo $row_produto['p'];
                        ?>
                        <p>Produtos ativos</p>
                        <img src="img/Vector.png" alt="">
                    </div>

                    <div class="fornecedores">
                    <?php        
                        $query_fornec= "SELECT COUNT(id) AS a FROM fornecedores";
                        $result_fornec = $conexao->prepare($query_fornec);
                        $result_fornec->execute();

                        $row_fornec = $result_fornec->fetch(PDO::FETCH_ASSOC);
                        echo $row_fornec['a'];
                    ?>
                        <p>Fornecedores</p>
                        <img src="img/predio.png" alt="">
                    </div>

                    <div class="clientes">
                    <?php        
                            $query_client = "SELECT COUNT(id) AS c FROM usuarios";
                            $result_client = $conexao->prepare($query_client);
                            $result_client->execute();

                            $row_client = $result_client->fetch(PDO::FETCH_ASSOC);
                            echo $row_client['c'];
                        ?>
                        <p>Clientes</p>
                        <img src="img/conta.png" alt="">
                    </div>

                </div>

                <div class="carrinho-ativo">
                        <h4>Carrinhos ativos</h4>

                        <div class="grid">
                            <button>
                                <div>
                                    <img src="img/camiseta.png" alt="">
                                </div>
                                Moda
                            </button>
                            <button>
                                <img src="img/jogos.png" alt="">
                                Jogos
                            </button>
                            <button>
                                <img src="img/relogio.PNG" alt="">
                                Eletrônicos
                            </button>
                            <button>
                                <img src="img/esporte.png" alt="">
                                Esporte
                            </button>
                            <button>
                                <img src="img/tenis.PNG" alt="">
                                Tênis
                            </button>
                        </div>

                <div class="carrinho">
                <?php
                    $query_product = "SELECT * FROM produto "; 
                    $result_product = $conexao->prepare($query_product);
                    $result_product->execute();   
                    
                     foreach ($result_product as $cliente ) : ?>
                     <table>
                        <tr>
                            <td><?php echo $cliente['nome']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $cliente['quantidade']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $cliente['preco']; ?></td>
                        </tr>
                     </table>   
                    <?php endforeach; ?>           

                    <div class="novo-aplicativo">
                        <h3>Novo aplicativo</h3>
                        <h3>de E-commerce</h3>
                        <img src="img/pessoa.PNG" alt="">
                        <br>
                        <button>Ver Novidades</button>
                        <button>Ver Produtos</button>
                    </div>
                
                <div class="pedido-vendas">
                    <div class="pedido">
                        <p>Pedidos</p>
                        <p>No último mês</p>
                        <button>Mais detalhes</button>

                        <div>
                            <img src="img/camisetaEle.png" alt="">
                            <p>Elephant 1802</p>
                            <p>To: Jason Bourne</p>

                            <div>
                                <button><i class="fa-solid fa-ellipsis"></i></button>
                                <p>Pago</p>
                            </div>
                        </div>

                        <div>
                            <img src="img/camisetapreta.png" alt="">
                            <p>RiseUP</p>
                            <p>To: Marie Durant</p>

                            <div>
                                <button><i class="fa-solid fa-ellipsis"></i></button>
                                <p>Processando</p>
                            </div>
                        </div>

                        <div>
                            <img src="img/camisetamarela.png" alt="">
                            <p>Yellow Stone</p>
                            <p>To: Dan Wilson</p>

                            <div>
                                <button><i class="fa-solid fa-ellipsis"></i></button>
                                <p>Cancelado</p>
                            </div>
                        </div>

                        <div>
                            <img src="img/camisetaesporte.png" alt="">
                            <p>Elephant 1802</p>

                            <div>
                                <button><i class="fa-solid fa-ellipsis"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="venda">
                        <table>
                            <tr>
                                <td>Item</td>
                                <td>Produto</td>
                                <td>Data</td>
                                <td>Preço</td>
                                <td>Status</td>
                                <td>QTY</td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <p>Macbook Air M1</p>                                        
                                    </div>

                                    <div>
                                        <p>Surface Laptop 4</p>
                                    </div>
                                
                                    <div>
                                        <p>Logitech MX 250</p>
                                    </div>

                                    <div>
                                        <p>AudioEngine HD3</p>
                                    </div>

                                    <div>
                                        <p>HP Hyper LTR</p>
                                    </div>

                                    <div>
                                        <p>Dell 32 UltraSharp</p>
                                    </div>

                                    <div>
                                        <p>Google Pixel 6 Pro</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>#XGY-356</p>                                        
                                    </div>

                                    <div>
                                        <p>#YHD-047</p>
                                    </div>
                                
                                    <div>
                                        <p>#SRR-678</p>
                                    </div>

                                    <div>
                                        <p>#PXF-578</p>
                                    </div>

                                    <div>
                                        <p>#PXF-778</p>
                                    </div>

                                    <div>
                                        <p>#XGY-356</p>
                                    </div>

                                    <div>
                                        <p>#XVR-425</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>02 Apr, 2023</p>                                        
                                    </div>

                                    <div>
                                        <p>01 Apr, 2023</p>
                                    </div>
                                
                                    <div>
                                        <p>24 Mar, 2023</p>
                                    </div>

                                    <div>
                                        <p>24 Mar, 2023</p>
                                    </div>

                                    <div>
                                        <p>16 Jan, 2023</p>
                                    </div>

                                    <div>
                                        <p>22 Dec, 2023</p>
                                    </div>

                                    <div>
                                        <p>27 Dec, 2023</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>R$100</p>                                        
                                    </div>

                                    <div>
                                        <p>R$100</p>
                                    </div>
                                
                                    <div>
                                        <p>R$100</p>
                                    </div>

                                    <div>
                                        <p>R$100</p>
                                    </div>

                                    <div>
                                        <p>R$100</p>
                                    </div>

                                    <div>
                                        <p>R$100</p>
                                    </div>

                                    <div>
                                        <p>R$100</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>In Stock</p>                                        
                                    </div>

                                    <div>
                                        <p>Out of Stock</p>
                                    </div>
                                
                                    <div>
                                        <p>In Stock</p>
                                    </div>

                                    <div>
                                        <p>Out of Stock</p>
                                    </div>

                                    <div>
                                        <p>In Stock</p>
                                    </div>

                                    <div>
                                        <p>Low Stock</p>
                                    </div>

                                    <div>
                                        <p>In Stock</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>58 PCS</p>                                        
                                    </div>

                                    <div>
                                        <p>0 PCS</p>
                                    </div>
                                
                                    <div>
                                        <p>290 PCS</p>
                                    </div>

                                    <div>
                                        <p>46 PCS</p>
                                    </div>

                                    <div>
                                        <p>78 PCS</p>
                                    </div>

                                    <div>
                                        <p>8 PCS</p>
                                    </div>

                                    <div>
                                        <p>124 PCS</p>
                                    </div>
                                </td>
                                
                            </tr>     
                        </table>
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