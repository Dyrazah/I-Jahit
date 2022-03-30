<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Admin | Jahit.In
  </title>
  <link href="<?= base_url() ?>assets/home-admin/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="table-responsive">
        <table class="table">
            <thead class=" text-primary">
                <th>ID Invoice</th>
                <th>Nama Lengkap</th>
                <th>Nomor Hp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Pengambilan</th>
                <th>Tanggal Pengambilan</th>
                <th>Pengiriman</th>
                <th>Tanggal Pengiriman</th>
                <th>Metode Pembayaran</th>
            </thead>
            <tbody>
            <?php
            // $no = 1;
            foreach ($invoice as $row): ?>
                <tr>
                    <th><?= $row->id_invoice?></th>
                    <td><?= $row->nama_pengorder?></td>
                    <td><?= $row->nomorhp_pengorder?></td>
                    <td><?= $row->email_pengorder?></td>
                    <td><?= $row->alamat_pengorder?></td>
                    <td><?= $row->keterangan?></td>
                    <td><?= $row->pengambilan?></td>
                    <td><?= $row->tgl_pengambilan?></td>
                    <td><?= $row->pengiriman?></td>
                    <td><?= $row->tgl_pengiriman?></td>
                    <td><?= $row->metode_pembayaran?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <script type="text/javascript">
            window.print();
        </script>
    </div>
</body>

</html>
