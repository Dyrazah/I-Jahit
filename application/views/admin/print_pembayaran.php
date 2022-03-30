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
                <th>No</th>
                <th>Nama Pemilik Rekening</th>
                <th>Bukti Pembayaran</th>
                <th>Keterangan</th>
                <th>Status Pembayaran</th>
                <th>Status Pesanan</th>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($pembayaran as $row): ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $row->nama_pemilik_rek?></td>
                    <td><img src="<?= base_url() ?>assets/bukti_pembayaran/<?= $row->bukti_pembayaran?>" height="100" width="70"></td>
                    <td><?= $row->keterangan?></td>
                    <td><?= $row->status_pembayaran?></td>
                    <td><?= $row->status_pesanan?></td>          
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
