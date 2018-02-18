@extends('admin.dash')
@section('content')
<div class="dashinfo">
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
                            @foreach($users as $indexKey => $user)
                                <tr class="item{{$user->id}}"><!-- @if($user->usertype) warning @endif -->
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$user->id}}" ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
  </div>
  @endsection