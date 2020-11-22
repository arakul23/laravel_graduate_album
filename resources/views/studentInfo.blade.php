@include("layouts/head")
@include("layouts/header")
<link href="{{ asset('../packages/slick-1.8.1/slick/slick.css') }}" rel="stylesheet">
<link href="{{ asset('../packages/slick-1.8.1/slick/slick-theme.css') }}" rel="stylesheet">
<link href="{{ asset('../packages/lightbox/lightbox.css') }}" rel="stylesheet">
<section id="next-section">
    <div class="container-fluid">
        <div class="center-block">
            @foreach($studentInfo as $student)
                <div class="text-center">
                    <img src="<?= isset($student->photo[0]->url) ? $student->photo[0]->url : "/public/img/noimg.jpg"?>" class="center-block" alt="{{$student['name']." ".$student['surname']." ".$student['patronymic']}}" class="img-responsive">
                    <div class="probootstrap-text-overlay">
                        <h3>{{$student['name']." ".$student['surname']." ".$student['patronymic']}}</h3>
                    </div>
                </div>
                <div class="student_photo_slider">
                    @foreach($student->photo as $photo)
                        <div><img src="{{$photo->url}}"></div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
@include("layouts/footer")
<script src="{{asset('../packages/slick-1.8.1/slick/slick.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.student_photo_slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000
        });
    })
</script>
