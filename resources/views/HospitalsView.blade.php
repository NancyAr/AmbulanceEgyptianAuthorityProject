<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>حجز العمليات</title>
<link href="Login.css" rel="stylesheet" type="text/css" media="screen" />
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
					
					<li><a href="/HospitalsView">المستشفيات</a></li>
					
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
					 <div class="col-lg-6">
               
               @if( count($hospitals) )
                    @foreach( $hospitals as $user)
                        <div class="card">
                          <div class="card-header">
                            <strong>{{$user->name}}</strong> 
                          </div>
                          <div class="card-body card-block">
                            
                            
                            <!--img src= "/images/profile_pic/{{$user->img_ext}}" width = "100px" length = "100px" style = "float:left;"-->

                              <div class="row form-group">
                                <p>{{$user->address}}</p>
                              </div>

                                <p>{{$user->telephone}}</p>
                              </div>

                            

                          </div>
                         <div class="card-footer">
                           <a href = "/profile/{{$user->id}}" >
                            <button  class="btn btn-primary btn-sm" >
                              <i class="fa fa-dot-circle-o"></i> اظهر التفاصيل
                            </button>
                          </a>    
                        </div>
                    </div>
                    @endforeach
              @endif
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
