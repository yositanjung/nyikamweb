<div class="panel panel-primary" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-heading">
        <h2>Data Konsumen</h2>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
            <span class="button-icon has-bg"><i class="ti ti-angle-down"></i>
            </span>
        </div>
    </div>
    <div class="panel-body no-padding" style="display: block;">
        <table class="table table-striped">
            <thead>
                <tr class="warning">
                    <th>Id Konsumen</th>
                    <th>Nama Konsumen</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Data Barang Pinjam</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($konsumen as $k) { ?>
                <tr>
                    <td><?php echo $k->id_konsumen ?></td>
                    <td><?php echo $k->nama_konsumen ?></td>
                    <td><?php echo $k->telp_konsumen ?></td>
                    <td><?php echo $k->alamat_konsumen ?></td>
                    <td><?php echo $k->email_konsumen ?></td>
                    <td><?php echo $k->barang_konsumen ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>