<?php if($page): foreach($page as $p):?>
<br><br><br> 
<div class="container">
  <div class="row">
       <div class="content-header col-12">
        
        <h2 class="content-title"><?php echo $p->title; ?></h2>
        <p><?php echo $p->content; ?></p>
      </div>
  
  </div>
</div>

<?php endforeach; else:?>
<br><br><br>
<div class="container-fluid h-100 error404" >
  <div class="row ">
    <div class="col-md-2 offset-md-4">
        <br><br>
        <h3 class="text-center">404</h3>
        <p class="text-center"><b>PAGE NOT FOUND</b><br><a href="<?php echo site_url('admin/dashboard');?>" class="btn btn-outline-success"><small>RETURN HOME PAGE</small></a></p>
        

     </div>
    <div class="col-md-3" id="yellow">
        <img src="<?php echo site_url('img/404.svg');?>" alt="" class="img-fluid">
    </div>    
  </div>
</div>
<?php endif;?>


