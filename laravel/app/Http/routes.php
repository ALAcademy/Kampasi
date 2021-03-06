<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Survey
Route::get('/tools/surveys', [
  'uses' => 'SurveyController@getSurveys',
  'as'   => 'get.surveys'
  ]);

//Survey monkey

Route::get('/apis/survey-monkey', [
  'uses' => 'APIController@getSurveyMonkey',
  'as'   => 'get.survey.monkey'
  ]);


//Anzisha prize
Route::get('/anzisha/twitter', function() {
  return view('anzisha.twitter');
});

//Pricing
Route::get('/pricing/packages', [
  'uses' => 'DashboardController@getPricing',
  'as' => 'get.pricing'
]);

Route::get('/maboneng', [
  'uses' => 'DashboardController@getMaboneng',
  'as' => 'get.maboneng'
]);

Route::get('/maboneng/users', [
  'uses' => 'DashboardController@getMabonengUsers',
  'as' => 'get.maboneng.users'
]);


//inventory routing
Route::get('/{school_username}/inventory', [
  'uses'       => 'InventoryController@getInventories',
  'as'         => 'get.inventories',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory', [
  'uses'       => 'InventoryController@postInventory',
  'as'         => 'post.inventory',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/settings/export/all', [
  'uses'       => 'InventoryController@getExportInventories',
  'as'         => 'get.export.inventories',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/settings', [
  'uses'       => 'InventoryController@getInventoriesSettings',
  'as'         => 'get.inventories.settings',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/{name}', [
  'uses'       => 'InventoryController@getInventory',
  'as'         => 'get.inventory',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{name}/add-item/{inventory_id}', [
  'uses'       => 'InventoryController@postItem',
  'as'         => 'post.item',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/{name}/export', [
  'uses'       => 'InventoryController@getExportInventory',
  'as'         => 'get.export.inventory',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/tools/delete-item/{item_id}', [
  'uses'       => 'InventoryController@deleteItem',
  'as'         => 'delete.item',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/add-inventory-admin', [
  'uses'       => 'InventoryController@postInventoryAdmin',
  'as'         => 'post.inventory.admin',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/tools/track-items-authority/{user_id}/{authority}', [
  'uses'       => 'InventoryController@postTrackItemsAuthority',
  'as'         => 'post.track.items.authority',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/tools/undo-delete-item/{item_id}', [
  'uses'       => 'InventoryController@getUndoDeleteItem',
  'as'         => 'get.undo.delete.item',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{name}/add-attribute/{inventory_id}', [
  'uses'       => 'InventoryController@postInventoryAttribute',
  'as'         => 'post.inventory.attribute',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/{inventory_name}/settings/all', [
  'uses'       => 'InventoryController@getInventorySettings',
  'as'         => 'get.inventory.settings',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{inventory_name}/settings/update-name', [
  'uses'       => 'InventoryController@postUpdateInventoryName',
  'as'         => 'post.update.inventory.name',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{inventory_name}/settings/delete', [
  'uses'       => 'InventoryController@postDeleteInventory',
  'as'         => 'post.delete.inventory',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/{inventory_name}/settings/remove-owner/{user_id}', [
  'uses'       => 'InventoryController@getRemoveInventoryOwner',
  'as'         => 'get.remove.inventory.owner',
  'middleware' => 'auth'
]);


