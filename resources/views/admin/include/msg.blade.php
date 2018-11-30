
@if (session('status'))
    <div class="alert successPlace alert-sm alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> {{ session('status') }}
    </div>

    <script type="text/javascript">
        setTimeout(function () {
            $('.successPlace').fadeOut('slow');
        },5000)
    </script>
    
@endif

@if (count($errors) > 0)
    
       
            @foreach ($errors->all() as $error)
                <div class="alert allDanger alert-sm alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> {{ $error }}
                </div>                    
                
            @endforeach
            <script type="text/javascript">
        setTimeout(function () {
            $('.allDanger').fadeOut('slow');
        },5000)
    </script>
        </ul>
    
@endif


