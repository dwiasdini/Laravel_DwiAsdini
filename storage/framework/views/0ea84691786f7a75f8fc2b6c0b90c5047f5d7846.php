<?php $__env->startSection('content'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Detail Mahasiswa</h4>
            </div>
            <div class="panel-body">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" value="<?php echo e($data->nim); ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo e($data->nama_lengkap); ?>" class="form-control" readonly>
                        </div>
                    </div>                    
                    <div class="form-group row">    
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label> 
                        <div class="col-sm-10">   
                            <input type="text" name="jurusan" id="jurusan" value="<?php echo e($data->jurusan); ?>" class="form-control" readonly>
                        </div>
                    </div>
                    <form action="<?php echo e(url('back')); ?>" method="get">
                        <div class="form-group">
                            <input type="submit" value="Kembali" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_dwiasdini\resources\views/read.blade.php ENDPATH**/ ?>