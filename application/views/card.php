<center>
    <p>
        <h1>Silahkan Pilih Sesuai Kebutuhan Anda</h1>
    </p>
</center>
<hr>

<section class="content">
    <?php 
        $antri = 0;
    ?>

    <!-- Info boxes -->
    <?php foreach ($antrianloket as $a => $data): ?>
        <input type="hidden" name="nomer_loket" id="nomer" value="<?php echo $data->no_antrian_loket; ?>">
        <?php
        if ($data->loket_id == $antrianloket[0]->loket_id) {
            $antri = $antrianloket[0]->no_antrian_loket;
        } else {
            $antri = $data->no_antrian_loket;
        }
        ?>
    <?php endforeach; ?>

    <div class="row">
        <?php foreach ($loket as $l => $data): ?>
            <div class="col-lg-4 col-xs-7">
                <div class="small-box bg-green">
                    <div class="inner">
                        <input type="hidden" name="no_antrian_loket" value="<?= $data->loket_id ?>" disabled="" class="form-control">
                        <b>
                            <h3><?= $data->name_loket ?></h3>

                            <p><?= $data->keterangan ?></p>
                        </b>
                    </div>
                    <div class="icon">
                    	<a href="<?php echo site_url('ambil/saveAntrian/' . $data->loket_id . '/' .$antri); ?>" target="_blank"><i class="fa fa-print fa-inverse"></i></a>
                    </div>
                    <a href="<?= site_url('ambil/saveAntrian/' . $data->loket_id . '/' .$antri); ?>" target="_blank" class="small-box-footer">
                        Ambil Antrian <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<script type="text/javascript">
    function nomer(){
        var antri = parseInt(document.getElementById('nomer').value)+1;
        document.getElementById("nomer").value = antri;
        location.reload(); // Memuat ulang halaman
    }
</script>
