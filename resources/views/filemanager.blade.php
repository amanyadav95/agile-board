@extends('layouts.master')

@section('content')
<div id="wrapper">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>File Manager</h2>
            <ol class="breadcrumb">
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content" style="padding-bottom:390px;">
                        <div class="file-manager">
                            <h5>Show:</h5>
                            <a href="#" class="file-control active">All</a>
                            <a href="#" class="file-control">Documents</a>
                            <a href="#" class="file-control">Audio</a>
                            <a href="#" class="file-control">Images</a>
                            <div class="hr-line-dashed"></div>
                            <form class="" action="/file-uplode" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                            </form>
                            <!-- <div class="hr-line-dashed"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list" style="padding: 0">
                                <li><a href=""><i class="fa fa-folder"></i> Files</a></li>
                                <li><a href=""><i class="fa fa-folder"></i> Pictures</a></li>
                                <li><a href=""><i class="fa fa-folder"></i> Web pages</a></li>
                                <li><a href=""><i class="fa fa-folder"></i> Illustrations</a></li>
                                <li><a href=""><i class="fa fa-folder"></i> Films</a></li>
                                <li><a href=""><i class="fa fa-folder"></i> Books</a></li>
                            </ul>
                            <h5 class="tag-title">Tags</h5>
                            <ul class="tag-list" style="padding: 0">
                                <li><a href="">Family</a></li>
                                <li><a href="">Work</a></li>
                                <li><a href="">Home</a></li>
                                <li><a href="">Children</a></li>
                                <li><a href="">Holidays</a></li>
                                <li><a href="">Music</a></li>
                                <li><a href="">Photography</a></li>
                                <li><a href="">Film</a></li>
                            </ul>
                            <div class="clearfix"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 animated fadeInRight">
                <img src="/JfXd6EfBH4pAvnPzyRAsh9kYtK9CcDJgv4eNaSzZ.png" alt="">
                <div class="row">
                    <div class="col-lg-12">
                        @foreach($files as $file)
                        <div class="file-box">
                              <div class="file">
                                  <a href="{{$file->filepath}}">
                                      <span class="corner"></span>
                                      <div class="file-name">
                                          {{$file->filename}}
                                          <br/>
                                          <small>{{$file->created_at}}</small>
                                      </div>
                                  </a>
                              </div>

                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="pull-right">
            10GB of <strong>250GB</strong> Free.
        </div>
        <div>
            <strong>Copyright</strong> Example Company &copy; 2014-2015
        </div>
    </div>
</div>

@endsection
