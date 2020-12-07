<div class="span3">
  <div class="blog_content pull-left" id="n_combobox">


      <?php if(isset($isi ) && is_array($isi )){
        $no = 0;
        foreach($isi as $key => $row)  { $no=$no+1;
          //echo '<option  value="'.$row->wil.'">'.$row->wil.','.$no.'</option>';
            //echo '<td>'.$no.'</td>';
            //echo '<td>'.$row->wil.'</td>';

            //print_r($tajar);
        }
      }
      ?>
     <table border="1">
       <thead>
         <tr>
           <th rowspan="2">no</th>
           <th rowspan="2">wilayah</th>
           <th>bentuk pendidikan</th>
           <th colspan="2">status sekolah</th>
         </tr>
         <tr>
           <?php foreach ($kbb as $row): ?>
          <th><?php echo $row->bnt; ?></td>
          <th>Swasta</td> <th>Negeri</td>
         </tr>

         <tr>
           <th colspan="2">&nbsp; bandung barat</th>
           <th><?php echo $row->totpenkbb; ?></th>
           <th><?php echo $row->totswasta; ?></th>
           <th><?php echo $row->totnegeri; ?></th>
         </tr>
         <?php endforeach; ?>

       </thead>
       <tbody>
         <?php
         $no = 0;
           foreach ($isi as $row):
             $no=$no+1;
         ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $row->wil; ?></td>
           <td><?php echo $row->pen; ?></td>
           <th><?php echo $row->swasta; ?></th>
           <th><?php echo $row->negeri; ?></th>
     <?php endforeach; ?>
       </tr>
       </tbody>
     </table>
  </div>
</div>
