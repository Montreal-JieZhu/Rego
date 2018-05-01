<html>
   <body>
      
      <?php
         echo Form::open(array('url' => 'foo/bar', 'method' => 'put'));
         echo Form::label('email', 'E-Mail Address');   
      ?>
   
   </body>
</html>