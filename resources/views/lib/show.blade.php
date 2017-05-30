
{{ Html::style(('css/bootstrap.css')) }}

<div class='container'>
<h1>Detiall</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
      {{ $lib->title }}
  </div>
  <div class="panel-body">
      <ul>
          <li>{{ $lib->title }}</li>
          <li>{{ $lib->url }}</li>
          <li>{{ $lib->description }}</li>
          <li>{{ $lib->created_at }}</li>
      </ul>
  </div>
</div>
</div>
{{ Html::script('js/jquery.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
