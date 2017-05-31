<div class="col_1">
    <div class="graphs">
        <div class="xs">
            <h3>Upload Barang Baru</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/crud/do_insert" ?>" enctype="multipart/form-data"><!--data masuk ke controller uploadbarang-->
                        <div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Jenis Barang</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="DSLR"> DSLR</label>
                                        </div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="Action Camera"> Action Camera</label>
                                        </div>
                                        <div class="checkbox-inline1"><label><input type="checkbox" name="jenis_barang[]" value="Other"> Other</label>
                                        </div>
									</div>
								</div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label" >Nama Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="nama_barang" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Deskripsi Barang</label>
                            <div class="col-sm-8">
                                <textarea name="deskripsi_barang" cols="50" rows="4" class="form-control1"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Jumlah Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="jumlah_barang" placeholder="Jumlah Barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Harga Sewa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="harga_sewa" placeholder="Harga Sewa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Barang</label>
                            <input type= "file" name="gambar"/>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <input type="submit" name="btnSubmit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>