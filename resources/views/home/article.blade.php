<section class="articles" id="articles">
    <h1 class="heading">What's <span>Happening?</span></h1>

    <div class="box-container">
        @foreach ($posts as $allPost)
        <div class="box">
            <div class="image">
                <img src="{{ asset('postimage/' . $allPost->image) }}" alt="" />
            </div>
            <div class="content">
                <a href="{{ route('home.post_details', $allPost->id) }}" class="title">{{ $allPost->title }}</a>
                <span>{{ $allPost->usertype }}</span>
                <p>{{ $allPost->created_at }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
