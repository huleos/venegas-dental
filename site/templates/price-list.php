<?php snippet('header') ?>

<?php if($page->isVisible('price-list')): ?>
	<?php go('/') ?>
<?php endif ?>
<!-- Cover with Form Snippet -->
<div class="o-container--full u-px0">
	<div class="o-flex o-flex--justify">
		<div class="c-cover"></div>
		<?php snippet('form-cta') ?>
		<div class="c-hero">
			<?php if($page->isHomePage()): ?>
			<h1 class="c-hero__text"><?= $page->coverText() ?></h1>
			<?php else: ?>
			<h2 class="c-hero__text"><?= $page->coverText() ?></h2>
			<?php endif ?>
		</div>
	</div>
</div>
<!-- /Cover with Form Snippet -->

<section class="o-container--md u-pt4 u-pb4">
	<h1 class="u-mb2"><?= $page->title() ?></h1>
	<?= $page->text()->kirbytext() ?>
	
	<h3>Orthodontics</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->orthodontics()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Implant Procedures</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->implantProcedures()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Dentures</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->Dentures()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Crowns / Veneers</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->crownsVeneers()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Root Canal Treatment</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->rootCanalTreatment()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Cleaning, Whitening, Fillings & Extractions</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->cleaningWhiteningFillingsExtractions()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

	<h3>Diagnostics</h3>
	<table class="c-table c-table--hover u-mb3">
		<thead>
			<tr>
				<th>Procedure</th>
				<th width="150">Price starting at</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($page->diagnostics()->toStructure() as $item): ?>
			<tr>
				<td><?= $item->procedure() ?></td>
				<td>$<?= number_format((int)"$item->price()") ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</section>

<?php snippet('footer') ?>