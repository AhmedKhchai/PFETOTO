@extends('layouts.adminLayout')
@section('contentAdmin')
    {{-- <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout> --}}

    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1>Ajouter un Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <form method="POST" action="/dashboard/addArticle">
        @csrf

        <main class="container">
            <h5 class="card-header" style="margin-top: 3rem">Dashboard
            </h5>
            <div class="my-3 p-3 bg-white rounded box-shadow">



                <div class="form-group">
                    <label class="form-label text-dark">Titre</label>
                    <input name="titre" type="text" class="form-control @error('titre')
                                                                                                        is-invalid
                                                            @enderror" placeholder="Titre">

                    @error('titre')
                        <p class="text-danger">{{ $errors->first('titre') }}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label class="form-label text-dark">Categorie</label>
                    <select name="categorie[]" class="form-control @error('categorie')
                                                                                                        is-invalid
                                                            @enderror" multiple>
                        @error('categorie')
                            <p class="text-danger">{{ $errors->first('categorie') }}</p>
                        @enderror
                        <option value="Hotels">Hotels</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Salon & Spa">Salon & Spa </option>
                        <option value="Education">Education</option>
                        <option value="Café">Café</option>
                        <option value="Boulangerie">Boulangerie</option>
                    </select>
                    {{-- <div id="list1" class="dropdown-check-list" tabindex="100">
                        <span class="anchor">Select Fruits</span>
                        <ul class="items">
                            <li><input type="checkbox" />Apple </li>
                            <li><input type="checkbox" />Orange</li>
                            <li><input type="checkbox" />Grapes </li>
                            <li><input type="checkbox" />Berry </li>
                            <li><input type="checkbox" />Mango </li>
                            <li><input type="checkbox" />Banana </li>
                            <li><input type="checkbox" />Tomato</li>
                        </ul>
                    </div> --}}
                </div>

                <div class="form-group">
                    <label class="form-label text-dark">Adresse</label>
                    <input name="adresse" type="text" class="form-control @error('adresse')
                                                                                        is-invalid
                                                    @enderror" placeholder="Adresse">
                    @error('adresse')
                        <p class="text-danger">{{ $errors->first('adresse') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label text-dark">N: Telephone</label>
                    <input name="phone" type="text" class="form-control @error('phone')
                                                                                is-invalid
                                                @enderror" placeholder="Phone Number">
                    @error('phone')
                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label text-dark">Jour ouvert</label>
                    <div class="form-check form-check-inline" style="margin-bottom: 1rem">
                        <input name="weekdays" class="form-check-input" type="checkbox" id="active" value="1">


                        <label class="form-check-label" for="weekdays">Lundi-Vendredi</label>
                    </div>
                    <br>
                    <div class="form-check form-check-inline" style="margin-bottom: 1rem">
                        <input name="weekends" class="form-check-input" type="checkbox" id="active" value="1">

                        <label class="form-check-label" for="weekends">Weekends</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label text-dark">Heure de Travail</label>
                            <select name="heuresouverture" class="form-control select2-show-search"
                                data-placeholder="Heure">
                                <option value="12am">12am</option>
                                <option value="1am">1am</option>
                                <option value="2am">2am</option>
                                <option value="3am">3am</option>
                                <option value="4am">4am</option>
                                <option value="5am">5am</option>
                                <option value="6am">6am</option>
                                <option value="7am">7am</option>
                                <option value="8am">8am</option>
                                <option value="9am">9am</option>
                                <option value="10am">10am</option>
                                <option value="11am">11am</option>
                                <option value="1pm">12pm</option>
                                <option value="13pm">1pm</option>
                                <option value="14am">2pm</option>
                                <option value="15pm">3pm</option>
                                <option value="16pm">4pm</option>
                                <option value="17pm">5pm</option>
                                <option value="18pm">6pm</option>
                                <option value="19pm">7pm</option>
                                <option value="20pm">8pm</option>
                                <option value="21pm">9pm</option>
                                <option value="22pm">10pm</option>
                                <option value="23pm">11pm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="form-label text-dark">Heure fermeture</label>
                            <select name="heuresfermeture" class="form-control select2-show-search"
                                data-placeholder="Choisir Heure">
                                <option value="12am">12am</option>
                                <option value="1am">1am</option>
                                <option value="2am">2am</option>
                                <option value="3am">3am</option>
                                <option value="4am">4am</option>
                                <option value="5am">5am</option>
                                <option value="6am">6am</option>
                                <option value="7am">7am</option>
                                <option value="8am">8am</option>
                                <option value="9am">9am</option>
                                <option value="10am">10am</option>
                                <option value="11am">11am</option>
                                <option value="1pm">12pm</option>
                                <option value="13pm">1pm</option>
                                <option value="14am">2pm</option>
                                <option value="15pm">3pm</option>
                                <option value="16pm">4pm</option>
                                <option value="17pm">5pm</option>
                                <option value="18pm">6pm</option>
                                <option value="19pm">7pm</option>
                                <option value="20pm">8pm</option>
                                <option value="21pm">9pm</option>
                                <option value="22pm">10pm</option>
                                <option value="23pm">11pm</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label text-dark">Description</label>
                    <textarea name="description" class="form-control @error('description')
                                                                                is-invalid
                                                @enderror" name="example-textarea-input" rows="6"
                        placeholder="text here.."></textarea>
                    @error('description')
                        <p class="text-danger">{{ $errors->first('description') }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image" class="form-label text-dark @error('image')
                                                                                is-invalid
                                                @enderror">Test Image</label>
                    <input name="image" type="text" class="form-control" id="image" placeholder="image URL">
                    @error('image')
                        <p class="text-danger">{{ $errors->first('image') }}</p>
                    @enderror
                </div>


                {{-- <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button> --}}



            </div>

        </main>

        <main class="container">
            <h5 class="card-header" style="margin-top: 3rem">Information Personelle
            </h5>
            <div class="my-3 p-3 bg-white rounded box-shadow">



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="form-label text-dark">Nom</label>
                        <input name="nom" type="text" class="form-control" placeholder="Nom">

                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label text-dark">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="email">

                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label text-dark">Telephone</label>
                        <input name="telephoneperso" type="text" class="form-control" placeholder="telephone">

                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label text-dark">adresse</label>
                        <input name="adresseperso" type="text" class="form-control" placeholder="adresse">

                    </div>
                </div>



            </div>

        </main>

        <main class="container">
            <h5 class="card-header" style="margin-top: 3rem">Social Media Information
            </h5>
            <div class="my-3 p-3 bg-white rounded box-shadow">





                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text w-7">
                            <i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i>
                        </div>
                    </div><!-- input-group-prepend -->
                    <input class="form-control" name="facebookurl" placeholder="Facebook URL" type="text">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text w-7">
                            <i class="fa fa-twitter tx-16 lh-0 op-6 text-center mx-auto"></i>
                        </div>
                    </div><!-- input-group-prepend -->
                    <input class="form-control" name="twitterurl" placeholder="Twitter URL" type="text">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text w-7">
                            <i class="fa fa-google-plus tx-16 lh-0 op-6 text-center mx-auto"></i>
                        </div>
                    </div>
                    <input class="form-control" name="googleplusurl" placeholder="GooglePlus URL" type="text">
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text w-7">
                            <i class="fa fa-map-marker tx-16 lh-0 op-6 text-center mx-auto"></i>
                        </div>
                    </div>
                    <input class="form-control" name="googlemapsurl" placeholder="GoogleMap Location URL" type="text">
                </div>


            </div>

        </main>

        <main class="container">
            <h5 class="card-header" style="margin-top: 3rem">Business Info
            </h5>
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <div class="form-group">
                    <label class="form-label">Année de fondation</label>
                    <select name="anneefondation" class="form-control select2">
                        <option value="">Year</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option selected="selected" value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                        <option value="1915">1915</option>
                        <option value="1914">1914</option>
                        <option value="1913">1913</option>
                        <option value="1912">1912</option>
                        <option value="1911">1911</option>
                        <option value="1910">1910</option>
                        <option value="1909">1909</option>
                        <option value="1908">1908</option>
                        <option value="1907">1907</option>
                        <option value="1906">1906</option>
                        <option value="1905">1905</option>
                        <option value="1904">1904</option>
                        <option value="1903">1903</option>
                        <option value="1902">1902</option>
                        <option value="1901">1901</option>
                        <option value="1900">1900</option>
                        <option value="1899">1899</option>
                        <option value="1898">1898</option>
                        <option value="1897">1897</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label text-dark">Services</label>
                    <select name="categorieservice[]" class="form-control " data-placeholder="Choose Services" multiple>
                        <option value="Hotels">Hotels</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Salon & Spa">Salon & Spa </option>
                        <option value="Education">Education</option>
                        <option value="Café">Café</option>
                        <option value="Boulangerie">Boulangerie</option>
                    </select>
                </div>
            </div>
        </main>
        <button type="submit" class=" container btn btn-success btn-lg btn-block "
            style="margin-bottom: 2rem">Submit</button>
    </form>
    {{-- <script>
        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
            if (checkList.classList.contains('visible'))
                checkList.classList.remove('visible');
            else
                checkList.classList.add('visible');
        }

    </script> --}}
@endsection
