<?php
class NumberChecker  {

	//public int $number;
	public function __construct(public int $number) {}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}
?>
