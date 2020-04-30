<?php $__env->startSection('content'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Mahasiswa</h4>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(url('update', $data->id)); ?>" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" value="<?php echo e($data->nim); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo e($data->nama_lengkap); ?>" class="form-control">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select class="custom-select form-control" name="jurusan">
                                <option value="Teknik Informatika" selected>Teknik Informatika</option>
                                <option value="Sistem Informasi" selected>Sistem Informasi</option>
                                <option value="PGSD" selected>PGSD</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success"><?php echo csrf_field(); ?>                       
                    </div>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_dwiasdini\resources\views/edit.blade.php ENDPATH**/ ?>