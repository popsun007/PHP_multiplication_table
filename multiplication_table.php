<table border="1">

<?php for($i=1; $i<=10; $i++)
      { ?>
      <tr>
        <?php 
        for($j=1; $j<=10; $j++){
          if($j%2!=0){
            echo "<style type=\"text/css\"> background-color: grey </style>";
          }
        ?>
         <td><?php

          if($i==1 && $j==1){ 
          }
          else if ($i==1){
            echo "<b>" . $i * ($j-1) . "</b>";
          }
          elseif ($j==1) {
            echo "<b>" . ($i-1) * $j . "</b>";
          }
          else{
            echo ($i-1)*($j-1);
          }
          ?></td>
         <?php 
        }
         ?>
      </tr>
<?php } ?>
</table>