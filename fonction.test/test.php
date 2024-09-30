
public function testInsererUtilisateur() {
        $nom = "Nom";
        $prenom = "Prenom";
        $email = "test@example.com";
        $niveau = "niveau";
        $mdp = "password";

        // Mock de la requête préparée
        $mockStmt = $this->createMock(mysqli_stmt::class);
        $mockStmt->expects($this->once())
                 ->method('bind_param')
                 ->with($this->equalTo('sssss'), $nom, $prenom, $niveau, $email, $mdp);
        $mockStmt->expects($this->once())
                 ->method('execute')
                 ->willReturn(true);

        // Mock de la connexion pour retourner le mock du statement
        $this->mockConn->expects($this->once())
                       ->method('prepare')
                       ->with($this->equalTo('INSERT INTO utilisateur (nom, prenom, niveau, email, mdp) VALUES (?, ?, ?, ?, ?)'))
                       ->willReturn($mockStmt);

        $result = insererUtilisateur($this->mockConn, $nom, $prenom, $niveau, $email, $mdp);
        $this->assertTrue($result);
    }
