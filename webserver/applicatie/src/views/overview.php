<?php
  include 'src/utils/form_processing/overview_form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Overview</title>
    <?php
        include 'src/utils/includes/head.php';
    ?>
</head>
<body>
    <?php
      include 'src/utils/includes/navbar.php';
    ?>
    <div class="container">
        <h2>Movie overview</h2>
            <form>
                <div class="split filter-menu">
                    <select name="genre" id="genre">
                      <option value="" disabled selected>Select genre</option>
                      <?= $options_genre ?>
                    </select>
                    <select name="year" id="year">
                      <option value="" disabled selected>Select year</option>
                      <?= $options_year ?>
                    </select>
                    <select name="director" id="director">
                      <option value="" disabled selected>Select director</option>
                      <?= $options_director ?>
                    </select>
                    <input name="search_query" id="search_query" type="text" placeholder="Search">
                    <a href="/overview">
                      <button type="button" class="zoom-animation">Reset</button>
                    </a>
                    <button type="submit" name="search">Search</button>
                </div>
            </form>
        <table>
            <tr>
                <th class="hide-at-mobile"></th>
                <th>Title</th>
                <th>Duration</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
            <?= $table_records ?>
        </table>
    </div>
    <?php include 'src/utils/includes/footer.php'; ?>
</body>
</html>
