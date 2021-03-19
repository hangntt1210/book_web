@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product: {{$sanpham->name}}</h6><!--ten sp(cua chi tiet sp)-->
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Detail</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!--trang hien thi chi tiet sp-->
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
		<!--hinh anh sp + thong tin ben phai h/a-->
							<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2>{{$sanpham->name}}</h2></p><!--tensp-->
								<p class="single-item-price">
								@if($sanpham->promotion_price == 0)<!--neu sp ko khuyenmai-->
												<span class="flash-sale">{{$sanpham->unit_price}}đ</span>
											@else<!--sp co khuyenmai-->
												<span class="flash-del">{{$sanpham->unit_price}}đ</span>
												<span class="flash-sale">{{$sanpham->promotion_price}}đ</span>
											@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p><!--chua co dl(chi tiet sp ngan)-->
							</div>
							<div class="space20">&nbsp;</div>

							<p>quantity:</p><!--so luong muon mua(chon 1-5), chua lam-->
							<div class="single-item-options">
		
								<select class="wc-select" name="color">
									<option>Qty</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a><!--nhan vao gio hang-->
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
						
						</ul>
		<!--mo ta cua sp-->
						<div class="panel" id="tab-description">
							<p>Truyện kể về hai nhân vật chính là Tấm và Cám. Tấm hiền lành, tốt bụng, chăm chỉ nhưng bố mất sớm nên phải ở với dì ghẻ và người em cùng cha khác mẹ tên là Cám. Tấm luôn bị mẹ con Cám đối xử tàn nhẫn, bất công, phải làm hết mọi công việc trong nhà.</p>

							<p>Một lần dì ghẻ sai Tấm và Cám đi bắt tép, ai được nhiều sẽ thưởng. Tấm chăm chỉ bắt nên được giỏ được đầy còn Cám rong chơi nên giỏ trống không. Thấy vậy, Cám lừa Tấm và trút hết giỏ tôm tép vào giỏ của mình.</p>


 
							<p>Tấm ngồi khóc nức nở thì được bụt hiện lên giúp đỡ. Nhờ sự giúp đỡ của Bụt mà Tấm có người bạn để tâm sự là cá bống, có quần áo mặc đi chơi hội, được bầy chim sẻ giúp đỡ. Ít lâu sau, nhà vua mở hội, xem ai đi vừa chiếc giày tìm thấy ở khúc sông hôm hội làng sẽ được làm hoàng hậu, và Tấm đi vừa vì đó chính là đôi giày nàng đánh rơi.</p>

							<p>Thấy vậy, mẹ con Cám ghen tị, nên nhân một lần Tấm về giỗ cha đã tìm cách hại chết Tấm. Sau lần ấy, Cám vào cung tiến vua thay Tấm. Tấm lần lượt hóa thành chim vàng anh, cây xoan đào, khung cửi, và cuối cùng là trong quả thị để trở thành con gái của bà cụ.</p>

							<p>Sau bao nhiêu khó khăn, cô Tấm được trở lại làm người và quay trở về sống hạnh phúc bên vua. Còn mẹ con Cám nhận trừng phạt thích đáng là cái chết.</p>
							
						</div>
						
					</div>
					<div class="space50">&nbsp;</div>

				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection