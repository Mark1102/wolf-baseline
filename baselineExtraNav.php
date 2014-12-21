<!-- START baselineExtraNav -->
<?php $post = $this->find('articles'); 
      $all_posts = $post->archive->archivesByMonth(); ?>

<h3>Navigation</h3>

    <ul class="alt">
    <?php if ($this->level() > 0) : ?>
<li class="icon navi fa-chevron-up">&#8194;<?php echo $this->parent->link($this->parent->title()); ?></li>
<li class="icon here fa-chevron-right">&#8194;<?php echo $this->title(); ?></li>
        <?php if (count($this->children()) > 0 && $this->title() != 'Articles') {
            foreach($this->children() as $inlineMenu): ?>
<li class="icon navi fa-chevron-down">&#8194;<?php echo $inlineMenu->link($inlineMenu->title()); ?></li>
<?php endforeach; }
    if ($this->children() > 0 && $this->slug() == 'articles') {
	foreach ($all_posts as $post_date): ?>
<li class="icon navi fa-chevron-down">&#8194;<a href="<?php echo $this->uri().'/'.$post_date.URL_SUFFIX; ?>"><?php echo strftime('%B %Y', strtotime(strtr($post_date, '/', '-'))); ?></a></li>
<?php	endforeach;
    } 
endif; ?>
    </ul>
<!-- END baselineExtraNav -->