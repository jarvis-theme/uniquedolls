<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Konfirmasi Order</span>
        </div>
    </div>
	<div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12 center">
        	<div class="contact-form">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
					<input class="form-control" type="text" placeholder="Kode Order" name='kodeorder' required>
					<button class="find-code btn btn-success" type="submit"><span> Cari Kode</span></button>
				{{Form::close()}}
			</div>
			<br>
        </div>
    </div>
</section>