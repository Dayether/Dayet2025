<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tech Talk 2025 Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container my-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h3>Tech Talk 2025 Registration</h3>
      </div>
      <div class="card-body">
        <form method="GET" action="confirmation.php">

          <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" name="mobile" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Preferred Session</label>
            <select name="session" class="form-select" required>
              <option value="Web Dev">Web Dev</option>
              <option value="AI">AI</option>
              <option value="Cybersecurity">Cybersecurity</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Dietary Preference</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="diet" value="None" required>
              <label class="form-check-label">None</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="diet" value="Vegetarian">
              <label class="form-check-label">Vegetarian</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="diet" value="Halal">
              <label class="form-check-label">Halal</label>
            </div>

          </div>
          <input type="hidden" name="ref_code" value="NU2025">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </div>
  </div>
</body>
</html>