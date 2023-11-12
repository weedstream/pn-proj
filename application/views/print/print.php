<script type="text/javascript">
    window.print();
</script>
<link href="<?php echo base_url('assets/user') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Theme CSS -->
<link href="<?php echo base_url('assets/user') ?>/css/freelancer.min.css" rel="stylesheet">
<link href="<?php echo base_url('assets/user') ?>/lib/noty.css" rel="stylesheet">
<link href="<?php echo base_url('assets/user') ?>/lib/themes/metroui.css" rel="stylesheet">

<div class="card" style="width: 55mm; height: 55mm;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">
            <h6>SELAMAT DATANG</h6>
            <h9>Di Pengadilan Negeri Purbalingga</h9><br>
            <small>Jl. Ahmadi No.80, Bancar, Kec. Purbalingga, Kabupaten Purbalingga</small>
        </li>
        <li class="list-group-item text-center">
            <?php foreach ($antrianloket as $a => $data) { ?>
                <div class="row card-link" style="margin-left: 10px;"><?= $data->tgl_antrian_loket; echo date("h:i:sa"); ?></div>
                <h6>ANTRIAN </h6>
                <h1><?php echo $data->no_antrian_loket ?></h1><h6><?php echo $data->name_loket ?></h6>
        </li>
            <?php } ?>
        <!-- <?php foreach ($loket as $key => $data) { ?>
            
        <?php } ?> -->
        <li class="list-group-item text-center">
            <small>Silahkan Menunggu Nomer Anda Dipanggil</small>
        </li>
    </ul>
</div>