Route::get('/{school_username}/inventory/{inventory_name}/{item_name}', [
  'uses'       => 'InventoryController@getItem',
  'as'         => 'get.item',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/{inventory_name}/{item_name}/edit-item', [
  'uses'       => 'InventoryController@getEditItem',
  'as'         => 'get.edit.item',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{inventory_name}/{item_name}/edit-item', [
  'uses'       => 'InventoryController@postEditItem',
  'as'         => 'post.edit.item',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/{inventory_name}/{item_name}/lend-item', [
  'uses'       => 'InventoryController@postLendItem',
  'as'         => 'post.lend.item',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/users/my-inventory/{user_username}', [
  'uses'       => 'InventoryController@getUserInventory',
  'as'         => 'get.user.inventory',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/users/my-allocated-costs/{user_username}', [
  'uses'       => 'InventoryController@getUserAllocatedCosts',
  'as'         => 'get.user.allocated.costs',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/tools/track/{item_id}', [
  'uses'       => 'InventoryController@getTrackItems',
  'as'         => 'get.track.items',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/track/items/item-returned', [
  'uses'       => 'InventoryController@postItemReturned',
  'as'         => 'post.item.returned',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/track/items/item-paid', [
  'uses'       => 'InventoryController@postItemPaid',
  'as'         => 'post.item.paid',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/track/items/all-items-paid', [
  'uses'       => 'InventoryController@postAllItemsPaid',
  'as'         => 'post.all.items.paid',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/track/items/item-missing', [
  'uses'       => 'InventoryController@postItemMissing',
  'as'         => 'post.item.missing',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/inventory/tools/add/owner', [
  'uses'       => 'InventoryController@postInventoryOwner',
  'as'         => 'post.inventory.owner',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/inventory/tools/search/all', [
  'uses'       => 'InventoryController@getSearchInventory',
  'as'         => 'get.search.inventory',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/export', [
  'uses'       => 'InventoryController@exportExcel',
  'as'         => 'export.excel',
  'middleware' => 'auth'
]);

//Tutoring routing
Route::get('/{school_username}/tutoring', [
  'uses' => 'TutoringController@getTutoring',
  'as'   => 'get.tutoring',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/tutoring/tutors', [
  'uses' => 'TutoringController@getTutors',
  'as'   => 'get.tutors',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/tutoring/tutors/{tutor_id}', [
  'uses' => 'TutoringController@getDeleteTutor',
  'as'   => 'get.delete.tutor',
  'middleware' => 'auth'
]);

Route::get('/{school_username}/tutoring/actions/signup/{tutoring_id}', [
  'uses' => 'TutoringController@getSignupTutoring',
  'as'   => 'get.signup.tutoring',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/tutoring/actions/post-tutoring', [
  'uses' => 'TutoringController@postTutoring',
  'as'   => 'post.tutoring',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/tutoring/actions/post-tutor', [
  'uses' => 'TutoringController@postTutor',
  'as'   => 'post.tutor',
  'middleware' => 'auth'
]);

Route::post('/{school_username}/tutoring/actions/post-tutor-subject', [
  'uses' => 'TutoringController@postTutorSubject',
  'as'   => 'post.tutor.subject',
  'middleware' => 'auth'
]);

Route::get('{school_username}/tutoring/actions/tutor-not-here/{tutoring_id}', [
  'uses' => 'TutoringController@tutorNotHere',
  'as' => 'tutor.not.here',
  'middleware' => 'auth'
]);

Route::get('{school_username}/tutoring/actions/tutee-not-here/{tutoring_id}', [
  'uses' => 'TutoringController@tuteeNotHere',
  'as' => 'tutee.not.here',
  'middleware' => 'auth'
]);

//community art project
Route::get('/community-art-project/soul-mate', [
  'uses' => 'SoulMateController@getSoulMate',
  'as'   => 'get.soul.mate'
]);

Route::get('/community-art-project/soul-mate/post-soul-mate/{name}/{answers}', [
  'uses' => 'SoulMateController@postSoulMate',
  'as'   => 'post.soul.mate'
]);

Route::get('/community-art-project/soul-mate/proccess-soul-mate', [
  'uses' => 'SoulMateController@proccessSoulMate',
  'as'   => 'proccess.soul.mate'
]);

Route::get('/community-art-project/soul-mate/result', [
  'uses' => 'SoulMateController@getSoulMateResult',
  'as'   => 'get.soul.mate.result'
]);

Route::get('/community-art-project/soul-mate/matching/{id}', [
  'uses' => 'SoulMateController@getMatching',
  'as'   => 'get.matching'
]);

//testing route
Route::get('/testing/url', [
  'uses' => 'TestingController@testingUrl',
  'as' => 'testing.url'
]);

