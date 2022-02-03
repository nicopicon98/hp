<?php include 'header.php' ?>
<?php

require 'config/connection.php';

$db = new basedatos();
$words = $db->read_voc();

//variables

$key_search_result;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $key_search =  strtolower($_POST['search']);
  $key_search_result = $db->search_voc($key_search);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search'])) {
  $key_search =  strtolower($_GET['search']);
  $key_search_result = $db->search_voc($key_search);
}

?>
<?php include 'navbar.php' ?>
<main>
  <hero>
    <div class="position-relative overflow-hidden mx-4 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Punny headline</h1>
        <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
    </div>
  </hero>
  <div class="container">
    <section class="w-50 m-auto my-4">
      <form method="POST">
        <input 
        class="form-control"
        id="search" 
        type="text" 
        placeholder="Search" 
        autocomplete="off"
        name="search" 
        aria-label="Search" 
        value="<?php echo (isset($_GET['search']) || isset($_POST['search'])) ? $key_search : ''; ?>">
        <div id="display"></div>
      </form>
    </section>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Word</th>
          <th scope="col">Type</th>
          <th scope="col">English Definition</th>
          <th scope="col">Spanish Definition</th>
          <th scope="col">Example</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($_POST['search']) || isset($_GET['search'])) : ?>
          <?php if ($key_search_result->num_rows) : ?>
            <?php while ($key_result_assoc = mysqli_fetch_assoc($key_search_result)) : ?>
              <tr>
                <th scope="row" class="word"><?php echo $key_result_assoc['word'] ?></th>
                <td><?php echo $key_result_assoc['type'] ?></td>
                <td><?php echo $key_result_assoc['eng_def'] ?></td>
                <td><?php echo $key_result_assoc['spa_def'] ?></td>
                <td><?php echo $key_result_assoc['example'] ?></td>
              </tr>
            <?php endwhile; ?>
          <?php else :
            echo "<script>
            Swal.fire({
              icon: 'error',
              text: 'Your query doesn\'t match our data',
              timer: 1500,
            });
          </script>";
          ?>
          <?php endif; ?>
        <?php else : ?>
          <?php while ($words_asso = mysqli_fetch_assoc($words)) : ?>
            <tr>
              <th scope="row" class="word"><?php echo $words_asso['word'] ?></th>
              <td><?php echo $words_asso['type'] ?></td>
              <td><?php echo $words_asso['eng_def'] ?></td>
              <td><?php echo $words_asso['spa_def'] ?></td>
              <td><?php echo $words_asso['example'] ?></td>
            </tr>
          <?php endwhile; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</main>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="assets/js/scripts.js"></script>
<?php include 'footer.php' ?>