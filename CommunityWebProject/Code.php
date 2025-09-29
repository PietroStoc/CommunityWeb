<?php
$csvFile = 'CommunityDatabase.csv';

if (file_exists($csvFile)) {
    $file = fopen($csvFile, 'r');
    
    echo '<table>';
    
    $isFirstRow = true;
    
    while (($row = fgetcsv($file)) !== false) {
        echo '<tr>';
        
        $cellType = $isFirstRow ? 'th' : 'td';
        
        foreach ($row as $cell) {
            echo "<$cellType>" . htmlspecialchars($cell) . "</$cellType>";
        }
        
        echo '</tr>';
        $isFirstRow = false;
    }
    
    echo '</table>';
    
    fclose($file);
} else {
    echo '<p style="color: red;">File CSV non trovato!</p>';
}
?>