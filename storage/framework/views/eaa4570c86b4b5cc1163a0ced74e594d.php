

<?php $__env->startSection('title', 'Buku'); ?>

<?php $__env->startSection('style_page'); ?>
<style>
    .table td, .table th {
        vertical-align: middle;
    }
    .badge-kategori {
        font-size: 0.85em;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Data Buku</h4>
                    <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-primary btn-sm">
                        + Tambah Buku
                    </a>
                </div>

                
                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>

                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><code><?php echo e($b->kode); ?></code></td>
                            <td><?php echo e($b->judul); ?></td>
                            <td><?php echo e($b->pengarang); ?></td>
                            <td>
                                <span class="badge bg-primary badge-kategori">
                                    <?php echo e($b->kategori->nama_kategori ?? '-'); ?>

                                </span>
                            </td>
                            <td>
                                <a href="<?php echo e(route('buku.edit', $b->idbuku)); ?>"
                                   class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('buku.destroy', $b->idbuku)); ?>"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus?')">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data buku.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_page'); ?>
<script>
    // JS khusus halaman buku index
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\src\koleksi-buku\resources\views/buku/index.blade.php ENDPATH**/ ?>