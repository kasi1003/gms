<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/companyPage.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <title>Heavenly Tomb | AVBOB</title>
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="service-providers-page.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Service Providers
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="avbobPage.html">AVBOB</a>
            <a class="dropdown-item" href="service-providers-page.html">View More</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cemeteries.html">Buy a Grave</a>
        </li>

      </ul>
    </div>
  </nav>


  <!--first section-->
  <section class="funeral-services">
    <div class="card bg-dark mb-3 border-secondary" style="margin: 10px;">
      <div class="card-header border-secondary">
      <?php
        $serviceProviderName = $_GET['service_provider_name'];
      ?>
      <h1 class="service-provider-page-name"><?php echo $serviceProviderName; ?></h1>
        <h2 class="company-details">Services</h2>
      </div>
      <div class="card-body">
        <div class="card-deck" style="margin: 30px">
          <div class="card text-center text-white bg-dark mb-3 border-secondary" style="width: 18rem; border-radius: 20px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2em; margin-top: 10px;" border-radius: 20px;>Cremation</h5>
              <p class="card-text">Cremation has become a popular option for many people in Namibia because it can be more flexible as to where and when you hold the service.
              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 1em; border-radius: 7px;">Read More</a>
            </div>
          </div>
          <div class="card text-center text-white bg-dark mb-3 border-secondary" style="width: 18rem; border-radius: 20px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2em; margin-top: 10px;">Burial Service</h5>
              <p class="card-text">A casket burial is a traditional burial service, but there are many options to choose from when it comes to burial services in Namibia.

              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 1em; border-radius: 7px;">Read More</a>
            </div>
          </div>
          <div class="card text-center text-white bg-dark mb-3 border-secondary" style="width: 18rem; border-radius: 20px;">
            <div class="card-body">
              <h5 class="card-title" style="font-size: 2em; margin-top: 10px;">Transport of Body</h5>
              <p class="card-text">A casket burial is a traditional burial service, but there are many options to choose from when it comes to burial services in Namibia.

              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 1em; border-radius: 7px;">Read More</a>
            </div>
          </div>

        </div>
      </div>
    </div>






  </section>

  <!--second section-->

  <section class="reviews-section">
    <h1 class="reviews-text">Reviews</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_table = "heavenly_tomb";

        $conn = new mysqli($db_host, $db_username, $db_password, $db_table);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve reviews from the database
        $sql = "SELECT name, review, created_at FROM reviews ";
        $result = $conn->query($sql);

        $card_count = 0;
        while ($row = $result->fetch_assoc()) {
          $name = $row["name"];
          $review = $row["review"];
          $created_at = $row["created_at"];

          if ($card_count % 3 == 0) {
            // Open a new carousel item for every 3 reviews
            if ($card_count == 0) {
              echo '<div class="carousel-item active">';
            } else {
              echo '<div class="carousel-item">';
            }
            echo '<div class="card-deck" style="margin: 30px; display: flex; justify-content: center;">';
          }

          // Display the review card
          echo '<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">';
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>$name</h5>";
          echo "<p class='card-text'>$review</p>";
          echo '</div>';
          echo "<div class='card-footer'>";
          echo "<small class='text-muted'>Date: $created_at</small>";
          echo '</div>';
          echo '</div>';

          if ($card_count % 3 == 2) {
            // Close the card deck for every 3 reviews
            echo '</div>';
            echo '</div>';
          }

          $card_count++;
        }

        // If there are reviews left that haven't filled a carousel item
        if ($card_count % 3 != 0) {
          echo '</div>';
          echo '</div>';
        }

        $conn->close();
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>


    <!--review cards-->


    <button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Review</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Leave Review</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="companyPage.php" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="recipient-name" name="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Review:</label>
                <textarea class="form-control" id="message-text" name="message-text"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit-rev" class="btn btn-primary">Send message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>



  </section>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../js/companyPage.js"></script>
</body>

</html>

<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_table = "heavenly_tomb";

$conn = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit-rev"])) {
    // Form has been submitted, retrieve form data
    $name = $_POST["recipient-name"];
    $review = $_POST["message-text"];

    // Insert the data into the database
    $sql = "INSERT INTO reviews (name, review) VALUES ('$name', '$review')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to avoid form resubmission on refresh
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- Your form modal with Bootstrap cards and inputs should be here -->

<?php
$conn = new mysqli($db_host, $db_username, $db_password, $db_table);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, review, created_at FROM reviews ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output each review
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $review = $row["review"];
        $created_at = $row["created_at"];

        // Display the review
        echo "<div>";
        echo "<p>Name: $name</p>";
        echo "<p>Review: $review</p>";
        echo "<p>Date: $created_at</p>";
        echo "</div>";
    }
} else {
    echo "No reviews";
}

$conn->close();
?>
