<?php require_once 'config.php'; ?>



<?php require_once 'inc/database.php'; ?>

<?php require_once('config_login.php');
$reiniciarSistema = false;
if (isset($_POST['nome'])) {
	$database = open_database_login();
	$email_atual = $_SESSION['email'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$cpfcnpj = $_POST['cpfcnpj'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$complemento = $_POST['complemento'];
	$cep = $_POST['cep'];
	$cep = str_replace('-', '', $cep);;
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cpfcnpj = str_replace('.', '', $cpfcnpj);
	$cpfcnpj = str_replace('/', '', $cpfcnpj);
	$cpfcnpj = str_replace('-', '', $cpfcnpj);
	$bairro = $_POST['bairro'];

	$query_updateEmpresa = "UPDATE Empresa set nome = '$nome', cpfcnpj = '$cpfcnpj', endereco = '$rua', telefone = '$celular', numero = '$numero', complemento = '$complemento', cidade = '$cidade', estado = '$estado', cep = '$cep', bairro = '$bairro' WHERE email = '$email_atual'";
	$query_updateUsuario = "UPDATE Usuario set nome = '$nome', sobrenome = '$sobrenome', email = '$email', telefone = '$celular' WHERE email = '$email_atual'";
	//print_r($query_updateEmpresa);
	$database->query($query_updateEmpresa);
	$database->query($query_updateUsuario);
	$reiniciarSistema = true;

	//print_r($cpfcnpj);
	//print_r($cep);
}

//SELECT PARA PEGAR A DATA DE VENCIMENTO
//session_start();
$database = open_database_login();
$baseAtual = $_SESSION['base'];
$email = $_SESSION['email'];
//print_r($baseAtual);
$select_usuario = $database->query("SELECT * FROM Usuario WHERE email = '$email'")->fetch_all(MYSQLI_ASSOC);
$nome = $select_usuario[0]['nome'];
$sobrenome = $select_usuario[0]['sobrenome'];
$celular = $select_usuario[0]['telefone'];


$select_empresa = $database->query("SELECT * FROM Empresa WHERE db_name = '$baseAtual'")->fetch_all(MYSQLI_ASSOC);

$cpfcnpj = $select_empresa[0]['cpfcnpj'];
$rua = $select_empresa[0]['endereco'];
$numero = $select_empresa[0]['numero'];
$complemento = $select_empresa[0]['complemento'];
$cidade = $select_empresa[0]['cidade'];
$estado = $select_empresa[0]['estado'];
$cep = $select_empresa[0]['cep'];
$bairro = $select_empresa[0]['bairro'];
?>





<?php



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FlexMoney</title>
	<link rel="shortcut icon" href="./FlexMoney_files/Imagem1.png">
	<script src="<?php echo BASEURL; ?>js/cidades-estados.js"></script>
	<link href="<?php echo BASEURL; ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo BASEURL; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo BASEURL; ?>css/build.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/sweetalert2.min.css" />
	<!--<link href="<?php echo BASEURL; ?>css/select2.min.css" rel="stylesheet"> -->
	<link href="<?php echo BASEURL; ?>css/select2.css" rel="stylesheet">
	<link href="<?php echo BASEURL; ?>css/select2-bootstrap.css" rel="stylesheet">
	<link href="<?php echo BASEURL; ?>css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="<?php echo BASEURL; ?>css/bootstrap-treeview.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
	<link href="<?php echo BASEURL; ?>css/sb-admin.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style_TEST.css">
	<style type="text/css" id="treeEntrada-style">
		.treeview .list-group-item {
			cursor: pointer
		}

		.treeview span.indent {
			margin-left: 10px;
			margin-right: 10px
		}

		.treeview span.icon {
			width: 12px;
			margin-right: 5px
		}

		.treeview .node-disabled {
			color: silver;
			cursor: not-allowed
		}

		.node-treeEntrada {}

		.node-treeEntrada:not(.node-disabled):hover {
			background-color: #F5F5F5;
		}
	</style>
	<style type="text/css" id="treeSaida-style">
		.treeview .list-group-item {
			cursor: pointer
		}

		.treeview span.indent {
			margin-left: 10px;
			margin-right: 10px
		}

		.treeview span.icon {
			width: 12px;
			margin-right: 5px
		}

		.treeview .node-disabled {
			color: silver;
			cursor: not-allowed
		}

		.node-treeSaida {}

		.node-treeSaida:not(.node-disabled):hover {
			background-color: #F5F5F5;
		}
	</style>
</head>




<?php if ($plano == 'Gratuito' and $intervalo->days <= 7) : ?>
	<?php $_SESSION['planoAviso'] = $plano;
	$_SESSION['intervaloDaysAviso'] = $intervalo->days;
	?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu período grátis expira em <?php echo ($intervalo->days + 1); ?> dias</strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Gostei, quero pagar!</button>


			</div>


		</div>
	</center>
<?php elseif ($plano == 'Mensal' and $intervalo->days <= 7) : ?>
	<?php $_SESSION['planoAviso'] = $plano;
	$_SESSION['intervaloDaysAviso'] = $intervalo->days;
	?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu plano mensal expira em <?php echo ($intervalo->days + 1); ?> dias</strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Prolongar!</button>


			</div>


		</div>
	</center>
<?php elseif ($plano == 'Anual' and $intervalo->days <= 7) : ?>
	<?php $_SESSION['planoAviso'] = $plano;
	$_SESSION['intervaloDaysAviso'] = $intervalo->days;
	?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu plano anual expira em <?php echo ($intervalo->days + 1); ?> dias</strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Prolongar!</button>


			</div>


		</div>
	</center>
<?php elseif ($plano == 'Expirado') : ?>
	<?php $_SESSION['planoAviso'] = $plano;
	$_SESSION['intervaloDaysAviso'] = $intervalo->days;
	?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu período grátis expirou em <?php echo date("d/m/Y", strtotime($dataVencimentoString)); ?> </strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Faça o pagamento e evite o bloqueio</button>


			</div>


		</div>
	</center>
<?php elseif ($plano == 'ExpiradoMensal') : ?>
	<?php $_SESSION['planoAviso'] = $plano;
	$_SESSION['intervaloDaysAviso'] = $intervalo->days;
	?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu plano mensal expirou em <?php echo date("d/m/Y", strtotime($dataVencimentoString)); ?> </strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Faça o pagamento e evite o bloqueio</button>


			</div>


		</div>
	</center>

<?php elseif ($plano == 'ExpiradoAnual') : ?>
	<center>
		<div id="mensagem-bloqueio" class="navbar-fixed-top">

			<div style="background-color:#FF4500; color:white; padding: 10px; height: 5%">
				<span>
					<i class="fa fa-warning"></i>
					<strong>Seu plano anual expirou em <?php echo date("d/m/Y", strtotime($dataVencimentoString)); ?> </strong>
				</span>
				<button type="submit" class="btn btn-primary btn-sm" onclick="location.href='../Assinatura/index.php';" style="margin-top:-5px;">Faça o pagamento e evite o bloqueio</button>


			</div>


		</div>
	</center>

<?php endif; ?>
<?php if ($plano == 'Expirado' or $plano == 'ExpiradoAnual' or $plano == 'ExpiradoMensal') {
	$_SESSION['status_pagamento'] = 'expirado';
} else {
	$_SESSION['status_pagamento'] = 'ativo';
}


?>




<body style="font-family: Calibri;">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0; <?php if (($plano == 'Gratuito' and $intervalo->days <= 7) or $plano == 'Expirado' or ($plano == 'Mensal' and $intervalo->days <= 7) or ($plano == 'Anual' and $intervalo->days <= 7) or $plano == 'ExpiradoAnual' or $plano == 'ExpiradoMensal') : echo ('top:40px;');
																									endif; ?>">
		<div class="navbar-header" style="width:100%;">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--<a class="navbar-brand" href="#"><img src="../logo2.png" height="40px" width="50px" style="position:relative; top:-10px;"></a>-->
			<a class="navbar-brand" href="../FlexMoney.php"><img src="../logo1.png" height="36px" width="160px" style="position:relative; top:-10px;"></a>
			<ul class="nav navbar-top-links navbar-right" style="float:right;">
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li>
							<a href="../perfilUsuario.php"><i class="fa fa-user fa-fw"></i>Perfil do Usuário</a>
						</li>
						<?php if ($_SESSION['tipo_usuario'] == 'A') {; ?>
							<li>
								<a href="<?php echo BASEURL; ?>Assinatura"><i class="fa fa-credit-card"></i> Assinatura</a>
							</li>
							<li>
								<a href="<?php echo BASEURL; ?>PagamentosAssinatura"><i class="fa fa-money"></i> Pagamentos</a>
							</li>
							<li>
								<a href="<?php echo BASEURL; ?>Configuracoes"><i class="fa fa-gear fa-fw"></i>Configurações</a>
							</li>
						<?php } ?>
						<li class="divider"></li>
						<li>
							<a href="<?php echo BASEURL; ?>login-index.php?encerrarSessao=ok"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>
			<div class="p-4">
				<?php if ($_SESSION['tipo_usuario'] == 'A') {; ?>
					<ul class="nav in" id="side-menu">
						<li><a href="<?php echo BASEURL; ?>FlexMoney.php"><i class="fa fa-dashboard"></i> Início</a></li>
						<li>
							<div class="btn-group" style="width: 100%;">
								<div id="mais_1" class="btn col-xs-4"></div>
								<div id="mais_2" class="btn col-xs-4"></div>
								<div id="mais_3" class="btn col-xs-4"></div>
							</div>
						</li>
						<li>
							<a href="#"><i class="fa fa-th-list"></i> Estoque<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level helpFun">
								<li>
									<a href="#"><i class="fa fa-dollar"></i> Orçamentos</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-cart-arrow-down"></i> Vendas</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-shopping-cart"></i> Pedidos</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-cart-plus"></i> Compras</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-money"></i> Financeiro<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level helpFun">
								<li>
									<a href="<?php echo BASEURL; ?>Movimentacoes"><i class="fa fa-exchange"></i> Extratos</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>importaOfx"><i class="fa fa-download"></i> Importar OFX</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Consultas"><i class="fa fa-search"></i> Consultas</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Contas_Pagar_Receber"><i class="fa fa-credit-card"></i> Pagar e Receber</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-institution"></i> Cobrança</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-pencil-square-o"></i> Cadastros<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level helpFun">
								<li>
									<a href="<?php echo BASEURL; ?>CentroCustos"><i class="fa fa-pencil"></i> Centro de Custos</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>ContasCorrentes"><i class="fa fa-credit-card-alt"></i> Contas Correntes</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Filiais"><i class="fa fa-sitemap"></i> Filiais</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Pessoas"><i class="fa fa-users"></i> Pessoas</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>PlanoContas"><i class="fa fa-list-alt"></i> Plano de Contas</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Produtos"><i class="fa fa-tag"></i> Produtos</a>
								</li>
								<li>
									<a href="<?php echo BASEURL; ?>Usuarios"><i class="fa fa-user"></i> Usuários</a>
								</li>

							</ul>
						</li>
						<li>
							<a href="#"><i class="fa fa-file-text-o"></i> Relatórios<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#"><i class="fa fa-th-list"></i> Estoque<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#"><i class="fa fa-file-text"></i> DRE Competência</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-money"></i> Financeiro<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios"><i class="fa fa-file-text"></i> DFC</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/praOndeVai.php"><i class="fa fa-file-text"></i> Para onde foi o dinheiro</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/deOndeVem.php"><i class="fa fa-file-text"></i> De onde vem o dinheiro</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/quemEsta.php"><i class="fa fa-file-text"></i> Quem está recebendo</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/rendVsdespesas.php"><i class="fa fa-file-text"></i> Rendimento vs. Despesas </a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/oQueTenho.php"><i class="fa fa-file-text"></i> O que eu tenho</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-piggy-bank"></i> Pagar e Receber<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/contasPagar.php"><i class="fa fa-file-text"></i> Contas a pagar</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/contasReceber.php"><i class="fa fa-file-text"></i> Contas a receber</a>
										</li>
										<li>
											<a href="<?php echo BASEURL; ?>Relatorios/fluxoCaixa.php"><i class="fa fa-file-text"></i> Fluxo de caixa</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"><i class="fa fa-pencil-square-o"></i> Cadastros<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#"><i class="fa fa-file-text"></i> Clientes</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-file-text"></i> Fornecedores</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-file-text"></i> Produtos</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-file-text"></i> Plano de Contas</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-file-text"></i> Centro de Custos</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?php echo BASEURL; ?>recomendar.php"><i class="fa fa-heart" style="color:red;"></i> Recomende</a></li>
						<li><a href="<?php echo BASEURL; ?>?encerrarSessao=ok"><i class="fa fa-sign-out"></i> Sair</a></li>
					</ul>
				<?php } else {; ?>
					<ul class="nav in" id="side-menu">
						<li><a href="<?php echo BASEURL; ?>Movimentacoes"><i class="fa fa-usd"></i> Movimentações</a></li>
						<li><a href="<?php echo BASEURL; ?>?encerrarSessao=ok"><i class="fa fa-sign-out"></i> Sair</a></li>
					</ul>
				<?php }; ?>
				</ul>
			</div>


		</nav>
		<?php if (($plano == 'Gratuito' and $intervalo->days <= 7) or $plano == 'Expirado' or ($plano == 'Mensal' and $intervalo->days <= 7) or ($plano == 'Anual' and $intervalo->days <= 7) or $plano == 'ExpiradoAnual' or $plano == 'ExpiradoMensal') : ?>
			<div id="page-wrapper" style="margin-top:40px;">

			<?php else :  ?>
				<div id="page-wrapper">
				<?php endif; ?>
				<br>
				<form action="" method="POST">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Perfil do Usuário</h2>
						</div>
						<div class="panel-body">
							<div class="row" style="position:relative; left:5%; width:95%;">

								<div>
									<h2>Dados Pessoais</h2>
								</div>

								<div class="row">
									<div class="form-group col-md-6">
										<label for="name">E-mail:</label>
										<input id="email" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="email" placeholder="Insira seu e-mail" value="<?php echo ($email); ?>" readonly required>
									</div>

									<div class="form-group col-md-6">
										<label for="name">Nome:</label>
										<input id="nome" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="nome" placeholder="Insira seu nome" value="<?php echo ($nome); ?>" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="name">Sobrenome:</label>
										<input id="sobrenome" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="sobrenome" placeholder="Insira seu sobrenome" value="<?php echo ($sobrenome); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="name">Celular:</label>
										<input id="celular" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="celular" placeholder="Insira seu celular" value="<?php echo ($celular); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="name">CPF/CNPJ:</label>
										<input id="cpfcnpj" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="cpfcnpj" placeholder="Insira seu cpf/cnpj" value="<?php echo ($cpfcnpj); ?>" required>
									</div>
								</div>
								<hr>
								<div>
									<h2>Endereço</h2>
								</div>

								<div class="row">
									<div class="form-group col-md-6">
										<label for="rua">Rua:</label>
										<input id="rua" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="rua" placeholder="Insira o nome da sua rua ou avenida" value="<?php echo ($rua); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="numero">Número:</label>
										<input id="numero" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="numero" placeholder="Insira o número de sua instalação" value="<?php echo ($numero); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="complemento">Complemento:</label>
										<input id="complemento" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="complemento" placeholder="Insira o complemento" value="<?php echo ($complemento); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="cep">CEP:</label>
										<input id="cep" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="cep" maxlength="9" placeholder="Insira seu cep" value="<?php echo ($cep); ?>" required>
									</div>

									<div class="form-group col-md-6">
										<label for="estado">Estado:</label>
										<select id="estado" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="estado" placeholder="Insira seu estado" value="<?php echo ($estado); ?>" required></select>
									</div>

									<div class="form-group col-md-6">
										<label for="cidade">Cidade:</label>
										<select id="cidade" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="cidade" value="<?php echo ($cidade); ?>" required></select>
									</div>

									<div class="form-group col-md-6">
										<label for="bairro">Bairro:</label>
										<input id="bairro" type="text" class="form-control" oninput=" $('#alterarPerfil').prop('disabled',false);" name="bairro" value="<?php echo ($bairro); ?>" required></input>
									</div>
									<script language="JavaScript" type="text/javascript" charset="utf-8">
										new dgCidadesEstados({
											cidade: document.getElementById('cidade'),
											estado: document.getElementById('estado')
										})
									</script>
								</div>
								<div id="actions" class="row">
									<center>
										<div class="col-md-12">
											<button id="alterarPerfil" type="submit" class="btn btn-primary" disabled>Alterar dados</button>
											<a href="FlexMoney.php" class="btn btn-default">Cancelar</a>
										</div>
									</center>
								</div>

							</div>
						</div>
					</div>
				</form>
				</div>
				<!--Start of Zendesk Chat Script-->
				<script type="text/javascript">
					window.$zopim || (function(d, s) {
						var z = $zopim = function(c) {
								z._.push(c)
							},
							$ = z.s =
							d.createElement(s),
							e = d.getElementsByTagName(s)[0];
						z.set = function(o) {
							z.set.
							_.push(o)
						};
						z._ = [];
						z.set._ = [];
						$.async = !0;
						$.setAttribute("charset", "utf-8");
						$.src = "https://v2.zopim.com/?5A1CMQ53DAgeEqg1H1LDxHaM1Vwttm2x";
						z.t = +new Date;
						$.
						type = "text/javascript";
						e.parentNode.insertBefore($, e)
					})(document, "script");
				</script>
				<!--End of Zendesk Chat Script-->

				<script>
					$zopim(function() {
						$zopim.livechat.badge.hide();
					});
				</script>
				<script type="text/javascript">
					function carregarModal() {

						var r_text = new Array();
						r_text[0] = '"O temor do Senhor é o princípio da sabedoria, e o conhecimento do Santo a prudência.” (Provérbios 9:10)';
						r_text[1] = '“A vida é sobre criar impacto, não uma renda” – Kevin Kruse.';
						r_text[2] = '“O temor do Senhor é a instrução da sabedoria, e precedendo a honra vai a humildade.” (Provérbios 15:33)';
						r_text[3] = '“Seja o que a sua mente pode conceber e acreditar, ela pode conseguir” – Napoleon Hill.';
						r_text[4] = '“O temor do Senhor é o princípio do conhecimento; os loucos desprezam a sabedoria e a instrução.” (Provérbios 1:7)';
						r_text[5] = '“Esforce-se para não ser um sucesso, mas sim para ser valioso” – Albert Einstein.';
						r_text[6] = '“Porque o Senhor dá a sabedoria; da sua boca é que vem o conhecimento e o entendimento.” (Provérbios 2:6)';
						r_text[7] = '“Duas estradas divergiam em uma bifurcação, e eu peguei a menos percorrida. E isso fez toda a diferença” – Robert Frost.';
						r_text[8] = '“Com ele está a sabedoria e a força; conselho e entendimento tem.” (Jó 12:13)';
						r_text[9] = '“Eu atribuo o meu sucesso a isso: eu nunca dei ou tomei qualquer desculpa” – Florence Nightingale.';
						r_text[10] = '“Em quem estão escondidos todos os tesouros da sabedoria e da ciência.” (Colossenses 2:3)';
						r_text[11] = '“Você perde 100% dos tiros que não dá”- Wayne Gretzky.';
						r_text[12] = '“A sabedoria é a coisa principal; adquire pois a sabedoria, emprega tudo o que possuis na aquisição de entendimento.” (Provérbios 4:7)';
						r_text[13] = '“Eu perdi mais de 9 mil tiros livres em minha carreira. Eu perdi quase 300 jogos. Em 26 vezes e tive a bola do jogo e perdi. Eu falhei uma e outra vez em minha vida. E é por isso que eu consegui” – Michael Jordan.';
						r_text[14] = '“Compra a verdade, e não a vendas; e também a sabedoria, a instrução e o entendimento.” (Provérbios 23:23)';
						r_text[15] = '“A coisa mais difícil é a decisão de agir, o resto é apenas tenacidade” – Amelia Earhart.';
						r_text[16] = '“Então disse eu: Melhor é a sabedoria do que a força, ainda que a sabedoria do pobre foi desprezada, e as suas palavras não foram ouvidas.” (Eclesiastes 9:16)';
						r_text[17] = '“Todo strike me aproxima do próximo home run” – Babe Ruth.';
						r_text[18] = '“Porque melhor é a sabedoria do que os rubis; e tudo o que mais se deseja não se pode comparar com ela.” (Provérbios 8:11)';
						r_text[19] = '“Definir um objetivo é o ponto de partida de toda a realização” – W. Clement Stone.';
						r_text[20] = '“Bem-aventurado o homem que acha sabedoria, e o homem que adquire conhecimento;” (Provérbios 3:13)';
						r_text[21] = '“A vida não é sobre ter, e sobre dar e ser” – Kevin Kruse.';
						r_text[22] = '“Tão boa é a sabedoria como a herança, e dela tiram proveito os que vêem o sol.” (Eclesiastes 7:11)';
						r_text[23] = '“A vida é o que acontece com você enquanto você está ocupado fazendo planos” – John Lennon.';
						r_text[24] = '“Porque a sabedoria serve de defesa, como de defesa serve o dinheiro; mas a excelência do conhecimento é que a sabedoria dá vida ao seu possuidor.” (Eclesiastes 7:12)';
						r_text[25] = '“Nós nos tornamos aquilo que pensamos” – Earl Nightingale.';
						r_text[26] = '“Todavia falamos sabedoria entre os perfeitos; não, porém, a sabedoria deste mundo, nem dos príncipes deste mundo, que se aniquilam;” (1 Coríntios 2:6)';
						r_text[27] = '“Daqui a 20 anos você estará mais decepcionado pelas coisas que você não fez, do que pelas que fez. Então, jogue fora suas amarras, navegue para longe do porto seguro, pegue os ventos em suas velas. Explore, sonha, descubra” – Mark Twain.';
						r_text[28] = '“A sabedoria do prudente é entender o seu caminho, mas a estultícia dos insensatos é engano.” (Provérbios 14:8)';
						r_text[29] = '“A vida é 10% do que acontece comigo e 90% de como eu reajo a isso” – Charles Swindoll.';
						r_text[30] = '“A boca do justo jorra sabedoria, mas a língua da perversidade será cortada.” (Provérbios 10:31)';
						r_text[31] = '“A forma mais comum com que as pessoas exercem o seu poder é pensar que eles não têm poder” – Alice Walker.';
						r_text[32] = '“A minha boca falará de sabedoria, e a meditação do meu coração será de entendimento.” (Salmos 49:3)';
						r_text[33] = '“A mente é tudo. Você se torna aquilo que você pensa” – Buddha.';
						r_text[34] = '“A boca do justo fala a sabedoria; a sua língua fala do juízo.” (Salmos 37:30)';
						r_text[35] = '“A melhor época para plantar uma árvore foi há 20 anos. A segunda melhor é agora” – Provérbio Chinês.';
						r_text[36] = '“E vinham de todos os povos a ouvir a sabedoria de Salomão, e de todos os reis da terra que tinham ouvido da sua sabedoria.” (1 Reis 4:34)';
						r_text[37] = '“Uma vida não examinada, não vale a pena ser vivida” – Sócrates.';
						r_text[38] = '“Com os idosos está a sabedoria, e na longevidade o entendimento.” (Jó 12:12)';
						r_text[39] = '“Seu tempo é limitado, então não o gaste vivendo a vida de outra pessoa”—Steve Jobs.';


						var i = Math.floor(40 * Math.random())

						//sweetAlert("Pense nisso...", r_text[i]);
					}
				</script>

				<?php

				$input = array(
					'"O temor do Senhor é o princípio da sabedoria, e o conhecimento do Santo a prudência.” (Provérbios 9:10)',
					'“O temor do Senhor é a instrução da sabedoria, e precedendo a honra vai a humildade.” (Provérbios 15:33)',
					'“O temor do Senhor é o princípio do conhecimento; os loucos desprezam a sabedoria e a instrução.” (Provérbios 1:7)',
					'“Porque o Senhor dá a sabedoria; da sua boca é que vem o conhecimento e o entendimento.” (Provérbios 2:6)',
					'“Com ele está a sabedoria e a força; conselho e entendimento tem.” (Jó 12:13)'
				);
				$rand_keys = array_rand($input, 2);


				$r_text = array(); // Criamos um array com o nome das imagens.
				$r_text[0] = '"O temor do Senhor é o princípio da sabedoria, e o conhecimento do Santo a prudência.” (Provérbios 9:10)';
				$r_text[1] = '“A vida é sobre criar impacto, não uma renda” – Kevin Kruse.';
				$r_text[2] = '“O temor do Senhor é a instrução da sabedoria, e precedendo a honra vai a humildade.” (Provérbios 15:33)';
				$r_text[3] = '“Seja o que a sua mente pode conceber e acreditar, ela pode conseguir” – Napoleon Hill.';
				$r_text[4] = '“O temor do Senhor é o princípio do conhecimento; os loucos desprezam a sabedoria e a instrução.” (Provérbios 1:7)';
				$r_text[5] = '“Esforce-se para não ser um sucesso, mas sim para ser valioso” – Albert Einstein.';
				$r_text[6] = '“Porque o Senhor dá a sabedoria; da sua boca é que vem o conhecimento e o entendimento.” (Provérbios 2:6)';
				$r_text[7] = '“Duas estradas divergiam em uma bifurcação, e eu peguei a menos percorrida. E isso fez toda a diferença” – Robert Frost.';
				$r_text[8] = '“Com ele está a sabedoria e a força; conselho e entendimento tem.” (Jó 12:13)';
				$r_text[9] = '“Eu atribuo o meu sucesso a isso: eu nunca dei ou tomei qualquer desculpa” – Florence Nightingale.';
				$r_text[10] = '“Em quem estão escondidos todos os tesouros da sabedoria e da ciência.” (Colossenses 2:3)';
				$r_text[11] = '“Você perde 100% dos tiros que não dá”- Wayne Gretzky.';
				$r_text[12] = '“A sabedoria é a coisa principal; adquire pois a sabedoria, emprega tudo o que possuis na aquisição de entendimento.” (Provérbios 4:7)';
				$r_text[13] = '“Eu perdi mais de 9 mil tiros livres em minha carreira. Eu perdi quase 300 jogos. Em 26 vezes e tive a bola do jogo e perdi. Eu falhei uma e outra vez em minha vida. E é por isso que eu consegui” – Michael Jordan.';
				$r_text[14] = '“Compra a verdade, e não a vendas; e também a sabedoria, a instrução e o entendimento.” (Provérbios 23:23)';
				$r_text[15] = '“A coisa mais difícil é a decisão de agir, o resto é apenas tenacidade” – Amelia Earhart.';
				$r_text[16] = '“Então disse eu: Melhor é a sabedoria do que a força, ainda que a sabedoria do pobre foi desprezada, e as suas palavras não foram ouvidas.” (Eclesiastes 9:16)';
				$r_text[17] = '“Todo strike me aproxima do próximo home run” – Babe Ruth.';
				$r_text[18] = '“Porque melhor é a sabedoria do que os rubis; e tudo o que mais se deseja não se pode comparar com ela.” (Provérbios 8:11)';
				$r_text[19] = '“Definir um objetivo é o ponto de partida de toda a realização” – W. Clement Stone.';
				$r_text[20] = '“Bem-aventurado o homem que acha sabedoria, e o homem que adquire conhecimento;” (Provérbios 3:13)';
				$r_text[21] = '“A vida não é sobre ter, e sobre dar e ser” – Kevin Kruse.';
				$r_text[22] = '“Tão boa é a sabedoria como a herança, e dela tiram proveito os que vêem o sol.” (Eclesiastes 7:11)';
				$r_text[23] = '“A vida é o que acontece com você enquanto você está ocupado fazendo planos” – John Lennon.';
				$r_text[24] = '“Porque a sabedoria serve de defesa, como de defesa serve o dinheiro; mas a excelência do conhecimento é que a sabedoria dá vida ao seu possuidor.” (Eclesiastes 7:12)';
				$r_text[25] = '“Nós nos tornamos aquilo que pensamos” – Earl Nightingale.';
				$r_text[26] = '“Todavia falamos sabedoria entre os perfeitos; não, porém, a sabedoria deste mundo, nem dos príncipes deste mundo, que se aniquilam;” (1 Coríntios 2:6)';
				$r_text[27] = '“Daqui a 20 anos você estará mais decepcionado pelas coisas que você não fez, do que pelas que fez. Então, jogue fora suas amarras, navegue para longe do porto seguro, pegue os ventos em suas velas. Explore, sonha, descubra” – Mark Twain.';
				$r_text[28] = '“A sabedoria do prudente é entender o seu caminho, mas a estultícia dos insensatos é engano.” (Provérbios 14:8)';
				$r_text[29] = '“A vida é 10% do que acontece comigo e 90% de como eu reajo a isso” – Charles Swindoll.';
				$r_text[30] = '“A boca do justo jorra sabedoria, mas a língua da perversidade será cortada.” (Provérbios 10:31)';
				$r_text[31] = '“A forma mais comum com que as pessoas exercem o seu poder é pensar que eles não têm poder” – Alice Walker.';
				$r_text[32] = '“A minha boca falará de sabedoria, e a meditação do meu coração será de entendimento.” (Salmos 49:3)';
				$r_text[33] = '“A mente é tudo. Você se torna aquilo que você pensa” – Buddha.';
				$r_text[34] = '“A boca do justo fala a sabedoria; a sua língua fala do juízo.” (Salmos 37:30)';
				$r_text[35] = '“A melhor época para plantar uma árvore foi há 20 anos. A segunda melhor é agora” – Provérbio Chinês.';
				$r_text[36] = '“E vinham de todos os povos a ouvir a sabedoria de Salomão, e de todos os reis da terra que tinham ouvido da sua sabedoria.” (1 Reis 4:34)';
				$r_text[37] = '“Uma vida não examinada, não vale a pena ser vivida” – Sócrates.';
				$r_text[38] = '“Com os idosos está a sabedoria, e na longevidade o entendimento.” (Jó 12:12)';
				$r_text[39] = '“Seu tempo é limitado, então não o gaste vivendo a vida de outra pessoa”—Steve Jobs.';
				$contador = count($r_text); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
				$aleatorio = rand(1, $contador); // Esta variável irá gerar um número aleatório (rand();), partindo do 1 até o número de dados que estão dentro do array..
				?>
			</div>

			<?php $data_de_hoje = date('d/m/y');
			$variavel_split = explode('/', $data_de_hoje);
			$mes = $variavel_split[1];
			?>
			<?php if ($mes == 10) : ?>
				<footer class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #f881ab; color: #BEDFE9;display: inline-flex;">
					<img src="<?php echo BASEURL; ?>outubro-rosa_1.png" height="30px" width="30px" style="position:relative;top:8px;left:10px;">
				<?php elseif ($mes == 11) : ?>
					<footer class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #2196F3; color: #BEDFE9;display: inline-flex;">
						<img src="<?php echo BASEURL; ?>novembro-azul.png" height="30px" width="30px" style="position:relative;top:8px;left:10px;">
					<?php elseif ($mes == 12) : ?>
						<footer class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: red; color: #BEDFE9;display: inline-flex;">
							<img src="<?php echo BASEURL; ?>natal1.png" height="30px" width="35px" style="position:relative;top:5px;left:5px;">
						<?php else : ?>
							<footer class="navbar navbar-inverse navbar-fixed-bottom" style="background-color: #20456D; color: #BEDFE9;">
							<?php endif; ?>

							<p style="position:relative; left:1%; bottom:-13px; color:white; ">&copy;<?php echo date('Y'); ?> - FlexMoney - <strong><?php echo ($r_text[$aleatorio]); ?></strong></p>

							</footer>
							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
							<script>
								window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.2.min.js"><\/script>')
							</script>
							<script src="<?php echo BASEURL; ?>js/star-rating.js"></script>

							<script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.pt-BR.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/bootstrap-treeview.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/sweetalert2.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/select2.js"></script>
							<script src="<?php echo BASEURL; ?>js/jquery.maskMoney.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/jquery.mask.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/jspdf.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/jspdf.plugin.autotable.min.js"></script>
							<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/jquery.metisMenu.js"></script>
							<script src="<?php echo BASEURL; ?>js/sb-admin.js"></script>
							<script src="<?php echo BASEURL; ?>js/jquery.dataTables.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/dataTables.bootstrap.min.js"></script>
							<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
							<script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>

</html>

<script type="text/javascript">
	if (!localStorage.getItem("1 Mais Utilizado")) {
		$.get('../inc/getMaisCliques.php', function(data, status) {
			auxGet = JSON.parse(data);
			localStorage.setItem("1 Mais Utilizado", auxGet[0].nome);
			localStorage.setItem("2 Mais Utilizado", auxGet[1].nome);
			localStorage.setItem("3 Mais Utilizado", auxGet[2].nome);
		});
	}

	function auxMudaBotoes(jque, auxB) {
		if (auxB === "Orçamentos_S") {
			jque.append('<div title="Orçamentos"><a value="Orçamentos_S" href="#"><i class="fa fa-dollar"></i></a></div>');
		} else if (auxB === "Vendas_S") {
			jque.append('<div title="Vendas"><a value="Vendas_S" href="#"><i class="fa fa-cart-arrow-down"></i></a></div>');
		} else if (auxB === "Pedidos_S") {
			jque.append('<div title="Pedidos"><a value="Pedidos_S" href="#"><i class="fa fa-shopping-cart"></i></a></div>');
		} else if (auxB === "Compras_S") {
			jque.append('<div title="Compras"><a value="Compras_S" href="#"><i class="fa fa-cart-plus"></i></a></div>');
		} else if (auxB === "Extratos_S") {
			jque.append('<div title="Extratos"><a value="Extratos_S" href="<?php echo BASEURL; ?>Movimentacoes"><i class="fa fa-exchange"></i></a></div>');
		} else if (auxB === "Importar OFX_S") {
			jque.append('<div title="Importar OFX"><a value="Importar OFX_S" href="<?php echo BASEURL; ?>importaOfx"><i class="fa fa-download"></i></a></div>');
		} else if (auxB === "Consultas_S") {
			jque.append('<div title="Consultas"><a value="Consultas_S" href="<?php echo BASEURL; ?>Consultas"><i class="fa fa-search"></i></a></div>');
		} else if (auxB === "Pagar e Receber_S") {
			jque.append('<div title="Pagar e Receber"><a value="Pagar e Receber_S" href="<?php echo BASEURL; ?>Contas_Pagar_Receber"><i class="fa fa-credit-card"></i></a></div>');
		} else if (auxB === "Cobrança_S") {
			jque.append('<div title="Cobrança_S"><a value="Cobrança_S" href="#"><i class="fa fa-institution"></i></a></div>');
		} else if (auxB === "Centro de Custos_S") {
			jque.append('<div title="Centro de Custos"><a value="Centro de Custos_S" href="<?php echo BASEURL; ?>CentroCustos"><i class="fa fa-pencil"></i></a></div>');
		} else if (auxB === "Contas Correntes_S") {
			jque.append('<div title="Contas Correntes"><a value="Contas Correntes_S" href="<?php echo BASEURL; ?>ContasCorrentes"><i class="fa fa-credit-card-alt"></i></a></div>');
		} else if (auxB === "Filiais_S") {
			jque.append('<div title="Filiais"><a value="Filiais_S" href="<?php echo BASEURL; ?>Filiais"><i class="fa fa-sitemap"></i></a></div>');
		} else if (auxB === "Pessoas_S") {
			jque.append('<div title="Pessoas"><a value="Pessoas_S" href="<?php echo BASEURL; ?>Pessoas"><i class="fa fa-users"></i></a></div>');
		} else if (auxB === "Plano de Contas_S") {
			jque.append('<div title="Plano de Contas"><a value="Plano de Contas_S" href="<?php echo BASEURL; ?>PlanoContas"><i class="fa fa-list-alt"></i></a></div>');
		} else if (auxB === "Produtos_S") {
			jque.append('<div title="Produtos"><a value="Produtos_S" href="<?php echo BASEURL; ?>Produtos"><i class="fa fa-tag"></i></a></div>');
		} else if (auxB === "Usuários_S") {
			jque.append('<div title="Usuários"><a value="Usuários_S" href="<?php echo BASEURL; ?>Usuarios"><i class="fa fa-user"></i></a></div>');
		} else if (auxB === "DRE Competência_T") {
			jque.append('<div title="DRE Competência"><a value="DRE Competência_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "DFC_T") {
			jque.append('<div title="DFC"><a value="DFC_T" href="<?php echo BASEURL; ?>Relatorios"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Para onde foi o dinheiro_T") {
			jque.append('<div title="Para onde foi o dinheiro"><a value="Para onde foi o dinheiro_T" href="<?php echo BASEURL; ?>Relatorios/praOndeVai.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "De onde vem o dinheiro_T") {
			jque.append('<div title="De onde vem o dinheiro"><a value="De onde vem o dinheiro_T" href="<?php echo BASEURL; ?>Relatorios/deOndeVem.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Quem está recebendo_T") {
			jque.append('<div title="Quem está recebendo"><a value="Quem está recebendo_T" href="<?php echo BASEURL; ?>Relatorios/quemEsta.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Rendimento vs. Despesas_T") {
			jque.append('<div title="Rendimento vs. Despesas"><a value="Rendimento vs. Despesas_T" href="<?php echo BASEURL; ?>Relatorios/rendVsdespesas.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "O que eu tenho_T") {
			jque.append('<div title="O que eu tenho"><a value="O que eu tenho_T" href="<?php echo BASEURL; ?>Relatorios/oQueTenho.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Contas a pagar_T") {
			jque.append('<div title="Contas a pagar"><a value="Contas a pagar_T" href="<?php echo BASEURL; ?>Relatorios/contasPagar.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Contas a receber_T") {
			jque.append('<div title="Contas a receber"><a value="Contas a receber_T" href="<?php echo BASEURL; ?>Relatorios/contasReceber.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Fluxo de caixa_T") {
			jque.append('<div title="Fluxo de caixa"><a value="Fluxo de caixa_T" href="<?php echo BASEURL; ?>Relatorios/fluxoCaixa.php"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Clientes_T") {
			jque.append('<div title="Clientes"><a value="Clientes_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Fornecedores_T") {
			jque.append('<div title="Fornecedores"><a value="Fornecedores_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Produtos_T") {
			jque.append('<div title="Produtos"><a value="Produtos_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Plano de Contas_T") {
			jque.append('<div title="Plano de Contas"><a value="Plano de Contas_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		} else if (auxB === "Centro de Custos_T") {
			jque.append('<div title="Centro de Custos"><a value="Centro de Custos_T" href="#"><i class="fa fa-file-text"></i></a></div>');
		}
	}

	if (localStorage.getItem("1 Mais Utilizado")) {
		var auxB = localStorage.getItem("1 Mais Utilizado");
		auxMudaBotoes($("#mais_1"), auxB);
	} else {
		auxMudaBotoes($("#mais_1"), "Extratos_S");
	}
	if (localStorage.getItem("2 Mais Utilizado")) {
		var auxB = localStorage.getItem("2 Mais Utilizado");
		auxMudaBotoes($("#mais_2"), auxB);
	} else {
		auxMudaBotoes($("#mais_2"), "Consultas_S");
	}
	if (localStorage.getItem("3 Mais Utilizado")) {
		var auxB = localStorage.getItem("3 Mais Utilizado");
		auxMudaBotoes($("#mais_3"), auxB);
	} else {
		auxMudaBotoes($("#mais_3"), "Pagar e Receber_S");
	}

	function storage() {
		var name2 = [];
		var valor = [];
		var i = 0;
		for (var a in localStorage) {
			if (a.match(/^[A-Z].*/gm)) {
				name2[i] = a;
				valor[i] = localStorage[a];
				i++;
				localStorage.setItem(a, 0);
			}
		}

		name2 = JSON.stringify(name2);
		valor = JSON.stringify(valor);

		$.ajax({
			type: 'POST',
			dataType: "json",
			url: 'inc/maisCliques.php',
			data: {
				'nome': name2,
				'quantidade': valor,
			},
			success: function(data) {}
		});

		$.get('inc/getMaisCliques.php', function(data, status) {
			auxGet = JSON.parse(data);
			localStorage.setItem("1 Mais Utilizado", auxGet[0].nome);
			localStorage.setItem("2 Mais Utilizado", auxGet[1].nome);
			localStorage.setItem("3 Mais Utilizado", auxGet[2].nome);
		});
	}

	$("#mais_1, #mais_2, #mais_3").on('click', function() {
		if (!localStorage.getItem($(this).children().children().get(0).attributes.value.value.trim())) {
			localStorage.setItem($(this).children().children().get(0).attributes.value.value.trim(), 1);
		} else {
			localStorage.setItem($(this).children().children().get(0).attributes.value.value.trim(), parseInt(localStorage.getItem($(this).children().children().get(0).attributes.value.value.trim()), 10) + 1);
		}
		if (!localStorage.getItem("count")) {
			localStorage.setItem("count", 1);
		} else {
			localStorage.setItem("count", parseInt(localStorage.getItem("count"), 10) + 1);
		}
		if (parseInt(localStorage.getItem("count"), 10) > 10) {
			localStorage.setItem("count", 0);
			storage();
		}
		window.location.href = $(this).children().get(0).firstChild.href;
	})

	$(".nav-third-level li").on('click', function() {
		if (!localStorage.getItem($(this).text().trim() + "_T")) {
			localStorage.setItem($(this).text().trim() + "_T", 1);
		} else {
			localStorage.setItem($(this).text().trim() + "_T", parseInt(localStorage.getItem($(this).text().trim() + "_T"), 10) + 1);
		}
		if (!localStorage.getItem("count")) {
			localStorage.setItem("count", 1);
		} else {
			localStorage.setItem("count", parseInt(localStorage.getItem("count"), 10) + 1);
		}
		if (parseInt(localStorage.getItem("count"), 10) > 10) {
			localStorage.setItem("count", 0);
			storage();
		}
	})

	$(".helpFun li").on('click', function() {
		if (!localStorage.getItem($(this).text().trim() + "_S")) {
			localStorage.setItem($(this).text().trim() + "_S", 1);
		} else {
			localStorage.setItem($(this).text().trim() + "_S", parseInt(localStorage.getItem($(this).text().trim() + "_S"), 10) + 1);
		}
		if (!localStorage.getItem("count")) {
			localStorage.setItem("count", 1);
		} else {
			localStorage.setItem("count", parseInt(localStorage.getItem("count"), 10) + 1);
		}
		if (parseInt(localStorage.getItem("count"), 10) > 10) {
			localStorage.setItem("count", 0);
			storage();
		}
	});

	var reiniciarSistema = <?php echo json_encode($reiniciarSistema); ?>;

	if (reiniciarSistema == true) {
		swal({
			allowOutsideClick: false,
			title: "Parabéns! Dados alterados com sucesso!",
			text: "O sistema deve ser reiniciado!",
			type: "success",
			showCancelButton: false,
			allowEscapeKey: false,
			cancelButtonText: "Cancelar",
			showLoaderOnConfirm: true,
		}).then(function() {
			window.location.href = "https://www.flexmoney.com.br/login-index.php?encerrarSessao=ok";
		});
	}

	var options = {
		onKeyPress: function(cpf, ev, el, op) {
			var masks = ['000.000.000-000', '00.000.000/0000-00'],
				mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$('#cpfcnpj').mask('000.000.000-000', options);

	$('#celular').mask("(99) 99999-9999");


	function mascara(o, f) {
		v_obj = o
		v_fun = f
		setTimeout("execmascara()", 1)
	}

	function execmascara() {
		v_obj.value = v_fun(v_obj.value)
	}

	function mcc(v) {
		v = v.replace(/\D/g, "");
		v = v.replace(/(\d{5})(\d{3})/, "$1-$2");
		return v;
	}

	function id(el) {
		return document.getElementById(el);
	}

	window.onload = function() {
		id('cep').onkeypress = function() {
			mascara(this, mcc);
		}
	}
</script>