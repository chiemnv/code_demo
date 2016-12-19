<table>
  <tbody><tr>
    <th>ID</th>
    <th>Title</th>
  </tr>
  <?php
    if(isset($categories) && count($categories)){
        foreach($categories as $k=>$vl){
    ?>
    <tr>
        <td><?php echo $vl['id'] ?></td>
        <td><?php echo $vl['title'] ?></td>
      </tr>
    <?php    
        }
    }
  ?>  
  
  
</tbody></table>