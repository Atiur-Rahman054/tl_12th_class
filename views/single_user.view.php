<?php
    include_once "inc/header.php";
?>

<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?=$data['id']?></td>
          <td><?=$data['name']?></td>
          <td><?=$data['email']?></td>
          <td><img src="profile/<?= $data['image'] ?>" alt="" width="60"></td>
        </tr>
      </tbody>
    </table>
            </div>
        </div>
    </div>
</section>

<?php
    include_once "inc/footer.php";
?>
