<?php
// tests/LoginTest.php

use PHPUnit\Framework\TestCase;

class authenTest extends TestCase {
    
    // Simule une fonction de connexion
    private function login($email, $password) {
        // Utilisateur valide pour le test
        $validUser = [
            'email' => 'test@example.com',
            'password' => 'password123'
        ];

        // Vérification des identifiants
        return $email === $validUser['email'] && $password === $validUser['password'];
    }

    public function testLoginValid() {
        // Test avec des identifiants valides
        $this->assertTrue($this->login('test@example.com', 'password123'));
    }

    public function testLoginInvalid() {
        // Test avec des identifiants invalides
        $this->assertFalse($this->login('test@example.com', 'wrongpassword'));
        $this->assertFalse($this->login('unknown@example.com', 'password123'));
    }
}
?>
