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
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="<?= URLROOT ?>/admin/home/add-recipe" class="btn-download">
					<i class='bx bxs-book-add' ></i>
					<span class="text">Add recipes</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-book-content' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Recipes</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Total Recipes</p>
					</span>
				</li>
			</ul>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>List Recipes</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
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
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
				
						</tbody>
					</table>
				</div>

			</div>
		</main>


<?php require_once APPROOT . '/src/views/admin/include/footer.php'; ?>