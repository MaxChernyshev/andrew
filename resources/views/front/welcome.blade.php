@extends('front.layouts.layout')

@section('content')
    <symbol id="lifeworks_en" viewBox="0 0 930.427 140.875"><path d="M130.581 92.866c-19.03 0-34.955 15.924-34.955 34.567a34.761 34.761 0 1034.955-34.567zm-.097 52.142a17.38 17.38 0 1117.283-17.478 17.529 17.529 0 01-17.283 17.478zm-60.768-43.485a34.761 34.761 0 000-69.522c-19.031 0-34.955 15.924-34.955 34.567a35.057 35.057 0 0034.955 34.955z" transform="translate(-34.76 -21.513)" fill="#756eff"></path><path class="cls-2" d="M344.152 58.216V69.09h-19.03v22.72h19.03v67.774h25.246V91.811h22.332v-22.72h-22.332v-9.904c0-7.38 3.884-13.206 13.01-13.206a38.305 38.305 0 019.322 1.166v-21.75a38.803 38.803 0 00-13.593-2.136c-19.032 0-33.985 13.205-33.985 34.955z" transform="translate(-34.76 -21.513)"></path><path class="cls-2" d="M191.709 13.205h-26.604v124.868h70.492v-24.469h-43.888V13.205z"></path><path class="cls-2" d="M298.905 21.513a17.38 17.38 0 100 34.76 17.38 17.38 0 000-34.76z" transform="translate(-34.76 -21.513)"></path><path class="cls-2" d="M251.133 47.578h25.828v90.495h-25.828z"></path><path class="cls-2" d="M767.11 84.626V69.091h-23.304v90.494h25.245v-38.45c0-21.362 8.35-29.712 24.274-29.712a44.478 44.478 0 017.574.583V68.508a44.478 44.478 0 00-7.574-.583c-10.874 0-19.807 4.661-26.216 16.701z" transform="translate(-34.76 -21.513)"></path><path class="cls-2" d="M859.934 47.578h-29.906l-26.216 32.881V6.991h-24.857v131.082h24.857v-24.832l8.657-10.129 20.666 34.961h29.13l-34.3-53.091 31.969-37.404z"></path><path class="cls-2" d="M942.079 104.822l-10.293-3.69c-4.66-1.747-6.99-4.077-6.99-7.767s3.3-6.408 7.379-6.408 7.573 3.107 8.544 7.379l20.78-7.38c-4.273-11.651-15.342-19.807-29.324-19.807-17.672 0-30.295 12.428-30.295 26.993 0 12.04 4.855 20.584 21.362 26.799l10.486 3.884c5.632 2.136 8.35 5.243 8.35 8.933 0 4.66-3.883 7.573-9.32 7.573s-9.904-3.301-11.458-10.292l-21.944 5.243c2.719 14.565 16.312 25.44 33.402 25.44 18.254 0 32.43-13.011 32.43-27.964 0-11.652-4.66-22.333-23.11-28.936zM682.246 66.76a47.772 47.772 0 1047.772 47.772 47.738 47.738 0 00-47.772-47.772zm0 70.881a23.11 23.11 0 1123.11-23.109 23.04 23.04 0 01-23.11 23.11z" transform="translate(-34.76 -21.513)"></path><path class="cls-2" d="M580.488 13.205L558.932 87.97l-20.779-73.794h-18.254L499.508 87.97l-19.613-74.765h-27.188l36.509 124.868h19.225l20.002-70.105 21.556 70.105h18.449l37.868-124.868h-25.828z"></path><path class="cls-2" d="M445.91 66.76c-26.798 0-45.83 20.39-45.83 47.578 0 27.576 20.003 47.966 47.578 47.966 17.866 0 32.82-9.321 40.587-22.72l-19.031-10.876c-4.078 6.991-11.846 11.264-20.779 11.264-12.103 0-20.82-7.236-22.585-17.457l64.143.173a39.306 39.306 0 00.777-8.35c0-27.187-19.42-47.578-44.86-47.578zm-19.668 37.253c1.715-9.82 9.871-16.085 19.863-16.085 10.292 0 17.283 6.602 19.03 15.924z" transform="translate(-34.76 -21.513)"></path></symbol>
    <div class="container-fluid mt-5 mb-5">
        <div class="row d-flex align-items-center">
            <div class="col-8 mx-auto">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Some placeholder content for the second accordion panel. This panel is hidden by default.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
