<?php // assumes Articles page inherits layout from Homepage
  $layout = Layout::findById($this->findById(1)->layout_id)->name; 
  if ($layout !== "Baseline") : ?>
<?php $article = $this->find('articles'); 
      $archives = $article->archive->archivesByMonth(); ?>

<h3>Archives By Month</h3>
<ul>
<?php foreach ($archives as $date): ?>
  <li><a href="http://lite.sudalyph.org/articles/<?php echo $date . URL_SUFFIX; ?>"><?php echo strftime('%B %Y', strtotime(strtr($date, '/', '-'))); ?></a></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>