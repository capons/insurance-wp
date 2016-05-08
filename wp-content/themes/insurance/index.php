<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package insurance
 */

get_header(); ?>


<?php if(have_posts()): while(have_posts()):the_post();?>
	<?php the_content(); ?>
		<?php
	/*
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
//			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
//				get_template_part( 'template-parts/content', get_post_format() );

//			endwhile;

//			the_posts_navigation();

//		else :

//			get_template_part( 'template-parts/content', 'none' );

//		endif; ?>







	<!--content -->
	<section id="slider-section">
		<!--
        <div class="container">
            <div class="col-lg-4">
                <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
                <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
                <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
                <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
                <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
            </div>
        </div>
        -->
		<div style="width: 100%" id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--autoslide off data-interval="false" -->
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0"><a style="display: none" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"></a></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<!--
                    <img id="slider_bg_img" src="image/slider_bg.png">
                    -->
					<!--
                    <div class="carousel-caption">
                    -->
					<div class="container">
						<div class="col-xs-4">
							<p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
							<p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
							<span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
							<span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
							<button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
						</div>
					</div>
					<!-- </div>-->
				</div>
				<div class="item">
					<div class="container">
						<div class="col-xs-4">
							<p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
							<p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
							<span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
							<span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
							<button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container">
						<div class="col-xs-4">
							<p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
							<p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
							<span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
							<span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
							<button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<section id="main-content">
		<div class="container">
			<div id="buttons-m-c" style="padding: 30px;" class="row">
				<div  class="col-lg-3 t-elign-c">
					<img id="b-f-b" src="<?php bloginfo("template_directory");?>/image/b_people.png">
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
				</div>
				<div class="col-lg-3 t-elign-c">
					<button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
				</div>
			</div>
			<div id="c-services" style="padding: 30px;" class="row">
				<div class="col-xs-4">
					<div  class="col-lg-12 c-s-b-transport">

					</div>
				</div>
				<div class="col-xs-4">
					<div class="col-lg-12 c-s-b-medical">
						<button id="s-s-detail"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="col-lg-12 c-s-b-insurance">

					</div>
				</div>
			</div>
			<div class="row">
				<div id="cont-line" class="col-xs-11">

				</div>
			</div>
			<div class="row">
				<div  class="col-xs-11 center">
					<div class="col-lg-8">
						<table class="table-full">
							<tr>
								<td colspan="2">
									<p class="c-about-comp">ЭГИДА - современная страховая компания, которая применяет в своей работе новейшие технологии<br>
										и лучшие международные пратики в сфере управления процессами. Компания входит в глобальную страховую
										группу Liberty Mutual, которая успешно работает на страховом рынке с 1912 года и являеться одной из крупнейших в мире.
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p class="c-about-comp">
										В своей работе на российском рынке мы следуем стандартам и принципам работы Liberty Mutual, главной из которых -
										правильное и ответственное отношение к клиентам, деловым партнерам, сотрудникам и делу, которым мы занимаемся.
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы сотрудничаем с ведущими страховыми компаниями и банками России
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы непредвзято относимся к страховщикам и банкам объективно показываем<br>
										вам как преимущества, так и недостатки того или иного продукта в разных компаниях
									</p>
								</td>
							</tr>
							<tr>
								<td style="width: 21px;vertical-align: top">
									<span class="dot"></span>
								</td>
								<td>
									<p class="c-about-comp">
										Мы - это опытная команда страховых, финансовых специалистов и юристов, которая
										обеспечивает поддержку на всех этапах заказа или просчета услуги
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p class="c-about-comp">
										Мы стремимся быть лучшими страховыми партнерами для наших клиентов: предлагать лучьшие продукты, лучшие цены и, конечно,
										лучший уровень обслуживания. Судя по оценкам, которые мы получаем от наших клиентов, у нас это получается.
										Мы будем рады,если и вы оцените нашу работу: вы можете позвонить в Центр контроля качества, отправить информацию через сайт или обратиться
										в любой из наших офисов. Мы работаем для вас и отвечаем для вас и отвечаем зв результат. И мы будем рады разделить наши успехи и
										достижения вместе с вами.
									</p>
								</td>
							</tr>
						</table>
					</div>
					<div id="mult-bg" class="col-lg-4">

					</div>
				</div>
			</div>
		</div>
		<div id="call-b-bg" class="col-xs-12">
			<div style="padding: 30px;text-align: center" class="col-lg-8 center">
				<p style="font-size: 30px;color: white">
					Один номер для любого вопроса <b>+7(473) 239 31 07</b>
				</p>
				<div class="row">
					<div class="col-lg-6">
						<a id="a-tech" href="#"><span id="technologi"></span>Обратный звонок</a>
					</div>
					<div class="col-lg-6">
						<a id="a-map" href="#"><span id="map_b"></span>Обратный звонок</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--News Section -->
	<section>


		<?php// while ( have_posts() ) : the_post();
			 // if ( comments_open() || get_comments_number() ) :
			//	comments_template();
				the_content();
				?>


		<div  style="min-height: 500px"  class="col-lg-5 col-lg-offset-1">
			<div class="col-xs-12">
				<p style="font-size: 30px">Новости</p>
			</div>
			<div class="col-xs-6">


				<button class="news-button">ПОДРОБНЕЕ >></button>
			</div>
			<div class="col-xs-6">
				<button class="news-button">ПОДРОБНЕЕ >></button>
			</div>
		</div>
		<div style="background: rgb(235,234,230);min-height: 500px" class="col-lg-6">
			<div class="col-lg-11">
				<div class="col-xs-12">
					<p style="font-size: 30px">Полезная информация</p>
				</div>
				<div class="col-xs-12 no-padding">
					<div class="col-xs-6">
						<button class="news-button">ПОДРОБНЕЕ >></button>
					</div>
					<div class="col-xs-6">
						<button class="news-button">ПОДРОБНЕЕ >></button>
					</div>
				</div>
			</div>
		</div>


		<?php
	//	endif;

	//	endwhile; // End of the loop.
		?>


	</section>
	<section>
		<div class="container">
			<div style="text-align: center;padding: 10px" class="col-xs-12">
				<img id="ou-clients" src="<?php bloginfo("template_directory");?>/image/clients.png" alt="alt">
			</div>
		</div>
		<div id="orange-line" class="col-lg-12">

		</div>
	</section>







<?php endwhile; endif; ?>

<?php
//get_sidebar();



get_footer();



