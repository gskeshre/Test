<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="pull-right">
                <a href="/index"> Back</a>
            </div>

            <form action="/update/<?php echo e($st['id']); ?>" method="POST">
              <?php echo csrf_field(); ?>
              
            <input type="hidden" name="id" value="<?php echo e($st['id']); ?>"  placeholder="Rollno">
   
   			<div>
                    <strong>Roll No:</strong>
                    <input type="text" name="rollno" value="<?php echo e($st['rollno']); ?>"  placeholder="Rollno" required>
                </div>
            </div>
            <div>
                    <strong>User Name:</strong>
                    <input type="text" name="name" value="<?php echo e($st['name']); ?>"  placeholder="Name" required>
            </div>
            
            
            <div> 
              <button type="submit">Submit</button>
            </div>
        </div>
   
    </form>
</body>
</html><?php /**PATH /home/rtdl-001/Sites/demo.dev/webdemo/resources/views/crud2/edit.blade.php ENDPATH**/ ?>