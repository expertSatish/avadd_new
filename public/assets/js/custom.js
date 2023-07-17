var callState = false;

$('#pinId').on('change', function() {
    var url = "/get-state-city/" + $('#pinId').val();
    callState = true;
    $.get(url, function(data, status) {
        $("#stateId").val(data.state).change();
        $("#cityId").html(data.cityData);
        $("#cityId").val(data.city).change();
        callState = false;
    });
})

$('#stateId').on('change', function() {
    if (callState) { return; }
    var stateVal = $("#stateId option:selected").val();
    var url = "/get-city/" + stateVal;
    $.get(url, function(data, status) {
        $("#cityId").html(data);
    });
});

if ($('.banner-dataTable').length > 0) {
    let table = $('.banner-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/banners",
        columns: [
            {
                data: 'banner',
                name: 'banner',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.department-dataTable').length > 0) {
    let table = $('.department-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/department",
        columns: [
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}

if ($('.events-dataTable').length > 0) {
    let table = $('.events-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/events/",
        columns: [
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            {
                data: 'event_image',
                name: 'event_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
           
            
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.StudentServices-dataTable').length > 0) {
    let table = $('.StudentServices-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/StudentServices",
        columns: [
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
           
            
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.placement-dataTable').length > 0) {
    let table = $('.placement-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/placement/add-member",
        columns: [
            { data: 'name', name: 'name' },
            { data: 'position', name: 'position' },
            { data: 'contact', name: 'contact' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}

if ($('.award-dataTable').length > 0) {
    let table = $('.award-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/awards",
        columns: [
           
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}


if ($('.gallery-dataTable').length > 0) {
    let table = $('.gallery-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/gallery",
        columns: [
           
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
        
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}

if ($('.galleryVideo-dataTable').length > 0) {
    let table = $('.galleryVideo-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/videoData",
        columns: [
            { data: 'video_link', name: 'video_link' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
}

if ($('.about_college-dataTable').length > 0) {
    let table = $('.about_college-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/about/college",
        columns: [
           
            {
                data: 'about_image',
                name: 'about_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.manager_message-dataTable').length > 0) {
    let table = $('.manager_message-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/about/manager-message",
        columns: [
           
            {
                data: 'manager_image',
                name: 'manager_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.director_message-dataTable').length > 0) {
    let table = $('.director_message-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/about/director-message",
        columns: [
            { data: 'name', name: 'name' },

            {
                data: 'director_image',
                name: 'director_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.advisor_message-dataTable').length > 0) {
    let table = $('.advisor_message-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/about/advisor-message",
        columns: [
            { data: 'name', name: 'name' },
            {
                data: 'advisor_image',
                name: 'advisor_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.event-dataTable').length > 0) {
    let table = $('.event-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/manage-event",
        columns: [
            { data: 'title', name: 'title' },
            {
                data: 'images',
                name: 'images',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}

if ($('.academics-dataTable').length > 0) {
    let table = $('.academics-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/manage-academics",
        columns: [
            { data: 'academic_name', name: 'academic_name' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
}

if ($('.hod_message-dataTable').length > 0) {
    let table = $('.hod_message-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/about/hod-message",
        columns: [
            { data: 'name', name: 'name' },
            {
                data: 'hod_image',
                name: 'hod_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
}
if ($('.faculty-dataTable').length > 0) {
    let table = $('.faculty-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/faculty",
        columns: [
            { data: 'department_name', name: 'department_name' },
            { data: 'faculty_name', name: 'faculty_name' },
            {
                data: 'faculty_image',
                name: 'faculty_image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}
if ($('.recruiter-dataTable').length > 0) {
    let table = $('.recruiter-dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: HOST_URL + "/admin/placement/add-Recruiter",
        columns: [
           
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta) {
                    return '<img src="' + data + '" height="50"/>';
                }
            },
        
            { data: 'action', name: 'action', orderable: false, searchable: false },

        ]
    });
}

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});


function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }



