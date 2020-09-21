<div class="row">
    <div class="col-12 bg-primary text-white">
        <h3>    @if(isset($title)) 
                    {{$title}}
                @else 
                    The EasyLearn Academy
                @endif
        </h3>
        <p>
           {{$slot}}
        </p>
    </div>
</div>