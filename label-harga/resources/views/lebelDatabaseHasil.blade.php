@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/lebelHargaOutput.css">
@endsection

@section('title')
    Lebel Databse
@endsection

@section('content')
    @php
        $numberPage = ceil(count($barangs)/10);
        $numberLebel = count($barangs);
        $lebelCounter = 0;
        $leftoverLebel = count($barangs);
    @endphp

 
   
   @for ($i = 0; $i < $numberPage; $i++)
    @if ($leftoverLebel > 10)
    <div class="page">
        @php
            $endLebel =  $lebelCounter + 10;
        @endphp

        @for ($j = $lebelCounter; $j < $endLebel; $j++)
        @php
            if($barangs[$lebelCounter] == null){
                continue;
            }
        @endphp

        <div class="label">
            <h1 class="nama-barang">{{$barangs[$lebelCounter]->cSTKdesc}}</h1>
            <div class="hargas">
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp {{$barangs[$lebelCounter]->nHrgQty01 * 1}}</span>  <span class="satuan">/ 1 PCS</span></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span>{{$barangs[$lebelCounter]->nHrgQty01 * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <span>{{($barangs[$lebelCounter]->nHrgQty1 + 1) * $barangs[$lebelCounter]->nHrgQty02}}</span> / <span class="satuan">{{$barangs[$lebelCounter]->nHrgQty1 + 1}} PCS</span></p>

                    </div>
                    <div class="harga-pcs">
                        <p>({{$barangs[$lebelCounter]->nHrgQty02 * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <span>{{$barangs[$lebelCounter]->nHrgQty03 * ($barangs[$lebelCounter]->nHrgQty2 + 1)}}</span> <span class="satuan"> / {{$barangs[$lebelCounter]->nHrgQty2 + 1}} PCS</span></p>

                    </div>
                    <div class="harga-pcs">
                        <p>(<span>{{$barangs[$lebelCounter]->nHrgQty03  * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
            </div>
        </div>

        @php
            $leftoverLebel--;
            $lebelCounter++;
        @endphp

        @endfor 
    </div>
    @else
    <div class="page">
        @php
            $endLebel =  $lebelCounter + $leftoverLebel;
        @endphp
        @for ($j = $lebelCounter; $j < $endLebel; $j++)
        @php
            if($barangs[$lebelCounter] == null){
                continue;
            }
        @endphp
        <div class="label">
            <h1 class="nama-barang">{{$barangs[$lebelCounter]->cSTKdesc}}</h1>
            <div class="hargas">
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp {{$barangs[$lebelCounter]->nHrgQty01 * 1}}</span>  <span class="satuan">/ 1 PCS</span></p>
                    </div>
                    <div class="harga-pcs">
                        <p>(<span>{{$barangs[$lebelCounter]->nHrgQty01 * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <span>{{($barangs[$lebelCounter]->nHrgQty1 + 1) * $barangs[$lebelCounter]->nHrgQty02}}</span> / <span class="satuan">{{$barangs[$lebelCounter]->nHrgQty1 + 1}} PCS</span></p>

                    </div>
                    <div class="harga-pcs">
                        <p>({{$barangs[$lebelCounter]->nHrgQty02 * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
                <div class="harga">
                    <div class="harga-total">
                        <p>Rp <span>{{$barangs[$lebelCounter]->nHrgQty03 * ($barangs[$lebelCounter]->nHrgQty2 + 1)}}</span> <span class="satuan"> / {{$barangs[$lebelCounter]->nHrgQty2 + 1}} PCS</span></p>

                    </div>
                    <div class="harga-pcs">
                        <p>(<span>{{$barangs[$lebelCounter]->nHrgQty03  * 1}}</span> <span class="satuan">/PCS</span>)</p>
                    </div>
                </div>
            </div>
        </div>
        @php
            $leftoverLebel--;
            $lebelCounter++;
         @endphp
        @endfor 
    </div>
    @endif
   
        
    

   @endfor


    
@endsection

@section('javascript')
    {{-- <script src="javascript/script.js"></script> --}}
@endsection