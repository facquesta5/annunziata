<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>L . Annunziata</title>

    <!-- Bootstrap CSS CDN -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/4492c3903d.js" crossorigin="anonymous"></script> 

</head>

<body>

    <div class="wrapper">
        <!-- .S.I.D.E.B.A.R.  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left seta"></i>
            </div>

            <ul class="list-unstyled components">
                <p style="border-bottom: 1px solid #CB6D1C"><img src="imagens/logo.png" style="width: 192px;"></p>
                
                <li>
                    <a href="home.php">HOME</a>
                    <a href="#quem_somosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown">
                    QUEM SOMOS</a>
                    <ul class="collapse list-unstyled" id="quem_somosSubmenu">
                        <li>
                            <a href="quem_somos.php#historia"><i class="fas fa-caret-right"></i>HISTÓRIA</a>
                        </li>
                        <li>
                            <a href="quem_somos.php#missao"><i class="fas fa-caret-right"></i>MISSÃO</a>
                        </li>
                        <li>
                            <a href="quem_somos.php#politica_de_qualidade"><i class="fas fa-caret-right"></i>POLÍTICA DE QUALIDADE</a>
                        </li>
                        <li>
                            <a href="quem_somos.php#visao"><i class="fas fa-caret-right"></i>VISÃO</a>
                        </li>
                        <li>
                            <a href="quem_somos.php#valores"><i class="fas fa-caret-right"></i>VALORES</a>
                        </li>
                    </ul>

                    <a href="#engenhariaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown">ENGENHARIA</a>
                    <ul class="collapse list-unstyled" id="engenhariaSubmenu">
                        <li>
                            <a href="o_que_fazemos.php#o_que_fazemos"><i class="fas fa-caret-right"></i>GLOBAL SOURCING</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#manutencao"><i class="fas fa-caret-right"></i>MANUTENÇÃO</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#segmentos_de_atuacao"><i class="fas fa-caret-right"></i>SEGMENTOS DE ATUAÇÃO</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#sgm"><i class="fas fa-caret-right"></i>SGM</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#qualidade_do_ar"><i class="fas fa-caret-right"></i>QUALIDADE DO AR</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#engenharia_clinica"><i class="fas fa-caret-right"></i>ENGENHARIA CLÍNICA</a>
                        </li>
                        <li>
                            <a href="o_que_fazemos.php#normas_tecnicas"><i class="fas fa-caret-right"></i>NORMAS TÉCNICAS</a>
                        </li>
                    </ul>

                    <a href="#clientesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown">
                    CLIENTES</a>
                    <ul class="collapse list-unstyled" id="clientesSubmenu">
                        <li>
                            <a href="clientes_manutencao.php"><i class="fas fa-caret-right"></i>ENGENHARIA</a>
                        </li>
                    </ul>
                    <a href="contato.php">CONTATO</a>  
                </li>
                
            </ul>

        </nav>


        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid header">
                <div class="logo">
                    <img src="imagens/logo.png">
                </div>
                <div class="btn-collapse">
                    <button id="sidebarCollapse" class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </div>

            <div class="container-fluid">

                <nav class="navbar-expand-lg navbar-light">

                    <div class="navbar-collapse menu-horizontal">
                        <ul class="nav navbar-nav ">
                            <li><a href="home.php">HOME</a></li>
                            <!--QUEM SOMOS DROPDOWN -->
                            <li class="dropdown">
                                <a class="dropbtn" href="quem_somos.php">QUEM SOMOS</a>
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="quem_somos.php#historia">
                                            <i class="fas fa-caret-right"></i>HISTÓRIA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="quem_somos.php#missao">
                                            <i class="fas fa-caret-right"></i>MISSÃO
                                        </a>
                                    </li>
                                    <li style="min-width: 240px;">
                                        <a href="quem_somos.php#politica_de_qualidade">
                                            <i class="fas fa-caret-right"></i>POLÍTICA DE QUALIDADE
                                        </a>
                                    </li>
                                    <li>
                                        <a href="quem_somos.php#visao">
                                            <i class="fas fa-caret-right"></i>VISÃO
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="quem_somos.php#valores">
                                            <i class="fas fa-caret-right"></i>VALORES
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- ENGENHARIIA DE MANUTENÇÃO DROPDOWN -->
                            <li class="dropdown">
                                <a class="dropbtn" href="o_que_fazemos.php">ENGENHARIA</a>
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="o_que_fazemos.php#o_que_fazemos">
                                            <i class="fas fa-caret-right"></i>GLOBAL SOURCING
                                        </a>
                                    </li>
                                    <li>
                                        <a href="o_que_fazemos.php#manutencao">
                                            <i class="fas fa-caret-right"></i>MANUTENÇÃO
                                        </a>
                                    </li>
                                    <li style="min-width: 256px;">
                                        <a href="o_que_fazemos.php#segmentos_de_atuacao">
                                            <i class="fas fa-caret-right"></i>SEGMENTOS DE ATUAÇÃO
                                        </a>
                                    </li>
                                    <li>
                                        <a href="o_que_fazemos.php#sgm">
                                            <i class="fas fa-caret-right"></i>SGM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="o_que_fazemos.php#qualidade_do_ar">
                                            <i class="fas fa-caret-right"></i>QUALIDADE DO AR
                                        </a>
                                    </li>
                                    <li>
                                        <a href="o_que_fazemos.php#engenharia_clinica">
                                            <i class="fas fa-caret-right"></i>ENGENHARIA CLÍNICA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="o_que_fazemos.php#normas_tecnicas">
                                            <i class="fas fa-caret-right"></i>NORMAS TÉCNICAS
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropbtn" href="clientes_manutencao.php">CLIENTES</a>
                                <ul class="dropdown-content">
                                    <li style="min-width: 150px;">
                                        <a href="clientes_manutencao.php">
                                            <i class="fas fa-caret-right"></i>ENGENHARIA
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><a href="contato.php">CONTATO</a></li>

                        </ul>
                    </div>

                </nav>
            </div>