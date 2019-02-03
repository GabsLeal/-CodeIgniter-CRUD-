<?php $this->load->view('includes/header');?>
<br>
 <br>
    <div class="container">
    <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->ID;?>">
        <div class="form-group">
    <label for="txtUltimoNome">Ultimo Nome</label>
    <input type="text" class="form-control" name="lastName" aria-describedby="emailHelp" value="<?php echo $row->lastName;?>" placeholder="Digite o ultimo nome">
  </div>
  <div class="form-group">
    <label for="txtPrimeiroNome">Primeiro Nome</label>
    <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp" value="<?php echo $row->firstName;?>" placeholder="Digite o primeiro nome">
  </div>
  <div class="form-group">
    <label for="dtNascimento">Nascimento</label>
    <input type="date" class="form-control" name="birthDate" aria-describedby="emailHelp" value="<?php echo $row->birthDate;?>" placeholder="Digite Nascimento">
  </div>
  <div class="form-group">
    <label for="txtNumero">Número</label>
    <input type="text" class="form-control" name="contactNo" aria-describedby="emailHelp" value="<?php echo $row->contactNo;?>" placeholder="Digite o numero">
  </div>
  <div class="form-group">
    <label for="txtBio">Bio</label>
    <input type="text" class="form-control" name="bio" aria-describedby="emailHelp" value="<?php echo $row->bio;?>" placeholder="Digite a bio">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
    </div>


   </body>
</html>