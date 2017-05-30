<div class="col_1">
    <div class="graphs">
        <div class="xs">
            <h3>Edit Data Barang</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <?php foreach ($barang as $b){ ?>
                    <form class="form-horizontal" method="POST" action="<?php echo base_url(). 'crud/do_update'; ?>"><!--data masuk ke controller uploadbarang-->
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $b->id_barang; ?>" name="idb">
									<label for="checkbox" class="col-sm-2 control-label" value="<?php echo $b->jenis_barang; ?>">Jenis Barang</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="DSLR"> DSLR</label>
                                        </div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="Action Camera"> Action Camera</label>
                                        </div>
                                        <div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="Other  "> Other</label>
                                        </div>
									</div>
								</div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label" >Nama Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="nama_barang" value="<?php echo $b->nama_barang; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Deskripsi Barang</label>
                            <div class="col-sm-8">
                                <textarea name="deskripsi_barang" cols="50" rows="4" class="form-control1" value="<?php echo $b->deskripsi_barang; ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Jumlah Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="jumlah_barang" value="<?php echo $b->jumlah_barang; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Harga Sewa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="harga_sewa" value="<?php echo $b->harga_sewa; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Barang</label>
                            <input type="file" name="upload_barang">
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!--<button class="btn-success btn">Submit</button>
                                    <button class="btn-default btn">Cancel</button>
                                    <button class="btn-inverse btn">Reset</button>-->
                                    <input type="submit" name="btnSubmit" value="Submit">
                                    <!--<input type="submit" name="btnCancel" value="Cancel">-->
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>