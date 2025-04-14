<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['moneyfield'];
    $money = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $pieces = [];
    $result = 0;

    if ($input >= 1) {
        for ($i = 0; $i < count($money); $i++) {
            while ($money[$i] <= $input) {
                $result += 1;
                $input -= $money[$i];
                $pieces[] = $money[$i]; 
            }
        }
        $summary = array_count_values($pieces);
        
        $_SESSION['result'] = $result;
        $_SESSION['summary'] = $summary;
    }
    header("Location: index.php");
    exit();
}
?>