Route::get('/testing/fake-login', [
  'uses' => 'TestingController@fakeLogin',
  'as' => 'fake.login'
]);

//terms and privacy
Route::get('/info/privacy-policy', function(){
  return view('about.privacy-policy');
})->name('get.privacy.policy');

Route::get('/info/terms-of-service', function(){
  return view('about.terms-of-service');
})->name('get.terms.of.service');

//notifications routing
Route::get('/account/notifications', [
  'uses' => 'NotificationController@getNotifications',
  'as' => 'get.notifications',
  'middleware' => 'auth'
]);

//Staffulty routing
Route::get('/data/staffulty', [
  'uses' => 'UserController@getStaffulty',
  'as' => 'get.staffulty',
  'middleware' => 'auth'
]);

Route::post('/data/staffulty', [
  'uses' => 'UserController@postStaffulty',
  'as' => 'post.staffulty',
  'middleware' => 'auth'
]);

//Read more routing
Route::get('/info/about', [
  'uses' => 'DashboardController@getAbout',
  'as' => 'about.us'
]);

//Search routing
Route::get('/tools/search-members', [
  'uses' => 'UserController@searchMembers',
  'as' => 'search.members'
]);

//Main routes
Route::get('/', [
  'uses' => 'DashboardController@getWelcome',
  'as'  => 'home'
]);

Route::get('/{username}', [
  'uses' => 'DashboardController@getDashboard',
  'as' => 'dashboard',
  'middleware' => 'auth'
]);


Route::get('/testing/mention', function() {
  return view('mention');
});

//elections routing
/*Route::get('/{username}/elections', [
  'uses' => 'ElectionsController@getElections',
  'as'   => 'get.elections'
]);*/

/*Route::get('/{username}/elections/{election_username}', [
  'uses' => 'ElectionsController@getElection',
  'as'  =>  'get.election'
]);*/

/*Route::get('/{username}/elections/actions/endorse/{election_id}', [
  'uses' => 'EndorsementController@endorse',
  'as'  =>  'endorse'
]);*/

Route::get('/tools/elections/{date}', [
  'uses' => 'ElectionsController@getElections',
  'as'   => 'get.elections',
  'middleware' => 'auth'
 ]);

Route::post('/tools/elections/{date}/actions/post-run', [
  'uses' => 'ElectionsController@postRun',
  'as'   => 'post.run',
  'middleware' => 'auth'
 ]);

Route::post('/tools/elections/{date}/actions/vote', [
  'uses' => 'ElectionsController@postVote',
  'as'   => 'post.vote',
  'middleware' => 'auth'
 ]);

Route::post('/tools/elections/{date}/actions/post-elections-comment', [
  'uses' => 'ElectionsController@postElectionsComment',
  'as'   => 'post.elections.comment',
  'middleware' => 'auth'
 ]);

Route::post('/tools/elections/{date}/actions/post-candidate-description', [
  'uses' => 'ElectionsController@postCandidateDescription',
  'as'   => 'post.candidate.description',
  'middleware' => 'auth'
 ]);

Route::get('/tools/elections/{date}/{candidate_username}', [
  'uses' => 'ElectionsController@getCandidate',
  'as'   => 'get.candidate',
  'middleware' => 'auth'
 ]);

Route::get('/tools/elections/{date}/report/votes', [
  'uses' => 'ElectionsController@getReport',
  'as'   => 'get.elections.report',
  'middleware' => 'auth'
 ]);


//FaceSwap routing
Route::get('/{username}/itrep', [
  'uses' => 'FaceSwapController@getFaceSwap',
  'as'   => 'get.face.swap'
]);

//Classrooms routing
Route::get('/{username}/classrooms', [
  'uses' => 'ClassroomController@getClassrooms',
  'as' => 'get.classrooms',
  'middleware' => ['auth', 'enrolledToSchool']
]);

Route::get('/{username}/classrooms/{classroom_username}', [
  'uses' => 'ClassroomController@getClassroom',
  'as' => 'get.classroom',
  'middleware' => ['auth', 'validUrl', 'enrolledToClassroom']
]);

