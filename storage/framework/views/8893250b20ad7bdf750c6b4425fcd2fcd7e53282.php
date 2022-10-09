<?php echo $__env->make('web.layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/formcss.css')); ?>">
<header class="headerr">
     <div class="top-row">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logos">
              <img src="<?php echo e(asset('images/logo.png')); ?>" alt="logo">
            </div>
            <div class="logo-ddc">
              <h4>One DDC Way  <br>Fairfield, OH 45014</h4>
              <h4>1-800-929-0815  <br>1-800-363-1707 (fax)</h4>
            </div>
          </div>
          <div class="col-md-6">
            <div class="client-head">
              <h4>Client Identification Form</h4>
              <h3>Chain of Custody</h3>
            </div>
            <div class="client-part">
              <div class="row">
                  <label>Corporate Partner:</label>
                  <p><span>MY MOBILE DNA LLC</span></p>
                </div>
                <div class="row">
                  <label>Address:</label>
                  <p><span>Glendale AZ,</span></p>
                  <label>C/S/Zip:</label>
                  <p><span>85302</span></p>
                </div>
                <div class="row">
                  <label>Email:</label>
                  <p><span>Al@mymobiledna.com</span></p>
                </div>
                
                <div class="row">
                  <label>Phone:</label>
                  <p><span>480-322-6577</span></p>
                  <!-- <label>Fax:</label>
                  <p><span>800-363-1707</span></p> -->
                </div>
                <!-- <div class="col-md-6">
                  <label>Fax</label>
                </div> -->
                
            </div>
          </div>
          <div class="col-md-3">
            <div class="lab-use">
              <h4>LAB USE ONLY</h4>
              <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="logo">
            </div>
          </div>
        </div>
      </div>
     </div>
   </header>
