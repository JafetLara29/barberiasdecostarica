@extends('layouts.adminhome')

@section('content')
<div class="h-100" style="background-image:url('storage/welcome_images/admin-bg.jpg')">

    <div class="text-center" style="background-color: #f2f2f2;">

        <div class="col d-flex justify-content-center">
            <div class="col-md-8">

                <div class="card-body">

                    <div class="bg-text bg-card">
                        @if (session('status') && session('status') == "Your password has been reset!")
                            <div class="alert alert-success" role="alert">
                                Contraseña restablecida exitosamente
                            </div>
                        @endif

                        <div text-align: center class="py-3">
                            <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle">
                            <h3>
                                <strong>{{ Auth::user()->name }}</strong>
                            </h3>

                            <h5>@lang('messages.welcome_dashboard')</h5>
                            <p>@lang('messages.select_option')</p>

                            <div>
                                <div id="knob" class="knob" onclick="changeLanguage()"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function changeLanguage() {
        var currentLocale = '{{ app()->getLocale() }}';
        var newLocale = currentLocale === 'en' ? 'es' : 'en';
        var url = "{{ route('language.change', ['locale' => ':locale']) }}";
        url = url.replace(':locale', newLocale);
        window.location.href = url;
    }

    var knob = document.getElementById('knob');
    var isDragging = false;
    var initialPosition = 0;
    var currentPosition = 0;

    knob.addEventListener('mousedown', function(event) {
        isDragging = true;
        initialPosition = event.clientX;
    });

    document.addEventListener('mousemove', function(event) {
        if (isDragging) {
            currentPosition = event.clientX - initialPosition;
            knob.style.transform = 'rotate(' + currentPosition + 'deg)';
        }
    });

    document.addEventListener('mouseup', function() {
        if (isDragging) {
            isDragging = false;
            currentPosition = 0;
            knob.style.transform = 'rotate(0)';
        }
    });

    knob.addEventListener('touchstart', function(event) {
        isDragging = true;
        initialPosition = event.touches[0].clientX;
    });

    document.addEventListener('touchmove', function(event) {
        if (isDragging) {
            currentPosition = event.touches[0].clientX - initialPosition;
            knob.style.transform = 'rotate(' + currentPosition + 'deg)';
        }
    });

    document.addEventListener('touchend', function() {
        if (isDragging) {
            isDragging = false;
            currentPosition = 0;
            knob.style.transform = 'rotate(0)';
        }
    });

// Obtén el texto traducido utilizando JavaScript
var welcomeDashboard = "@lang('messages.welcome_dashboard')";
    var selectOption = "@lang('messages.select_option')";

    // Asigna el texto traducido a los elementos HTML correspondientes
    document.getElementById("welcomeDashboard").textContent = welcomeDashboard;
    document.getElementById("selectOption").textContent = selectOption;

</script>

<style>
    .knob {
        background: blue;
        width: 50px;
        height: 50px;
        border: none;
        cursor: pointer;
        border-radius: 50%;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s;
    }
</style>

@endsection