//Question routing
Route::post('/actions/post-question', [
  'uses' => 'QuestionController@postQuestion',
  'as' => 'post.question'
]);

//Answer routing
Route::post('/actions/post-answer', [
  'uses' => 'AnswerController@postAnswer',
  'as' => 'post.answer'
]);

//Correct routing
Route::post('/actions/correct', [
  'uses' => 'CorrectController@postCorrect',
  'as' => 'post.correct'
]);

//offCampusUsersDuringPrep
Route::get('/data/offcampusduringprep', [
  'uses' => 'UserController@getOffCampusUsersDuringPrep',
  'as' => 'get.off.campus.during.prep',
  'middleware' => 'auth'
]);

//money
Route::post('/tools/transactions/actions/transfer-money', [
  'uses' => 'TransactionController@postTransferMoney',
  'as' => 'post.transfer.money',
  'middleware' => 'auth'
]);

//off campus
Route::get('/tools/off-campus/{status}', [
  'uses' => 'OffCampusController@getOffCampus',
  'as' => 'off.campus',
  'middleware' => 'auth'
]);

Route::post('/tools/off-campus', [
  'uses' => 'OffCampusController@postOffCampusRequest',
  'as' => 'off.campus.request',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/request/{request_id}', [
  'uses' => 'OffCampusController@getOffCampusRequest',
  'as' => 'get.off.campus.request',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/actions/manage-external-chaperones', [
  'uses' => 'OffCampusController@getExternalChaperones',
  'as' => 'get.external.chaperones',
  'middleware' => 'auth'
]);

Route::post('/tools/off-campus/actions/manage-external-chaperones', [
  'uses' => 'OffCampusController@postExternalChaperone',
  'as' => 'post.external.chaperone',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/actions/approve-external-chaperone/{chaperone_id}', [
  'uses' => 'OffCampusController@getApproveExternalChaperone',
  'as' => 'get.approve.external.chaperone',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/actions/off-campus-list', [
  'uses' => 'OffCampusController@getOffCampusList',
  'as' => 'get.off.campus.list',
  'middleware' => 'auth'
]);

Route::post('/tools/off-campus/actions/available-chaperones', [
  'uses' => 'OffCampusController@postAvailableChaperones',
  'as' => 'post.available.chaperones',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/driver-accept-request/{chaperon}', [
  'uses' => 'OffCampusController@getDriverAcceptRequest',
  'as' => 'driver.accept.request',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/driver-decline-request/{chaperon}', [
  'uses' => 'OffCampusController@getDriverDeclineRequest',
  'as' => 'driver.decline.request',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/student-life-response/{response}', [
  'uses' => 'OffCampusController@getStudentLifeResponse',
  'as' => 'student.life.response',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/teacher-response/{absence_id}/{response}', [
  'uses' => 'OffCampusController@getTeacherResponse',
  'as' => 'get.teacher.response',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/security-response/{response}', [
  'uses' => 'OffCampusController@getSecurityResponse',
  'as' => 'security.response',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/confirm-departure', [
  'uses' => 'OffCampusController@confirmDeparture',
  'as' => 'confirm.departure',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/confirm-arrival', [
  'uses' => 'OffCampusController@confirmArrival',
  'as' => 'confirm.arrival',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/presence/{user_id}', [
  'uses' => 'OffCampusController@presence',
  'as' => 'presence',
  'middleware' => 'auth'
]);

Route::get('/tools/off-campus/{request_id}/not-return/{user_id}', [
  'uses' => 'OffCampusController@notReturn',
  'as' => 'not.return',
  'middleware' => 'auth'
]);

//Saturday b routing

Route::get('/tools/saturday', [
    'uses' => 'PrepController@getSaturday',
    'as' => 'get.saturday',
    'middleware' => 'auth'
  ]);


Route::get('/tools/reporting', [
    'uses' => 'PrepController@reporting',
    'as' => 'reporting',
    'middleware' => 'auth'
  ]);

