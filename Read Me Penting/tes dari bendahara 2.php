 <?php
                        $list_ = $this->M_bendahara->list_unit1();
                        $no = 1;
                        foreach($list_->result() as $row){
                          if($row->id_status==7){
                               $ac = 'Terkirim';
                            }
                           else if($row->id_status==100){
                              $ac = 'Selesai';
                            }
                            else{
                              $ac = 'terkirim'; 
                            }


                             if($row->id_kelengkapan==1){
                              $ad = 'Belum Di Cek';
                            }else{
                              $ad = 'Tidak Lengkap'; 
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

                          $links = '<a href="'.base_url('C_bendahara/views/'.$row->kd_pembebanan).'"class="btn btn-info ">'.$row->untuk_pembayaran.'<i ></i></a>';
                          echo '
                                <tr>
                                  <td>'.$no++.'</td>
                                  <td>'.$row->untuk_pembayaran.'</td>
                                  <td>'.$row->tggl.'</td>
                                  <td>'.$ta.'</td>
                                  <td>'.$ac.'</td>
                                  <td>';
                          
                            echo '<a href="'.base_url('bendahara/print_surat/'.$row->kd_pembebanan).'"  class="btn btn-primary ">Print<i ></i></a> ';
                          if($permit['d']==1)
                          echo '</td>
                                </tr>';
                        }
                         ?>