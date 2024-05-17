<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);


/* Galeria fotos */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
/* Galeria de Videos */
Route::get('/videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);


/**elections */
Route::get('/eleições/{date}', ['as' => 'site.elections.show', 'uses' => 'Site\ElectionController@show']);


/** parties*/
Route::get('/partidos', ['as' => 'site.parties', 'uses' => 'Site\PartiesController@index']);
Route::get('/partidos/{title}', ['as' => 'site.parties.show', 'uses' => 'Site\PartiesController@show']);

/**Contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
Route::get('/cpf', ['as' => 'site.cpf', 'uses' => 'Site\CPFController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/**Impressos */
Route::get('/Publicações', ['as' => 'site.printed', 'uses' => 'Site\PrintedController@index']);
Route::get('/audio/', ['as' => 'site.audio', 'uses' => 'Site\AudioController@index']);
/** definicoes */
Route::get('/definição', ['as' => 'site.definition', 'uses' => 'Site\DefinitionController@index']);
/**Estrutura organnica */
Route::get('/estrutura-organica', ['as' => 'site.structured', 'uses' => 'Site\StructureController@index']);


Route::get('/regulamentos', ['as' => 'site.regulation', 'uses' => 'Site\RegulationController@index']);

Route::get('/directivas', ['as' => 'site.diretive', 'uses' => 'Site\DirectiveController@index']);
Route::get('/instrutivos', ['as' => 'site.instructive', 'uses' => 'Site\InstructiveController@index']);

Route::get('/deliberações', ['as' => 'site.deliberation', 'uses' => 'Site\DeliberationController@index']);


Route::get('/presidente', ['as' => 'site.president', 'uses' => 'Site\PresidentController@index']);

Route::get('/legislação', ['as' => 'site.legislation', 'uses' => 'Site\LegislationController@index']);
Route::get('/mandato', ['as' => 'site.mandate', 'uses' => 'Site\MandateController@index']);


Route::get('/composição', ['as' => 'site.composition', 'uses' => 'Site\CompositionController@index']);
Route::get('/anuncios', ['as' => 'site.announcent', 'uses' => 'Site\AnnouncementController@index']);
Route::get('/anuncio/{title}', ['as' => 'site.announcent.show', 'uses' => 'Site\AnnouncementController@show']);


Route::get('/pesquisar', ['as' => 'site.search', 'uses' => 'Site\SearchController@create']);
Route::get('/pesquisar/find', ['as' => 'site.search.find', 'uses' => 'Site\SearchController@find']);


/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);

/* Portal de Candidaturas */
Route::get('/informações-dos-concursos', ['as' => 'site.candidacy.information', 'uses' => 'Site\CandidacyController@information']);

Route::get('/recrutamento-e-seleccao-de-candidatos-a-digitalizadores', ['as' => 'site.candidacy.first', 'uses' => 'Site\CandidacyController@first']);
Route::get('/recrutamento-e-seleccao-de-formadores-municipais', ['as' => 'site.candidacy.second', 'uses' => 'Site\CandidacyController@second']);

Route::get('/recrutamento-e-seleccao-de-membros-das-assembleias-de-voto', ['as' => 'site.candidacy.third', 'uses' => 'Site\CandidacyController@third']);
Route::post('/inscrições/store', ['as' => 'site.candidacy.store', 'uses' => 'Site\CandidacyController@store']);

Route::get('minha-candidatura', ['as' => 'site.candidacystatus.get', 'uses' => 'Site\Candidacystatus@index']);
Route::get('minha-candidatura/find', ['as' => 'site.candidacystatus.post', 'uses' => 'Site\Candidacystatus@show']);


Route::get('meu-comprovativo/{bi}', ['as' => 'site.candidacystatus.proof', 'uses' => 'Site\Candidacystatus@print']);

Route::get('/onde-votar', ['as' => 'site.wheretoVote', 'uses' => 'Site\WheretoVoteController@index']);

Route::get('/listas-dos-eleitores', ['as' => 'site.eleitorylist', 'uses' => 'Site\EleitorylistController@index']);
Route::get('/listas-dos-eleitores/{name}', ['as' => 'site.eleitorylist.show', 'uses' => 'Site\EleitorylistController@show']);


Route::get('/delegados-de-lista', ['as' => 'site.listdelegates', 'uses' => 'Site\ListdelegatesController@index']);
Route::get('/delegados-de-lista/{name}', ['as' => 'site.listdelegates.show', 'uses' => 'Site\ListdelegatesController@show']);
/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

