<section class="categories" id="categories">
    <h1 class="heading"><span> What Are You </span> Searching For?</h1>
    <p>Find thousands of foods and their respective calorie information.</p>

    <div class="cat-container">
        <div class="cat">
            <img src="{{ asset('images/fvs.png') }}" alt="" />
            <h3>Fruit & Vegetables</h3>
            <a href="{{ route('categories.fnv') }}" class="btn">See More</a>
        </div>

        <div class="cat">
            <img src="{{ asset('images/mdp.png') }}" alt="" />
            <h3>Milk, Dairy Products</h3>
            <a href="{{ route('categories.mdp') }}" class="btn">See More</a>
        </div>

        <div class="cat">
            <img src="{{ asset('images/meat.png') }}" alt="" />
            <h3>Meat</h3>
            <a href="{{ route('categories.meat') }}" class="btn">See more</a>
        </div>
    </div>
</section>