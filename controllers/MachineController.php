<?php
namespace Controllers;
class MachineController
{
    public static function playindex()
    {
        require_once ROOT."/views/machine.php";
    }

    public static function play()
    {
        
        header('Content-Type: application/json');

        // Définition des symboles et poids
        $symbols_with_weights = [
            '🍋' => 40,
            '🍒' => 30,
            '⭐' => 15,
            '🔔' => 10,
            '💎' => 5,
        ];

        // Table des gains
        $paytable = [
            '🍋🍋🍋' => 40,
            '🍒🍒🍒' => 50,
            '⭐⭐⭐' => 100,
            '🔔🔔🔔' => 150,
            '💎💎💎' => 200,
        ];

        // Générer les symboles
        $reel1 = self::getRandomSymbol($symbols_with_weights);
        $reel2 = self::getRandomSymbol($symbols_with_weights);
        $reel3 = self::getRandomSymbol($symbols_with_weights);

        // Combinaison et calcul des gains
        $combination = $reel1 . $reel2 . $reel3;
        $gain = isset($paytable[$combination]) ? $paytable[$combination] : 0;

        // Réponse JSON
        echo json_encode([
            'success' => true,
            'reels' => [$reel1, $reel2, $reel3],
            'gain' => $gain,
        ]);

        require_once ROOT . "/templates/global.php";
        require_once ROOT."/views/slot-machine.php";
    }

    private static function getRandomSymbol($symbols_with_weights)
    {
        $rand = mt_rand(1, array_sum($symbols_with_weights));
        foreach ($symbols_with_weights as $symbol => $weight) {
            if ($rand <= $weight) {
                return $symbol;
            }
            $rand -= $weight;
        }
        return null; // Cas improbable
    }  
    
    public static function test(){
       require_once ROOT . "/templates/global.php";
    }
}