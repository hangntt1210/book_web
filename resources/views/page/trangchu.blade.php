@extends('master')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
								@foreach($slide as $sl)
									<!-- 4 slide/hinhanh dau trang-->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
								@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
<!--list cac new product-->
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($new_product)}} products</p><!--sl new product-->
								<div class="clearfix"></div>
							</div>
							
							<div class="row">
							@foreach($new_product as $new)<!--lay ra cac new product-->
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height =250px></a><!--nhan vao hinh anh, se den chi tiet sp-->
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p><!--tensp-->
											<p class="single-item-price">
											@if($new->promotion_price == 0)<!--neu sp ko khuyenmai-->
												<span class="flash-sale">{{$new->unit_price}}??</span>
											@else<!--sp co khuyenmai-->
												<span class="flash-del">{{$new->unit_price}}??</span>
												<span class="flash-sale">{{$new->promotion_price}}??</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang','$new->id')}}"><i class="fa fa-shopping-cart"></i></a><!--nhan vao icon gio hang-->
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a><!--nhan vao nut Detail, se den chi tiet sp-->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach	
							</div>
							<div class="row">{{$new_product->links()}} </div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>
<!--list sp khuyen mai-->
						<div class="beta-products-list">
							<h4>Sale</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($sanpham_khuyenmai)}} products</p><!--sl spkm-->
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sanpham_khuyenmai as $spkm)<!--lay ra cac sp sale-->
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/{{$spkm->image}}" alt="" height=250px ></a><!--nhan vao hinh anh, se den chi tiet sp-->
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spkm->name}}</p><!--ten spkm-->
											<p class="single-item-price">
												<span class="flash-del">{{$spkm->unit_price}}??</span>
												<span class="flash-sale">{{$spkm->promotion_price}}??</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a><!--nhan vao icon gio hang-->
											<a class="beta-btn primary" href="{{route('chitietsanpham',$spkm->id)}}">Details <i class="fa fa-chevron-right"></i></a><!--nhan vao nut Detail, se den chi tiet sp-->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{$sanpham_khuyenmai->links()}} </div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection