<div class="row">
    <div class="col-12 col-lg-5 pr-lg-0">
        <div class="relative crop-img news-img-height" style="width: 100%;">
            <img style="width: 100%; margin:0 0 -133.3% 0;" src="uploads/{{$ultimanoticia->foto}}" class="absolute news-img-height" alt="Responsive image">
            <div class="relative">
                <div class="news-title-padding-top">
                    <blockquote class="blockquote mb-4">
                        <p class="mb-0 h5"><a class="MyriadProSemibold color-white text-uppercase" href="#">{{$ultimanoticia->titulo}}</a></p>
                        <p class="mb-0 MyriadProSemiboldIt h5"><a class="color-white" href="#">{{$ultimanoticia->subtitulo}}</a></p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-7 px-5 px-lg-0">
        <div class=" d-flex flex-row justify-content-center px-5 px-lg-0">
            <div class="px-5 px-lg-0 pr-lg-5 news-img-height">
                <div class="py-5 px-5 pb-lg-0 pt-lg-0">
                    <p class="MyriadProRegular news-font-size mb-0" id="cuerpo">{{$ultsubcadena}} </p>
                    <div class="nav-principal-news-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class=" ">
                                @if($ultback==0&&$ultnext==1)
                                <button class="btn btn-outline-success rounded-circle" id="anteriorultnoticia" ><span class="zmdi zmdi-chevron-left"></span></button>

                                @else
                                <button class="btn btn-outline-success rounded-circle" id="anteriorultnoticia" ><span class="zmdi zmdi-chevron-left"></span></button>

                                @endif   
                                <label class="m-t-10" id> <label id="actualultimanoticia" >1</label> de <label id="totalultnoticias">{{$ultespacio+1}}</label> </label>
                                @if($ultback==$ultespacio-1)
                                <button class="btn btn-outline-success rounded-circle" id="sig_ultnoticias" ><span class="zmdi zmdi-chevron-left"></span></button>

                                @else
                                <button class="btn btn-outline-success rounded-circle" id="sig_ultnoticias" ><span class="zmdi zmdi-chevron-right"></span></button>

                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>