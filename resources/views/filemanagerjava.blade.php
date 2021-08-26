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
                            <a id="all" href="#" class="file-control active">All</a>
                            <a id = "documents" href="#" class="file-control">Documents</a>
                            <a id="audio" href="#" class="file-control">Audio</a>
                            <a id ="images" href="#" class="file-control">Images</a>
                            <div class="hr-line-dashed"></div>
                            <form id="file-upload" action="/ajax-file-upload" method="post" enctype="multipart/form-data">
                                @csrf
                                <label class="btn fileUpload btn-default btn btn-primary btn-block">
                                Upload Files <input type="file" name="file" accept="audio/*,image/*,.doc,.docx,.pdf,.ods,.ppt,.txt" id="fileToUpload" hidden="" >
                                </label>
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
                <img src="" alt="">
                <div class="row">
                    <div id="fileDiv" class="col-lg-12 galleryscroll">
                        <div class="file-box">
                              <div class="file">
                                  <a href="#">
                                          <div class="icon">
                                            <i class="fa fa-file"></i>
                                          </div>
                                      <div class="file-name">
                                          <span class="namespan">name</span>
                                          <br/>
                                          <small>data</small>
                                          <small class="floatright">type</small>
                                      </div>
                                  </a>
                              </div>
                          </div>
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
