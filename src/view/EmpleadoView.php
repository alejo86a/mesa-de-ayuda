<!-- TABLEEEEEEEEEEEEEEEEEEEEE -->
<div class="col-md-12">
  <div class="card ">
    <div class="card-header">
      <h4 class="card-title"> Empleados</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th>
                IDEMPLEADO
              </th>
              <th>
                NOMBRE
              </th>
              <th>
                FOTO
              </th>
              <th>
                HOJAVIDA
              </th>
              <th class="text-center">
                TELEFONO
              </th>
              <th class="text-center">
                EMAIL
              </th>
              <th class="text-center">
                DIRECCION
              </th>
              <th class="text-center">
                X
              </th>
              <th class="text-center">
                Y
              </th>
              <th class="text-center">
                CARGO
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $empleadoDao = new EmpleadoDao();

              $all_empleados = $empleadoDao->GetAllEmpleados();
              if ($all_empleados->num_rows > 0) {
                while($row = $all_empleados->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>".$row["IDEMPLEADO"]."</td>";
                  echo "<td>".$row["NOMBRE"]."</td>";
                  echo "<td>".$row["FOTO"]."</td>";
                  echo "<td>".$row["HOJAVIDA"]."</td>";
                  echo "<td>".$row["TELEFONO"]."</td>";
                  echo "<td>".$row["EMAIL"]."</td>";
                  echo "<td>".$row["DIRECCION"]."</td>";
                  echo "<td>".$row["X"]."</td>";
                  echo "<td>".$row["Y"]."</td>";
                  echo "<td>".$row["CARGO"]."</td>";
                  
                  echo "</tr>";
                }
               }else{
                  echo "<tr>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td></td>";
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