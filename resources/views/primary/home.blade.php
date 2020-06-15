@extends('layouts.mainLayout')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url(css/image1_mob.jpg)">
                <div class="carousel-caption text-center">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(css/image2_mob.jpg);">
                <div class="carousel-caption">
                    <h5 style="color: #636b6f; margin-bottom: 0.1rem">SALES EVERYWHERE</h5>
                    <a class="btn" href="">Read more</a>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url(css/image3_mob.jpg);">
                <div class="carousel-caption">
                    <a class="btn" id="join" href="">Join us</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate distinctio ducimus error laboriosam
            magni maxime nobis odio perferendis possimus, quaerat qui sequi, ullam! A animi asperiores, aut consectetur
            cupiditate deserunt distinctio eaque enim eum eveniet explicabo fugiat illum in inventore ipsam labore maiores
            nemo porro possimus quia reiciendis ullam vel! Consequatur cupiditate doloribus, ea error expedita harum hic
            illum molestias neque nesciunt placeat quam quos reiciendis reprehenderit sapiente sint tempora tempore
            temporibus, velit veritatis. A adipisci amet at atque, blanditiis corporis culpa debitis dolore dolores
            doloribus esse exercitationem facere fugit illo in ipsam iusto laborum, magnam minus molestiae mollitia nam
            natus omnis perspiciatis placeat provident quae quas quis quod quos, rem repellat repellendus sint temporibus
            ullam voluptate voluptatem. Aperiam architecto consequatur deleniti deserunt ducimus eaque error impedit
            laudantium libero maiores molestiae mollitia nihil numquam obcaecati odit porro quam ratione repellat sint,
            tempora veritatis voluptatem voluptatum. Magnam nam provident recusandae saepe sint. Accusamus amet aperiam at
            consequuntur cupiditate doloribus eius eligendi esse, expedita illo illum ipsa itaque modi nobis non nulla
            obcaecati officia officiis optio perferendis perspiciatis quia quisquam sit soluta sunt tenetur ut? Doloribus
            ducimus fugiat quam quod, similique tempora veniam voluptatum. Eos facilis maiores optio! Fuga, minus,
            voluptas.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloribus enim excepturi ipsum magni repellat
            tempora. Ab autem cum cumque delectus ducimus eligendi exercitationem facere id impedit ipsum iste iure odit
            provident quia quos reprehenderit, saepe sapiente sit tempora veniam. Adipisci amet ea incidunt labore nesciunt
            quaerat quasi quo saepe. Consequuntur corporis, debitis delectus eos odit reiciendis voluptate? Commodi,
            corporis dolores eligendi est eum laborum neque rerum soluta? Consequatur consequuntur delectus dicta labore
            minima provident quis soluta tempora vero voluptatum. A autem doloremque dolorum nam nesciunt reiciendis
            repellendus sint! Culpa, deserunt dolorem doloribus illum magnam provident quisquam reiciendis vitae
            voluptate.</p>
    </div>


@endsection
