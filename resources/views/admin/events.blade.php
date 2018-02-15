 <div class="dashinfo">
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
                            @foreach($events as $indexKey => $event)
                        </thead>
                                <tr class="item{{$event->id}} @if($event->featured) warning @endif">
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$event->title}}</td>
                                    <td>
                                        {{$event->description}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$event->id}}" @if ($event->featured) checked @endif></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> <a href="{{ route('events.show', ['id' => $event->id]) }}"> Show</a></button>
                                        <button class="edit-modal btn btn-info" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
  </div>


  