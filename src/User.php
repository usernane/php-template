<?php

class User {
    private $userName;
    private $email;
    
    public function __construct(string $userName, string $email) {
        $this->email = $email;
        $this->userName = $userName;
    }
    
    public function getUsername() {
        return $this->userName;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function __toString() {
        return 'Username: '.$this->getUsername().' Email: '.$this->getEmail();
    }
}
