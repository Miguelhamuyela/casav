<nav class="topnav navbar navbar-light bg-white">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                    <img rel="icon" src="/images/logotipo/logo.png" style="width:120px; margin:auto" />

                </a>
            </div>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                            <i class="fe fe-globe fe-16"></i>
                            <span class="ml-3 item-text">Site</span>
                        </a>
                    </li>
                </ul>

                @if ('Recrutador' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu de Inscrições --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Inscrições</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#candidacy" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text"> Inscrições</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="candidacy">


                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.index', urlencode('Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Candidatos a Digitalizadores</small>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.index', urlencode('Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Formadores Municipais</small>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.index', urlencode('Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Membros das Mesas das Assembleias de
                                            Voto</small>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </li>

                    {{-- Menu de Candidatos Aprovados & Relatórios --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>
                            <small> Candidatos Aprovados & Relatórios</small>
                        </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#candidacyRelatory" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text">
                                <small> Candidatos Aprovados <br>
                                    & Relatórios </small>
                            </span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="candidacyRelatory">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.aptos.pdf.list', urlencode('Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Candidatos a Digitalizadores</small>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.aptos.pdf.list', urlencode('Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Formadores Municipais</small>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.aptos.pdf.list', urlencode('Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Membros das Mesas das Assembleias de
                                            Voto</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Menu de Listas de Candidatos em PDF --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>
                            <small> Listas de Candidatos em PDF</small>
                        </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#candidacylist" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file-text fe-16"></i>
                            <span class="ml-3 item-text"> <small> Candidatos por Múnicipio</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="candidacylist">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.general.pdf.list', urlencode('Recrutamento e Selecção de Candidatos a Digitalizadores para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Candidatos a Digitalizadores</small>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.general.pdf.list', urlencode('Recrutamento e Selecção de Formadores Municipais para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Formadores Municipais</small>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{!! route('admin.candidacy.general.pdf.list', urlencode('Recrutamento e Selecção de Membros das Mesas das Assembleias de Voto para as Eleições Gerais de 2022')) !!}">
                                    <span class="item-text">
                                        <small>Recrutamento e Selecção de Membros das Mesas das Assembleias de
                                            Voto</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                @if ('Administrador' == Auth::user()->level)
                    {{-- Menu de Chaves das Inscrições --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span>Chaves das Inscrições</span>
                    </p>


                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.key.show') }}">

                                <i class="fe fe-sliders fe-16"></i>
                                <span class="ml-3 item-text">Chaves das Inscrições</span>
                            </a>
                        </li>
                    </ul>
                @endif


                @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu da CNE --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> A CNE</span>
                    </p>




                    <li class="nav-item dropdown">
                        <a href="#members" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-users fe-16"></i>


                            <span class="ml-3 item-text">Composição</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="members">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.composition.show') }}">
                                    <span class="ml-1 item-text">Informação</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.member.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Membro</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.member.index') }}">
                                    <span class="ml-1 item-text">Listar Membro</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.mandate.show') }}">

                                <i class="fe fe-clock fe-16"></i>
                                <span class="ml-3 item-text">Mandato</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.president.show') }}">

                                <i class="fe fe-award fe-16"></i>
                                <span class="ml-3 item-text">Presidente</span>
                            </a>
                        </li>
                    </ul>


                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.definition.show') }}">

                                <i class="fe fe-file-text fe-16"></i>
                                <span class="ml-3 item-text">Definição</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.Structure.show') }}">

                                <i class="fe fe-users fe-16"></i>
                                <span class="ml-3 item-text">Estrutura Orgânica</span>
                            </a>
                        </li>
                    </ul>

                    <li class="nav-item dropdown">
                        <a href="#regulations" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file-text fe-16"></i>


                            <span class="ml-3 item-text">Regulamentos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="regulations">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.regulation.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Regulamento</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.regulation.index') }}">
                                    <span class="ml-1 item-text">Listar Regulamentos</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#directives" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-target fe-16"></i>


                            <span class="ml-3 item-text">Directivas</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="directives">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.directive.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Directiva</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.directive.index') }}">
                                    <span class="ml-1 item-text">Listar Directivas</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#instructional" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file-text fe-16"></i>


                            <span class="ml-3 item-text">Instrutivos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="instructional">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.instructional.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Instrutivo</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.instructional.index') }}">
                                    <span class="ml-1 item-text">Listar Instrutivos</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#Deliberations" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-wifi fe-16"></i>


                            <span class="ml-3 item-text">Deliberações</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="Deliberations">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.deliberation.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Deliberação</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.deliberation.index') }}">
                                    <span class="ml-1 item-text">Listar Deliberações</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- Menu de Outros --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Outros </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#ftpfile" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file fe-16"></i>
                            <span class="ml-3 item-text"> Arquivos de Indexação</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="ftpfile">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.ftpfile.create') }}">
                                    <span class="ml-1 item-text">Cadastrar <small> Arquivo de Indexação</small></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.ftpfile.index') }}">
                                    <span class="ml-1 item-text">Listar<small> Arquivos de Indexação</small></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#parties" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-flag fe-16"></i>
                            <span class="ml-3 item-text"> Partidos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="parties">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.parties.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Partido</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.parties.index') }}">
                                    <span class="ml-1 item-text">Listar Partidos</span>
                                </a>
                            </li>
                        </ul>
                    </li>




                    <li class="nav-item dropdown">
                        <a href="#elections" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-flag fe-16"></i>
                            <span class="ml-3 item-text"> Eleições</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="elections">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.elections.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Eleição</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.elections.index') }}">
                                    <span class="ml-1 item-text">Listar Eleições</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#legislation" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-file-text fe-16"></i>


                            <span class="ml-3 item-text"> Legislações</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="legislation">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.legislation.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Legislação</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.legislation.index') }}">
                                    <span class="ml-1 item-text">Listar Legislações</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Menu de Notícias --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Notícias </span>
                    </p>
                    {{-- categoria de Notícias --}}
                    <li class="nav-item dropdown">
                        <a href="#news" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-rss fe-16"></i>
                            <span class="ml-3 item-text">Notícias</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="news">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Notícia</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                                    <span class="ml-1 item-text">Listar Notícias</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Anúncios </span>
                    </p>

                    <li class="nav-item dropdown">
                        <a href="#annonce" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class=" fe fe-cast  fe-16"></i>
                            <span class="ml-3 item-text"> Anúncios</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="annonce">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.annonce.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Anúncio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.annonce.index') }}">
                                    <span class="ml-1 item-text">Listar Anúncios</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Menu de CPFs --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span>CPFs</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#cpf" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-map fe-16"></i>
                            <span class="ml-3 item-text"> CPFs</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="cpf">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.cpf.create') }}">
                                    <span class="ml-1 item-text">Cadastrar CPF</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.cpf.index') }}">
                                    <span class="ml-1 item-text">Listar CPFs</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                    {{-- Menu de Multimédia --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Multimédia </span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#slideshow" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Slideshows</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Slideshow</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                                    <span class="ml-1 item-text">Listar Slideshows</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Galerias</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="gallery">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Galeria</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.index') }}">
                                    <span class="ml-1 item-text">Listar Galerias</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#video" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-video fe-16"></i>
                            <span class="ml-3 item-text"> Vídeos </span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="video">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Video</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.index') }}">
                                    <span class="ml-1 item-text">Listar Vídeos </span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="#prited" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-printer fe-16"></i>
                            <span class="ml-3 item-text"> Publicações</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="prited">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.printed.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Publicação</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.printed.index') }}">
                                    <span class="ml-1 item-text">Listar Publicações</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#audio" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-headphones fe-16"></i>


                            <span class="ml-3 item-text"> Áudios</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="audio">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.audio.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Áudio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.audio.index') }}">
                                    <span class="ml-1 item-text">Listar Áudios</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if ('Administrador' == Auth::user()->level)
                    {{-- Menu de Utilizadores --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Utilizadores</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#user" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-user-plus fe-16"></i>
                            <span class="ml-3 item-text"> Utilizadores</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="user">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('register') }}">
                                    <span class="ml-1 item-text">Cadastrar Utilizador</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                                    <span class="ml-1 item-text">Listar Utilizadores</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                @if ('Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)
                    {{-- Menu de Configurações --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Configurações</span>
                    </p>
                    <ul class="navbar-nav flex-fill w-100 mb-2">
                        <li class="nav-item w-100">
                            <a class="nav-link" href="{{ route('admin.configuration.show') }}">

                                <i class="fe fe-settings fe-16"></i>
                                <span class="ml-3 item-text">Configurações</span>
                            </a>
                        </li>
                    </ul>
                @endif

            </ul>

        </nav>
    </aside>

@endif
