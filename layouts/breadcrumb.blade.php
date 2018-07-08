<?php
    $uri            = Route::current()->Uri();
    $ruta_explode   = explode('/',$uri);
    $last_array     = last($ruta_explode);
?>
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <?php $val_url = ''?>
                <li><a href="{{asset('/')}}"><i class="entypo-folder"></i> DASHBOARD</a></li>
                @if(isset($ruta_explode) count($ruta_explode)>0)
                    @foreach ($ruta_explode as $val)
                    <?php $val_url .= $val ?>
                      <li>
                        @if($last_array!=$val)
                        <a href="{{ asset($val_url) }}">
                            {{ ucfirst($val) }}
                        </a>
                        @else
                            {{ ucfirst($val) }}
                        @endif
                      </li>
                    <?php $val_url .= '/'?>
                    @endforeach
                @endif
            </ol>
        </div>
    </div>
