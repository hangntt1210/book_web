@extends('master')
@section('content')
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Search</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($product)}} products</p>
								<div class="clearfix"></div>
							</div>
<!--trang kq tim kiem, hien thi cac sp trung voi tim kiem(theo ten/gia tien)-->							
							<div class="row">
							@foreach($product as $new)<!--lay ra cac sp tim duoc-->
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height =250px></a><!--nhan vao hinh anh, den chi tiet sp-->
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p><!--ten sp tim duoc-->
											<p class="single-item-price">
											@if($new->promotion_price == 0)<!--neu sp ko khuyenmai-->
												<span class="flash-sale">{{$new->unit_price}}đ</span>
											@else<!--sp co khuyenmai-->
												<span class="flash-del">{{$new->unit_price}}đ</span>
												<span class="flash-sale">{{$new->promotion_price}}đ</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang','$new->id')}}"><i class="fa fa-shopping-cart"></i></a><!--nhan vao icon gio hang-->
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a><!--nhan vao nut Detail, den chi tiet sp-->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach	
							</div>
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection