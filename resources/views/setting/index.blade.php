@extends('templates.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Header Section</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('failed'))
        <div class="alert alert-danger mb-4" role="alert">
            {{ session('failed') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Header Section!</h6>
        </div>
        <div class="card-body">
            <form action="/setting/update" method="post">
                @csrf
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="headline">Headline:</label>
                        <input type="text" class="form-control" id="headline" name="headline"
                            placeholder="Enter name section" value="{{ $setting->headline }}">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="button_label">Button Label:</label>
                        <input type="text" class="form-control" id="button_label" name="button_label"
                            placeholder="Enter button label section" value="{{ $setting->button_label }}">
                    </div>
                    <div class="col-12 mb-3">
                        <div class="wrapper d-flex justify-content-between align-items-center">
                            <label for="navigation">Navigation Header:</label>
                            <div class="wrapper">
                                <button type="button" class="plus-setting btn btn-primary btn-sm">Add New +</button>
                                <button type="button" class="minus-setting btn btn-danger btn-sm">Minus -</button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 d-flex wrapper-navigation" style="gap: 1rem !important; overflow: auto;">
                                @php
                                    $settingSelection = $setting->navigation;
                                    $settingSelection = explode(',', $settingSelection);
                                @endphp
                                @foreach ($settingSelection as $settingPerOne)
                                    <input type="text" class="form-control input-navigation" id="navigation"
                                        name="navigation[]" value="{{ $settingPerOne }}" style="min-width: 200px;" required>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="navigation_button">Navigation Button:</label>
                        <input type="text" class="form-control" id="navigation_button" name="navigation_button"
                            placeholder="Enter button label section" value="{{ $setting->navigation_button }}">
                    </div>
                    <div class="col-8 mb-3">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter description section" value="{{ $setting->description }}">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Edit Data Header</button>
                        <a href="/setting" class="btn btn-secondary">Cancel Edit</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const wrapperNavigation = document.querySelector('.wrapper-navigation');
        const plusSetting = document.querySelector('.plus-setting');
        const minusSetting = document.querySelector('.minus-setting');

        plusSetting.addEventListener('click', function() {
            let inputSetting = document.createElement('input');
            inputSetting.setAttribute('type', 'text');
            inputSetting.setAttribute('class', 'form-control input-navigation');
            inputSetting.setAttribute('id', 'navigation');
            inputSetting.setAttribute('name', 'navigation[]');
            inputSetting.setAttribute('style', 'min-width: 200px;');
            inputSetting.required = true;
            wrapperNavigation.appendChild(inputSetting);
        });

        minusSetting.addEventListener('click', function() {
            const navigationInput = document.querySelector('.wrapper-navigation');
            let lastNavigationInput = navigationInput.lastElementChild;

            lastNavigationInput.remove();
        });
    </script>
@endsection
