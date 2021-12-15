<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TukarModel;

class Tukar extends BaseController
{
  protected $userModel, $tukarModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
    $this->tukarModel = new TukarModel();
  }

  public function pesan()
  {
    if (!$this->validate([
      'lokasi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.'
        ]
      ],
      'jumlah' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi'
        ]
      ]
    ])) {
      return redirect()->to(base_url('/tukar/' . session()->get('username')))->withInput()->with('validation', \Config\Services::validation());
    }

    $n = 8;
    $result = bin2hex(random_bytes($n));

    $this->tukarModel->insert([
      'id' => $result,
      'username' => session()->get('username'),
      'lokasi' => $this->request->getVar('lokasi'),
      'jumlah' => $this->request->getVar('jumlah'),
      'status' => 'Pending'
    ]);

    session()->setFlashdata('pesan', 'Berhasil dipesan.');
    return redirect()->to(base_url('/dashboard/' . session()->get('username')));
  }

  public function button($id)
  {
    $row = $this->tukarModel->getId($id);

    $data = [
      'username' => $row['username'],
      'lokasi' => $row['lokasi'],
      'jumlah' => $row['jumlah'],
      'status' => $this->request->getVar('button'),
    ];

    $row2 = $this->userModel->find($row['username']);
    $res = (int)$row2['jumlahtukar'] + 1;

    $d2 = [
      'jumlahtukar' => strval($res)
    ];

    $this->userModel->update($row['username'], $d2);

    $this->tukarModel->save($data);
    return redirect()->to(base_url('/admin/tukar-list'));
  }
}
