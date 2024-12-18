<div class="row">
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-body text-center">
                <div class="user-info">
                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="Profile Picture" class="profile-pic rounded-circle mx-auto d-block">
                    <h2 class="mt-3" id="welcomeMessage">Selamat datang</h2>
                    <p>Di LMS by Adhivasindo</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="col-md-12 mb-4 pt-3">
        <div class="container calendar-box border p-3 rounded">
            <div class="row align-items-center calendar-header mb-3">
                <div class="col-auto">
                    <button class="btn btn-outline-primary calendar-nav" id="prev-month">&lt;</button>
                </div>
                <div class="col text-center">
                    <span class="calendar-title fw-bold">April 2025</span>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-primary calendar-nav" id="next-month">&gt;</button>
                </div>
            </div>
            <div class="row calendar-days text-center">
                <div class="col">Su</div>
                <div class="col">Mo</div>
                <div class="col">Tu</div>
                <div class="col">We</div>
                <div class="col">Th</div>
                <div class="col">Fr</div>
                <div class="col">Sa</div>
            </div>
            <div class="row calendar-dates text-center">
                <div class="col date">1</div>
                <div class="col date">2</div>
                <div class="col date">3</div>
                <div class="col date active bg-primary text-white rounded">4</div>
                <div class="col date">5</div>
                <div class="col date">6</div>
                <div class="col date">7</div>
            </div>
        </div>
        
    </div>
    <div class="col-md-12 pt-3 stretch-card grid-margin end">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Jadwal Pemateri</p>
                <ul class="icon-data-list">
                    @php
                        $notifications = [
                            ['image' => 'face1.jpg', 'name' => 'Isabella Becker', 'message' => 'Sales dashboard have been created', 'time' => '9:30 am'],
                            ['image' => 'face2.jpg', 'name' => 'Adam Warren', 'message' => 'You have done a great job #TW111', 'time' => '10:30 am'],
                            ['image' => 'face3.jpg', 'name' => 'Leonard Thornton', 'message' => 'Sales dashboard have been created', 'time' => '11:30 am'],
                            ['image' => 'face4.jpg', 'name' => 'George Morrison', 'message' => 'Sales dashboard have been created', 'time' => '8:50 am'],
                            ['image' => 'face5.jpg', 'name' => 'Ryan Cortez', 'message' => 'Herbs are fun and easy to grow.', 'time' => '9:00 am'],
                        ];
                    @endphp
                    @foreach ($notifications as $notification)
                        <li>
                            <div class="d-flex">
                                <img src="{{ asset('assets/images/faces/' . $notification['image']) }}" alt="user">
                                <div>
                                    <p class="text-info mb-1">{{ $notification['name'] }}</p>
                                    <p class="mb-0">{{ $notification['message'] }}</p>
                                    <small>{{ $notification['time'] }}</small>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
