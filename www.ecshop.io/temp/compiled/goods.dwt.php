<?php echo $this->fetch('library/page_header.lbi'); ?>

	
	
	
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
                                            <?php echo $this->fetch('library/ur_here.lbi'); ?>

<!--						<li><a href="index.html">Home</a></li>
						<li><a href="#">Category</a></li>
						<li><a href="#">Samsung Galaxy</a></li>-->
					</ul>
				</div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="product">
						<div class="col-md-6">
                                                    
                                                    <div class="image">
								<img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
								<div class="image-more">
									 <ul class="row">
										 <!--<li class="col-lg-3 col-sm-3 col-xs-4">-->
											<a href="#"><img class="img-responsive" src="<?php echo $this->_var['goods']['goods_img']; ?>"></a>
										<!--</li>-->
										
									</ul>
								</div>
							</div>
                                                    
                                           
						</div>
                                           <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
						<div class="col-md-6">
							<div class="caption">
								<div class="name"><h3><?php echo $this->_var['goods']['goods_name']; ?></h3></div>
								<div class="info">
									<ul>
										<li>商品货号：<?php echo $this->_var['goods']['goods_sn']; ?></li>
                                                                                <li>库存：<?php echo $this->_var['goods']['goods_number']; ?></li>
                                                                               <div class="price"><?php echo $this->_var['goods']['shop_price']; ?><span><?php echo $this->_var['goods']['market_price']; ?></span></div>
                                                                                
									</ul>
								</div>
								
								<div class="options">
									选择：
									<select>
										<option value="" selected>----Please Select----</option>
										<option value="red">RED</option>
										<option value="black">BLACK</option>
									</select>
								</div>
								<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                                                <div class="well"><label>Qty: </label> <input class="form-inline quantity" type="text" name="number"  value="1"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn btn-2 ">ADD</a></div>
								<div class="share well">
									<strong style="margin-right: 13px;">Share :</strong>
									<a href="#" class="share-btn" target="_blank">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="share-btn" target="_blank"> 
										<i class="fa fa-facebook"></i>
									</a>
									<a href="#" class="share-btn" target="_blank">
										<i class="fa fa-linkedin"></i>
									</a>
								</div>                                                            
							</div>
						</div>
                                            </form>
						<div class="clear"></div>
					</div>	
					<div class="product-desc">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#description">Description</a></li>
							<li><a href="#review">Review</a></li>
						</ul>
						<div class="tab-content">
							<div id="description" class="tab-pane fade in active">
								<h4>Sample Lorem Ipsum Text</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac, aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum. Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo, sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
								<h4>Sample Lorem Ipsum Text</h4>
								<p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</p>
							</div>
							<div id="review" class="tab-pane fade">
							  <div class="review-text">
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							  </div>
							  <div class="review-form">
								<h4>Write a review</h4>
								<form name="form1" id="ff" method="post" action="review.php">
									<label>
									<span>Enter your name:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Your message here:</span>
									<textarea name="message" id="message"></textarea>
									</label>
									<div class="text-right">
										<input class="btn btn-default" type="reset" name="reset" value="Reset">
										<input class="btn btn-default" type="submit" name="Submit" value="Submit">
									</div>
								</form>
							  </div>
							</div>
						</div>
					</div>
					<div class="product-related">
						<div class="heading"><h2>RELATED PRODUCTS</h2></div>
						<div class="products">
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.html"><img src="themes/default-php4/images/iphone.png" /></a></div>
									<div class="buttons">
										<a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
										<a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
										<a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
									</div>
									<div class="caption">
										<div class="name"><h3><a href="product.html">Aliquam erat volutpat</a></h3></div>
										<div class="price">$122<span>$98</span></div>
										<div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="clear"></div>
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
<!--								<li><a href="#">Laptops & Notebooks</a></li>
								<li><a href="#">Mobiles & Tablet</a></li>
								<li><a href="#">Software</a></li>-->
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
						<div class="content">
                                                    
							<label class="checkbox"><input type="checkbox" name="discount" checked=""> <a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a> </label>
							<label class="checkbox"><input type="checkbox" name="discount">40% - 50% (5)</label>
							<label class="checkbox"><input type="checkbox" name="discount">30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="discount">10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="discount">Other(50)</label>
						</div>
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

        
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div>
      </div>
    </div>
	
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
		$('.nav-tabs a').on('shown.bs.tab', function(event){
			var x = $(event.target).text();         // active tab
			var y = $(event.relatedTarget).text();  // previous tab
			$(".act span").text(x);
			$(".prev span").text(y);
		});
	});
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
</body>
</html>
