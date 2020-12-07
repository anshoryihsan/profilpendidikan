<?php include "header.php";?>
<style>
  #login{
    width: 360px;
    margin: 7% auto;
  }
  #panel-body{
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
  }
  #footer {
  		 background-color: #555;
  		 color: white;
  		 padding: 15px;
  	 }
</style>

    <div id="login">
      <div class="col-md12">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
            <form action="<?php echo base_url('index.php/C_login/masuk');?>" method="post">
              <?php $pesan = $this->session->flashdata('pesan');
          		  if(isset($pesan)){ echo $pesan; }?>
                <div class="form-group">
                  <label for="text">Emali address </label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="example@example.com" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
                </div>
                <div class="form-group">
                  <label for="password">Password </label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <input type="submit" value="Log in" class="btn btn-default btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
