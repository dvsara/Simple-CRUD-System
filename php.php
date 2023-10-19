<?php
// Configurazione del database
$dbHost = 'localhost';
$dbName = 'tasks';
$dbUser = 'tuo_utente_db';
$dbPass = 'tua_password_db';

// Creare una connessione al database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Operazione di Creazione
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tasklist (title, description, done) VALUES ('$title', '$description', 0)";
    if ($conn->query($sql) === TRUE) {
        echo "Attività creata con successo";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}

// Operazione di Lettura
$sql = "SELECT id, title, description, done FROM tasklist";
$result = $conn->query($sql);

echo "<h1>Task List</h1>";

// Creazione del modulo di creazione
echo "<form method='post'>";
echo "<label for='title'>Titolo dell'attività:</label>";
echo "<input type='text' name='title' required><br>";
echo "<label for='description'>Descrizione dell'attività:</label>";
echo "<textarea name='description' required></textarea><br>";
echo "<input type='submit' name='create' value='Aggiungi attività'>";
echo "</form>";

echo "<h2>Attività:</h2>";

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $taskStatus = ($row['done'] == 1) ? 'Completato' : 'Non completato';
        echo "<li>Attività ID: " . $row['id'] . " - Titolo: " . $row['title'] . " - Descrizione: " . $row['description'] . " - Stato: " . $taskStatus . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nessuna attività trovata.";
}

$conn->close();
?>