<?php
$title = "Recipes";
require_once APPROOT . '/src/views/admin/include/header.php';
?>
<?php require_once APPROOT . '/src/views/admin/include/sidebar.php'; ?>

<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1><?= $title ?></h1>
			<ul class="breadcrumb">
				<li>
					<a href="#"><?= $title ?></a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
				<li>
					<a class="active" href="#">Home</a>
				</li>
			</ul>
		</div>
		<a href="<?= URLROOT ?>/admin/recipe/add-recipe" class="btn-download">
			<i class='bx bxs-book-add'></i>
			<span class="text">Add recipes</span>
		</a>
	</div>

	<ul class="box-info">
		<li>
			<i class='bx bxs-book-content'></i>
			<span class="text">
				<h3><?= $data["newRecipe"] ?></h3>
				<p>New Recipes</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-group'></i>
			<span class="text">
				<h3><?= $data["visitor"] ?></h3>
				<p>Visitors</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-dollar-circle'></i>
			<span class="text">
				<h3><?= $data["totalRecipe"] ?></h3>
				<p>Total Recipes</p>
			</span>
		</li>
	</ul>
	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>List Recipes</h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<table>
				<thead>
					<tr>
						<th>Number</th>
						<th>Title</th>
						<th>Image</th>
						<th>Number Visitors</th>
						<th>Date create</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($data["recipes"] as $recipe): ?>
						<tr>
							<td>
								<?= $i; ?>
							</td>
							<td> <?= $recipe->title ?></td>
							<td>
								<figure class="image">
									<img style="width: 50px; height: 50px;" src="<?= URLROOT ?>/	<?= $recipe->image ?>" loading="lazy" alt="<?= $recipe->title ?>" >
								</figure>
							</td>
							<td> <?= $recipe->number_visitors ?></td>
							<td> <?= $recipe->created_at ?></td>
							<td><a href="<?= URLROOT ?>/admin/recipe/edit-recipe/<?= $recipe->id ?>"><button class="status completed">Edit</button></a> <a href="<?= URLROOT ?>/admin/recipe/remove/<?= $recipe->id ?>"><button class="status error">Remove</button></a></td>
						</tr>
					<?php $i++;
					endforeach; ?>

				</tbody>
			</table>
		</div>

	</div>
</main>


<?php require_once APPROOT . '/src/views/admin/include/footer.php'; ?>