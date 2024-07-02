<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Janji - MindWell Clinic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><center>Data Janji - MindWell Clinic</center></h1>
    </header>
    <main>
        <section id="data-janji">
            <h2><center>Daftar Janji</center></h2>
            <?php
            $filename = 'janji_temuan.txt';

            if (file_exists($filename)) {
                $file = fopen($filename, 'r');
                echo '<ul>';
                while (($line = fgets($file)) !== false) {
                    echo '<li>' . htmlspecialchars($line) . '</li>';
                }
                echo '</ul>';
                fclose($file);
            } else {
                echo '<p><center>Tidak ada janji yang dibuat.</center></p>';
            }
            ?>
        </section>
        <center>
            <button onclick="window.location.href='index.html'">Back Home</button>
        </center>
    </main>
</body>
</html>
