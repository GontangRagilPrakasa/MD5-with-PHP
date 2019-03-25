<?php include("library/import.php") ?>
<br><br><br>
<div class="col-md-9 col-lg-offset-2">
<h1>Sistem Generate MD5</h1>
</div>
<br><br><br><br><br><br><br>
<div class="container">
<div class="col-md-5 col-lg-offset-4">
<form class="form-horizontal" action="prosesmd5.php" method="POST">
      <fieldset>
        <div class="form-group">
          
          <div class="col-lg-10">
            <input type="text" class="form-control" placeholder="Username" name="text" required >
          </div>
        </div>
        <div class="form-group">     
       <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <input type="reset"  class="btn btn-danger" value="Batal">
            <input type="submit" name="login" class="btn btn-primary" value="Kirim">
          </div>
        </div>
      </fieldset>
</form> 
</div>
</div>
<div class="main">
  <div class="container">

  <div class="row">
 
    <table class="table table-striped table-hover ">
 
  <thead>
    <tr>
      <th>Kata Asli</th>
      <th>Generate Hash</th>
      
    </tr>
  </thead>
  <?php 
  include 'koneksi.php';
  $query=mysqli_query($konek,"SELECT *FROM password") or die (mysqli_error());
  if(mysqli_num_rows($query)==0){
    echo '<tbody>
    <tr class="active">
      <td colspan="5">Tidak ada data yang di entrikan </td>
    </tr>
  </tbody>';
    
  }
  else{
 
    while($data=mysqli_fetch_assoc($query)){
    echo '<tbody>
    <tr class="active">';
    echo '<td>'.$data['kata'].'</td>';
    echo '<td>'.$data['hash'].'</td>';
    echo '</tr>';

    }

  }
  
  ?>
  </table> 
</div>

</div>
</div>
