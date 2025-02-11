
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-book-bookmark'></i>
			<span class="text">Admin Food Tasty</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="<?= URLROOT ?>/admin/recipe" >
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Recipes</span>
				</a>
			</li>
			<li>
				<a href="<?= URLROOT ?>/logOut" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="<?= URLROOT ?>/img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->