<?php

/**
 * List Routes
 **/

$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('auth_admin', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('logout', '/admin/logout', 'AdminController:logout');

//Pages Routes
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('page-create', '/admin/pages/create/', 'PageController:create');
$this->router->add('page-edit', '/admin/pages/edit/(id:int)', 'PageController:edit');

$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');

// Posts Routes (POST)
$this->router->add('posts', '/admin/posts/', 'PostController:listing');
$this->router->add('post-create', '/admin/posts/create/', 'PostController:create');
$this->router->add('post-edit', '/admin/posts/edit/(id:int)', 'PostController:edit');

$this->router->add('post-add', '/admin/post/add/', 'PostController:add', 'POST');
$this->router->add('post-update', '/admin/post/update/', 'PostController:update', 'POST');

//Settings Routes
$this->router->add('settings-general', '/admin/setting/general/', 'SettingController:general');
$this->router->add('settings-update', '/admin/setting/update/', 'SettingController:updateSetting', 'POST');