<?php

require_once 'vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();
$categorias = $cDao->read();

?>
<html>
    <head>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Categorias</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="cadcategoria.php"><i class="fa fa-plus"></i> Nova Categoria</a>
            <a class="btn btn-default" href="categoria.php"><i class="fa fa-refresh"></i> Atualizar</a>
            <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Produtos</a>
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

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($categorias) : ?>
<?php foreach ($categorias as $categorias) : ?>
	<tr>
		<td><?php echo $categorias['id']; ?></td>
		<td><?php echo $categorias['nome']; ?></td>
		<td class="actions text-right">
			<a href="editarcategoria.php?id=<?php echo $categoria['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-categoria="<?php echo $categoria['id']; ?>">
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