@extends('admin.dash')
@section('content')
<div class="dashinfo">
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
                            @foreach($brands as $indexKey => $brand)
                                <tr class="item{{$brand->id}}"><!-- @if($brand->brandtype) warning @endif -->
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        {{$brand->email}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$brand->id}}" ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $brand->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
</div>
@endsection