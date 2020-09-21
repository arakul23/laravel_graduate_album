@include("layouts/head")
@include("layouts/header")
<section id="next-section">
    <div class="container-fluid">
        <div class="row probootstrap-gutter0">
            @foreach($departments as $department)
                <div class="col-md-4 col-sm-6">
                    <a href="{{url('students', ['departmentId' => $department->id])}}" class="probootstrap-hover-overlay">
                        <img src="{{$department['photo']}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                        <div class="probootstrap-text-overlay">
                            <h3>{{$department['name']}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include("layouts/footer")
