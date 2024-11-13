<?php

namespace App\Controllers;
use App\Models\M_adopsi;

class Home extends BaseController
{
    public function dashboard()
    {
        if (session()->get('level') > 0) {
       echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
          } else {
            return redirect()->to('home/login');
        }
    }

    public function user()
    {
          if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('user', 'id_user');
        $where = array('id_user' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('user', $data);
        echo view('footer');
         } else {
            return redirect()->to('home/login');
        }
    }

    public function tambah_user()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('user', 'id_user');
            echo view('header');
            echo view('menu');
            echo view('tambah_user', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_user()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('username');
        $c = $this->request->getPost('password');
        $d = $this->request->getPost('email');
        $e = $this->request->getPost('level');

        $isi = array(
            'username' => $b,
            'password' => $c,
            'email' => $d,
            'level' => $e
        );
        $model->tambah('user', $isi);

        return redirect()->to('home/user');
    }

    public function edit_user($id)
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $where = array('id_user' => $id);

            $data['satu'] = $model->getWhere('user', $where);
            echo view('header');
            echo view('menu');
            echo view('e_user', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_e_user()
    {
        $model = new M_adopsi();
        $a = $this->request->getPost('username');
        $b = $this->request->getPost('password');
        $c = $this->request->getPost('email');
        $d = $this->request->getPost('level');
        $id = $this->request->getPost('id');

        $where = array('id_user' => $id);

        $isi = array(
            'username' => $a,
            'password' => $b,
            'email' => $c,
            'level' => $d
        );

        $model->edit('user', $isi, $where);

        return redirect()->to('home/user');
    }

    public function hapus_user($id)
    {
        $model = new M_adopsi();
        $where = array('id_user' => $id);
        $model->hapus('user', $where);
        return redirect()->to('home/user');
    }

    public function kalendar()
    {
         if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('kalendar', 'id_kalendar');
        $where = array('id_kalendar' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('kalendar', $data);
        echo view('footer');
         } else {
            return redirect()->to('home/login');
        }
    }

    public function tambah_kalendar()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('kalendar', 'id_kalendar');
            echo view('header');
            echo view('menu');
            echo view('tambah_kalendar', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_kalendar()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('acara');
        $c = $this->request->getPost('deskripsi_acara');
        $d = $this->request->getPost('tanggal_mulai');
        $e = $this->request->getPost('pembuat_acara');

        $isi = array(
            'acara' => $b,
            'deskripsi_acara' => $c,
            'tanggal_mulai' => $d,
            'pembuat_acara' => $e
        );
        $model->tambah('kalendar', $isi);

        return redirect()->to('home/kalendar');
    }

   

    public function hapus_kalendar($id)
    {
        $model = new M_adopsi();
        $where = array('id_kalendar' => $id);
        $model->hapus('kalendar', $where);
        return redirect()->to('home/kalendar');
    }






    public function tugas()
    {
         if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('tugas', 'id_tugas');
        $where = array('id_tugas' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('tugas', $data);
        echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
    public function tambah_tugas()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('tugas', 'tambah_tugas');
            echo view('header');
            echo view('menu');
            echo view('tambah_tugas', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_tugas()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('judul');
        $c = $this->request->getPost('deskripsi');
        $d = $this->request->getPost('user');
        $e = $this->request->getPost('status_tugas');

        $isi = array(
            'judul' => $b,
            'deskripsi' => $c,
            'user' => $d,
            'status_tugas' => $e
        );
        $model->tambah('tugas', $isi);

        return redirect()->to('home/tugas');
    }
    public function edit_tugas($id)
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $where = array('id_tugas' => $id);

            $data['satu'] = $model->getWhere('tugas', $where);
            echo view('header');
            echo view('menu');
            echo view('e_tugas', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_e_tugas()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('judul');
        $c = $this->request->getPost('deskripsi');
        $d = $this->request->getPost('user');
        $e = $this->request->getPost('status_tugas');
        $id = $this->request->getPost('id');

        $where = array('id_tugas' => $id);

        $isi = array(
            'judul' => $b,
            'deskripsi' => $c,
            'user' => $d,
            'status_tugas' => $e
        );

        $model->edit('tugas', $isi, $where);

        return redirect()->to('home/tugas');
    }
    public function hapus_tugas($id)
    {
        $model = new M_adopsi();
        $where = array('id_tugas' => $id);
        $model->hapus('tugas', $where);
        return redirect()->to('home/tugas');
    }
    public function absensi()
    {
         if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('absensi', 'id_absensi');
        $where = array('id_absensi' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('absensi', $data);
        echo view('footer');
         } else {
            return redirect()->to('home/login');
        }
    }
    public function tambah_absensi()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('absensi', 'tambah_absensi');
            echo view('header');
            echo view('menu');
            echo view('tambah_absensi', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_t_absensi()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('nama');
        $c = $this->request->getPost('tanggal');
        $d = $this->request->getPost('status_absensi');

        $isi = array(
            'nama' => $b,
            'tanggal' => $c,
            'status_absensi' => $d
        );
        $model->tambah('absensi', $isi);

        return redirect()->to('home/absensi');
    }
    public function edit_absensi($id)
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $where = array('id_absensi' => $id);

            $data['satu'] = $model->getWhere('absensi', $where);
            echo view('header');
            echo view('menu');
            echo view('e_absensi', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }

    public function aksi_e_absensi()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('nama');
        $c = $this->request->getPost('tanggal');
        $d = $this->request->getPost('status_absensi');
        $id = $this->request->getPost('id');

        $where = array('id_absensi' => $id);

        $isi = array(
            'nama' => $b,
            'tanggal' => $c,
            'status_absensi' => $d
        );

        $model->edit('absensi', $isi, $where);

        return redirect()->to('home/absensi');
    }
    public function hapus_absensi($id)
    {
        $model = new M_adopsi();
        $where = array('id_absensi' => $id);
        $model->hapus('absensi', $where);
        return redirect()->to('home/absensi');
    }
 public function dokumen()
    {
         if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('dokumen', 'id_dokumen');
        $where = array('id_dokumen' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('dokumen', $data);
        echo view('footer');
           } else {
            return redirect()->to('home/login');
        }
    }
    public function tambah_dokumen()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('dokumen', 'tambah_dokumen');
            echo view('header');
            echo view('menu');
            echo view('tambah_dokumen', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
     public function aksi_t_dokumen()
{
    $model = new M_adopsi();
    $file = $this->request->getFile('file');
    $c = $this->request->getPost('user');
    $d = $this->request->getPost('penggugah');
    $e = $this->request->getPost('tanggal_dibuat');

    // Cek apakah file diunggah
    if ($file && $file->isValid() && !$file->hasMoved()) {
        // Simpan file ke dalam folder 'uploads'
        $filePath = 'uploads/' . $file->getRandomName();
        $file->move('uploads', $filePath);
        
        // Data yang akan disimpan ke database
        $isi = [
            'file_path' => $filePath,
            'user' => $c,
            'penggugah' => $d,
            'tanggal_dibuat' => $e
        ];

        // Simpan ke database
        $model->tambah('dokumen', $isi);
    }

    return redirect()->to('home/dokumen');
}
    public function edit_dokumen($id)
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $where = array('id_dokumen' => $id);

            $data['satu'] = $model->getWhere('dokumen', $where);
            echo view('header');
            echo view('menu');
            echo view('e_dokumen', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
      public function aksi_e_dokumen()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('file_path');
        $c = $this->request->getPost('user');
        $d = $this->request->getPost('penggugah');
        $e = $this->request->getPost('tanggal_dibuat');
        $id = $this->request->getPost('id');

        $where = array('id_dokumen' => $id);

        $isi = array(
            'file_path' => $b,
            'user' => $c,
            'penggugah' => $d,
            'tanggal_dibuat' => $e
        );

        $model->edit('dokumen', $isi, $where);

        return redirect()->to('home/dokumen');
    }
    public function hapus_dokumen($id)
    {
        $model = new M_adopsi();
        $where = array('id_dokumen' => $id);
        $model->hapus('dokumen', $where);
        return redirect()->to('home/dokumen');
    }
    public function surat()
    {
         if (session()->get('level') > 0) {
        $model = new M_adopsi();
        $data['manda'] = $model->tampil('surat', 'id_surat');
        $where = array('id_surat' => session()->get('id'));
        echo view('header');
        echo view('menu');
        echo view('surat', $data);
        echo view('footer');
           } else {
            return redirect()->to('home/login');
        }
    }
    public function tambah_surat()
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $data['manda'] = $model->tampil('surat', 'tambah_surat');
            echo view('header');
            echo view('menu');
            echo view('tambah_surat', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
     public function aksi_t_surat()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('subjek');
        $c = $this->request->getPost('isi');
        $d = $this->request->getPost('pengirim');
        $e = $this->request->getPost('penerima');
        $f = $this->request->getPost('status_surat');
        $g = $this->request->getPost('tanggal_surat');

        $isi = array(
            'subjek' => $b,
            'isi' => $c,
            'pengirim' => $d,
            'penerima' => $e,
            'status_surat' => $f,
            'tanggal_surat' => $g
        );
        $model->tambah('surat', $isi);

        return redirect()->to('home/surat');
    }
    public function edit_surat($id)
    {
        if (session()->get('level') > 0) {
            $model = new M_adopsi();
            $where = array('id_surat' => $id);

            $data['satu'] = $model->getWhere('surat', $where);
            echo view('header');
            echo view('menu');
            echo view('e_surat', $data);
            echo view('footer');
        } else {
            return redirect()->to('home/login');
        }
    }
      public function aksi_e_surat()
    {
        $model = new M_adopsi();
        $b = $this->request->getPost('subjek');
        $c = $this->request->getPost('isi');
        $d = $this->request->getPost('pengirim');
        $e = $this->request->getPost('penerima');
        $f = $this->request->getPost('status_surat');
        $g = $this->request->getPost('tanggal_surat');
        $id = $this->request->getPost('id');

        $where = array('id_surat' => $id);

        $isi = array(
            'subjek' => $b,
            'isi' => $c,
            'pengirim' => $d,
            'penerima' => $e,
            'status_surat' => $f,
            'tanggal_surat' => $g
        );

        $model->edit('surat', $isi, $where);

        return redirect()->to('home/surat');
    }
     public function hapus_surat($id)
    {
        $model = new M_adopsi();
        $where = array('id_surat' => $id);
        $model->hapus('surat', $where);
        return redirect()->to('home/surat');
    }

    public function login()
    {
        echo view('header');
        echo view('login');
    }

    public function aksi_login()
    {
        $u = $this->request->getPost('username');
        $p = $this->request->getPost('password');

        $model = new M_adopsi();
        $where = array(
            'username' => $u,
            'password' => $p
        );
        $cek = $model->getWhere('user', $where);
        if ($cek > 0) {
            session()->set('id_user', $cek->id_user);
            session()->set('username', $cek->username);
            session()->set('level', $cek->level);
            return redirect()->to('home/dashboard');
        } else {
            return redirect()->to('home');
        }
    }

    public function logout()
{
    session()->destroy();
    return redirect()->to('home/login');
}

}
