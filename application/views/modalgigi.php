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
      <div class="modal-body">
        <div class="col-lg-12">
          <div class="col-md-8">
            Permukaan Gigi
          </div>
          <div class="col-md-2">
            <select name="PG">
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
            <select name="KG">
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
            <select name="BR">
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
            <select name="restorasi">
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
            <select name="protesa">
              <?php foreach ($protesa->result() as $row) {?>
              <option value="<?php echo $row->singkatan_protesa;?>"><?php echo $row->singkatan_protesa;?></option>
              <?php ;}?>
            </select>
          </div>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php
;}
?>