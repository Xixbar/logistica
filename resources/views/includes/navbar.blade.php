<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('contratos') ? 'active' : ''}} {{Request::is('contratos/create') ? 'active' : ''}}
                                {{Request::is('contratos/{contrato}') ? 'active' : ''}} {{Request::is('contratos/{contrato}/edit') ? 'active' : ''}}" 
                                href="{{ url('/contratos') }}">{{ __('Contratos') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('nominaciones') ? 'active' : ''}} {{Request::is('nominaciones/create') ? 'active' : ''}}
                                {{Request::is('nominaciones/{nominacion}') ? 'active' : ''}} {{Request::is('nominaciones/{nominacion}/edit') ? 'active' : ''}}" 
                                href="{{ url('/nominaciones') }}">{{ __('Nominaciones') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('trackings') ? 'active' : ''}} {{Request::is('trackings/create') ? 'active' : ''}}
                                {{Request::is('trackings/{tracking}') ? 'active' : ''}} {{Request::is('trackings/{tracking}/edit') ? 'active' : ''}}" 
                                href="{{ url('/trackings') }}">{{ __('Tracking') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('ingenios') ? 'active' : ''}} {{Request::is('ingenios/create') ? 'active' : ''}}
                                {{Request::is('ingenios/{ingenio}') ? 'active' : ''}} {{Request::is('ingenios/{ingenio}/edit') ? 'active' : ''}}" 
                                href="{{ url('/ingenios') }}">{{ __('Ingenios') }}</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>