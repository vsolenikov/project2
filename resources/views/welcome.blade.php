@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ideas approved by the moderator</div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                            <!-- New Task Form -->

                    <form action="{{ url('idea') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                                <!-- Task Name -->
                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Your name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('idea') }}">
                            </div>
<br><br>
			    <label for="task" class="col-sm-3 control-label">Email</label>
			    <div class="col-sm-6">
				<input type="text" name="mail" id="task-mail" class="form-control" value="{{ old('idea') }}">
       		            </div>
<br><br>
			    <label for="task" class="col-sm-3 control-label">Telephone</label>
<div class="col-sm-6">
   <input type="text" name="phone" id="task-phone" class="form-control" value="{{ old('idea') }}">
</div>
<br><br>
<label for="task" class="col-sm-3 control-label">Your idea</label>
<div class="col-sm-6">
	<textarea name="idea" id="task-idea" class="form-control" value="{{ old('idea') }}"></textarea>
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





                                <tr>
                                    <td class="table-text">
                                        <div>aaa </div>
                                        </td>
					<td class="table-text">
						<div>bbb</div>
					</td>
					<td class="table-text">
						<div>vvv</div>
					</td>
					<td class="table-text">
						<div><textarea readonly="readonly" style="width:100%; border:0;background-color:transparent;readonly:true !important">ggg</textarea></div>
					</td>
					<td class="table-text">
						<div>ddd</div>
					</td>
                                    <!-- Task Delete Button -->

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>




                <div class="panel-body">
                    Here you can see a list of all approved ideas.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
