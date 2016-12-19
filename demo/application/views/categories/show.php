<table>
  <tbody><tr>
    <th>ID</th>
    <th>Title</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <?php
    if(isset($categories) && count($categories)){
        foreach($categories as $k=>$vl){
    ?>
    <tr>
        <td><?php echo ($k+1).' - '.$vl['id'] ?></td>
        <td><?php echo $vl['title'] ?></td>
        <td><a href="http://localhost/CI/demo/index.php/categories/edit/<?php echo $vl['id'] ?>">Sửa</a></td>
        <td><a onclick="return confirm('Are you sure you want to delete this item - <?php echo $vl['id'] ?> ?');" href="http://localhost/CI/demo/index.php/categories/delete/<?php echo $vl['id'] ?>">Xóa</a></td>
      </tr>
    <?php    
        }
    }
  ?>  
  <a href="http://localhost/CI/demo/index.php/categories/add/">Add</a>
  
</tbody></table>