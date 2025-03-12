@extends('web.layout.default')

@section('content')
  <main class="main-news">
    <div class="news-wrapper container">
      <h1 class="news-title">News & Events</h1>

      <div class="content-layout">
        <div class="sidebar-news">
          <label>
            <input type="radio" name="category" value="news" checked />
            News
          </label>
          <label>
            <input type="radio" name="category" value="research" />
            Research
          </label>
          <label>
            <input type="radio" name="category" value="blogs" />
            Blog
          </label>
          <label>
            <input type="radio" name="category" value="events" />
            Events
          </label>
          <label>
            <input type="radio" name="category" value="videos" />
            Videos
          </label>
        </div>

          <!-- News section -->
        <div class="news-section"></div>
      </div>
    </div>
  </main>

  <script src="/assets/js/jquery-3.6.4.min.js"></script>

  <script>

    $("#nav-events").addClass("active");

    // Simple JavaScript to handle the category switching
    document.addEventListener("DOMContentLoaded", function () {

      const radioButtons = document.querySelectorAll(
        'input[name="category"]'
      );
      const categoryContents = document.querySelectorAll(".category-content");

      // Add event listeners to radio buttons
      radioButtons.forEach((radio) => {
        radio.addEventListener("change", function () {
        if (this.checked) {
          // Hide all categories
          categoryContents.forEach((content) => {
          content.classList.remove("active");
          });

          // Show selected category
          const selectedCategory = document.getElementById(this.value);
          if (selectedCategory) {
          selectedCategory.classList.add("active");
          }
        }
        });
      });

      function truncateToWordCount(element, wordCount) {
        // Get the full text from data attribute (if available) or from the element's text content
        const fullText = element.getAttribute('data-full-text') || element.textContent;
        const words = fullText.split(/\s+/);

        if (words.length <= wordCount) {
        return; // No need to truncate
        }

        element.textContent = words.slice(0, wordCount).join(' ') + '...';
      }

      // Apply word limit to all card excerpts (alternative to CSS-only solution)
      document.querySelectorAll('.card-excerpt').forEach(excerpt => {
        truncateToWordCount(excerpt, 10); // Truncate to 25 words
      });

      document.querySelectorAll('.card-title-video').forEach(excerpt => {
        truncateToWordCount(excerpt, 8); // Truncate to 25 words
      });



    });


    function fetchThumbnail(urlValue, element) {
    // Find the specific thumbnail inside this particular card
    const thumbnailPreview = element.querySelector("#thumbnailPreview");
    const thumbnailPlaceholder = element.querySelector("#thumbnailPlaceholder");

    let url = urlValue.trim();
    if (!url) {
      thumbnailPreview.style.display = "none";
      thumbnailPlaceholder.style.display = "block";
      return;
    }

    // Show loading state
    thumbnailPlaceholder.innerHTML = '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>';

    fetch(`/fetch-thumbnail?url=${encodeURIComponent(url)}`)
      .then(response => response.json())
      .then(data => {
      if (data.thumbnail) {
        thumbnailPreview.src = data.thumbnail;
        thumbnailPreview.style.display = "block";
        thumbnailPlaceholder.style.display = "none";
      } else {
        thumbnailPreview.style.display = "none";
        thumbnailPlaceholder.innerHTML = '<i class="fa fa-exclamation-circle fa-3x mb-2"></i><p>Could not load thumbnail</p>';
        thumbnailPlaceholder.style.display = "block";
      }
      })
      .catch(error => {
      console.error('Error fetching thumbnail:', error);
      thumbnailPreview.style.display = "none";
      thumbnailPlaceholder.innerHTML = '<i class="fa fa-exclamation-circle fa-3x mb-2"></i><p>Error loading thumbnail</p>';
      thumbnailPlaceholder.style.display = "block";
      });
    }
  </script>

  <script>
    $(document).ready(function () {
      var queryString = window.location.search;
      var urlParams = new URLSearchParams(queryString);

      var category = urlParams.get('category');
      if (category) {
        $('input[name="category"][value="' + category + '"]').prop('checked', true);
      }

      var page = urlParams.get('page');
      if (page) {
        fetchData(page);
      } else {
        fetchData();
      }
    });

    $('input[name="category"]').change(function () {
      fetchData();
    });

    function paginate(element) {
      var page = element.innerText;
      if (page === '‹') {
        page = parseInt($('.pagination .active').text()) - 1;
      } else if (page === '›') {
        page = parseInt($('.pagination .active').text()) + 1;
      }
      fetchData(page);
    }

    function fetchData(page=null) {
      var category = $('input[name="category"]:checked').val();
      var url = window.location.href.split('?')[0] + '?category=' + category;

      if (page) {
        url += '&page=' + page;
      }

      window.history.pushState({ path: url }, '', url);

      $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
          $('.news-section').html(response);
        },
        error: function (error) {
          console.log('error:', error);
        }
      });
    }
  </script>
@endsection