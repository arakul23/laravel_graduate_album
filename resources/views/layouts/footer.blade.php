<footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Появились вопросы или пожелания?</h3>
                    <textarea class="form-control" rows="4" placeholder="Напишите нам"></textarea>
                    <button class="btn btn-primary mt20">Отправить</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Часто просматриваемые факультеты</h3>
                    <ul class="probootstrap-product-list">
                        @foreach($facultiesByViews as $faculty)
                            <li>
                                <a href="{{route('departments', ['id' =>  $faculty['id']])}}">
                                    <figure><img src="{{$faculty['photo']}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                    <div class="text">
                                        <h4>{{$faculty['name']}}</h4>
                                        <p>Количество просмотров: {{$faculty['count_views']}}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Часто просматриваемые специальности</h3>
                    <ul class="probootstrap-blog-list">
                        @foreach($departmentsByViews as $department)
                            <li>
                                <a href="{{route('students', ['id' =>  $department['id']])}}">
                                    <figure><img src="{{$department['photo']}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                    <div class="text">
                                        <h4>{{$department['name']}}</h4>
                                        <p>Количество просмотров {{$department['count_views']}}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt40">
            <div class="col-md-12 text-center">
                <p>
                    <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Format</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Demo Images: Unsplash</small><br>
                    <a href="#" class="js-backtotop">Пролистать наверх</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{url('js/scripts.min.js')}}"></script>
<script src="{{url('js/main.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
