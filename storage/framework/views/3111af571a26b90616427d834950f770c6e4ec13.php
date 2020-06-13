
Sample



<html>

   <head>
      <title>Form Example</title>
   </head>

   <body>
      <form action = "sample" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name" /></td>
            </tr>
            <tr>
               <td>Username</td>
               <td><input type = "text" name = "username" /></td>
            </tr>
            <tr>
               <td>Password</td>
               <td><input type = "password" name = "password" /></td>
            </tr>
            <tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
               <td>
                  <a class="btn btn-primary" href="/contact_us"> Show Data </a>
               </td>
            </tr>
         </table>
      
      </form>
   </body>
</html>  <?php /**PATH /home/rtdl-001/Sites/demo.dev/webdemo/resources/views/sample.blade.php ENDPATH**/ ?>