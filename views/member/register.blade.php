<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Register</span>
        </div>
    </div>
    <div class="inner-column row padd">
        <div id="center_column" class="inner-bg col-lg-12 col-xs-12">
            <div class="tab-title-top"><h1>Register</h1></div>
            <div class="register-page">
                <div class="col-xs-12 col-md-6 zeropadding">
                    <span>Jika anda telah memiliki akun, maka anda dapat langsung menuju <a href="{{url('member')}}"> halaman login</a></span>
                    {{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal register'))}}
                        <div class="form-group">
                            <label class="col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama" value="{{Input::old('nama')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="{{Input::old('email')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Konfirmasi Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="alamat" required>{{Input::old("alamat")}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Negara</label>
                            <div class="col-md-9">
                                {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old('negara'),array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"form-control"))}}</td>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Provinsi</label>
                            <div class="col-md-9">
                                {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Kota</label>
                            <div class="col-md-9">
                                {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Kode Pos</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="kodepos" value="{{Input::old('kodepos')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Telepon / HP</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="telp" value="{{Input::old('telp')}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Captcha</label>
                            <div class="col-md-9">
                                {{ HTML::image(Captcha::img(), 'Captcha image') }}
                                {{Form::text('captcha','',array('class'=>'form-control captcha','placeholder'=>'Kode captcha'))}}
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="readme" id="inlineCheckbox1" value="1" required checked> Saya telah membaca dan menyetujui <a id="tos" target="_blank" href="{{url('service')}}"><b>Syarat dan Ketentuan</b></a> di {{Theme::place('title')}}
                        </div>
                        <div class="register">
                            <input type="submit" class="btn btn-warning" value="Register">
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</section>