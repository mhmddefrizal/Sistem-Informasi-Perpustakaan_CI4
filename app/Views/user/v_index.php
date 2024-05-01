<div class="col-md-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#modal-sm">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
        </div>
        <div class="card-body">

        <?php 
          if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('pesan');
            echo '</h5></div>';
          }
        ?>

            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Nama User</th>
                        <th>E-Mail</th>
                        <th>No HP</th>
                        <th>Password</th>
                        <th>Foto</th>
                        <th>Level</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($user as $key => $value) { ?>
                            <tr>
                                <td><?= $no++?>.</td>
                                <td><?= $value['nama_user'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['no_hp'] ?></td>
                                <td><?= $value['password'] ?></td>
                                <td class="text-center"><img src="<?= base_url('foto/' . $value['foto']) ?>" width="125px" height="125px"></td>
                                <td class="text-center"><?= $value['level'] == '0' ? '<span class="badge badge-success">Admin</span>' : '<span class="badge badge-primary">Petugas</span>' ?></td>
                                <td>
                                  <a type="button" class="btn btn-warning btn-flat btn-sm">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#modal-delete<?= $value['id_user'] ?>">
                                    <i class="fas fa-trash"></i>
                                  </button>
                                </td>
                            </tr>
                        <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>