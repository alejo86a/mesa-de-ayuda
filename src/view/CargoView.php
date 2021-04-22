<!-- TABLEEEEEEEEEEEEEEEEEEEEE -->
<div class="col-md-12">
  <div class="card ">
    <div class="card-header">
      <h4 class="card-title"> Cargos</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th>
                IDCARGO
              </th>
              <th>
                Nombre
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $cargoDao = new CargoDao();

              $all_cargos = $cargoDao->GetAllCargos();
              if ($all_cargos->num_rows > 0) {
                while($row = $all_cargos->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>".$row["IDCARGO"]."</td>";
                  echo "<td>".$row["NOMBRE"]."</td>";
                  
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