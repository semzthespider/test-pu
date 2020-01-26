 <?php
                                $no = 1;
                                foreach ($test->result_array() as $d)
                                {
                                ?>
                                <?php 

                                 

                                   if($d['idh1']==1){
                                    $aa = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $aa = '';
                                  }
                                   if($d['idh2']==2){
                                    $ab = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ab = '';
                                  }
                                   if($d['idh3']==3){
                                    $ac = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ac = '';
                                  }
                                   if($d['idh4']==4){
                                    $ad = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ad = '';
                                  }
                                   if($d['idh5']==5){
                                    $ae = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $ae = '';
                                  }
                                   if($d['idh6']==6){
                                    $af = '<button type="button" class="label label-warning">Diterima</button>';
                                  }
                                  else{
                                    $af = '';
                                  }

                                   ?>
                                 <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $d['untuk_pembayaran']; ?></td>
                                  <td><?php echo $d['tggl']; ?></td>
                                  <td><?php echo $aa ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date1'],$d['n_date1']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date1'],$d['n_date1'])); ?> Hari]</td>
                                  <td><?php echo $ab ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date2'],$d['n_date2']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date2'],$d['n_date2'])); ?> Hari]</td>
                                   <td><?php echo $ac ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date3'],$d['n_date3']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date3'],$d['n_date3'])); ?> Hari]</td>
                                  <td><?php echo $ad ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date4'],$d['n_date4']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date4'],$d['n_date4'])); ?> Hari]</td>
                                   <td><?php echo $ae ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date5'],$d['n_date5']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date5'],$d['n_date5'])); ?> Hari]</td>
                                   <td><?php echo $af ?><span class="label label-<?php cetak( $this->M_visit->checkFlag($d['r_date6'],$d['n_date6']));?>"><i class="fa fa-flag"></i></span> [<?php cetak( $this->M_visit->numDay($d['r_date6'],$d['n_date6'])); ?> Hari]</td>
                                  </tr>

                                 <?php
                                }
                                ?>