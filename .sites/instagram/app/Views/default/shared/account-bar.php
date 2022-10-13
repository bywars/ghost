<?php
    /**
     * @var \Wow\Template\View      $this
     * @var \App\Models\LogonPerson $logonPerson
     */
    $logonPerson = $this->get("logonPerson");
    if(!$logonPerson->isLoggedIn()) {
        return;
    }
?>
<div class="bg-accountbar">
    <div class="container">
      

            </li>
        </ul>
    </div>
</div>
<div class="bg-creditbar">
    <div class="container">
        <ul class="nav nav-justified nav-creditbar">
            <li>
                <a href="/user/<?php echo $logonPerson->member->instaID; ?>"><i class="fa fa-heart text-danger"></i><span class="hidden-xs hidden-sm"> <?php echo $this->translate("Beğeni Gönder"); ?><span class="badge" id="begeniKrediCount"><?php echo $logonPerson->member["begeniKredi"]; ?></span>       
            </li>
            <li>
                <a href="/tools/send-follower"><i class="fa fa-user-plus" style="color:#97ffff;"></i>
                    <span class="text"><?php echo $this->translate("instagram/send_follower"); ?></span>
                    <span class="badge" id="takipKrediCount"><?php echo $logonPerson->member["takipKredi"]; ?></span></a>
            </li>
            <li>
                <a href="/tools/send-comment"><i class="fa fa-comment text-warning"></i>
                    <span class="text"><?php echo $this->translate("instagram/send_comment"); ?></span>
                    <span class="badge" id="yorumKrediCount"><?php echo $logonPerson->member["yorumKredi"]; ?></span></a>
     
        </ul>
    </div>
</div>