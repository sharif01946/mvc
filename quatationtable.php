<div class="right_col" role="main">
          <div class="">
                  <div class="x_content">
                    <?php
                    if(isset($messageuodate)):
                  ?>
                    <div class="alert alert-success">
                      <?php echo $messageuodate;?>
                    </div>

                <?php endif; ?>  
                    <div class="table-responsive">
                      <div class="left">
                          <div class="row">
                            <div class="col-md-5">
                              <h2><b>QUOTATION</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>quatationc/quatationc_input"><button class="btn btn-info "><h4>CREATE NEW </h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Quotations Number</th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Customer</th>  
                            <th class="column-title">Sales-person</th>  
                            <th class="column-title">Total</th>  
                            <th class="column-title">Status</th>     
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        
                        <?php
                          if($quatetablea) :
                              foreach ($quatetablea as $quationd) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $quationd->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $quationd->quotation; ?></td>
                              <td class=" "><?php echo $quationd->date ; ?></td>
                              <td class=" "><?php echo $quationd->customer ; ?></td>
                              <td class=" "><?php echo $quationd->salesperson ; ?></td>
                              <td class=" "><?php echo $quationd->totalprice ; ?></td>
                              <td class=" "><?php echo $quationd->status ; ?></td> 
                              <td class=" last">
                                <a id="<?php echo $quationd->id; ?>" onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>quatationc/quatation_delete/<?php echo $quationd->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <a href="<?php echo base_url(); ?>quatationc/quatation_edit/<?php echo $quationd->id; ?>" style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
        