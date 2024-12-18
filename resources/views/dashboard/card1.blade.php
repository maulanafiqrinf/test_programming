<div class="row">

    <div class="col-12 stretch-card">
        <div class="card card-dark-blue">
            <div class="card-body">
                <span class="badge bg-warning">PEMOGRAMAN</span>
                <h2 class="card-title pt-2" style="color: white">Pemrograman Frontend Modern dengan React dan Angular</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <button class="btn btn-success mt-3">MULAI LEARNING</button>
            </div>
        </div>
    </div>

    <div class="col-12 pt-3">
        <h4 class="text-center font-weight-bold">Modul Pembelajaran</h4>
    </div>

    @php
        $cards = [
            [
                'title' => 'Number of Meetings',
                'value' => 34040,
                'description' => 'The total number of sessions within the date range. It is calculated as the sum.',
            ],
            [
                'title' => 'Number of Meetings',
                'value' => 34040,
                'description' => 'The total number of sessions within the date range. It is calculated as the sum.',
            ],
            [
                'title' => 'Number of Meetings',
                'value' => 34040,
                'description' => 'The total number of sessions within the date range. It is calculated as the sum.',
            ],
        ];
    @endphp

    <!-- Looping untuk kartu -->
    @foreach ($cards as $card)
        <div class="col-md-4 grid-margin grid-margin-md-0">
            <div class="card card-light-blue">
                <div class="card-body">
                    <p class="card-title text-white">{{ $card['title'] }}</p>
                    <div class="row">
                        <div class="col-8 text-white">
                            <h3>{{ $card['value'] }}</h3>
                            <p class="text-white font-weight-500 mb-0">{{ $card['description'] }}</p>
                        </div>
                        <div class="col-4 background-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="col-12 stretch-card" style="padding-top:10px">
        <div class="card">
            <div class="card-body">
                <p class="card-title mb-0">Nilai Peserta</p>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Modul</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $products = [
                                    [
                                        'name' => 'Search Engine Marketing',
                                        'class' => '$362',
                                        'modul' => '21 Sep 2018',
                                        'point' => 'Completed',
                                        'badge' => 'success',
                                    ],
                                    [
                                        'name' => 'Search Engine Optimization',
                                        'class' => '$116',
                                        'modul' => '13 Jun 2018',
                                        'point' => 'Completed',
                                        'badge' => 'success',
                                    ],
                                    [
                                        'name' => 'Display Advertising',
                                        'class' => '$551',
                                        'modul' => '28 Sep 2018',
                                        'point' => 'Pending',
                                        'badge' => 'warning',
                                    ],
                                ];
                            @endphp
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product['name'] }}</td>
                                    <td class="font-weight-bold">{{ $product['class'] }}</td>
                                    <td>{{ $product['modul'] }}</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-{{ $product['badge'] }}">{{ $product['point'] }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
