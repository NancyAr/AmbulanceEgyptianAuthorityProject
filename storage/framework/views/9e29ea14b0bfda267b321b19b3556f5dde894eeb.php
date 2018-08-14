<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>حجز العمليات</title>
<link href="<?php echo e('css/Replies.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
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
				
					<?php $__currentLoopData = $Replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Replies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card" >
					<div style="clear: both;">&nbsp;</div>
						<h2 class="title"><a href="#"> <?php echo e($HospitalName->HospitalName); ?> </a></h2>
						<p class="meta"><span class="date"><?php echo e($Replies->created_at); ?></span>
						<span class="posted">تم الرد بواسطة <a href="#"> 116 </a></span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
						<div class="card-body card-block"> 
							<p > <?php echo e($Replies->Description); ?></p>
							<div class="card-footer" style = " "   >
							<!--form action = "/comment" method = "post">
                            <?php echo e(csrf_field()); ?>

                                            <div class = "p-text" >
                                                <textarea name = "ctext"  onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" class = "p-text-comment" placeholder = "اكتب تعليق..."></textarea>
                                                
                                            </div>
                            </form--> 
							<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
							<?php if($comment->InquiryID == $Replies->id): ?>
                               
                                    <div class = "comments" style = "background-color:white;">
                                        <a> <span id ="comment-user"></span>  <?php echo e($comment->Description); ?></a>

                                    </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
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
				
	<!-- end #page -->
	
	
</div>
</body>
</html>
