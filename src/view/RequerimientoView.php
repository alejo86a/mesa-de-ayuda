<!-- TABLEEEEEEEEEEEEEEEEEEEEE -->
<div class="col-md-12">
  <div class="card ">
    <div class="card-header">
      <h4 class="card-title"> Requerimientos</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table tablesorter " id="">
          <thead class=" text-primary">
            <tr>
              <th>
                IDREQ
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $requerimientoDao = new RequerimientoDao();

              $all_requerimientos = $requerimientoDao->GetAllRequerimientos();
              if ($all_requerimientos->num_rows > 0) {
                while($row = $all_requerimientos->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>".$row["IDREQ"]."</td>";
                  
                  echo "</tr>";
                }
             }else{
                echo "<tr>";
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