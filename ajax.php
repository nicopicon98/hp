<?php
//Including Database configuration file.
include "config/connection.php";
$db = new basedatos();
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) :
  //Search box value assigning to $Name variable.
  $Name = $_POST['search'];
  //Search query.
  // $Query = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5";
  //Query execution
  $ExecQuery = $db->live_search_voc($Name);
  //Creating unordered list to display result.
  echo '<ul>'; ?>
  <!-- Fetching result from database. -->
  <?php while ($Result = mysqli_fetch_assoc($ExecQuery)) : ?>

    <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
    <li  onclick='fill("<?php echo $Result['word']; ?>")'>
      <a href="/?search=<?php echo $Result['word']; ?>">
        <!-- Assigning searched result in "Search box" in "search.php" file. -->
        <?php echo $Result['word']; ?>
      </a>
    </li>
    <!-- Below php code is just for closing parenthesis. Don't be confused. -->
<?php
  endwhile;
endif;
?>
</ul>