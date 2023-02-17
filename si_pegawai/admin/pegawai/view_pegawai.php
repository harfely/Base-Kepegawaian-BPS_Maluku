<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pegawai WHERE nip='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Detail Pegawai</h3>

                <div class="card-tools">
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 100px">
                                <b>NIP</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['NIP']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Nama</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['NAMA']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Alamat</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['ALAMAT']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>No HP</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['NO_HP']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Status</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['STATUS']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Jabatan</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['JABATAN']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Dosir</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['DOSIR']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 100px">
                                <b>Rak</b>
                            </td>
                            <td>:
                                <?php echo $data_cek['RAK']; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="?page=data-pegawai" class="btn btn-warning">Kembali</a>

                    <a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['NIP']; ?>" target=" _blank"
                        title="Cetak Data Pegawai" class="btn btn-primary">Print</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-success">
            <div class="card-header">
                <center>
                    <h3 class="card-title">
                        Foto Pegawai
                    </h3>
                </center>

                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img src="foto/<?php echo $data_cek['FOTO']; ?>" width="150px" />
                </div>

                <h3 class="profile-username text-center">
                    <?php echo $data_cek['NIP']; ?>
                    -
                    <?php echo $data_cek['NAMA']; ?>
                </h3>
            </div>
        </div>
    </div>

</div>