//Prep routing
Route::get('/tools/prep-signup/{place}', [
  'uses' => 'PrepController@getPrep',
  'as' => 'get.prep',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/report/{date}', [
  'uses' => 'PrepController@getPrepReport',
  'as' => 'get.prep.report',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/reports/{date}', [
  'uses' => 'PrepController@getPrepReports',
  'as' => 'get.prep.reports',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/report/actions/redirect-prep-date', [
  'uses' => 'PrepController@getRedirectPrepDate',
  'as' => 'get.redirect.prep.date',
  'middleware' => 'auth'
]);


Route::get('/tools/prep-signup/history/bla', [
  'uses' => 'PrepController@getPrepHistoryBla',
  'as' => 'get.prep.history.bla',
  'middleware' => 'auth'
]);

Route::post('/tools/prep-signup/', [
  'uses' => 'PrepController@postPrep',
  'as' => 'post.prep',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/actions/post-mass-prep', [
  'uses' => 'PrepController@postMassPrep',
  'as' => 'post.mass.prep',
  'middleware' => 'auth'
]);

Route::post('/tools/prep-signup/post-night-watchers', [
  'uses' => 'PrepController@postNightWatchers',
  'as' => 'post.night.watchers',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/prep-not-here/{user_id}', [
  'uses' => 'PrepController@prepNotHere',
  'as' => 'prep.not.here',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/prep-not-here-undo/{user_id}', [
  'uses' => 'PrepController@prepNotHereUndo',
  'as' => 'prep.not.here.undo',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/history/all', [
  'uses' => 'PrepController@getPrepHistory',
  'as' => 'get.prep.history',
  'middleware' => 'auth'
]);

Route::get('/tools/prep-signup/actions/update-prep-place', [
  'uses' => 'PrepController@updatePrepPlace',
  'as' => 'update.prep.place',
  'middleware' => 'auth'
]);

//members routing
Route::get('/data/members/{filter}', [
  'uses' => 'UserController@getMembers',
  'as' => 'get.members',
  'middleware' => 'auth'
]);

Route::get('/data/members/all/create', [
  'uses' => 'UserController@getCreateUserManually',
  'as' => 'get.create.user.manually'
]);

Route::get('/data/members/all/manage', [
  'uses' => 'AdminController@getManageUsers',
  'as' => 'get.manage.users',
  'middleware' => 'auth'
]);

Route::get('/data/members/all/manage/{username}', [
  'uses' => 'AdminController@getManageUser',
  'as' => 'get.manage.user',
  'middleware' => 'auth'
]);

Route::post('/data/members/all/manage/{username}/update', [
    'uses' => 'AdminController@postUpdateUser',
    'as'   => 'post.update.user',
    'middleware' => 'auth'
  ]);

Route::post('/data/members/all/create', [
  'uses' => 'UserController@postCreateUserManually',
  'as' => 'post.create.user.manually',
  'middleware' => 'auth'
]);

Route::get('/actions/update/phone-privacy', [
  'uses' => 'UserController@getPhonePrivacy',
  'as' => 'get.phone.privacy',
  'middleware' => 'auth'
]);

//Ms. T routing
Route::post('/actions/upload/masterpiece', [
  'uses' => 'MasterpieceController@postMasterpiece',
  'as' => 'post.masterpiece',
  'middleware' => 'auth'
]);

Route::get('/tools/masterpieces', [
  'uses' => 'MasterpieceController@getMasterpieces',
  'as' => 'get.masterpieces',
  'middleware' => 'auth'
]);

Route::get('/tools/masterpieces/{id}', [
  'uses' => 'MasterpieceController@getMasterpiece',
  'as' => 'get.masterpiece',
  'middleware' => 'auth'
]);



//User dashboard routing
Route::post('/actions/exit-card/date-departing', [
  'uses' => 'InventoryController@postDateDeparting',
  'as' => 'post.date.departing',
  'middleware' => 'auth'
]);

Route::post('/actions/exit-card/time-departing', [
  'uses' => 'InventoryController@postTimeDeparting',
  'as' => 'post.time.departing',
  'middleware' => 'auth'
]);


