
<?php $__env->startSection('Title','Data'); ?>
<?php $__env->startSection('main'); ?>
	Name: <?php echo e($name); ?><br>
	Father's name: <?php echo e($father_name); ?><br>
	Address: <?php echo e($address); ?><br>
	Gender: <?php echo e($gender); ?><br>
	State: <?php echo e($state); ?><br>
	City: <?php echo e($city); ?><br>
	Birtdate: <?php echo e($birth_date); ?><br>
	Pincode: <?php echo e($pincode); ?><br>
	Course: <?php echo e($course); ?><br>
	Email: <?php echo e($email); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterdata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/outputform.blade.php ENDPATH**/ ?>