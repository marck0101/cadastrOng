<?php
/**
 * @var \CodeIgniter\Pager\PagerRenderer $pager
 */

$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<!-- adiciona classe justify-content-center para justificar o conteúdo -->
	<ul class="pagination justify-content-center">
		<?php if ($pager->hasPrevious()) : ?>
			<!-- adiciona classe page-item -->
			<li class='page-item'>
				<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
					<span aria-hidden="true"><?= lang('Pager.first') ?></span>
				</a>
			</li>
			<!-- adiciona classe page-item -->
			<li class='page-item'>
				<a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<!-- adiciona classe page-item -->
			<li <?= $link['active'] ? 'class="active page-item"' : 'class="page-item"' ?>>
				<!-- adiciona classe page-link -->
				<a href="<?= $link['uri'] ?>" class="page-link">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<!-- adicionado page-item a classe -->
			<li class='page-item'>
				<!-- adicionado classe page-link -->
				<a class='page-link' href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
			<!-- adicionado page-item a classe -->
			<li class='page-item'>
				<!-- adicionado classe page-link -->
				<a class='page-link' href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
					<span aria-hidden="true"><?= lang('Pager.last') ?></span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
