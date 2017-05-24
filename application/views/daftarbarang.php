<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-heading">
        <h2>Daftar Barang Nyileh Kamera</h2>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
            <span class="button-icon has-bg"><i class="ti ti-angle-down"></i>
            </span>
        </div>
    </div>
    <div class="panel-body no-padding" style="display: block;">
        <table class="table table-striped">
            <thead>
                <tr class="warning">
                    <th>ID Barang</th>
                    <th>Jenis Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Harga Sewa</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tampil as $tampil2) { ?>
                    <tr>
                    <td><?php echo $tampil2->id_barang;?></td>
                    <td><?php echo $tampil2->jenis_barang;?></td>
                    <td><?php echo $tampil2->nama_barang;?></td>
                    <td><?php echo $tampil2->deskripsi_barang;?></td>
                    <td><?php echo $tampil2->jumlah_barang;?></td>
                    <td><?php echo $tampil2->harga_sewa;?></td>
                    <td align="center">
                        <a href = "#">Edit</a> ||
                        <a href = "#">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>