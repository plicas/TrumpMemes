@include('includes/header')
@include('includes/menu')

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- TrumpMemes3 -->
<center><ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-7332385499198715"
     data-ad-slot="7439696239"></ins></center>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

  <div id="container">

    <div class="grid-sizer"></div>
    @foreach($memes as $meme)
    <div class="item">
      <img src="memes/{{$meme->image}}" class="image">
    </div>
    @endforeach


  </div>
  <br>
  {{$memes->links()}}


  @include('includes/footer')
