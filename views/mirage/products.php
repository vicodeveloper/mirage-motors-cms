    <div class="container">
        <div class="row">
            <div class="col s12 m3">
                <div id="jquery-accordion-menu" class="jquery-accordion-menu black">
                    <ul id="demo-list">
                        <?php #arr($getProductMenu); ?>
                        <?php foreach ($getProductMenu as $key => $item): ?>
                             <?php if(count($item) > 1): ?>
                        <li>
                            <a href="javascript:return false"><?=$item[0]; ?></a>
                            <ul class="submenu">
                                <?php foreach ($item['sub'] as $key => $sub): ?>
                                    <li><a href="?view=product&category=<?=$key;?>"><?=$sub;?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                            <?php elseif ($item[0]): ?>
                                <li><a href="?view=product&category=<?=$key;?>"><?=$item[0];?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div> <!-- cd-accordion-menu -->

            </div>
            <div class="col s12 m9" style="margin-top: 5px;">
                <?php #echo arr($getProduct); ?>
                <h5>Toate piesile disponibile!</h5>
                <hr>
                <?php foreach ($getProduct as $item): ?>
                    <div class="col s12 m6">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="<?=TEMPLATE;?>/img/products/<?=$item['image'];?>" style="height: 135px; width: 135px;">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p><?=$item['ro_name_product'];?></p>

                                </div>
                                <div class="card-action">
                                    <div class="chip">
                                        <img src="<?=TEMPLATE;?>/img/brands/<?=$item['brand_image'];?>" alt="Contact Person">
                                        Pret: <?=$item['price'];?> MDL
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


                <!-- <h5>Toate piesile disponibile v#2!</h5>
                <hr>
					 <?php foreach ($getProduct as $item): ?>
                         <div class="card col s12 m6">
                             <div class="card-image waves-effect waves-block waves-light">
                                 <img class="activator" src="<?=TEMPLATE;?>/img/products/<?=$item['image'];?>" style="height: 250px;">
                             </div>
                             <div class="card-content">
                                 <span class="card-title activator grey-text text-darken-4"><?=$item['ro_name_product'];?><i class="material-icons right">more_vert</i></span>
                             </div>
                             <div class="card-reveal">
                                 <span class="card-title grey-text text-darken-4"><?=$item['ro_name_product'];?><i class="material-icons right">close</i></span>
                                 <p><?=$item['ro_descrip'];?> | <?=$item['price'];?> | <?=$item['id_brand'];?></p>
                             </div>
                         </div>
					 <?php endforeach; ?>
                -->
            </div>
        </div>
    </div>



