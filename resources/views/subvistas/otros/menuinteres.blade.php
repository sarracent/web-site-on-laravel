<div class="border-left-recent-news px-lg-5">
        <div class="d-flex flex-column flex-lg-row height-important-links mt-2 pt-2 menuinteres">
            <?php
            ?>
             @if(count($interes)%2==0)
            <div class="d-flex flex-column flex-lg-row">
                <div class="d-flex flex-column">
                    @for($i=0;$i < count($interes)/2; $i++)
                    <p><a class="MyriadProRegular progranm news-font-size color-dark-gray"  href="{{$interes[$i]->contenido}}" target="_blank">{{$interes[$i]->titulo}}</a>
                    </p>
                    @endfor
                </div>
                <div class="d-flex pl-lg-5 flex-column">
                    @for($i=count($interes)/2;$i < count($interes); $i++)
                    <p><a class="MyriadProRegular progranm news-font-size color-dark-gray"  href="{{$interes[$i]->contenido}}" target="_blank">{{$interes[$i]->titulo}}</a>
                    </p>
                    @endfor
                </div>
            </div>
            @else
            <div class="d-flex flex-column flex-lg-row">
                <div class="d-flex flex-column">
                    @for($i=0;$i < count($interes)/2+0.5; $i++)
                    <p><a class="MyriadProRegular progranm news-font-size color-dark-gray"  href="{{$interes[$i]->contenido}}" target="_blank"> {{$interes[$i]->titulo}}</a>
                    </p>
                    @endfor
                </div>
                <div class="d-flex pl-lg-5 flex-column">
                    @for($i=count($interes)/2+0.5;$i < count($interes); $i++)
                    <p><a class="MyriadProRegular progranm news-font-size color-dark-gray"  href="{{$interes[$i]->contenido}}" target="_blank"> {{$interes[$i]->titulo}}</a>
                    </p>
                    @endfor
                </div>
            </div>
            @endif
        </div>  
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".menuinteres p a").click(function (e) {
            var ur = $(this).attr('href');
            e.preventDefault();

            $.ajax({
                async: false,
                type: 'POST',
                url: "otros/noticiainteres",
                data: "id=" + parseInt(ur),
                success: function (data) {
                    $("#contenido").html(data);
                }
            });
            return false;
        });
    });
</script>