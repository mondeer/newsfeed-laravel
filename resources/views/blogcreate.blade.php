@extends('admin.dashboard')

@section ('content')
<div class="panel panel-primary">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Create NewsFeed</h3>
  </div>
  <div class="panel-body">
    <form method="POST" action="/newblog" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="text-success">NewsFeed Title</label>
        <input type="text" name="title" class="form-control" placeholder="NewsFeed Title" value="{{ old('title') }}" required>
      </div>
      <div class="form-group">
        <label class="text-success">NewsFeed Category</label>
        <select class="control-label" name="category">
          <option value="political">Political News</option>
          <option value="cultural">Cultural News</option>
          <option value="business">Business News</option>
          <option value="sports">Sports News</option>
          <option value="local">Local News</option>
          <option value="fashion">Fashion News</option>
          <option value="africa">African News</option>
          <option value="international">International News</option>
        </select>
      </div>
      <div class="form-group">
        <label class="text-success">Featured Image</label>
        <input type="file" name="img" placeholder="{{Auth::user()->name}}, Drag and drop your image here" required>
      </div>
      <div class="form-group">
        <label class="text-success">The Feed</label>
        <textarea id="message" name="content" rows="13" placeholder="{{Auth::user()->name}}, your content goes here, at the bottom right of this canvas, expand"></textarea>
      </div>
      <div class="form-group">
        <label class="text-success">Meta Data</label>
        <input type="text" name="meta_data" class="form-control" placeholder="newsfeed meta data for Search engine optimization" required>
      </div>
      <div class="checkbox">
        <label class="text-success">
          <input type="checkbox" name="published" checked> Published
        </label>
      </div>
      <input type="submit" class="btn btn-default" value="Submit">
    </form>
  </div>
</div>
@endsection
