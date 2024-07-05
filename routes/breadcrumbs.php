<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbsTrail;

Breadcrumbs::for('home', function (BreadcrumbsTrail $trail) {
    $trail->push('Home', route('dashboard.home'));
});

Breadcrumbs::for('jurusan', function (BreadcrumbsTrail $trail) {
    $trail->parent('home');
    $trail->push('Jurusan', route('dashboard.jurusan.table'));
});

Breadcrumbs::for('guru', function (BreadcrumbsTrail $trail) {
    $trail->parent('home');
    $trail->push('Guru', route('dashboard.guru.table'));
});

Breadcrumbs::for('kelas', function (BreadcrumbsTrail $trail) {
    $trail->parent('home');
    $trail->push('Kelas', route('dashboard.kelas.table'));
});

Breadcrumbs::for('siswa', function (BreadcrumbsTrail $trail) {
    $trail->parent('home');
    $trail->push('Siswa', route('dashboard.siswa.table'));
});