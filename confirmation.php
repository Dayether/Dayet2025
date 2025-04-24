<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-success text-white">
        <h3>Registration Confirmation</h3>
      </div> 
      <div class="card-body">
        <p><strong>First Name:</strong> <?= htmlspecialchars($_GET['firstname']) ?></p>
        <p><strong>Last Name:</strong> <?= htmlspecialchars($_GET['lastname']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($_GET['email']) ?></p>
        <p><strong>Mobile Number:</strong> <?= htmlspecialchars($_GET['mobile']) ?></p>
        <p><strong>Preferred Session:</strong> <?= htmlspecialchars($_GET['session']) ?></p>
        <p><strong>Dietary Preference:</strong> <?= htmlspecialchars($_GET['diet']) ?></p>
        <hr>
        <p class="text-muted"><small>Reference Code: <?= htmlspecialchars($_GET['ref_code']) ?></small></p>
        <a href="register.php" class="btn btn-outline-secondary">Go Back</a>
      </div>
    </div>
  </div>
</body>
</html>