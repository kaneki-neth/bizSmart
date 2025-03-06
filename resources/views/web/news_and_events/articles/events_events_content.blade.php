@extends('web.layout.default')

@section('content')
<main style="margin-bottom: 250px;" class="main-news">
      <div class="container">
        <div class="article-category">Events</div>
        
        <div class="row">
          <div class="col-lg-6">
            <h1 class="article-title">Matix UP Cebu Launch</h1>
            
            <div class="event-meta">
              <div class="event-meta-item">
                <i class="bi bi-calendar"></i>
                <span>Friday, March 21, 2025</span>
              </div>
              <div class="event-meta-item">
                <i class="bi bi-clock"></i>
                <span>10:00 AM PT</span>
              </div>
              <div class="event-meta-item">
                <i class="bi bi-geo-alt"></i>
                <span>Fabrication Laboratory UP Cebu</span>
              </div>
            </div>
            
            <div class="event-description">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ac purus et congue. Curabitur feugiat velit lorem, a efficitur dolor porttitor at. Aliquam rhoncus porta sem, vel eleifend lorem gravida in. Curabitur ullamcorper lectus at blandit ullamcorper. Fusce lorem nulla, commodo in commodo a, posuere vitae augue.</p>
            </div>
            
            <div class="more-details">
              <h2 class="more-dets-events">More details</h2>
              
              <div class="detailed-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor ac purus et congue. Curabitur feugiat velit lorem, a efficitur dolor porttitor at. Aliquam rhoncus porta sem, vel eleifend lorem gravida in. Curabitur ullamcorper lectus at blandit ullamcorper. Fusce lorem nulla, commodo in commodo a, posuere vitae augue. Pellentesque non justo vestibulum, volutpat nulla quis, feugiat dui. Duis diam leo, finibus eget dapibus vitae, aliquam a lorem. Sed finibus sapien in ligula dictum auctor. Nam libero justo, bibendum quis ornare in, egestas ac ipsum. Sed nisl enim, volutput odio nisl quis, pharetra feugiat arcu. Maecenas suscipit purus odio. Aenean consequat at mi eget consectetur.</p>
                
                <p>Nam ut pretium nibh, eget saonet odio. Nunc porta, sem a dignissim tincidunt, libero purus ornare augue, sit amet condimentum nisi lacus sed lacus. Etiam nec lectus purus. Sed non sem libero. Sed et quam odio. Nunc euismod eros dui, eu efficitur quam cursus blandit. Etiam molestie sed nunc eget consents nibh porta sed. Quisque mauris mi, vehicula et felis sed, porta dictum libero. Suspendisse elit amet comvallis risus.</p>
                
                <p>Suspendisse pretium, arcu ac fringilla vulputate, sem felis imperdiet ipsum, a porttitor ipsum justo at ex. Mauris duis sem porttitor eget efficitur augue, cursus sit amet tellus. Sed eget vestibulum quam. Sed vulputate ligula eget felis efficitur, at tincidunt orci ultrices. Donec sed nequa ligula. Aenean sem risus, sollicitudin sit gravida eget, aliquam porta sapien. Sed eu mollis nulla, sit amet fringilla leo. Integer phareque libero a convilis vulputate. Aliquam erat volutpat. In finibus convallis, id id consectetur. Mauris interdum viverra mauris, ac vehicula magna fermentum pulvinar.</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 event-image">
            <img src="{{url('web/assets/img/matix/materials/events-0.png')}}" />
          </div>
        </div>
      </div>
    </main>

<script>
  $("#nav-events").addClass("active");
</script>
@endsection