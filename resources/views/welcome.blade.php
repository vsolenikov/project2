@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="margin-left:-35%"><img src="/images/logos.png"></div>
                <div style="margin-top: -20%;margin-bottom: 10%;"><strong><h1
                                style="font-size: 30px; font-family: Tahoma; margin-left:3%; margin-top:-30%">Здесь
                            представлен список идей
                            <br>Каждая идея может оказаться полезной
                        </h1></strong></div>
                <div>
                    <div class="panel panel-default"
                         style="box-shadow: 0 0 35px red !important;width:70%; background: #2e3436 !important; border-radius:20px !important; color:white;">
                        <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">Отправьте нам свои идеи
                        </div>

                        <div class="panel-body">
                            <!-- Display Validation Errors -->

                            <!-- New Task Form -->

                            <form action="{{ url('idea') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <!-- Task Name -->
                                <div class="form-group">
                                    <label for="task" class="col-sm-3 control-label">Ваше ФИО</label>

                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="task-name" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Адрес эл. почты</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="mail" id="task-mail" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Номер телефона</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="task-phone" class="form-control" value="">
                                    </div>
                                    <br><br>
                                    <label for="task" class="col-sm-3 control-label">Ваша идея</label>
                                    <div class="col-sm-6">
                                        <textarea name="idea" id="task-idea" class="form-control" value=""></textarea>
                                    </div>
                                </div>

                                <!-- Add Task Button -->
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
                {{--///--}}

                {{--                ///--}}
                <!-- Current Tasks -->

                    <div class="panel panel-default"
                         style="width:180% !important; margin-left:-35%;margin-left:-35%; box-shadow: 0 0 35px red !important; background-color:#2e3436;border-radius:20px">

                        <div class="panel-heading" style="border-radius: 19px 19px 0px 0px">
                            Одобренные идеи
                        </div>
                        <div class="panel-body">

                            <table style="background-color: #2e3436;color:white;border-radius: 19px 19px 0px 0px">
                                <thead style="box-shadow: inset 0 0 10px; width:100%; border-radius: 19px 19px 0px 0px">
                                <th style="width:17%; padding:15px">Автор</th>
                                <th style="width:20%">Адрес эл. почты</th>
                                <th style="width:12%">Телефон</th>
                                <th style="width:30%">Идея</th>
                                <th style="width:15%">Статус идеи</th>
                                <th style="width:20%">Дата отправки</th>
                                </thead>
                                <tbody>
                                @foreach ($ideas as $idea)
                                    <tr style="border-bottom: 1px solid white">
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
                                        <!-- Task Delete Button -->

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
