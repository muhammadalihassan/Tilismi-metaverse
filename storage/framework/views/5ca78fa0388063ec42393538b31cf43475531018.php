
<?php $__env->startSection('meta-section'); ?>      
    <meta name="description" content="The Nike LDWaffle sacai CLOT Cool Grey features a tonal grey mesh upper with dual tongues and 3M Swooshes. Each Swoosh i"/>

    <meta name="keywords" content=""/>

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:title" content="<?php echo e(asset($products->product_name)); ?>" />

    <meta name="twitter:description" content="<?php echo e(asset($products->desc)); ?>" />

    <meta name="twitter:image:alt" content="" />

    <meta name="twitter:image" content="<?php echo e(asset($products->img)); ?>">

    <meta property="og:type" content="og:product" />

    <meta property="og:title" content="<?php echo e(asset($products->product_name)); ?>" />

    <meta property="og:image" content="<?php echo e(asset($products->img)); ?>" />

    <meta property="og:description" content="<?php echo e(asset($products->desc)); ?>" />

    <meta property="og:url" content="<?php echo e(route('merchandise_details',[$products->product_cat->slug,$products->slug])); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','GRAPPLING ZONE |MERCHANDISE DETAILS'); ?>
<?php $__env->startSection('content'); ?>
<section class="prod-section">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
          <div class="outer">
            <img src="<?php echo e(asset($products->img)); ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">

           <div class="merchant-deatils">
             <div class="product-sec">
               
         <h3><?php echo e($products->product_name); ?></h3>
      <div class='rating-stars'>
        <?php if($avg): ?>
  
    <ul id='stars'>
    <?php if($avg == 1): ?>

      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

      <?php elseif($avg == 2): ?>
      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>
   
      <?php elseif($avg == 3): ?>
       <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

    

    <?php elseif($avg == 4): ?>

      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

      
       <?php elseif($avg == 5): ?>
     <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

       <?php endif; ?>

        </ul>
           <?php else: ?>
       
      <ul id='stars'>
    
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>
    </ul>

    <?php endif; ?>
    </div>
  
  
                     
                
                <!-- rating star -->
                  <!-- Rating Stars Box -->
  



                <!-- rating star End -->
                  






                     <div class="price">
                        <h2>$<?php echo e($products->new_price); ?></h2>
                     </div>

                     <div class="prod-txt">

                     	  <?=html_entity_decode($products->desc)?>   
                    
                          

                       <div class="order-shipment">
                         <div class="shipment-txt">
                           <ul>
                            <?php if($shipping_price->value !='0'): ?>
                             <li>Free Shipping On order <span>over $<?php echo e($shipping_price->value); ?></span></li>
                             <?php endif; ?>
                             <li>Gift-wrap available</li>
                           </ul>
                         </div>

                          <div class="add-to-cart">
                            <form id='myform' method='POST' class='quantity' action="<?php echo e(route('add_to_cart')); ?>">
                               <?php echo csrf_field(); ?>
                           <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">

                             <div class="input-group">
                            <input type='button' value='-' class='qtyminus minus medi' field='quantity' />
                               <input type='text' name='quantity' value='1' class='qty' min="1"  max="<?php echo e($products->stock); ?>" />
                            <input type='button' value='+' class='qtyplus plus medi' field='quantity' />
                                    </span>
                                    
                                 </div>
                                 <div class="add-cart-btn">
                            <button type="submit" class="add-btn">Add to Cart</button>

                                     </form>
                                        <a href="" data-id="<?php echo e($products->id); ?>" class="wish-list"><i class="<?php echo e(isset($wishlist) && $wishlist  ? 'fa fa-heart' : 'fa fa-heart-o'); ?>" aria-hidden="true"></i></a>
                          <a href="" class="wish-list"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </div>
                        

                        </div>
                       </div>
                       <div class="merchandise-det">
                        <h4>Made In USA</h4>

                        <h4>Category: <span><?php echo e($products->product_cat->category_name); ?></span></h4>
                        <h4>Tags: <span><?php echo e($products->tags); ?></span></h4>
                       </div>

                       <div class="share-social">
                         <ul>
                           <li class="shr-txt">Share:</li>
                           <li id="shareWithFb"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i>Share</a></li>
                           <li id="shareWithTwitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a></li>
                           <li id="shareWithPinterest"><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i>Pin it</a></li>
                           
                         </ul>
                       </div>
                <!-- MODAL START -->
                    <!-- Button trigger modal -->
                    <div class="grap-mod">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Write a Review
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e($products->product_name); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="review_form" method="POST">
        <?php echo csrf_field(); ?>
     

     
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
        
          <div class="grap-im">
              <img src="<?php echo e(asset($products->img)); ?>" alt="">
          </div>
        </div>
        <div class="col-md-8">
          <div class="gp-md">
             <?php if($avg ): ?>
       <ul id='stars'>
          <?php if($avg == 1): ?>

      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

      <?php elseif($avg == 2): ?>
      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>
   
      <?php elseif($avg == 3): ?>
       <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

    

    <?php elseif($avg == 4): ?>

      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

      
       <?php elseif($avg == 5): ?>
     <li class='star' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>

       <?php endif; ?>

        </ul>
           <?php else: ?>
       
      <ul id='stars'>
    
    
    
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li><a href="" class="customer">(<?php echo e($review_count); ?> Customer reviews)</a></li>
      </ul>

       <?php endif; ?>
      <input type="hidden" name="product_id" id="product_id">
      <input type="hidden" name="review" id="review" >
    <textarea placeholder="Enter Your Comment" name="user_review" id="user_review"></textarea>
  </div>
