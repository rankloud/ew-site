<li class="dropdown"><a href="#">Home</a>
    <ul>
        <li><a href="{{ route('home') }}">Web Design Agency</a></li>
        <li><a href="{{ route('indexTwo') }}">Social Media Marketing</a></li>
        <li><a href="{{ route('indexThree') }}">SEO Agency</a></li>
        <li><a href="{{ route('indexFour') }}">Video Marketing</a></li>
        <li><a href="{{ route('indexFive') }}">Web Development</a></li>
    </ul>
</li>
<li><a href="{{ route('about') }}">About</a></li>
<li class="dropdown"><a href="#">Services</a>
    <ul>
        <li><a href="{{ route('services') }}">Services 01</a></li>
        <li><a href="{{ route('servicesTwo') }}">Services 02</a></li>
        <li><a href="{{ route('serviceDetails') }}">Service Details</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">Shop</a>
    <ul>
        <li><a href="{{ route('shop') }}">All Products</a></li>
        <li><a href="{{ route('productDetails') }}">Product Details</a></li>
        <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
        <li><a href="{{ route('checkout') }}">Checkout</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">Pages</a>
    <ul>
        <li><a href="{{ route('pricing') }}">Pricing</a></li>
        <li><a href="{{ route('faqs') }}">faqs</a></li>
        <li class="dropdown"><a href="#">Projects</a>
            <ul>
                <li><a href="{{ route('projectGrid') }}">Project Grid</a></li>
                <li><a href="{{ route('projectList') }}">Project List</a></li>
                <li><a href="{{ route('projectDetails') }}">Project Details</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#">Team</a>
            <ul>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
            </ul>
        </li>
        <li><a href="{{ route('contact') }}">Contact Us</a></li>
        <li><a href="{{ route('errorPage') }}">404 Error</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">blog</a>
    <ul>
        <li><a href="{{ route('blog') }}">blog Grid</a></li>
        <li><a href="{{ route('blogStandard') }}">blog Standard</a></li>
        <li><a href="{{ route('blogDetails') }}">blog details</a></li>
    </ul>
</li>