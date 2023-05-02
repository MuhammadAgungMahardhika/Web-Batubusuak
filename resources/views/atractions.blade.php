@extends('layout.main')
@section('container')
    <section class="container-fluid p-4" id="Atraksi">
        <div class="row " style="padding-top: 100px;">
            <div class="col ">
                <h2 class="display-6 text-center text-secondary" style="font-family: 'Roboto', serif;">ATRAKSI WISATA</h2>
            </div>
        </div>
        <hr>
        <div class="row justify-content-end my-2">
            <div class="col-md-4 text-end" id="pencarian">
                        <input type="checkbox" class="form-check-input" value="Alam" id="checkCategories1">
                        <label for="checkCategories2" class="form-check-label">Alam</label>

                        <input type="checkbox" value="Alam" id="checkCategories2">
                        <label for="checkCategories2" class="form-check-label">Sejarah</label>

                        <input type="checkbox" value="Alam" id="checkCategories3">
                        <label for="checkCategories2" class="form-check-label">Alam</label> 
            </div>
        </div>
        <div class="row">
                <?php $no = 0; ?>
                <div class="col-3  my-4">
                    <div class="card shadow p-1">
                        <h3 class="text-center">Rekomendasi</h3>
                        <div class="card">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <a href="" onclick="showDetailAtraction('1')" data-bs-toggle="modal" data-bs-target="#detailAtraction" style="color: #eaeaea;">
                                        <img src="images/LUBUAK-MANDE-RUBIAH.JPG" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block justify-content-center" >
                                          <h5>Lubuak Mande Rubiah</h5>
                                        </div>
                                    </a>
                                   
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/JEMBATAN-SARINGAN.JPG" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Saringan</h5>
                                      
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/LUBUAK-BIRU.JPG" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                      <h5>Lubuak Biru</h5>
                                     
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-9 my-4">
                    <div class="row ">
                        @foreach($datas as $data) 
                        <div class="col-lg-3 col-md-4 mb-4 col-sm-6">
                            <!-- Awal atraksi -->
                            <a href="" onclick="showDetail('{{ $data->id }}')" data-bs-toggle="modal" data-bs-target="#detailAtraction" style="color: #eaeaea;">
                                <div class="card cardEfek">
                                       @if(@isset($data->atraction_gallery->first()->url))
                                              <img src="images/{{ $data->atraction_gallery->first()->url }}" class="card-img">
                                       @endif
                                  
                                    <div class="card-header bg-white text-start" style="color: #3B3B3B;">
                                        <p class="card-title">{{ $data->name; }}</p>
                                        <table class="table table-borderless table-sm small figure-caption">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Price
                                                    </td>
                                                    <td>
                                                        : {{ $data->price; }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Buka
                                                    </td>
                                                    <td>
                                                        : {{ $data->open; }} - WIB
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Tutup
                                                    </td>
                                                    <td>
                                                        : {{ $data->close; }} - WIB
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="card-text "> Tekan untuk melihat</p>
                                    </div>
                                </div>
                            </a>
                            <?php $no++; ?>
                        </div>
                    @endforeach
                    </div>
                </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="detailAtraction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalName"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselModal" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carousel-indicators"></div>
                        <div class="carousel-inner rounded" id="carousel-inner"></div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselModal" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselModal" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="py-4">
                        <p class="lead" style="text-align: justify;" id="modalDescription"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="kontak.php" role="button" class="btn btn-success"><i class="fa fa-phone"></i> Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
    <script>
            function showDetail(id) {
                $.ajax({
                    url:`atractions/${id}`,
                    success : function(response){
                    let galleries =  response.atraction_gallery
                    let i = 0
                    $('#modalName').html(`<h5 class="modal-title" id="modalName">${response.name}</h5>`)
                    $('#modalDescription').html(`<h5 class="modal-title" id="modalName">${response.description}</h5>`)
                    $('#carousel-indicators').html(``)
                    $('#carousel-inner').html(``)
                    
                        galleries.forEach(gallery => {
                            $('#carousel-indicators').append(`<button type="button" data-bs-target="#carouselModal" data-bs-slide-to="${i}" class="${i==0?'active':''}" aria-current="true"></button>`)
                            $('#carousel-inner').append(`<div class="carousel-item ${i==0?'active':''}">
                            <img src="images/${gallery['url']}" class="d-block w-100"></div>`)
                            i++
                        })
                    },
                    error : function(response){
                        return response
                    }
                });
            }
    </script>
@endsection
   
