                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                            	
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>SNo</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Address</th>
                                                <th>Course</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $birthday=$this->db->get('student_info');
                                                         $d=date('Y-m-d');
                             
                     $cm=  date("m",strtotime($d));
                     $cd=  date("d",strtotime($d));

              if( $birthday->num_rows() > 0)
                {
                $gal1 = $birthday->result();
                $h=0;
                 foreach($gal1 as $gal):
                 	$this->db->where('id',$gal->courseApplied);
                 	$course=$this->db->get('courses')->row();

                    
                $sdate = $gal->dob; 
                $sm=  date("m",strtotime($sdate));
                 $sd=  date("d",strtotime($sdate));
                    
                  if($sm==$cm && $sd==$cd){
                $h++;
                 if($h>0){
                ?>

                	 						 <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $gal->name; ?></td>
                                                <td><?php echo $gal->fName; ?></td>
                                                <td><?php echo $gal->mother_name; ?></td>
                                                  <td><?php echo $gal->address; ?></td>
                                                    <td><?php echo $course->course_name ?></td>
                                               
                                            </tr>
                                            <?php $i++; ?>
                                            <?php }    } endforeach;

                      
               
              }
?>                         
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->