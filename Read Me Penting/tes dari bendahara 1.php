<?php
                        $list_ = $this->M_bendahara->list_unit();
                        $no = 1;
                        foreach($list_->result() as $row){
                          if($row->id_status==6){
                              $ac = 'Baru';
                            }
                            else{
                              $ac = 'Draft'; 
                            }
                                 if($row->jenisanggaran==55)
                            {
                              $ta = 'UP';
                            }
                            else if($row->jenisanggaran=56)
                            {
                              $ta ='LS';
                            }
                            else 
                              {
                                $ta ='Jenis Belum Dimasukan';
                              }

                          $links = '<a href="'.base_url('C_bendahara/view/'.$row->kd_pembebanan).'"class="btn btn-info ">'.$row->untuk_pembayaran.'<i ></i></a>';
                          echo '
                                <tr>
                                  <td>'.$no++.'</td>
                                  <td>'.$links.'</td>
                                  <td>'.$row->tggl.'</td>
                                  <td>'.$ta.'</td>
                                  <td>'.$ac.'</td>
                                  <td>';
                          
                            echo '<a href="'.base_url('C_bendahara/print_surat/'.$row->kd_pembebanan).'"  class="btn btn-primary ">Print<i ></i></a> ';
                          if($permit['d']==1)
                          echo '</td>
                                </tr>';
                        }
  ?>