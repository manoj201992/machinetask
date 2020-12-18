
                        <form class="kt-form" action="/importFiles" method="POST" id="file_import_form" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="header">
                                <h2>Excel Upload</h2>
                            </div>
                            <div class="body row">
                                <div class="col-sm-6">
                                  
                                </div>

                                <div class="col-sm-6">
                                    <input type="file" class="dropify" name="uploadfile" data-max-file-size="100K" required>
                                    <div class="row clearfix">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary" id="form_submit">Submit</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-4">
                                        <a href="{{ URL::to('/') }}/exportExcel" class="btn btn-primary" target="_blank">Excel Download</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                   