<form>
   <section class="legal-sec">
    <div class="container">
      <div class="first-table">
        <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-mother">
          <h4>Mother</h4>
        </div>
        <div class="table-head">
          <p><span>To Collector:</span> Please print clearly. <span>Entire</span> box must be completed for each party collected.</p>
        </div>  
        <table class="legal-table">
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input required="" type="text" name="First Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input required="" type="text" name="Last Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input required="" type="text" name="Middle Initial" style="text-transform: capitalize;">
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input required="" type="date" name="Date of Birth">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input required="" type="text" name="SSN Last 4 Digits">
            </div>
          </td>
          <td rowspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Caucasian">
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name=" Native-American">
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Hispanic"> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="Black"> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="Asian"> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other <span>(specify): <input type="text" name="Other"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Driver's License">
                  <label>Driver's License</label>
                </li>
                <li>
                  <input type="checkbox" name="Military ID">
                  <label>Military ID</label>
                </li>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other</label> <span>(specify): <input type="text" name="Other"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="3">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Mother's Signature:</label>
                <input type="text" name="Mother's Signature:">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="Date:">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
      </div>
     <div class="first-table"> 
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-mother">
          <h4>Child</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="First Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input type="text" name="Last Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="Middle Initial" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Sex</h4>
              <input type="checkbox"name="Sex"> 
              <label>Male </label>
              <input type="checkbox"name="Sex"> 
              <label>Female </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="Date of Birth">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="SSN Last 4 Digits">
            </div>
          </td>
          <td rowspan="2" colspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Caucasian">
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name=" Native-American">
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Hispanic"> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="Black"> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="Asian"> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other <span>(specify): <input type="text" name="Other"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Driver's License">
                  <label>Driver's License</label>
                </li>
                <li>
                  <input type="checkbox" name="Military ID">
                  <label>Military ID</label>
                </li>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other</label> <span>(specify): <input type="text" name="Other"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="4">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Custodian's Signature:</label>
                <input type="text" name="Custodian's Signature:">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="Date:">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="first-table">
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-child">
          <h4>Alleged Father</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="First Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input type="text" name="Last Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="Middle Initial" style="text-transform: capitalize;">
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="Date of Birth">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="SSN Last 4 Digits">
            </div>
          </td>
          <td rowspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Caucasian">
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name=" Native-American">
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Hispanic"> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="Black"> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="Asian"> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other <span>(specify): <input type="text" name="Other"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Driver's License">
                  <label>Driver's License</label>
                </li>
                <li>
                  <input type="checkbox" name="Military ID">
                  <label>Military ID</label>
                </li>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other</label> <span>(specify): <input type="text" name="Other"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="3">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Alleged Father's Signature</label>
                <input type="text" name="Alleged Father's Signature">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="Date:">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="first-table">
      <div class="table-sign">
          <h4>Sign Here</h4>
        </div>
        <div class="table-child">
          <h4>Additional Party</h4>
        </div>
      <table>
        <tr>
          <th>
            <div class="table-first">
              <h4>First Name<span> (Please print clearly)</span></h4>
              <input type="text" name="First Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Last Name<span> (Please print clearly)</span></h4>
              <input type="text" name="Last Name" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Middle Initial<span> (Please print clearly)</span></h4>
              <input type="text" name="Middle Initial" style="text-transform: capitalize;">
            </div>
          </th>
          <th>
            <div class="table-first">
              <h4>Sex</h4>
              <input type="checkbox"name="Sex"> 
              <label>Male </label>
              <input type="checkbox"name="Sex"> 
              <label>Female </label>
            </div>
          </th>
        </tr>
        <tr>
          <td>
            <div class="birth-table">
              <h4>Date of Birth</h4>
              <input type="date" name="Date of Birth">
            </div>
          </td>
          <td>
            <div class="birth-table">
              <h4>SSN Last 4 Digits</h4>
              <input type="text" name="SSN Last 4 Digits">
            </div>
          </td>
          <td rowspan="2" colspan="2">
            <div class="table-History">
              <h4>Client History:<span>(Please check applicable)</span></h4>
              <ul>
                <li>
                  <h3>Have you had a blood transfusion within the past 3 months?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you ever had a bone marrow or stem cell transplant?
                    <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span>
                  </h3>
                  
                </li>
                <li>
                  <h3>Have you previously participated in a parentage test? <span>
                    <input type="checkbox" name="Yes">
                    <label>Yes</label>
                    <input type="checkbox" name="No">
                    <label>No</label>
                  </span> </h3>
                  
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="table-race">
              <h4>Race:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Caucasian">
                  <label>Caucasian</label>
                </li>
                <li>
                  <input type="checkbox" name=" Native-American">
                  <label> Native American</label>
                </li>
                
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Hispanic"> 
                  <label>Hispanic</label>
                </li>
                <li>
                  <input type="checkbox" name="Black"> 
                  <label>Black</label>
                </li>
                <li>
                  <input type="checkbox" name="Asian"> 
                  <label>Asian</label>
                </li>
              </ul>
              <ul>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other <span>(specify): <input type="text" name="Other"></span></label>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="table-photo">
              <h4>Form of Photo ID Used:<span>(Please check one)</span></h4>
              <ul>
                <li>
                  <input type="checkbox" name="Driver's License">
                  <label>Driver's License</label>
                </li>
                <li>
                  <input type="checkbox" name="Military ID">
                  <label>Military ID</label>
                </li>
                <li>
                  <input type="checkbox" name="Other">
                  <label>Other</label> <span>(specify): <input type="text" name="Other"></span>
                </li>
              </ul>
            </div>
          </td>
          
        </tr>
        <tr>
          <td colspan="4">
            <div class="certify-table">
              <p>I certify I have read and agree to the Terms and Conditions provided on this form</p>
              <div class="certify-inli">
                <div class="row">
                  <div class="col-md-8">
                    <div class="certify-inpt">
                <label>Additional Party's Signature</label>
                <input type="text" name="Additional Party's Signature">
              </div>
                  </div>
                  <div class="col-md-4">
                    <div class="certify-Date">
                <label>Date:</label>
                <input type="date" name="Date:">
              </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    </div>
   </section>


     <section class="collect-statment">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="statment">
            <h5>Collector Statement</h5>
            <p>I certify that I have properly identified the parties and have collected, packaged and sealed the specimen(s) and have witnessed the signatures. I affirm, under penalties for perjury, that no tampering with the specimen(s) occurred while under my control.</p>
            <div class="signature">
            <label>Collector's Signature:</label><input type="text" disabled="">
          </div>
          <div class="collector-name">
             <label>Collector's <span>(Printed Name):</span></label><input class="legal-name" disabled="" type="text" placeholder=" Al Markoos" name="">
           </div>
             <div class="collect-date">
              <div class="date">
              <label>Collection Date:</label><input disabled="" type="text" name="">
            </div>
            <div class="timee">
              <label>Time:<input disabled="" type="text" name=""></label>
            </div>
              <div class="time">
              <label><input type="checkbox" disabled="">AM</label>
              <label><input type="checkbox" disabled="">PM</label>
            </div>
             </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="statment">
            <h5>Collection Facility Information </h5>
            <p>(If different from address above)</p>
            <div class="facility">
            <label>Facility:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>Address:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>C/S/Zip:</label><input type="text" disabled="">
          </div>
          <div class="facility">
            <label>Phone:</label><input type="text" disabled="">
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="contact-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-main">
        <h4>Mother's Contact Information</h4>
      </div>
    </div>
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text">
          </div>
          <div class="address-inr">
          <input type="text">
        </div>
        <div class="phone">
           <label>Phone:</label>
           <input type="text">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text">
        </div>
      </div>
    </div>
      <div class="row rw-h">
