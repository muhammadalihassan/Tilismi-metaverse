 
<?php $__env->startSection('content'); ?>
<section class="banner-contct">
   <div class="banner-cntct-div colored-div">
      <img src="<?php echo e(asset($terms_banner->img)); ?>" alt="banner">
      <div class="container">
         <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
         <div class="banner-cntct-txt">
            <h3>CONTRACTOR AGREEMENT<br>MY MOBILE DNA, LLC</h3>
            <ul>
               <li>
                  <a href="<?php echo e(route('welcome')); ?>">Home</a>
               </li>
               <li>/CONTRACTOR AGREEMENT</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="terms-sec">
   <div class="container">
      <div class="row">
         <div class="app-terms-blk">
            <form action="<?php echo e(route('contract_submit')); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
            <!-- <p>If you have questions about our terms and conditions, don't hesitate to reach out and contact us at 480-322-6577 for assistance.</p>
               -->
               <p>This Contractor Agreement (“Agreement”) is entered into and made between<input type="text" name="username" >, (the “Collector” or “Contractor”) and My Mobile DNA LLC, an Arizona company, (the “Company”). This Agreement is binding and enforceable beginning this day<input type="text" name="day" id="day">of <input type="text" name="month" id="month"> , 20<input type="text" name="year" id="year">(the “Effective Date”). Collector and Company are collectively the “Parties” or individually a “Party.”</p>
            <h4>RECITALS</h4>
           <ul>
             <li>
               <p>My Mobile DNA wishes to engage the Collector as an independent contractor for the Company to collect and gather certain information and materials from customers according to the terms set forth below; and</p>
             </li>
             <li>
               <p>the Collector wishes to provide the services requested in accordance with the terms of this Agreement; and</p>
             </li>
             <li>
               <p>each Party is duly authorized and capable of entering into this Agreement.</p>
             </li>
             <li>
               <p>In consideration of the above recitals and the mutual promises and benefits contained herein, the Parties agree to the following:</p>
             </li>
           </ul>
           
            <h4>1. COLLECTOR REPRESENTATIONS AND WARRANTIES</h4>
            <h5>1.1 Commitment to Safety and Care </h5>
            <ul>
              <li>
                <p>To become and remain a Collector for My Mobile DNA, the Contractor represents, warrants, and agrees that:</p>
              </li>
              <p>i. I am at least 18 years old, have a valid Arizona or other state license, and have and will continue to have personal automobile insurance coverage.</p>
              <p>ii. I have not exceeded two at-fault accidents or violations with the last 18 months. I have no violation in the last 18 months for drunk driving, driving under the influence of drugs, or reckless driving. I do not have a reinstated license in effect less than one year after revocation.</p>
              <p>iii. I authorize and consent to allow My Mobile DNA to obtain information regarding my insurance coverage and driving performance at any time.</p>
              <p>iv.  While driving I agree to:</p>
              <ul>
                <li>
                  <p>obey all local, state, and federal traffic laws;</p>
                </li>
                <li>
                  <p>wear a seatbelt and make all other passengers wear a seatbelt;</p>
                </li>
                <li>
                  <p>avoid racing or any other aggressive or distracting behavior;</p>
                </li>
                <li>
                  <p>abstain from being under the influence of alcohol or any illegal drug; and </p>
                </li>
                <li>
                  <p>not possess or transport any alcohol, illegal drugs, weapons, or firearms.</p>
                </li>
              </ul>
              <p>v. If I am involved in an accident or receive any moving violations, then I shall promptly notify the Company. If a change occurs in my insurance coverage or driving privileges, then I shall promptly notify the Company.</p>
              <p>vi.  My vehicle has current state registration and inspection.</p>
              <p>vii. I shall not smoke, chew tobacco, eat, drink, talk on the telephone, wear headphones, nor use a radar detector while performing services for My Mobile DNA.</p>
              <p>viii. I shall maintain an acceptable driving record.</p>
              <p>ix. I shall not carry any passengers besides on-duty Company employees.</p>
              <p>x. I shall keep my personal vehicle, or any Company vehicle, clean and in good repair while performing services for My Mobile DNA.</p>
              <p>xi. I shall not permit any unauthorized person to drive the vehicle.</p>
              <p>xii. I understand that by using my personal vehicle to perform the Services under this Agreement, should there be any damage to my vehicle, other vehicles or property, or injury to a person, that my personal insurance shall be used to cover any claims made. I understand that nether the Company nor the Customer will be responsible for damages or injuries.</p>
              <p>xiii.  I shall treat the customers with care and respect.</p>
              <p>xiv. I shall keep secure customer samples. I shall not tamper with, harm, or misplace the customer’s samples.</p>
              <p>xv. I agree to keep up-to-date copies of my driver’s license, insurance card and information, and vehicle inspection and registration with the Company.</p>
              <p>xvi. Failure to follow any of the above may result in the immediate termination of this Agreement.</p>  
            </ul>
            <h4>2. SERVICES</h4>
            <h5>2.1 Services Performed</h5>
            <ul>
              <li>
                <p>For each collection, the Collector shall verify the identity of each customer (by inspection of a valid government ID). Collector shall collect a DNA sample from the customer using materials provided from the Company. (“Services”).</p>
              </li>
              <li>
                <p>A customer (“Customer”) is a person who orders a DNA sample collection from My Mobile DNA.</p>
              </li>
              <li>
                <p>The Collector shall perform the Services at the scheduled time and location set by the Customer.</p>
              </li>
              <li>
                <p>Collector shall return the collected sample to the Company.</p>
              </li>
          
            <h5>2.2 Services are Personal</h5>
            
              <li><p>The services to be performed under this agreement are personal to the Collector. My Mobile DNA requires that the services be performed exclusively by the collector himself or herself. 
              </p></li>
              <h5>2.3 Collector Obligations</h5>
              <li><p>
                Collector shall show respect and care to every customer.
              </p></li>
              <li>
                <p>Collector shall handle the samples with care and complete each collection within a reasonable amount of time.</p>
              </li>
              <li>
                <p>Collector shall collect samples in accordance with My Mobile DNA policies and guidelines.</p>
              </li>
            </ul>
            <h4>3. PAYMENT</h4>
            <h5>3.1 Compensation</h5>
            <ul>
              <li>
                <p>As full compensation for the Services, My Mobile DNA shall pay the Collector a fixed fee off $<input type="text" name="fees" id="fees"> (the “Fees”), payable on completion of the collection and satisfactory delivery of the collected DNA sample to the Company.</p>
              </li>
            </ul>
            <h5>3.2 Invoice</h5>
            <ul>
              <li>
                <p>The Collector shall provide to Company an invoice for each collected DNA sample delivered.</p>
              </li>
            </ul>
            <h5>3.3 Costs</h5>
            <ul>
              <li>
                <p>The Collector is solely responsible for any costs or expenses incurred in connection with the performance of the Services. In no event shall My Mobile DNA reimburse the Collector for any such costs or expenses.</p>
              </li>
              <li>
                <p>The Collector shall be responsible for the DNA sample and liable for the loss or damage of it. Any such loss or damage shall be deducted from the Collector’s compensation.</p>
              </li>
            </ul>
            <h4>4. EQUIPMENT & EXPENSES</h4>
            <h5>4.1 Collector Responsibilities</h5>
            <ul>
              <li>
                <p>Collector shall be responsible for all expenses incurred while performing the services under this Agreement, including but not limited to:</p>
              </li>
              <p>i. automobile, truck, and other travel expenses;</p>
              <p>ii.  vehicle repair and maintenance costs;</p>
              <p>iii. insurance premiums;</p>
              <p>iv.  vehicle and other license fees and permits;</p>
              <p>v. meals; and</p>
              <p></p>
              <p>vi.  cell phone expenses.</p>
            </ul>
            <h5>4.2 Company Materials</h5>
            <ul>
              <li>
                <p>Except for DNA sample collection kits that the Company provides to the Collector, all vehicles, equipment, and materials used to perform the services in this Agreement shall be provided by Collector.</p>
              </li>
            </ul>
            <h4>5. RELATIONSHIP OF THE PARTIES</h4>
            <h5>5.1 Collector Is an Independent Contractor</h5>
            <ul>
              <li>
                <p>Collector is an independent contractor and not an employee of My Mobile DNA. This Agreement shall not be construed to create any association, partnership, joint venture, employment, or agency relationship between the Collector and the Company for any purpose.</p>

              </li>
              <li>
                <p>Collector has no authority and shall not hold himself or herself out as having authority to bind the Company.</p>
              </li>
              <li>
                <p>c. Collector is not eligible to participate in any employee pension, health, vacation pay, sick pay, or other fringe benefit plan of My Mobile DNA.</p>
              </li>
            </ul>
            <h5>5.2 Company Responsibilities</h5>
            <ul>
              <li>
                <p>My Mobile DNA shall not be responsible for withholding or paying any income, payroll, Social Security, or other federal, state or local taxes on behalf of Collector.</p>
              </li>
              <li>
                <p>My Mobile DNA shall not be responsible for making any insurance contributions, including for unemployment or disability, or obtaining workers’ compensation insurance on behalf of Collector.</p>
              </li>
              <li>
                <p>Collector shall be responsible for, and shall indemnify My Mobile DNA against, all such taxes or contributions, including penalties and interest.</p>
              </li>
              
            </ul>
            <h5>Independent Contractor Rights</h5>
            <ul>
              <li>
                <p>a. The Parties agree to the following rights consistent with an independent contractor relationship:</p>
              </li>
             <p>i.  Collector has the right to perform services for others during the terms of this Agreement.</p>
             <p>ii. Collector has the sole right to control and direct the means, manner, and method by which the services required by this Agreement shall be performed.</p>
             <p>iii.  Collector shall at all times represent to third parties that Collector is an independent contractor and not an employee of My Mobile DNA. </p>
             <p>iv. My Mobile DNA shall not require the Collector to devote full time performing the Services in this Agreement.</p>
            </ul>
            <h4>6. TERM</h4>
            <h5>Creation and Completion</h5>
            <ul>
              <li>
                <p>The term of this Agreement shall commence on the Effective Date and shall continue until the Services have been satisfactorily completed, unless earlier terminated in accordance with this Agreement (the “Term”).</p>
              </li>
            </ul>
            <h5>6.2 Extension</h5>
            <ul>
              <li>
                <p>Any extension of the Term shall be subject to written mutual agreement between the Parties.</p>
              </li>
              <li>
                <p>In no event shall this Agreement remain in effect for more than one year.</p>
              </li>
            </ul>
            <h4>7. TERMINATION</h4>
            <h5>7.1 Right to Terminate</h5>
            <ul>
              <li>
                <p>Either Party may terminate this Agreement at any time by giving written notice.</p>
              </li>
              <p></p>
            </ul>
           
            <h5>7.2 Duties and Rights Upon Termination</h5>
            <ul>
              <li><p>
                 Collector shall be entitled to full payment for services performed before the effective date of termination. 
              </p></li>
              <li><p>
                Upon expiration or termination of this Agreement for any reason, or at any time upon the Company’s written request, Collector shall promptly return all DNA sample collection kits and any other Company property to My Mobile DNA. 
              </p></li>
            </ul>
            <h4>8. CONFIDENTIALITY</h4>
            <h5>8.1 Duties Regarding Confidential Information</h5>
            <ul>
              <li>
                <p>Collector acknowledges that it will be necessary for My Mobile DNA to disclose certain confidential information and proprietary information to Collector for Collector to perform the duties under this Agreement.</p>
              </li>
              <li>
                <p>Collector acknowledges that disclosure to a third party or misuse of this proprietary or confidential information would irreparably harm My Mobile DNA.</p>
              </li>
              <li>
                <p>Collector shall not disclose or use any proprietary or confidential information of the Company or its customers without the Company’s prior written permission. </p>
              </li>
              <li>
                <p>The restrictions in this Section apply before, during, and after the term of this Agreement.</p>
              </li>

              <li>
                <p>Collector may use such proprietary or confidential information to the extent necessary to perform the Services of this Agreement.</p>
              </li>
            </ul>
            <h5>8.2 Identifying Confidential Information</h5>
            <ul>
              <li>
                <p>Proprietary or confidential information includes:</p>
              </li>
              <p>i. private personal or business information about the customer(s) of the Company;</p>
              <p>ii.  the written, printed, graphic, or electronically recorded materials provided by the Company for the Collector to use;</p>
              <p>iii. Any written or tangible information stamped “confidential,” “proprietary,” or with a similar legend, or information that the Company makes reasonable efforts to maintain the secrecy of;</p>
              <p>iv.  Company’s business or marketing plans or strategies, customer lists, operating procedures, trade secrets, know-how and processes, pricing information, and sales projections; and</p>
              <p>v. Information belonging to customers and affiliates of My Mobile DNA about whom Collector gained knowledge as a result of Collector’s Services to the Company.</p>
            </ul>
            <h5>8.3 Consequences of a Breach</h5>
            <ul>
              <li>
                <p>Because a breach or threatened breach of this Section of the Agreement would cause irreparable harm to the Company, Collector acknowledges that damages would be an inadequate remedy for any such breach or threatened breach.</p>
              </li>
              <li>
                <p>The Company shall be entitled to equitable relief, including an injunction, in the event of a breach or threatened breach of this section of the Agreement, in addition to its rights and remedies available at law.</p>
              </li>
            </ul>
            <h5>8.4 Return of Business Materials</h5>
            <ul>
              <li>
                <p>Upon termination of Collector’s services to the Company, or at the Company’s request, Collector shall deliver to the Company all materials in Collector’s possession relating to the Company’s business.</p>
              </li>
            </ul>

            <h4>9. INSURANCE</h4>
            <h5>9.1 Insurance Coverage</h5>
           <ul>
             <li>
               <p>My Mobile DNA shall not provide any insurance coverage for Collector. Collector shall obtain and maintain the following insurance coverage for the duration of the Term:</p>
             </li>
             <p>i.  Automobile insurance for each vehicle used to perform the Services of this Agreement.</p>
             <p>ii. Comprehensive or commercial general liability insurance.</p>
              <li>
               <p>Before starting any wok, Collector shall provide the company with proof of this insurance and that My Mobile DNA has been named an additional insured under the policies.</p>
             </li>
           </ul>
            <h4>10. MISCELLANEOUS</h4>
            <h5>10.1 Indemnity</h5>
            <ul>
              <li>
                <p>Collector shall indemnify and hold harmless the Company and its affiliates from and against all losses, damages, liabilities, judgments, awards, costs, penalties, fines, or expenses, including reasonable attorneys’ fees, of whatever kind arising out of or resulting from:</p>
              </li>
              <p>i. Bodily injury, death of any person, or damage to real or tangible personal property resulting from Collector’s negligence or misconduct; or</p>
              <p>ii.  Collector’s breach of any representation, warranty, or obligation under this Agreement.</p>
              <li>
                <p>My Mobile DNA may satisfy such indemnity by a deduction in any payment due to the Collector.</p>
              </li>
            </ul>
            <h5>10.2 Notices</h5>
           <ul><li>
             <p>All notices given under this Agreement shall be in writing and delivered to the Party’s address listed in this Agreement. All notices shall be delivered by personal delivery, nationally recognized overnight courier with fees prepaid, email, or certified or registered mail in each case with return receipt requested and postage prepaid.</p>
           </li>
           <li>
             <p>Notice is only effective if:</p>
           </li>
           <p>i.  The receiving Party has received the notice; and</p>
           <p>ii. the Party giving notice has complied with the requirements of this Section.</p>
         </ul>
         <h5>10.3 Assignment</h5>
         <ul>
           <li>
             <p>Collector shall not assign any rights or delegate or subcontract any obligations under this Agreement without the Company’s prior written consent. Any attempt to assign without the Company’s written consent shall be deemed null and void.</p>
           </li>
           <li>
             <p>My Mobile DNA may freely assign its rights and obligations under this Agreement.</p>
           </li>
         </ul>
         <h5>10.4 Governing Law, Jurisdiction, and Venue </h5>
         <ul>
           <li>
             <p>This Agreement and all related documents, for all purposes shall be governed by and construed in accordance with the laws of Arizona, without giving effect to any conflict of laws principles that would cause the laws of any other jurisdiction to apply.</p>
           </li>
           <li>
             <p>Any action or proceeding by either Party to enforce this Agreement shall be brought only in a state or federal court located in Arizona, County of Maricopa.</p>
           </li>
           <li>
             <p>The Parties hereby irrevocably submit to the exclusive jurisdiction of these courts and waive the defense of inconvenient forum to the maintenance of any action or proceeding in such venue.</p>
           </li>
         </ul>
         <h5>10.5 Severability</h5>
         <ul>
           <li>
             <p>If any term or provision of this Agreement is invalid, illegal, or unenforceable, such invalidity, illegality, or unenforceability shall not affect the other terms or provisions of this Agreement.</p>
           </li>
         </ul>
         <h5>10.6 Execution in Counterparts</h5>
         <ul>
           <li>
             <p>This Agreement may be executed in multiple counterparts and by electronic signature, each of which shall be deemed an original and all of which together shall constitute one instrument.</p>
           </li>
         </ul>
         <h5>10.7 No Waiver</h5>
         <ul>
           <li>
             <p>The failure of a party to insist upon strict adherence to any term of this Agreement on any occasion shall not be considered a waiver of such party’s rights or deprive such party of the right thereafter to insist upon strict adherence to that term or any other term of this Agreement.</p>
           </li>
         </ul>
         <h5>10.8 Entire Agreement</h5>
         <ul>
           <li>
             <p>This agreement constitutes the sole and entire agreement between the Parties with respect to the subject matter contained in this Agreement, and supersedes all prior and contemporaneous understandings, agreements, representations, and warranties, both written and oral, with respect to such subject matter.</p>
           </li>
         </ul>
         <p>Please confirm that this Agreement correctly and completely describes our agreements by signing where indicated below and returning the signed letter to us.</p>
         <li>
           <p>We very much look forward to working with you.</p>
         </li>
         <h6>My Mobile DNA</h6>
         <p>By:<input type="text" name="by_dna" id="by_dna"></p>
         <p>Alfred Markoos</p>
         <p>10243 N 66th Dr
          <br>Glendale, AZ 85302
          </p>
          <p>CONFIRMED, ACCEPTED AND AGREED AS OF<input type="text" name="accepted_month" id="accepted_month"> ,20<input type="text" name="accepted_year" id="accepted_year"></p>
          <h6>COLLECTOR</h6>
          <p>By:<input type="text" name="by_collector" id="by_collector"></p>
          <p>Address:<input type="text" name="collector_address" id="collector_address"></p>
          <p>City:<input type="text" name="collector_city" id="collector_city"></p>
          <p>Contact:<input type="text" name="collector_contact" id="collector_contact"></p>
         <button type="submit" class="hover-btn">Submit</button>
         </form>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('css'); ?>
<style type="text/css">
   /*in page css here*/
</style>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   (() => {
       /*in page css here*/
   })();
   
   
   
   
   
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FareehaShah\dna_update_5\dna_update_4\resources\views/web/contractor-agreement.blade.php ENDPATH**/ ?>