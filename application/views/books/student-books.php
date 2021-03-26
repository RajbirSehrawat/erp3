<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?>        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   &nbsp;
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Student Books
                            
                        </div>
                        <!-- /.panel-heading -->
             <div class="panel-body">
            <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
			
				</div>
				
				<?php echo form_open('books/student_books/'.$enrollment_no);?>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control"  name="enrollment" value="<?php echo $enrollment_no; ?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                      
                                     <div class="col-md-6">
                                           <div class="form-group">
                                             <label>Books</label>
                                               <select name="book_name" class="form-control" readonly="">
                                            <option value=""> Select Course</option>
                                            <?php  
                                            	  
                                               $all_books = $this->Book_model->all_books();    
                                            		foreach($all_books AS $book_data) 
                                            		{
                                            			
                                            			echo "<option value='".$book_data['book_code']."' >".$book_data['book_name']."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                            <?php if(form_error('book_name')) { 
                                             	echo form_error('book_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                          
                                      
                                       
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="give_book" value="sbumit">Give Book</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </div>
                                    </form>
				
                            
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
         <div class="row">
         	<div class="col-lg-12"> <br/>
         			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Enrollment No</th>
                                        <th>Book Code</th>
                                        <th>Date</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($student_data as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['enrollment_no'];?></td>
                                        <td><?php echo $cdata['book_code']; ?></td>
                                        <td><?php echo $cdata['create_date']; ?></td>
                                      
                                        
                                        
                                        <td class="center">
														<a href="#" class="label label-danger label-sm">Delete</a>                                        
                                        </td>
                                    </tr>
                              <?php } ?>
                                   
                                </tbody>
                            </table>
         	</div>
         </div>
        </div>
        <!-- /#page-wrapper -->
        <?php $this->load->view('common/footer');?>