<?php
require_once('header.php');
include_once('phpClasses/process.class.php');
include_once('phpClasses/file.class.php');
//
$file = new File('info.csv');// passing raw file path
$start = $file->read();//accessing  the read function


?>
<!--created table Column-->
<div class="container">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">School</th>
      <th scope="col">GraduateDate</th>
      <th scope="col">Major</th>
      <th scope="col">Degree</th>
    </tr>
  </thead>
  <tbody>

                            <!--all the data will be read from CSV file-->
<?php foreach($start as $writing)
{ ?>

<?php  $create = new Create($writing) ?>

    <tr>
      <th scope="row"><?php echo $create->Name; ?></th>
      <td><?php echo $create->School;?></td>
      <td><?php echo $create->GraduateDate;?></td>
      <td><?php echo $create->Major;?></td>
      <td><?php echo $create->Degree;?></td>
    </tr>


<?php
} ?>
  </tbody>
 </table>
</div>


