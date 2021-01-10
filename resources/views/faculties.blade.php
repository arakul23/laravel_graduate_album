@include("layouts/head")
@include("layouts/header")
<section id="next-section">
    <div class="container-fluid">
        <div class="row probootstrap-gutter0">
            @foreach($faculties as $facultie)
                <div class="col-md-4 col-sm-6">
                    <a href="{{url('departments', ['facultieId' => $facultie->id])}}" class="probootstrap-hover-overlay">
                        <img src="{{$facultie['photo']}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                        <div class="probootstrap-text-overlay">
                            <h3>{{$facultie['name']}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include("layouts/footer")
