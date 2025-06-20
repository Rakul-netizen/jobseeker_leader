<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JobAskIt Leaderboard</title>
  <link rel="icon" href="./asset/icon/favicon.png" type="image/png">
  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="./asset/css/navbar.css">
  <link rel="stylesheet" href="./asset/css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" integrity="" crossorigin="anonymous">

</head>
<body>
  <?php include './include/navbar.php'; ?>
  <main class="container py-5">
    <h1 class="main__title">Top Institutes</h1>
    <section id="institutesTable" class="ranking__card py-4" aria-label="Top Institutes">
      <div class="table-responsive">
        <table class="table table-hover ranking__table">
          <thead>
            <tr>
              <th scope="col">Rank</th>
              <th scope="col">Training Institute</th>
              <th scope="col">Score</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>🥇</td><td>ABC Academy</td><td>587</td><td><button class="btn btn-success">View</button></td></tr>
            <tr><td>🥈</td><td>XYZ Institute</td><td>582</td><td><button class="btn btn-success">View</button></td></tr>
            <tr><td>🥉</td><td>SkillHub</td><td>578</td><td><button class="btn btn-success">View</button></td></tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>
  <?php include './include/footer.php'; ?>
  

  <script src="./asset/js/script.js"></script>
  <script src="./asset/js/navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