Route::get('/actions/get-avatar/{avatar_name}', [
  'uses' => 'UserController@getAvatar',
  'as' => 'get.avatar'
]);

//birthdate routing
Route::post('/actions/birthdate', [
  'uses' => 'UserController@postBirthdate',
  'as' => 'post.birthdate'
]);

//delete account routing
Route::get('/actions/delete-account/{id}', [
  'uses' => 'UserController@deleteAccount',
  'as'   => 'delete.account'
]);


//Account system routing

Route::get('/account/login', [
  'uses' => 'UserController@getLogin',
  'as' => 'get.login',
  'middleware' => 'guest'
]);

Route::post('/account/login', [
  'uses' => 'UserController@postLogin',
  'as' => 'post.login',
  'middleware' => 'guest'
]);

Route::get('/account/signup', [
  'uses' => 'UserController@getSignup',
  'as' => 'get.signup',
  'middleware' => 'guest'
]);

Route::get('/account/landingPage', [
  'uses' => 'UserController@getLandingPage',
  'as' => 'get.landing.page',
  'middleware' => 'guest'
]);

Route::post('/account/signup', [
  'uses' => 'UserController@postSignup',
  'as' => 'post.signup',
  'middleware' => 'guest'
]);

Route::get('/account/staffulty-signup', [
  'uses' => 'UserController@getStaffultySignup',
  'as' => 'get.staffulty.signup',
  'middleware' => 'guest'
]);

Route::post('/account/staffulty-signup', [
  'uses' => 'UserController@postStaffultySignup',
  'as' => 'post.staffulty.signup',
  'middleware' => 'guest'
]);

Route::post('account/google-signup', [
  'uses' => 'UserController@postGoogleSignup',
  'as' => 'post.google.signup',
  'middleware' => 'guest'
]);

Route::get('/account/logout', [
  'uses' => 'UserController@logout',
  'as' => 'logout',
  'middleware' => 'auth'
]);

Route::get('/account/forgot-password', [
  'uses' => 'UserController@getForgotPassword',
  'as' => 'get.forgot.password',
  'middleware' => 'guest'
]);

Route::post('/account/forgot-password', [
  'uses' => 'UserController@postForgotPassword',
  'as' => 'post.forgot.password',
  'middleware' => 'guest'
]);

Route::get('/account/reset-password/', [
  'uses' => 'UserController@getResetPassword',
  'as' => 'get.reset.password',
  'middleware' => 'guest'
]);

Route::post('/account/reset-password/', [
  'uses' => 'UserController@postResetPassword',
  'as' => 'post.reset.password',
  'middleware' => 'guest'
]);

Route::post('/account/edit-avatar', [
  'uses' => 'UserController@postEditAvatar',
  'as' => 'edit.avatar',
  'middleware' => 'auth'
]);

Route::post('/account/edit-bio', [
  'uses' => 'UserController@postEditBio',
  'as' => 'edit.bio',
  'middleware' => 'auth'
]);

Route::post('/account/change-password', [
  'uses' => 'UserController@postChangePassword',
  'as' => 'change.password',
  'middleware' => 'auth'
]);


Route::post('/account/update-password', [
  'uses' => 'UserController@postUpdateEmail',
  'as' => 'post.update.email',
  'middleware' => 'auth'
]);


//Notification routing
Route::post('/account/proccess-notification', [
  'uses' => 'NotificationController@proccessNotification',
  'as' => 'proccess.notification',
  'middleware' => 'auth'
]);

//DSC routing
Route::get('/tools/dsc', [
  'uses' => 'DscController@getDSC',
  'as' => 'get.dsc',
  'middleware' => 'auth'
]);

Route::get('/tools/dsc/updates', [
  'uses' => 'DscController@getDSCUpdates',
  'as' => 'get.dsc.updates',
  'middleware' => 'auth'
]);

Route::get('/tools/dsc/create', [
  'uses' => 'DscController@getCreateDSC',
  'as' => 'get.create.dsc',
  'middleware' => 'auth'
]);

