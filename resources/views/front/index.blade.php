@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="main">
        <div class="main-title">

            <h3 class="main-title__txt">Company Name</h3>
            <div class="main-title__underline"></div>
        </div>

        <div class="main-about">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur maiores praesentium expedita totam, quidem quia! Officia adipisci vero, nobis accusantium optio rerum autem in sunt aperiam non, obcaecati, reiciendis numquam. Blanditiis repellendus nam ex aspernatur cum sed. Aliquam maxime placeat delectus impedit quam eveniet libero saepe esse rem dignissimos? Cupiditate veniam est accusamus nam libero repellat, possimus fugit nemo magni aut corrupti! Dolorum earum neque animi maxime molestias atque voluptates consectetur corporis ullam, impedit eligendi illum delectus repellendus adipisci est consequuntur, odit laudantium quia totam officia doloribus nihil facilis? Cumque reiciendis aliquam at et. Deleniti ad voluptatibus sed, corrupti dolor quos obcaecati similique. Ratione deserunt tenetur voluptatem odit harum soluta ut asperiores voluptas obcaecati maiores ad nam et blanditiis ipsam, dolores pariatur. Maxime, quis? Nemo tempora expedita necessitatibus facilis id. Tempora accusantium magni minus voluptas itaque non molestiae eius quidem officia natus commodi nostrum, cum iure maiores eos culpa eum laboriosam iste debitis dignissimos recusandae eaque dolore. Earum nam sapiente laborum molestiae est saepe et pariatur, amet reprehenderit vel ducimus perferendis cum. Quis, placeat? Ab magnam at dolores sunt facere quo vel repellat! Error, eaque, hic eveniet vel iste laboriosam non, iure totam sunt deleniti deserunt explicabo corrupti nesciunt?
            <img class="main-about__img" src="{{asset('imgs/home/randimg.png')}}">
        </div>

    </div>
</section>



@include('layouts.footer')
@stop