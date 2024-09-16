<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SouscriptionController;
use App\Http\Controllers\ReglementController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\BailController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TemoinController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VisiteController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/content', function () {
    return view('layouts.content');
});
Route::get('/admins/dashboard', [AdminController::class,'show']);
Route::get('/admins/role', [RoleController::class,'index'])->name('roles.all');

Route::get('/admins/user', [UtilisateurController::class,'index'])->name('users.all');
Route::get('/admins/user/show', [UtilisateurController::class,'show'])->name('users.show');
Route::post('/admins/user/store', [UtilisateurController::class,'store'])->name('users.store');
Route::get('/admins/user/edit/{id}', [UtilisateurController::class,'edit'])->name('users.edit');
Route::post('/admins/user/update/{id}', [UtilisateurController::class,'update'])->name('users.update');
Route::get('/admins/user/destroy/{id}', [UtilisateurController::class,'destroy'])->name('users.destroy');
    

Route::get('/admins/agent', [AgentController::class,'index'])->name('agents.all');
Route::post('/admins/agent/store', [AgentController::class,'store'])->name('agents.store');
Route::get('/admins/agent/edit/{id}', [AgentController::class,'edit'])->name('agents.edit');
Route::get('/admins/agent/show', [AgentController::class,'show'])->name('agents.show');
Route::post('/admins/agent/update/{id}', [AgentController::class,'update'])->name('agents.update');
//Route::get('/admins/agent/edit/{id}', [AgentController::class,'edit'])->name('agents.edit');


Route::get('/admins/client', [ClientController::class,'index'])->name('clients.all');
Route::get('/admins/client/show', [ClientController::class,'show'])->name('clients.show');
Route::post('/admins/client/store', [ClientController::class,'store'])->name('clients.store');
Route::get('/admins/client/edit/{id}', [ClientController::class,'edit'])->name('clients.edit');
Route::post('/admins/client/update/{id}', [ClientController::class,'update'])->name('clients.update');


Route::get('/admins/proprietaire', [ProprietaireController::class,'index'])->name('proprietaires.all');
Route::post('/admins/proprietaire/store', [ProprietaireController::class,'store'])->name('proprietaires.store');
Route::get('/admins/proprietaire/edit/{id}', [ProprietaireController::class,'edit'])->name('proprietaires.edit');
Route::post('/admins/proprietaire/update/{id}', [ProprietaireController::class,'update'])->name('proprietaires.update');


Route::get('/admins/bien', [BienController::class,'index'])->name('biens.all');
Route::post('/admins/bien/store', [BienController::class,'store'])->name('biens.store');
Route::get('/admins/bien/edit/{id}', [BienController::class,'edit'])->name('biens.edit');
Route::post('/admins/bien/update/{id}', [BienController::class,'update'])->name('biens.update');


Route::get('/admins/annonce', [AnnonceController::class,'index'])->name('annonces.all');
Route::post('/admins/annonce/store', [AnnonceController::class,'store'])->name('annonces.store');
Route::get('/admins/annonce/edit/{id}', [AnnonceController::class,'edit'])->name('annonces.edit');
Route::post('/admins/annonce/update/{id}', [AnnonceController::class,'update'])->name('annonces.update');


Route::get('/admins/message', [MessageController::class,'index'])->name('messages.all');
Route::post('/admins/message/store', [MessageController::class,'store'])->name('messages.store');
Route::get('/admins/message/edit/{id}', [MessageController::class,'edit'])->name('messages.edit');
Route::post('/admins/message/update/{id}', [MessageController::class,'update'])->name('messages.update');


Route::get('/admins/contrat', [ContratController::class,'index'])->name('contrats.all');
Route::post('/admins/contrat/store', [ContratController::class,'store'])->name('contrats.store');
Route::get('/admins/contrat/edit/{id}', [ContratController::class,'edit'])->name('contrats.edit');
Route::post('/admins/contrat/update/{id}', [ContratController::class,'update'])->name('contrats.update');


Route::get('/admins/paiement', [PaiementController::class,'index'])->name('paiements.all');
Route::post('/admins/paiement/store', [PaiementController::class,'store'])->name('paiements.store');
Route::get('/admins/paiement/edit/{id}', [PaiementController::class,'edit'])->name('paiements.edit');
Route::post('/admins/paiement/update/{id}', [PaiementController::class,'update'])->name('paiements.update');


Route::get('/admins/notification', [NotificationController::class,'index'])->name('notifications.all');
Route::post('/admins/notification/store', [NotificationController::class,'store'])->name('notifications.store');
Route::get('/admins/notification/edit/{id}', [NotificationController::class,'edit'])->name('notifications.edit');
Route::post('/admins/notification/update/{id}', [NotificationController::class,'update'])->name('notifications.update');


Route::get('/admins/revenue', [RevenueController::class,'index'])->name('revenues.all');
Route::post('/admins/revenue/store', [RevenueController::class,'store'])->name('revenues.store');
Route::get('/admins/revenue/edit/{id}', [RevenueController::class,'edit'])->name('revenues.edit');
Route::post('/admins/revenue/update/{id}', [RevenueController::class,'update'])->name('revenues.update');