Route::post('/tools/dsc/actions/create', [
  'uses' => 'DscController@postCreateDSC',
  'as' => 'post.create.dsc',
  'middleware' => 'auth'
]);

Route::get('/tools/dsc/{dsc_id}', [
  'uses' => 'DscController@getDSCProject',
  'as' => 'get.dsc.project',
  'middleware' => 'auth'
]);

Route::get('/actions/get-dsc-photo/{photo_name}', [
  'uses' => 'DscController@getDscPhoto',
  'as' => 'get.dsc.photo'
]);

Route::get('/actions/get-dsc-update-photo/{photo_name}', [
  'uses' => 'DscController@getDscUpdatePhoto',
  'as' => 'get.dsc.update.photo'
]);

Route::get('/actions/endorse-dsc/{dsc_id}', [
  'uses' => 'dscEndorsementController@getEndorse',
  'as' => 'get.dsc.endorse'
]);

Route::post('/actions/post-dsc-update/{dsc_id}', [
  'uses' => 'DscController@postDscUpdate',
  'as' => 'post.dsc.update'
]);

Route::post('/actions/update-dsc-progress/{dsc_id}', [
  'uses' => 'DscController@updateDscProgress',
  'as' => 'update.dsc.progress'
]);

//Feedback system routing
Route::get('/tools/feedback', [
  'uses' => 'FeedbackController@getFeedbacks',
  'as' => 'get.feedbacks',
  'middleware' => 'auth'
]);

Route::get('/tools/feedback/actions/post-feedback', [
  'uses' => 'FeedbackController@postFeedback',
  'as' => 'post.feedback',
  'middleware' => 'auth'
]);

Route::get('/tools/feedback/{username}', [
  'uses' => 'FeedbackController@getFeedback',
  'as' => 'get.feedback',
  'middleware' => 'auth'
]);

Route::post('/tools/feedback/actions/post-comment/{feedback_id}', [
  'uses' => 'FeedbackController@postFeedbackComment',
  'as' => 'post.feedback.comment',
  'middleware' => 'auth'
]);

Route::get('/tools/feedback/actions/support/{support}/{feedback_id}', [
  'uses' => 'FeedbackController@getSupportFeedback',
  'as' => 'get.support.feedback',
  'middleware' => 'auth'
]);

Route::get('/tools/feedback/actions/content-checker', [
  'uses' => 'FeedbackController@getFeedbackContentChecker',
  'as' => 'get.content.feedback.checker',
  'middleware' => 'auth'
]);

Route::get('/tools/feedback/actions/resolve-feedback/{feedback_id}', [
  'uses' => 'FeedbackController@getResolveFeedback',
  'as' => 'get.resolve.feedback',
  'middleware' => 'auth'
]);

//Schedule routing goes here
Route::get('/tools/schedule/subjects', [
  'uses' => 'SubjectController@getSubjects',
  'as' => 'get.subjects',
  'middleware' => 'auth'
]);

Route::get('/tools/schedule/mentors', [
  'uses' => 'MentorController@getMentors',
  'as' => 'get.mentors',
  'middleware' => 'auth'
]);

/*Route::get('/tools/schedule/classrooms', [
  'uses' => 'ClassroomController@getClassrooms',
  'as' => 'get.classrooms',
  'middleware' => 'auth'
]);*/

Route::get('/tools/schedule/days', [
  'uses' => 'ScheduleController@getScheduleDays',
  'as' => 'get.schedule.days',
  'middleware' => 'auth'
]);

Route::get('/tools/schedule', [
  'uses' => 'ScheduleController@getSchedule',
  'as' => 'get.schedule',
  'middleware' => 'auth'
]);

//language routes
Route::get('/language/change-language/{lang}', [
  'uses' => 'LanguageController@changeLanguage',
  'as'   => 'change.language',
  'middleware' => 'language'

]);

//Errors routing goes Here
Route::get('/503', function() {
  return view('errors.503');
})->name('503');
