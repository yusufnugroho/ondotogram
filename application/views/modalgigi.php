

<!-- 18 -->
<?php
for($i=11;$i<=85;$i++)
  {?>
<div id="Modal<?php echo $i;?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Gigi Nomor <?php echo $i;?></h4>
      </div>
      <form>
      <div class="modal-body">
        <div class="col-lg-12">
          <div class="col-md-8">
            Permukaan Gigi
          </div>
          <div class="col-md-2">
            <select name="PG" id="PG<?php echo $i;?>">

              <option></option>
              <?php foreach ($permukaan_gigi->result() as $row) {?>
              <option value="<?php echo $row->singkatan_permukaan;?>"><?php echo $row->singkatan_permukaan;?></option>
              <?php ;}?>
            </select>
          </div>
          <br>
          <div class="col-md-8">
            Keadaan Gigi
          </div>
          <div class="col-md-2">
            <select name="KG<?php echo $i;?>" id="KG<?php echo $i;?>">
              <option></option>
              <?php foreach ($keadaan_gigi->result() as $row) {?>
              <option value="<?php echo $row->singkatan_keadaan;?>"><?php echo $row->singkatan_keadaan;?></option>
              <?php ;}?>
            </select>
          </div>
          <br>
          <div class="col-md-8">
            Bahan Restorasi
          </div>
          <div class="col-md-2">
            <select name="BR<?php echo $i;?>" id="BR<?php echo $i;?>">
              <option></option>
              <?php foreach ($bahan_restorasi->result() as $row) {?>
              <option value="<?php echo $row->singkatan_bahan;?>"><?php echo $row->singkatan_bahan;?></option>
              <?php ;}?>
            </select>
          </div>
          <br>
          <div class="col-md-8">
            Restorasi
          </div>
          <div class="col-md-2">
            <select name="restorasi<?php echo $i;?>" id="restorasi<?php echo $i;?>">
              <option></option>
              <?php foreach ($restorasi->result() as $row) {?>
              <option value="<?php echo $row->singkatan_restorasi;?>"><?php echo $row->singkatan_restorasi;?></option>
              <?php ;}?>
            </select>
          </div>
          <br>
          <div class="col-md-8">
            Protesa
          </div>
          <div class="col-md-2">
            <select name="protesa<?php echo $i;?>" id="protesa<?php echo $i;?>">
              <option></option>
              <?php foreach ($protesa->result() as $row) {?>
              <option value="<?php echo $row->singkatan_protesa;?>"><?php echo $row->singkatan_protesa;?></option>
              <?php ;}?>
            </select>
          </div>
        </div>
        <br>
        <script>
        function myFunction<?php echo $i;?>() {
            var PG<?php echo $i;?> = document.getElementById("PG<?php echo $i;?>").value;
            var KG<?php echo $i;?> = document.getElementById("KG<?php echo $i;?>").value;
            var BR<?php echo $i;?> = document.getElementById("BR<?php echo $i;?>").value;
            var restorasi<?php echo $i;?> = document.getElementById("restorasi<?php echo $i;?>").value;
            var protesa<?php echo $i;?> = document.getElementById("protesa<?php echo $i;?>").value;
            var x<?php echo $i;?> = PG<?php echo $i;?> + " - " + KG<?php echo $i;?> + " - " + BR<?php echo $i;?> + " - " + restorasi<?php echo $i;?> + " - " + protesa<?php echo $i;?>;
            var hai = document.getElementById("demo<?php echo $i;?>").innerHTML =  x<?php echo $i;?>;
        }
        </script>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="myFunction<?php echo $i;?>()">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
;}
?>