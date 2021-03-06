@extends('layouts/admin')

@section('content')
<div class="header">
    <h1 class="page-header">Dashboard</h1>
</div>
<div id="page-inner">
    <div class="dashboard-cards">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image red">
                        <i class="material-icons dp48">people_alt</i>
                    </div>
                    <div class="card-stacked red">
                        <div class="card-content">
                            <h3>{{ $users }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>USERS</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image orange">
                        <i class="material-icons dp48">library_books</i>
                    </div>
                    <div class="card-stacked orange">
                        <div class="card-content">
                            <h3>{{ $posts }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>POSTS</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image blue">
                        <i class="material-icons dp48">message</i>
                    </div>
                    <div class="card-stacked blue">
                        <div class="card-content">
                            <h3>{{ $messages }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>MESSAGES</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image green">
                        <i class="material-icons dp48">person_add</i>
                    </div>
                    <div class="card-stacked green">
                        <div class="card-content">
                            <h3>88,658</h3>
                        </div>
                        <div class="card-action">
                            <strong>FRIENDSHIPS</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-action">
                    <b>Tasks Panel</b>
                </div>
                <div class="card-image">
                    <div class="collection">
                        <a href="#!" class="collection-item">Red<span class="new badge red" data-badge-caption="red">4</span></a>
                        <a href="#!" class="collection-item">Blue<span class="new badge blue" data-badge-caption="blue">4</span></a>
                        <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
                        <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
                        <a href="#!" class="collection-item">Alan<span class="new badge blue" data-badge-caption="blue">4</span></a>
                        <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
                        <a href="#!" class="collection-item">Custom Badge Captions<span class="new badge" data-badge-caption="custom caption">4</span></a>
                        <a href="#!" class="collection-item">Custom Badge Captions<span class="badge" data-badge-caption="custom caption">4</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-action">
                    <b>User List</b>
                </div>
                <div class="card-image">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">track_changes</i>
                            <span class="title">Title</span>
                            <p>
                                First Line <br />
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle">folder</i>
                            <span class="title">Title</span>
                            <p>
                                First Line <br />
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle green">track_changes</i>
                            <span class="title">Title</span>
                            <p>
                                First Line <br />
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle red">play_arrow</i>
                            <span class="title">Title</span>
                            <p>
                                First Line <br />
                                Second Line
                            </p>
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
@endsection