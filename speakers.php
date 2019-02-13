<!DOCTYPE html>
<html class="js flexbox rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent" lang="en">
   <!--<![endif]-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>EITES 2015</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Icare - Nonprofit, Fundraising HTML Template">
      <meta name="author" content="Admin" >
      <meta charset="UTF-8">
      <?php include('links.php');?>
      <style type="text/css">
         #mask_after {
         position:absolute;
         left:0;
         top:0;
         z-index:99998;
         background-color: #4D4D4D;
         display:none;
         }  
         #boxes_after .window_after {
         position:absolute;
         left:0;
         top:0;
         width:700px;
         min-height:330px;
         display:none;
         z-index:99999;
         padding:10px;
         -moz-border-radius: 10px;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         border: 2px solid #333333;
         -moz-box-shadow:4px 4px 30px #130507;
         -webkit-box-shadow:4px 4px 30px #130507;
         box-shadow:4px 4px 30px #130507;
         -moz-transition:top 800ms;
         -o-transition:top 800ms;
         -webkit-transition:top 800ms;
         transition:top 800ms;
         }
         #boxes_after #dialog_after {
         width:700px; 
         min-height:300px;
         padding:0px;
         background-color: #FFFFFF;
         position: fixed;
         }
         #loadcon{max-height:400px; overflow-y: scroll;}
         p{cursor: pointer;margin-bottom: 3px;margin-top: 0;}
		 .pcl{margin-left: 4px;
margin-right: 4px;
font-size: 14px;
text-align: center;
line-height: 17px;
margin-bottom: 9px;}
      </style>
      <script>
         function popupcall(page)
                  {
                     var dd =page;
                loaded(dd);
         
                 var id = '#dialog_after';
         //Get the screen height and width
         var maskHeight = jQuery(document).height();
         var maskWidth = jQuery(window).width();
         
         //Set heigth and width to mask to fill up the whole screen
         jQuery('#mask_after').css({'width':maskWidth,'height':maskHeight});
         
         //transition effect		
         jQuery('#mask_after').fadeIn(800);	
         jQuery('#mask_after').fadeTo("slow",0.8);	
         
         //Get the window height and width
         var winH = jQuery(window).height();
         var winW = jQuery(window).width();
         
         //Set the popup window to center
         jQuery(id).css('top',  winH/2-jQuery(id).height()/2 -50);
         jQuery(id).css('left', winW/2-jQuery(id).width()/2);
         
         //transition effect
         jQuery(id).fadeIn(500); 	
         
         //if close button is clicked
         jQuery('.window_after .close').click(function (e) {
         //Cancel the link behavior
         e.preventDefault();
         
         
         jQuery('#mask_after').hide();
         jQuery('.window_after').hide();
         });		
         
         //if mask is clicked
         jQuery('#mask_after').click(function () {
         jQuery(this).preventDefault();
         jQuery(this).hide();
         jQuery('.window_after').hide();
         });	
         
             }
             
             
             
             function loaded(va) {
         jQuery("#loadcon").html(" ");
         
         
             	 if (va==1) {
             	 	 jQuery("#loadcon").load("loadp/HideyukiTakada-bio.html");
             	 }
         if (va==2) {
             	 	 jQuery("#loadcon").load("loadp/HideyukiTakada-abstract.html");
             	 }
         if (va==3) {
             	 	 jQuery("#loadcon").load("loadp/gsmani-bio.html");
             	 }
         if (va==4) {
             	 	 jQuery("#loadcon").load("loadp/GSMani-abstract.html");
             	 }
         if (va==5) {
             	 	 jQuery("#loadcon").load("loadp/Rahulbanerjee-bio.html");
             	 }
          if (va==6) {
             	 	 jQuery("#loadcon").load("loadp/Rahulbanerjee-abstract.html");
             	 }
             if (va==7) {
             	 	 jQuery("#loadcon").load("loadp/Chittaranjanhota-bio.html");
             	 }
                if (va==8) {
             	 	 jQuery("#loadcon").load("loadp/Chittaranjanhota-abstract.html");
             	 }
         
                 if (va==9)
				  {
             	 	 jQuery("#loadcon").load("loadp/sahakari-bio.html");
             	 }
               if (va==10)
			      {
             	 	 jQuery("#loadcon").load("loadp/sahakari-abstract.html");
             	  }
				  
				  
				   if (va==11)
				  {
             	 	 jQuery("#loadcon").load("loadp/mukeshmaniya-bio.html");
             	 }
                  if (va==12)
			      {
             	 	  jQuery("#loadcon").load("loadp/mukeshmaniya-abstract.html");
             	  }
             	
             	
             	
             }
         
         
      </script>
   </head>
   <body>
      <?php include('otheader.php'); ?>
      <div id="boxes_after">
         <div style="top:150px; left: 551.5px; display: none;" id="dialog_after" class="window_after">
            <div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
               <a href="javascript:void()" class="close">
                  X
                  <!-- <img src="close.png" width="16" style="border:none; cursor:pointer;" />-->	
               </a>
            </div>
            <!--start -->
            <div  id='loadcon'  style="float:left; width:89%; margin-bottom:30px;padding:10px;#CCC;margin-left:5%;  margin-top:15px;text-align:justify; color:#222">
            </div>
         </div>
      </div>
      <!-- ggg-->
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="box-content">
                  <div class="">
                     <div class="col-md-12">
                        <!--pop up-->
                        <h4 class="header-block"><span style="font-size:20px;">Speakers</span></h4>
                     </div>
                  </div>
                  <div class="col-md-12" style="color:#000;text-align:justify;font-size:15px;">
                     <div>
                        <div style='float:left;width:100%;margin-bottom: 30px;'>
						
						
						<div style='float:left;width:32%;border:1px solid #ccc;min-height: 348px;'>
						   
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px;text-align:center">
                               <img src="images/speakers/mukesh_mohania.jpg"  style='border: 1px solid #ccc;' />
                              </p>
							  
                              <p onclick="popupcall(11)" class='pcl'><strong>  Dr. Mukesh Mohania</strong><br>
                                 <span style='line-height:15px;'> IBM Master Inventor & Distinguished Engineer, India</span>
                              </p>
                           <p onclick="popupcall(12); " style="margin-left:4px;margin-right: 4px;line-height: 15px;"><strong>Title: </strong>Policy Management for Autonomic Data Management</p>
                           </div>
						   
						   
						
                           <div style='float:left;width:32%;border:1px solid #ccc;min-height: 348px;margin-left: 2%;'>
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px;text-align:center">
                               <img src="images/speakers/Hideyuki.jpg"  style='border: 1px solid #ccc;' />
                              </p>
							  
                              <p onclick="popupcall(1)" class='pcl'><strong>Prof. (Dr.) Hideyuki Takada</strong><br>
                                 <span style='line-height:15px;'>  Ritsumeikan University, Japan</span>
                              </p>
                              <p onclick="popupcall(2); " style="margin-left:4px;margin-right: 4px;line-height: 15px;"><strong>Title: </strong>Instant Collaboration    Environments using Tablet Terminals</p>
                           </div>
						   
						   <div style='float:left;width:32%;border:1px solid #ccc; min-height: 347px;margin-left: 2%;'>
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px;text-align:center">
                                 <img src="images/speakers/Chittaranjan.jpg"  style='border: 1px solid #ccc;'  />
                              </p>
                              <p onclick="popupcall(7); " class='pcl'><strong>Prof. (Dr.) Chittaranjan Hota</strong><br>
                                 <span style='line-height:15px;'>
                                 BITS Pilani, Hyderabad<br> Campus, India  </span>
                              </p>
                              <p  onclick="popupcall(8); " style="margin-left: 4px;margin-right: 4px;line-height:15px;"><strong>Title: </strong>Security Threat Monitoring in Large Scale University Networks: Big-Data Analytics to the Rescue</p>
                           </div>
						   
						   
						  <!-- <div style='float:left;width:32%;border:1px solid #ccc;min-height: 348px;margin-left: 2%;'>
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px;text-align:center">
                                 <img src="images/speakers/Rahul.jpg"   style='border: 1px solid #ccc;' />
                              </p>
                              <p  onclick="popupcall(5); " class='pcl'><strong>Prof. (Dr.) Rahul Banerjee</strong><br>
                                 <span style='line-height:15px;'> BITS Pilani, India</span>
                              </p>
                              <p  onclick="popupcall(6);" style="margin-left: 4px;margin-right:4px;line-height:15px;"><strong>Title: </strong>Ubiquitous Computing</p>
                           </div>-->
						   						   
                        </div>
                        <div style='float:left;width:100%'>
						
                           
						   
						   <div style='float:left;width:32%;border:1px solid #ccc;margin-left: 2%;min-height: 347px;'>
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px;text-align:center">
                                 <img src="images/speakers/GSMani.jpg"  style='border: 1px solid #ccc;' />
                              </p>
                              <p class='pcl' onclick="popupcall(3); ">
                                 <strong>Prof. (Dr.) G. S. Mani, </strong><br>
                                 <span style='line-height:15px;'>Former Director & Dean, IAT,  Pune, India.</span>
                              </p>
                              <p onclick="popupcall(4); " style="margin-left:4px;margin-right: 4px;line-height: 15px;"><strong>Title: </strong>Swarm Intelligence – An exciting field for Research</p>
                           </div>
						   
						   
                           <!-- second profile-->
                           <div style='float:left;width:32%;border:1px solid #ccc;margin-left: 2%; min-height:346px;'>
                              <p style="padding: 11px;margin-top: 0%;padding-bottom: 0px; text-align:center">
                                 <img src="images/speakers/Raj_Sahakari_Photo.jpg"  style='border: 1px solid #ccc;'/>
                              </p>
                              <p onclick="popupcall(9); " class='pcl'><strong> Mr. Raj Sahakari</strong><br>
                                 <span style='line-height:15px;'>
                                 Tech Mahindra, Pune, India </span>
                               </p>
                              <p  onclick="popupcall(10); " style="margin-left: 4px;margin-right: 4px;line-height: 15px;"><strong>Title: </strong>SDN & NFV – Key Trends in Network Transformation</p>
                           </div>
						    
						   
                           <!--End Second PRofile-->
                        </div>
                     </div>
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.box-content -->
            </div>
            <!-- /.col-md-8 -->
            <?php include('rightcontent.php');?>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      <?php include('footer.php');?>
      <a href="#top" id="top-link" class="fa fa-angle-up" style="display: none;"></a>
      <!-- JavaScripts -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins.min.js"></script>
      <script src="js/custom.min.js"></script>
      <script type="text/javascript">
         $(".flex-direction-nav").hide();
      </script>
   </body>
</html>