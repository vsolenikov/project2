@extends('layouts.app')

@section('content')
    <div class="container" >
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Ideas
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                            <!-- New Idea Form -->
                    <form action="{{ url('idea') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- Idea Name -->
                        <div class="form-group">
                            <label for="idea" class="col-sm-3 control-label">Your name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="idea-name" class="form-control" value="{{ old('idea') }}">
                            </div>
<br><br>
			    <label for="idea" class="col-sm-3 control-label">Email</label>
			    <div class="col-sm-6">
				<input type="text" name="mail" id="idea-mail" class="form-control" value="{{old('idea')}}">
       		            </div>
<br><br>
			    <label for="idea" class="col-sm-3 control-label">Telephone</label>
<div class="col-sm-6">
   <input type="text" name="phone" id="idea-phone" class="form-control" value="{{old('idea')}}">
</div>
<br><br>
<label for="idea" class="col-sm-3 control-label">Your idea</label>
<div class="col-sm-6">
	<textarea name="idea" id="idea-idea" class="form-control" value="{{old('idea')}}"></textarea>
</div>
</div>

                        <!-- Add Idea Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add idea
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- Current Ideas -->
            @if (count($ideas) > 0)
                <div class="panel panel-default" style="width:180% !important; margin-left:-35%;">
                    <div class="panel-heading">
                        Our Ideas
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telephone</th>
			                <th>Idea</th>
                            <th>Status</th>
			                <th>Created</th>
			    
                            </thead>
                            <tbody>
                            @foreach ($ideas as $idea)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $idea->name }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $idea->mail }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $idea->phone }}</div>
                                    </td>
				                	<td class="table-text">
					                	<div><textarea readonly="readonly" style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea></div>
				                	</td>
                                    <td class="table-text">
                                        <div>{{ $idea->statuses }}</div>
                                    </td>
					<td class="table-text">
						<div>{{ $idea->created_at}}</div>
					</td>
                                    <!-- Idea Delete-Update Button -->

                                    <td>
                                        <form action="{{ url('idea/'.$idea->id.'/update_status') }}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('POST')}}

                                            <button type="submit" id="update-idea-{{ $idea->id }}" class="btn btn-danger" style="background:green !important;">
                                                <i></i>^ Public
                                            </button>
                                        </form><br>

                                        <form action="{{ url('idea/'.$idea->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="delete-idea-{{ $idea->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Decline
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
