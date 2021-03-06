<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- we use cdn for bootstrap css file  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- this is simple html commant using html  -->
</head>
<body>
    {{-- this is blade comments generated by laravel and it will not be displayed in web page source --}}
    <div class="container">
        @component("advertise",["heading"=>"The Times of India","content"=>"India Leading English News paper"])

        @endcomponent
        @component("contact")
        
        Whatsup : 9662512857 <br>
        Web : <a href="http://www.theeasylearnacademy.com" class="text-white">http://www.theeasylearnacademy.com</a>
        @endcomponent
        <div class="row">
                @component("product")
                    @slot("title")
                        First Product 
                    @endslot
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio eos necessitatibus asperiores perferendis itaque perspiciatis accusamus laborum molestiae recusandae esse amet magni, blanditiis saepe nihil id soluta ea voluptatibus. Quos.  <br>
                   
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis distinctio repudiandae esse ipsa ratione. Nulla asperiores fugit tempore, laboriosam beatae aliquid vero esse consectetur accusantium mollitia consequatur adipisci error animi?
                @endcomponent
                @component("product")
                    @slot("title")
                        Second Product 
                    @endslot
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nemo cupiditate saepe alias architecto iusto officiis adipisci repellat neque, tempora inventore natus ipsam modi perspiciatis molestias quia ex illo magni. <br>

                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ea nesciunt explicabo id libero? Repellat culpa provident repellendus molestiae rem omnis, voluptate distinctio voluptatum quibusdam magni dignissimos ipsa, beatae dolor!
                @endcomponent
        </div>
        @component("contact")
        @slot("title")
            IT Experts Academy
        @endslot
        Whatsup : 9328419274 <br>
        Web : <a href="http://www.theeasylearnacademy.com" class="text-white">http://www.theeasylearnacademy.com</a>
        @endcomponent

        @component("advertise",["heading"=>"Safari","content"=>"Gujarat's Leading Science Magazine"])

@endcomponent
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>