<?php
// tests/BoutonTest.php

use PHPUnit\Framework\TestCase;

class BoutonTest extends TestCase
{
    protected $html;

    protected function setUp(): void
    {
        // Commencez par exécuter le fichier PHP pour récupérer le contenu HTML
        ob_start();
        include 'path/to/your/file.php'; // Remplacez par le bon chemin
        $this->html = ob_get_clean();
    }

    public function testSignalerBoutonExists()
    {
        $this->assertStringContainsString('<a href="interface2.php" class="btn btn-primary">Signaler un cas</a>', $this->html);
    }

    public function testSignalerBoutonLink()
    {
        // Créer un DOMDocument et charger le HTML
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Ignore les erreurs de parsing
        @$dom->loadHTML($this->html);
        $bouton = $dom->getElementsByTagName('a');

        $found = false;
        foreach ($bouton as $bouton) {
            echo 'Button text: ' . trim($bouton->textContent) . "\n"; // Debug

            if (trim($bouton->textContent) === 'Signaler un cas') {
                $found = true;

                if ($bouton instanceof DOMElement) {
                    $href = $bouton->getAttribute('href'); // Utilisez getAttribute ici
                    $this->assertEquals('interface2.php', $href);
                } else {
                    $this->fail('Le bouton trouvé n\'est pas un élément DOM valide.');
                }
                break;
            }
        }

        $this->assertTrue($found, 'Le bouton "Signaler un cas" n\'a pas été trouvé.');
    }
}
?>
