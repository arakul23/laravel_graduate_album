@include("layouts/head")
@include("layouts/header")
<section id="next-section">
    <div class="container-fluid">
        <div class="center-block">
            @foreach($studentInfo as $student)
                <div class="text-center">
                    <img src="/public/img/noimg.jpg" class="center-block" alt="{{$student['name']." ".$student['surname']." ".$student['patronymic']}}" class="img-responsive">
                    <div class="probootstrap-text-overlay">
                        <h3>{{$student['name']." ".$student['surname']." ".$student['patronymic']}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include("layouts/footer")
