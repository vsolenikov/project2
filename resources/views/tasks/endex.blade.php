

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                            <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Your name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
<br><br>
			    <label for="task" class="col-sm-3 control-label">Email</label>
			    <div class="col-sm-6">
				<input type="text" name="mail" id="task-mail" class="form-control" value="{{old('task')}}">
       		            </div>
<br><br>
			    <label for="task" class="col-sm-3 control-label">Telephone</label>
<div class="col-sm-6">
   <input type="text" name="phone" id="task-phone" class="form-control" value="{{old('task')}}">
</div>
<br><br>
<label for="task" class="col-sm-3 control-label">Your idea</label>
<div class="col-sm-6">
	<textarea name="idea" id="task-idea" class="form-control" value="{{old('task')}}"></textarea>
</div>
</div>

                        <!-- Add Task Button -->
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

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
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
			    <th>Created</th>
			    
                            </thead>
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                        </td>
					<td class="table-text">
						<div>{{ $task->mail }}</div>
					</td>
					<td class="table-text">
						<div>{{ $task->phone }}</div>
					</td>
					<td class="table-text">
						<div><textarea readonly="readonly" style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $task->idea }}</textarea></div>
					</td>
					<td class="table-text">
						<div>{{ $task->created_at}}</div>
					</td>
                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('UPDATE')}}

                                            <button type="submit" id="update-task-{{ $task->id }}" class="btn btn-danger" style="background:green !important;">
                                                <i></i>^ Confirm
                                            </button>


                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
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

