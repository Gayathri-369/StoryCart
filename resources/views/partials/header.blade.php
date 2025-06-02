


<header class="navbar">
    <div class="logo-alt">
        <i class="fas fa-book-open-reader"></i>
        <span class="logo-text">
            <span class="brand-primary">Story</span><span class="brand-secondary">Cart</span>
        </span>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>
    <nav>
        <ul id="navbar-menu" style="list-style-type: none; padding: 0; display: flex; gap: 20px;">
            <form action="{{ route('books.search') }}" method="GET" style="margin-left: 20px; display: flex; align-items: center;">
        <input type="text" name="query" placeholder="Search books..." style="padding: 6px 12px; border: 1px solid #ccc; border-radius: 20px 0 0 20px;">
        <button type="submit" style="padding: 6px 12px; border: 1px solid #ccc; background-color: #1a4d5c; color: white; border-radius: 0 20px 20px 0;">🔍</button>
    </form>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Home</a></li>
            <li><a href="#book" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Book</a></li>
            <li><a href="#about" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">About Us</a></li>
            <li><a href="#contact" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Contact</a></li>
            <li><a href="#login-section" style="text-decoration:none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'">Log In</a></li>
            <li><a href="#" style="text-decoration: none; color: #2c3e50;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#2c3e50'"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        
    </nav>

</header>

