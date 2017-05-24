<div class="col_1">
    <div class="graphs">
        <div class="xs">
            <h3>Upload Barang Baru</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/uploadbarang/do_insert" ?>">
                        <!--<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Jenis Barang</label>
									<div class="col-sm-8">
										<div class="checkbox-inline1"><label><input type="checkbox" name="dslr"> DSLR</label>
                                        </div>
										<div class="checkbox-inline1"><label><input type="checkbox" name="actioncam"> Action Camera</label>
                                        </div>
                                        <div class="checkbox-inline1"><label><input type="checkbox" name="other"> Other</label>
                                        </div>
									</div>
								</div>-->
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
                </div>
            </div>
        </div>
    </div>
</div>