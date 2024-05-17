<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });
    Route::middleware(['Editor'])->group(function () {
        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);

        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);

        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);

        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */

        /* regulamentos */
        Route::get('admin/regulation/index', ['as' => 'admin.regulation.index', 'uses' => 'Admin\RegulationController@index']);
        Route::get('admin/regulation/show/{id}', ['as' => 'admin.regulation.show', 'uses' => 'Admin\RegulationController@show']);

        Route::get('admin/regulation/create', ['as' => 'admin.regulation.create', 'uses' => 'Admin\RegulationController@create']);
        Route::post('admin/regulation/store', ['as' => 'admin.regulation.store', 'uses' => 'Admin\RegulationController@store']);

        Route::get('admin/regulation/edit/{id}', ['as' => 'admin.regulation.edit', 'uses' => 'Admin\RegulationController@edit']);
        Route::put('admin/regulation/update/{id}', ['as' => 'admin.regulation.update', 'uses' => 'Admin\RegulationController@update']);

        Route::get('admin/regulation/delete/{id}', ['as' => 'admin.regulation.delete', 'uses' => 'Admin\RegulationController@destroy']);
        /* end regulamentos */

        /** categoria de directivas */
        Route::post('admin/categoria-directivas/store', ['as' => 'admin.categoria-directivas.store', 'uses' => 'Admin\DirectiveCategoryController@store']);
        Route::get('admin/categoria-directivas/delete/{id}', ['as' => 'admin.categoria-directivas.delete', 'uses' => 'Admin\DirectiveCategoryController@destroy']);

        /** directives */
        Route::get('admin/directive/index', ['as' => 'admin.directive.index', 'uses' => 'Admin\DirectiveController@index']);
        Route::get('admin/directive/show/{id}', ['as' => 'admin.directive.show', 'uses' => 'Admin\DirectiveController@show']);
        Route::get('admin/directive/create', ['as' => 'admin.directive.create', 'uses' => 'Admin\DirectiveController@create']);
        Route::post('admin/directive/store', ['as' => 'admin.directive.store', 'uses' => 'Admin\DirectiveController@store']);
        Route::get('admin/directive/edit/{id}', ['as' => 'admin.directive.edit', 'uses' => 'Admin\DirectiveController@edit']);
        Route::put('admin/directive/update/{id}', ['as' => 'admin.directive.update', 'uses' => 'Admin\DirectiveController@update']);

        Route::get('admin/directive/delete/{id}', ['as' => 'admin.directive.delete', 'uses' => 'Admin\DirectiveController@destroy']);

        /** elections */
        Route::get('admin/eleições/index', ['as' => 'admin.elections.index', 'uses' => 'Admin\ElectionController@list']);
        Route::get('admin/eleições/show/{id}', ['as' => 'admin.elections.show', 'uses' => 'Admin\ElectionController@show']);
        Route::get('admin/eleições/create', ['as' => 'admin.elections.create', 'uses' => 'Admin\ElectionController@create']);
        Route::post('admin/eleições/store', ['as' => 'admin.elections.store', 'uses' => 'Admin\ElectionController@store']);
        Route::get('admin/eleições/edit/{id}', ['as' => 'admin.elections.edit', 'uses' => 'Admin\ElectionController@edit']);
        Route::put('admin/eleições/update/{id}', ['as' => 'admin.elections.update', 'uses' => 'Admin\ElectionController@update']);

        Route::get('admin/eleições/delete/{id}', ['as' => 'admin.elections.delete', 'uses' => 'Admin\ElectionController@destroy']);
        /* electionImage */
        Route::get('admin/imagem-eleição/create/{id}', ['as' => 'admin.electionImage.create', 'uses' => 'Admin\ElectionImageController@create']);
        Route::post('admin/imagem-eleição/store/{id}', ['as' => 'admin.electionImage.store', 'uses' => 'Admin\ElectionImageController@store']);

        Route::get('admin/imagem-eleição/delete/{id}', ['as' => 'admin.electionImage.delete', 'uses' => 'Admin\ElectionImageController@destroy']);
        /* End electionImage */

        /**instrutivos */
        Route::get('admin/instructional/index', ['as' => 'admin.instructional.index', 'uses' => 'Admin\InstrutionalController@index']);
        Route::get('admin/instructional/show/{id}', ['as' => 'admin.instructional.show', 'uses' => 'Admin\InstrutionalController@show']);
        Route::get('admin/instructional/create', ['as' => 'admin.instructional.create', 'uses' => 'Admin\InstrutionalController@create']);
        Route::post('admin/instructional/store', ['as' => 'admin.instructional.store', 'uses' => 'Admin\InstrutionalController@store']);
        Route::get('admin/instructional/edit/{id}', ['as' => 'admin.instructional.edit', 'uses' => 'Admin\InstrutionalController@edit']);
        Route::put('admin/instructional/update/{id}', ['as' => 'admininstructional.update', 'uses' => 'Admin\InstrutionalController@update']);

        Route::get('admin/instructional/delete/{id}', ['as' => 'admin.instructional.delete', 'uses' => 'Admin\InstrutionalController@destroy']);

        /**deliberation */
        Route::get('admin/deliberation/index', ['as' => 'admin.deliberation.index', 'uses' => 'Admin\DeliberationController@index']);
        Route::get('admin/deliberation/show/{id}', ['as' => 'admin.deliberation.show', 'uses' => 'Admin\DeliberationController@show']);
        Route::get('admin/deliberation/create', ['as' => 'admin.deliberation.create', 'uses' => 'Admin\DeliberationController@create']);
        Route::post('admin/deliberation/store', ['as' => 'admin.deliberation.store', 'uses' => 'Admin\DeliberationController@store']);
        Route::get('admin/deliberation/edit/{id}', ['as' => 'admin.deliberation.edit', 'uses' => 'Admin\DeliberationController@edit']);
        Route::put('admin/deliberation/update/{id}', ['as' => 'admin.deliberation.update', 'uses' => 'Admin\DeliberationController@update']);

        Route::get('admin/deliberation/delete/{id}', ['as' => 'admin.deliberation.delete', 'uses' => 'Admin\DeliberationController@destroy']);

        /**definicao */
        Route::get('admin/cne/definition/show', ['as' => 'admin.definition.show', 'uses' => 'Admin\DefinitionController@show']);

        Route::get('admin/cne/definition/edit/{id}', ['as' => 'admin.definition.edit', 'uses' => 'Admin\DefinitionController@edit']);
        Route::put('admin/cne/definition/update/{id}', ['as' => 'admin.definition.update', 'uses' => 'Admin\DefinitionController@update']);

        /**President */
        Route::get('admin/cne/president/show', ['as' => 'admin.president.show', 'uses' => 'Admin\PresidentController@show']);

        Route::get('admin/cne/president/edit/{id}', ['as' => 'admin.president.edit', 'uses' => 'Admin\PresidentController@edit']);
        Route::put('admin/cne/president/update/{id}', ['as' => 'admin.president.update', 'uses' => 'Admin\PresidentController@update']);

        /* member */
        Route::get('admin/member/index', ['as' => 'admin.member.index', 'uses' => 'Admin\MemberController@list']);
        Route::get('admin/member/show/{id}', ['as' => 'admin.member.show', 'uses' => 'Admin\MemberController@show']);

        Route::get('admin/member/create', ['as' => 'admin.member.create', 'uses' => 'Admin\MemberController@create']);
        Route::post('admin/member/store', ['as' => 'admin.member.store', 'uses' => 'Admin\MemberController@store']);

        Route::get('admin/member/edit/{id}', ['as' => 'admin.member.edit', 'uses' => 'Admin\MemberController@edit']);
        Route::put('admin/member/update/{id}', ['as' => 'admin.member.update', 'uses' => 'Admin\MemberController@update']);

        Route::get('admin/member/delete/{id}', ['as' => 'admin.member.delete', 'uses' => 'Admin\MemberController@destroy']);
        /* end member */

        /**Mandate */
        Route::get('admin/cne/mandate/show', ['as' => 'admin.mandate.show', 'uses' => 'Admin\MandateController@show']);

        Route::get('admin/cne/mandate/edit/{id}', ['as' => 'admin.mandate.edit', 'uses' => 'Admin\MandateController@edit']);
        Route::put('admin/cne/mandate/update/{id}', ['as' => 'admin.mandate.update', 'uses' => 'Admin\MandateController@update']);

        /** Structure*/
        Route::get('admin/cne/Structure/show', ['as' => 'admin.Structure.show', 'uses' => 'Admin\StructureController@show']);

        Route::get('admin/cne/Structure/edit/{id}', ['as' => 'admin.Structure.edit', 'uses' => 'Admin\StructureController@edit']);
        Route::put('admin/cne/Structure/update/{id}', ['as' => 'admin.Structure.update', 'uses' => 'Admin\StructureController@update']);

        /* impressos */
        Route::get('admin/printed/index', ['as' => 'admin.printed.index', 'uses' => 'Admin\PrintedController@list']);
        Route::get('admin/printed/show/{id}', ['as' => 'admin.printed.show', 'uses' => 'Admin\PrintedController@show']);

        Route::get('admin/printed/create', ['as' => 'admin.printed.create', 'uses' => 'Admin\PrintedController@create']);
        Route::post('admin/printed/store', ['as' => 'admin.printed.store', 'uses' => 'Admin\PrintedController@store']);

        Route::get('admin/printed/edit/{id}', ['as' => 'admin.printed.edit', 'uses' => 'Admin\PrintedController@edit']);
        Route::put('admin/printed/update/{id}', ['as' => 'admin.printed.update', 'uses' => 'Admin\PrintedController@update']);

        Route::get('admin/printed/delete/{id}', ['as' => 'admin.printed.delete', 'uses' => 'Admin\PrintedController@destroy']);

        /* composition */
        Route::get('admin/cne/composition/show', ['as' => 'admin.composition.show', 'uses' => 'Admin\CompositonController@show']);

        Route::get('admin/cne/composition/edit/{id}', ['as' => 'admin.composition.edit', 'uses' => 'Admin\CompositonController@edit']);
        Route::put('admin/cne/composition/update/{id}', ['as' => 'admin.composition.update', 'uses' => 'Admin\CompositonController@update']);

        /* video */
        Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
        Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);

        Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
        Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);

        Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
        Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);

        Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
        /* end video */


        /* legislação */
        Route::get('admin/legislação/index', ['as' => 'admin.legislation.index', 'uses' => 'Admin\LegislationController@index']);
        Route::get('admin/legislação/show/{id}', ['as' => 'admin.legislation.show', 'uses' => 'Admin\LegislationController@show']);

        Route::get('admin/legislação/create', ['as' => 'admin.legislation.create', 'uses' => 'Admin\LegislationController@create']);
        Route::post('admin/legislaação/store', ['as' => 'admin.legislation.store', 'uses' => 'Admin\LegislationController@store']);

        Route::get('admin/legislação/edit/{id}', ['as' => 'admin.legislation.edit', 'uses' => 'Admin\LegislationController@edit']);
        Route::put('admin/legislação/update/{id}', ['as' => 'admin.legislation.update', 'uses' => 'Admin\LegislationController@update']);

        Route::get('admin/legislação/delete/{id}', ['as' => 'admin.legislation.delete', 'uses' => 'Admin\LegislationController@destroy']);
        /* end legislação */

        /* cpf */
        Route::get('admin/cpf/index', ['as' => 'admin.cpf.index', 'uses' => 'Admin\CPFController@list']);
        Route::get('admin/cpf/show/{id}', ['as' => 'admin.cpf.show', 'uses' => 'Admin\CPFController@show']);

        Route::get('admin/cpf/create', ['as' => 'admin.cpf.create', 'uses' => 'Admin\CPFController@create']);
        Route::post('admin/cpf/store', ['as' => 'admin.cpf.store', 'uses' => 'Admin\CPFController@store']);

        Route::get('admin/cpf/edit/{id}', ['as' => 'admin.cpf.edit', 'uses' => 'Admin\CPFController@edit']);
        Route::put('admin/cpf/update/{id}', ['as' => 'admin.cpf.update', 'uses' => 'Admin\CPFController@update']);

        Route::get('admin/cpf/delete/{id}', ['as' => 'admin.cpf.delete', 'uses' => 'Admin\CPFController@destroy']);
        /* end slideshow */

        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);

        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);

        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);

        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */

        /* audio*/
        Route::get('admin/audio/index', ['as' => 'admin.audio.index', 'uses' => 'Admin\AudioController@list']);
        Route::get('admin/audio/show/{id}', ['as' => 'admin.audio.show', 'uses' => 'Admin\AudioController@show']);

        Route::get('admin/audio/create', ['as' => 'admin.audio.create', 'uses' => 'Admin\AudioController@create']);
        Route::post('admin/audio/store', ['as' => 'admin.audio.store', 'uses' => 'Admin\AudioController@store']);

        Route::get('admin/audio/edit/{id}', ['as' => 'admin.audio.edit', 'uses' => 'Admin\AudioController@edit']);
        Route::put('admin/audio/update/{id}', ['as' => 'admin.audio.update', 'uses' => 'Admin\AudioController@update']);

        Route::get('admin/audio/delete/{id}', ['as' => 'admin.audio.delete', 'uses' => 'Admin\AudioController@destroy']);
        /* end audio */

        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */


        /* news */
        Route::get('admin/parties/index', ['as' => 'admin.parties.index', 'uses' => 'Admin\PartiesController@index']);
        Route::get('admin/parties/show/{id}', ['as' => 'admin.parties.show', 'uses' => 'Admin\PartiesController@show']);

        Route::get('admin/parties/create', ['as' => 'admin.parties.create', 'uses' => 'Admin\PartiesController@create']);
        Route::post('admin/parties/store', ['as' => 'admin.parties.store', 'uses' => 'Admin\PartiesController@store']);

        Route::get('admin/parties/edit/{id}', ['as' => 'admin.parties.edit', 'uses' => 'Admin\PartiesController@edit']);
        Route::put('admin/parties/update/{id}', ['as' => 'admin.parties.update', 'uses' => 'Admin\PartiesController@update']);

        Route::get('admin/parties/delete/{id}', ['as' => 'admin.parties.delete', 'uses' => 'Admin\PartiesController@destroy']);
        /* end news */

        /* annonce */
        Route::get('admin/annonce/index', ['as' => 'admin.annonce.index', 'uses' => 'Admin\AnnonceController@list']);
        Route::get('admin/annonce/show/{id}', ['as' => 'admin.annonce.show', 'uses' => 'Admin\AnnonceController@show']);

        Route::get('admin/annonce/create', ['as' => 'admin.annonce.create', 'uses' => 'Admin\AnnonceController@create']);
        Route::post('admin/annonce/store', ['as' => 'admin.annonce.store', 'uses' => 'Admin\AnnonceController@store']);

        Route::get('admin/annonce/edit/{id}', ['as' => 'admin.annonce.edit', 'uses' => 'Admin\AnnonceController@edit']);
        Route::put('admin/annonce/update/{id}', ['as' => 'admin.annonce.update', 'uses' => 'Admin\AnnonceController@update']);

        Route::get('admin/annonce/delete/{id}', ['as' => 'admin.annonce.delete', 'uses' => 'Admin\AnnonceController@destroy']);
        /* end annonce */

        /* Events */
        Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
        Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);

        Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
        Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);

        Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
        Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);

        Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy']);
        /* end Events */


        /* ftpfile */
        Route::get('admin/docs/index', ['as' => 'admin.ftpfile.index', 'uses' => 'Admin\FtpfileController@list']);
        Route::get('admin/docs/show/{id}', ['as' => 'admin.ftpfile.show', 'uses' => 'Admin\FtpfileController@show']);

        Route::get('admin/docs/create', ['as' => 'admin.ftpfile.create', 'uses' => 'Admin\FtpfileController@create']);
        Route::post('admin/docs/store', ['as' => 'admin.ftpfile.store', 'uses' => 'Admin\FtpfileController@store']);

        Route::get('admin/docs/edit/{id}', ['as' => 'admin.ftpfile.edit', 'uses' => 'Admin\FtpfileController@edit']);
        Route::put('admin/docs/update/{id}', ['as' => 'admin.ftpfile.update', 'uses' => 'Admin\FtpfileController@update']);

        Route::get('admin/docs/delete/{id}', ['as' => 'admin.ftpfile.delete', 'uses' => 'Admin\FtpfileController@destroy']);
        /* end ftpfile */


        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */


    });
    Route::middleware(['Recruiter'])->group(function () {
        /* Portal de Candidaturas */
        Route::get('admin/candidacy/index/{perpage}', ['as' => 'admin.candidacy.index', 'uses' => 'Admin\CandidacyController@index']);
        Route::get('admin/candidacy/show/{id}', ['as' => 'admin.candidacy.show', 'uses' => 'Admin\CandidacyController@show']);

        Route::put('admin/candidacy/update/{id}', ['as' => 'admin.candidacy.update', 'uses' => 'Admin\CandidacyController@update']);
        Route::put('admin/candidacy/decline/{perpage}', ['as' => 'admin.candidacy.decline', 'uses' => 'Admin\CandidacyController@decline']);

        /* Listas PDF dos Aprovados */
        Route::get('admin/candidacy/aptos/pdf/{perpage}', ['as' => 'admin.candidacy.aptos.pdf.list', 'uses' => 'Admin\Candidacy\AptoPercountyController@list']);
        Route::get('admin/candidacy/aptos/pdf/{perpage}/{ref}/{county}', ['as' => 'admin.candidacy.aptos.pdf.print', 'uses' => 'Admin\Candidacy\AptoPercountyController@print']);
        Route::get('admin/candidacy/aptos/escrutinio/pdf', ['as' => 'admin.candidacy.escrutinio.aptos.pdf', 'uses' => 'Admin\Candidacy\AptoPercountyController@escrutinio']);

        /* listas PDF dos Candidatos no Geral */
        Route::get('admin/candidacy/general/pdf/{perpage}', ['as' => 'admin.candidacy.general.pdf.list', 'uses' => 'Admin\Candidacy\GeneralPercountyController@list']);
        Route::get('admin/candidacy/general/pdf/{perpage}/{ref}/{county}', ['as' => 'admin.candidacy.general.pdf.print', 'uses' => 'Admin\Candidacy\GeneralPercountyController@print']);
        Route::get('admin/candidacy/general/escrutinio/pdf', ['as' => 'admin.candidacy.escrutinio.general.pdf', 'uses' => 'Admin\Candidacy\GeneralPercountyController@escrutinio']);


        /**chaves do concurso */
        Route::get('admin/keys/show', ['as' => 'admin.key.show', 'uses' => 'Admin\KeyController@show']);
        Route::put('admin/keys/update', ['as' => 'admin.key.update', 'uses' => 'Admin\KeyController@update']);

    });
});
