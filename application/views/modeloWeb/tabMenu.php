
      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title">Favoritos</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Escritorio</span></a></li>
          </ul>
          
          
          

          <h5 class="sidebar-title">Menu Principal</h5>
          
          <ul class="nav nav-pills nav-stacked nav-quirk">
           
              
            <?php
            foreach ($menu as $padre){
                
                if($padre->padre == 0){
            ?>  
            
            <li class="nav-parent">
              <a href=""><i class="<?= $padre->img_menu; ?>"></i> <span><?= $padre->nombre_menu; ?></span></a>
              <ul class="children">
                  <?php 
                    foreach ($menu as $hijo){
                        if($hijo->padre == $padre->id_menu){
                  ?>          
                     
                    <li><a href="<?= base_url().$hijo->url_menu; ?>"><?= $hijo->nombre_menu ?></a></li>
                
                
                <?php    }} ?>
              </ul>
            </li>
            
            <?php }} ?>
            
            
            
          </ul>
          
          
          
          
        </div><!-- tab-pane -->