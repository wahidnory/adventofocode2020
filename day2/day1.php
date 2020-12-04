<?php 
class DayOne {
	private $file = './input.txt';
	private $fileLines = [];
	private $index = 0;
	private $found2020 = false;
	private $base = 0;
	private $match = 0;
	private $anotherMatch = 0;

	/**
	 *	Lets setup basics and boot it.
	 */
	public function __construct() {
		$this->fileLines = file($this->file);
		$this->find2020();
	}

	/**
	 *	Find 2020.
	 */ 
	public function find2020() {
		foreach($this->fileLines as $base) {
			foreach($this->fileLines as $possibleMatch) {
				foreach($this->fileLines as $anotherPossibleMatch) {
					$this->base = (int) $base;
					$this->match = (int) $possibleMatch;
					$this->anotherMatch = (int) $anotherPossibleMatch; 
					
					$sum =  $this->base + $this->match + $this->anotherMatch;
					
					if($sum === 2020) {
						break 3;
					}
				}
			}
		}		

		// we found 2020 
		return $this->printResult();
	}

	/**
	 * Just print something so we know what's up.
	 */
	public function printResult() {
		echo "match :: " . $this->match ."\r\n"; 
		echo "match :: " . $this->base ."\r\n";
		echo "match :: " . $this->anotherMatch . "\r\n";

		echo "Result :: " . $this->match * $this->base * $this->anotherMatch;
	}
}

new DayOne();