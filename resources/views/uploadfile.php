<html>
    <body>
        <!--
        <form action="/uploadfile" method="POST">
            <input type="file" name="image" id="image" />
            <input type="submit"/>
        </form>
        -->
        <?php
         echo Form::open(array('url' => '/uploadfile','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
        ?>
    </body>
</html>
