<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('stylefk.css') }}">

</head>

<body>

    @extends("layout.master")

    @section('content')
    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">Announcement</h3>
                <p class="text">
                    Here You can  Announce important messages for faculty and Student <br>
                    Thank You
                </p>
            </div>

            
            <div class="contact-form" style="margin-top: 20px;">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="./announcement1" method="post" style="color: white; font-weight: bold;">
                    {{ csrf_field()}}
                    <h2 class="add-student-heading">Announcement</h2>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="course">Title:</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="semester">category:</label>
                            <input type="text" name="category" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="btch">Date:</label>
                            <input type="date" name="date" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="admin">Admin Name:</label>
                            <select id="admin" name="admin" class="form-control">
                                <option value=""> Select Name</option>
                                <option value="Sakshi Bgaeiya">Sakshi Bageriya</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="audience">Audience:</label>
                            <select id="audience" name="audience" class="form-control">
                                <option value=""> Select Audience</option>
                                <option value="faculty">Faculty</option>
                                <option value="Students">Students</option>
                                <option value="both">both</option>
                            </select>
                        </div>

                        <div style="flex: 1;">
                            <label for="content">Content:</label>
                            <input type="text" name="content" value="" class="form-control">
                        </div>
                    </div>


                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="file">Attachments:</label>
                            <input type="file" name="aa" class="form-control">
                        </div>

                    </div>

                    <div class="form-group">
                        <input type="submit" value="Send Announcement" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

</body>