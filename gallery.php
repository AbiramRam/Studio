<!-- gallery.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Malcolm Lismore Photography</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <section id="gallery">
            <h2>Photography Gallery</h2>
            <div class="gallery-grid">
                <?php
                include '../db.php';
                $result = $conn->query("SELECT * FROM gallery");
                while($row = $result->fetch_assoc()) {
                    echo '<div class="gallery-item">';
                    echo '<img src="../assets/images/' . $row['image_path'] . '" alt="' . $row['title'] . '">';
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div>';
                }
                $conn->close();
                ?>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>
