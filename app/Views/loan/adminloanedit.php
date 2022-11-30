<?php echo view('header'); ?>
<!-- BACK-TO-TOP -->
		<a href="https://vyz.bz/ridingsolo_admin/#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>	

		<!-- JQUERY JS -->
		<script src="https://vyz.bz/ridingsolo_admin/assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="https://vyz.bz/ridingsolo_admin/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="https://vyz.bz/ridingsolo_admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
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
<div class="app-content main-content mt-0">
					<div class="side-app">
						<!-- CONTAINER -->
						<div class="main-container container-fluid">
							<!-- PAGE-HEADER -->
							<div class="page-header">
								<h1>Loans</h1>
							</div>
		<form class="row" action="<?php echo base_url().'/userApplyLoanstore'?>" method="post">
			<input type="hidden" name="loan_id" value="<?php echo $result['loan_id']; ?>">
			
			
			<input name="loanamt_actuval" value="" id="input_loanamt" type="hidden" />
			
	<div class="form-group col-6">
	Loan amount <input name="loanamount" id="myRange" value="<?php echo $result['principal_amount']; ?>" onChange="rangechanged();" class="form-control" type="text">
</div>
<div class="row" style="display: none;">
                                    <!-- col -->
                                    <div class="col-lg-6" >
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">EMI for 95 Days (3 Months & 5 days) </label>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                    <!-- col -->
                                    <div class="col-lg-6">
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">EMI for 65 Days (2 Months & 5 days) </label>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                    <!-- col -->
                                    <div class="col-lg-6">
                                        <div class="form-check form-check-inline border p-3 d-block">
                                            <div class="d-flex">
                                                <input class="form-check-input ms-2 me-3" type="radio" name="loantype" id="inlineRadio3" value="option3">
                                                <label class="form-check-label me-3" for="inlineRadio3">Enter the Days </label>
                                                <input type="text" class="w-50 m-0 align-self-center" id="days" name="days" value="" size="30" maxlength="2" onblur="rangechanged();" oninput="isValidNum(this.value)">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ col -->
                                </div>



<div style="clear:both;"></div>
<input name="tpayableamt" value="" id="input_tpayableamt" type="hidden" />
	<div class="form-group col-4">totamt <input id="totamt" class="form-control ">
		<input type="hidden" name="input_loanamt" id="input_loanamt"  class="form-control col-lg-2">
	</div>
	<div class="form-group col-4">processing_fee <span id="processing_fee_text" ></span><input id="processing_fee" class="form-control" /> <input type="hidden" name="processing_fee" id="input_processing_fee" value=""></div>
	<div class="form-group col-4">preclosure<input id="preclosure" class="form-control" /></div>
	<!-- <div class="form-group col-6">
		Total Payable<input type="" name="" id="tpayableamt">
	</div> -->
<div class="col-sm-6" id="tpayableamt"></div>
<div class="col-sm-6" id="monthlyemi"></div>
<div class="col-sm-6" id="intrest"></div>
<div class="form-group col-4"> Total Payable<input type="text" name="" id="input_tpayableamt"></div>

