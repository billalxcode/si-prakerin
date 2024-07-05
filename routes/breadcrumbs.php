<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbsTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbsTrail $trail) {
    $trail->push('Home', route('dashboard.home'));
});

Breadcrumbs::for('donasi', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Donasi', route('dashboard.donasi'));
});

Breadcrumbs::for('jurusan', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Jurusan', route('dashboard.jurusan.table'));
});

Breadcrumbs::for('guru', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Guru', route('dashboard.guru.table'));
});

Breadcrumbs::for('kelas', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Kelas', route('dashboard.kelas.table'));
});

Breadcrumbs::for('siswa', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Siswa', route('dashboard.siswa.table'));
});

Breadcrumbs::for('industri', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Industri', route('dashboard.industri.table'));
});

Breadcrumbs::for('agenda', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Agenda', route('dashboard.agenda.table'));
});

Breadcrumbs::for('penempatan', function (BreadcrumbsTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Penempatan', route('dashboard.penempatan.table'));
});