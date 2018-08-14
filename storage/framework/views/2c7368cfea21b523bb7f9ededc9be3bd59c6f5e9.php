
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>حجز العمليات</title>
<link href="<?php echo e('css/Complaints.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#"><span>اسم</span> المستشفى  </a></h1>  <!--we will get it from database later on-->
				<p> حجز العمليات الفوري</p>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#">الرئيسية</a></li>
					<li><a href="#">استفسار</a></li>
					<li><a href="#">شكوى</a></li>
					
				</ul>
			</div>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">شكوى</a></h2>
						<div style="clear: both;">&nbsp;</div>
						<div class="col-lg-6">
						<div class ="row" >                  
						<div class ="col-sm">
						<div class="card">
						<div class="card-body">

                        <form action="/Complaints" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <?php echo e(csrf_field()); ?>

                          <div class="row form-group">
						  <div class="entry">
                        <div class="col col-md-3"><label for="integer-input" class=" form-control-label"><p> من فضلك ادخل رقمك القومي </p></label></div>
                             <div class="col-12 col-md-9"><input type="number" id="number-input" name="ID" placeholder="الرقم القومي" class="form-control" ></div>
						 
                          <div class="row form-group">
						 
						  
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"><p> الشكوى </p></label></div>
                            <div class="col-12 col-md-9"><textarea  id="textarea-input" name="Complaint" rows="9" placeholder="" class="form-control"></textarea></div>
                          <div style="clear: both;">&nbsp;</div>
						  
                          </div>
						  
						  </div>
						   </form>
                         <div style="clear: both;">&nbsp;</div>
                            
                        <button type="submit" class="btn-complain">
                           <strong> أرسل الشكوى </strong>
                        </button>
						 
							
						</div>  
                       
                      </div>
						</div>
				
                     
                      
                      
                      
                      
                      </div>
                      
            </div>
          </div>
						
					</div>
				</div>
				
	<!-- end #page -->
	
</div>
</body>
</html>
