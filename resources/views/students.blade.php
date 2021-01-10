@include("layouts/head")
@include("layouts/header")
<section id="next-section">
    <div class="container-fluid">
        <div class="row probootstrap-gutter0">
            @foreach($students as $student)
                <div class="col-md-4 col-sm-6">
                    <a href="{{url('studentInfo', ['studentId' => $student->id])}}" class="probootstrap-hover-overlay">
                        <img src="/public/img/noimg.jpg" alt="{{$student['name']." ".$student['surname']." ".$student['patronymic']}}" class="img-responsive">
                        <div class="probootstrap-text-overlay">
                            <h3>{{$student['name']." ".$student['surname']." ".$student['patronymic']}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{ $students->links() }}
</section>
@include("layouts/footer")