Route::get('/admins/souscription', [SouscriptionController::class,'index'])->name('souscriptions.all');
Route::post('/admins/souscription/store', [SouscriptionController::class,'store'])->name('souscriptions.store');
Route::get('/admins/souscription/edit/{id}', [SouscriptionController::class,'edit'])->name('souscriptions.edit');
Route::post('/admins/souscription/update/{id}', [SouscriptionController::class,'update'])->name('souscriptions.update');


Route::get('/admins/reglement', [ReglementController::class,'index'])->name('reglements.all');
Route::post('/admins/reglement/store', [ReglementController::class,'store'])->name('reglements.store');
Route::get('/admins/reglement/edit/{id}', [ReglementController::class,'edit'])->name('reglements.edit');
Route::post('/admins/reglement/update/{id}', [ReglementController::class,'update'])->name('reglements.update');


Route::get('/admins/vente', [VenteController::class,'index'])->name('ventes.all');
Route::post('/admins/vente/store', [VenteController::class,'store'])->name('ventes.store');
Route::get('/admins/vente/edit/{id}', [VenteController::class,'edit'])->name('ventes.edit');
Route::post('/admins/vente/update/{id}', [VenteController::class,'update'])->name('ventes.update');


Route::get('/admins/catalogue', [CatalogueController::class,'index'])->name('catalogues.all');
Route::post('/admins/catalogue/store', [CatalogueController::class,'store'])->name('catalogues.store');
Route::get('/admins/catalogue/edit/{id}', [CatalogueController::class,'edit'])->name('catalogues.edit');
Route::post('/admins/catalogue/update/{id}', [CatalogueController::class,'update'])->name('catalogues.update');


Route::get('/admins/bail', [BailController::class,'index'])->name('bails.all');
Route::post('/admins/bail/store', [BailController::class,'store'])->name('bails.store');
Route::get('/admins/bail/edit/{id}', [BailController::class,'edit'])->name('bails.edit');
Route::post('/admins/bail/update/{id}', [BailController::class,'update'])->name('bails.update');


Route::get('/admins/avis', [AvisController::class,'index'])->name('avis.all');
Route::post('/admins/avis/store', [AvisController::class,'store'])->name('avis.store');
Route::get('/admins/avis/edit/{id}', [AvisController::class,'edit'])->name('avis.edit');
Route::post('/admins/avis/update/{id}', [AvisController::class,'update'])->name('avis.update');


Route::get('/admins/reservation', [ReservationController::class,'index'])->name('reservations.all');
Route::post('/admins/reservation/store', [ReservationController::class,'store'])->name('reservations.store');
Route::get('/admins/reservation/edit/{id}', [ReservationController::class,'edit'])->name('reservations.edit');
Route::post('/admins/reservation/update/{id}', [ReservationController::class,'update'])->name('reservations.update');


Route::get('/admins/temoin', [TemoinController::class,'index'])->name('temoins.all');
Route::post('/admins/temoin/store', [TemoinController::class,'store'])->name('temoins.store');
Route::get('/admins/temoin/edit/{id}', [TemoinController::class,'edit'])->name('temoins.edit');
Route::post('/admins/temoin/update/{id}', [TemoinController::class,'update'])->name('temoins.update');


Route::get('/admins/reclamation', [ReclamationController::class,'index'])->name('reclamations.all');
Route::post('/admins/reclamation/store', [ReclamationController::class,'store'])->name('reclamations.store');
Route::get('/admins/reclamation/edit/{id}', [ReclamationController::class,'edit'])->name('reclamations.edit');
Route::post('/admins/reclamation/update/{id}', [ReclamationController::class,'update'])->name('reclamations.update');

Route::get('/admins/transaction', [TransactionController::class,'index'])->name('transactions.all');
Route::post('/admins/transaction/store', [TransactionController::class,'store'])->name('transactions.store');
Route::get('/admins/transaction/edit/{id}', [TransactionController::class,'edit'])->name('transactions.edit');
Route::post('/admins/transaction/update/{id}', [TransactionController::class,'update'])->name('transactions.update');


Route::get('/admins/visite', [VisiteController::class,'index'])->name('visites.all');
Route::post('/admins/visite/store', [VisiteController::class,'store'])->name('visites.store');
Route::get('/admins/visite/edit/{id}', [VisiteController::class,'edit'])->name('visites.edit');
Route::post('/admins/visite/update/{id}', [VisiteController::class,'update'])->name('visites.update');
    

Route::get('/admins/document', [DocumentController::class,'index'])->name('documents.all');
Route::post('/admins/document/store', [DocumentController::class,'store'])->name('documents.store');
Route::get('/admins/document/edit/{id}', [DocumentController::class,'edit'])->name('documents.edit');
Route::post('/admins/document/update/{id}', [DocumentController::class,'update'])->name('documents.update');


Route::get('/admins/role', [RoleController::class,'index'])->name('roles.all');
Route::post('/admins/role/store', [RoleController::class,'store'])->name('roles.store');
Route::get('/admins/role/edit/{id}', [RoleController::class,'edit'])->name('roles.edit');
Route::post('/admins/role/update/{id}', [RoleController::class,'update'])->name('roles.update');
