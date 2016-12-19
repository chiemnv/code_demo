<form action="" method="post">
  Title:<br>
  <input type="text" name="title" value="<?php echo isset($categories['title'])?$categories['title']:''; ?>">
  <br>
  Url:<br>
  <input type="text" name="url" value="<?php echo isset($categories['url'])?$categories['url']:''; ?>">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> 
