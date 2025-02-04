@extends('layouts.admin')
@section('content')
<div class="panel panel-default no-margin-bottom">
<div class="panel-heading">
            <strong>Listing Images</strong>
        </div>
        <div class="panel-body">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data"  class="form-inline">
                            <p><small>Note: Total size of uploading files shold not be greater than 8 MB.</small></p>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image[]"  accept="image/png, image/jpeg, image/jpg, image/gif"  class="form-control" multiple/>
                                <input type="text" name="title" placeholder="Image description (Optional)" class="form-control"/>
                                <select name="status" class="form-control">
                                    <option value="1">Publish</option>
                                    <option value="0">Save in draft</option>
                                </select>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success" style="margin-bottom: 0px;">Upload</button>
                            </div>
                        </form>
                        <div class="ln_solid"></div>

                        @if(empty($images->count()))
                            <p>No record found.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Date/Time Added</th>
                                            <th>Operations</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($images as $image)
                                        <tr>
                                            <td>{{ (($images->currentPage() - 1 ) * $images->perPage() ) + $loop->iteration }}</td>
                                            <td><img class="img-responsive thumbnail_img" src="{{  asset('public/'.$image->src_thumbnail) }}" /></td>
                                           
                                            <td>{{ $image->updated_at->format('F d, Y') }}</td>
                                            <td>
                                                <!-- <form action="{{ route('gallery.update', $image->id) }}" method="post"
                                                    onsubmit="return confirm('Revert process will Enable/Disable the image. Continue?');">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="put" />
                                                    <input type="hidden" name="id" value="{{ $image->id }}" />
                                                    <button type="submit" class="btn btn-sm btn-info action_btn">Revert</button>
                                                </form> -->
                                                
                                                <i onclick="window.open('<?php echo asset('public/'.$image->src) ?>','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;"
                                                class="fa fa-eye" style="font-size: 3em; color:blue"></i>
                                                
                                                <i onclick="copy('<?php echo asset('public/'.$image->src) ?>');"
                                                class="fa fa-clipboard" style=" font-size: 2em; color:green"></i>
                                                
                                                <form action="{{ route('gallery.destroy', $image->id) }}" method="post"
                                                    onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    {{ csrf_field() }}
                                                    <i onclick="copy('<?php echo asset($image->src) ?>');"
                                                class="fa fa-del" style=" font-size: 2em; color:green"></i>
                                                    <button type="submit" name="Delete" class="btn btn-sm btn-danger action_btn"><i style="font-size: 2em;" class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if($images->total() != 0)
                                    <div>Showing
                                        {{ ($images->currentpage()-1) * $images->perpage()+1}} to
                                        {{(($images->currentpage()-1) * $images->perpage())+$images->count()}} of
                                        {{$images->total()}} records
                                    </div>
                                    {{ $images->links() }}
                                @else
                                    No records found.
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('inPageJS')
    <script type="application/javascript">
        function copy(link){
            window.alert(link);
            console.log("valskdfjalsdkfj");
            var inp =document.createElement('input');
            document.body.appendChild(inp)
            inp.value =link;
            inp.select();
            document.execCommand('copy',false);
            inp.remove();
        }    
    </script>
@endsection
