<section id="main-content">
    <div class="breadcrumb">
        <div>
            <a href="{{url::to('home')}}" title="Home">Home</a> /
            <span class="active">Syarat dan Ketentuan</span>
        </div>
    </div>
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(count(list_blog_category()) > 0)
            <div id="categories" class="block">
                <div class="title"><h2>Kategori</h2></div>
                <ul class="block-content">
                @foreach(list_blog_category() as $kat)
                    @if(!empty($kat->nama)) 
                    <li><a href="{{blog_category_url($kat)}}">{{$kat->nama}} </a></li>
                    @endif
                @endforeach
                </ul>
            </div>
            @endif
            @if(count(best_seller()) > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Produk Terlaris</h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $bestproduk)
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama,array('class'=>'best','title'=>$bestproduk->nama))}}
                            </div>
                            <p class="product-name">{{short_description($bestproduk->nama,12)}}</p>
                            <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more"><a href="{{url::to('produk')}}">produk lainnya >></a></div>
            </div>
            @endif
            @if(count(list_blog()) > 0)
            <div id="latest-news" class="block">
                <div class="title"><h2>Artikel Terbaru</h2></div>
                <ul class="block-content">
                    @foreach(list_blog(5) as $artikel)
                    <li>
                        <div class="img-block"></div>
                        <h5 class="title-news">{{short_description($artikel->judul, 20)}}</h5>
                        <p>{{short_description($artikel->isi, 46)}} <a class="read-more" href="{{blog_url($artikel)}}">Selengkapnya</a></p>
                        <span class="date-post">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div id="center_column" class="inner-bg col-lg-9 col-xs-12 col-sm-8">
            <!-- <h3 class="title">Layanan Pelanggan</h3> -->
            <div class="register-page">
                <article class="col-lg-12 col-md-12 col-xs-12">
                    <h4>Kebijakan Layanan</h4>
                    <p>{{$service->tos}}</p>
                </article>
                <div class="clearfix"></div>
                <hr>
                <article class="col-lg-12 col-md-12 col-xs-12">
                    <h4>Kebijakan Pengembalian</h4>
                    <p>{{$service->refund}}</p>
                </article>
                <div class="clearfix"></div>
                <hr>
                <article class="col-lg-12 col-md-12 col-xs-12">
                    <h4>Kebijakan Privasi</h4>
                    <p>{{$service->privacy}}</p>
                </article>
            </div>
        </div>
    </div>
</section>