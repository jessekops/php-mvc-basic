<?php
class Game implements \JsonSerializable {

    private int $id;
    private string $opponent;
    private string $date;
    private string $price;
	private string $time;

	public function jsonSerialize():mixed
    {
        return get_object_vars($this);
    }
	
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
