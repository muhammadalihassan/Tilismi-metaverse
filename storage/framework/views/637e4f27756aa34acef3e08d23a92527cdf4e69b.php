<style>
         body {
  margin: 0;
}

td, p {
  font-size: 13px;
  color: #878787;
}
ul {
  margin: 0 0 10px 25px;
  padding: 0;
}
li {
  margin: 0 0 3px 0;
}
h1, h2 {
  color: black;
}
h1 {
  font-size: 25px;
}
h2 {
  font-size: 20px;
}
a {
  color: #2F82DE;
  font-weight: bold;
  text-decoration: none;
}

.entire-page {
  background: #C7C7C7;
  width: 100%;
  padding: 20px 0;
  font-family: 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
  line-height: 1.5;
}

.email-body {
  max-width: 600px;
  min-width: 320px;
  margin: 0 auto;
  background: white;
  border-collapse: collapse;
  img {
    max-width: 100%;
  }
}

.email-header {
  background: black; 
  padding: 30px;
}

.news-section {
  padding: 20px 30px;
}

.footer {
  background: #eee;
  padding: 10px;
  font-size: 10px;
  text-align: center;
}
      </style>
   <table class="entire-page">
  
  <tbody><tr>
    <td>
      <table class="email-body">
        
        <tbody><tr> 
          <td class="email-header">
            <a href="Grappling Zone">
              <img src="<?php echo e(asset($promotions->img)); ?>" alt="Maplin Energy">
            </a>
          </td>
        </tr>
        
        <tr>
          
          <td class="news-section">
          
            <h1>Grappling Zone</h1>
            
            
            <p><?php echo e($promotions->paragraph); ?></p>


            <p><?php echo e($promotions->title); ?></p>
            <?=html_entity_decode($promotions->desc)?>
         
          </td>
          
        </tr>
        
        <tr>
          <td class="news-section">
            <h2><?php echo e($promotions->heading); ?></h2>
            <p><a href="<?php echo e(route('unsubscribe_newsletter',$user->id)); ?>">Unsubcribed</a>.</p>
            
          </td>
          
        </tr>
        
      </tbody></table>
      
    </td>
    
  </tr>
  
</tbody></table>
<?php /**PATH D:\FareehaShah\Grappling_Zone\grappling_zone\resources\views/emails/newsletter-promotion.blade.php ENDPATH**/ ?>