<?php
// loop through the text lines
// filter the lines according to:
// numbers are minimum and max amount of letters required in the password;
// letter indicates the letter itself.
class DayTwo {
	private $file = './input.txt';
	private $fileLines = [];
	private $matches = [];

	/**
	 * Setup file reading and boot parsing 
	 */
	public function __construct() {
		$this->fileLines = file($this->file);
		$this->findPasswords();
	}

	/**
	 * Find the passwords that match in the list
	 */
	public function findPasswords() {
		foreach($this->fileLines as $line) {
			$policy = explode(':', $line);
			$password = explode(': ', $line);
			$letterToMatch = explode(' ', $policy[0]);	
			$minMax = explode('-', $letterToMatch[0]);
			// perform the search
			$foundAmount = substr_count($password[1], $letterToMatch[1]);

			if($foundAmount >= $minMax[0] && $foundAmount <= $minMax[1]) {
				$this->matches[] = [$foundAmount, $password[1], $letterToMatch[1], $minMax];
			}
		}

		$this->printResult();
	}

	public function printResult() {
		echo "Amount of password ::" . count($this->matches);
	}
}


new DayTwo();