<?php echo $this->fetch('library/page_header.lbi'); ?>

	
	
	
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
                               <?php echo $this->fetch('library/ur_here.lbi'); ?>

<!--						<li><a href="index.html">Home</a></li>
						<li><a href="goo#">Category : Mobile</a></li>-->
					</ul>
				</div>
			</div>
                    
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="products">
                                                            <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">

                                                             <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
								<div class="col-lg-4 col-md-4 col-xs-12">
									
                                                                    
                                                                    	<div class="product">
										<div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" /></a></div>
										<div class="buttons">
											<a class="btn cart" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span></a>
											<a class="btn wishlist" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><span class="glyphicon glyphicon-heart"></span></a>
											<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
										</div>
										<div class="caption">
											<div class="name"><h3><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></h3></div>
											<div class="price"><?php echo $this->_var['goods']['shop_price']; ?><span><?php echo $this->_var['goods']['market_price']; ?></span></div>
											<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
										</div>
									</div>
                                            
								</div>
                                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                                </form>
							</div>
						</div>
					</div>
			
					<div class="row text-center">
						<ul class="pagination">
						  <li class="active"><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						</ul>
					</div>
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-categories">
						<div class="heading"><h4>分类</h4></div>
                                           <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>

						<div class="content">
							<ul>
								<li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>								
							</ul>
						</div>
                                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                           
					</div>
					<div class="widget wid-type">
						<div class="heading"><h4>TYPE</h4></div>
						<div class="content">
							<select>
								<option value="EL" selected>Electronics</option>
								<option value="MT">Mice and Trackballs</option>
								<option value="WC">Web Cameras</option>
								<option value="TA">Tablates</option>
								<option value="AP">Audio Parts</option>
							</select>
						</div>
					</div>
					<div class="widget wid-discouts">
						<div class="heading"><h4>价格</h4></div>
                                                 <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
						<div class="content">
                                                    <span>价格范围：</span>
                                                     <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a> 
						</div>
                                                 
                                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<div class="widget wid-brand">
						<div class="heading"><h4>牌子</h4></div>
                                                 <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
						<div class="content">
							<input type="checkbox" name="brand"><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a> 					
						</div>
                                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
					<div class="widget wid-product">
						<div class="heading"><h4>最近浏览</h4></div>
                                            
						<div class="box" id='history_div'>
                                                    <div class="box_1">
<!--                                                     <h3><span><?php echo $this->_var['lang']['view_history']; ?></span></h3>-->
                                                     <div class="boxCenterList clearfix" id='history_list'>
                                                       <?php 
$k = array (
  'name' => 'history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                                                     </div>
                                                    </div>
                                                   </div>
                                              
					</div>
				</div>
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
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<?php echo $this->_var['lang']['no_history']; ?>';
}
</script>
