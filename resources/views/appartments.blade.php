@extends('hello')

@section('content')
    <section id="content">
        <div class="container_12">
            <div class="grid_8">
                <h2 class="top-1 p3">Home Pomorie</h2>
                <div class="wrap">
                    <img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
                    <div class="extra-wrap">
                        <p class="color-1 p6">Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae
                                              malesuada donec </p>
                        <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem
                           mattis eros posuere vitae tristique justo congue curabitur consectetur.</p>
                    </div>
                </div>
                <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta
                              dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus
                              vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
                <a href="{{ route('apartments.pomorie') }}" class="button">Read more</a>
                <h2 class="top-2 p3">Mortgage center</h2>
                <p class="color-1 p2">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                      dolore magna aliquyam erat, sed diam voluptua at vero eos et accusam.</p>
                <div class="wrap">
                    <img src="images/page3-img2.jpg" alt="" class="img-border img-indent">
                    <div class="extra-wrap">
                        <p>Et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                           Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                           nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
                    </div>
                </div>
                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                   sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                   diam nonumy eirmod.</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
@endsection