<div><button type="submit" class="btn btn-primary">Update</button></div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
	rangechanged();
	function dateformateymd(date1)
    {
        var d = new Date(date1);
        var month = d.getMonth()+1;
        var day = d.getDate();

        var emidate = d.getFullYear() + '-' +
            ((''+month).length<2 ? '0' : '') + month + '-' +
            ((''+day).length<2 ? '0' : '') + day;
            return emidate;
    }
	function rangechanged(){

        var loanamt = $('#myRange').val();
        //alert(loanamt);
        var processing_fee = 10/100;//persent
        var processing_fee_amt = loanamt * processing_fee;
        var emi_intrest = 2.5; 
        var dayloan_intrest = 3.5; 
        //var emidate = $('#selectdate').val();
        
       
        

        $('#totamt').val(loanamt);
        $('#input_loanamt').val(loanamt);
       // loanamt* 10/100;
        $('#processing_fee_text').html("10% : ");
        $('#input_processing_fee').val(processing_fee_amt);
        $('#processing_fee').val(processing_fee_amt);
        $('#preclosure').val("Rs."+(parseInt(loanamt)+parseInt(loanamt * 0.035)+parseInt(processing_fee_amt)));

        if(loanamt< 7000){
            //third radio
            $('#inlineRadio3').prop("checked", true);
            $('#inlineRadio3').prop("disabled", false);
            $('#days').prop("disabled", false);
            $('#inlineRadio1').prop("disabled", true);
            $('#inlineRadio2').prop("disabled", true);

            var intrest = 3.5/100;//0.035---->30 1---?
            
            var days = $('#days').val();
            if(days==''){days = 30;}
            var intrestdays = days/30*0.035;
            var d= new Date();
            var emidate = dateformateymd(d);

            var payableamt = (parseInt(loanamt)+parseInt(loanamt * intrestdays)+parseInt(processing_fee_amt));
             $('#tpayableamt').html("Rs. "+payableamt);
             $('#input_tpayableamt').val(payableamt);
            var str = '<tr><td><input name="emi_principal_amount[]" type="hidden" value="'+loanamt+'"/><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrestdays+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="3.5%"/></td><td><label for="">Rs:'+payableamt+'</label><input type="hidden" name="payableamt[]" value="'+payableamt+'"></td><td><input name="emiduedate[]" value="'+emidate+'" class="form-control datepicker" type="hidden" >'+emidate+'</td></tr>';
            $('#monthlyemi').html(str);
            $('#intrest').html('3.5%');


        }else if(loanamt > 15000){
            //first radio
            $('#inlineRadio1').prop("checked", true);
            $('#inlineRadio1').prop("disabled", false);
            $('#inlineRadio2').prop("disabled", true);
            $('#inlineRadio3').prop("disabled", true);
            $('#days').prop("disabled", true);
            var intrest = 2.5/100;

            var splits =3;
            var split1 = loanamt*(50/100);
            var split2 = loanamt*(30/100);
            var split3 = loanamt*(20/100);

            var payableamt1 = parseInt(split1)+parseInt(loanamt * intrest)+parseInt(processing_fee_amt);
            var payableamt2 = parseInt(split2)+parseInt(loanamt * intrest);

            var intrestdays = 35/30*0.025;

            var payableamt3 = parseInt(split3)+parseInt(loanamt * intrestdays);
            

            var emidate = new Date();
            emidate.setDate(emidate.getDate() + 30);
            emidate = dateformateymd(emidate);

            var emidate2 = new Date();
            emidate2.setDate(emidate2.getDate() + 60);
            emidate2 = dateformateymd(emidate2);

            var emidate3 = new Date();
            emidate3.setDate(emidate3.getDate() + 95);
            emidate3 = dateformateymd(emidate3);

            var str = '<tr></tr><tr><td><input name="emi_principal_amount[]" type="hidden" value="'+split1+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split2+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split3+'"/><input type="hidden" name="emi_intrest[]" value="'+Math.round(loanamt * intrest)+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="2.5%"/><input name="days" type="hidden" value="95" /></td><td><label for="inlineRadio3">Rs:'+Math.round(payableamt1)+'</label><input type="hidden" name="payableamt[]" value="'+Math.round(payableamt1)+'"></td><td> <input name="emiduedate[]" value="'+emidate+'" class="form-control datepicker" type="hidden"> on '+emidate+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+Math.round(loanamt * intrest)+'" /><input type="hidden" name="processing_fee_amt[]" value="0"></td><td><label for="inlineRadio3">Rs:'+payableamt2+'</label><input type="hidden" name="payableamt[]" value="'+payableamt2+'"></td><td><input name="emiduedate[]" value="'+emidate2+'"  class="form-control datepicker" type="hidden"> on '+emidate2+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+Math.round(loanamt * intrestdays)+'" /><input type="hidden" name="processing_fee_amt[]" value="0"></td><td><label for="inlineRadio3">Rs:'+payableamt3+'</label><input type="hidden" name="payableamt[]" value="'+payableamt3+'"></td><td><input name="emiduedate[]" value="'+emidate3+'"  class="form-control datepicker" type="hidden"> <div class="text-right"> on '+emidate3+'</div></td></tr>';
            $('#monthlyemi').html(str);
            $('#tpayableamt').html("Rs. "+parseInt(payableamt1+payableamt2+payableamt3));
            $('#input_tpayableamt').val(parseInt(payableamt1+payableamt2+payableamt3));
            $('#intrest').html('2.5%');
        }else{
            //second radio
            $('#inlineRadio2').prop("checked", true);
            $('#inlineRadio2').prop("disabled", false);
            $('#inlineRadio3').prop("disabled", true);
            $('#inlineRadio1').prop("disabled", true);
            $('#days').prop("disabled", true);
           var intrest = 2.5/100;
            var splits =2;
            var split1 = loanamt *60/100;
            var split2 = loanamt *40/100;
            var payableamt1 = split1+(loanamt * intrest)+processing_fee_amt;
            var intrestdays = 35/30*0.025;
            var payableamt2 = split2+(loanamt * intrestdays);
            $('#payableamt').html("<div id='3splitfirst' class=''>First Instalment : "+ payableamt1 + "</div><div id='3splitsecond' class=''>Second Instalment : "+ payableamt2 + "</div><input type='hidden' name='payableamt[]' value='"+payableamt1+"'><input type='hidden' name='payableamt[]' value='"+payableamt2+"'>");
            var emidate = new Date();
            emidate.setDate(emidate.getDate() + 30);
            emidate = dateformateymd(emidate);

            var emidate2 = new Date();
            emidate2.setDate(emidate2.getDate() + 65);
            emidate2 = dateformateymd(emidate2);


            var str = '<tr><td><input name="emi_principal_amount[]" type="hidden" value="'+split1+'"/><input name="emi_principal_amount[]" type="hidden" value="'+split2+'"/><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrest+'" /><input type="hidden" name="processing_fee_amt[]" value="'+processing_fee_amt+'"><input type="hidden" name="intrest" value="2.5%"/><input name="days" value="65" type="hidden"><input type="radio"><span class="d-inline-block ps-2"  name="inlineRadioOptions" id="inlineRadio3" value="option1">First Month</span></td><td><label for="inlineRadio3">Rs:'+payableamt1+'</label><input type="hidden" name="payableamt[]" value="'+payableamt1+'"></td><td><input name="emiduedate[]" value="'+emidate+'" class="form-control datepicker" type="hidden"> on '+emidate+'</td></tr><tr><td><input type="hidden" name="emi_intrest[]" value="'+loanamt * intrestdays+'"><input type="hidden" name="processing_fee_amt[]" value="0"></td><td><label for="inlineRadio3">Rs:'+payableamt2+'</label><input type="hidden" name="payableamt[]" value="'+payableamt2+'"></td><td><input name="emiduedate[]" value="'+emidate2+'" class="form-control datepicker" type="hidden"> <div class="form-control"> on '+emidate2+'</div></td></tr>';
            $('#monthlyemi').html(str);
            $('#tpayableamt').html("Rs. "+parseInt(payableamt1+payableamt2));
            $('#input_tpayableamt').val(parseInt(payableamt1+payableamt2));
            $('#intrest').html('2.5%');
        }        
          

    }
</script>
<?php echo view('footer_text');?>
			<?php echo view('footer');?>



