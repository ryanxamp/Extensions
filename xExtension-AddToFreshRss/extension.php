<?php

declare(strict_types=1);

/**
 * Class AddToFreshRssExtension
 *
 * @author ryanxamp
 */
final class AddToFreshRssExtension extends Minz_Extension {
	#[\Override]
	public function init(): void {
		$this->registerTranslates();
	}
}
