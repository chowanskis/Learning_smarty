<?php
function getUserID($username)
{
    global $conn;
    static $returns;

    // sprawdzenie, czy s� dost�pne wyniki 
    // tej funkcji dla podanej nazwy u�ytkownika
    if (!empty($returns[$username])) {
        return $returns[$username];
    }

    $stmt = "SELECT
                user_id
             FROM
                user
             WHERE
                user_name='" . addslashes($username) . "'";
    $result = mysql_query($stmt, $conn);
    if ($result) {
        $user_id = mysql_result($result, 0, 0);
        // umieszczenie wyniku w buforze do p�niejszego wykorzystania
        $returns[$username] = $user_id;
        return $user_id;
    }
}

// pierwsze wywo�anie spowoduje wykonanie zapytania do bazy danych
$user_id = getUserID('andrei');
// przy drugim wywo�aniu wyniki b�d� pobrane z bufora
$user_id = getUserID('andrei');
?>
