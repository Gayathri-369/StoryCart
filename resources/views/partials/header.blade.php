<header style="background-color: #003366; padding: 10px 20px; color: white;">
    {{-- <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <a href="{{ url('/') }}" style="color: white; font-size: 24px; font-weight: bold; text-decoration: none;">StoryCart</a>

        <nav>
            <ul style="list-style: none; display: flex; gap: 20px; margin: 0; padding: 0;">
                <li><a href="#about" style="color: white; text-decoration: none;">About</a></li>
                <li><a href="#books" style="color: white; text-decoration: none;">Books</a></li>
                <li><a href="#contact" style="color: white; text-decoration: none;">Contact</a></li>
                <li><a href="#login-section" style="color: white; text-decoration: none;">Login</a></li>
            </ul>
        </nav>
    </div> --}}

    <div class="menu-toggle" id="menu-toggle">&#9776;
    <nav>
        <ul id="navbar-menu" style="list-style-type: none; padding: 0; display: flex; gap: 20px;">
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Home</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Book</a></li>
            <li><a href="#about" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">About Us</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Contact</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Log In</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        <form action="{{ route('books.search') }}" method="GET" style="margin-left: 20px; display: flex; align-items: center;">
        <input type="text" name="query" placeholder="Search books..." style="padding: 6px 12px; border: 1px solid #ccc; border-radius: 20px 0 0 20px;">
        <button type="submit" style="padding: 6px 12px; border: 1px solid #ccc; background-color: #1a4d5c; color: white; border-radius: 0 20px 20px 0;">🔍</button>
    </form>
    </nav>
    </div>

</header>
