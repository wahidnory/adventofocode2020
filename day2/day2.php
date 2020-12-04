<?php
// loop through the text lines
// filter the lines according to:
// numbers are minimum and max amount of letters required in the password;
// letter indicates the letter itself.
class DayTwo {
	private $file = './input.txt';
	private $fileLines = [];

	/**
	 * Setup file reading and boot parsing 
	 */
	public function __construct() {
		$this->fileLines = file($this->file);
	}

	public function findPasswords() {

	}

	public function printResult() {
		echo "Amount of password ::" . $this->passwordMatch;
	}
}


new DayTwo();