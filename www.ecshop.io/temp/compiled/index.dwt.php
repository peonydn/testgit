<?php echo $this->fetch('library/page_header.lbi'); ?>

	
	
	
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
	<div id="page-content" class="home-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						
						<ol class="carousel-indicators hidden-xs">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<img src="themes/default-php4/images/main-banner1-1903x600.jpg" alt="First slide">
								
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
							<div class="item">
								<img src="themes/default-php4/images/main-banner2-1903x600.jpg" alt="Second slide">
								
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
							<div class="item">
								<img src="themes/default-php4/images/main-banner3-1903x600.jpg" alt="Third slide">
								
								<div class="header-text hidden-xs">
									<div class="col-md-12 text-center">
									</div>
								</div>
							</div>
						</div>
						
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="banner">
					<div class="col-sm-4">
						<img src="themes/default-php4/images/sub-banner1.png" />
					</div>
					<div class="col-sm-4">
						<img src="themes/default-php4/images/sub-banner2.png" />
					</div>
					<div class="col-sm-4">
						<img src="themes/default-php4/images/sub-banner3.png" />
					</div>
				</div>
			</div>
			
		</div>
                         
                        <div class="row">
				<div class="col-lg-12">
					<div class="heading"><h2>精品上市</h2></div>
					<div class="products">
                                              <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
					    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="product">
                                                       
                                                           
                                                                <div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></div>
								<div class="buttons">
									<a class="btn cart" href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span></a>
									<a class="btn wishlist" href="javascript:collect(<?php echo $this->_var['goods']['id']; ?>)"><span class="glyphicon glyphicon-heart"></span></a>
									<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
								</div>
								<div class="caption">
									<div class="name"><h3><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></h3></div>
									<div class="price"><?php echo $this->_var['goods']['shop_price']; ?><span><?php echo $this->_var['goods']['market_price']; ?></span></div>
									<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
								</div>

							</div>

                                            </div>
                                               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                            </div>
                        </div>		
			<div class="row">
				<div class="banner">
					<div class="col-sm-6">
						<img src="themes/default-php4/images/sub-banner4.jpg" />
					</div>
					<div class="col-sm-6">
						<img src="themes/default-php4/images/sub-banner5.png" />
					</div>
				</div>
			</div>
    
			<div class="row">
				<div class="col-lg-12">
					<div class="heading"><h2>新品上市</h2></div>
					<div class="products">
                                              <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="product">
                                                 
                                                                <div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></div>
								<div class="buttons">
									<a class="btn cart" href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span></a>
									<a class="btn wishlist" href="javascript:collect(<?php echo $this->_var['goods']['id']; ?>)"><span class="glyphicon glyphicon-heart"></span></a>
									<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
								</div>
								<div class="caption">
									<div class="name"><h3><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></h3></div>
									<div class="price"><?php echo $this->_var['goods']['shop_price']; ?><span><?php echo $this->_var['goods']['market_price']; ?></span></div>
									<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span>
                                                                        </div>
								</div>
							</div>
                                                </div>
                                               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                            </div>
                    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
