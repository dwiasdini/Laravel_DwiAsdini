<?php $__env->startSection('content'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(url('create')); ?>" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIM</th>
                            <th>Nama Lengkap</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->nim); ?></td>
                            <td><?php echo e($d->nama_lengkap); ?></td>
                            <td><?php echo e($d->jurusan); ?></td>
                            <td>
                                <a href="<?php echo e(url('read',array($d->id))); ?>" class="btn btn-info btn-sm">Lihat</a>
                                <a href="<?php echo e(url('delete',array($d->id))); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="<?php echo e(url('edit',array($d->id))); ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_dwiasdini\resources\views/index.blade.php ENDPATH**/ ?>