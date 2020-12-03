@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default" style="box-shadow: 0 0 35px red !important; background: #2e3436 !important; border-radius:20px !important;">
                <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">
                    Отправьте нам свою идею
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->

                    <!-- New Idea Form -->
                    <form action="{{ url('idea') }}" method="POST" class="form-horizontal"
                          style="border-radius:20px !important;">
                    {{ csrf_field() }}

                    <!-- Idea Name -->
                        <div class="form-group" style="color: white !important;">
                            <label for="idea" class="col-sm-3 control-label">Автор</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="idea-name" class="form-control"
                                       value="{{ old('idea') }}">
                            </div>
                            <br><br>
                            <label for="idea" class="col-sm-3 control-label">Адрес эл. почты</label>
                            <div class="col-sm-6">
                                <input type="text" name="mail" id="idea-mail" class="form-control"
                                       value="{{old('idea')}}">
                            </div>
                            <br><br>
                            <label for="idea" class="col-sm-3 control-label">Номер телефона</label>
                            <div class="col-sm-6">
                                <input type="text" name="phone" id="idea-phone" class="form-control"
                                       value="{{old('idea')}}">
                            </div>
                            <br><br>
                            <label for="idea" class="col-sm-3 control-label">Текст идеи</label>
                            <div class="col-sm-6">
                                <textarea name="idea" id="idea-idea" class="form-control"
                                          value="{{old('idea')}}"></textarea>
                            </div>
                        </div>

                        <!-- Add Idea Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Отправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- Current Ideas -->


            @if (count($ideas) > 0)
                <div class="panel panel-default" style="width:200% !important; margin-left:-45%; box-shadow: 0 0 35px red !important; background-color:#2e3436;border-radius:20px">
                    <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">
                        Идеи от пользователей
                    </div>
                    <div style="padding: 2%;"><span style="color:white">Фильтры</span>
                        <span>
                            <select>
                                <option>Опубликованные</option>
                                <option>Отклонённые</option>
                            </select>
                        </span>
                    </div>

                    <div class="panel-body">
{{--                        <table class="table table-striped task-table" style="background-color: black">--}}
                            <table style="background-color: #2e3436;color:white;border-radius: 19px 19px 0px 0px">
                            <thead style="box-shadow: inset 0 0 10px; width:100%; border-radius: 19px 19px 19px 19px">
                            <th style="width:17%; padding:15px">Автор</th>
                            <th style="width:20%">Адрес эл. почты</th>
                            <th style="width:12%">Телефон</th>
                            <th style="width:27%">Идея</th>
                            <th style="width:15%">Статус идеи</th>
                            <th style="width:20%">Дата отправки</th>

                            </thead>
                            <tbody>
                            @foreach ($ideas as $idea)
                                <tr style="border-bottom:1px solid white">
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
                                        <div><textarea readonly="readonly"
                                                       style="width:100%; border:0;background-color:transparent;readonly:true !important">{{ $idea->idea }}</textarea>
                                        </div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $idea->statuses }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $idea->created_at}}</div>
                                    </td>
                                    <!-- Idea Delete-Update Button -->
                                    @if($user_id=='1')
                                        <td>
                                            <form action="{{ url('idea/'.$idea->id.'/update_status') }}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('POST')}}

                                                <button type="submit" id="update-idea-{{ $idea->id }}"
                                                        class="btn btn-danger" style="background:green !important; margin:1% 2% 1% 1%">
                                                    <i></i>Опубликовать
                                                </button>
                                            </form>
                                        </td>

                                        <td>

                                            <form action="{{ url('idea/'.$idea->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" id="delete-idea-{{ $idea->id }}"
                                                        class="btn btn-danger" style="margin-left: 10% !important;">
                                                    <i class="fa fa-btn fa-trash"></i>Отклонить
                                                </button>

                                            </form>
                                        </td>
                                    @endif
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