</div>

 <div class="md-tex">
  
  </div>


</div>
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-primary">Save changes</button>
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
</section>
  <section class="merchandise-sec">
      <div class="container">
      <div class="top-headings">
          <h2>Similar Products</h2>
        </div>

        <div class="row"> 
          <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rela): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3">
            <div class="our-pro-blk">
              <span>
                <img src="<?php echo e(asset($rela->img)); ?>" alt="">
              </span>
             
      <?php if($avg ): ?>
       <ul id='stars'>
          <?php if($avg == 1): ?>

      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      

      <?php elseif($avg == 2): ?>
      <li class='star' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     
   
      <?php elseif($avg == 3): ?>
       <li class='star' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     <li class='star' title='Poor' data-value='1' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     

  
    <?php elseif($avg == 4): ?>

      <li class='star' title='Fair' data-value='2' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
     
      
       <?php elseif($avg == 5): ?>
     <li class='star' title='Fair' data-value='2' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Good' data-value='3' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star' title='WOW!!!' data-value='5' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
       <li class='star' title='Excellent' data-value='4' data-id="<?php echo e($rela->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      

       <?php endif; ?>

        </ul>
           <?php else: ?>
       
      <ul id='stars'>
    
    
    
      <li class='star blank' title='Poor' data-value='1' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Fair' data-value='2' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Good' data-value='3' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='Excellent' data-value='4' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
      <li class='star blank' title='WOW!!!' data-value='5' data-id="<?php echo e($products->id); ?>">
        <i class='fa fa-star fa-fw'></i>
      </li>
    
      </ul>

       <?php endif; ?>
    </div>
  
  
              <a href="#"><h5><?php echo e($rela->product_name); ?></h5></a>
              <h6><small>$<?php echo e($rela->old_price); ?> </small> <del> $<?php echo e($rela->old_price); ?></del></h6>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   $('.wish-list').on("click",function(){
     var product_id=$(this).attr("data-id"); 
      $.ajax({
      url: "<?php echo e(route('add_wishlist')); ?>",
      type: "post",
      data: {
       _token: "<?php echo e(csrf_token()); ?>",
        product_id:product_id
        },
      dataType:'json',
        success: function (data) {
           if (data.success == true) {
            location.reload(true);
                     toastr.success(data.message);
                   
                   } else {
                      toastr.error(data.message);
                      // Swal.fire('successfully Added');
                  }
        },
    });
   });


  
$(document).on('click','.star',function(){
   
     var review= $(this).attr("data-value");
     var product_id=$(this).attr("data-id"); 


    $("#product_id").val(product_id);

     $("#review").val(review);
    
     })
 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });

$("#review_form").submit(function(e) {
            e.preventDefault();
       var formData = new FormData(this);
        
            $.ajax({
                url: "<?php echo e(route('add_review')); ?>",
                type: 'POST',
                  data: formData,
                success: function (data){
               if (data.success == true) {
            location.reload(true);
                     toastr.success(data.message);
                   
                   } else {
                      toastr.error(data.message);
                      // Swal.fire('successfully Added');
                  }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

// $(document).on('click','.mybtn',function(){

    
//      $.ajax({
//       url: "<?php echo e(route('add_review')); ?>",
//       type: "post",
//       data: {
//        _token: "<?php echo e(csrf_token()); ?>",
//         user_review:user_review,
//         review:review,
//         product_id:product_id
//         },
//       dataType:'json',
//         success: function (data) {
//            if (data.success == true) {
//             location.reload(true);
//                      toastr.success(data.message);
                   
//                    } else {
//                       toastr.error(data.message);
//                       // Swal.fire('successfully Added');
//                   }
//         },
//     });




//      }) 



$(document).on('click','#shareWithFb',function(){
      
      let productUrl = encodeURI(document.location.href);
      let productTitle = encodeURI("");
      
      window.open(`https://www.facebook.com/sharer.php?u=${productUrl}&title=${productTitle}`,'Facebook-share-dialog','width=626, height=436');
      
    })
    
  $(document).on('click','#shareWithTwitter',function(){
      
      let productUrl = encodeURI(document.location.href);
      let productTitle = encodeURI("");
      
      window.open(`http://www.twitter.com/share?url=${productUrl}&title=${productTitle}`,'Twitter-share-dialog','width=626, height=436');
      
    })


    $(document).on('click','#shareWithPinterest',function(){
      
      let productUrl = encodeURI(document.location.href);
      let productTitle = encodeURI("");
      
      window.open(`http://pinterest.com/pin/create/button/?url=${productUrl}&title=${productTitle}`,'Pinterest-share-dialog','width=626, height=436');      
    })

 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\grappling_zone\grappling_zone_\resources\views/web/merchandise-detail.blade.php ENDPATH**/ ?>