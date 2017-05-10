<?php get_header(); ?>
<!--文章列表-->
	<div class="articleList container">
		<div class="row">
			<div class="col-md-12">
				<!--single article-->
				<?php if ( have_posts() ) : ?>
		        		<?php while (have_posts()) : the_post();?>
				<div class="article">
					<div class="articleHeader">
						<h1 class="articleTitle"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
						<span class="cate-Div">
							<i class="fa fa-map-marker"></i><?php
					                          foreach((get_the_category()) as $category)
					                          {
					                          echo $category->cat_name;
					                          }
					                          ?>
						</span>
					</div>
					<div class="articleBody clearfix">
						<!--缩略图-->
						<div class="articleThumb">
							<a href="<?php the_permalink();?>"><img src="<?php echo post_thumbnail_src(); ?>" alt="<?php the_title();?>"></a>
						</div>
						<!--摘要-->
						<div class="articleFeed">
							<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 240,"……"); ?>
							</p>
						</div>
					</div>
					<div class="articleFooter clearfix">
						<ul class="articleStatu">
							<li><i class="fa fa-calendar"></i><?php echo timeago( get_gmt_from_date(get_the_time('Y-m-d G:i:s')) ) ?></li>
							<li><i class="fa fa-eye"></i><?php if(function_exists('the_views')) { the_views(); } ?>次浏览</li>
							<li><a href=""><i class="fa fa-folder-o"></i>
							<?php the_category(’, ‘) ?></a></li>
						</ul>
						<a href="<?php the_permalink();?>" class="btn btn-readmore btn-info btn-md">阅读更多</a>
					</div>
				</div>
				<?php endwhile;?>
			    <?php endif;?>
			</div>
		</div>
	</div>
	<div class="container pageNav">
		<div class="row">	
			<div class="col-md-12">
				<nav>
				  <?php paging_nav(); //分页导航?>
				</nav>
			</div>
		</div>
	</div>
<?php get_footer(); ?>