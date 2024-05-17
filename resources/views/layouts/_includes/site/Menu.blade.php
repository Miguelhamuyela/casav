   <!-- ====== Header Start ====== -->
   <header class="ud-header bg-white">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <nav class="navbar navbar-expand-lg">
                       <a class="navbar-brand" href="{{ route('site.home') }}">
                           <img src="/images/logotipo/logo.png" alt="Logo" />
                       </a>
                       <button class="navbar-toggler">
                           <span class="toggler-icon bg-dark"> </span>
                           <span class="toggler-icon bg-dark"> </span>
                           <span class="toggler-icon bg-dark"> </span>
                       </button>

                       <div class="navbar-collapse">
                           <ul id="nav" class="navbar-nav mx-auto">
                               <li class="nav-item nav-item-has-children">
                                   <a href="javascript:void(0)" class="text-dark">CNE</a>
                                   <ul class="ud-submenu">
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.definition') }}" class="ud-submenu-link text-dark">
                                               Definição
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ url('/estrutura-organica') }}" class="ud-submenu-link text-dark">
                                               Estrutura Orgânica
                                           </a>
                                       </li>
                                       <li class="nav-item nav-item-has-children">
                                           <a href="javascript:void(0)" class="text-dark">Comissão Actual</a>
                                           <ul class="ud-submenu">
                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.president') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Presidente
                                                   </a>
                                               </li>

                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.mandate') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Mandato
                                                   </a>
                                               </li>

                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.composition') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Composição
                                                   </a>
                                               </li>

                                           </ul>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.regulation') }}" class="ud-submenu-link text-dark">
                                               Regulamentos
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.diretive') }}" class="ud-submenu-link text-dark">
                                               Directivas
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.instructive') }}" class="ud-submenu-link text-dark">
                                               Instrutivos
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.deliberation') }}"
                                               class="ud-submenu-link text-dark">Deliberações</a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="nav-item">
                                   <a class="ud-menu-link text-dark"
                                       href="{{ route('site.legislation') }}">Legislação</a>
                               </li>
                               <li class="nav-item nav-item-has-children">
                                   <a href="javascript:void(0)" class="text-dark">Eleições</a>
                                   <ul class="ud-submenu">
                                       @if ($elections)
                                           @foreach ($elections as $item)
                                               <li class="ud-submenu-item">
                                                   <a href="{{ url("/eleições/{$item->date}") }}"
                                                       class="ud-submenu-link text-dark">
                                                       {{ $item->date }}
                                                   </a>
                                               </li>
                                           @endforeach
                                       @endif
                                   </ul>



                               </li>
                               <li class="nav-item">
                                   <a class="ud-menu-link text-dark" href="{{ route('site.parties') }}">Partidos</a>
                               </li>
                               <li class="nav-item nav-item-has-children">
                                   <a href="javascript:void(0)" class="text-dark">Publicações</a>
                                   <ul class="ud-submenu">


                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.announcent') }}" class="ud-submenu-link text-dark">
                                               Anúncios
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.listdelegates') }}"
                                               class="ud-submenu-link text-dark">
                                               Delegados de Lista
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.eleitorylist') }}"
                                               class="ud-submenu-link text-dark">
                                               Listas dos Eleitores
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                        <a href="{{ route('site.wheretoVote') }}"
                                            class="ud-submenu-link text-dark">
                                            Onde Votar?
                                        </a>
                                    </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ route('site.news') }}" class="ud-submenu-link text-dark">
                                               Notícias
                                           </a>
                                       </li>
                                       <li class="ud-submenu-item">
                                           <a href="{{ url('/Publicações') }}" class="ud-submenu-link text-dark">
                                               Publicações
                                           </a>
                                       </li>
                                       <li class="nav-item nav-item-has-children">
                                           <a href="javascript:void(0)" class="text-dark ml-5">Media</a>
                                           <ul class="ud-submenu">
                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.audio') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Áudios
                                                   </a>
                                               </li>
                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.gallery') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Galeria de Imagens
                                                   </a>
                                               </li>
                                               <li class="ud-submenu-item">
                                                   <a href="{{ route('site.videos') }}"
                                                       class="ud-submenu-link text-dark">
                                                       Vídeos
                                                   </a>
                                               </li>

                                           </ul>
                                       </li>

                                   </ul>
                               </li>


                               <li class="nav-item">
                                   <a class="ud-menu-link text-dark" href="{{ route('site.contact') }}">Contactos</a>
                               </li>
                               <li class="nav-item">
                                   <a class=" text-dark" href="{{ route('site.search') }}">
                                       <i class="lni lni-search"></i>
                                   </a>
                               </li>

                               <li class="nav-item mt-3">
                                   <a class="ud-main-btn text-whiteds" style="padding:10px;"
                                       href="https://resultados2022eleicoesgerais.cne.ao" target="_blank">Resultados Definitivos</a>
                               </li>

                           </ul>
                       </div>


                   </nav>
               </div>
           </div>
       </div>
   </header>
   <!-- ====== Header End ====== -->
