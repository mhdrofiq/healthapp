<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <title>Data Record</title>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/data-record.css')}}" rel="stylesheet">
    <?php $count = 0; ?>
</head>

<body>
    <style>
        ul {
            list-style-type: none;
        }

        .profile-edit-btn {
            border: 3px solid #00c6ff;
            border-radius: 10px;
            width: 50%;
            padding: 2%;
            font-weight: 600;
            color: white;
            background-color: #00c6ff;
            cursor: pointer;
        }

        .information {
            margin-left: 35%;
        }
    </style>
    <header class="row">
        @include('includes.header')
    </header>
    <div class="col-lg-8 mx-auto p-3 py-md-5">
        <main>
            <h1 class="text-white" style="text-align: center;">Senior(s) List</h1>
            <p class="text-white" style="text-align: center;">List of senior(s) that been monitored</p>
            <hr class="text-white"><br>
            @foreach($seniorList as $seniorLists)
            <div class="container emp-profile">
                <h2>{{ $seniorLists->senior_name }}</h2>
                <p style="text-align: center;">Personal information</p>
                <div class="information">
                    <p><b>Full Name:</b> {{ $seniorLists->senior_name }}</p>
                    <p><b>Gender:</b>
                        @if(($seniorLists->senior_gender) == 'm')
                        Male
                        @else(($seniorLists->senior_gender) == 'f')
                        Female
                        @endif
                    </p>
                    <p><b>Birthday:</b> {{ $seniorLists->senior_birthdate }}</p>
                    <p><b>Age:</b> {{ $seniorAge[$count] }}</p>
                    <p><b>Phone:</b> {{ $seniorLists->senior_phone }}</p>
                    <p><b>Address:</b> {{ $seniorLists->senior_address }}</p>
                </div> <br>
                <ul>
                    <li style="position: relative; text-align:center">
                        <a href="record/{{$seniorLists->id}}" type="button" class="profile-edit-btn" style="text-decoration: none;">See Data Record</a>
                    </li>
                </ul>
            </div><br>
            <?php ++$count; ?>
            @endforeach
        </main>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>