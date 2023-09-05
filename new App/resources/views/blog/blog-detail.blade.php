@extends('frontend.layouts.app')
@section('frontendcontent')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>{{$getBlogPageDetail['category']['name']}}. {{date('d-M-Y',strtotime($getBlogPageDetail['created_at']))}} </h6>
                <h2 class='title'>{{$getBlogPageDetail['name']}}</h2>
                <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs.</p>
                <img src='{{asset($getBlogPageDetail['image'])}}' class='blogcontent' alt=''/>
                {!! $getBlogPageDetail['description'] !!}
                {{-- <p>We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern JavaScript libraries like React.js but I like to use whatever is best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.</p> --}}
                {{-- <p>But in order that you may see whence all this born error of those who accuse pleasure and praise pain, I will open the whole matter, and explain the very things which were said by that discoverer of truth and, as it were, the architect of a happy life.</p> --}}
           
           
            </div>
        </div>
        {{-- <div class='row mt-3'>
        <img src='assets/images/blogcontent2.png' class='blogcontent' alt=''/>
        </div>
        <div class="row">
            <h3 class='subtitle'>JavaScript</h3>
            <p>We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern javascript libraries like React.js but I like to use whatever is best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.</p>

            <h3 class='subtitle'>Fremework</h3>
            <p>Always ready to push the boundaries, especially when it comes to our own platform, Our analytical eye to create a site that was visually engaging and also optimised for maximum performance. It also perfectly reflects the journey to help it tell a story to increase its understanding and drive action. To create a site that was visually engaging for maximum performance.</p>
            <ul class='blogdetail-list'>
                <li>Brand Development</li>
                <li>UX/UI Design</li>
                <li>Front-end Development</li>
                <li>Copywriting</li>
                <li>Shopify Development</li>
            </ul>
        </div>
        <div class="row">
            <h3 class='subtitle'>Visual Studio</h3>
            <p>Just like other pseudo-elements and pseudo-class selectors, :not() can be chained with other pseudo-classes and pseudo-elements. For example, the following will add a “New!” word to list items that do not have a .old class name, using the ::after pseudo-element:</p>
            <img src='assets/images/blogcontent3.png' class='blogcontent' alt=''/>
        </div> --}}
    </div>
</section>

{{-- <section class='blogarticle'>
    <div class="container">
        <div class='row mt-3'>

            <h2 class='title'>Related Articles</h2>

            <div class="col-lg-4 col-md-6">
                <div class='card blogcard'>
                    <img src='assets/images/blog04.png'  alt='' />
                    <div class='blogcard-body'>
                        <p>UI Design. 15-March-2023</p>
                        <h3 class='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                        <Link href='/blogdetails'>read more</Link>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class='card blogcard'>
                    <img src='assets/images/blog08.png'  alt='' />
                    <div class='blogcard-body'>
                        <p>UI Design. 15-March-2023</p>
                        <h3 class='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                        <Link href='/blogdetails'>read more</Link>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class='card blogcard'>
                    <img src='assets/images/blog06.png'  alt='' />
                    <div class='blogcard-body'>
                        <p>UI Design. 15-March-2023</p>
                        <h3 class='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                        <Link href='blogdetails.html'>read more</Link>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
@endsection
@push('scripts')
@endpush