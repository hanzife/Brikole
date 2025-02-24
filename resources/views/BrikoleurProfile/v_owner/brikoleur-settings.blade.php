@extends('layouts.master')
@section('content')  
    <title>Paramètres du compte</title>
    <link rel="stylesheet" href="css/brikoleur-settings.css">
    <div>
        <!-- header -->
    </div>
    <!-- main -->
    <div class="b-p-rootBlank"></div>
    <!-- Content -->
    <div class="container-custom">
        <!-- <div class="b-p-container"> -->
        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <p>{!! \Session::get('success') !!}</p>
        </ul>
    </div>
@endif


        @foreach($DataBrikoleur as $rowBrikoleur)
        <form method="POST" action="brikoleuredit"  id="b-p-form" class="b-p-content" autocomplete="off"  enctype="multipart/form-data">
        {{ csrf_field() }}    
        <div class="b-p-content-top">
                <div class="b-p-content-top-left">
                    <div class="b-p-imageProfile">
                        <img src="/images/Uploads/Profile/{{$rowBrikoleur->reference}}"  alt="" />
                        <!-- <input type="hidden" id="Profileimage" name="imageProfile"> -->
                    </div>
                    <div class="b-p-imageUploadButtonSection">
                        <input id="b-p-imageUploadButton" type="file" name="image"/>
                        <label for="b-p-imageUploadButton">
                            Choisire une image
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3 16.9998C3 16.7346 3.10536 16.4802 3.29289 16.2927C3.48043 16.1051 3.73478 15.9998 4 15.9998H16C16.2652 15.9998 16.5196 16.1051 16.7071 16.2927C16.8946 16.4802 17 16.7346 17 16.9998C17 17.265 16.8946 17.5194 16.7071 17.7069C16.5196 17.8944 16.2652 17.9998 16 17.9998H4C3.73478 17.9998 3.48043 17.8944 3.29289 17.7069C3.10536 17.5194 3 17.265 3 16.9998ZM6.293 6.70679C6.10553 6.51926 6.00021 6.26495 6.00021 5.99979C6.00021 5.73462 6.10553 5.48031 6.293 5.29279L9.293 2.29279C9.48053 2.10532 9.73484 2 10 2C10.2652 2 10.5195 2.10532 10.707 2.29279L13.707 5.29279C13.8892 5.48139 13.99 5.73399 13.9877 5.99619C13.9854 6.25838 13.8802 6.5092 13.6948 6.6946C13.5094 6.88001 13.2586 6.98518 12.9964 6.98746C12.7342 6.98974 12.4816 6.88894 12.293 6.70679L11 5.41379V12.9998C11 13.265 10.8946 13.5194 10.7071 13.7069C10.5196 13.8944 10.2652 13.9998 10 13.9998C9.73478 13.9998 9.48043 13.8944 9.29289 13.7069C9.10536 13.5194 9 13.265 9 12.9998V5.41379L7.707 6.70679C7.51947 6.89426 7.26516 6.99957 7 6.99957C6.73484 6.99957 6.48053 6.89426 6.293 6.70679Z"
                                    fill="#676878" />
                            </svg>
                        </label>
                    </div>
                    <div class="b-p-imageSize">
                        Taille maximale d'image est 512 Ko
                    </div>
                </div>
                <div class="b-p-content-top-right">
                    <div class="b-p-content-top-right-input-grp">
                        <span class="b-p-input-title">Biographie</span>
                        <textarea class="b-p-input b-p-commentArea" type="textarea" name="description"
                            placeholder="">{{$rowBrikoleur->description}}</textarea>
                        <div id="b-p-bio-error" class="b-p-input-error"></div>
                    </div>
                    <div class="b-p-content-top-right-input-grp" style="position: relative;">
                        <span class="b-p-input-title">Ville</span>
                        <input type="text" id="b-p-city" name="ville" required="" class="b-p-input" value="{{$rowBrikoleur->ville}}" />
                        <div class="b-p-cities-list" id="b-p-cities-list">
                            <div class="b-p-city-select" tabindex="0">
                                Safi
                            </div>
                            <div class="b-p-city-select" tabindex="0">
                                Marrakech
                            </div>
                            <div class="b-p-city-select" tabindex="0">
                                CasaBlanca
                            </div>
                        </div>
                        <div id="b-p-ville-error" class="b-p-input-error"></div>
                    </div>
                    <div class="b-p-content-top-right-input-grp">
                        <span class="b-p-input-title">Numero de téléphone</span>
                        <input type="text" id="b-p-tel" name="telephone" required="" class="b-p-input" value="{{$rowBrikoleur->telephone}}"/>
                        <div id="b-p-tel-error" class="b-p-input-error"></div>
                    </div>
                </div>
            </div>
            <div class="b-p-content-sep"></div>
            <div class="b-p-content-bot">
                <div class="b-p-content-top-right-input-grp">
                    <span class="b-p-input-title">Mot de passe</span>
                    <input type="password" id="b-p-pass" name="mot_passe" required="" class="b-p-input" />
                    <div id="b-p-pass-error" class="b-p-input-error">
                    @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                    </div>
                </div>
                <div class="b-p-content-top-right-input-grp">
                    <span class="b-p-input-title">Confirmation de mot de passe</span>
                    <input type="password" id="b-p-confirm-pass" name="Confirmmot_passe" required="" class="b-p-input" />
                    <div id="b-p-confirm-error" class="b-p-input-error"></div>
                </div>
            </div>
            <div class="b-p-content-btns">
                <button id="b-p-cancel" class="b-p-btn-sec">Annuler</button>
                <button id="b-p-submit"  type="submit"  class="b-p-btn-main">Modifier</button>
            </div>
        </form>
        @endforeach
        <!-- </div> -->
    </div>
    <!--  -->
    <div class="b-p-rootBlank"></div>
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/brikoleur-settings.js"></script>
    @endsection
