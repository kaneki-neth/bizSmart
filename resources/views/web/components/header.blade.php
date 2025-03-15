<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">
    <a href="/" class="logo d-flex align-items-center me-auto">
      <img src="{{url('web/assets/img/mainlogo.png')}}" data-aos="fade-in">
    </a>
    <nav id="navmenu" class="navmenu">
      <ul class="nav-items">

        <li class="dropdown"><a href="#" id="nav-about"><span>About MATIX +</span></a>
          <ul>
            <li><a href="/vision_mission">Vision & Mission</a></li>
            <li><a href="/core_programs">Core Programs</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="#" id="nav-archive"><span>Materials Library +</span></a>
          <ul>
            <li><a href="/digital_archive_new">New Materials Developed</a></li>
            <li><a href="/digital_archive">Materials Archive</a></li>
          </ul>
        </li>

        <li><a href="/events" id="nav-events">News and Events</a></li>
        <li><a href="/contact" id="nav-contact">Connect</a></li>
      </ul>

      <div class="search-bar">
        <input type="text" name="email" placeholder="Search">
      </div>

      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>
</header>

<script>
  document.querySelector('.search-bar').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      const query = event.target.value;
      if (query) {
        // window.location.href = `/digital_archive?page=1&search=${encodeURIComponent(query)}`;
        window.location.href = `/search_content/${encodeURIComponent(query)}`;
      }
    }
  });
</script>