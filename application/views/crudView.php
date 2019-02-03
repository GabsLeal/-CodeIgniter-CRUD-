<?php $this->load->view('includes/header');?>    <div class="container">
        <br>
        <br>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Adicionar
</button>
<br>
 <br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo site_url('CrudController/create')?>">
        <div class="form-group">
    <label for="txtUltimoNome">Ultimo Nome</label>
    <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" placeholder="Digite o ultimo nome">
  </div>
  <div class="form-group">
    <label for="txtPrimeiroNome">Primeiro Nome</label>
    <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" placeholder="Digite o primeiro nome">
  </div>
  <div class="form-group">
    <label for="dtNascimento">Nascimento</label>
    <input type="date" class="form-control" name="birthDate" aria-describedby="emailHelp" placeholder="Digite Nascimento">
  </div>
  <div class="form-group">
    <label for="txtNumero">Número</label>
    <input type="text" class="form-control" name="contactNo" aria-describedby="emailHelp" placeholder="Digite o numero">
  </div>
  <div class="form-group">
    <label for="txtBio">Bio</label>
    <input type="text" class="form-control" name="bio" aria-describedby="emailHelp" placeholder="Digite a bio">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
      </div>

    </div>
  </div>
</div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Contact No</th>
      <th scope="col">Bio</th>
      <th scope="col">Actions</th>



    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row) {?>
        <tr>
      <th scope="row"><?php echo $row->ID;?></th>
      <td><?php echo $row->lastName;?></td>
      <td><?php echo $row->firstName;?></td>
      <td><?php echo $row->birthDate;?></td>
      <td><?php echo $row->contactNo;?></td>
      <td><?php echo $row->bio?></td>
      <td><a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->ID?>">Editar</a>
          <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->ID?>">Excluir</a>
     </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>

   </body>
</html>