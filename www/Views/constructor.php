<div>
	<div class="constructor-navigator step1 stepped">
		Шаг 1: Выбор письма
	</div><div class="constructor-navigator step2 active">
		Шаг 2: Параметры отправки
	</div><div class="constructor-navigator step3">
		Шаг 3: Оплата
	</div>


	<div class="constructor-steps step1">
		<div class="letters categories">
			<?php
				$active = 'active';
				$i = 0;
				foreach ($c as $item) :
					$i ++;
					if (isset ($item ['subcategory'])) {
						$ctgr = 'ctgrList closed';
					} else {
						$ctgr = 'ctgr';
						$i ++;
						if (!isset ($item ['templatesData'])) continue;
					}
					if (isset ($item ['subcategory']) && $active == 'active') $active = ' '; ?>
				<div data-id="<?= $i ?>" class="letters-item <?= $ctgr ?> <?= $active ?>"><?= $item ['templates_categories_name'] ?></div>
				<?php if (isset ($item ['subcategory'])) :
					?>
						<div class="subcategories">
						<?php
							if ($active == ' ') $active = 'active';
							foreach ($item ['subcategory'] as $subItem) :
								if (!isset ($subItem ['templatesData'])) continue;
								?>
							<div data-id="<?= $i ?>" class="letters-item ctgr <?= $active ?>"><?= $subItem ['templates_categories_name'] ?></div>
						<?php endforeach; ?>
						</div>
				<?php endif;
				$active = '';
				endforeach; ?>
		</div><div class="letters previews scrollbar-inner">
			<?php
				foreach ($c as $item) :
					$i ++;
					if (!isset ($item ['subcategory'])) $i ++;
					if (isset ($item ['templatesData'])) :
				?>
				<div class="catGroup id<?= $i ?>"></div>
				<div class="letters-item">
					<div class="preview-id hidden"><?= $item ['templates_id']?></div>
					<div class="preview-title"><?= $item ['templates_title']?></div>
					<div class="preview-desc"><?= $item ['templates_prev']?></div>
					<div class="preview-text hidden"></div>
				</div>
			<?php endif; endforeach; ?>
			<!--div class="letters-item active">
				<div class="preview-title">
					Мадонна дней моих суровых
				</div>
				<div class="preview-text">Мадонна дней моих суровых,
					Ко мне во сне явилась ты,
					И с блеском губ твоих бордовых
					Творила все мои мечты.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Подруга дней моих понтовых
				</div>
				<div class="preview-text">Подруга дней моих понтовых,
					Как по тебе лелею я,
					По временам бухла, гандонов,
					Когда еще была моя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div>
			<div class="letters-item">
				<div class="preview-title">
					Хочу сказать тебе три слова...
				</div>
				<div class="preview-text">Хочу сказать тебе три слова,
					Которые внутри меня,
					Которые боюсь озвучить снова,
					Но, как ни как, люблю тебя.
				</div>
			</div-->
		</div><div class="letters text">Мадонна дней моих суровых,
			Ко мне во сне явилась ты,
			И с блеском губ твоих бордовых
			Творила все мои мечты.

			И не ответить невозможно,
			И так грешна моя душа.
			Что в тишине подземной может
			Получится моя семья.
		</div>
	</div>
	<?php \Anex::showArray($c); ?>
	<div class="constructor-steps step2 hidden">2</div>
</div>