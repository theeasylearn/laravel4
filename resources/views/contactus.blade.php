@extends("master")
@section("title")
    Contact us - The EasyLearn Academy
@endsection
@section("menu")
    <ul>
        @foreach($links as $key=>$value)
        <li><a href="{{$key}}">{{$value}}</a></li>
        @endforeach
    </ul>
@endsection
@section("content")
    <h2>Contact Us</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquid, explicabo aliquam quasi architecto minus beatae obcaecati error temporibus. Rem, eius deleniti. Quos dolorum tempora sint cupiditate asperiores fuga deleniti. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam soluta repudiandae numquam cupiditate vel possimus iure distinctio facilis. Magni, deleniti officiis repellat expedita reprehenderit cumque cum exercitationem eum laboriosam quia? <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta ex alias suscipit vel reiciendis dolore saepe optio officia minus fugiat fugit nobis at eius, adipisci, incidunt cumque debitis quod cupiditate!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquid, explicabo aliquam quasi architecto minus beatae obcaecati error temporibus. Rem, eius deleniti. Quos dolorum tempora sint cupiditate asperiores fuga deleniti. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam soluta repudiandae numquam cupiditate vel possimus iure distinctio facilis. Magni, deleniti officiis repellat expedita reprehenderit cumque cum exercitationem eum laboriosam quia? <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta ex alias suscipit vel reiciendis dolore saepe optio officia minus fugiat fugit nobis at eius, adipisci, incidunt cumque debitis quod cupiditate!</p>
@endsection
@section("footer")
    <p align=center>coptyright @ {{date("Y")}} The easylearn Academy</p>
        <p>this content is appended</p>
@endsection