@extends('layout.main')
@section('container')
<section class="container" id="paket">
    <div class="row d-flex" style="padding-top: 100px;">
        <h1 class="display-6 text-secondary" style="font-family: 'Roboto', serif;">PAKET WISATA</h1>
        <? $no = 0; ?>
        @foreach($packages as $package)
            <?php
            $id = $package->id;
            $name = $package->name;
            $price = $package->price;
            $description = $package->description;
            ?>
        
            <div class="col-md-12">
                <div class="card mb-3 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                                <img src="images/{{ $package->package_galleries->first()->url }} " class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $name }}</h5>
                                <p class="figure-caption" maxlength="20">{{ $description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $price }} IDR</small></p>
                                <div class="text-end">
                                    <a role="button" class="btn btn-success" href="packages/<?= $id ?>">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
    
@endsection