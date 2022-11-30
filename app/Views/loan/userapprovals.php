<?php echo view('header'); ?>
				<style>
			.btnadd{
				background-color: #13bfa6 !important;
				color: #fff !important;
				display: block;
			    
			    padding: 9px 25px;
			    line-height: 1.573;
			    color: #fff;
			    border-radius: 4px;
			    font-weight: 500;
			}
		</style>
<?php //echo view('appheader'); ?> 
<?php //echo view('appsidebar'); ?>


<!--APP-CONTENT OPEN-->
				<div class="app-content main-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container container-fluid">
							<!-- PAGE-HEADER -->
							<div class="page-header">
								<h1>Loans</h1>
							</div>
							<!-- PAGE-HEADER END -->

<div class="table-responsive">
	<div id="alert_message"></div>
	<table class="table table-striped">
		<thead class="thead-light" style="background-color:rgba(0, 150, 73, 0.9) !important;color:#fff;">
		<tr>
			<td>S.No</td>
			<td>Name</td>
			<td>Amount</td>
			<td>Principal Amount</td>
			<td>intrest</td>
			<td>days</td>
			<td>Applyed Date</td>					
			<td> Status</td>

			<td>Action</td>
		</tr>
	</thead>
<?php 
if($result){
	$i=1;
foreach($result as $r){ //print_r($r);?>
		<tr>
			<td><?php echo $i++;?></td>
			<td><?php echo $r->loantype;?></td>
			<td><?php echo $r->total_amt;?></td>
			<td><?php echo $r->principal_amount;?></td>
			<td><?php echo $r->intrest;?></td>
			<td><?php echo $r->days;?></td>
			<td><?php echo $r->applyed_date;?></td>
			
			
			<td><?php echo ($r->admin_approved_status==0)?'Approve':(($r->admin_approved_status==2)?'Pending':'Reject');?></td>
			
			<td id="action">
				<a href="<?php echo base_url().'/get_loan_by_id/'.$r->loan_id; ?>">Edit</a>
				<div id="admin_approved_status_<?php echo $r->loan_id;?>">
					<?php if($r->admin_approved_status==2){ ?>
					<div class="btn btn-sm btn-primary" onclick="Approverejectuser('0','<?php echo $r->loan_id;?>');">Approve
					</div>
					<div class="btn btn-sm btn-danger" onclick="Approverejectuser('1','<?php echo $r->loan_id;?>');">Reject
					</div>
				<?php }else if($r->admin_approved_status==0){ ?>
					<div class="btn btn-sm btn-primary" onclick="Approverejectuser('1','<?php echo $r->loan_id;?>');">Approve
					</div>

					
					
				<?php }else{ ?>
					<div class="btn btn-sm btn-danger" onclick="Approverejectuser('0','<?php echo $r->loan_id;?>','<?php echo $r->loantype;?>');">Reject
					</div>
				 <?php } ?>
				</div>
			</td>
		</tr>
		<?php } } ?>
	</table>

</div>



</div></div></div>
<script type="text/javascript">
	function Approverejectuser(admin_approved_status,uid){
		var uemail ='';
		
		admin_approved_statustext = admin_approved_status==0?'Approve':'Reject';
		admin_approved_statuscls = admin_approved_status==0?'btn-primary':'btn-danger';
		numadmin_approved_status = admin_approved_status?'0':'1';
		$.ajax({
		   method: "POST",		  
           dataType: "json",            
		   url: "<?php echo base_url(); ?>/approverejectuserloan",
		   data:{"loan_id":uid,"admin_approved_status":admin_approved_status,"modified_by":"1"},		   
		   success: function(result) {        
console.log(result);
console.log(result.status);
	         if(result){
	         	//var obj = jQuery.parseJSON(result);
	         	//console.log(obj.status);
		       // if(obj.status==200 && ){}
		     	$('#admin_approved_status_'+uid).html('<div class="btn btn-sm '+admin_approved_statuscls+'" onclick="Approverejectuser('+numadmin_approved_status+','+uid+');">'+admin_approved_statustext+'</div>');
		        //$('#alert_message').html(obj.message);
		        
		        }else{
		        alert('error');
		        }
		    }
   		});
	}
</script>
<?php echo view('footer_text');?>
			<?php echo view('footer');?>
