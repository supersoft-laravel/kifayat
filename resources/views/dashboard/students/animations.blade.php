@extends('dashboard.layouts.master')

@section('title', __('Audio Books'))
@section('description', '')
@section('keywords', '')
@section('author', '')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/student-audios.css') }}" />
@endsection

@section('backbutton')
    <a href="{{ route('student.portal') }}" class="btn btn-back">
        <i class="fa-solid fa-arrow-left"></i> <span>BACK</span>
    </a>
@endsection

@section('content')
    <div class="header-heading">
        <span>Animations</span>
    </div>
    <div class="container mt-5">
        <div class="accordion" id="animationsAccordion">

            @foreach ($animations as $className => $chapters)
                <div class="accordion-item mb-2">

                    <h2 class="accordion-header" id="heading-{{ Str::slug($className) }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{ Str::slug($className) }}">
                            {{ $className }}
                        </button>
                    </h2>

                    <div id="collapse-{{ Str::slug($className) }}" class="accordion-collapse collapse">
                        <div class="accordion-body">

                            <div class="accordion">

                                @foreach ($chapters as $chapterName => $files)
                                    <div class="accordion-item mb-2">

                                        <h2 class="accordion-header" id="chapter-{{ Str::slug($chapterName) }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ Str::slug($chapterName) }}">
                                                {{ $chapterName }}
                                            </button>
                                        </h2>

                                        <div id="collapse-{{ Str::slug($chapterName) }}"
                                            class="accordion-collapse collapse">
                                            <div class="accordion-body">

                                                @if (count($files) > 0)
                                                    <ul class="list-group">
                                                        @foreach ($files as $file)
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                                {{ $file }}
                                                                <a href="{{ route('student.animation.preview', ['file' => 'assets/animations/class1/chapter1/Ch_01_LS_01.swf']) }}"
                                                                    class="btn btn-sm btn-primary">
                                                                    View
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <p class="text-muted">No files available</p>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
@endsection
