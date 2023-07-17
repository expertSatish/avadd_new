
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('template/include/css/bootstrap.min.css ')}}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('template/include/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/20dd01c86d.js" crossorigin="anonymous"></script> 
</head>
<body>
    <div class="content-container p-0">
        <div class="bg-form">   
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="online_header_form">
                            <div class="header_form_img">
                                <img src="include/images/logo.png" alt="">
                            </div>
                            <div class="online_content">
                                <h1>AVADH COLLEGE OF PHARMACY <span>(Approved by PCI, AKTU & BTE)</span></h1>
                            </div>
                        </div>
                    </div>    
                </div>        
                <div class="admission_portal">
                    <h5>Online Admissions 2023-24 Portal</h5>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row mb-3">
                            <div class="col-md-9">
                                <div class="form_heading">
                                    <h5>APPLICATION FORM FOR B.PHARM. /D.PHARM.</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="check_bx1">
                                                    <input type="radio" id="age1" name="age" value="30">
                                                    <label for="age1">B.PHARM</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="check_bx">
                                                    <input type="radio" id="age2" name="age" value="60">
                                                    <label for="age2">D.PHARM</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form_group1">
                                   <div class="upload-group">
                                      <div class="upload-btn">
                                        <input type="file" id="uploadImg" class="d-none" onchange="showPreview(event)">
                                        <label for="uploadImg" class="upload_img_dragable">
                                            <span id="uploadLabelText">Click to upload image</span> 
                                        <div class="uploaded_img_area" id="uploaded_img_area">
                                           <img id="uploaded_img" alt="">
                                        </div>
                                        </label>
                                      </div>
                                      <p>Max file size is 25kb.</p>  
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Father’s Name</label>
                                    <input type="text" class="form-control" placeholder="Father’s Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Mother’s Name</label>
                                    <input type="text" class="form-control" placeholder="Mother’s Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="Date of Birth" name="dob">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form_group1">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Mobile / Telephone   No</label>
                                    <input type="text" class="form-control" placeholder="Mobile / Telephone No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Guardian Mobile No</label>
                                    <input type="text" class="form-control" placeholder="Guardian Mobile No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Category</label>
                                    <select class="form-control" name="categery" id="categery">
                                        <option value="Gen">categery</option>
                                        <option value="Gen">Gen</option>
                                        <option value="O.B.C">O.B.C</option>
                                        <option value="S.C.">S.C.</option>
                                        <option value="S.T.">S.T.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Physically    Handicapped</label>
                                    <select class="form-control" name="categery" id="categery">
                                        <option value="Physically Handicapped">Physically Handicapped</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Father’s occupation</label>
                                    <input type="text" class="form-control" placeholder="Father’s occupation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Mother’s occupation</label>
                                    <input type="text" class="form-control" placeholder="Mother’s occupation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                    <label for="">Family income (annual)</label>
                                    <select class="form-control" name="categery" id="categery">
                                        <option value="Physically Handicapped">Family income (annual)</option>
                                        <option value="Yes">0-50 (Thousand)  </option>
                                        <option value="No">0.50-1 (Lakhs)</option>
                                        <option value="No">01-2.5 (Lakhs)</option>
                                        <option value="No">2.5-05 (Lakhs)</option>
                                        <option value="No">05-10 (Lakhs)</option>
                                    </select>
                                </div>
                            </div>
                            <h5 class="heading-form">Qualiication details:</h5>
                            <div class="col-md-12 mb-3">
                                <div class="table-responsive mb-md-5">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Board/University</th>
                                        <th scope="col" style="min-width: 120px;">Subject</th>
                                        <th scope="col" style="min-width: 120px;">Marks OBT</th>
                                        <th scope="col" style="min-width: 120px;">Total Marks</th>
                                        <th scope="col">Upload File</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <label class="btn-submit d-bolock" for="inputFile">Upload file</label>
                                                <input class="d-none" type="file" class="form-control" id="inputFile">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <label class="btn-submit d-bolock" for="inputFile">Upload file</label>
                                                <input class="d-none" type="file" class="form-control" id="inputFile">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <label class="btn-submit d-bolock" for="inputFile">Upload file</label>
                                                <input class="d-none" type="file" class="form-control" id="inputFile">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <input type="text" class="form-control">
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="form_group2">
                                                <label class="btn-submit d-bolock" for="inputFile">Upload file</label>
                                                <input class="d-none" type="file" class="form-control" id="inputFile">
                                            </div>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                   <div class="upload-group">
                                      <div class="upload-btn">
                                        <input type="file" id="uploadImg_one" class="d-none" onchange="showPreview(event)">
                                        <label for="uploadImg_one" class="upload_img_dragable">
                                            <span id="uploadLabelText_one">Thumbprint of applicant   </span> 
                                        <div class="uploaded_img_area" id="uploaded_img_area_one">
                                           <img id="uploaded_img_one" alt="">
                                        </div>
                                        </label>
                                      </div>
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form_group1">
                                   <div class="upload-group">
                                      <div class="upload-btn">
                                        <input type="file" id="uploadImg" class="d-none" onchange="showPreview(event)">
                                        <label for="uploadImg" class="upload_img_dragable">
                                            <span id="uploadLabelText">Signature of  applicant</span> 
                                        <div class="uploaded_img_area" id="uploaded_img_area">
                                           <img id="uploaded_img" alt="">
                                        </div>
                                        </label>
                                      </div>
                                   </div>
                                </div>
                            </div>   
                            <div class="col-md-12">
                                <div class="btn-sub">
                                    <button type="submit" class="btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="{{ asset('template/include/js/jquery.min.js')}}"></script>
    <script src="{{ asset('template/include/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/include/js/main.js ') }}"></script>
    <script src="{{ asset('template/include/js/theme_fornt_change.js ') }}"></script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages : 'en,hi'}, 'google_translate_element');
        }
    </script> 
    <script src="{{ asset('template/include/js/custom.js ') }}"></script>
</body>