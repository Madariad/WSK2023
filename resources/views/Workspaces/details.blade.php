@extends('Layouts.app')
@section('content')
@section('title', 'workspace details')
<div class="">
  <div class="">
     workspace title:  {{$data->title}}
  </div>
  @if ($data->description)
  <div class="">
    workspace  description: {{$data->description}}
  </div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">date create</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($token as $item)


          @if ($item->is_revoked)
              <tr class="alert alert-danger bg-danger ">
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->date_created}}</td>
              </tr>
          @else
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->date_created}}</td>
            </tr>
            @endif
      @endforeach
     
    </tbody>
  </table>
  {{-- <a href="{{ route('workspace.create') }}" class="btn btn-primary m-2 align-self-start">
  Create a token
</a>
<a href="{{ route('workspace.quota.index', $data->id) }}" class="btn btn-primary m-2 align-self-start">
  Go to quotas
</a> --}}


</div>
{{-- {{$token}} --}}
@endsection
