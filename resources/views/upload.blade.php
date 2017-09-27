@include('includes/header')
@include('includes/menu')
<div class="container"><br>
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-12">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <div class="flash-message">
          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))

          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
          @endforeach
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><strong>Upload your trump meme</strong> <small> </small></div>

          <div class="panel-body">
            {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}
            <div class="input-group">
              <input id="uploadFile" class="form-control" placeholder="Choose File" disabled="disabled">
              <div class="input-group-btn">
                <div class="fileUpload btn btn-success image-preview-input">
                  <span><i class="glyphicon glyphicon-upload"></i> Browse</span>
                  <input id="uploadBtn" type="file" class="upload" name="image" accept="image/png, image/jpeg, image/gif"/>
                </div>
                <button type="submit" class="btn btn-info">Upload</button>
              </div>
            </div>
          </div>
          {!! Form::close() !!}
        </div>

      </div>
    </div>



  </div>
</div>
<script>
document.getElementById("uploadBtn").onchange = function () {
  document.getElementById("uploadFile").value = this.value.substring(12);
};
</script>
<br><br><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- TrumpMemes2 -->
<center><ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7332385499198715"
     data-ad-slot="4345617271"
     data-ad-format="auto"></ins></center>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
@include('includes/footer')
