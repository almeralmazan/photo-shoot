<div id="container">
    <header>
    <div id="logo">
        {{ HTML::image('images/logo.jpg', '', ['width' => '412', 'height' => '123']) }}
    </div>
    <div id="socials">
        <ul>
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="https://twitter.com"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <nav>
        <ul>
            <li>
                <a href="{{ URL::to('/') }}">HOME</a>
            </li>
            <li>
                <a href="{{ URL::to('services') }}">SERVICES</a>
            </li>
            <li>
                <a href="{{ URL::to('galleries') }}">GALLERIES</a>
            </li>
            <li>
                <a href="{{ URL::to('about-us') }}">ABOUT US</a>
            </li>
            <li>
                <a href="{{ URL::to('contact') }}">CONTACT US</a>
            </li>
        </ul>
    </nav>
</header>
