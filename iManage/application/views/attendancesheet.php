
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="printcontent" class="display table" style="width: 100%; cellspacing: 0; font-size:10px;">
                                        <thead>
                                            <tr>
                                            	<th>#</th>
                                            	<th>Enrollment No.</th>
                                                <th>Roll No.</th>
                                                <th>Student Name</th>
                                                <th>Father Name</th>
                                                <th>Photo</th>
                                                <th>Gender</th>
                                                <th>Strudent Signature</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($result as $key => $info): ?>
                                                <tr>
                                                	<td><?= $i ?></td>
                                                	<td>MSME<?= $info->id; ?></td>
                                                    <td><?= $info->student_id; ?></td>
                                                    <td><?= $info->name; ?></td>
                                                    <td><?= $info->fName; ?></td>
                                                    <td><img src="<?= base_url()?>assets/images/stuImage/<?= $info->photo; ?>" width="80" /></td>
                                                    <td><?= $info->gender; ?></td>
                                                    <td></td>
                                                </tr>
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->