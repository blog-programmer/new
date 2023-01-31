<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>template</title>
	<link rel="stylesheet" href="/assets/css/index.css">
	<!-- <link rel="stylesheet" href="/assets/css/view.css"> -->
	<link rel="stylesheet" href="/assets/css/search.css">
	<link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
	/>

	
</head>
<body>
	<div class="container">
		<div id="sidebar">
			<aside class="aside__header">
				<img src="/assets/images/aside_1.jpg" alt="">
				<img src="/assets/images/aside_2.svg" alt="" class="aside__photo">
				<div>
					<p>aleksey Дурахманов</p>
					<p>блог веб разработчика</p>
				</div>
				<div class="aside__links">
					<a href="#"><img src="/assets/images/instagram.svg" alt=""></a>
					<a href="#"><img src="/assets/images/vk.svg" alt=""></a>
					<a href="#"><img src="/assets/images/pinterest.svg" alt=""></a>
				</div>

			</aside>
			<hr>
			<aside class="aside__content">
				<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse illum quis aut, natus veritatis ratione eveniet labore minima dignissimos iure nisi, temporibus. Esse dolores iste beatae magni. Voluptatum, sint, tenetur.
				</p>
			</aside>
			<aside class="aside__footer">
				<a href="">Мои работы</a>
				<a href="">Написать мне</a>
			</aside>
		</div>
		<main>
			
			<header>

				<nav>
					<div class="mobile">
						<div class="hamburger-menu ">
						    <input id="menu__toggle" type="checkbox" />
						    <label class="menu__btn" for="menu__toggle">
						      <span></span>
						    </label>

						    <ul class="menu__box">
						      	<li><a class="menu__item" href="#">Главная</a></li>
								<li><a class="menu__item" href="#">Статьи</a></li>
								<li><a class="menu__item" href="#">Обо мне</a></li>
								<li><a class="menu__item" href="#">Реклама</a></li>
						    </ul>
					  	</div>
					</div>

					<ul>
						<li><a href="">Главная</a></li>
						<li><a href="">Статьи</a></li>
						<li><a href="">Обо мне</a></li>
						<li><a href="">Реклама</a></li>
					</ul>
					<div class="nav_search">
						<ul>
							<li>
								<a href="">Профиль</a>
							</li>
						</ul>
						<div class="search">
							<input type="text" placeholder="Поиск по блогу">
						</div>
					</div>
				</nav>
				
			</header>

			<div class="main__container">
				<div class="main__top">
					<p>Результаты поиска "Создание сайта"</p>
				</div>

				<div class="cards">
					<div class="card">
						<div class="card__title">Как писать код быстро и безболезненно?</div>
						<div class="card__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo distinctio illum, qui nulla est impedit aperiam dolorum possimus modi soluta fugit vitae commodi culpa inventore rem quasi tempore voluptate doloremque.
						</div>
						<div class="card__footer">
							<div class="footer__right">
								<div class="date">22.02.2023</div>
								<div class="category">Category</div>
							</div>
							<a href="">Перейти</a>
						</div>
					</div>
					<div class="card">
						<div class="card__title">Как писать код быстро и безболезненно?</div>
						<div class="card__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo distinctio illum, qui nulla est impedit aperiam dolorum possimus modi soluta fugit vitae commodi culpa inventore rem quasi tempore voluptate doloremque.
						</div>
						<div class="card__footer">
							<div class="footer__right">
								<div class="date">22.02.2023</div>
								<div class="category">Category</div>
							</div>
							<a href="">Перейти</a>
						</div>
					</div>
					<div class="card">
						<div class="card__title">Как писать код быстро и безболезненно?</div>
						<div class="card__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo distinctio illum, qui nulla est impedit aperiam dolorum possimus modi soluta fugit vitae commodi culpa inventore rem quasi tempore voluptate doloremque.
						</div>
						<div class="card__footer">
							<div class="footer__right">
								<div class="date">22.02.2023</div>
								<div class="category">Category</div>
							</div>
							<a href="">Перейти</a>
						</div>
					</div>
					
				</div>
			</div>

		</main>
	</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>
<script type="text/javascript" src="/assets/js/slider.js"></script>
</body>
</html>