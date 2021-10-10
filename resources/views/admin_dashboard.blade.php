<x-app>
    @slot('styles')
        <link rel="stylesheet" href="/css/admin.css">
    @endslot
    <div class="container">
        <x-navbar>
            <div class="d-flex">
                Hi, Admin👋
            </div>
        </x-navbar>

        <div class="row dashboard">

            <div class="col">

                <div class="card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path d="M27.5 30.9375C36.04 30.9375 42.9688 24.0088 42.9688 15.4688C42.9688 6.92871 36.04 0 27.5 0C18.96 0 12.0312 6.92871 12.0312 15.4688C12.0312 24.0088 18.96 30.9375 27.5 30.9375ZM41.25 34.375H35.3311C32.9463 35.4707 30.293 36.0938 27.5 36.0938C24.707 36.0938 22.0645 35.4707 19.6689 34.375H13.75C6.15527 34.375 0 40.5303 0 48.125V49.8438C0 52.6904 2.30957 55 5.15625 55H49.8438C52.6904 55 55 52.6904 55 49.8438V48.125C55 40.5303 48.8447 34.375 41.25 34.375Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <span class="title mb-0">{{ $users->count() }}</span>
                        <p>Pengguna</p>
                    </div>
                </div>
                
            </div>

            <div class="col">

                <div class="card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path d="M48.6373 13.793C49.0056 14.1613 49.2143 14.6585 49.2143 15.1802V53.0357C49.2143 54.1222 48.3365 55 47.25 55H7.96429C6.87779 55 6 54.1222 6 53.0357V1.96429C6 0.87779 6.87779 0 7.96429 0H34.034C34.5558 0 35.0592 0.208705 35.4275 0.577009L48.6373 13.793V13.793ZM44.6842 16.0826L33.1317 4.53013V16.0826H44.6842Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <span class="title mb-0">{{ $resumes->count() }}</span>
                        <p>CV</p>
                    </div>
                </div>

            </div>

            <div class="col">

                <div class="card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 55 55" fill="none">
                            <path d="M1.71875 34.5939C2.17459 34.5939 2.61176 34.775 2.93409 35.0973C3.25642 35.4196 3.4375 35.8568 3.4375 36.3126V44.9064C3.4375 45.8181 3.79966 46.6924 4.44432 47.3371C5.08898 47.9817 5.96332 48.3439 6.875 48.3439H48.125C49.0367 48.3439 49.911 47.9817 50.5557 47.3371C51.2003 46.6924 51.5625 45.8181 51.5625 44.9064V36.3126C51.5625 35.8568 51.7436 35.4196 52.0659 35.0973C52.3882 34.775 52.8254 34.5939 53.2812 34.5939C53.7371 34.5939 54.1743 34.775 54.4966 35.0973C54.8189 35.4196 55 35.8568 55 36.3126V44.9064C55 46.7297 54.2757 48.4784 52.9864 49.7677C51.697 51.057 49.9484 51.7814 48.125 51.7814H6.875C5.05164 51.7814 3.30295 51.057 2.01364 49.7677C0.724328 48.4784 0 46.7297 0 44.9064V36.3126C0 35.8568 0.181082 35.4196 0.50341 35.0973C0.825738 34.775 1.26291 34.5939 1.71875 34.5939V34.5939Z" fill="white"/>
                            <path d="M26.2836 41.3106C26.4432 41.4707 26.6329 41.5977 26.8417 41.6843C27.0505 41.771 27.2744 41.8156 27.5005 41.8156C27.7265 41.8156 27.9504 41.771 28.1592 41.6843C28.368 41.5977 28.5577 41.4707 28.7173 41.3106L39.0298 30.9981C39.3526 30.6754 39.5339 30.2377 39.5339 29.7812C39.5339 29.3248 39.3526 28.8871 39.0298 28.5644C38.7071 28.2416 38.2694 28.0603 37.813 28.0603C37.3565 28.0603 36.9188 28.2416 36.5961 28.5644L29.2192 35.9447V5.71875C29.2192 5.26291 29.0381 4.82574 28.7158 4.50341C28.3935 4.18108 27.9563 4 27.5005 4C27.0446 4 26.6075 4.18108 26.2851 4.50341C25.9628 4.82574 25.7817 5.26291 25.7817 5.71875V35.9447L18.4048 28.5644C18.0821 28.2416 17.6444 28.0603 17.188 28.0603C16.7315 28.0603 16.2938 28.2416 15.9711 28.5644C15.6484 28.8871 15.467 29.3248 15.467 29.7812C15.467 30.2377 15.6484 30.6754 15.9711 30.9981L26.2836 41.3106V41.3106Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="card-body text-center">
                        <span class="title mb-0">12</span>
                        <p>Download</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-cv-tab" data-bs-toggle="tab" data-bs-target="#nav-cv" type="button" role="tab" aria-controls="nav-cv" aria-selected="true">CV</button>
                      <button class="nav-link" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="false">Pengguna</button>
                      
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active pb-5 pt-3" id="nav-cv" role="tabpanel" aria-labelledby="nav-cv-tab">
                        <div class="row">
                            @foreach ($resumes as $resume)
                            <div class="col-lg-4 col-md-6">
                                <x-draft>
                                    @slot('img', $resume->img)
                                    @slot('title', $resume->title)
                                    @slot('name', $resume->user->name)
                                    @slot('slug', $resume->slug)
                                </x-draft>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade pb-5" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="mt-5 mb-2">Data Pengguna</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col" class="pe-5">Nama</th>
                                            <th scope="col" class="pe-5">Email</th>
                                            <th scope="col">Tanggal daftar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $i => $user)
                                            
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                        </tr>
                
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    @slot('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    @endslot
</x-app>