<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>حجز العمليات</title>
<link href="<?php echo e('css/style.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
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
					<li class="current_page_item"><a href="/">تسجيل الدخول</a></li>
					<li><a href="/ComplaintsAndInquiries">الاستفسارات و الشكاوي</a></li>
					
				
					
				</ul>
					<div id="search" >
								<form method="get" action="#">
									<div>
										<input type="text" name="s" id="search-text" value="" />
										<input type="submit" id="search-submit" value="ابحث">  
									</div>
								</form>
								<div class="checkbox">
                                    <label>
                                        <input name="search-with-id" type="checkbox" value="SearchID">البحث بالرقم القومي
                                    </label>
									<label>
                                        <input name="search-with-ticketno" type="checkbox" value="SearchTicketNo">البحث بالرقم التذكرة
                                    </label>
                                </div>
							</div>
							<div style="clear: both;">&nbsp;</div>
				
		
						
							
						
			</div>
			
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">تسجيل الدخول</a></h2>
						<div style="clear: both;">&nbsp;</div>
						<div class="col-lg-6">
						<div class ="row" >                  
						<div class ="col-sm">
						<div class="card">
						<div class="card-body">

						<?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                    <?php endif; ?>

                        <form action="/" method="Post" enctype="multipart/form-data" class="form-horizontal">
                          
                         <?php echo e(csrf_field()); ?>

                          <div class="row form-group">
						  <div class="entry">
                        
                          </div>
                             <div class="col-12 col-md-9"><input type="text"  name="id" placeholder="اسم المستخدم" class="form-control" required autocomplete="off"/>

                         <div style="clear: both;">&nbsp;</div>
                          <div class="row form-group">
                            
                            <div class="col-12 col-md-9"><input type="text"  name="Password" placeholder="كلمة المرور" class="form-control" required autocomplete="off"/>		
                          </div>
						  </div>
                         <div style="clear: both;">&nbsp;</div>
                            <div class="card-footer">
                        <button type="submit" class="btn-login">
                           <strong>دخول </strong>
                        </button>
						 <h5> نسيت كلمة المرور؟ </h5></a>
							</div>
						</div>  
						</div>
                        </form>
                        </div>
					  
						</div>
						</div>				
						</div>					
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
