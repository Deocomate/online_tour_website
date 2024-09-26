<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Template</title>
    <!-- Include Stylesheet -->
    <?php include "./component-styles.php" ?>
    <!-- End Include Stylesheet -->
</head>

<body>
    <!-- Include Header -->
    <?php
    include "./component-header.php"
    ?>
    <!-- End Include Header -->
    <main>

        <section class="component-top-tour">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="component-card-tour">1</div>
            <?php endfor; ?>
        </section>

    </main>
    <!-- Include Footer -->
    <?php include "./component-footer.php" ?>
    <!-- End Include Footer -->

    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>