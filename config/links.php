<?php

class Link{

	public $title;
	public $image;
	
	public function __construct($_title, $_image) {
		$this->title = $_title;
		$this->image = $_image;
	}
}

return [
    new Link('Digital Comics', 'buy-comics-digital-comics.png'),
    new Link('Dc Merchandise', 'buy-comics-merchandise.png'),
    new Link('Subscription', 'buy-comics-subscriptions.png'),
    new Link('Comic Shop Locator', 'buy-comics-shop-locator.png'),
    new Link('Dc Power Visa', 'buy-dc-power-visa.svg'),
];