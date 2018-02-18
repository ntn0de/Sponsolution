@extends('admin.dash')
@section('content')
<div class="dashinfo">
<h2>Newly added Users</h2>
    <table class="table table-striped table-bordered table-hover"  >
                        <thead>
                            <tr>
                                <th valign="middle">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Premium?</th>
                                <th>Last updated</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($lusers as $indexKey => $luser)
                                <tr class="item{{$luser->id}}"><!-- @if($luser->lusertype) warning @endif -->
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$luser->name}}</td>
                                    <td>
                                        {{$luser->email}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featureduser" name="featureduser" id="" data-id="{{$luser->id}}" ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $luser->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$luser->id}}" data-title="{{$luser->title}}" data-content="{{$luser->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$luser->id}}" data-title="{{$luser->title}}" data-content="{{$luser->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$luser->id}}" data-title="{{$luser->title}}" data-content="{{$luser->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
  </div>
 
  <div class="dashinfo">
        <h2>Newly added Events</h2>
        <table class="table table-striped table-bordered table-hover" id="postTable"  >
                            <thead>
                                <tr>
                                    <th valign="middle">#</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Featured?</th>
                                    <th>Last updated</th>
                                    <th>Actions</th>
                                </tr>
                                {{ csrf_field() }}
                            <tbody>
                                @foreach($levents as $indexKey => $levent)
                            </thead>
                                    <tr class="item{{$levent->id}} @if($levent->featured) warning @endif">
                                        <td class="col1">{{ $indexKey+1 }}</td>
                                        <td>{{$levent->title}}</td>
                                        <td>
                                            {{$levent->description}}
                                        </td>
                                        <td class="text-center"><input type="checkbox" class="featured" name="featured" id="" data-id="{{$levent->id}}" @if ($levent->featured) checked @endif disabled></td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $levent->updated_at)->diffForHumans() }}</td>
                                        <td>
                                            <button class="show-modal btn btn-success" data-id="{{$levent->id}}" data-title="{{$levent->title}}" data-content="{{$levent->description}}" >
                                            <span class="glyphicon glyphicon-eye-open"></span> <a href="{{ route('events.show', ['id' => $levent->id]) }}"> Show</a></button>
                                            <button class="edit-modal btn btn-info" data-id="{{$levent->id}}" data-title="{{$levent->title}}" data-content="{{$levent->description}}">
                                            <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                            <button class="delete-modal btn btn-danger" data-id="{{$levent->id}}" data-title="{{$levent->title}}" data-content="{{$levent->description}}">
                                            <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
        </table>
      </div>

      <div class="dashinfo">
            <h2>Newly added Events</h2>
            <table class="table table-striped table-bordered table-hover"  >
                                <thead>
                                    <tr>
                                        <th valign="middle">#</th>
                                        <th>Brand Name</th>
                                        <th>Email</th>
                                        <th>Premium?</th>
                                        <th>Last updated</th>
                                    </tr>
                                    {{ csrf_field() }}
                                </thead>
                                <tbody>
                                    @foreach($lbrands as $indexKey => $lbrand)
                                        <tr class="item{{$lbrand->id}}"><!-- @if($lbrand->lbrandtype) warning @endif -->
                                            <td class="col1">{{ $indexKey+1 }}</td>
                                            <td>{{$lbrand->name}}</td>
                                            <td>
                                                {{$lbrand->email}}
                                            </td>
                                            <td class="text-center"><input type="checkbox" class="featuredbrand" name="featuredbrand"id="" data-id="{{$lbrand->id}}" ></td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lbrand->updated_at)->diffForHumans() }}</td>
                                            <td>
                                                <button class="show-modal btn btn-success" data-id="{{$lbrand->id}}" data-title="{{$lbrand->title}}" data-content="{{$lbrand->description}}" >
                                                <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                                <button class="edit-modal btn btn-info" data-id="{{$lbrand->id}}" data-title="{{$lbrand->title}}" data-content="{{$lbrand->description}}">
                                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                <button class="delete-modal btn btn-danger" data-id="{{$lbrand->id}}" data-title="{{$lbrand->title}}" data-content="{{$lbrand->description}}">
                                                <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
            </table>
        </div>
        @endsection