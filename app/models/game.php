<?php
class Game {

    private int $id;
    private string $opponent;
    private string $date;
    private int $nrOfTickets;
    private string $price;
	private string $time;
	
	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

/**
	 * @return string
	 */
	public function getOpponent(): string {
		return $this->opponent;
	}
	
	/**
	 * @param string $opponent 
	 * @return self
	 */
	public function setOpponent(string $opponent): self {
		$this->opponent = $opponent;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDate(): string {
		return $this->date;
	}
	
	/**
	 * @param string $date 
	 * @return self
	 */
	public function setDate(string $date): self {
		$this->date = $date;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getNrOfTickets(): int {
		return $this->nrOfTickets;
	}
	
	/**
	 * @param int $nrOfTickets 
	 * @return self
	 */
	public function setNrOfTickets(int $nrOfTickets): self {
		$this->nrOfTickets = $nrOfTickets;
		return $this;
	}


	/**
	 * @return string
	 */
	public function getPrice(): string {
		return $this->price;
	}
	
	/**
	 * @param string $price 
	 * @return self
	 */
	public function setPrice(string $price): self {
		$this->price = $price;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTime(): string {
		return $this->time;
	}
	
	/**
	 * @param string $time 
	 * @return self
	 */
	public function setTime(string $time): self {
		$this->time = $time;
		return $this;
	}
}
