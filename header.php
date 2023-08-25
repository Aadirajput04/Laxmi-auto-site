<header class="side-padding page-width">
    <div id="brand"><a href="/"><img src="./img/navbar-logo.png" alt=""></a></div>
    <nav>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/products">About us</a></li>
        <li><a href="/about">Products</a></li>
        <li><a href="/home">Review</a></li>
        <li><a href="/products">FAQ'S</a></li>
        <li><a href="/about">Contact us</a></li>
       
      </ul>
    </nav>
    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu">
        <li><a href="/home">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/home">Review</a></li>
        <li><a href="/products">FAQ'S</a></li>
        <li><a href="/about">Contact us</a></li>
        
      </ul>
    </div>
  </header>
  <script>
    function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}
  </script>