@extends('layouts/layoutMaster')

@section('title', 'Plyr - Extended UI')

@section('vendor-style')
@vite('resources/assets/vendor/libs/plyr/plyr.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/plyr/plyr.js')
@endsection

@section('page-script')
@vite('resources/assets/js/extended-ui-media-player.js')
@endsection

@section('content')
<div class="row">
  <!-- Video Player -->
  <div class="col-12 mb-6">
    <div class="card">
      <h5 class="card-header">Video</h5>
      <div class="card-body">
        <video class="w-100" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="plyr-video-player" playsinline controls>
          <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
  </div>
  <!-- /Video Player -->

  <!-- Audio Player -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Audio</h5>
      <div class="card-body">
        <audio class="w-100" id="plyr-audio-player" controls>
          <source src="https://cdn.plyr.io/static/demo/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mp3" />
        </audio>
      </div>
    </div>
  </div>
  <!-- /Audio Player -->
</div>
@endsection
