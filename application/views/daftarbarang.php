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
                <?php foreach ($tampil as $d) { ?>
                    <tr>
                    <td><?php echo $d->id_barang ?></td>
                    <td><?php echo $d->jenis_barang ?></td>
                    <td><?php echo $d->nama_barang ?></td>
                    <td><?php echo $d->deskripsi_barang ?></td>
                    <td><?php echo $d->jumlah_barang ?></td>
                    <td><?php echo $d->harga_sewa ?></td>
                    <td align="center">
                        <?php echo anchor ('crud/do_edit/' .$d->nama_barang, 'Edit'); ?> ||
                        <?php echo anchor ('crud/do_delete/' .$d->nama_barang, 'Delete'); ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>