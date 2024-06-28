<?php get_header(); ?>

        <section class="banner">
			<div class="slider">
				<button class="slider__arrow slider__arrow_prev">
					<img src="icons/Vector2.svg" alt="prev_arrow">
				</button>
				<button class="slider__arrow slider__arrow_next">
					<img src="icons/Vector1.svg" alt="next_arrow">
				</button>
				<div class="slider__window">
					<div class="slider__inner">
						<div class="slider__slide">
							<h1 class="title title_fz45 title_fw700">H1&nbsp;&nbsp;text</h1>
							<button data-modal=modal class="btn">Open pop-up button</button>
						</div>
						<div class="slider__slide">
							<h1 class="title title_fz45 title_fw700">H1&nbsp;&nbsp;text2</h1>
							<button data-modal=modal class="btn">Open pop-up button</button>
						</div>
						<div class="slider__slide">
							<h1 class="title title_fz45 title_fw700">H1&nbsp;&nbsp;text3</h1>
							<button data-modal=modal class="btn">Open pop-up button</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="blocks">
			<h2 class="title blocks__title">H2 text</h2>
			<div class="blocks__wrapper">
				<div class="blocks__row blocks__row_1">
					<div class="blocks__item text text_fz53">1</div>
					<div class="blocks__item text text_fz53">2</div>
				</div>
				<div class="blocks__row blocks__row_2">
					<div class="blocks__item text text_fz53">3</div>
					<div class="blocks__item text text_fz53">4</div>
				</div>
			</div>
		</section>
		<section class="cards">
			<h2 class="title cards__title">H2 text</h2>
			<div class="cards__wrapper">
				<div class="cards__item active"></div>
				<div class="cards__item"></div>
				<div class="cards__item"></div>
				<div class="cards__item"></div>
				<div class="cards__item"></div>
			</div>
		</section>
		<section class="utp">
			<h3 class="title title_fz28 title_fw500">Text utp</h3>
			<button data-modal=modal class="btn utp__btn">Open pop-up button</button>
		</section>

<!-- ?php get_sidebar(); ?> -->
<!-- выше раскомментриовать и добавить в начале '<', когда блок будет -->
<?php get_footer(); ?>