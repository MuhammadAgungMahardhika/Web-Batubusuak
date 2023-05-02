@extends('layout.main')
@section('container')
  <!-- Content -->
  <section class="container " id="paket">
    <div class="row" style="padding-top: 100px;">
        <h2 class="display-6 text-center text-secondary" style="font-family: 'Roboto', serif;">DETAIL PAKET WISATA</h2>
        <div class="col-md-4 p-4 border  mt-4">
    
                <table class="table table-borderless" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;">
                    <thead>
                        <tr>
                            <td class="border border-secondary display-6 text-dark text-capitalize" colspan="2">
                                {{ $package->name }}
                            </td>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        <tr>
                            <td> Harga</td>
                            <td> Rp.{{ $package->price }} </td>
                        </tr>
                        <tr>
                            <td> Keterangan</td>
                            <td style="text-align: left;"> {{ $package->description }}</td>
                        </tr>
                        <tr>
                            <td> Fasilitas</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-md-8 p-4">
           <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php $i = 0; ?>
                  @foreach($package->package_gallery as $pg)
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                  <?php $i++ ?>
                  @endforeach
                </div>
                <div class="carousel-inner">
                  <?php $c = 0; ?>
                  @foreach($package->package_gallery as $pg)
                    <div class="carousel-item {{ $c==0?'active':'' }}">
                      <img src="{{ URL::to('images/PATAMUAN.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                  <?php $c++ ?>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
           </div>
        </div>
    </div>
</section>   
@endsection