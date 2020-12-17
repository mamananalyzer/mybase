<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="{{ url('/submits') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
        else {
            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
            return false;
        }">
        {{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="brand">Brand *</label>
            <select class="custom-select custom-select-md form-control @error('brand') is-invalid @enderror" name="brand" id="brand">
                @foreach ($brands as $brand)
                    <option value="{{ $brand -> display_brand }}">{{ $brand -> display_brand }}</option>
                @endforeach
            </select>
            @error('brand')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="categorie">Category *</label>
            <select class="custom-select custom-select-md form-control @error('category') is-invalid @enderror" name="categorie" id="categorie">
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie -> kategori }}">{{ $categorie -> display_kategori }}</option>
                @endforeach
            </select>
            @error('categorie')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Type *</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="A2000, Analog Meter, Rish Eine+, Acuvim II" name="type" value="{{ old('type')}}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <div class="container mt-5">
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="filecsv">Choose csv File to Read *</label>
                    </div>
                    <div class="col">
                        <input type="file" class="form-control @error('filecsv') is-invalid @enderror" id="filecsv" placeholder="filecsv" name="filecsv" value="{{ old('filecsv')}}">
                    </div>
                </div>
            </div>
            <input type="checkbox" name="checkbox" value="check" id="agree" />
            <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
            <br>
            <br>
            <a href="{{ url('/products') }}" class="btn btn-secondary mb-4 mr-2">Back</a>
            <input class="btn btn-success mb-4" type="submit" name="submit" value="Submit File" />
        </div>
        {{-- <div class="form-group">
            <label for="description">Description *</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description of Product" name="description" value="{{ old('description')}}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="listdescription">List datasheetification of Product *</label>
            <input type="text" class="form-control @error('listdescription') is-invalid @enderror" id="listdescription" placeholder="Specification divider by ' , '" name="listdescription" value="{{ old('listdescription')}}">
            @error('listdescription')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="datasheet">Link datasheet *</label>
            <input type="text" class="form-control @error('datasheet') is-invalid @enderror" id="datasheet" placeholder="Link datasheet" name="datasheet" value="{{ old('datasheet')}}">
            @error('datasheet')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="usermanual">Link User's Manual *</label>
            <input type="text" class="form-control @error('usermanual') is-invalid @enderror" id="usermanual" placeholder="Link User's Manual" name="usermanual" value="{{ old('usermanual')}}">
            @error('usermanual')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="modbus">Link Modbus Map *</label>
            <input type="text" class="form-control @error('modbus') is-invalid @enderror" id="modbus" placeholder="Link Modbus Map" name="modbus" value="{{ old('modbus')}}">
            @error('modbus')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="software">Link Software *</label>
            <input type="text" class="form-control @error('software') is-invalid @enderror" id="software" placeholder="Link Software" name="software" value="{{ old('software')}}">
            @error('software')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        
    </form>
</body>
</html>