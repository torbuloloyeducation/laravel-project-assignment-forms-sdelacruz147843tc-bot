<style>
    nav {
        background: linear-gradient(to right, #1b4091, #262360);
        color: white;
        padding: 15px 0;
        box-shadow: 0 3px 8px rgba(46, 44, 44, 0.2);
    }

    .nav-container {
        width: 90%;
        max-width: 1000px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 15px;
        padding: 8px 12px;
        border-radius: 6px;
        transition: 0.3s;
    }

    .nav-links a:hover {
        background: rgba(49, 44, 44, 0.2);
    }
</style>

<nav>
    <div class="nav-container">
        <h2>MyWebsite</h2>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </div>
</nav>