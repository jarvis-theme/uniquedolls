<footer>
    <div id="testimonial">
        <div class="img-testimonial col-lg-4">
        </div>
        <div class="col-lg-7 text-testi flexslider">
            <ul class="slides">
                @foreach(list_testimonial() as $key=>$value)
                <li>{{short_description($value->isi,136)}} ,<br><strong> {{$value->nama}}</strong></li>
                @endforeach
            </ul>
        </div>
        <div class="clr"></div>
    </div>
    <div class="top-footer">
        <div class="row">
            <div id="about-foot" class="col-xs-12 col-lg-4">
                <h4 class="title">Tentang Kami</h4>
                <div class="block-content">
                    <p>{{short_description(about_us()->isi,400)}} </p>
                </div>
            </div>
            @foreach(all_menu() as $key=>$menu)
              @if($key == '1' || $key == '2')
                <div id="links-foot" class="col-xs-12 col-lg-2">
                    <h4 class="title">{{$menu->nama}}</h4>
                    <div class="block-content">
                        <ul>
                        @foreach($menu->link as $link_menu)
                            @if($menu->id == $link_menu->tautanId)
                            <li><a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a></li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            @endforeach
            {{ Theme::partial('subscribe') }}   
        </div>
        <div class="row sosial">
            <div class="bank-logo col-sm-8">
                @if(list_banks()->count() > 0)
                    @foreach(list_banks() as $value)
                    <img src="{{bank_logo($value)}}" class="img-responsive" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}">
                    @endforeach
                @endif
                @if(count(list_payments()) > 0)
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal" />
                        @endif
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bank/ipaymu.jpg')}}" alt="Ipaymu" title="Ipaymu" />
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img class="img-responsive" src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" />
                        @endif
                    @endforeach
                @endif
                @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                <img class="img-responsive" src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" title="Doku" />
                @endif
            </div>
            <div class="social-media">
                @if(!empty($kontak->fb))
                <a href="{{url($kontak->fb)}}">
                    <div class="icon" title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                @endif
                @if(!empty($kontak->tw))
                <a href="{{url($kontak->tw)}}">
                    <div class="icon" title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
                @endif
                @if(!empty($kontak->gp))
                <a href="{{url($kontak->gp)}}">
                    <div class="icon" title="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </div>
                </a>
                @endif
                @if(!empty($kontak->pt))
                <a href="{{url($kontak->pt)}}">
                    <div class="icon" title="Pinterest">
                        <i class="fa fa-pinterest"></i>
                    </div>
                </a>
                @endif
                @if(!empty($kontak->tl))
                <a href="{{url($kontak->tl)}}">
                    <div class="icon" title="Tumblr">
                        <i class="fa fa-tumblr"></i>
                    </div>
                </a>
                @endif
                @if(!empty($kontak->ig))
                <a href="{{url($kontak->ig)}}">
                    <div class="icon" title="Instagram">
                        <i class="fa fa-instagram"></i>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>  &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="title-copyright" href="http://jarvis-store.com" target="_blank"> Jarvis Store</a></p>
    </div>
</footer>
{{pluginPowerup()}}