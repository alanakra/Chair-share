<?php
require'./include/logs.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

 <title>Suivi de l'activité</title>
</head>
<body>
 <h1 class="text-center">Suivi de l'activité</h1>

 <div class="container">
  <div class="row">

   <table class="table">
    <thead>
     <tr>
       <th scope="col">Date</th>
       <th scope="col">Masse</th>
       <th scope="col">Temps assis</th>
     </tr>
   </thead>
   <tbody>
    <tr>
      <?php while ($row = $stmt->fetch()): ?>
        <td><?php echo $row=$stmt['nom'] ?></td>
      <?php endwhile; ?>
   </tr>
   </tbody>
   </table>
   
  </div>
 </div>
</body>
</html>