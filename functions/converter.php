<?php
$kiril='';
$output='';
if (isset($_POST['kiril'])) {
    $kiril = $_POST['kiril'];
    $latin = [
        'A' => 'А', 'B' => 'Б', 'C' => 'Ц', 'D' => 'Д', 'E' => 'Э', 'F' => 'Ф', 'G' => 'Г',
        'H' => 'Х', 'I' => 'И', 'J' => 'Й', 'K' => 'К', 'L' => 'Л', 'M' => 'М', 'N' => 'Н', 'O' => 'О',
        'P' => 'П', 'R' => 'Р', 'S' => 'С', 'T' => 'Т', 'U' => 'У', 'V' => 'В', 'X' => 'Кс', 'Y' => 'Ы', 'Z' => 'З',
        'a' => 'а', 'b' => 'б', 'c' => 'ц', 'd' => 'д', 'e' => 'э', 'f' => 'ф', 'g' => 'г',
        'h' => 'х', 'i' => 'и', 'j' => 'й', 'k' => 'к', 'l' => 'л', 'm' => 'м', 'n' => 'н', 'o' => 'о',
        'p' => 'п', 'r' => 'р', 's' => 'с', 't' => 'т', 'u' => 'у', 'v' => 'в', 'x' => 'кс', 'y' => 'ы', 'z' => 'з'
    ];

    if (array_key_exists($kiril, $latin)) {
        echo json_encode(['status' => true, 'kiril' => $latin[$kiril]]);
    } else {
        echo json_encode(['status' => false, 'message' => 'Səhvdir']);
    }
}
