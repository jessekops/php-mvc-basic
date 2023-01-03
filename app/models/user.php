<?php
class User {

    private int $id;
    private string $userName;
    private string $passWord;
    private string $email;	

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
	public function getUserName(): string {
		return $this->userName;
	}
	
	/**
	 * @param string $userName 
	 * @return self
	 */
	public function setUserName(string $userName): self {
		$this->userName = $userName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassWord(): string {
		return $this->passWord;
	}
	
	/**
	 * @param string $passWord 
	 * @return self
	 */
	public function setPassWord(string $passWord): self {
		$this->passWord = $passWord;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string {
		return $this->email;
	}
	
	/**
	 * @param string $email 
	 * @return self
	 */
	public function setEmail(string $email): self {
		$this->email = $email;
		return $this;
	}
}