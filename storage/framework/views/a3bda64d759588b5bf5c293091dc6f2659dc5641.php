<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>GAPPLING ZONE. | Registration Inquiry</title>
   </head>
   <body>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
         <!--HEADER -->
         <tbody>
            <tr>
               <td align="center">
                  <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tbody>
                        <tr>
                           <td align="center" valign="top" background="<?php echo e(asset('images/logo.png')); ?>" bgcolor="#66809b" style="background-size:cover; background-position:top; background-size: cover;
    background-repeat: no-repeat;">
                           <table class="col-600" width="600" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td height="40"></td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="line-height: 0px;">
                                       <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="<?php echo e(asset('images/logo.png')); ?>"  alt="DS Medical Supplies Inc">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="font-family: 'Raleway', sans-serif; font-size:37px; color:#ffffff; line-height:24px; font-weight: bold; letter-spacing: 5px;">
                                      Registration Inquiry
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="font-family: 'Lato', sans-serif; font-size:15px; color:#ffffff; line-height:24px; font-weight: 300;">
                                       Inquiry has been successfully submitted <br>Quick Review.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td height="50"></td>
                                 </tr>
                              </tbody>
                           </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <!-- END HEADERR -->
            <!-- START SHOWCASE -->
            
            <tr>
               <td align="center">
                  <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px; border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
                     <tbody>
                        <tr>
                           <td height="35"></td>
                        </tr>
                        <tr>
                           <td align="center" style="font-family: 'Raleway', sans-serif; font-size:22px; font-weight: bold; color:#333;">Registration Inquiry</td>
                        </tr>
                        <tr>
                           <td height="10"></td>
                        </tr>
                        <tr>
                           <td align="left" style="font-family: 'Lato', sans-serif; font-size:14px; color:#757575;padding: 0px 51px;line-height: 0.8rem; font-weight: 300;">
                              <p>Full Name : <b><?=$details['name']?></b></p>
                              <p>City : <b><?=$details['city']?></b></p>
                              <p>Zipcode : <b><?=$details['zipcode']?></b></p>
                              <p>Address : <b><?=$details['address']?></b></p>
                              <p>Email : <b><?=$details['email']?></b></p>
                              <p>Phone Number : <b><?=$details['phonenumber']?></b></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
           
            <tr>
               <td height="5"></td>
            </tr>
            <!-- END SHOWCASE -->
            <!--ABOUT -->
            <tr>
               <td align="center">
                  <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-right:20px;">
                     <tbody>
                        <!-- END ABOUT -->
                        <!-- START FOOTER -->
                        <tr>
                           <td align="center">
                              <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
                                 <tbody>
                                    <tr>
                                       <td height="50"></td>
                                    </tr>
                                    <tr>
                                       <td align="center" bgcolor="#333" background="<?php echo e(asset('web/images/background-image-newletter-2.jpg')); ?>" height="185">
                                          <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                             <tbody>
                                                <tr>
                                                   <td height="25"></td>
                                                </tr>
                                                <tr>
                                                   <td align="center" style="font-family: 'Raleway',  sans-serif; font-size:26px; font-weight: 500; color:#fbb016; background-color: #333;">Follow Us On Social Media</td>
                                                </tr>
                                                <tr>
                                                   <td height="25"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <table align="center" width="35%" border="0" cellspacing="0" cellpadding="0">
                                             <tbody>
                                                <tr>
                                                   <td align="center" width="30%" style="vertical-align: top;">
                                                      <a href="<?=Helper::config('twitterlink')?>" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-twitter.png"> </a>
                                                   </td>
                                                   <td align="center" class="margin" width="30%" style="vertical-align: top;">
                                                      <a href="<?=Helper::config('facebooklink')?>" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-fb.png"> </a>
                                                   </td>
                                                  <td align="center" width="30%" style="vertical-align: top;">
                                                      <a href="<?=Helper::config('google')?>" target="_blank"> <img src="https://webdevtrick.com/wp-content/uploads/icon-googleplus.png"> </a>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <!-- END FOOTER -->
         </tbody>
      </table>
   </body>
</html><?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/emails/user-registration.blade.php ENDPATH**/ ?>