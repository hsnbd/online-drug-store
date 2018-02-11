<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Version 2.0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

    @foreach (explode("/",Request::url()) as $key =>$page)
      @if ($key > 2)
        <li {{$loop->last?"class='active'":''}}>
          @php $param[] = $page @endphp
          <a href="{{url('/')}}/{{implode("/",$param)}}">{{$page}}</a>
        </li>
      @endif
    @endforeach
  </ol>
</section>
