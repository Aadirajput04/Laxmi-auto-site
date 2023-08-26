<header class="side-padding page-width">
  <?php
function isCurrentPage($pageName)
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName;
}
?>
  <div id="brand"><a href="/"><img src="./img/navbar-logo.png" alt=""></a></div>
  <nav>
    <ul >
      <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
      </li>
      <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a></li>
      <li><a <?php if (isCurrentPage('product.php')) echo 'class="active-nav"' ; ?> href="./product.php" >
        Product</a></li>
      <li><a <?php if (isCurrentPage('review.php')) echo 'class="active-nav"' ; ?> href="./review.php" >
          Reviews</a></li>
      <li><a <?php if (isCurrentPage('f&q.php')) echo 'class="active-nav"' ; ?> href="./f&q.php" >
        FAQ'S</a></li>
          <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
            Contact Us</a></li>
  

    </ul>
  </nav>
  <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <ul class="mobile-menu">
      <li><a <?php if (isCurrentPage('index.php')) echo 'class="active-nav"' ; ?> href="./index.php" > Home</a>
      </li>
      <li><a <?php if (isCurrentPage('about.php')) echo 'class="active-nav"' ; ?> href="./about.php" >About</a></li>
      <li><a <?php if (isCurrentPage('product.php')) echo 'class="active-nav"' ; ?> href="./product.php" >
        Product</a></li>
      <li><a <?php if (isCurrentPage('review.php')) echo 'class="active-nav"' ; ?> href="./review.php" >
          Reviews</a></li>
      <li><a <?php if (isCurrentPage('f&q.php')) echo 'class="active-nav"' ; ?> href="./f&q.php" >
        FAQ'S</a></li>
          <li><a <?php if (isCurrentPage('contact.php')) echo 'class="active-nav"' ; ?> href="./contact.php" >
            Contact Us</a></li>

    </ul>
  </div>
</header>
<script>
  function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
  }
</script>