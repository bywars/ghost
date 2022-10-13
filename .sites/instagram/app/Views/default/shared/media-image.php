<?php
    /**
     * @var \Wow\Template\View $this
     * @var array              $model
     */
    $logonPerson  = $this->get("logonPerson");
    $uyelik       = $logonPerson->member;
    $accountInfo  = $this->get("accountInfo");
    $item = $model;
if(isset($item["id"])) {
    ?>
<div class="entry-layout col-lg-4 col-md-4 col-sm-6 col-xs-12" id="entry<?php echo $item["id"]; ?>">
    <div class="entry-thumb transition">
        <div class="entry-media">
            <?php if($accountInfo["user"]["pk"] != $item["user"]["pk"]) { ?>
                <div class="text-absolute">
                    <a href="/user/<?php echo $item["user"]["pk"]; ?>"><img class="img-circle lazy" style="max-width:24px;" data-original="<?php echo str_replace("http:", "https:", $item["user"]["profile_pic_url"]); ?>"/>
                        <strong><?php echo $item["user"]["username"]; ?></strong></a>
                </div>
            <?php } ?>
            <div class="image">
                <a class="lightGalleryImage" id="lightGallery<?php echo $item["id"]; ?>" data-sub-html='<div class="fb-comments" data-id="<?php echo $item["id"]; ?>" id="comments<?php echo $item["id"]; ?>"><p class="text-center"><i class="fa fa-spinner fa-spin fa-4x active"></i></p></div>' href="<?php echo str_replace("http:", "https:", $item["image_versions2"]["candidates"][0]["url"]); ?>">
                    <img class="img-responsive lazy" data-original="<?php echo str_replace("http:", "https:", $item["image_versions2"]["candidates"][0]["url"]); ?>"/>
                </a>
            </div>
        </div>
        <div class="action-links">
            <div class="btn btn-default btn-block">
                     <a href="/tools/send-like/<?php echo $item["id"]; ?>">Beğeni Gönder</a>
                <div class="btn-group">
             
                        <?php if($uyelik["instaID"] == $item["user"]["pk"]) { ?>
                           
                        <?php } ?>
                        <?php if($uyelik->instaID != $item["user"]["pk"]) { ?>
                          
                        <?php } ?>
                    
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>