<div class="col-md-12">
        <div class="contact-mainn">
        <h4>Alleged Father's Contact Information</h4>
      </div>
    </div>
     
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text">
          </div>
          <div class="address-inr">
          <input type="text">
        </div>
        <div class="phone">
           <label>Phone:</label>
           <input type="text">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row rw-hh">
      <div class="col-md-12">
        <div class="contact-mainnn">
        <h4>Additional Party's Contact Information</h4>
      </div>
    </div>
     
      <div class="col-md-8">
        <div class="adress">
          <label>Address:</label>
          <input type="text">
          </div>
          <div class="address-inr">
          <input type="text">
        </div>
        <div class="phone">
           <label>Phone:</label>
           <input type="text">
        </div>
      </div>
      <div class="col-md-4">
        <div class="zipp">
          <label>C/S/ZIP:</label>
          <input type="text">
        </div>

     </div>
    </div>
  </div>
</section>

<section class="term-sec">
  <div class="container">
    <div class="terms">
      <h5>Terms and Conditions</h5>
      <h6>I acknowledge, consent and agree to the following:</h6>
      <ul>
        <li>I verify that the information contained on this form is correct and true to the best of my knowledge.</li>
        <li> I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
        <li> I authorize DDC, or its agents, to collect biological specimens and perform DNA testing with my specimen or that of the minor or incapacitated individual(s) named on this form.</li>
        <li>I understand that the biological specimens will be used for genetic testing and may be stored for future testing.</li>
        <li>If this test involves a person who is a minor or who is otherwise legally incapable of consenting, I attest that I have the legal authority to consent to
   testing and assume all legal responsibility.</li>
        <li> I witnessed the labeling of my name and/or individual’s name I am consenting for on the envelope/tube or package containing the specimen</li>
        <li>   I acknowledge and agree that the laboratory's liability to me arising out of or in any way related to the provision of testing services contemplated herein shall not exceed the cost of the test, and I agree to indemnify, defend, and hold DDC, its officers, agents, employees, representatives and any persons or entities collecting specimens harmless from all further claims or damages.</li>
        <li>I acknowledge and understand that if for any reason the biological specimen is inadequate for evaluation, DDC or the entities collecting specimensshall not be held liable if it is unable to produce test results due to insufficient specimen or due to the nature or condition of the specimen. DDC may request additional samples.</li>
        <li>   I understand that to ensure testing of the highest quality, DDC reserves the right to perform more testing to satisfy strict laboratory standards and guidelines. If this process delays the reporting of results, I will not hold DDC or the entities collecting specimens liable for any refund or damages.</li>
      </ul>
    </div>
  </div>
</section>

<section class="labortory-sec">
  <div class="container">
    <div class="labortry-blk">
    <div class="labortory-main">
     <div class="labortory-inr">
      <div class="heading">
      <h4>DNA Diagnostics Center Laboratory Use Only</h4>
    </div>
      <div class="pckge-rcve">
        <div class="option">
           <p>Package Received Sealed and Secure:</p>
           <div class="multiple-opt">
         <input type="checkbox" disabled=""><label>Yes</label>
          <input type="checkbox" disabled=""><label>No</label>
        </div>
      </div>
        <div class="confirmation">
          <p>I hereby affirm that I received the specimens for the individuals named on this form and found no evidence that the specimens had been tampered with or that the package had been opened prior to our receipt.</p>
        </div>
        <div class="recive-by">
        <div class="row">
        <div class="col-md-12">
        
        
             <label>Received By<span>(Printed Name):</span></label><input type="text" disabled="">
           </div>
         </div>
         </div>
         <div class="col-md-12">
           <div class="collect-date">
            
              <div class="signaturee">
              <label>Reciptent Signature:</label><input type="text" name="" disabled="">
            </div>
            <div class="date">
               <label>Date:<input type="text" name="" disabled=""></label>
            </div>
            <div class="timee">
              <label>Time:<input type="text" name="" disabled=""></label>
            </div>
              <div class="time-inr"> 
              <label><input type="checkbox" disabled="">AM</label>
              <label><input type="checkbox" disabled="">PM</label>
            </div>       
            </div>
          </div>
  
      <div class="labortory-notes">
              <div class="notes">
                <label>Laboratory Notes:</label>
                <input type="text" disabled="">
              </div>
              <div class="note-input">
              <input type="text" disabled="">
              <input type="text" disabled="">
             </div>
    </div>  
    </div>
  </div>
</div>
</section>
<div class="container">
  <div class="legal-sub-div">
    <button type="submit">Submit</button>
  </div>
</div>
</form>

<?php echo $__env->make('web.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\xampp\htdocs\dna_update_2\resources\views/web/legal-form.blade.php ENDPATH**/ ?>