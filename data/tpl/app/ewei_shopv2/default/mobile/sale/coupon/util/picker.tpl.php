<?php defined('IN_IA') or exit('Access Denied');?><script id="tpl_coupons" type="text/html">
	<div class="coupon-picker">
		<div class="coupon-picker-title">请选择优惠券</div>
		<div class="coupon-container coupon-picker-container">

			<div id='container' class="coupon-container coupon-index-list">
				<%each coupons as coupon%>
						<div class="fui-list coupon-list coupon-item2 coupon-list-allow <%coupon.color%>"
							 data-couponname="<%coupon.couponname%>"
							 data-couponid="<%coupon.id%>"
							 data-merchid="<%coupon.merchid%>" style="background: #fff;-webkit-border-radius: 0.3rem;border-radius:0.3rem;">
							<i class="coupon-top-i"></i><i class="coupon-bot-i"></i>
							<div class="fui-list-inner coupon-index-list-left" style="height:auto;">
								<div class="coupon-index-list-info fui-list" style="margin:0;">
									<div class="fui-list-media">
										<%if coupon.thumb!=''%>
										<img src='<%coupon.thumb%>' />
										<%/if%>
									</div>
									<div class="fui-list-inner">
										<h3><%coupon.couponname%></h3>
										<p class="coupon-full"><%coupon.backstr%><%if coupon.backpre%>￥<%/if%><span><%coupon.backmoney%></span></p>
									</div>
								</div>
							</div>
							<div class="fui-list-media coupon-index-list-right" style="height:100%;">
								<i class="coupon-list-ling" style="vertical-align: middle;margin-top:1rem;">立即使用</i>
							</div>
						</div>
				<%/each%>
			</div>
		</div>
		<div class="fui-navbar">
			<a class="nav-item btn btn-default btn-cancel" >不使用优惠券</a>
			<a class="nav-item btn btn-danger btn-confirm">确定使用</a>
		</div>
	</div>
</script>