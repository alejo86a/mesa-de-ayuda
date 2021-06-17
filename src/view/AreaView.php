<!-- TABLEEEEEEEEEEEEEEEEEEEEE -->
<div class="col-md-12">
  <div class="card ">
    <div class="card-header">
      <h4 class="card-title"> Areas</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th>
                IDAREA
              </th>
              <th>
                NOMBRE
              </th>
              <th>
                Acciones
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $areaDao = new AreaDao();

              $all_areas = $areaDao->GetAllAreas();
            
              if(isset($_POST['eliminar'])) {
                  if( $areaDao->deleteArea($_POST['id'])){
                    $all_areas = $areaDao->GetAllAreas();
                  }
              }
              if ($all_areas->num_rows > 0) {
                while($row = $all_areas->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>".$row["IDAREA"]."</td><td>".$row["NOMBRE"]."</td>";
                  
                  echo "<form method='post'>";
                  echo "<input id='id' name='id' type='hidden' value=".$row["IDAREA"].">";
                  echo "<td><button type='submit' class='btn btn-link' name='eliminar' value='Eliminar'/>";
                  echo "<span class='tim-icons icon-trash-simple'></span>";
                  echo "</button>";
                  echo "</form></td>";      
                  
                  echo "</tr>";
                }
              }else{
                  echo "<tr>";
                  echo "<td></td>";
                  echo "<td></td>";

                  echo "</tr>";
                }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- / TABLEEEEEEEEEEEEEEEEEEEEE -->