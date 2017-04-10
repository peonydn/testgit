<ul class="nav nav-sidebar">
    
<li><a href="user.php" <?php if ($this->_var['action'] == 'default'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u1.gif"> <?php echo $this->_var['lang']['label_welcome']; ?></a>
<li><a href="user.php?act=profile" <?php if ($this->_var['action'] == 'profile'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u2.gif"> <?php echo $this->_var['lang']['label_profile']; ?></a>
<li><a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u3.gif"> <?php echo $this->_var['lang']['label_order']; ?></a>
<li><a href="user.php?act=address_list"<?php if ($this->_var['action'] == 'address_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u4.gif"> <?php echo $this->_var['lang']['label_address']; ?></a>
<li><a href="user.php?act=collection_list"<?php if ($this->_var['action'] == 'collection_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u5.gif"> <?php echo $this->_var['lang']['label_collection']; ?></a>
<li><a href="user.php?act=message_list"<?php if ($this->_var['action'] == 'message_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u6.gif"> <?php echo $this->_var['lang']['label_message']; ?></a>
<li><a href="user.php?act=tag_list"<?php if ($this->_var['action'] == 'tag_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u7.gif"> <?php echo $this->_var['lang']['label_tag']; ?></a>
<li><a href="user.php?act=booking_list"<?php if ($this->_var['action'] == 'booking_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u8.gif"> <?php echo $this->_var['lang']['label_booking']; ?></a>
<li><a href="user.php?act=bonus"<?php if ($this->_var['action'] == 'bonus'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u9.gif"> <?php echo $this->_var['lang']['label_bonus']; ?></a>
<?php if ($this->_var['affiliate']['on'] == 1): ?><a href="user.php?act=affiliate"<?php if ($this->_var['action'] == 'affiliate'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u10.gif"> <?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?>
<li><a href="user.php?act=comment_list"<?php if ($this->_var['action'] == 'comment_list'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u11.gif"> <?php echo $this->_var['lang']['label_comment']; ?></a>
<!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
<li><a href="user.php?act=track_packages"<?php if ($this->_var['action'] == 'track_packages'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u12.gif"> <?php echo $this->_var['lang']['label_track_packages']; ?></a>
<li><a href="user.php?act=account_log"<?php if ($this->_var['action'] == 'account_log'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u13.gif"> <?php echo $this->_var['lang']['label_user_surplus']; ?></a>
<?php if ($this->_var['show_transform_points']): ?>
<li><a href="user.php?act=transform_points"<?php if ($this->_var['action'] == 'transform_points'): ?>class="curs btn btn-info"<?php endif; ?>><img src="themes/default-php4/images/u14.gif"> <?php echo $this->_var['lang']['label_transform_points']; ?></a>
<?php endif; ?>
<!--<li><a href="user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="themes/default-php4/images/bnt_sign.gif"></a></li>-->
<li><a href="user.php?act=logout"  class="btn btn-danger" style="color: #fff; text-align:center;">安全退出</a></li>

</ul>