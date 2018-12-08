<?php

require_once '../vendor/autoload.php';

$pDao = new \App\Model\ProdutoDao();
$produtos = $pDao->read();

$cDao = new \App\Model\CategoriaDao();
$categorias = $cDao->read();


?>
<html>
    <head>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
            <a class="btn btn-default" href="/produtos/index.php"><i class="fa fa-refresh"></i> Produtos</a>
			<a class="btn btn-default" href="/categorias/index.php"><i class="fa fa-refresh"></i> Categorias</a>
			
	    	<a class="btn btn-primary" href="/produtos/new.php"><i class="fa fa-plus"></i> Novo Produto</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<table class="table table-hover">
<thead>
	<tr>
		<th width="30%">Nome</th>
		<th>Categoria</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($produtos) : ?>
<?php foreach ($produtos as $prod) : ?>
	<tr>
		<td><?php echo $prod['nome']; ?></td>
		<td>
			<?php
			foreach ($categorias as $cat) {
				if ( $prod['id_categoria']==$cat['id'] ) {
					echo $cat['nome'];
				}
			}
			?>
		</td>
		<td class="actions ">
			<a href="edit.php?id=<?php echo $prod['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
			<a href="delete.php?id=<?php echo $prod['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir esse produto?')">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>   
<?php endif; ?>
</tbody>
</table>
</body>