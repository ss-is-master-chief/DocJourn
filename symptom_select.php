<?php
  $symp_select=mysqli_query($conn,"SELECT sympID,symp_name FROM compiled_symptoms");
  while($data=mysqli_fetch_row($symp_select))
    {
      echo "<option value='$data[0]'> $data[1] </option>";
    }
?>
